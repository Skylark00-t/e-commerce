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
        <label for="id_stok">Id Stok:</label>
        <input type="number" id="id_stok" name="id_stok"><br>
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah"><br>
        <label for="terakhir_update">Terakhir Update:</label>
        <input type="date" id="terakhir_update" name="terakhir_update"><br>
        <label for="produk_id_produk">Id Produk:</label>
        <input type="number" id="produk_id_produk" name="produk_id_produk"><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
