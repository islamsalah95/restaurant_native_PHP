<?php
namespace Models;

use Conection\Conection;

class UpdateProduct
{
	public function update($id,$name,$price,$img,$description,$categorie_id)
	{

			$connect = new Conection();
			$conn = $connect->connect();
			$sql = "
			UPDATE products SET 
			`name`='$name',  
			`price`=$price, 
			`img`='$img',
			`desccraption`='$description',
			`categorie_id`='$categorie_id'
			WHERE `id`='$id'
		";
	
	
			if ($conn->query($sql) === TRUE) {
				echo "New record update successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	
			$conn->close();



	}




}

