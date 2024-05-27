<?php
include "../../database/koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM `berita` WHERE id='$id'";

if(mysqli_query($koneksi,$sql)){
    header('location:index.php?page=berita');
}

?>