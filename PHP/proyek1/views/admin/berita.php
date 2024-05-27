
<div class="blog">
    <h1>Data User</h1>
    <hr>
    <br>
    <a href="?page=tambah_berita"><input type="button" value="Buat Berita" 
    style=background-color:blue;color:white;border-radius:3px;width:150px;height:30px;></a>
    <br>
    <br>


    <table border=1 cellpadding=5 cellspacing = 0 style = background-color:white; >
    <tr>
        <th>no</th>
        <th>isi</th>
        <th>judul</th>
        <th>tanggal publikasi</th>
        <th>penulis</th>
        <th>gambar</th>
        <th>aksi</th>
    </tr>
	<?php
    $no = 1;
	$sql ='SELECT * FROM berita';
	$data = $koneksi->query($sql);
	if($data->num_rows > 0){
		foreach($data as $d){
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $d['isi']?></td>
                <td><?= $d['judul']?></td>
                <td><?= $d['tanggal_publikasi']?></td>
                <td><?= $d['penulis']?></td>
                <td><img src="../../assets/img/<?= $d['gambar']?>"width="100"></td>
                <td>
                <a href="?page=tambah_berita&id=<?= $d['id']?>"><input type="button" value="Edit" 
                    style=background-color:blue;color:white;border-radius:3px;width:50px;height:25px;></a>

                 <a href="hapus_berita.php?id=<?= $d['id']?>"><input type="button" value="Delete"
                    style="background-color:red;color:white;border-radius:3px;width:50px;height:25px;" 
                    onclick="return confirm('yakin akan hapus data ini?')"></a>
                    
                    
                </td>
            </tr>
            
            
            
            <?php
            $no++;
        }
    }
    ?>
    </table>
    
    </div>