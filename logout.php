<?php
ob_start(); // start output buffering
require_once("./src/FrontFiles/Frontend/HeaderDahs.php"); // include header file
 $User->logout();
//  echo"logout success";
// Redirect back to the previous page
header("Location:index.php");
ob_end_flush(); // flush output buffer
?>
