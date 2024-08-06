<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$user = 'semb';
$password = '123';


if (isset($_POST['submit']))
{
    if ($_POST['nama']== $user && $_POST['password'] == $password)
    {
        header('location: profil.php?nama='.$user);
    }
    else {
        echo 'login gagal';
    }
    
}
?>
    <form action="profil.php" method="post">
        <input type="text" name="nama">
        <input type="password" name="password" id="">
        <input type="submit" name="submit">
    </form>
</body>
</html>