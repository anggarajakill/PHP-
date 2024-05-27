<?php
 $nama = [ 
    
    "H1",
    "H2",
    "H3",
    "H4",
    "H5"
 ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table border=1 cellspacing=0 cellpadding=10  >
        <tr>
            <td ><b>No</b></td>
            <td ><b>Nama</b></td>

            <?php
            
             for($a=0;$a<5;$a++){
                echo"<tr><td>".$a + 1 ."</td><td>".$nama[$a]."</td></tr>".'<br>';
             }
            
            ?>
            
        </tr>
      
       
    </table>
    
</body>
</html>