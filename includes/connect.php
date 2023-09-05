<?php
    $con = mysqli_connect("localhost", "root", "", "prayas_data");
    if(!$con){
        die(mysqli_error($con));
    }
?>