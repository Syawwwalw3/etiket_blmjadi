<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../auth/login/index.php';
    </script>
    ";
}

$produk = query("SELECT * FROM maskapai");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>

    <?php require '../layouts/sidebar.php'; ?>

    <div class="content">
        <div class="main">

            <h3>Data Maskapai</h3>
            <a href="tambah_maskapai.php" class="tambah">Tambah Maskapai</a>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No.</th>
                    <th>Logo Maskapai</th>
                    <th>Nama Maskapai</th>
                    <th>Kapasitas</th>
                    <th>Opsi</th>
                </tr>
    
                <?php $no = 1; ?>
                <?php foreach($produk as $data) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><img src="../assets/images/<?= $data["logo_maskapai"] ; ?>" width="100" alt="foto"></td>
                    <td><?= $data["nama_maskapai"]; ?></td>
                    <td><?= $data["kapasitas"]; ?></td>
                    <td>
                        <a href="edit_maskapai.php?id=<?= $data["id_maskapai"];  ?>" class="edit">Edit</span></a>
                        <a href="hapus_maskapai.php?id=<?= $data["id_maskapai"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                    </td>
                </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
            </table>
        </div>
        
    </div>

    <a href="../logout.php" onClick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
</body>
</html>