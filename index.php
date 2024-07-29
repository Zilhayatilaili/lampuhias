<?php
session_start(); // Memulai sesi
include 'database.php'; // Memasukkan file konfigurasi database
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Lampu Hias</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Sesuaikan path jika diperlukan -->
 
</head>
<body>
    
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Produk</a></li>
                <li><a href="add_product.php">Tambah Produk</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="laporan.php">Laporan</a></li>
                <li><a href="register.php">Registrasi</a></li>
                <li><a href="contact.php">Kontak</a></li>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li><a href="profile.php">Profil</a></li>
                    <li><a href="indexdddd.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
                <a href="keranjang.php" class="cart-icon" >Keranjang</a>
            </ul>
        </nav>
   
                
    
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Unggulan - Lampu Hias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #BBE9FF;
            color: #333;
        }
        main {
            padding: 20px;
        }
        #featured-products {
            border: 2px solid blueviolet;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        header {
            background-color: pink;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .products {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .card {
            width: 30%;
            margin-bottom: 20px;
            border: 1px solid navy;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .card img {
            width: 100%;
            height: auto;
            display: block;
            border-bottom: 1px solid #ccc;
        }
        .card-body {
            padding: 10px;
            text-align: center;
        }
        .card-title {
            margin-bottom: 10px;
        }
        .card-text {
            margin-bottom: 10px;
        }
        .btn {
            background-color: blueviolet;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .footer {
            background-color: blueviolet;
        }

        footer {
            background-color: #3572EF;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            margin-top: 40px;
            width: 100%;
        }
</style>
    
</head>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama - Lampu Hias</title>
    <style>
        /* CSS lainnya di sini */
        .nav-bar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            background-color: blueviolet;
            color: white;
            padding: 10px;
        }
        .logout-btn,
        .cart-icon {
            margin-left: 10px;
            cursor: pointer;
        }
        .cart-icon svg {
            width: 24px;
            height: 24px;
            fill: white;
        }
        .cart-icon:hover {
            background-color: #0066ff;
        }
    </style>
</head>
<body>
   
</body>
</html>

<body>
    <main>
    <section id="featured-products">
            <h2>Produk Unggulan</h2>
            <div class="products">
                <div class="card">
                    <img src="bulan.jpg" alt="Lampu Tidur" width="200">
                    <div class="card-body">
                        <h4 class="card-title">Lampu Tidur Bulan</h4>
                        <a href="products.php" class="btn">Detail Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="lampu tidur panda.jpg" alt="dell latitude E5550 15,6" width="200">
                    <div class="card-body">
                        <h4 class="card-title">Lampu Tidur Panda</h4>
                        <a href="products.php" class="btn">Detail Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="lampu LED Tulip.jpg" alt="hp pavilion 14-ce1005na" width="200">
                    <div class="card-body">
                        <h4 class="card-title">Lampu Tidur Tulip</h4>
                        <a href="products.php" class="btn">Detail Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Toko Lampu Hias. Toko online terbaik.</p>
    </footer>
</body>
</html>

   