<?php
namespace Models;

use Conection\Conection;
use conection\DatabaseSingleton;

class CreateProduct
{
	public function create($name,$price,$img,$desccraption,$categorie_id)
	{

		$connect = DatabaseSingleton::getInstance()->getConnection();
		$conn =$connect->connect();
			$sql = "INSERT INTO products (`name`,`price`,`img`,`desccraption`,`categorie_id`) VALUES ('$name',$price,'$img','$desccraption',$categorie_id)";
	
	
			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	
			$conn->close();

		

	}




}

