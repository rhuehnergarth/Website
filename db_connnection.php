<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "rhuehnergarth";
    $dbpass = "G-Chr1s=U40LuG>J";
    $db = "id15818364_whitecastlechores";

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
}
?>
