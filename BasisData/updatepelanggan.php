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
    <form action="customers.php?action=update" method="post">
        <label for="id_pelanggan">Id Pelanggan:</label>
        <input type="number" id="id_pelanggan" name="id_pelanggan"><br>
        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan"><br>
        <label for="no_hp">No Hp:</label>
        <input type="text" id="no_hp" name="no_hp"><br>
        <label for="email">email:</label>
        <input type="text" id="email" name="email"><br>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
