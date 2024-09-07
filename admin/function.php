<?php
$koneksi = mysqli_connect('localhost','root','','loly');

function query($query){
    global $koneksi;

    $result= mysqli_query($koneksi, $query);
    $tempatKosong =[]; 
    while($row= mysqli_fetch_assoc($result)){
        $tempatKosong[]=$row;
    }
    return $tempatKosong;
}

// menambahkan data
function tambah($data){
    global $koneksi;

    $nim =htmlspecialchars($data["nim"]);
    $nama =htmlspecialchars($data["nama"]);
    $email =htmlspecialchars($data["email"]);
    $jurusan =htmlspecialchars($data["jurusan"]);

    $query = "INSERT INTO tb_mhs(nama,nim,email,jurusan) VALUES
    ('$nama','$nim','$email','$jurusan')";

    mysqli_query($koneksi,$query);
    
    return mysqli_affected_rows($koneksi);
}
function update($data){
    global $koneksi;

    $id = $data["id"];  
    $nim =htmlspecialchars($data["nim"]);
    $nama =htmlspecialchars($data["nama"]);
    $email =htmlspecialchars($data["email"]);
    $jurusan =htmlspecialchars($data["jurusan"]);

    $query = "UPDATE tb_mhs SET
            nim ='$nim',
            nama ='$nama',
            email ='$email',
            jurusan='$jurusan' WHERE id = '$id'";

    mysqli_query($koneksi,$query);
    
    return mysqli_affected_rows($koneksi);
}

function hapus($data){
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM tb_mhs  WHERE id = $data");
    return mysqli_affected_rows($koneksi);
}
?>