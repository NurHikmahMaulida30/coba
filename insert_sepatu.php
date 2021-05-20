<?php
require("function.php");
if (isset($_POST["insert_sp"])) {
    if (insert_sp($_POST > 0)) {
        echo "<script>
            alert('data berhasil ditambah');
            document.location.href = 'Tsepatu.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambah');
            document.location.href = 'Tsepatu.php';
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
                <label for="id_sepatu">id_sepatu</label>
                <input type="text" name="id_sepatu" id="id_sepatu">
            </li>
            <li>
                <label for="id_merk">id_merk</label>
                <input type="text" name="id_merk" id="id_merk">
            </li>
            <li>
                <label for="ukuran">ukuran</label>
                <input type="text" name="ukuran" id="ukuran">
            </li>
            <li>
                <label for="warna">warna</label>
                <input type="text" name="warna" id="warna">
            </li>
            <li>
                <label for="harga">harga</label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <label for="stok">stok</label>
                <input type="text" name="stok" id="stok">
            </li>
            <li>
                <button type="submit" name="insert_sp">insert</button>
            </li>
            
        </ul>
    </form>
</body>

</html>