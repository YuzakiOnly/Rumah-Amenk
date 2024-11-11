<?php
    require "../config/koneksi.php";
    require "../config/function.php";
    require "../config/config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Tabel Makanan</title>
    <style>
        .food-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
        }
        
        .table td {
            vertical-align: middle;
        }
        
        .stock-badge {
            padding: 5px 10px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Menu Makanan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php
                        $product = viewMakanan($koneksi);

                        if($product == 0 ){
                            echo "Tidak ada data";
                        }
                        else{
                    ?>
                    <table class="table table-hover table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th scope="col">Nama Makanan</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Gambar</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                // awalan foreach 
                                $no = 1; 
                                foreach($product as $data) {
                            ?>
                            <tr>
                                <td class="fw-bold"><?=$no?></td>
                                <td class="fw-bold"><?=$data['name']?></td>
                                <td><span class="badge bg-info"><?=$data['category_id']?></span></td>
                                <td><?=$data['price']?></td>
                                <td><span class="badge bg-success stock-badge"><?=$data['stok']?></span></td>
                                <td><?=$data['description']?></td>
                                <td><?=$data['image']?></td>
                                <td>Edit</td>
                                <td>Detale</td>
                            </tr>
                            <?php 
                                $no ++;
                                }
                                    // akhiran foreach
                            ?>
                        </tbody>
                    </table>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>