<?php 
$servername = "localhost";
$database = "193010503004_toko_sepatu";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

function show($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function insert($data){
    global $conn;
    $id_merk = $_POST["id_merk"];
    $nama_merk = $_POST["nama_merk"];
    $model_sepatu = $_POST["model_sepatu"];

    mysqli_query($conn,"call insertMerk('$id_merk','$nama_merk','$model_sepatu')" );
    return mysqli_affected_rows($conn);
}

function insert_sp($data){
    global $conn;
    $id_sepatu = $_POST["id_sepatu"];
    $id_merk = $_POST["id_merk"];
    $ukuran = $_POST["ukuran"];
    $warna = $_POST["warna"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    mysqli_query($conn,"call insertSepatu('$id_sepatu','$id_merk','$ukuran','$warna','$harga','$stok'  )" );
    return mysqli_affected_rows($conn);
}
function insertDetail($data){
    global $conn;
    $id_detail = $_POST["id_detail"];
    $id_sepatu = $_POST["id_sepatu"];
    $jumlah_beli = $_POST["jumlah_beli"];

    mysqli_query($conn,"call insertDetailBayar('$id_detail','$id_sepatu','$jumlah_beli')" );
    return mysqli_affected_rows($conn);
}

function insertHeader($data){
    global $conn;
    $no_nota = $_POST["no_nota"];
    $tanggal = $_POST["tanggal"];
    $id_detail = $_POST["id_detail"];
    $total_pembelian = $_POST["total_pembelian"];
    $bayar = $_POST["bayar"];
    $sisa_bayar = $_POST["sisa_bayar"];

    mysqli_query($conn,"call insertHeaderBayar('$no_nota','$tanggal','$id_detail','$total_pembelian','$bayar','$sisa_bayar' )" );
    return mysqli_affected_rows($conn);
}

function delete($data){
    global $conn;
    $id_merk = $_GET["delete"];
    mysqli_query($conn, "call deleteMerk('$id_merk')");
    return mysqli_affected_rows($conn);
}

function delete_sp($data){
    global $conn;
    $id_sepatu = $_GET["delete_sp"];
    mysqli_query($conn, "call deleteSepatu('$id_sepatu')");
    return mysqli_affected_rows($conn);
}
function deleteDetail($data){
    global $conn;
    $id_detail = $_GET["deleteDetail"];
    mysqli_query($conn, "call deleteDetailBayar('$id_detail')");
    return mysqli_affected_rows($conn);
}
function deleteHeader($data){
    global $conn;
    $no_nota = $_GET["deleteHeader"];
    mysqli_query($conn, "call deleteHeader('$no_nota')");
    return mysqli_affected_rows($conn);
}



?>
