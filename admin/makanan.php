<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Form Makanan</title>
</head>
<body>

    <form action="hasilmakanan.php" enctype="multipart/form-data" method="post">
    <h1>Form Makanan Rumah Amenk</h1>
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" id="nama_produk" name="nama_produk" required>

        <label for="kategori">Kategori Makanan:</label>
        <select id="kategori" name="kategori" required>
            <option value="makanan_berat">Makanan Berat</option>
            <option value="makanan_ringan">Makanan Ringan</option>
            <option value="minuman">Minuman</option>
        </select>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required>

        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" required></textarea>

        <label for="gambar">Upload Gambar:</label>
        <input type="file" id="gambar" name="gambar" accept="image/*" required onchange="previewImage(event)">
        <img id="preview">

        <input type="submit" value="Sumbit">
    </form>


</body>
</html>