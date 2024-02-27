<?php

session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../login/index.php';
    </script>
    ";
}

$id = $_GET["id"];
$jadwal = query("SELECT * FROM jadwal_penerbangan 
INNER JOIN rute ON rute.id_rute = jadwal_penerbangan.id_rute 
INNER JOIN maskapai ON rute.id_maskapai = maskapai.id_maskapai WHERE id_jadwal = '$id'")[0];

$rute = query("SELECT * FROM rute INNER JOIN maskapai ON maskapai.id_maskapai = rute.id_maskapai");


if(isset($_POST["edit"])){
    if(editJadwal($_POST) > 0 ){
        echo "
            <script type='text/javascript'>
                alert('Yay! data jadwal penerbangan berhasil diedit!')
                window.location = 'jadwal.php'
            </script>
        ";
    }else{
        echo "
            <script type='text/javascript'>
                alert('Yhaa .. data jadwal penerbangan gagal diedit :(')
                window.location = 'jadwal.php'
            </script>
        ";
    }
}



?>
<!-- 
<?php require '../layouts/sidebar.php'; ?> -->

<h1>Halo, <?= $_SESSION["nama_lengkap"]; ?></h1>
<h1>Edit Rute</h1>

<form action="" method="POST">
    <input type="hidden" name="id_jadwal" value="<?= $jadwal["id_jadwal"]; ?>">

    <label for="id_rute">Pilih Rute</label><br />
    <select name="id_rute" id="id_rute">
        <option value="<?= $jadwal["id_rute"]; ?>"><?= $jadwal["nama_maskapai"]; ?> - <?= $jadwal["rute_asal"]; ?> - <?= $jadwal["rute_tujuan"]; ?></option>
        <?php foreach($rute as $data) : ?>
        <option value="<?= $data["id_rute"]; ?>"><?= $data["nama_maskapai"]; ?> - <?= $data["rute_asal"]; ?> - <?= $data["rute_tujuan"]; ?></option>
        <?php endforeach; ?>
    </select><br /> <br />

    <label for="waktu_berangkat">Waktu Berangkat</label><br />
    <input type="time" name="waktu_berangkat" id="waktu_berangkat" value="<?= $jadwal["waktu_berangkat"]; ?>"><br /><br />

    <label for="waktu_tiba">Waktu Tiba</label><br />
    <input type="time" name="waktu_tiba" id="waktu_tiba" value="<?= $jadwal["waktu_tiba"]; ?>"><br /><br />

    <label for="harga">Harga</label><br />
    <input type="number" name="harga" id="harga" value="<?= $jadwal["harga"]; ?>"><br /><br />

    <button type="submit" name="edit">Edit</button>
</form>
