<?php

class login
{
  public $username;
  public $password;

  public function __construct($username, $password)
  {
    $this->username = $username;
    $this->password = $password;
  }

  public function keterangan()
  {
    echo "Anda login atas nama {$this->username} serta pass {$this->password}";
  }
}
