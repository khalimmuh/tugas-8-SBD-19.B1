<!DOCTYPE html>
<html lang="en">
<head>
<style>

         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 15px; border: 2px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
         </style>
         <meta charset="UTF-8">
    <title>Transaksi Apotek</title>
    <h1 align =center> Transaksi Apotek</h1>
</head>
<body>

        <div class="container">
           <h2> Obat </h2> </right>
            <div class="main">
                <table>
                <tr>
                    <th>Kode obat</th>
                    <th>Nama </th>
                    <th>Jenis</th>
                </tr>

                <?php
               include("koneksi.php");
               $sql = "SELECT * FROM obat";
               $result = mysqli_query($conn, $sql);
               ?>

                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['kode_obat'];?></td>
                    <td><?= $row['nama'];?></td>
                    <td><?= $row['jenis'];?></td>  
                </tr>
                 <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
                </table>
            </div>
        </div>

        <div class="container">
           <h2> Pembelian </h2> </right>
            <div class="main">
                <table>
                <tr>
                    <th>No Nota</th>
                    <th>Kode Obat </th>
                    <th>jumlah</th>
                </tr>
                
                <?php
               include("koneksi.php");
               $sql = "SELECT * FROM pembelian";
               $result = mysqli_query($conn, $sql);
               ?>

                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['no_nota'];?></td>
                    <td><?= $row['kode_obat'];?></td>
                    <td><?= $row['jumlah'];?></td>  
                </tr>
                 <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
                </table>
            </div>
        </div>
        <div class="container">
           <h2> Stock </h2> </right>
            <div class="main">
                <table>
                <tr>
                    <th>Kode Obat</th>
                    <th>Stock </th>
                    <th>Harga</th>
                </tr>
                
                <?php
               include("koneksi.php");
               $sql = "SELECT * FROM stock";
               $result = mysqli_query($conn, $sql);
               ?>

                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['kode_obat'];?></td>
                    <td><?= $row['stock'];?></td>
                    <td><?= $row['harga'];?></td>  
                </tr>
                 <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
                </table>
            </div>
        </div>
        <div class="container">
           <h2> konsumen </h2> </right>
            <div class="main">
                <table>
                <tr>
                    <th>No Nota</th>
                    <th>Nama</th>
                    <th>total</th>
                </tr>
                
                <?php
               include("koneksi.php");
               $sql = "SELECT * FROM konsumen";
               $result = mysqli_query($conn, $sql);
               ?>

                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['no_nota'];?></td>
                    <td><?= $row['nama'];?></td>
                    <td><?= $row['total'];?></td>  
                </tr>
                 <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
                </table>
            </div>
        </div>
</body>
</html>