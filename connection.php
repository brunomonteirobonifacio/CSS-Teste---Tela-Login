<?php
    function connect(){
        $bind = mysqli_connect("localhost","root","","eu_sla");
        return $bind;
    }
?>