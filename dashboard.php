<?php
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard - POLGAN MART</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F6FDFF;
            margin: 0;
            padding: 0;
        }

        /* ===== HEADER STYLE ===== */
        header {
            background-color: #F5F6FDFFF;
            color: Black;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            font-size: 22px;
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
            border: 2px solid #0056b3;
            font-family: 'Arial Black', sans-serif;
        }

        .logo-text {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .user-info {
            text-align: right;
            line-height: 1.5;
        }

        .user-info p {
            margin: 0;
            font-weight: bold;
        }

        .logout-btn {
            display: inline-block;
            margin-top: 5px;
            color: #110806FF;
            text-decoration: none;
            font-weight: bold;
        }

        .logout-btn:hover {
            text-decoration: underline;
        }

        /* ===== BODY CONTENT ===== */
        .container {
            width: 80%;
            margin: 30px auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        h2,
        h3 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #273c75;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f2f6;
        }

        
    </style>
</head>

<body>

    <header>
        <div class="logo-container">
            <div class="logo">PM</div>
            <div class="logo-text">--POLGAN MART--</div>
        </div>

        <div class="user-info">
            <p>Selamat Datang, <b></b></p>
            <a class="logout-btn" href="logout.php">Logout</a>
        </div>
    </header>

    <div class="container">
        <h3>Daftar Pembelian</h3>

        <table>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>

            </tr>


</body>

</html>
