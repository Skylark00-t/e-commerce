<?php
require 'koneksi.php';

$action = $_GET['action'];

if ($action == 'create') {
    $id_pemasok = $_POST['id_pemasok'];
    $nama_pemasok = $_POST['nama_pemasok'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $produk_id_produk = $_POST['produk_id_produk'];

    $koneksi = getDbConnection();
    $sql = 'INSERT INTO Orders (id_pemasok, alamat, nama_pemasok, no_hp, email, produk_id_produk) VALUES (:id_pemasok, :alamat, :nama_pemasok, :no_hp, :email, :produk_id_produk)';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_pemasok', $id_pemasok);
    oci_bind_by_name($stid, ':alamat', $alamat);
    oci_bind_by_name($stid, ':nama_pemasok', $nama_pemasok);
    oci_bind_by_name($stid, ':no_hp', $no_hp);
    oci_bind_by_name($stid, ':email', $email);
    oci_bind_by_name($stid, ':produk_id_produk', $produk_id_produk);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: pemasok.php');
    exit();
} elseif ($action == 'update') {
    $id_pemasok = $_POST['id_pemasok'];
    $alamat = $_POST['alamat'];
    $nama_pemasok = $_POST['nama_pemasok'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $produk_id_produk = $_POST['produk_id_produk'];

    $koneksi = getDbConnection();
    $sql = 'UPDATE Orders SET alamat = :alamat, nama_pemasok = :nama_pemasok, no_hp = :no_hp, email = :email, produk_id_produk = :produk_id_produk WHERE id_pemasok = :id_pemasok';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_pemasok', $id_pemasok);
    oci_bind_by_name($stid, ':alamat', $alamat);
    oci_bind_by_name($stid, ':nama_pemasok', $nama_pemasok);
    oci_bind_by_name($stid, ':no_hp', $no_hp);
    oci_bind_by_name($stid, ':email', $email);
    oci_bind_by_name($stid, ':produk_id_produk', $produk_id_produk);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: pemasok.php');
    exit();
} elseif ($action == 'delete') {
    $id_pemasok = $_POST['id_pemasok'];

    $koneksi = getDbConnection();
    $sql = 'DELETE FROM pemasok WHERE id_pemasok = :id_pemasok';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_pemasok', $id_pemasok);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: pemasok.php');
    exit();
}
?>
