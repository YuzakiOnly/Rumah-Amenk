<?php
    // require_once "./config/config.php";

    if (isset($_POST['kirim'])) {
        // Mengambil data dari form
        $nama_produk = ($_POST['nama_produk']);
        $kategori = ($_POST['kategori']);
        $harga = ($_POST['harga']);
        $stok = ($_POST['stok']);
        $deskripsi = ($_POST['deskripsi']);

        // Menampilkan hasil
        echo "<div class='result'>";
        echo "<h2>Hasil Produk:</h2>";
        echo "<p><strong>Nama Produk:</strong> $nama_produk</p>";
        echo "<p><strong>Kategori:</strong> $kategori</p>";
        echo "<p><strong>Harga:</strong> Rp.
        $harga</p>";
        echo "<p><strong>Stok:</strong> $stok</p>";
        echo "<p><strong>Deskripsi:</strong> $deskripsi</p>";
        echo "</div>";

        $data = [
            'nama_produk' => $nama_produk,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'deskripsi' => $deskripsi
        ];
        
        $validasi = validasiData($data);
        if ($validasi == 0){
            echo "data siap di input";
        }
        else{
            echo "data $validasi kurang";
        }
    }


    ?>