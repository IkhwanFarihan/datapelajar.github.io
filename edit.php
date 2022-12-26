<?php


require 'function.php';
// ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
var_dump($mhs[0]["nama"]);



// cek apakah tombol submit sudah ditekan atau belum
if(isset ($_POST["submit"]))
{
    
    
 
    
    // cek apakah data berhasil diubah atau tidak 
    if(edit($_POST,$id) > 0)
    {
        echo "<script>
        
            alert('data berhasil diubah');
            document.location.href = 'index.php'
        </script>
        
        
        ";
    }
    else
    {
        echo "<script>
        
            alert('data gagal diubah');
            document.location.href = 'index.php'
        </script>
        
        
        ";
    }



  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method ="post">
        <ul>
            <li>
                <label for="nama" >Nama</label>
                <input type="text" name ="nama" id ="nama" required value = "">
            </li>
            <li>
                <label for="nrp" >Nrp</label>
                <input type="text" name ="nrp" id ="nrp">
            </li>
            <li>
                <label for="email" >Email</label>
                <input type="text" name ="email" id ="email">
            </li>
            <li>
                <label for="jurusan" >Jurusan</label>
                <input type="text" name ="jurusan" id ="jurusan">
            </li>
            <li>
                <label for="gambar" >Gambar</label>
                <input type="text" name ="gambar" id ="gambar">
            </li>
            <li>
                <button type = "submit"  name="submit">Ubah Data!</button>
            </li>
        </ul>

    </form>
</body>
</html>