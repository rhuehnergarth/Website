<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "rhuehnergarth";
 $dbpass = "G-Chr1s=U40LuG>J";
 $db = "id15818364_whitecastlechores";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>