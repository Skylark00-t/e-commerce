<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Create</h1>
    <form action="orders.php?action=create" method="post">
        <label for="id_produk">Id Produk:</label>
        <input type="number" id="id_produk" name="id_produk"><br>
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" id="nama_produk" name="nama_produk"><br>
        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand"><br>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga"><br>
        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok"><br>
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi"><br>
        <label for="kategori_id_kategori">Id Kategori:</label>
        <input type="number" id="kategori_id_kategori" name="kategori_id_kategori"><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
