<?php

class Users {

  // user properties
  $firstName, $lastName, $email, $password, $title, $landGrantArea, $landGrantSpecificArea;

  //declare methods
  function setFirstName($firstName) {
    $this->firstName = $firstName;
  }

  function getFirstName() {
    return $this->firstName;
  }
}

?>
