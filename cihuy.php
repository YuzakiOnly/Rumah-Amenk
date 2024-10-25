<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh PHP</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="POST">
        NAMA : <input type="text" name="" value=""><br/>
        NISN : <input type="number" name="" value=""><br/>
        NIS : <input type="text" name="" value=""><br/>
        JURUSAN : <select name="" id="">
            <option value="0">Pilih Jurusan</option>
            <option value="1">PPLG</option>
            <option value="2">TJKT</option>
            <option value="3">BDP</option>
            <option value="4">AKL</option>
            <option value="5">SP</option>
            <option value="6">KL</option>
            </select></br>

        Tanggal Lahir <input type="date"></br>
        
        Alamat</br> <textarea name="" id=""></textarea></br>

        No.Telp <input type="number"></br>

        Gender <input name="gender" type="radio" value="" >Cowok
        <input name="gender" type="radio" value="">Cewek<br>

        Hobi :
        <input name="hobi1" type="checkbox"> Membaca 
        <input name="hobi2" type="checkbox"> Bermain Game
        <input name="hobi3" type="checkbox"> Makan 
        <input name="hobi4" type="checkbox">Olahraga<br/>
        other :
        <input type="text"></br>

        Foto: </br>
        <input type="file"> <br>
        <button type="submit">Kirim</button>



    </form>
    <?php
        
    ?> 
</body>
</html>
