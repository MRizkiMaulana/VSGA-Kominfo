<?php
// Menghubungkan ke database (ganti dengan informasi koneksi yang sesuai)
$servername = "localhost";
$username = "root";
$password = "jijik20799";
$database = "persewaan-mobil";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui metode POST
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $nohp_pelanggan = $_POST["nohp_pelanggan"];
    $tanggal = $_POST["tanggal"];
    $durasi_sewa = $_POST["durasi_sewa"];
    $jenis_mobil = $_POST["jenis_mobil"];
    $jasa_supir = $_POST["jasa_supir"];
    $harga_sewa = $_POST["harga_sewa"];
    $total_tagihan = $_POST["total_tagihan"];


    // kasus if checkbox jasa supir
    if($jasa_supir!="Ya"){
        $jasa_supir="Tidak";
    }
    
    // Simpan data ke dalam database
    $sql = "INSERT INTO input (nama_pelanggan, nohp_pelanggan, tanggal, durasi_sewa, jenis_mobil, jasa_supir, harga_sewa, total_tagihan)
    VALUES ('$nama_pelanggan', '$nohp_pelanggan', '$tanggal', '$durasi_sewa', '$jenis_mobil','$jasa_supir', '$harga_sewa', '$total_tagihan')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data pemesanan berhasil disimpan.";
        header("Location: daftar_pesanan.php");
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Tutup koneksi
    $conn->close();
}
?>