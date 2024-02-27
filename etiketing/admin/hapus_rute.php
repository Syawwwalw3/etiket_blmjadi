<?php

session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../../auth/login/index.php';
    </script>
    ";
}

$id = $_GET["id"];

if(hapusRute($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('Yay! data rute berhasil dihapus');
        window.location = 'rute.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Yhaa .. data rute gagal ditambahkan :(')
        window.location = 'rute.php';
    </script>
    ";
}


?>


