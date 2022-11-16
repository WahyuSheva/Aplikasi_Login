<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Login</title>
</head>
<body bgcolor="gold"/>
    <h2>Latihan Login XII RPL 2 </h2>
    <br/>
<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Login gagal!! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
        echo "Anda Telah Berhasil Logout";
    }else if($_GET['pesan'] == "belum_login"){
        echo "Anda Telah Login untuk mengakses halaman admin";
    }
    }
    ?>
    </br>
</br>
<form method ="POST" action ="cek_login.php">
    <table>
        <tr>
            <td>username</td>
            <td>:</td>
            <td><input type ="text" name="username" placeholder="Masukan username"></td>
</tr>
<tr>
    <td>Password</td>
    <td>:</td>
    <td><input type ="text" name="password" placeholder="Masukan Password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="LOGIN"></td>
</tr>
</table>
</form>
</body>
</html>