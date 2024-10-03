<?php
require 'koneksi.php';

$action = $_GET['action'];

if ($action == 'create') {
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    $koneksi = getDbConnection();
    $sql = 'INSERT INTO Orders (id_kategori, nama_kategori) VALUES (:id_kategori,, :nama_kategori)';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_kategori', $id_kategori);
    oci_bind_by_name($stid, ':nama_kategori', $nama_kategori);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: kategori.php');
    exit();
} elseif ($action == 'update') {
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    $koneksi = getDbConnection();
    $sql = 'UPDATE detail SET nama_kategori = :nama_kategori  = WHERE id_kategori = :id_kategori';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_kategori', $id_kategori);
    oci_bind_by_name($stid, ':nama_kategori', $nama_kategori);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: kategori.php');
    exit();
} elseif ($action == 'delete') {
    $id_kategori = $_POST['id_kategori'];

    $koneksi = getDbConnection();
    $sql = 'DELETE FROM kategori WHERE id_kategori = :id_kategori';
    $stid = oci_parse($koneksi, $sql);
    oci_bind_by_name($stid, ':id_kategori', $id_kategori);
    oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

    oci_free_statement($stid);
    oci_close($koneksi);

    header('Location: kategori.php');
    exit();
}
?>
