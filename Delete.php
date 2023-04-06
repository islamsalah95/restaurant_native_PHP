<?php
ob_start(); // start output buffering
require_once("./src/FrontFiles/Frontend/HeaderDahs.php"); // include header file

use Models\DeleteProduct;
$id = $_GET["id"];
$DeleteProduct=new DeleteProduct();
$DeleteProduct->delete($id);

// Redirect back to the previous page
header("Location: ".$_SERVER['HTTP_REFERER']);

ob_end_flush(); // flush output buffer
?>
