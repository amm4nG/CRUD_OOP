<?php
include 'db_config.php';
$nim = $_GET['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$no = $_POST['no'];
$alamat = $_POST['alamat'];
$update = new Database;
if (isset($_POST['update'])) {
    $update = $update->update($nim, $nama, $jurusan, $angkatan, $no, $alamat);
    echo "<script>
        alert('Data Success Updated');
        window.location = 'index.php';
        </script>";
}