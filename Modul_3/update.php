<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)

    if(isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
         // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $nama_mobil = $_POST["nama_mobil"];
        $brand_mobil = $_POST["brand_mobil"];
        $warna_mobil = $_POST["warna_mobil"];
        $tipe_mobil = $_POST["tipe_mobil"];
        $harga_mobil = $_POST["harga_mobil"];
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

        // Eksekusi perintah SQL
        $query = mysqli_query($conn, "UPDATE showroom_mobil SET nama_mobil = '$nama_mobil', brand_mobil = '$brand_mobil', warna_mobil = '$warna_mobil', tipe_mobil = '$tipe_mobil', harga_mobil = '$harga_mobil'WHERE id='$id'");
       
        // Buatkan kondisi jika eksekusi query berhasil
        if($query){
            header('Location: list_mobil.php');
        }
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        else{
            echo "<script>
            alert('Gagal diubah')
            document.location.href = 'form_update_mobil.php'
            </script>";
    }
    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
?>