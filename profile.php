<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
            
            $nama = "Muhamad Nasir";
            $email = "nasirallfin@gmail.com";
            $nomor_telepon = "+6281247690858";
            $alamat = "Jl. serang cemara,No Rumah 03";

            
            echo "<h1>ini profil ku</h1>";
            echo "<p>Nama: $nama</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Nomor Telepon: $nomor_telepon</p>";
            echo "<p>Alamat: $alamat</p>";
        ?>
    </div>
</body>
</html>
