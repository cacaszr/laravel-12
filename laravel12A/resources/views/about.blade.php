<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Salsabilla Zara</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            background: radial-gradient(circle at top left, #4d2b3a 0%, #1a1a1a 40%);
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            align-items: center;
            gap: 100px;
            max-width: 1000px;
        }

        .text-section h1 {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            margin-bottom: 10px;
        }

        .text-section p {
            font-size: 16px;
            color: #b0b0b0;
            margin-bottom: 30px;
        }

        .btn-discover {
            background: linear-gradient(90deg, #a66c8a, #d4a5bc);
            color: #1a1a1a;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(166, 108, 138, 0.3);
        }

        .image-section {
            position: relative;
            padding: 20px;
            background: linear-gradient(135deg, #a66c8a 0%, #3a2a33 100%);
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
        }

        .image-box {
            width: 250px;
            height: 300px;
            background-color: #2a2a2a;
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Icon Bulan di pojok */
        .theme-toggle {
            position: absolute;
            top: 30px;
            right: 30px;
            background: #a66c8a;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="theme-toggle">🌙</div>

    <div class="container">
        <div class="text-section">
            <h1>Hi there, I'm cacaszr</h1>
            <p>D3 Teknik Informatika Student.<br>
            Crafting digital experiences with heart and logic.</p>
            <a href="#" class="btn-discover">Discover My Creations</a>
        </div>

        <div class="image-section">
            <div class="image-box">
                <img src="{{ asset('images/profil.jpeg') }}" alt="Salsabilla Zara">
            </div>
        </div>
    </div>

</body>
</html>