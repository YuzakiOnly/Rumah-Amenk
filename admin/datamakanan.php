<!DOCTYPE html>
<html>
<head>
    <title>Shopping Total and Discount Calculator</title>
</head>
<body>
    <div class="container">
        <h1>Shopping Total and Discount Calculator</h1>
        <form action="datamakanan.php" enctype="multipart/form-data" method="POST">
            <label for="name">Nama Pembeli:</label>
            <input type="text" id="name" name="name" required>
</br>
            <label for="item1">Barang 1:</label>
            <input type="text" id="item1" name="item1" required>
            </br>
            <label for="item2">Barang 2:</label>
            <input type="text" id="item2" name="item2" required>
            </br>
            <label for="item3">Barang 3:</label>
            <input type="text" id="item3" name="item3" required>
            </br>
            <label for="item4">Barang 4:</label>
            <input type="text" id="item4" name="item4" required>
            </br>
            <button type="submit" name="submit">Hitung</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $item1 = floatval($_POST["item1"]);
            $item2 = floatval($_POST["item2"]);
            $item3 = floatval($_POST["item3"]);
            $item4 = floatval($_POST["item4"]);
            
            $total_belanja = $item1 + $item2 + $item3 + $item4;
            $diskon_persentase = 0.05; // Diskon 5%
            $diskon_total = $total_belanja * $diskon_persentase;
            $total_bayar = $total_belanja - $diskon_total;
            
            echo "<div class='result'>";
            echo "Nama Pembeli: $name<br>";
            echo "Barang 1: Rp. $item1<br>";
            echo "Barang 2: Rp. $item2<br>";
            echo "Barang 3: Rp. $item3<br>";
            echo "Barang 4: Rp. $item4<br>";
            echo "Total belanja: Rp. $total_belanja<br>";
            echo "Diskon: 5%<br>";
            echo "Total Bayar: Rp. $total_bayar";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>