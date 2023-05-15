<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksidb.php';

if (isset($_POST['submit'])) {
    $namaayah = $_POST['namaayah'];
    $tlayah = $_POST['tlayah'];
    $pendayah = $_POST['pendayah'];
    $pekerayah = $_POST['pekerayah'];
    $salaryayah = $_POST['salaryayah'];
    $berkebayah = $_POST['berkebayah'];

    // Menyimpan ke database
    $sql = mysqli_query($conn, "INSERT INTO dataayah (namaayah, tlayah, pendayah, pekerayah, salaryayah, berkebayah) VALUES ('$namaayah', '$tlayah', '$pendayah', '$pekerayah', '$salaryayah', '$berkebayah')");
    if ($sql) {
        // pesan jika data tersimpan
        echo "<script>alert('Selanjutnya Mengisi Form Data Ibu Kandung!'); window.location.href='F4_formdataibu.php'</script>"; 
    } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data Ayah Kandung Gagal Ditambahkan!!');</script>";
        echo mysqli_error($conn);
    }
}
?>