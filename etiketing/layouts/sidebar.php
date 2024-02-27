<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <style>
    body {
    background: cadetblue;
    font-family: "Assistant", sans-serif;
}

.sidebar {
    width: 200px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow: hidden;
    padding-top: 20px;
}

.sidebar a {
    padding: 20px;
    text-decoration: none;
    color: #000000;
    font-size: 20px;
    display: block;
}

.sidebar a:hover {
    background: darkred;
    color: white;
}

.main {
    margin-left: 200px;
    padding-top: 20px;
    font-size: 24px;
    
}

 table{
    width: 100%;
    border: none;
    border-radius: 10px;
    padding-right:20px;
    background: wheat;
    margin-top: 30px;
    margin-right: 20px;
    
} 

th,
td {
    text-align: left;
    padding: 10px;
    font-size: 21px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 300px;
    align-items: center;
}

a.tambah {
    padding: 10px;
    color: #ffffff;
    text-decoration: none;
    border-radius: 25px;
    background: black;
    font-size: 16px;
}


a.edit {
    padding: 10px;
    color: #ffffff;
    text-decoration: none;
    border-radius: 10px;
    background: blue;
    font-size: 16px;
}


a.hapus {
    padding: 10px;
    color: #ffffff;
    text-decoration: none;
    border-radius: 10px;
    background: red;
    font-size: 16px;
}

.box {
    height: 100%;
    padding: 20px;
    background:white;
    border-radius: 20px;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    font-size: 21px;
}

.form-control {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 20px;
    box-sizing: border-box;
    margin-bottom: 15px;
}

button {
    background: #4caf50;
    color: #ffffff;
    padding: 12px;
    border: none;
    border-radius: 20px;
    margin-top: 25px;
    cursor: pointer;
}
    </style>    
</head>
<body>
    <div class="sidebar">
        <a href="../index.php">Dashboard</a>
        <a href="user.php">Data User</a>
        <a href="Petugas.php">Data Petugas</a>
        <a href="maskapai.php">Data Maskapai</a>
        <a href="jadwal.php">Data Jadwal</a>
        <a href="rute.php">Data Rute</a>
        <a href="">Pemesanan Tiket</a>
        <a href="../logout.php" onClick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>  
    </div>
</body>
</html>