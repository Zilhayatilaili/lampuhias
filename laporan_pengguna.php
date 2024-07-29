<?php
// Koneksi ke database (misal menggunakan MySQLi)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lampuhias";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel users
$sql = "SELECT username, email, password FROM users";
$result = $conn->query($sql);

// Tangkap error jika query tidak berhasil
if (!$result) {
    die("Error: " . $conn->error);
}

// Jika ada data, tampilkan dalam tabel HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laporan Pengguna</title>
<link rel="stylesheet" href="styles.css">
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E7F0DC;
            color: blueviolet;
        }

        header {
            background-color: pink; /* Warna header diubah menjadi biru tua */
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        header p {
            margin: 5px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            padding: 8px 16px;
            background-color: pink; /* Warna latar belakang menu diubah menjadi biru tua */
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: pink; /* Warna latar belakang menu diubah saat hover */
        }

        main {
            padding: 20px;
        }

        button {
            margin: 20px 0;
            padding: 10px 20px;
            background-color: blueviolet; /* Warna tombol diubah menjadi biru tua */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #B1AFFF; /* Warna tombol diubah saat hover */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        table th, table td {
            border: 1px solid #B1AFFF; /* Warna border cell diubah menjadi biru tua */
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: blueviolet; /* Warna header kolom diubah menjadi biru tua */
            color: white;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #ffff;
        }

        footer {
            background-color: #3572EF; /* Warna footer diubah menjadi biru tua */
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .signature {
            margin-top: 50px;
            text-align: right;
        }

        .signature p {
            margin: 0;
            padding: 0;
        }

        .signature p + p {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Laporan Pengguna</h1>
    <center><h3>Dunia Laptop</h3></center>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop untuk menampilkan setiap baris data dari hasil query
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['password']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>

<?php
// Tutup koneksi database
$conn->close();
?>