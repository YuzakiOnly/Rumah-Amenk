<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Harga Fotokopi</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Hitung Total Harga Fotokopi</h2>
    <form action="fotocopy.php" enctype="multipart/form-data" method="post" class="mt-4">
        <div class="form-group">
            <label for="statusLangganan" class= "font-weight-bold">Status Langganan:</label>
            <select name="statusLangganan" id="statusLangganan" class="form-control" required>
                <option value="langganan">Langganan</option>
                <option value="bukan langganan">Bukan Langganan</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="jumlahLembar" class= "font-weight-bold">Jumlah Lembar:</label></br>
            <label for="jumlahLembar" >Catatan: Jika <span class="font-weight-bold">langganan</span> 1 Lembar = Rp.75</label></br>
            <label for="jumlahLembar" >Catatan: Jika <span class="font-weight-bold">Bukan langganan</span> 1 Lembar = Rp.85</label>
            <input type="number" name="jumlahLembar" id="jumlahLembar" class="form-control" required min="1">
        </div>

        <input input type="submit" value="Hitung Jumlah" name="kirim" class="btn btn-primary"></input>
    </form>

    <?php
    if (isset($_POST['kirim'])) {
        $statusLangganan = $_POST['statusLangganan'];
        $jumlahLembar = $_POST['jumlahLembar'];

        function hitungTotalHarga($statusLangganan, $jumlahLembar) {
            $hargaPerLembar = 0;

            if ($statusLangganan == "langganan") {
                $hargaPerLembar = 75;
            } else {
                if ($jumlahLembar < 100) {
                    $hargaPerLembar = 100;
                } else {
                    $hargaPerLembar = 85;
                }
            }

            $totalHarga = $hargaPerLembar * $jumlahLembar;
            return $totalHarga;
        }

        if ($statusLangganan == "langganan") {
            echo "<h3 class='text-center mt-4'>Kamu <span class='font-weight-bold'>berlangganan</span> Kamu dapat harga 1 lembar Rp.". number_format(75, 0, ',', '.') ."</h3>";
        } else {
            // Menampilkan harga per lembar berdasarkan jumlah lembar
            if ($jumlahLembar < 100) {
                echo "<h3 class='text-center mt-4'>Kamu <span class='font-weight-bold'>tidak berlangganan</span> Kamu dapat harga 1 lembar Rp." . number_format(100, 0, ',', '.') . "</br>(Dibawah 100 Lembar)</h3>";
            } else {
                echo "<h3 class='text-center mt-4'>Kamu <span class='font-weight-bold'>tidak berlangganan</span> Kamu dapat harga 1 lembar Rp." . number_format(85, 0, ',', '.') . "</br>(Diatas 100 Lembar)</h3>";
            }
        }

        $total = hitungTotalHarga($statusLangganan, $jumlahLembar);
        echo "<h3 class='text-center mt-4'>Total harga yang harus dibayar: Rp." . number_format($total, 0, ',', '.') . "</h3>";
        }
    ?>
</div>

</body>
</html>