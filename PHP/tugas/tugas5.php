<h1>BUKUTAMU</h1>

<form action="" method="post"> <br>
<table>
    <tr>
        <td>Username</td>
        <td><input type="text" name='username'></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name='email'></td>
    </tr>
    <tr>
        <td>Komentar</td>
       <td> <textarea name="komentar"  cols="30" rows="10"></textarea> </td>
    </tr>
    <tr>
        <td></td>
      <td>  <input type="submit" name='tombol' value='KIRIM'></td>
    </tr>
   
</table>
<hr>
</form>

<?php


if($_SERVER['REQUEST_METHOD']=='POST'){  
 $username =  $_POST['username'];
 $email = $_POST['email'];
 $komentar =  $_POST['komentar'];   

  if (empty($username).empty($email).empty($komentar)){
    echo 'Masih ada yang kosong,tolong diisi';

 } else{
    echo"<h1>DATA</h1>";
    echo"
     <table border=1 cellspacing=0 cellpadding=10>
        <tr>
                <td>Username</td>
                <td>$username</td>
        </tr>    
        <tr>
                <td>Email</td>
                <td>$email</td>
        </tr>
        <tr>
                <td>Komentar</td>
                <td>$komentar</td>
        </tr>
    </table>";
 }
}
?>