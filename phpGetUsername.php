<?php
    include('connection.php');
    $con = connect();
    $name = $_POST['username'];
    $sql = "Select * from usuario where nome_usua = '$name'";
    $result = mysqli_query($con,$sql);
    if (mysqli_fetch_array($reuslt)>0){
        echo false;
    } else {
        echo true;
    }
?>