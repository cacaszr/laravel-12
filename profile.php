<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50; 
            --secondary-color: #18bc9c;
            --bg-light: #f4f7f6;
            --text-dark: #333;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .profile-card {
            background: #fff;
            width: 90%;
            max-width: 450px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            text-align: center;
            padding-bottom: 30px;
        }

        .header-bg {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            height: 120px;
        }

        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 5px solid #fff;
            margin-top: -65px;
            object-fit: cover;
            background-color: #ddd;
        }

        .content {
            padding: 20px;
        }

        h2 {
            margin: 10px 0 5px;
            color: var(--primary-color);
        }

        .tagline {
            color: var(--secondary-color);
            font-weight: 600;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .description {
            padding: 0 25px;
            color: #666;
            font-size: 0.95em;
            line-height: 1.6;
            margin-top: 15px;
        }

        .info-list {
            list-style: none;
            padding: 0;
            margin: 25px 0;
            text-align: left;
            display: inline-block;
        }

        .info-list li {
            margin-bottom: 10px;
            color: var(--text-dark);
            font-size: 0.9em;
        }

        .info-list li b {
            color: var(--primary-color);
            width: 80px;
            display: inline-block;
        }

        .btn-github {
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            padding: 10px 25px;
            border-radius: 50px;
            transition: 0.3s;
            display: inline-block;
        }

        .btn-github:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="header-bg"></div>
        <img src="{{ asset('images/profil.jpeg') }}" alt="Foto Profil" class="avatar">
        
        <div class="content">
            <h2>{{ $name ?? 'SalsabillaZR' }}</h2>
            <p class="tagline">Informatics Student @ PENS</p>
            
            <p class="description">
                Halo! Saya adalah mahasiswa Teknik Informatika semester 4 Politeknik Elektronika Negeri Surabaya (PENS).
            </p>

            <ul class="info-list">
                <li><b>Email:</b> salsabillazara@it.student.pens.ac.id</li>
                <li><b>Alamat:</b> Ponorogo, Jawa Timur</li>
                <li><b>Hobi:</b> explore, membaca, memasak</li>
            </ul>

            <a href="https://github.com/cacaszr" class="btn-github" target="_blank">Visit My GitHub</a>
        </div>
    </div>

</body>
</html>