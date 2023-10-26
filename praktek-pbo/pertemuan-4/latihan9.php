<?php
class komputer
{
  public function __destruct()
  {
    echo "Destructor dari class komputer <br>";
  }
}

class laptop extends komputer
{
  public function __destruct()
  {
    parent::__destruct();
    echo "Destructor dari class laptop <br>";
  }
}

class chromebook extends laptop
{
  public function __destruct()
  {
    parent::__destruct();
    echo "Destructor dari class chromebook <br>";
  }
}

$gadget_baru = new chromebook();
echo "Belajar OOP PHP <br>";
