<?php

interface kendaraan
{
  public function getRoda();
}

interface motor
{
  public function getWarna();
}

class motorSport implements motor, kendaraan
{
  public function getWarna()
  {
    return "Berasal dari method getWarna() di class : Motor Sport";
  }
  public function getRoda()
  {
    return "Berasal dari method " . __METHOD__ . "di class : " . __CLASS__;
  }
}

$motorSport = new motorSport();
echo $motorSport->getWarna();
echo "<br>";
echo $motorSport->getRoda();
