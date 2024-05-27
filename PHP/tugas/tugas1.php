
<?php
  $tittle='TUGAS 1 PHP';
  $nama='Harya Anggara';
  $kelas='XI RPL';
  $jurusan='Rekayasa Perangkat Lunak';
  $color='<td width= 125 bgcolor=green>'.$nama.'</td>';

 ?>
 
 <?php
  echo"<h1>BIODATA</h1> <br> <hr>";
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <title>
        <?php
        echo $tittle;
        ?>
    </title>
 </head>
 <body>


    <table border=1 cellspacing=2 >
        
    <tr>
       
            <td width='25' >Nama</td>
            <td width='5'> : </td>
            <?=$color?> 

   </tr>
      
      
      
    <tr>
            <td width='25'>Kelas</td>
            <td width='5'> : </td>
            <td width='125'> <?= $kelas?> </td>
    </tr>
    <tr>
            <td width='25'>Jurusan</td>
            <td width='5'> : </td>
            <td width='120'> <?= $jurusan?> </td>
    </tr>
    </table>
    
 </body>

 </html>