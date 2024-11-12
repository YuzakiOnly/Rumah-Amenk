<?php
    require "../config/config.php"
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Form Makanan</title>
</head>
<body>

    <form action="inputmakanan.php" enctype="multipart/form-data" method="post">
    <h1>Form Makanan Rumah Amenk</h1>
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" id="nama_produk" name="nama_produk" placeholder="Isi Nama Product" required>
        
        <label for="kategori">Kategori Makanan:</label>
        <select  id="0" name="kategori" required>
            <option selected value="0">Pilih Makanan</option>
            <?php 
                $kategori = viewkategori($koneksi);

                if($kategori != false){
                    foreach($kategori as $reck) {
                ?>
                <option value="<?= $reck['id'] ?>"><?= $reck['name'] ?></option>

                <?php  
                        }
                    } 
                ?>
        </select>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" placeholder="Isi Harga Makanan" required>

        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" placeholder="Isi Stok Makanan" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" placeholder="Isi Deskripsi" required></textarea>

        <label for="gambar">Gambar Produk</label>
                <input type="file" id="gambar" name="gambar" accept="image/*">
                <p style="font-size: 0.9em; color: #666;">Format yang diperbolehkan: JPG, JPEG, PNG, GIF. Maksimal 5MB.</p>

        <input type="submit" value="Sumbit" name="kirim">
    </form>

    <!-- <script>
        document.getElementById('gambar').onchange = function(e) {
            const preview = document.querySelector('.preview-image');
            if (preview) {
                preview.remove();
            }
    
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'preview-image';
                    document.querySelector('.form-group:last-of-type').appendChild(img);
                }
                reader.readAsDataURL(file);
            }
        };
    </script> -->

</body>
</html>