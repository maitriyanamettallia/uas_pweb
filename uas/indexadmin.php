<style>
.table {
    width: 60%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.table th,
.table td {
    border: 1px solid #dee2e6;
    padding: 30px; 
    text-align: center; 
}

.table th {
    background-color: #ffaaaa; 
    font-size: 18px; 
}

.table tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 192, 203, 0.5);
}


.card {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 8px; 
    background-color: #f9f9f9; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #f0f0f0; 
    padding: 20px;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    text-align: center;
    font-size: 24px; 
    color: #333; 
}

.card-body {
    padding: 30px; 
}


.container-center {
    display: flex;
    flex-direction: column;
    align-items: center;
}


.bg-light {
    background-color: #f5f5f5; /
    color: #444; 
}
.btn-warning {
    color: #fff;
    background-color: #ffc107;
    border-color: #ffc107;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.5;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-warning:hover {
    background-color: #e0a800;
    border-color: #d39e00;
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.5;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

.btn i {
    margin-right: 5px;
}

</style>
<div class="container-center bg-light">
    <div class="card">
        <div class="card-header">
            <h1>List Pesanan</h1>
            <a href="tambahmenu.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class='fas fa-plus'></i> Tambah Menu
            </a>
            <a href="edit_menu.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class='fas fa-plus'></i> Edit Menu
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Meja</th>
                            <th>Nama Meja</th>
                            <th>Kode Makanan</th>
                            <th>Nama Makanan</th>
                            <th>Jumlah Pesanan</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "koneksi.php";
                            $sql = mysqli_query($db, "SELECT meja.*, makanan.*, transaksi.* FROM transaksi
                            INNER JOIN meja ON transaksi.nomeja = meja.nomeja
                            INNER JOIN makanan ON transaksi.kodemakanan = makanan.kodemakanan");

                            while ($read = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td><?php echo $read['nomeja'];?></td>
                                <td><?php echo $read['namameja'];?></td>
                                <td><?php echo $read['kodemakanan'];?></td>
                                <td><?php echo $read['menumakanan'];?></td>
                                <td><?php echo $read['jmlhpsn'];?></td>
                                <td><?php echo $read['total'];?></td>
                                <td>
    <a href="admin2.php?page=del_r&idb=<?php echo $read['nomeja']; ?>" class="btn btn-sm btn-danger shadow-sm" style="font-size: 0.8rem;" onclick="return confirm('Yakin Hapus Data Ini...?')">
        <i class="fas fa-trash"></i> Hapus
    </a>
</td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
