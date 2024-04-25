<?php
session_start();


require 'connect.php';

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;


    $nama = htmlspecialchars($data["nama"]);
    $no_tlp = htmlspecialchars($data["no_tlp"]);
    $tgl = htmlspecialchars($data["tgl"]);
    $jumlah_peserta = htmlspecialchars($data["jumlah_peserta"]);
    $paket = htmlspecialchars($data["paket"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);


    $query = "INSERT INTO pemesanan 
        VALUES
        ('', '$nama', '$no_tlp', '$tgl', '$jumlah_peserta', '$paket', '$harga', '$jumlah')
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>