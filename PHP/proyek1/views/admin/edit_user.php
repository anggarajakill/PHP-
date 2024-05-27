<style>
    input{
        width:400px;
        height:25px;
        margin-bottom:40px;
        border-radius:5px;
    }
    .tombol{
        width:150px;
        margin-left:4px;
        margin-top:20px;
    }
    select{
        width:150px;
        height:20px;
    }
</style>

<?php $id= @$_GET['id'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
					//    if(($_POST['username']) && ($_POST['password']) && ($_POST['level'])){
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$level = $_POST['level'];
						if ($_POST['password']==''){
                            $sql="UPDATE user SET username='$username',level='$level'
                            WHERE id_user='$id'";
                        }else{
                            $sql="UPDATE user SET username='$username',password='$password',level='$level'
                             WHERE id_user='$id'";
                        }

						if(mysqli_query($koneksi, $sql)){
                            header('location:?page=users');
						}else{
							echo $koneksi->error;
						}
					// }
				}

	$sql ="SELECT * FROM user where id_user='$id'";
	$data = $koneksi->query($sql);
	if($data->num_rows > 0){
		foreach($data as $d){
            ?>

<div class="blog">	
			<form action="" method="post">			
				
						<table>
							<h1>Edit Data</h1>
							
							<tr><td>
                            Username
                            <br>
                            <input type="text" name="username" value="<?= $d['username'];?>"
                            ></td></tr>
							
                            <tr><td>
                            Password
                            <br>
                            <input type="password" name="password">
                            </td></tr>
							
                            <tr><td>
                            Level
                            <br>
                            <select name='level'  value="<?= $d['level'];?>">
                            <option value="Admin" <?=$d['level']== 'admin' ? 'selected' : '';?> >admin</option>
                            <option value="Petugas"  <?=$d['level']== 'petugas' ? 'selected' : '';?>  >petugas</option>
                            </select>
                            </td></tr>
                            
                           
							
							
                        </table>
                        
                        <input type="submit" name="tombol" value="KIRIM" class=tombol>
                        <a href="?page=users"><input type="button" value="Kembali" class=tombol></a>
                        
					</form>
</div>
</div>
<?php
        }
    }
    ?>