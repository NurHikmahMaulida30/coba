<?php
require("function.php");
if (isset($_POST["insert"])) {
    if (insert($_POST > 0)) {
        echo "<script>
            alert('data berhasil ditambah');
            document.location.href = 'Tmerek.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambah');
            document.location.href = 'Tmerek.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <a href="Tmerek.php">kembali</a>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="id_merk">id_merk</label>
                <input type="text" name="id_merk" id="id_merk">
            </li>
            <li>
                <label for="nama_merk">nama_merk</label>
                <input type="text" name="nama_merk" id="nama_merk">
            </li>
            <li>
                <label for="model_sepatu">model_sepatu</label>
                <input type="text" name="model_sepatu" id="model_sepatu">
            </li>
            <li>
                <button type="submit" name="insert">insert</button>
            </li>
            
        </ul>
    </form>
</body>

</html>