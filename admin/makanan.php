<?php
require "../config/config.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Form Makanan</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <form action="" enctype="multipart/form-data" method="post" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Form Makanan Rumah Amenk</h1>
        
        <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk:</label>
        <input type="text" id="nama_produk" name="nama_produk" placeholder="Isi Nama Produk" required class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2">

        <label for="kategori" class="block text-sm font-medium text-gray-700 mt-4">Kategori Makanan:</label>
        <select id="kategori" name="kategori" required class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2">
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

        <label for="harga" class="block text-sm font-medium text-gray-700 mt-4">Harga:</label>
        <input type="number" id="harga" name="harga" placeholder="Isi Harga Makanan" required class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2">

        <label for="stok" class="block text-sm font-medium text-gray-700 mt-4">Stok:</label>
        <input type="number" id="stok" name="stok" placeholder="Isi Stok Makanan" required class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2">

        <label for="deskripsi" class="block text-sm font-medium text-gray-700 mt-4">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" placeholder="Isi Deskripsi" required class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2"></textarea>

        <label for="gambar" class="block text-sm font-medium text-gray-700 mt-4">Gambar Produk:</label>
        <input type="file" id="gambar" name="gambar" accept="image/*" class="mt-1 block w-full border border-gray-300 rounded-md px-4 py-2" onchange="previewImage(event)">
        <p class="mt-1 text-xs text-gray-500">Format yang diperbolehkan: JPG, JPEG, PNG, GIF. Maksimal 5MB.</p>

        <div class="mt-4">
            <img id="imagePreview" src="" alt="Image Preview" class="hidden w-full h-auto rounded-md" />
        </div>

        <input type="submit" value="Sumbit" name="kirim" class="mt-6 w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition duration-200">
    </form>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden'); // Tampilkan gambar
                }
                reader.readAsDataURL(file);
            } else {
                imagePreview.classList.add('hidden'); // Sembunyikan gambar jika tidak ada file
            }
        }
    </script>

</body>
</html>