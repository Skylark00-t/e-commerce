<?php
require 'koneksi.php';

$action = $_GET['action'];

if ($action == 'create') {
    $id_pesanan = $_POST['id_pesanan'];
    $tgl_pemesanan = $_POST['tgl_pemesanan'];
    $total = $_POST['total'];
    $kondisi = $_POST['kondisi'];
    $pelanggan_id_pelanggan = $_POST['pelanggan_id_pelanggan'];

    $koneksi = getDbConnection();
    $sql = 'INSERT INTO Orders (id_pesanan, pelanggan_id_pelanggan, tgl_pemesanan, total, kondisi) VALUES (:id_pesanan, :pelanggan_id_pelanggan, :tgl_pemesanan, :total, :kondisi)';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_pesanan', $id_pesanan);
    oci_bind_by_name($stid, ':pelanggan_id_pelanggan', $pelanggan_id_pelanggan);
    oci_bind_by_name($stid, ':tgl_pemesanan', $tgl_pemesanan);
    oci_bind_by_name($stid, ':total', $total);
    oci_bind_by_name($stid, ':kondisi', $kondisi);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: pesanan.php');
    exit();
} elseif ($action == 'update') {
    $id_pesanan = $_POST['id_pesanan'];
    $pelanggan_id_pelanggan = $_POST['pelanggan_id_pelanggan'];
    $tgl_pemesanan = $_POST['tgl_pemesanan'];
    $total = $_POST['total'];
    $kondisi = $_POST['kondisi'];

    $koneksi = getDbConnection();
    $sql = 'UPDATE Orders SET pelanggan_id_pelanggan = :pelanggan_id_pelanggan, tgl_pemesanan = :tgl_pemesanan, total = :total, kondisi = :kondisi WHERE id_pesanan = :id_pesanan';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_pesanan', $id_pesanan);
    oci_bind_by_name($stid, ':pelanggan_id_pelanggan', $pelanggan_id_pelanggan);
    oci_bind_by_name($stid, ':tgl_pemesanan', $tgl_pemesanan);
    oci_bind_by_name($stid, ':total', $total);
    oci_bind_by_name($stid, ':kondisi', $kondisi);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: pesanan.php');
    exit();
} elseif ($action == 'delete') {
    $id_pesanan = $_POST['id_pesanan'];

    $koneksi = getDbConnection();
    $sql = 'DELETE FROM pesanan WHERE id_pesanan = :id_pesanan';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_pesanan', $id_pesanan);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: pesanan.php');
    exit();
}
?>
