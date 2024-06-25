<?php

class UserException extends Exception {}

// Исключения
class UserLoginException extends UserException {
  protected $message = "Wrong login";
}

class UserPasswordException extends UserException {
  protected $message = "Wrong password";
}

class User {
  public $sql;

  public function addUser(string $login, string $password) {
    if (strlen($login) > 12 || strlen($login) < 3) {
      throw new UserLoginException;
    }

    if (strlen($password) > 12 || strlen($password) < 3) {
      throw new UserPasswordException;
    }

    $this->sql = "INSERT INTO users VALUES('', {$login}, {$password})";
    return true;
  }
}

try {
  $user = new User();
  $result = $user->addUser("Misha", "1234123412341234");
  echo "User was added";
} catch(UserException $e) {
  die($e->getMessage());
}

?>