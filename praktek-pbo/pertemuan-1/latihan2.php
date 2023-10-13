<?php

class ObjekA
{ // Buat class untuk objek yang dimaksud
  function cetakString()
  {
    echo "Hello World..";
  }
}
$objekA = new ObjekA(); // Instansiasi (bentuk) objek dari kelas yang telah dibuat
$objekA->cetakString(); // Perintahkan objek tersebut untuk mencetak string
