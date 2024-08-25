<?php
require_once "function.php";
$mahasiswa =query("SELECT *  FROM tb_mhs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nulis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand fs-3  rounded-pill px-2 py-0" href="index.html">Trisno<span class="navbar-brand fs-3 text-warning">Rizky</span></a>
            <!-- toggle button -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- sidebar -->
            <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <!-- sidebar navbar -->
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">TrisnoRizky</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- sidebar body -->
                <div class="offcanvas-body tw">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 ">
                    <li class="nav-item mx-2">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="sh">Shop</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    </ul>
                    <div class="d-flex justify-content-center align-items-center gap-3">
                    <a href="login.html" class="text-white">Login</a>
                    <a href="signin.html" class="text-white text-decoration-none px-3 py-1 rounded-4"style="background-color:#F5004F;">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
      <section class="cari">
        <div class="container text-white mt-5 pt-5">
          <div class="d-flex justify-content-center align-items-center">
            <p class="fs-5">Hai pelanggan setia, <span class="spana fs-3">apa yang mau dibeli?</span></p>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
              <input class="form-control w-50 rounded-pill" type="search" placeholder="Search" aria-label="Search">
            </div>
          </div>
          <div class="pilihan d-flex justify-content-center align-items-center my-5 w-100 flex-wrap">
            <button type="button" class="btn btn-primary me-3 my-2">Makanan</button>
            <button type="button" class="btn btn-primary me-3">Minuman</button>
            <button type="button" class="btn btn-primary me-3">Kebersihan</button>
            <button type="button" class="btn btn-primary me-3">Obat</button>
            <button type="button" class="btn btn-primary me-3">Sembako</button>
        </div>
      </section>
    </main>




    <!-- <h1 class="text-center">Daftar mahasiswa</h1> -->


    <br><br>
    <!-- input pencarian -->
    <div class="container-sm">
         <h1 class="text-center">Daftar Mahasiswa</h1>
         <form action="" method="post">
     
         <input type="text" name="keyword" size="40"  placeholder="masukkan keyword pencarian" autocomplete="off">
         <button class='btn btn-success' type="submit" name="cari">CARI</button>
         </form>
     </div>
    <br><br>

    <div class="container-lg">
        
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>

            <?php $id=1; ?>
            <?php foreach($mahasiswa as $mhs):?>
            <tr>
                <td><?=$id;?></td>
                <td><?=$mhs["nama"];?></td>
                <td><?=$mhs["nim"];?></td>
                <td><?=$mhs["email"];?></td>
                <td><?=$mhs["jurusan"];?></td>
                <td>
                    <a class="btn btn-warning" href="update.php?Noid=<?=$mhs["id"];?>">Update</a>
                    <a class="btn btn-danger" href="hapus.php?id=<?=$mhs["id"];?>">Hapus</a>
                </td>
            </tr>
            <?php $id++; endforeach;?>
        </table>
        <div class="d-flex justify-content-end">
            <a class='btn btn-success mb-2'href="tambah.php">Tambah Data</a>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>