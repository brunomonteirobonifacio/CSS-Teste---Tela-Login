<?php
    include("connection.php");
    $con = connect();
    $name = $_POST['username'];
    $password = $_POST['password'];
    $sql = "Select * from usuario where nome_usua = '$name'";
    $result = mysqli_query($con,$sql);
    $_POST['username'] = $name;
    $dbResult = mysqli_fetch_array($result);
    sleep(1.5);
    If (($dbResult[0] == $name)and($dbResult[1] == $password)){
        Header("Location:home.html");
    } else if ($dbResult[0] != $name) {
        Header("Location:index.php?user=notf");
    } else if ($dbResult[1] != $password) {
        Header("Location:index.php?user=pwinc");
    }
?>