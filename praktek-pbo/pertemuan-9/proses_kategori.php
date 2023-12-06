<?php

include "db_koneksi.php";

$koneksi = new Database();
$action = $_GET['action'];

if ($action == 'add') {
  $koneksi->tambah_data($_POST['nama_kategori']);
  header('location:kategori_view.php');
} else if ($action == 'update') {
  $koneksi->update_data($_POST['nama_kategori'], $_POST['id_kategori']);
  header('location:kategori_view.php');
} else if ($action == 'delete') {
  $id_kategori = $_GET['id'];
  $koneksi->delete_data($id_kategori);
  header('location:kategori_view.php');
}
