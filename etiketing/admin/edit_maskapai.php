<?php
session_start();
require 'functions.php';

$id = $_GET["id"];
$maskapai = query("SELECT * FROM maskapai WHERE id_maskapai = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(editMaskapai($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data Maskapai berhasil diedit');
                window.location = 'maskapai.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data Maskapai gagal diedit');
            window.location = 'maskapai.php'
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
    <title>Document</title>
</head>
<body>
    
<div class="main">
    
    <div class="box">

        <h3>Edit Maskapai</h3>

        <form action="" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id_maskapai" value="<?= $maskapai["id_maskapai"]; ?>">

            <label for="logo_maskapai">Logo Maskapai</label><br>
            <input type="file" name="logo_maskapai" id="logo_maskapai" class="form-control" value="<?= $maskapai["logo_maskapai"] ?>"><br><br/>
            
            <label for="nama_maskapai">Nama Maskapai</label>
            <input type="text" name="nama_maskapai" id="nama_maskapai" class="form-control" value="<?= $maskapai["nama_maskapai"]; ?>"><br><br> 
            
            <label for="kapasitas">kapasitas</label>
            <input type="text" name="kapasitas" id="kapasitas" class="form-control" value="<?= $maskapai["kapasitas"] ?>"><br><br>

            <button type="submit" name="kirim">Edit</button>
        </form>
    </div>
</div>
