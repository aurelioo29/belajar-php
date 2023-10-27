<?php
class login
{
  public static $nama;
  public static $nim;
  protected static $username;
  protected static $password;

  protected static function user()
  {
    return "Selamat datang," . self::$nama;
  }
}

login::$nama = "Aurelio";
