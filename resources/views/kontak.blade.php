<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Kontak</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Inter, system-ui, sans-serif;
            background: radial-gradient(circle at top, #1e3c72, #2a5298);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .kontak {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-radius: 20px;
            padding: 32px 36px;
            width: 100%;
            max-width: 420px;
            color: #fff;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.35);
            animation: fadeUp 0.8s ease;
        }

        .kontak h3 {
            margin: 0 0 12px;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .kontak p {
            margin: 8px 0;
            font-size: 15px;
            line-height: 1.6;
            color: #e0e0e0;
        }

        .nomor {
            margin-top: 20px;
            display: inline-block;
            padding: 12px 20px;
            border-radius: 30px;
            background: linear-gradient(135deg, #00f260, #0575e6);
            color: #fff;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .nomor:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 16px 30px rgba(0, 0, 0, 0.35);
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="kontak">
        <h3>Hubungi Kami</h3>
        <p>Ini adalah halaman kontak</p>
        <p>Silakan hubungi kami melalui nomor berikut</p>
        <a href="tel:123456789" class="nomor">📞 123 456 789</a>
    </div>

</body>
</html>
