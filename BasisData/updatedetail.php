<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Update</h1>
    <form action="details.php?action=update" method="post">
    <label for="id_detail">Id Detail:</label>
        <input type="number" id="id_detail" name="id_detail"><br>
        <label for="jumlah">Id Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah"><br>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga"><br>
        <label for="pesanan_id_pesanan">Id Pesanan:</label>
        <input type="number" id="pesanan_id_pesanan" name="pesanan_id_pesanan"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
