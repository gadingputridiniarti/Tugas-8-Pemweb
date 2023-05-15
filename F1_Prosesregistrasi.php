<?php 
include 'koneksidb.php';
if (isset($_POST['submit'])) {
    $nopendaftaran = $_POST['nopendaftaran'];
    $jenispendaftaran = isset($_POST['jenispendaftaran']) ? $_POST['jenispendaftaran'] : '';
    $tglmasuk = $_POST['tglmasuk'];
    $nis = $_POST['nis'];
    $nopesujian = $_POST['nopesujian'];
    $appaud = isset($_POST['appaud']) ? $_POST['appaud'] : '';
    $aptk = isset($_POST['aptk']) ? $_POST['aptk'] : '';
    $noskhun = $_POST['noskhun'];
    $noijazah = $_POST['noijazah'];
    $hobi = $_POST['hobi'];
    $citacita = $_POST['citacita'];

    // Menyimpan ke database
    $sql = mysqli_query($conn, "INSERT INTO registrasi (nopendaftaran, jenispendaftaran, tglmasuk, nis, nopesujian, appaud, aptk, noskhun, noijazah, hobi, citacita) VALUES ('$nopendaftaran', '$jenispendaftaran', '$tglmasuk', '$nis', '$nopesujian', '$appaud', '$aptk', '$noskhun', '$noijazah', '$hobi', '$citacita')");
    if ($sql) {
        // pesan jika data tersimpan
        echo "<script>alert('Selanjutnya Mengisi Form Data Pribadi!'); window.location.href='F2_formdatapribadi.php'</script>";
    } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data Registrasi Gagal Ditambahkan!!');</script>";
    }
}
?>