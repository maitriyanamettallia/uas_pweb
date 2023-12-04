<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #f2f2f2;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            border-radius: 5px 5px 0 0;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 8px 20px;
            background-color: #45a049;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #357934;
        }
    </style>
</head>
<body>
    <h1>Edit Menu Makanan</h1>
    <br>
    <?php
        include "koneksi.php";
        $sql = mysqli_query($db, "SELECT * FROM makanan");
        while ($read = mysqli_fetch_array($sql)) {
    ?>
    <div class="card">
        <div class="card-header">Edit Data</div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Kode makanan</label>
                    <input type="text" name="kode" class="form-control" value="<?php echo $read['kodemakanan']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Menu</label>
                    <input type="text" name="menu" class="form-control" value="<?php echo $read['menumakanan']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Input Harga Baru : </label>
                    <input type="text" name="harga" class="form-control" placeholder="Silahkan Masukkan Harga Baru">
                </div>
                <div class="form-group">
                    <input type="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div>
    <?php
        }
    ?>

<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $kd = $_POST['kode'];
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    
    $sql = mysqli_query($db, "UPDATE makanan SET hargamakanan = '$harga' WHERE kodemakanan = '$kd'");
    
    if ($sql) {
        echo "<script>window.alert('Data Berhasil Disimpan!')</script>";
    } else {
        die("Errornya Di SQL");
    }
}
?>
</body>
</html>
