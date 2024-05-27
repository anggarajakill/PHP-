<form action="" method="post">


    Username <input type="text" name="username">
    <input type="submit" name="tombol" value="KIRIM">
    

</form>

<?php
// if(isset($_POST['tombol'])){
//     echo $_POST['username'];
// }

if(isset($_POST['tombol'])){
    echo $_POST['username'];
 }


?>