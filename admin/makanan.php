<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="admin.css">
<title>Rumah Amenk Form </title>

<body>
    <form action="hasilmakanan.php" enctype="multipart/form-data" method="POST">
        <div class="container">
            <h1>Rumah Amenk</h1>
            <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="product-name">Nama Produk:</label>
                <input type="text" id="product-name" name="product-name" placeholder="Isi Nama Produk Makanan" required>
            </div>
            <div class="form-group">
                <label for="food-category">Kategori Makanan</label>
                <select id="food-category" name="food-category" required>
                <option value="">Makanan Berat</option>
                <option value="main-dish">Makanan Ringan</option>
                <option value="appetizer">Minuman</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Harga:</label>
                <input type="text" id="price" name="price" placeholder="Isi Harga" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea id="description" name="description" rows="3" placeholder="Isi Deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="product-image">Gambar Produk:</label>
                <input type="file" id="product-image" name="product-image" accept="image/*" required>
                <img src="#" alt="Product Image" class="product-image" style="display: none;">
            </div>
            <button type="submit">Submit</button>
            </form>
        </div>
    </form>

    <script>
        // JavaScript for previewing uploaded image
        const productImage = document.querySelector('.product-image');
        const productImageInput = document.getElementById('product-image');

        productImageInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
            productImage.src = e.target.result;
            productImage.style.display = 'block';
            }
            reader.readAsDataURL(this.files[0]);
        }
        });
    </script>
</body>
</html>