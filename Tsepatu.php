<?php
require("function.php");
$data = show("SELECT * FROM sepatu");
if (isset($_GET["delete_sp"])) {
    if (delete_sp($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'Tsepatu.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
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
    <title>Modul3</title>
</head>

<body>
    <form action="insert_sepatu.php">
        <button>INSERT</button>
    </form>
    <table border="1">
        <tr>
            <td>id_sepatu</td>
            <td>id_merk</td>
            <td>ukuran</td>
            <td>warna</td>
            <td>harga</td>
            <td>stok</td>
            <td>aksi</td>
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr>
                <td><?php echo $d["id_sepatu"]; ?></td>
                <td><?php echo $d["id_merk"]; ?></td>
                <td><?php echo $d["ukuran"]; ?></td>
                <td><?php echo $d["warna"]; ?></td>
                <td><?php echo $d["harga"]; ?></td>
                <td><?php echo $d["stok"]; ?></td>
                <td>
                    <form action="" method="GET">
                        <button type="submit" name="delete_sp" value=<?php echo $d["id_sepatu"]; ?>>DELETE</button>
                    </form>
                    
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
         <br><a href="index.php"> HOME <a> 
</body>

</html>