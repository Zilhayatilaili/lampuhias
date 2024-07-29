<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white; /* Ubah warna latar belakang */
            color: black; /* Ubah warna teks */
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #E7F0DC;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: #729762; /* Ubah warna judul */
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: navy; /* Ubah warna label */
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid black; /* Ubah warna border input */
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: blueviolet; /* Ubah warna background tombol */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: pink; /* Ubah warna hover tombol */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Produk Baru</h1>
        <form action="process_add_product.php" method="post" enctype="multipart/form-data">
            <label for="name">Nama Produk:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="price">Harga:</label>
            <input type="text" id="price" name="price" required>
            
            <label for="image">Gambar Produk:</label>
            <input type="file" id="image" name="image" required>
            
            <input type="submit" value="Tambah Produk">
        </form>
    </div>
</body>
</html>
