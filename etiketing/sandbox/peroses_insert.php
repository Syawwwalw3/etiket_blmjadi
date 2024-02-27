<?php


$nama= $_POST['penumpang'];
$jadwal=$_POST['jadwa;'];
$jumlah_tiket = $_POST['jml_tiket'];
$total= $jumlah_tiket * 800000;

$query = "'$nama', '$jadwal','$jumlah_tiket','$total'";
echo $query;

?>