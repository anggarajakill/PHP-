<?php
include "../../database/koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM `kontak` WHERE id_kontak='$id'";

if(mysqli_query($koneksi, $sql)){
header('location:index.php?page=kontak');
}
?>