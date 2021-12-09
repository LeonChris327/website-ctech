<?php

$conn = mysqli_connect("localhost","root","","login");

function registrasi($data) {
    global $conn;

    $username = mysqli_real_escape_string($conn, $data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $phonenumber = mysqli_real_escape_string($conn, $data["phonenumber"]);
    $account = mysqli_real_escape_string($conn, $data["account"]);


    mysqli_query($conn, "INSERT INTO tab_login VALUES('$username','$password','$phonenumber','$account')");

    return mysqli_affected_rows($conn);
}
?>