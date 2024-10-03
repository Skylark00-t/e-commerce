<?php
require 'koneksi.php';

$action = $_GET['action'];

if ($action == 'create') {
    $id_stok = $_POST['id_stok'];
    $jumlah = $_POST['jumlah'];
    $terakhir_update = $_POST['terakhir_update'];
    $produk_id_produk = $_POST['produk_id_produk'];

    $koneksi = getDbConnection();
    $sql = 'INSERT INTO Orders (id_stok, produk_id_produk, jumlah, terakhir_update) VALUES (:id_stok, :produk_id_produk, :jumlah, :terakhir_update)';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_stok', $id_stok);
    oci_bind_by_name($stid, ':produk_id_produk', $produk_id_produk);
    oci_bind_by_name($stid, ':jumlah', $jumlah);
    oci_bind_by_name($stid, ':terakhir_update', $terakhir_update);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: stok.php');
    exit();
} elseif ($action == 'update') {
    $id_stok = $_POST['id_stok'];
    $produk_id_produk = $_POST['produk_id_produk'];
    $jumlah = $_POST['jumlah'];
    $terakhir_update = $_POST['terakhir_update'];

    $koneksi = getDbConnection();
    $sql = 'UPDATE Orders SET produk_id_produk = :produk_id_produk, jumlah = :jumlah, terakhir_update = :terakhir_update WHERE id_stok = :id_stok';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_stok', $id_stok);
    oci_bind_by_name($stid, ':produk_id_produk', $produk_id_produk);
    oci_bind_by_name($stid, ':jumlah', $jumlah);
    oci_bind_by_name($stid, ':terakhir_update', $terakhir_update);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: stok.php');
    exit();
} elseif ($action == 'delete') {
    $id_stok = $_POST['id_stok'];

    $koneksi = getDbConnection();
    $sql = 'DELETE FROM stok WHERE id_stok = :id_stok';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_stok', $id_stok);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: stok.php');
    exit();
}
?>
