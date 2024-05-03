<?php 

include("php/db_conn.php");

session_start();
session_unset();
session_destroy();

header("Location: login.php");


?>