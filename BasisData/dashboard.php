<?php
    include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="sidebar">
        <div class="brand">
            <i class="fa-solid fa-qrcode"></i>&nbsp;
            <h1>Administrator</h1>
        </div>
        <ul>
            <li><i class="fa-solid fa-house"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
            <a href="pelanggan/pelanggan.php">
                <li><i class="fa-solid fa-user"></i>&nbsp;&nbsp;<span>Pelanggan</span></li>
            </a>
            <a href="pesanan/pesanan.php">
                <li><i class="fa-solid fa-folder-open">&nbsp;&nbsp;</i><span>Pesanan</span></li>
            </a>
            <a href="detail/detail.php">
                <li><i class="fa-solid fa-chart-simple">&nbsp;&nbsp;</i><span>Detail Pesanan</span></li>
            </a>
            <a href="produk/produk.php">
                <li><i class="fa-solid fa-print"></i>&nbsp;&nbsp;<span>Produk</span></li>
            </a>
            <a href="kategori/kategori.php">
                <li><i class="fa-solid fa-inbox"></i>&nbsp;&nbsp;<span>Kategori</span></li>
            </a>
            <a href="stok/stok.php">
                <li><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;<span>Stok</span></li>
            </a>
            <a href="pemasok/pemasok.php">
                <li><i class="fa-solid fa-users-line"></i>&nbsp;&nbsp;<span>Pemasok</span></li>
            </a>
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Cari">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn"><i class="fa-solid fa-plus"></i></a>
                    <a href="#" class="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="login.html" class="btn"><i class="fa-solid fa-user"></i></a>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>Data</h1>
                        <h3>Pelanggan</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>Data</h1>
                        <h3>Stok</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>Data</h1>
                        <h3>Pesanan</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-folder-open"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>Data</h1>
                        <h3>Detail Pemesanan</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-chart-simple"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>Data</h1>
                        <h3>Produk</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-print"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>Data</h1>
                        <h3>Kategori</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-inbox"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>Data</h1>
                        <h3>Pemasok</h3>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-users-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>