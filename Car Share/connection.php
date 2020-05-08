<?php
//mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db")
$link = mysqli_connect("localhost", "shareca2_chava110", "Bhanu@110", "shareca2_sharecar");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>