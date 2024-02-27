<?php

require '../koneksi.php';

function query($query){

    global $conn;

    $rows = [];

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;    
}


function tambahUser($data){
    global $conn;

    $username = htmlspecialchars($data["username"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);

    $query = "INSERT INTO user VALUES(NULL, '$username','$nama_lengkap','$password','$roles')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahPetugas($data){
    global $conn;

    $username = htmlspecialchars($data["username"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);

    $query = "INSERT INTO user VALUES(NULL, '$username','$nama_lengkap','$password','$roles')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahMaskapai($data){
    global $conn;

    $logo_maskapai = $_FILES["logo_maskapai"]["name"];
    $files = $_FILES["logo_maskapai"]["tmp_name"];
    $nama_maskapai = htmlspecialchars($data["nama_maskapai"]);
    $kapasitas = htmlspecialchars($data["kapasitas"]);

    $query = "INSERT INTO maskapai VALUES(NULL, '$logo_maskapai','$nama_maskapai','$kapasitas')";

    move_uploaded_file($files, "../assets/images/".$logo_maskapai);

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahJadwal($data){

    global $conn;
    $id_rute = htmlspecialchars($data["id_rute"]);
    $waktu_berangkat = htmlspecialchars($data["waktu_berangkat"]);
    $waktu_tiba = htmlspecialchars($data["waktu_tiba"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "INSERT INTO jadwal_penerbangan VALUES (NULL, '$id_rute', '$waktu_berangkat', '$waktu_tiba', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahRute($data){

    global $conn;
    $id_maskapai = htmlspecialchars($data["id_maskapai"]);
    $rute_asal = htmlspecialchars($data["rute_asal"]);
    $rute_tujuan = htmlspecialchars($data["rute_tujuan"]);
    $tanggal_pergi = htmlspecialchars($data["tanggal_pergi"]);

    $query = "INSERT INTO rute VALUES (NULL, '$id_maskapai', '$rute_asal', '$rute_tujuan', '$tanggal_pergi')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// function tambahUser($data){
//     global $conn;

//     $username = htmlspecialchars($data["username"]);
//     $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
//     // $foto = $_FILES["foto"]["name"];
//     // $files = $_FILES["foto"]["tmp_name"];
//     $roles = htmlspecialchars($data["roles"]);

//     // insert data, menggunakan querry insert into
//     $query = "INSERT INTO user VALUES(NULL, '$username','$nama_lengkap','$roles')";

//     // jalanin fungsi untuk upload file
//     // move_uploaded_file($files, "../assets/images/".$foto);

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);

// }



function editUser($data){
    global $conn;

    $id = htmlspecialchars($data["id_user"]);    
    $username = htmlspecialchars($data["username"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $password = htmlspecialchars($data["password"]);
    $roles= htmlspecialchars($data["roles"]);

    $query = "UPDATE user SET 
    username = '$username',
    nama_lengkap = '$nama_lengkap',
    password = '$password',
    roles = '$roles' WHERE id_user = '$id'
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

}

function editPetugas($data){
    global $conn;

    $id = htmlspecialchars($data["id_user"]);    
    $username = htmlspecialchars($data["username"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $password = htmlspecialchars($data["password"]);
    $roles= htmlspecialchars($data["roles"]);

    $query = "UPDATE user SET 
    username = '$username',
    nama_lengkap = '$nama_lengkap',
    password = '$password',
    roles = '$roles' WHERE id_user = '$id'
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

}


function editMaskapai($data){
    global $conn;
    
    $id = htmlspecialchars($data["id_maskapai"]);
    $logo_maskapai = $_FILES["logo_maskapai"]["name"];
    $files = $_FILES["logo_maskapai"]["tmp_name"];
    $nama_maskapai = htmlspecialchars($data["nama_maskapai"]);
    $kapasitas = htmlspecialchars($data["kapasitas"]);


    if(empty($logo_maskapai)){
        $query = "UPDATE maskapai SET
        nama_maskapai = '$nama_maskapai',
        kapasitas = '$kapasitas' WHERE id_maskapai = '$id'";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }else{
        $query = "UPDATE maskapai SET
        logo_maskapai = '$logo_maskapai',   
        nama_maskapai = '$nama_maskapai',
        kapasitas = '$kapasitas' WHERE id_maskapai = '$id'";

        move_uploaded_file($files, "../assets/images/".$logo_maskapai);
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}

function editJadwal($data){
    global $conn;
    
    $id = htmlspecialchars($data["id_jadwal"]);
    $id_rute = htmlspecialchars($data["id_rute"]);
    $waktu_berangkat = htmlspecialchars($data["waktu_berangkat"]);
    $waktu_tiba = htmlspecialchars($data["waktu_tiba"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "UPDATE jadwal_penerbangan SET
    id_rute = '$id_rute',
    waktu_berangkat = '$waktu_berangkat',
    waktu_tiba = '$waktu_tiba',
    harga = '$harga' WHERE id_jadwal = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function editRute($data){
    global $conn;
    
    $id = htmlspecialchars($data["id_rute"]);
    $id_maskapai = htmlspecialchars($data["id_maskapai"]);
    $rute_asal = htmlspecialchars($data["rute_asal"]);
    $rute_tujuan = htmlspecialchars($data["rute_tujuan"]);
    $tanggal_pergi = htmlspecialchars($data["tanggal_pergi"]);

    $query = "UPDATE rute SET
    id_maskapai = '$id_maskapai',
    rute_asal = '$rute_asal',
    rute_tujuan = '$rute_tujuan',
    tanggal_pergi = '$tanggal_pergi' WHERE id_rute = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusUser($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");
    return mysqli_affected_rows($conn);

}

function hapusPetugas($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");
    return mysqli_affected_rows($conn);

}

function hapusMaskapai($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM maskapai WHERE id_maskapai = '$id'");
    return mysqli_affected_rows($conn);

}

function hapusJadwal($id){
    global $conn; 
    mysqli_query($conn, "DELETE FROM jadwal_penerbangan WHERE id_jadwal = '$id'");
    return mysqli_affected_rows($conn);
}

function hapusRute($id){
    global $conn; 
    mysqli_query($conn, "DELETE FROM rute WHERE id_rute = '$id'");
    return mysqli_affected_rows($conn);
}
