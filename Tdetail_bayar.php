<?php
require("function.php");
$data = show("SELECT * FROM detail_bayar");
if (isset($_GET["deleteDetail"])) {
    if (deleteDetail($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'Tdetail_bayar.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
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
    <title>Modul3</title>
</head>

<body>
    <form action="insert_detail.php">
        <button>INSERT</button>
    </form>
    <table border="1">
        <tr>
            <td>id_detail</td>
            <td>id_sepatu</td>
            <td>jumlah_beli</td>
            <td>Aksi</td>
            
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr>
                <td><?php echo $d["id_detail"]; ?></td>
                <td><?php echo $d["id_sepatu"]; ?></td>
                <td><?php echo $d["jumlah_beli"]; ?></td>
                <td>
                    <form action="" method="GET">
                        <button type="submit" name="deleteDetail" value=<?php echo $d["id_detail"]; ?>>DELETE</button>
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