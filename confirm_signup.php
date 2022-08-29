<?php
    include("connection.php");
    $con = connect();
    $name = $_POST['username'];
    $password = $_POST['password'];
    $confpass = $_POST['confpass'];
    // Searches if there's already an user signed up with that username
    $sql = "Select * from usuario where nome_usua = '$name'";
    $result = mysqli_query($con,$sql);
    //If so, you get directed back to the sign up page with an alert box
    If (mysqli_num_rows($result) > 0){
        Header('Location:signup.php?user=already');
        //Else if password and confirm password got the same value, you get signed up
    }else{
        sleep(1.5);
        If ($password == $confpass){
            $sql = "insert into usuario(nome_usua,senha_usua) values ('$name','$password')";
            $insert = mysqli_query($con,$sql);
            If ($insert){
                Header("Location:index.html");
            } 
            //If they don't, you get back to the sign up page with an alert box
        } else {
            Header('Location:signup.php?user=pwerror');
        }
    }
?>