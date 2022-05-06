<!doctype html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Belajar PHP Mysql</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<body>
    <div class="container mt-4">
        <h3 class="alert alert-primary text-center">Data Mahasiswa Unsulbar</h3>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">NumberPhone</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                include 'db_config.php'; //Call file db_config
                $view = new Database; //Call class Database
                $select = $view->view(); //Call function view
                if (mysqli_num_rows($select) > 0) {
                    while ($data = mysqli_fetch_array($select)) { //fetch every data
                ?>
                <tbody>
                    <tr class="mt-3">
                        <td scope="row"><?php echo $data['nim'] ?></td>
                        <td scope="col"><?php echo $data['nama'] ?></td>
                        <td scope="col"><?php echo $data['jurusan'] ?></td>
                        <td scope="col"><?php echo $data['angkatan'] ?></td>
                        <td scope="col"><?php echo $data['no'] ?></td>
                        <td scope="col"><?php echo $data['alamat'] ?></td>
                        <td scope="col" class="text-center"><a href="update.php?nim=<?php echo $data['nim'] ?>"
                                class="btn btn-primary"><i class="bi bi-pencil-square"></i>
                                Edit</a>
                            <a href="delete.php?nim=<?php echo $data['nim'] ?>" onclick="return confirm('Are you sure')"
                                class="btn btn-danger"> <i class="bi bi-trash3"></i> Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php
                    } //Closing while
                }
                ?>
            </table>
        </div>
        <a href="insert.php" class="btn btn-primary mb-3">Add <i class="bi bi-plus-circle"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>

</html>