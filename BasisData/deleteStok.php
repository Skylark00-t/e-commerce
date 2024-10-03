<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Order</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Delete Order</h1>
    <form action="orders.php?action=delete" method="post">
        <label for="id_stok">Id Stok:</label>
        <input type="number" id="id_stok" name="id_stok"><br>
        <button type="submit">Delete</button>
    </form>
</body>
</html>

