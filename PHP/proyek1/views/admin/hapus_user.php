<?php
include "../../database/koneksi.php";
$id = $_GET['id'];
$sql="DELETE FROM user WHERE id_user='$id'";

if($koneksi->query($sql)){
    header('location:index.php?page=users');
}
?>
