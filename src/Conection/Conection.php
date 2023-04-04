<?php
namespace conection;

use mysqli;

class Conection 
{
    public function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "restaurant1";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }else {
            // echo "success conection";
        }

               return  $conn ;

    }
}

// $sql = "INSERT INTO products (id,name,price,img,categorie_id)
// VALUES (NULL,'Chicken','300','Chicken.img','1')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>

