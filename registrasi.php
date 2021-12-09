<?php

include "connection.php";
if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script> alert('Registration Suceess!');
        document.location.href = 'login.php';
        </script>";
    } else{
        echo "<script> alert('Registration Failed!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container" align="center">
<div class="card"  style="width: 20rem;
  background: #17A2B8;    
  position:absolute;
  left:50%;
  top:50%;
  margin-left:-150px; 
  margin-top:-100px; ">
<form  action="" align="center" method="POST">
    <table align="center">
        <tr>
            <th colspan="2" height="40">REGISTRATION</th>
        </tr>
        <tr>
            
            <td> <input type="text" name="username" placeholder="Username"> </td>
            <td></td>
        </tr>
        <tr>
            
            <td> <input type="password" name="password" placeholder="Password"> </td>
            <td></td>
        </tr>
        <tr>
            
            <td> <input type="text" name="phonenumber" placeholder="Phone number"> </td>
            <td></td>
        </tr>
        <tr>
            
            <td> <input type="text" name="account" placeholder="Account"> </td>
            <td></td>
        </tr>
        <tr>
            <td align="center"><input type="submit" value="Register" name="register"> </td>
            <td> </td>
        </tr>
    </table>    

    
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