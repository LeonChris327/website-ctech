<?php

include "connection.php";
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
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            
              <li class="nav-item active">
                <a class="nav-link" href="index.php#product">Product <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#aboutus">About <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="logout.php">Log out <span class="sr-only">(current)</span></a>
              </li>
              
            
          </ul>
          
          <div class="icon mt-1">
              <h4>
                <i class="fas fa-shopping-cart ml-3" ></i>
                <i class="fas fa-user ml-3" ></i>
              </h4>
          </div>
        </div>
        </div>
    </nav>

    
    <div class="container" align="center">
<div class="card"  style="width: 30rem;
     
  position:absolute;
  left:50%;
  top:50%;
  margin-left:-230px; 
  margin-top:-200px; ">
<form  action="" align="center" method="POST">
    <table class="table1" align="center">
        <tr>
            <th colspan="2" height="40">USER DATA</th>
        </tr>
        <tr>
            <td>Username:</td>
            <td> <input type="password" name="password" placeholder="Password"> </td>
            <td></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td> <input type="password" name="password" placeholder="Password"> </td>
            <td></td>
        </tr>
        <tr>
            <td>Phone number:</td>
            <td> <input type="password" name="password" placeholder="Password"> </td>
            <td></td>
        </tr>
        <tr>
            <td>Account:</td>
            <td> <input type="password" name="password" placeholder="Password"> </td>
            <td></td>
        </tr>
        
    </table>    
    <a href="logout.php" class="btn btn-primary">Submit</a>

    
</div>
</form>
</div>
</div>

   

    

    <script src="https://kit.fontawesome.com/246ced5033.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>