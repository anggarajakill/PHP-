
<div class="blog">
			<div class="conteudo">
				<h2>KONTAK KAMI :</h2>
				<form action="" method="post">
				 <table>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td>
							<input type="text"
							 name="username">
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td>
							<input type="email"
							 name="email">
						</td>
					</tr>
					<tr>
						<td>Komentar</td>
						<td>:</td>
						<td>
							<textarea name="komentar" id="" cols="30" rows="10"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="tombol" value="KIRIM" id="">
						</td>
					</tr>
				 </table>
				 
				</form>

		<?php
		
		

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if(($_POST['username'] && $_POST['email'] && $_POST['komentar'])){

			$username= $_POST['username'];
			$email = $_POST['email'];
			$komentar = $_POST['komentar'];

		}
		$sql= "INSERT INTO kontak VALUES('','$username','$email','$komentar')";

    if($koneksi->query($sql)){
        echo "Data berhasil di tambahkan ke database";
        
     }else{
        echo $koneksi->error;
    }
}					
		?>

			</div>
		</div>