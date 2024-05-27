<?php
 include 'database/koneksi.php';
 $content = isset($_GET['page']) ? $_GET ['page'] : 'home';
 
 include 'templates/template.php';
 
 
?>