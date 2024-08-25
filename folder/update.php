<?php
require_once "function.php";
$id = $_GET['Noid'];
var_dump($id);
$mhs =query("SELECT * FROM tb_mhs WHERE id = $id")[0];

// cek apakah tombol sudah disubmit
if(ISSET($_POST["submit"]))
{
    
    if(update($_POST)>0)
    {
        echo"<script>
            alert('data berhasil diubah');
            document.location.href ='index.php';
        </script>";
    }else{
        echo"<script>
        alert('gagal coy');
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
    <title>Update BOOSS</title>
</head>
<body>
    <form action="" method="post">
        <ul>
        <input type="hidden" name="id" value="<?=$mhs["id"];?>">
            <li>
                <label for="nim">Nim</label>
                <input type="number" name="nim" id="nim" required value="<?=$mhs["nim"];?>">
            </li>

            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required value="<?=$mhs["nama"];?>">
            </li>

            <li>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required value="<?=$mhs["email"];?>">
            </li>

            <li>
                <label for="jurusan">jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?=$mhs["jurusan"];?>">
            </li>
            <li>
                <button type="submit" name="submit" required>Update DATA</button>
                <a href="index.php">Kembali</a>
            </li>
        </ul>
    </form>
</body>
</html>