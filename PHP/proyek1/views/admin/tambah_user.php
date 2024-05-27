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

<?php if($_SERVER['REQUEST_METHOD'] === 'POST'){
					   if(($_POST['username']) && ($_POST['password']) && ($_POST['level'])){
						$username = $_POST['username'];
						$password = $_POST['password'];
                        $password = password_hash($password, PASSWORD_DEFAULT);
						$level = $_POST['level'];
						$sql = "INSERT INTO user VALUES('','$username','$password','$level')";

						if(mysqli_query($koneksi, $sql)){
							header('location:?page=user');
						}else{
							echo $koneksi->error;
						}
					}
				}
				?>

<div class="blog">	
			<form action="" method="post">			
				
						<table>
							<h1>Isi Data</h1>
							
							<tr><td>
                            Username
                            <br>
                            <input type="text" name="username"
                            ></td></tr>
							
                            <tr><td>
                            Password
                            <br>
                            <input type="text" name="password" >
                            </td></tr>
							
                            <tr><td>
                            Level
                            <br>
                            <select name="level" >
                            <option >admin</option>
                            <option >petugas</option>
                            </select>
                            </td></tr>
							
							
                        </table>
                        
                        <input type="submit" name="tombol" value="KIRIM" class=tombol>
                        <a href="?page=users"><input type="button" value="Kembali" class=tombol></a>
                        
					</form>
</div>