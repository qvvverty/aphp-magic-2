<?php
declare(strict_types=1);

trait AppUserAuthentication
{
  private string $appUserLogin = 'appUser';
  private string $appUserPassword = 'password123';

  public function authenticate(string $login, $password): bool
  {
    return $this->appUserLogin === $login && $this->appUserPassword === $password;
  }
}