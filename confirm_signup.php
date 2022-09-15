<?php
    include("connection.php");
    $con = connect();
    $name = $_POST['username'];
    $password = $_POST['password'];
    $confpass = $_POST['confpass'];
    $sql = "Select * from usuario where nome_usua = '$name'";
    $result = mysqli_query($con,$sql);
    if (mysqli_fetch_array($result)[0] <= 0) {
        sleep(0.5);
        $sql = "insert into usuario(nome_usua,senha_usua) values ('$name','$password')";
        $insert = mysqli_query($con,$sql);
    }
?>