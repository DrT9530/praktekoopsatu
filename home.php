<?php
// home.php
$pesan = "Ini adalah halaman home dari website PHP saya.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Home</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { max-width: 800px; margin: 0 auto; }
        .box { background: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Selamat Datang di Halaman Home</h1>
            <p><?php echo htmlspecialchars($pesan); ?></p>
            <hr>
            <p><a href="index.php">Kembali ke Halaman Index</a></p>
        </div>
    </div>
</body>
</html>
