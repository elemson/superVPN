<?php
    $conn = mysqli_connect('localhost', 'elemson', 'test1234', 'ultravpn-db');
    //check connection
    if (mysqli_connect_errno()) {
        echo 'Connection error: ' . mysqli_connect_errno();
    }

?>