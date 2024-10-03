<?php
    include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="sidebar">
        <div class="brand">
            <i class="fa-solid fa-qrcode"></i>&nbsp;&nbsp;
            <h1>Administrator</h1>
        </div>
        <ul>
            <a href="dashboard.html">
                <li><i class="fa-solid fa-house"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
            </a>
            <li><i class="fa-solid fa-user"></i>&nbsp;&nbsp;<span>Pelanggan</span></li>
            <a href="pesanan/pesanan.php">
                <li><i class="fa-solid fa-folder-open">&nbsp;&nbsp;</i><span>Pesanan</span></li>
            </a>
            <a href="detail/Detail.php">
                <li><i class="fa-solid fa-chart-simple">&nbsp;&nbsp;</i><span>Detail Pesanan</span></li>
            </a>
            <a href="produk.html">
                <li><i class="fa-solid fa-print"></i>&nbsp;&nbsp;<span>Produk</span></li>
            </a>
            <a href="kategori/kategori.php">
                <li><i class="fa-solid fa-inbox"></i>&nbsp;&nbsp;<span>Kategori</span></li>
            </a>
            <a href="stok.html">
                <li><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;<span>Stok</span></li>
            </a>
            <a href="pemasok.html">
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
            <div class="content-2">
                <div class="payments">
                    <div class="title">
                        <h2>Data Pelanggan</h2>
                        <a href="#" class="btn">Lihat semua</a>
                    </div>
                    <table>
                        <tr>
                            <th>Id Pelanggan</th>
                            <th>Nama Pelanggan</th>
                            <th>No Hp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                        </tr>
                        <?php
                        require 'koneksi.php';
                        $koneksi = getDbConnection();
                        $stid = oci_parse($koneksi, 'SELECT * FROM pelanggan');
                        oci_execute($stid);

                        while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
                            echo "<tr>";
                            echo "<td>" . $row['id_pelanggan'] . "</td>";
                            echo "<td>" . $row['nama_pelanggan'] . "</td>";
                            echo "<td>" . $row['no_hp'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['alamat'] . "</td>";
                            echo "</tr>";
                        }
                        oci_free_statement($stid);
                        oci_close($koneksi);
                        ?>
                    </table>
                </div>
            </div> 
            
            <a href="pelanggan/create.php" class="tombol">Create</a>
            <a href="pelanggan/update.php" class="tombol">Update</a>
            <a href="pelanggan/delete.php" class="tombol">Delete</a>
        </div>
    </div>        
</body>
</html>
