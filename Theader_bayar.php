<?php
require("function.php");
$data = show("SELECT * FROM header_bayar");
if (isset($_GET["deleteHeader"])) {
    if (deleteHeader($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'Theader_bayar.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
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
    <title>Modul5</title>
</head>

<body>
    <form action="insert_header.php">
        <button>INSERT</button>
    </form>
    <table border="1">
        <tr>
            <td>no_nota</td>
            <td>tanggal</td>
            <td>id_detail</td>
            <td>total_pembelian</td>
            <td>bayar</td>
            <td>sisa_bayar</td>
            <td>aksi</td>
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr>
                <td><?php echo $d["no_nota"]; ?></td>
                <td><?php echo $d["tanggal"]; ?></td>
                <td><?php echo $d["id_detail"]; ?></td>
                <td><?php echo $d["total_pembelian"]; ?></td>
                <td><?php echo $d["bayar"]; ?></td>
                <td><?php echo $d["sisa_bayar"]; ?></td>
                <td>
                    <form action="" method="GET">
                        <button type="submit" name="deleteHeader" value=<?php echo $d["no_nota"]; ?>>DELETE</button>
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