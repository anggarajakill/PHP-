<div class="blog">
    <h1>Data User</h1>
    <hr>
    <br>
     <!-- <a href="?page=isi_data"> -->
        
    <a href="?page=isi_data" class="add-data">Tambahkan Data User</a> 
    <br>
    <br>
	<br> 	

    <table border=1 cellpadding=5 cellspacing = 0 style = background-color:white; >
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        <th>Aksi</th>
    </tr>
	<?php
	$no=1;
	$sql ='SELECT * FROM user';
	$data = $koneksi->query($sql);
	if($data->num_rows > 0){
		foreach($data as $d){
            ?>
            <tr>
                <td align=center> <?= $no?></td>
                <td style=width:250px; ><?= $d['username']?></td>
                <td><?= $d['password']?></td>
                <td><?= $d['level']?></td>
                
                <td>
                     <button style=background-color:blue;margin-right:5px;color:white;border-radius:5px; >

                        <a href="?page=edit_user&id=<?= $d['id_user']; ?>" 
                        style=color:white;text-decoration:none;padding:3px4px;border-radius:3px;font-weight:bold;>
                     Edit</button> </a>

               
                     <button style=background-color:red;margin-right:5px;color:white;border-radius:5px; >

                        <a href="hapus_user.php?id=<?= $d['id_user']; ?>" 
                        style=color:white;text-decoration:none;padding:3px4px;border-radius:3px;font-weight:bold;
                        onclick="return confirm('Yakin Anda Mau Hapus Data?')">
                        DELETE</button> </a>

                </td>
            </tr>
            
            
            
            <?php
			$no++;
        }
    }
    ?>
    </table>
    
    </div>