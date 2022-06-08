<?php
session_start();
include "connection.php";
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
            <th colspan="2" height="40">LOGIN FORM</th>
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
            <td align="center"><input type="submit" value="Login" name="proseslog"> </td>
            <td> </td>
        </tr>
    </table>    

    <div class="account"><a href="registrasi.php">Don't have an account?</a>
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

<?php
if(isset($_POST['proseslog'])){
    $sql = mysqli_query($conn, "select * from tab_login where username = '$_POST[username]' and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['phonenumber'] = mysqli_query($conn, "select phonenumber from tab_login where username = '$_POST[username]' and password = '$_POST[password]'");
        $_SESSION['account'] = mysqli_query($conn, "select account from tab_login where username = '$_POST[username]' and password = '$_POST[password]'");
        echo "<meta http-equiv=refresh content=0;URL='index.php'>";

    }else{
        echo "<p align=center><b> Username dan Password salah! </b></p>";
        echo "<meta http-equiv=refresh content=2;URL='login.php'>";
    }
}

?>