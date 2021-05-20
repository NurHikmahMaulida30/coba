<?php
require("function.php");
if (isset($_POST["insertDetail"])) {
    if (insertDetail($_POST > 0)) {
        echo "<script>
            alert('data berhasil ditambah');
            document.location.href = 'Tdetail_bayar.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambah');
            document.location.href = 'Tdetail_bayar.php';
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
    <a href="Tdetail_bayar.php">kembali</a>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="id_detail">id_detail</label>
                <input type="text" name="id_detail" id="id_detail">
            </li>
            
            <li>
                <label for="id_sepatu">id_sepatu</label>
                <?php
                    $list_sepatu = show("SELECT * FROM sepatu");
                ?>
                <select name="id_sepatu" id="id_sepatu">
                    <?php 
                    foreach($list_sepatu as $sp) { 
                        echo "<option value=".$sp['id_sepatu'].">".$sp['id_sepatu']."</option>";
                    }
                    ?>
                </select>
            </li>
            <li>
                <label for="jumlah_beli">jumlah_beli</label>
                <input type="text" name="jumlah_beli" id="jumlah_beli">
            </li>
            <li>
                <button type="submit" name="insertDetail">insert</button>
            </li>
            
        </ul>
    </form>
</body>

</html>