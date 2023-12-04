<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Makanan dan Minuman</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            text-align: center;
            background-color: pink;
            color: black;
            padding: 1em;
            width: 100%;
        }

        
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
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
    
    #selectmeja {
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 200px; 
  margin-bottom: 10px;
  appearance: none; 
  -webkit-appearance: none; 
  -moz-appearance: none; 
  background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>'); /* Ganti dengan gambar panah pilihan Anda */
  background-repeat: no-repeat;
  background-position: right 8px top 50%;
}

#selectmeja:focus {
  outline: none;
  border-color: #45a049; 
}
    
</style>
</head>
<body>
    <br>
    <br>
    <br>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="team.php">Team</a></li>
    </ul>
  </nav>
</body>
</html>
<link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css"/>
        <div class="nprinsley-text-rainbowan"><h1 align = "center">WELCOME TO HUMBLE CAFE♡</h1></div>
        

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

<body>
<script>
  function konfirmasiPemesanan() {
    return confirm('Apakah pesanan Anda sudah benar?');
  }
</script>
  <h1 style="text-align: center;">Order Form</h1>
  <form method="post" action="" onsubmit="return konfirmasiPemesanan();">
    <table style="background-color: pink; width: 100%; margin-left: auto; margin-right: auto;">
      <tr>
        <td>Silahkan Pilih Meja</td>
        <td>
          <select name="meja">
            <option value="">--Pilih Meja--</option>
            <?php
              include "koneksi.php"; 
              $sql = mysqli_query($db, "SELECT * FROM meja");
              if ($sql) {
                while ($data = mysqli_fetch_array($sql)) {
                  $nomeja = htmlspecialchars($data['nomeja']);
                  $namameja = htmlspecialchars($data['namameja']);
            ?>
                  <option value="<?php echo $nomeja; ?>"><?php echo $namameja; ?></option>
            <?php
                }
              } else {
                echo "Gagal mengambil data meja.";
              }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Pilih Makanan</td>
        <td>
          <select name="makanan">
            <option value="">--Pilih Makanan--</option>
            <?php
              $sql = mysqli_query($db,"SELECT * FROM makanan");
              while ($data = mysqli_fetch_array($sql)) {
              ?>
              <option value="<?php echo $data['kodemakanan']?>"><?php echo $data['menumakanan']?></option>
              <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Jumlah Pesanan</td>
        <td><input type="number" name="jumlah_pesanan" min="1"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <input  type="submit" value="Pesan">
        </td>
      </tr>
    </table>
  </form>

  <?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "koneksi.php";

    $nomeja = $_POST['meja'];
    $kodemakanan = $_POST['makanan'];
    $jumlah_pesanan = $_POST['jumlah_pesanan'];

    $queryMeja = mysqli_query($db, "SELECT * FROM meja WHERE nomeja  = '$nomeja'");
    $dataMeja = mysqli_fetch_assoc($queryMeja);

    if ($dataMeja) {
        $namameja = $dataMeja['nomeja'];

        $queryMakanan = mysqli_query($db, "SELECT * FROM makanan WHERE kodemakanan = '$kodemakanan'");
        $dataMakanan = mysqli_fetch_assoc($queryMakanan);

        if ($dataMakanan) {
            $menumakanan = $dataMakanan['menumakanan'];
            $foodPrice = $dataMakanan['hargamakanan'];
            $total = $foodPrice * $jumlah_pesanan;
            $formatted_total = number_format($total, 0, ',', '.');

            mysqli_query($db, "INSERT INTO transaksi (nomeja, kodemakanan, jmlhpsn,total) VALUES ('$namameja', '$kodemakanan', '$jumlah_pesanan','$total')");


            echo '<table border="1" style="margin-top: 20px;">
                <thead>
                    <tr>
                        <th>Meja</th>
                        <th>Makanan</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' . $namameja . '</td>
                        <td>' . $menumakanan . '</td>
                        <td>' . $jumlah_pesanan . '</td>
                        <td>' . $total . '</td>
                    </tr>
                </tbody>
                </table>';
        } else {
            echo "<p>Gagal mendapatkan data makanan.</p>";
        }
    } else {
        echo "<p>Gagal mendapatkan data meja.</p>";
    }
    echo "
    <link rel='stylesheet' type='text/css' href='https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css'/>
            <div class='nprinsley-detaxt'><h1 align = 'center'>TOTAL  $formatted_total </h1>
            <h2>~ Jika Ingin Mengganti Pesanan Silahkan Ke Bagian Kasir ~ </h2></div>";

}
?>
</body>
</html>