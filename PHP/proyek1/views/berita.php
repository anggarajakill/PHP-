<div class="blog">
	<?php
		$sql="SELECT * FROM berita";
		$data = $koneksi-> query($sql);
		if($data->num_rows > 0){
		foreach($data as $d){
	?>
			<div class="conteudo">
				<div class="post-info">
					Tanggal Posting  <b><?=$d['tanggal_publikasi'] ?></b>
				</div>
				<img src="https://www.malasngoding.com/wp-content/uploads/2016/02/tutorial-css-bahasa-indonesia.png">
				<h1><?=$d['judul'] ?></h1>
				<hr>
				<p>
				<?=$d['isi'] ?>
				</p>				
				<a href="#" class="continue-lendo">Selengkapnya →</a>
			</div>
	<?php

}
}
	?>
		</div