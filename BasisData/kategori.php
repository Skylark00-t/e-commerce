<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
*{
    margin: 0;
    padding: 0;
    text-decoration: none;
    box-sizing: border-box;
    list-style: none;
}

body{
    min-height: 100vh;
}

.sidebar{
    position: fixed;
    background: #070F2B;
    width: 20vw;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.brand{
    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 2px solid white;
    margin-bottom: 10px;
    color: white;
    cursor: pointer;
}

.brand i{
    font-size: 20px;
}

.sidebar ul li{
    font-size: 24px;
    padding: 10px 40px;
    color: white;
    display: flex;
    align-items: center;
    cursor: pointer;
}

.sidebar ul li:hover{
    background: rgba(0, 0, 0, 0.2);
    color: #535C91;
}

.container{
    position: absolute;
    right: 0;
    width: 80vw;
    height: 100vh;
}

.header{
    position: fixed;
    top: 0;
    right: 0;
    width: 80vw;
    height: 10vh;
    background: #535C91;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.nav{
    width: 90%;
    display: flex;
    align-items: center;
}

.search{
    flex: 5;
    display: flex;
    justify-content: center;
}

.search input{
    border: none;
    background: white;
    padding: 10px;
    width: 50%;
}

.search button{
    width: 40px;
    height: 40px;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.user{
    flex: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.user i{
    width: 40px;
    height: 40px;
    font-size: 30px;
    padding: 5px;
    background: white;
    border-radius: 50%;
    color: #070F2B;
    margin: 5px 5px;
}

.content{
    position: relative;
    margin-top: 10vh;
    min-height: 90vh;
    background: #1B1A55;
    padding: 20px;
}

.tombol{
    background: white;
    color: #070F2B;
    position: relative;
    left: 123px;
    bottom: 30px;
    width: 150px;
    cursor: pointer;
    padding: 12px 25px;
    display: inline;
    border-radius: 20px;
}

.tombol:hover{
    background: #9290C3;
}

.cards{
    padding: 15px 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

.card{
    width: 230px;
    height: 130px;
    background: white;
    margin: 15px 8px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.box h1{
    color: #DBB5B5;
}

.icon{
    color: #987070;
    font-size: 40px;
}

i:hover{
    color: #C39898;
}

.content-2{
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}

.payments{
    min-height: 50vh;
    flex: 5;
    background: white;
    margin: 0 25px 25px 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;
}

.title{
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 15px 10px;
    border-bottom: 2px solid black;
}

.title .btn, .payments .btn{
    background: #9290C3;
    color: white;
    padding: 5px 10px;
    text-align: center;
    border-radius: 10px;
}

.title .btn:hover, .payments .btn:hover{
    color: #070F2B;
    background: white;
    padding: 5px 10px;
    text-align: center;
}

table{
    padding: 10px;
}

th, td{
    text-align: left;
    padding: 8px;
}

.students{
    flex: 2;
    background: white;
    margin: 0 25px;
    box-shadow:  4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;
}

@media screen and (max-width: 1050px){
    .sidebar ul li{
        font-size: 18px;
    }
}

@media screen and (max-width: 940px){
    .sidebar ul li span{
        display: none;
    }
    .sidebar{
        align-items: center;
    }
    .sidebar ul li i{
        font-size: 30px;
    }
    .sidebar ul li:hover{
        padding: 8px 38px;
    }
}

@media screen and (max-width: 536px){
    .brand h1{
        display: none;
    }

    .brand i{
        font-size: 30px;
    }

    .cards{
        justify-content: center;
    }

    .sidebar ul li i{
        font-size: 20px;
    }
}
</style>
</head>

    <div class="sidebar">
        <div class="brand">
            <i class="fa-solid fa-qrcode"></i>&nbsp;&nbsp;
            <h1>Administrator</h1>
        </div>
        <ul>
            <a href="dashboard.html">
                <li><i class="fa-solid fa-house"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
            </a>
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
            <li><i class="fa-solid fa-inbox"></i>&nbsp;&nbsp;<span>Kategori</span></li>
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
            <div class="content-2">
                <div class="payments">
                    <div class="title">
                        <h2>Kategori</h2>
                        <a href="#" class="btn">Lihat semua</a>
                    </div>
                    <table>
                        <tr>
                            <th>Id Kategori</th>
                            <th>Nama Kategori</th>
                        </tr>
                        <?php
                        include("koneksi.php");
                        $stid = oci_parse($koneksi, 'SELECT * FROM kategori');
                        oci_execute($stid);

                        while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
                            echo "<tr>";
                            echo "<td>" . $row['id_kategori'] . "</td>";
                            echo "<td>" . $row['nama_kategori'] . "</td>";
                            echo "</tr>";
                        }
                        oci_free_statement($stid);
                        oci_close($koneksi);
                        ?>
                    </table>
                </div>
            </div> 
            
            <a href="kategori/create.php" class="tombol">Create</a>
            <a href="kategori/update.php" class="tombol">Update</a>
            <a href="kategori/delete.php" class="tombol">Delete</a>
        </div>
    </div>        

</html>
