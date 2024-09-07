<?php
require_once "function.php";
$mahasiswa =query("SELECT *  FROM tb_mhs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>

</head>
<body>
    <nav>
        
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
    <h1 class="text-center">Daftar Barang Masuk</h1>
    <br>
    <div class="container-lg">
        
        <table class="table table-striped" id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <a class='btn btn-success mb-2'href="tambah.php">Tambah Data</a>
        </div>
    </div>
    <script src="../app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>