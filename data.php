<?php

$dbhost = "localhost";
    $dbuser = "id15818364_rhuehnergarth";
    $dbpass = "Ck#W<ql{j@3L[Lnu";
    $db = "id15818364_whitecastlechores";

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $result = mysqli_query($conn, "Select * From HOUSE_MEMBERS")

    $data = array();
    while ($row = mysqli_fetch_assoc($result)){
        $data[] = row;
    }
    echo json_encode($data);
    ?>