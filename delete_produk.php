<?php 
    require_once 'dbkoneksi.php';

    // id untuk delete
$id = $_GET['iddel'];

// hapus pesanan
$sql1 = "DELETE FROM pesanan_items WHERE id=?";
$st = $dbh->prepare($sql1);
$st->execute([$id]);

// hapus pembelian
$sql2 = "DELETE FROM pembelian WHERE id=?";
$st = $dbh->prepare($sql2);
$st->execute([$id]);

// hapus produk
$sql = "DELETE FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$id]);

header('location:list_produk.php');

?>