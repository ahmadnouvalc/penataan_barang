<?php

    $conn = mysqli_connect("localhost", "root", "", "data");


function signup($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username jika ada yang sama
    $result = mysqli_query($conn, "SELECT username FROM admin_account WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('Username teelah terdaftar');</script>";
    }
    //cek konfirmasi password
    if($password !== $password2){
        echo "<script>alert('pasword tidak sama!');</script>";
        return false;
    }
    return 1;

    //Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    //tembah admin baru ke DB
    mysqli_query($conn, "INSERT INTO admin_account VALUES('','$username', '$password')");
    return mysqli_affected_rows($conn);


}

?>