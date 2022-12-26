<?php
require 'function.php';

if( isset($_POST["register"]))
{
    if(registrasi($_POST) > 0)
    {
        echo "<script>
                    alert ('user baru berhasil ditambahkan !');

        </script>";
        echo"<script>location='index.php'</script>";
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body
        {
            background-color:#111827;
            color:white;
            
        }
        label
        {
            display:block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action=""method="post">
        <ul>
            <li>
                <label for="username">username :</label>
                <input type="text"name="username"id="username">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="text"name="password"id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi password :</label>
                <input type="text"name="password2"id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register !</button>
            </li>
            <li>
                <button type="submit" name="dregister"><a href="login.php">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>