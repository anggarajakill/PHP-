<?php
include '../../database/koneksi.php';

date_default_timezone_set('Asia/Jakarta'); 

// Atur tanggal login
$tanggal_login = date('Y-m-d');

// Simpan tanggal login dalam session
$_SESSION['tanggal_login'] = $tanggal_login;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal_publikasi = $_POST['tanggal_publikasi'];
    $penulis = $_SESSION['username']; // Ambil penulis dari session yang sedang login

    // Proses unggah gambar
    $gambar = ''; // Inisialisasi variabel untuk nama gambar
    if(isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $target_dir = "../../assets/img/";
        $gambar_name = basename($_FILES["gambar"]["name"]); // Gunakan nama gambar yang sama dengan yang diunggah
        $gambar_path = $target_dir . $gambar_name;
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar_path)) {
            $gambar = $gambar_name; // Jika berhasil diunggah, simpan nama gambar
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file gambar.";
            exit(); 
        }
    } else {
        echo "Mohon pilih file gambar.";
        exit(); 
    }



    // Buat dan jalankan query SQL untuk menambahkan berita
    $sql = "INSERT INTO berita (judul, isi, tanggal_publikasi, penulis, gambar) VALUES ('$judul', '$isi', '$tanggal_publikasi', '$penulis', '$gambar')";
    
    if ($koneksi->query($sql) === TRUE) {
        // Jika berhasil, arahkan kembali ke halaman tambah berita menggunakan JavaScript
        echo "<script>window.location.href = '?page=berita';</script>";
        exit();    
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

$koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <link rel="stylesheet" href="../../assets/tambah-data.css"> 
</head>
<body>
<div class="details">
<div class="recentOrders">
    <h1>Tambah Berita</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>
        </div><br>
        <div class="form-group">
           <label for="isi">Isi:</label>
           <textarea id="isi" name="isi" style="width: 500px; height: 200px;" required></textarea>
        </div><br>

        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" id="gambar" name="gambar" required>
        </div><br>

        <div class="form-group">
            <label for="tanggal_publikasi">Tanggal Publikasi:</label>
            <input type="date" id="tanggal_publikasi" name="tanggal_publikasi" value="<?php echo $_SESSION['tanggal_login']; ?>" required>
        </div><br>

        <div class="form-group">
            <label for="penulis">Penulis :</label>
            <label name="penulis"><b><?php echo $_SESSION['username']; ?></b></label>
        </div><br>
        <button type="submit" class="btn-submit">Tambah Berita</button>
      </button>
    </form>
</div>
</div>
</body>
</html>