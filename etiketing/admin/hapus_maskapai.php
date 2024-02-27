<?php 

require 'functions.php';

$id = $_GET["id"];

if(hapusMaskapai($id) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data berhasil dihapus');
            window.location = 'maskapai.php';
        </script>
    ";
}else{
    echo "
        <script type='text/javascript'>
            alert(Data gagal dihapus');
            window.location = 'maskapai.php';
        </script
    ";
}
?>