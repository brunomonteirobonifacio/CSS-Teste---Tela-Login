<?php
    include("connection.php");
    $con = connect();
    $name = $_POST['username'];
    $password = $_POST['password'];
    $sql = "Select * from usuario where nome_usua = '$name' and senha_usua = '$password'";
    $result = mysqli_query($con,$sql);
    $_POST['username'] = $name;
    sleep(1.5);
    If (mysqli_num_rows($result) > 0){
        Header("Location:home.html");
    } else {
        Header("Location:index.php?user=notf");
    }
?>