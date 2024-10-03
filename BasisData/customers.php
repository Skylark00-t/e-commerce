<?php
require 'koneksi.php';

$action = $_GET['action'];

if ($action == 'create') {
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $koneksi = getDbConnection();
    $sql = 'INSERT INTO pelanggan (id_pelanggan, email, nama_pelanggan, no_hp, email, alamat) VALUES (:id_pelanggan, :email, :nama_pelanggan, :no_hp, :email, :alamat)';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_pelanggan', $id_pelanggan);
    oci_bind_by_name($stid, ':email', $email);
    oci_bind_by_name($stid, ':nama_pelanggan', $nama_pelanggan);
    oci_bind_by_name($stid, ':no_hp', $no_hp);
    oci_bind_by_name($stid, ':alamat', $alamat);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: pelanggan.php');
    exit();
} elseif ($action == 'update') {
    $id_pelanggan = $_POST['id_pelanggan'];
    $email = $_POST['email'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['alamat'];

    $koneksi = getDbConnection();
    $sql = 'UPDATE pelanggan SET email = :email, nama_pelanggan = :nama_pelanggan, no_hp = :no_hp, email = :email, alamat = :alamat WHERE id_pelanggan = :id_pelanggan';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_pelanggan', $id_pelanggan);
    oci_bind_by_name($stid, ':email', $email);
    oci_bind_by_name($stid, ':nama_pelanggan', $nama_pelanggan);
    oci_bind_by_name($stid, ':no_hp', $no_hp);
    oci_bind_by_name($stid, ':alamat', $alamat);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: pelanggan.php');
    exit();
} elseif ($action == 'delete') {
    $id_pelanggan = $_POST['id_pelanggan'];

    $koneksi = getDbConnection();
    $sql = 'DELETE FROM pesanan WHERE id_pelanggan = :id_pelanggan';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_pelanggan', $id_pelanggan);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: pelanggan.php');
    exit();
}
?>
