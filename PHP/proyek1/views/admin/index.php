<?php

session_start();
if (isset($_SESSION['loggedin'])== false){
  header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
 <style>

  body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

.container {
  display: flex;
}
.add-data{
	background-color: blue;
  color:white;
  text-decoration:none;
  padding: 10px 20px;
  border-radius: 30px;
  font-weight: bold;

}
.add-data:hover{
	background-color:white;
  color:blue;
}


.sidebar {
  background: #000 ;
  color: #fff;
  width: 20%;
  height: 727px;
}

.sidebar h1  {
  text-align: center;
}

.sidebar ul {
  list-style-type: none;
  padding: 0;
  margin-left:20px;
}

.sidebar ul li a{
  margin-bottom: 10px;
  color: #fff;
  text-decoration: none;
  margin-left:20px;
}


.sidebar ul li a:hover {
  text-decoration: underline;
}

.content {
  background-color:aqua;
  width:80%;
  height: 727px;
  padding-left:30px;
}



.logout{
    text-decoration:none;
    color:red;
    margin-left:40px;
}
.footer {
    background-color:black;
    color:white;
    height: 62px;
    text-align:center;    
}

 </style>   
<body>
  <div class="container">
    <div class="sidebar">
      <h1>ADMINISTRATOR</h1>
      <hr>
      <ul>
        <li><a href="?page=dashboard">Dashboard</a></li>
        <br>
        <li><a href="?page=users">Users</a></li>
        <br>        
        <li><a href="?page=berita">Berita</a></li>
        <br>
        <li><a href="?page=kontak">Kontak Kami</a></li>
   
       </ul>
       <hr>
        <a href="login.php" class="logout">Logout</a>
    </div>

     

    <div class="content">
    <?php
      include '../../database/koneksi.php';
          $page= @ $_GET['page'];

          if(isset($page)){ 
            include $page . ".php";
          }else{
            include 'dashboard'.'.php';
          }
    ?> </div>

</div>
    <div class="footer"><b> <br>&copy; 2024 Taruna's Blog </b></div>

</body>