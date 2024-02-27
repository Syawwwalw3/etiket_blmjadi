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

$user = query("SELECT * FROM user WHERE roles = 'penumpang '");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    
</head>
<body>

    <?php require '../layouts/sidebar.php'; ?>

    <div class="content">
        <div class="main">
        <h3>Data User </h3>
        <a href="tambah_user.php" class="tambah">Tambah User</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Roles</th>
                <th>opsi</th>
            </tr>

            <?php $no = 1; ?>
            <?php foreach($user as $data) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data["username"]; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td>
                    <a href="edit_user.php?id=<?= $data["id_user"];  ?>"class="edit">Edit</span></a>
                    <a href="hapus_user.php?id=<?= $data["id_user"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
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