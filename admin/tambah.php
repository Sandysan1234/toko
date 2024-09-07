<?php
require_once "function.php";

if(ISSET($_POST["submit"]))
{
    
    if(tambah($_POST)>0)
    {
        echo"<script>
            alert('data berhasil ditambahkan');
            document.location.href ='index.php';
        </script>";
    }else{
        echo"<script>
        alert('gagal');
        document.location.href ='index.php';
        </script>";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menambahkan data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h1 class='text-center'>Tambahkan Data</h1>
    <div class="container my-3">
        <form action="" method="post">
            <label class="mb-2" for="nim">NIM</label>
            <input class="form-control mb-2 w-25" type="number" name="nim" id="nim" required>
            <label class="mb-2" for="nama">Nama</label>
            <input class="form-control mb-2 w-25" type="text" name="nim" id="nim" required>
            <label class="mb-2" for="email">Email</label>
            <input class="form-control w-25" type="email" name="email" id="email" required>
            <label class='mb-2' for="jurusan">Jurusan</label>
            <input class='form-control w-25' type="text" name="jurusan" id="jurusan" required>
            <button class='btn btn-success my-3' type="submit" name="submit" required>TAMBAH DATA</button>
            <a class='btn btn-danger' href="index.php">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>