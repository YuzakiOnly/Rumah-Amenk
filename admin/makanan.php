<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Form Produk Makanan</title>
</head>
<body>
    <h2>Form Input Produk Makanan</h2>
    
    <?php
    // Inisialisasi array kategori
    $kategoris = [
        'makanan-berat' => 'Makanan Berat',
        'makanan-ringan' => 'Makanan Ringan',
        'minuman' => 'Minuman',
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Inisialisasi array untuk error
        $errors = [];
        
        // Validasi nama produk
        $nama_produk = trim($_POST['nama_produk']);
        if (empty($nama_produk)) {
            $errors[] = "Nama produk harus diisi";
        }

        // Validasi harga
        $harga = trim($_POST['harga']);
        if (empty($harga)) {
            $errors[] = "Harga harus diisi";
        } elseif (!is_numeric($harga) || $harga < 0) {
            $errors[] = "Harga harus berupa angka positif";
        }

        // Validasi kategori
        $kategori = $_POST['kategori'];
        if (empty($kategori)) {
            $errors[] = "Kategori harus dipilih";
        }

        // Validasi dan upload gambar
        $upload_dir = "uploads/"; // Pastikan folder ini ada dan memiliki permission yang tepat
        $gambar_produk = "";
        
        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
            $allowed = ['jpg', 'jpeg', 'png', 'gif'];
            $filename = $_FILES['gambar']['name'];
            $filetype = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            
            // Validasi tipe file
            if (!in_array($filetype, $allowed)) {
                $errors[] = "Hanya file gambar dengan format: " . implode(', ', $allowed) . " yang diperbolehkan";
            }
            
            // Validasi ukuran file (maksimal 5MB)
            if ($_FILES['gambar']['size'] > 5242880) {
                $errors[] = "Ukuran file terlalu besar (maksimal 5MB)";
            }
            
            // Jika tidak ada error, upload file
            if (empty($errors)) {
                $new_filename = uniqid() . "." . $filetype;
                $upload_path = $upload_dir . $new_filename;
                
                if (!move_uploaded_file($_FILES['gambar']['tmp_name'], $upload_path)) {
                    $errors[] = "Gagal mengupload gambar";
                } else {
                    $gambar_produk = $new_filename;
                }
            }
        }

        // Jika tidak ada error, proses data
        if (empty($errors)) {
            $deskripsi = trim($_POST['deskripsi']);
            
            // Di sini Anda bisa menambahkan kode untuk menyimpan ke database
            
            echo "<div class='success'>";
            echo "Data berhasil disimpan:<br>";
            echo "Nama Produk: " . htmlspecialchars($nama_produk) . "<br>";
            echo "Harga: Rp " . number_format($harga, 0, ',', '.') . "<br>";
            echo "Kategori: " . htmlspecialchars($kategoris[$kategori]) . "<br>";
            echo "Deskripsi: " . htmlspecialchars($deskripsi) . "<br>";
            if ($gambar_produk) {
                echo "Gambar berhasil diupload: " . htmlspecialchars($gambar_produk) . "<br>";
            }
            echo "</div>";
        } else {
            echo "<div class='error'>";
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
            echo "</div>";
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama_produk">Nama Produk *</label>
            <input type="text" id="nama_produk" name="nama_produk" value="<?php echo isset($_POST['nama_produk']) ? htmlspecialchars($_POST['nama_produk']) : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga (Rp) *</label>
            <input type="number" id="harga" name="harga" value="<?php echo isset($_POST['harga']) ? htmlspecialchars($_POST['harga']) : ''; ?>" required min="0">
        </div>

        <div class="form-group">
            <label for="kategori">Kategori *</label>
            <select id="kategori" name="kategori" required>
                <option value="">Pilih Kategori</option>
                <?php
                foreach ($kategoris as $key => $value) {
                    $selected = (isset($_POST['kategori']) && $_POST['kategori'] == $key) ? 'selected' : '';
                    echo "<option value='$key' $selected>$value</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Produk</label>
            <textarea id="deskripsi" name="deskripsi" rows="4"><?php echo isset($_POST['deskripsi']) ? htmlspecialchars($_POST['deskripsi']) : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar Produk</label>
            <input type="file" id="gambar" name="gambar" accept="image/*">
            <p style="font-size: 0.9em; color: #666;">Format yang diperbolehkan: JPG, JPEG, PNG, GIF. Maksimal 5MB.</p>
        </div>

        <button type="submit">Simpan Produk</button>
    </form>

    <script>
        // Preview gambar sebelum upload
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
    </script>
</body>
</html>