<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Lampu Hias</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Sesuaikan path sesuai dengan struktur folder Anda -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E7D4B5;
            color: navy;
        }
        header {
            background-color: #003399;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-bottom: 20px;
        }
        .about-us {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #E49BFF;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: justify;
        }
        .about-us h1 {
            font-family: Cambria, serif;
            margin-bottom: 20px;
            color: white;
            background-color: #9B86BD;
            padding: 10px;
        }
        .about-us p {
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .about-us a {
            color: #003399;
            text-decoration: none;
            font-weight: bold;
        }
        .about-us a:hover {
            text-decoration: underline;
        }
        #jam {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
        .image-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            height: 300px; /* Sesuaikan dengan ukuran gambar */
        }
        .image-container img {
            width: 100%;
            height: auto;
            position: absolute;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
    </style>
</head>
<body>
    <main>
        <section class="about-us">
             <center><h1>Tantang Kami</h1></center>
        <div id="jam"></div>
            <div class="image-container">
            <p>lampu hias atau accent dan decorative lighting adalah lampu yang berfungsi 
                sebagai aksen ruang atau mempertegas tema tertentu.</p>
            <p>Dengan menggunakan lampu hias bisa mempercantik dan menerangi ruangan.</p>
            <p>Untuk informasi lebih lanjut tentang produk kami atau jika Anda memiliki pertanyaan, 
                jangan ragu untuk <a href="contact.php">menghubungi kami</a>.</p>
        </section>
    </main>
</body>
</html>
