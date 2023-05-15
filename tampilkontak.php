<h2>Tampil Kontak</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>GENDER</th>
        <th>Email</th>
        <th>ALAMAT</th>
        <th>KOTA</th>
        <th>PESAN</th>
        <th></th>
    </tr>
    <?php
    include 'koneksi.php';
    $kontak = mysqli_query($koneksi, "SELECT * from kontak");
    $no=1;
    foreach ($kontak as $row){
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['jkel']."</td>
            <td>".$row['email']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['kota']."</td>
            <td>".$row['pesan']."</td>
                </tr>";
            $no++;
    }?>
</table>