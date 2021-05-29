<?php
declare(strict_types=1);

require_once 'class/traits/AppUserAuthentication.php';
require_once 'class/traits/MobileUserAuthentication.php';

class Authentication
{
  use AppUserAuthentication, MobileUserAuthentication {
    AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
    AppUserAuthentication::authenticate as authAppUser;
    MobileUserAuthentication::authenticate as authMobileUser;
  }

  public function authenticate(): void
  {
    do {
      echo 'Login: ';
      $login = trim(fgets(STDIN));
      if ($login === '') {
        echo "Login can't be empty" . PHP_EOL;
      }
    } while ($login === '');

    do {
      echo 'Password: ';
      $password = trim(fgets(STDIN));
      if ($password === '') {
        echo "Password can't be empty" . PHP_EOL;
      }
    } while ($password === '');

    if ($this->authAppUser($login, $password)) {
      echo 'Successfully login as App User';
      return;
    }

    if ($this->authMobileUser($login, $password)) {
      echo 'Successfully login as Mobile User';
      return;
    }

    echo 'Invalid login or password.';
  }
}