<?php

namespace Models;

use Conection\Conection;

class DeleteProduct
{
	public function delete($id)
	{

	    $connect = new Conection();
		$conn = $connect->connect();
		$sql = "DELETE FROM products WHERE id=$id";

		if ($conn->query($sql) === TRUE) {
			// echo "New record delete successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	

	}




}

