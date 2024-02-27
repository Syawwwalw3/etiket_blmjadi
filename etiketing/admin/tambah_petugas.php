<?php
session_start();
require 'functions.php';

if(isset($_POST["tambah"])){
    if(tambahPetugas($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('yay! data berhasil ditambahkan');
                window.location = 'petugas.php';
            </script>
        ";
        
    }else{
        echo"
            <script type='text/javascript'>
                alert('data gagal ditambahkan');
                window.location = 'petugas.php';
            </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH PETUGAS</title>
</head>
<body>
 <div class="content">
    <h3>TAMBAH DATA PETUGAS</h3>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control"><br><br>
        
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br><br>

        <label for="password">password</label>
        <input type="password" name="password" id="password" class="form-control"><br><br>

        <label for="roles">Roles</label><br />
    <select name="roles" id="roles">
        <option value="Petugas">Petugas</option>
    </select><br><br>

        <button type="submit" name="tambah">tambah data</button>

    </form>


 </div>
   
</body>
</html>