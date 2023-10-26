<?php
class komputer
{
  public function __construct()
  {
    echo "Constructor dari class komputer <br>";
  }
}

class laptop extends komputer
{
  public function __construct()
  {
    parent::__construct();
    echo "Constructor dari class laptop <br>";
  }
}

class chromebook extends laptop
{
  public function __construct()
  {
    parent::__construct();
    echo "Constructor dari class chromebook <br>";
  }
}

$gadget_baru = new chromebook();
echo "Belajar OOP PHP";
