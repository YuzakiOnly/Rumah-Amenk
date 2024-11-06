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
        $nama_makanan = $data['nama_makanan'];
        $kategori = $data['kategori'];
        $harga = $data['harga'];
        $stok = $data['stok'];
        $deskripsi = $data['deskripsi'];

        $sql = "INSERT INTO product (name,description,price,stok,category_id) VALUES (?,?,?,?,?)";
        $stmt = mysql_prepare($koneksi, $sql);
        if($stmt === false)
        {
            return "failed";
        }
        mysql_stmt_bind_param($stmt);
    }
?>