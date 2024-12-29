<?php
require_once "examconfig.php";

session_start();
session_destroy();
header("Location: examadminpage@.php");
?>