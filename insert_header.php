<?php
require("function.php");
if (isset($_POST["insertHeader"])) {
    if (insertHeader($_POST > 0)) {
        echo "<script>
            alert('data berhasil ditambah');
            document.location.href = 'Theader_bayar.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambah');
            document.location.href = 'Theader_bayar.php';
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
    <a href="Theader_bayar.php">kembali</a>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="no_nota">no_nota</label>
                <input type="text" name="no_nota" id="no_nota">
            </li>
            <li>
                <label for="tanggal">tanggal</label>
                <input type="text" name="tanggal" id="tanggal">
            </li>
           
            <li>
                <label for="id_detail">id_detail</label>
                <?php
                    $list_sepatu = show("SELECT * FROM detail_bayar");
                ?>
                <select name="id_detail" id="id_detail">
                    <?php 
                    foreach($list_sepatu as $sp) { 
                        echo "<option value=".$sp['id_detail'].">".$sp['id_detail']."</option>";
                    }
                    ?>
                </select>
            </li>

            <li>
                <label for="total_pembelian">total_pembelian</label>
                <input type="text" name="total_pembelian" id="total_pembelian">
            </li>
            <li>
                <label for="bayar">bayar</label>
                <input type="text" name="bayar" id="bayar">
            </li>
            <li>
                <label for="sisa bayar">sisa bayar</label>
                <input type="text" name="sisa bayar" id="sisa bayar">
            </li>
            <li>
                <button type="submit" name="insertHeader">insert</button>
            </li>
            
        </ul>
    </form>
</body>

</html>