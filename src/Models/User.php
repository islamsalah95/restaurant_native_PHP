<?php
namespace Models;

use Conection\Conection;
session_start();

class User
{
	public function login($email,$password)
	{

		$connect = new Conection();
		$conn = $connect->connect();

		$sql = "SELECT * FROM users where email='$email'";
		$result = $conn->query($sql);




		if ($result->num_rows > 0) {
			// output data of each row
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$hashed_password = $row['password'];
					if (password_verify($password, $hashed_password)) {
						echo "Password is valid!";
					return	$_SESSION["Islogin"] = true;

					} else {
						echo "Invalid password.";
						return	$_SESSION["Islogin"] = false;
					}
				  echo "<br>";
				}
			  } 
		  }
		   else {
			echo "you are not register results";
		  }


		$conn->close();

	}

	public function logout()
	{
		$_SESSION["Islogin"] = false;

      // remove all session variables
        session_unset();

      // destroy the session
       session_destroy();

	}
	// public function register($email,$password)
	// {

	// 	$connect = new Conection();
	// 	$conn = $connect->connect();

    //     $hashed_password = password_hash($password, PASSWORD_DEFAULT);

	// 	$sql = "INSERT INTO users (`email`,`password`) VALUES ('$email','$hashed_password')";

	// 	if ($conn->query($sql) === TRUE) {
	// 		echo "New register add record successfully";
	// 	} else {
	// 		echo "Error: " . $sql . "<br>" . $conn->error;
	// 	}

	// 	$conn->close();
	// }




}

