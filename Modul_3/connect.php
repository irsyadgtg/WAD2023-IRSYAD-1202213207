<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
    $host = "localhost:3307";
    $username = "root";
    $namedb = "modul3_wad";
    $password = "";
    

    $conn = mysqli_connect($host, $username, $password, $namedb);
    
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
    if (!$conn) {
        die("connection failed: " . mysqli_connect_error());

    }
    echo "Connect!!"
// 
?>