<?php

$data = ['Jhon', 'Jane' , 'Bob' , 'Alice' , 'Charlie'];
 

//menambahkan data array
$data[] = 'Eko';
$data [] = 'Alika';

//ubah data array alice menjadi 'vexana'
$data[3] = 'Vexana';

//menghapus data array bob
unset($data[2]);

print_r($data);
?>