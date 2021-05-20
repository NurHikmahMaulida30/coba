<?php
require("function.php");
$data = show("SELECT * FROM merk");
if (isset($_GET["delete"])) {
    if (delete($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'Tmerek.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
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
    <title>Modul3</title>
</head>

<body>
    <form action="insert.php">
        <button>INSERT</button>
    </form>
    <table border="1">
        <tr>
            <td>id_merk</td>
            <td>nama_merk</td>
            <td>model_sepatu</td>
            <td>aksi</td>
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr>
                <td><?php echo $d["id_merk"]; ?></td>
                <td><?php echo $d["nama_merk"]; ?></td>
                <td><?php echo $d["model_sepatu"]; ?></td>
                <td>
                    <form action="" method="GET">
                        <button type="submit" name="delete" value=<?php echo $d["id_merk"]; ?>>DELETE</button>
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