<?php
namespace Models;

use Conection\Conection;

class ShowProduct
{
	public function Show($categorie_id)
	{

		$connect = new Conection();
		$conn = $connect->connect();

		$sql = "SELECT * FROM products where categorie_id=$categorie_id";

		$result = $conn->query($sql);
		$conn->close();

		return $result ;


	}




}

