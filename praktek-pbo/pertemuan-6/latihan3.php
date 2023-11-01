<?php
abstract class user
{
  abstract protected function showName();
}

class admin extends user
{
  public function showName()
  {
    return "Angga";
  }

  public function showGreeting($greeting, $address = "Medan")
  {
    return $greeting . ", nama saya adalah " . $this->showName() . " dari " . $address;
  }
}

$class = new admin;

echo $class->showGreeting("Selamat Pagi");
