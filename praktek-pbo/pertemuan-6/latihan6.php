<?php

abstract class user
{
  abstract protected function showname();
  abstract public function showgreeting($greeting);

  public function showbio()
  {
    echo "this is ma bio <br>";
    echo "my name is " . $this->showname();
  }
}

class admin extends user
{
  public function showname()
  {
    return "Bagus admin";
  }

  public function showgreeting($greeting, $address = "Banjar")
  {
    return $greeting . ", my name is " . $this->showname() . " from " . $address;
  }
}

class editor extends user
{
  public function showname()
  {
    return "Andre editor";
  }

  public function showgreeting($greeting, $address = "Banjar")
  {
    return $greeting . ", my name is " . $this->showname() . " from " . $address;
  }

  public function showbio()
  {
    echo "this is bio from " . $this->showname();
  }
}

class reporter extends user
{
  public function showname()
  {
    return "Bambang reporter";
  }

  public function showgreeting($greeting, $address = "Banjar")
  {
    return $greeting . ", my name is " . $this->showname() . " from " . $address;
  }
}

$admin = new admin;
$editor = new editor;
$reporter = new reporter;

echo $admin->showgreeting("Good morning", "Bandung") . "<br>";
echo $admin->showbio() . "<br><br>";

echo $admin->showgreeting("Good night", "Jayapura") . "<br>";
echo $admin->showbio() . "<br><br>";

echo $admin->showgreeting("Good evening", "Maluku") . "<br>";
echo $admin->showbio() . "<br><br>";
