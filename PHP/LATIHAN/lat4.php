<?php
//BELAJAR ARRAY
$jurusan1= ['RPL','TKJ','KR'];
 
for($a=0; $a< count($jurusan1); $a++){

    echo $a + 1 . "." . $jurusan1[$a]."<br>";
}

//MENGHAPUS ARRAY

unset($jurusan1[0]);
print_r($jurusan1);

//menambahkan array
$jurusan1[] = 'PH';

//MENGGANTI ARRAY
$jurusan1[1] = 'PH'
?>