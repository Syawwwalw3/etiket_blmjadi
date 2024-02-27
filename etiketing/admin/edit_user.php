<?php
session_start();
require 'functions.php';

$id = $_GET["id"];
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(editUser($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data user berhasil diedit');
                window.location = 'user.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data user gagal diedit');
            window.location = 'user.php'
        </script>
    ";
    }
}


?>


<div class="main">   
    <div class="box">
        
        

        <h3>Edit Data User</h3>

        <form action="" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">

            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= $user["username"] ?>"><br><br>
            
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $user["nama_lengkap"] ?>"><br><br> 
            
            <label for="password">password</label>
            <input type="password" name="password" id="password" class="form-control" value="<?= $user["password"] ?>"><br><br>

            <label for="roles">Roles</label><br />
    <select name="roles" id="roles">
        <option value="Penumpang">Penumpang</option>
        <option value="Petugas">Petugas</option>
    </select><br /> <br />

            <button type="submit" name="kirim">Edit</button>
        </form>
    </div>
</div