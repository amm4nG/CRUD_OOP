<?php
include 'db_config.php'; //Call file db_config
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$no = $_POST['no'];
$alamat = $_POST['alamat'];
if (isset($_POST['add'])) {
    $insert = new Database; //Call class Database
    $select = $insert->select($nim); //Call function select
    $data = mysqli_fetch_array($select); //Fetch data from select
    if ($data['nim'] == $nim) { //if nim duplicate
        echo "<script>
                alert('Data Already Exists');
                window.location = 'insert.php';
                </script>";
    } else {
        $add = $insert->insert($nim, $nama, $jurusan, $angkatan, $no, $alamat); //Call function insert data
        echo "<script>
        alert('Success Data Added');
        window.location = 'index.php';
        </script>";
    }
}