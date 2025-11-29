<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting Room</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .waiting-room {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="waiting-room">
        <h1>Harap Tunggu...</h1>
        <p>Anda akan segera diarahkan ke halaman utama.</p>
        <p>Sistem sedang dalam proses verifikasi.</p>
    </div>
    <script>
        // Mengarahkan pengguna kembali ke halaman login setelah 5 detik (5000 ms)
        setTimeout(function() {
            window.location.href = "<?= site_url('/') ?>"; // Arahkan ke halaman login
        }, 10000); // 5000 milidetik = 5 detik
    </script>
</body>

</html>