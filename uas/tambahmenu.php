<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Menu Makanan</title>
    <style>
        .menu-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px;
        }

        .menu-item {
            background-color: #fff;
            border: 2px solid pink;
            border-radius: 8px;
            overflow: hidden;
            margin: 20px;
            width: 250px;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease-in-out;
        }

        .menu-item:hover {
            transform: scale(1.05);
        }

        .menu-item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .menu-item h2 {
            margin: 10px 0;
            color: #333;
        }

        .menu-item p {
            color: #777;
        }

        .quantity-input {
            margin-top: 10px;
        }

        form {
        background-color: #fff;
        padding: 20px;
        width: 300px;
        margin: 20px auto;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    input[type="text"],
    input[type="date"],
    input[type="submit"] {
        width: calc(100% - 10px);
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: pink;
        color: black;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    table {
        margin-top: 20px;
        border-collapse: collapse;
        width: 30%;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      text-align: center;
    }
    
    nav ul li {
      display: inline;
      margin-right: 20px;
    }
    
    nav ul li a {
      text-decoration: none;
      color: #333;
      font-size: 20px;
      transition: font-size 0.3s ease; 
    }
    
    nav ul li a:hover {
      font-size: 28px; 
    }
    
    </style>
   <div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
    
                    </a>
                </li>
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="indexadmin.php">Home</a>
                    </li>
            </ul>
</head>
<body>
    <div class="menu-container">
    <?php
        include "koneksi.php";
        $sql = mysqli_query($db, "SELECT * FROM makanan");
        while ($db = mysqli_fetch_array($sql)) {
        ?>
        <div class="menu-item">
            <img src='gambar/<?php echo $db['gambar']; ?>' width='250'>
            <h2><?php echo $db['menumakanan']; ?></h2>
            <p>Harga: <?php echo $db['hargamakanan']; ?></p>
        </div>
        <?php
        }
        ?>
        </div>

        <div class="card">
    <h1 style="text-align: center;">Tambah Menu</h1>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="kode">Kode Makanan</label>
                <input type="text" name="kode" id="kode" class="form-control" placeholder="Masukkan Kode Makanan" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Makanan</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Makanan" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga Makanan</label>
                <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga Makanan" required>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="foto" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tambah Menu</button>
            </div>
        </form>
    </div>
</div>

    
    <?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "koneksi.php";
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

   
    $rand = rand();
    $ekstensi = array('png','jpg','jpeg','gif','jpe');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext, $ekstensi)){
        echo "Gagal menyimpan gambar, format tidak didukung.";
    } else {
        if($ukuran < 1044070){
            $ft = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

           
            $sql = mysqli_query($db, "INSERT INTO makanan (kodemakanan,menumakanan,hargamakanan,gambar) 
            VALUES ('$kode', '$nama', '$harga','$ft')");

            if ($sql) {
                echo "<script>window.alert('Data Berhasil Disimpan!')</script>";
            } else {
                die("Error in SQL: " . mysqli_error($db));
            }
        } else {
            echo "Ukuran gambar terlalu besar";
    }
}
}
?>
</body>
</html>
