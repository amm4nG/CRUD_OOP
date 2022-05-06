<?php
//Class Database
class Database
{
    var $host = 'localhost';
    var $user = 'root';
    var $password = '';
    var $database = 'mahasiswa';
    public function connect() //function for connection
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $conn;
    }

    public function view() //function for view data
    {
        $conn = $this->connect(); //call function connect
        $view = mysqli_query($conn, "SELECT * FROM data_mahasiswa");
        return $view;
    }

    public function insert($nim, $nama, $jurusan, $angkatan, $no, $alamat) //function for add data
    {
        $conn = $this->connect();
        mysqli_query($conn, "INSERT INTO data_mahasiswa VALUES('$nim', '$nama', '$jurusan', '$angkatan', '$no', '$alamat')");
    }

    public function select($nim) //function for select data
    {
        $conn = $this->connect();
        $select = mysqli_query($conn, "SELECT * FROM data_mahasiswa WHERE nim = '$nim'");
        return $select;
    }

    public function update($nim, $nama, $jurusan, $angkatan, $no, $alamat) //function for update data
    {
        $conn = $this->connect();
        $update = mysqli_query($conn, "UPDATE data_mahasiswa SET nama = '$nama', jurusan = '$jurusan', angkatan = '$angkatan', no = '$no', alamat = '$alamat' WHERE nim = '$nim'");
        return $update;
    }

    public function delete($nim) //function delete data
    {
        $conn = $this->connect();
        $delete = mysqli_query($conn, "DELETE FROM data_mahasiswa WHERE nim = '$nim'");
        return $delete;
    }
}