<?php
//cek apakah ada session atau tidak, kalau tidak, kembalikan ke halaman login
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'function.php';
$barang = query("SELECT * FROM produk WHERE stok > 0");
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $barang = query("SELECT * FROM produk WHERE stok > 0 AND nama LIKE '%".$cari."%' OR tag LIKE '%".$cari."%'");
    if (!$barang) {
        $error = true;
    }	
}
if (isset($_SESSION["username"])) {
    $user = $_SESSION["username"];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NeNur Shop</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <h2 class="logo">NeNur Shop</h2>
            <form action="index.php" method="get" class="cari">
                <input type="text" placeholder="Masukkan nama produk" name="cari" class="search">
                <input type="submit" value="Cari" class="tombol">
            </form>
            <a class="logout" href="logout.php">Log Out</a>
            <h4 class="user"><?= $user ?></h4>  
        </header>
        <div class="container">
            <div class="list-produk">
                <?php if (isset($error)): ?>
                    <p class="error-cari">Produk yang anda cari tidak ditemukan</p>
                    <a class="kembali" href="index.php">Kembali</a>
                <?php endif; ?>
            <?php foreach($barang as $produk): ?>
                <div class="produk">
                    <img src="produk/<?php echo $produk["gambar"]; ?>" >
                    <div class="produk-text">
                        <h3><?php echo $produk["nama"]; ?></h3>
                        <h4>Rp. <?php echo number_format($produk["harga"], 0, ".", "."); ?></h4>
                        <a class="pesan" href="checkout.php?id=<?= $produk["produk_id"]; ?>">Beli</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>