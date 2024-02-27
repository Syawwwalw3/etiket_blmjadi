<?php 

// kita panggil koneksi-nya
require '../../koneksi.php';

// deklarasiin data-data apa aja yang pengin kita inputin
$username = $_POST["username"];
$nama_lengkap = $_POST["nama_lengkap"];
$password = $_POST["password"];
$roles = "Penumpang" or $roles ="petugas";

// insert data-nya ke dalam database > table user
$query = mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$username','$nama_lengkap', '$password', '$roles' )");

// kalo data-nya berhasil/gagal diinsert, kita kasih alert
if($query){
    echo "
        <script type='text/javascript'>
            alert('Yay! Register berhasil, silahkan login, ya!');
            window.location = '../login/index.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Yhaa.. register gagal, cek lagi data-datanya, ya!');
        window.location = 'index.php';
    </script>
";
}

?>