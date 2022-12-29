<?php
//cek apakah ada session atau tidak, kalau tidak, kembalikan ke halaman login
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}
require 'function.php';
if (isset($_SESSION["username"])) {
    $user = $_SESSION["username"];
}
$transaksi = mysqli_query($conn, "SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin NeNurShop</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <h2 class="logo">NeNur Shop</h2>
            <h1 class="title">DATA TRANSAKSI PENJUALAN</h1>
        </header>
        <div class="container">
            <div class="sidebar">
                <ul>
                    <li class="admin-user">
                        <h2><?= $user ?></h2>
                        <a class="logout-admin" href="logout.php">Log Out</a>
                    </li>
                    <li><a href="admin.php" class="menu-admin">Data Transaksi</a></li>
                    <li><a href="produk.php" class="menu-admin">Data Produk</a></li>
                </ul>
            </div>
            <div class="admin">
                <table border="1">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama pembeli</th>
                        <th>No. Telpon</th>
                        <th>Alamat</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                    <?php $i = 1;
                    foreach($transaksi as $data): ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data["tanggal"]; ?></td>
                        <td><?= $data["user"]; ?></td>
                        <td><?= $data["telpon"]; ?></td>
                        <td><?= $data["alamat"]; ?></td>
                        <td><?= $data["produk"]; ?></td>
                        <td><?= $data["jumlah"]; ?></td>
                        <td>Rp. <?= number_format($data["harga"], 0, ".", "."); ?></td>
                    </tr>
                    <?php $i++;
                    endforeach; ?>
                </table>
            </div>
        </div>
    </body>
</html>