<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $nama_produk = htmlspecialchars($_POST['nama_produk']);
        $kategori = htmlspecialchars($_POST['kategori']);
        $harga = htmlspecialchars($_POST['harga']);
        $stok = htmlspecialchars($_POST['stok']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);

        // Menampilkan hasil
        echo "<div class='result'>";
        echo "<h2>Hasil Produk:</h2>";
        echo "<p><strong>Nama Produk:</strong> $nama_produk</p>";
        echo "<p><strong>Kategori:</strong> $kategori</p>";
        echo "<p><strong>Harga:</strong> Rp $harga</p>";
        echo "<p><strong>Stok:</strong> $stok</p>";
        echo "<p><strong>Deskripsi:</strong> $deskripsi</p>";
        echo "</div>";
    }
    ?>