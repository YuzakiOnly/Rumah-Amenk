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
                <div class="overflow-x-auto">
                    <?php
                        $product = viewMakanan($koneksi);

                        if($product == 0 ){
                            echo "Tidak ada data";
                        }
                        else{
                    ?>
                    <table class="min-w-full table-auto border-collapse">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Makanan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                                <th class="px-6 py-3"></th>
                                <th class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php 
                                $no = 1; 
                                foreach($product as $data) {
                            ?>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap font-medium"><?=$no?></td>
                                <td class="px-6 py-4 whitespace-nowrap font-medium"><?=$data['name']?></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 text-sm text-blue-600 bg-blue-100 rounded-full"><?=$data['category_id']?></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap"><?=$data['price']?></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 text-sm text-green-600 bg-green-100 rounded-full"><?=$data['stok']?></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap"><?=$data['description']?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?=$data['image']?></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm" onclick="window.location.href='edit.php?id=<?= $data['id'] ?>'">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                        Edit
                                    </button>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?') ? window.location.href='?del=<?= $data['id'] ?>' : false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
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
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>