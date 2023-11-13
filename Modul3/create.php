<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");

// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    
// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    $mobil = $_POST["nama_mobil"];
    // b. Ambil data brand mobil
    $brand = $_POST["brand_mobil"];
    // c. Ambil data warna mobil
    $warna = $_POST["warna_mobil"];
    // d. Ambil data tipe mobil
    $tipe = $_POST["tipe_mobil"];
    // e. Ambil data harga mobil
    $harga = $_POST["harga_mobil"];
}
    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $query = mysql_query($conn, "INSER INTO showroom_mobil (nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUES ($nama_mobil, $brand_mobil, $warna_mobil, $tipe_mobil, $harga_mobil)");
    // (5) Buatkan kondisi jika eksekusi query berhasil
    if($conn->query(sql)==true){
        echo "<script>alert('Data telah berhasil ditambahkan')</script>";
    }
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
    else {
    echo "<script>alert('Gagal ditambahkan')</script>";
    }
// (7) Tutup koneksi ke database setelah selesai menggunakan database
    $mysqli -> close();
?>