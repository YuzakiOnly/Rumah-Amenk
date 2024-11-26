<?php
    require "../config/config.php"
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Form Makanan</title>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
        <form action="inputmakanan.php" enctype="multipart/form-data" method="post" class="space-y-6">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Form Makanan Rumah Amenk</h1>

            <div>
                <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk:</label>
                <input type="text"
                    id="nama_produk"
                    name="nama_produk"
                    placeholder="Isi Nama Product"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori Makanan:</label>
                <select id="kategori"
                    name="kategori"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    <option selected value="0" >--Pilih Kategori--</option>
                                <?php 
                                    $kategori = viewKategori($koneksi);

                                    if($kategori != false) {
                                        foreach($kategori as $recA) {
                                ?>

                    <option value="<?= $recA['id'] ?>"><?= $recA['nama'] ?></option>

                                <?php 
                                        }
                                    } 
                                ?>
                </select>
            </div>

            <div>
                <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">Harga:</label>
                <input type="number"
                    id="harga"
                    name="harga"
                    placeholder="Isi Harga Makanan"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="stok" class="block text-sm font-medium text-gray-700 mb-1">Stok:</label>
                <input type="number"
                    id="stok"
                    name="stok"
                    placeholder="Isi Stok Makanan"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi:</label>
                <textarea id="deskripsi"
                    name="deskripsi"
                    placeholder="Isi Deskripsi"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 h-32"></textarea>
            </div>

            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Gambar Produk:</label>
                <input type="file"
                    id="gambar"
                    name="gambar"
                    accept="image/*"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                    onchange="previewImage(event)">
                <p class="mt-1 text-xs text-gray-500">Format yang diperbolehkan: JPG, JPEG, PNG, GIF. Maksimal 5MB.</p>
            </div>

            <div class="mt-4">
                <img id="imagePreview"
                    src=""
                    alt="Image Preview"
                    class="hidden w-full h-auto rounded-md object-cover max-h-48" />
            </div>

            <button type="submit"
                name="kirim"
                class="w-full bg-blue-500 text-white font-semibold py-3 rounded-md hover:bg-blue-600 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Submit
            </button>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            } else {
                imagePreview.classList.add('hidden');
            }
        }
    </script>
</body>

</html>