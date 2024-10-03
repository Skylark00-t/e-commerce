<?php
require 'koneksi.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "INSERT INTO pengguna (username, email, password) VALUES ('$username', '$email', '$password')";

if (oci_connect($koneksi, $query_sql)) {
    header("Location: login.html");
} else {
    echo "Pendaftaran Gagal : " . oci_connect_error($koneksi);
}