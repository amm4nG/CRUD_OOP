<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Belajar PHP Mysql</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <form action="process_insert.php" method="post" class="form-control mt-5 p-5 mb-5">
                    <h4 class="text-center alert alert-dark">Input Data Mahasiswa</h4>
                    <div class="mb-3">
                        <label class="form-label">Nim</label>
                        <input name="nim" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input name="jurusan" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <input name="angkatan" type="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Number Phone</label>
                        <input name="no" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control">
                    </div>

                    <button name="add" type="submit" class="btn btn-primary mt-4">Add <i
                            class="bi bi-plus-circle"></i></button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>