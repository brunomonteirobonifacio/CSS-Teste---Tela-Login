<?php
    include('connection.php');
    $con = connect();
    $json = trim(file_get_contents("php://input"));
    $object = json_decode($json, true);
    $name = $object['username'];
    echo $json;
    

    $sql = "Select * from usuario where nome_usua = '$name'";
    $result = mysqli_query($con,$sql);
    $dataBaseName = mysqli_fetch_array($result)[0];
    echo json_encode(['dataBaseName' => $dataBaseName]);
?>