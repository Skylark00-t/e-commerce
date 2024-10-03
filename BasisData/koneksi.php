<?php
$username = "system";
$password = "wahyu";
$database = "(DESCRIPTION - (ADDRESS - (PROTOCOL - TCP)(HOST - localhost)(PORT - 1521))(CONNECT_DATA - (SERVER - admin)(SERVICE_NAME - XE)))";

$koneksi = oci_connect($username, $password, $database);
if($koneksi){
    echo "koneksi berhasil";
} else {
    echo "gagal";
    }

?>