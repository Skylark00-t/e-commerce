<?php
require 'koneksi.php';

$action = $_GET['action'];

if ($action == 'create') {
    $id_detail = $_POST['id_detail'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $pesanan_id_pesanan = $_POST['pesanan_id_pesanan'];

    $koneksi = getDbConnection();
    $sql = 'INSERT INTO Orders (id_detail, pesanan_id_pesanan, jumlah, harga) VALUES (:id_detail, :pesanan_id_pesanan, :jumlah, :harga)';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_detail', $id_detail);
    oci_bind_by_name($stid, ':pesanan_id_pesanan', $pesanan_id_pesanan);
    oci_bind_by_name($stid, ':jumlah', $jumlah);
    oci_bind_by_name($stid, ':harga', $harga);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: detail.php');
    exit();
} elseif ($action == 'update') {
    $id_detail = $_POST['id_detail'];
    $pesanan_id_pesanan = $_POST['pesanan_id_pesanan'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $koneksi = getDbConnection();
    $sql = 'UPDATE Orders SET pesanan_id_pesanan = :pesanan_id_pesanan, jumlah = :jumlah, harga = :harga WHERE id_detail = :id_detail';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_detail', $id_detail);
    oci_bind_by_name($stid, ':pesanan_id_pesanan', $pesanan_id_pesanan);
    oci_bind_by_name($stid, ':jumlah', $jumlah);
    oci_bind_by_name($stid, ':harga', $harga);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: detail.php');
    exit();
} elseif ($action == 'delete') {
    $id_detail = $_POST['id_detail'];

    $koneksi = getDbConnection();
    $sql = 'DELETE FROM detail WHERE id_detail = :id_detail';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_detail', $id_detail);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: detail.php');
    exit();
}
?>
