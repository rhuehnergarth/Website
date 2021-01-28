<?php

    //check what their job is
    $dbhost = "localhost";
    $dbuser = "id15818364_rhuehnergarth";
    $dbpass = "Ck#W<ql{j@3L[Lnu";
    $db = "id15818364_whitecastlechores";

    $mysqli = new mysqli($dbhost,$dbuser,$dbpass,$db);

    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    // Perform query
    $result = $mysqli->query("SELECT 1 FROM HOUSE_MEMBERS WHERE NAME = ");

    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $myJSON = json_encode($data);
    echo $myJSON;


?>