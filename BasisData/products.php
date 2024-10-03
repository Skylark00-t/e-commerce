<?php
require 'koneksi.php';

$action = $_GET['action'];

if ($action == 'create') {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $brand = $_POST['brand'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    $kategori_id_kategori = $_POST['kategori_id_kategori'];

    $koneksi = getDbConnection();
    $sql = 'INSERT INTO Orders (id_produk, stok, nama_produk, brand, harga, deskripsi, kategori_id_kategori) VALUES (:id_produk, :stok, :nama_produk, :brand, :harga, :deskripsi, :kategori_id_kategori)';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_produk', $id_produk);
    oci_bind_by_name($stid, ':stok', $stok);
    oci_bind_by_name($stid, ':nama_produk', $nama_produk);
    oci_bind_by_name($stid, ':brand', $brand);
    oci_bind_by_name($stid, ':harga', $harga);
    oci_bind_by_name($stid, ':deskripsi', $deskripsi);
    oci_bind_by_name($stid, ':kategori_id_kategori', $kategori_id_kategori);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: produk.php');
    exit();
} elseif ($action == 'update') {
    $id_produk = $_POST['id_produk'];
    $stok = $_POST['stok'];
    $nama_produk = $_POST['nama_produk'];
    $brand = $_POST['brand'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $kategori_id_kategori = $_POST['kategori_id_kategori'];

    $koneksi = getDbConnection();
    $sql = 'UPDATE Orders SET stok = :stok, nama_produk = :nama_produk, brand = :brand, harga = :harga, deskripsi = :deskripsi, kategori_id_kategori = :kategori_id_kategori WHERE id_produk = :id_produk';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_produk', $id_produk);
    oci_bind_by_name($stid, ':stok', $stok);
    oci_bind_by_name($stid, ':nama_produk', $nama_produk);
    oci_bind_by_name($stid, ':brand', $brand);
    oci_bind_by_name($stid, ':harga', $harga);
    oci_bind_by_name($stid, ':deskripsi', $deskripsi);
    oci_bind_by_name($stid, ':kategori_id_kategori', $kategori_id_kategori);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: produk.php');
    exit();
} elseif ($action == 'delete') {
    $id_produk = $_POST['id_produk'];

    $koneksi = getDbConnection();
    $sql = 'DELETE FROM produk WHERE id_produk = :id_produk';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_produk', $id_produk);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: produk.php');
    exit();
}
?>
