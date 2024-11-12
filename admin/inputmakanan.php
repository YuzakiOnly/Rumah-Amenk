<?php
    require_once "../config/config.php";

    if (isset($_POST['kirim'])) {
        // Mengambil data dari form
        $nama_produk = ($_POST['nama_produk']);
        $kategori = ($_POST['kategori']);
        $harga = ($_POST['harga']);
        $stok = ($_POST['stok']);
        $deskripsi = ($_POST['deskripsi']);
        $gambar = basename($_FILES['gambar']['name']);

        // Menampilkan hasil
        // echo "<div class='result'>";
        // echo "<h2>Hasil Produk:</h2>";
        // echo "<p><strong>Nama Produk:</strong> $nama_produk</p>";
        // echo "<p><strong>Kategori:</strong> $kategori</p>";
        // echo "<p><strong>Harga:</strong> Rp.
        // $harga</p>";
        // echo "<p><strong>Stok:</strong> $stok</p>";
        // echo "<p><strong>Deskripsi:</strong> $deskripsi</p>";
        // echo "</div>";

        $data = [
            'nama_produk' => $nama_produk,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'deskripsi' => $deskripsi,
            'gambar'=> $gambar
        ];
        
        $validasi = validasiData($data);
        if($validasi == 0 ){
            // echo "data sudah lengkap siap di inputkan";
            $result = inputmakanan($data, $koneksi);
            $folderTujuan = $rootDir."upload";
            if($result) 
            { 
                $upload = tambahGambar($folderTujuan, $_FILES['gambar']);
                if($upload) 
                    header("location:makanan.php?status=1");
                else 
                header("location:makanan.php?status=1&errno=2");
            }
            else header("location:makanan.php?errno=1");
        }
        else {
            echo "data $validasi kurang";
        }
    }

    ?>