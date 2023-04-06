<?php
namespace Models;

use Conection\Conection;
use conection\DatabaseSingleton;

class ShowProduct
{
	public function Show($categorie_id)
	{

		$connect = DatabaseSingleton::getInstance()->getConnection();
		$conn =$connect->connect();

		$sql = "SELECT * FROM products where categorie_id=$categorie_id";

		$result = $conn->query($sql);
		$conn->close();

		return $result ;


	}

	public function ShowSingle($id)
	{

		$connect = DatabaseSingleton::getInstance()->getConnection();
		$conn =$connect->connect();

		$sql = "SELECT * FROM products where id=$id";

		$result = $conn->query($sql);
		$results = $result -> fetch_assoc();

		$conn->close();

		return $results ;


	}


}

