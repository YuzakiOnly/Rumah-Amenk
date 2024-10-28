<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
    <body>
        <form action="kasir.php" enctype="multipart/form-data" method="POST" >
            <!-- input nama : single line text input  -->
            Nama : <input type="text" name="Nama" value="" /><br/>
            NISN : <input type="number" name="NISN" id=""><br/>
            NIS  : <input type="text" name="NIS" id=""><br/>
            Jurusan : 
            <select name="Jurusan" id="">
                <option value="0">--Pilih Jurusan--</option>
                <option value="1">PPLG</option>
                <option value="2">TKJT</option>
                <option value="3">DKV</option>
            </select> <br/>
            Tanggal_Lahir : <input type="date" name="Tanggal_Lahir" id=""><br/>

            Alamat : <textarea name="Alamat" id="" cols="30" rows="10"></textarea>
            <br/>

            Telepon : <input type="number" name="telepon" id=""><br/>

            Gender : 
            <input type="radio" name="Gender" id="" value=""> Laki-Laki
            <input type="radio" name="Gender" id="" value=""> Perempuan
                    <br/>

            Hobi : </br>
            <input type="checkbox" name="hobi[]" id="" value=""> Membaca <br/>
            <input type="checkbox" name="hobi[]" id="" value=""> berlari <br/>
            <input type="checkbox" name="hobi[]" id="" value=""> tidur <br/>
            <input type="checkbox" name="hobi[]" id="" value=""> main game <br/>

            Foto : <input type="file" name="foto" id=""><br/>

            <input type="submit" value="Input Data" name="inputData"> 
            <!-- <button type="submit">Inputkan</button> -->
        </form>    
    </body>
</html>