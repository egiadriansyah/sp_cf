<?php
$conn = mysqli_connect("localhost", "root", "", "sp_cf");

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
    $namagejala = htmlspecialchars($data['nama_gejala']);
    $kodegejala = htmlspecialchars($data['kode_gejala']);
    $kodekerusakan = htmlspecialchars($data['kode_kerusakan']);

    $query = "INSERT INTO tbl_gejala VALUES ('', '$namagejala', '$kodegejala', '$kodekerusakan')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
