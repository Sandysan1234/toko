<?php
require_once "function.php";
 $id = $_GET["id"];

 if (hapus($id) > 0) {
    echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'index.php';
    </script>";

 }else{
    echo "<script>
        alert('data error dihapus');
        document.location.href = 'hapus.php';
    </script>";
 }
 ?>