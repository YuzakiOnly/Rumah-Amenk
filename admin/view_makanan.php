<?php
    require "../config/config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tabel Makanan</title>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <div class="mb-6">
            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center gap-2" onclick="window.location.href='makanan.php'">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                </svg>
                Tambahkan Form Product
            </button>
        </div>

        <div class="bg-white rounded-lg shadow-md">
            <div class="bg-blue-600 text-white px-6 py-4 rounded-t-lg">
                <h4 class="text-xl font-semibold">Menu Makanan</h4>
            </div>
            <div class="p-6">
                <?php
                    $product = viewMakanan($koneksi);

                    if($product == 0 ){
                        echo "<p class='text-center text-gray-500'>Tidak ada data</p>";
                    }
                    else{
                ?>
                <div class="grid grid-cols-1 gap-4 md:hidden">
                    <?php 
                        $no = 1; 
                        foreach($product as $data) {
                    ?>
                    <div class="bg-white border rounded-lg p-4 shadow-sm">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="font-bold text-lg"><?=$data['name']?></h3>
                            <span class="text-sm text-blue-600 bg-blue-100 rounded-full px-2 py-1"><?=$data['category_id']?></span>
                        </div>
                        <div class="space-y-2">
                            <p class="text-gray-600">Harga: <?=$data['price']?></p>
                            <p class="text-gray-600">Stok: 
                                <span class="text-green-600 bg-green-100 rounded-full px-2 py-1 text-xs"><?=$data['stok']?></span>
                            </p>
                            <p class="text-gray-600 line-clamp-2">Deskripsi: <?=$data['description']?></p>
                            <div class="flex justify-between pt-2">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm" 
                                        onclick="window.location.href='edit.php?id=<?= $data['id'] ?>'">
                                    Edit
                                </button>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm" 
                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?') ? window.location.href='?del=<?= $data['id'] ?>' : false">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $no++;
                        }
                    ?>
                </div>

                <div class="hidden md:block overflow-x-auto">
                    <table class="min-w-full table-auto border-collapse">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Makanan</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                                <th class="px-16 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php 
                                $no = 1; 
                                foreach($product as $data) {
                            ?>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 whitespace-nowrap font-medium"><?=$no?></td>
                                <td class="px-4 py-2 whitespace-nowrap font-medium"><?=$data['name']?></td>
                                <td class="px-4 py-2 whitespace-nowrap">
                                    <span class="px-2 py-1 text-sm text-blue-600 bg-blue-100 rounded-full"><?=$data['category_id']?></span>
                                </td>
                                <td class="px-4 py-2 whitespace-nowrap"><?=$data['price']?></td>
                                <td class="px-4 py-2 whitespace-nowrap">
                                    <span class="px-2 py-1 text-sm text-green-600 bg-green-100 rounded-full"><?=$data['stok']?></span>
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-500"> <img src="../upload/<?= $data['image']?>" class="w-20"/></td>
                                <td class="px-4 py-2 whitespace-nowrap flex space-x-2">
                                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm" 
                                            onclick="window.location.href='edit.php?id=<?= $data['id'] ?>'">
                                        <a href="">Edit</a>
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm" 
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?') ? window.location.href='?del=<?= $data['id'] ?>' : false">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <?php 
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>