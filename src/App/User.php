<?php
namespace App;

use App\Helpers\StringHelper;

class User
{
  use StringHelper;

  private $firstName, $lastName;

  public function __construct($firstName, $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function getFirstName()
  {
    return $this->tidy($this->firstName);
  }

  public function getLastName()
  {
    return $this->tidy($this->lastName);
  }

  public function getFullName()
  {
    return $this->concat($this->firstName, $this->lastName);
  }
}
