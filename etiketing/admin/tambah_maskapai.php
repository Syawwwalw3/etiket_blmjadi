<?php 
session_start();
require 'functions.php';


if(isset($_POST["kirim"])){
    if(tambahMaskapai($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data Maskapai Berhasil Ditambahkan')
            window.location = 'maskapai.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Maskapai Gagal Ditambahkan')
            window.location = 'maskapai.php';
    </script>
        ";
    }
}

?>


<div class="main">
    <div class="box">
        <h3>Tambah Data Maskapai</h3>

        <form action="" method="POST" enctype="multipart/form-data">

            <label for="logo_maskapai">Logo Maskapai</label><br>
            <input type="file" name="logo_maskapai" id="logo_maskapai" class="form-control"><br><br/>

            <label for="nama_maskapai">Nama Maskapai</label><br>
            <input type="text" name="nama_maskapai" id="nama_maskapai" class="form-control"><br><br/>


            <label for="kapasitas">Kapasitas</label><br>
            <input type="text" name="kapasitas" id="kapasitas" class="form-control"><br><br/>
            </select>
            <button tytpe="submit" name="kirim">Tambah</button>
        </form>
    </div>
</div>