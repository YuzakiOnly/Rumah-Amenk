<?php
    function validasiData($data){
        foreach($data as $product => $value) {
            $value = trim($value);
            if($value === '' || $value === 0 || $value === null || $value === false){
                return $index;
            }
        }
        return 0;
    }

    function inputmakanan($data, $koneksi){
        $nama_produk = $data['nama_produk'];
        $kategori = $data['kategori'];
        $harga = $data['harga'];
        $stok = $data['stok'];
        $deskripsi = $data['deskripsi'];
        $gambar = $data['gambar'];

        $sql = "INSERT INTO product (name,category_id,price,stok,description,image) VALUES (?,?,?,?,?,?)";
        $stmt = mysqli_prepare($koneksi, $sql);
        if($stmt === false) 
        {
            return "failed";
        }
        mysqli_stmt_bind_param($stmt, 'siiiss', $nama_produk, $kategori, $harga, $stok, $deskripsi, $gambar);
    $result = mysqli_stmt_execute($stmt);

    if(!$result)
        return false;
    
    mysqli_stmt_close($stmt);
    return true;  
    }

    function viewMakanan($koneksi){
        $sql = "SELECT product.id,product.name,product.description,product.price,product.stok,product.category_id,product.image
        FROM `product` where 1";
        $stmt = mysqli_query($koneksi, $sql);
        if(mysqli_num_rows($stmt) > 0) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
        else return false;
    }
?>