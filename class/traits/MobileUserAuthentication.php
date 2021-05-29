<?php
declare(strict_types=1);

trait MobileUserAuthentication
{
  private string $mobileUserLogin = 'mobileUser';
  private string $mobileUserPassword = 'password123';

  public function authenticate(string $login, $password): bool
  {
    return $this->mobileUserLogin === $login && $this->mobileUserPassword === $password;
  }
}