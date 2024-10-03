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
    <form action="categories.php?action=create" method="post">
        <label for="id_kategori"> Id Kategori:</label>
        <input type="number" id="id_kategori" name="id_kategori"><br>
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" id="nama_kategori" name="nama_kategori"><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
