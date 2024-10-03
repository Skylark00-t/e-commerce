<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Update Order</h1>
    <form action="orders.php?action=update" method="post">
        <label for="id_pesanan">Id Pesanan:</label>
        <input type="number" id="id_pesanan" name="id_pesanan"><br>
        <label for="pelanggan_id_pelanggan">Id Pelanggan:</label>
        <input type="number" id="pelanggan_id_pelanggan" name="pelanggan_id_pelanggan"><br>
        <label for="tgl_pemesanan">Tgl Pemesanan:</label>
        <input type="date" id="tgl_pemesanan" name="tgl_pemesanan"><br>
        <label for="total">Total:</label>
        <input type="number" id="total" name="total"><br>
        <label for="kondisi">Status:</label>
        <input type="text" id="kondisi" name="kondisi"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
