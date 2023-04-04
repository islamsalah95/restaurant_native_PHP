<?php
namespace Models;

use Conection\Conection;
session_start();

class CreateProduct
{
	public function create($name,$price,$img,$categorie_id)
	{

		if ($_SESSION["Islogin"]) {
			$connect = new Conection();
			$conn = $connect->connect();
			$sql = "INSERT INTO products (`name`,`price`,`img`,`categorie_id`) VALUES ('$name',$price,'$img',$categorie_id)";
	
	
			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	
			$conn->close();
		} else {
			echo "only login can access this";

		}
		

	}




}

