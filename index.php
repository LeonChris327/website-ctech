<?php
include "session.php";

?>


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
    
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <div class="container">

        
        <a class="navbar-brand font-weight-bold" href="#">CTECH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            
              <li class="nav-item active">
                <a class="nav-link" href="#product">Product <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#aboutus">About <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="material/acceptable-use-policy-template.pdf" download>Policy <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="logout.php" >Log out <span class="sr-only">(current)</span></a>
              </li>
              
            
          </ul>
          
          <div class="icon mt-1">
              <h4>
                
                <a class="fas fa-user ml-3" href="user.php" style="color:black"></a>
              </h4>
          </div>
        </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="material/img/spider-man-PCbanner.jpg" class="d-block w-100" alt="hp">
        </div>
        <div class="carousel-item">
          <img src="material/img/xiaomi 11T.jpg" class="d-block w-100" alt="hp">
        </div>
        <div class="carousel-item">
          <img src="material/img/XIAOMI LAPTOP.jpg" class="d-block w-100" alt="pc">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <h3 class="text-center font-weight-bold mt-5 mb-5" id="product">OUR PRODUCT</h3>

    
    <div class="row ml-5 mr-5">
    <?php
        include "connection.php";
        $sql_barang=mysqli_query($conn,"select * from barang");
        while($data_barang=mysqli_fetch_array($sql_barang)){
    ?>
      <div class="card  mt-3 mb-3 mr-3 ml-3" style="width: 16rem;">
        <img src="material/img/<?=$data_barang['foto']?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?=$data_barang['nama_barang']?></h5>
          <p class="card-text"><?=$data_barang['deskripsi']?></p>
          <a href="transaksi.php?id_barang=<?=$data_barang['id_barang']?>"><h3>Beli</h3></a>
          <a href="#" class="btn btn-info">Rp. <?=$data_barang['harga']?></a>
        </div>
      </div>
      <?php } ?>

      

    </div> 

    <footer class="bg-dark text-white p-5" id="aboutus">
      
      <div class="row ml-6">
        <div class="col-md-4">
          <h5>ABOUT US</h5>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, quidem tempora, unde nulla quam autem consectetur, repellat maiores dolores dolorem voluptatibus nostrum quibusdam rerum aliquam.</p>
        </div>

        <div class="col-md-4">
          <h5>CONTACT</h5>
          <ul>
            <li>(+62) 857-3648-2372</li>
            <li>(+62) 821-0271-5257</li>
            <li>(+62) 821-8241-8352</li>
            <li>ctech@gmail.com</li>
          </ul>
        </div>

        <div class="col-md-4">
          <h5>PARTNER</h5>
          <ul>
           
          </ul>
        </div>
      </div>
    </footer>

    <script src="https://kit.fontawesome.com/246ced5033.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>