<?php
    $server ='localhost';
    $username ='root';
    $password ='';
    $database ='portal_smk';

    $koneksi =new mysqli($server,$username,
    $password,$database);

    if($koneksi->connect_error){
        echo('koneksi gagal');
    } 
    
    //proses nambah berita ke database

    // $judul ='PPDB Jurusan TI Mechanical Mencapai 50 
    // Siswa';

    // $isi ='ini adalah rekor terbanyak siswa
    // jurusan TI dalam penerimaan siswa baru dalam kurun
    //  waktu setelah tahun 2000-sekarang';

    // $tgl =date('Y-m-d H:i:s') ;

    // $sql="INSERT INTO berita VALUES('',
    // '$judul','$isi','$tgl')";

    // if($koneksi->query($sql)){
    //     echo "Data berhasil di tambahkan ke database";
        
    // }else{
    //     echo $koneksi->error;
    // }
?>