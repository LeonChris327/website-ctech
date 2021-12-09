<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CTECH</title>
  </head>
  









<body>
    <?php
        include "connection.php";
        $sql_detail_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
        $data_barang=mysqli_fetch_array($sql_detail_barang);
    ?>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 text-center my-5">
                <h2>Cart</h2>
            </div>
            <div class="col-md-3 img-thumbnail">
                <img src="material/img/<?=$data_barang['foto']?>" class="img-fluid">
            </div>
            <div class="col-md-7 offset-1">
                <form action="" method="post">
                    <table class="table table-hover table-striped h5">
                        <thead>
                            <tr>
                                <td>Nama Produk</td><td><?=$data_barang['nama_barang']?></td>
                            </tr>
                            <tr>
                                <td>Harga</td><td>$ <?=$data_barang['harga']?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="transaksi_sukses.php" class="btn btn-success" onclick="return confirm('Yakin Ingin Membeli?')">Beli</a>
                                    | <a href="index.php" class="btn btn-danger">Batal</a>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
  </body>
</html>