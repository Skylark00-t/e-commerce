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
        <label for="id_pemasok">Id Pemasok:</label>
        <input type="number" id="id_pemasok" name="id_pemasok"><br>
        <label for="nama_pemasok">Nama Pemasok:</label>
        <input type="text" id="nama_pemasok" name="nama_pemasok"><br>
        <label for="no_hp">No Hp:</label>
        <input type="text" id="no_hp" name="no_hp"><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat"><br>
        <label for="produk_id_produk">Id Produk:</label>
        <input type="number" id="produk_id_produk" name="produk_id_produk"><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
