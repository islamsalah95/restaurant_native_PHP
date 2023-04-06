<?php ob_start(); ?>
<?php require_once("./src/FrontFiles/Frontend/HeaderDahs.php");  ?>

<?php 
if ( !isset($_SESSION['Islogin']) && !isset($_GET["id"])) {
  header("Location:index.php");
  ob_end_flush(); // flush output buffer
}
?>
<?php

use Models\ShowProduct;
use Models\UpdateProduct;

$id = $_GET["id"];

if ( $_SESSION['Islogin'] !== 1 && $_GET["id"]) {
    header("Location:index.php");
    ob_end_flush(); // flush output buffer
      }
$CreateProduct = new ShowProduct();
$results = $CreateProduct->ShowSingle($id);
// print_r($results);
//errors
$nameError = false;
$priceError = false;
$descriptionError = false;
$fileError = false;
$categoryError = false;
?>
<div class="container">
    <div class="row" style="display: flex;
    justify-content: center;">
        <div class="col-8">


            <?php
            if (isset($_POST["btn"])) {
                if ($_SESSION['Islogin'] == 1) {

                    $name = $_POST["name"];
                    $price = $_POST["price"];
                    $description = $_POST["description"];
                    //
                    $fileName = $_FILES["image"]["name"];
                    $fileType = $_FILES["image"]["type"];
                    $fileSize = $_FILES["image"]["size"];
                    $filePath = $_FILES["image"]["tmp_name"];
                    //
                    $category = $_POST["category"];
                    $errors = false;



                    if (empty($name) || !is_string($name)) {
                        // echo "name is required,name must be at least 5 characters";
                        $nameError = true;
                        $errors = true;
                    }

                    if (empty($price) || !is_numeric($price)) {
                        // echo "price is required, must be a number";
                        $priceError = true;

                        $errors = true;
                    }

                    if (empty($description) || !is_string($description)) {
                        // echo "description is required,description must be at least 10 characters";
                        $descriptionError = true;

                        $errors = true;
                    }

                    if ($fileName) {
                        $fileArray = explode(".", $fileName);
                        $lastElementExt = end($fileArray);
                        $arr = ["png", "jpg", "gif", "svg", "PNG", "JPG", "GIF", "SVG"];
                        $uploads_dir = "./src/FrontFiles/Frontend/img/";
                        if (in_array($lastElementExt, $arr)) {
                            $tmp_name = $_FILES["image"]["tmp_name"];
                            $namee = basename($_FILES["image"]["name"]);
                            move_uploaded_file($tmp_name, $uploads_dir . $namee);
                            $fileName = "./src/FrontFiles/Frontend/img/" . $fileName;
                            // return $fileName;
                        } else {
                            echo "please upload valid file";
                            $errors = true;
                            $fileError = true;
                        }
                    } else {
                        $fileName = $results['img'];
                    }


                    if ($category == 1 || $category == 2 || $category == 3) {
                        if (empty($category) || !is_numeric($category) || !in_array($category, [1, 2, 3])) {
                            // echo "category is required, category be a number";
                            $errors = true;
                            $categoryError = true;
                        }
                    } else {
                        $category = $results['categorie_id'];
                    }



                    if ($errors == false) {
                        // echo"$name*************$price******** $description********* $category*********
                        // *****$fileName *** $fileType ****   $fileSize  *** $filePath    ";
                        // echo "<br>";
                        if ($category == 0) {
                            $category = $results['categorie_id'];
                        }




                        $CreateProduct = new UpdateProduct();
                        $CreateProduct->update($id, $name, $price, $fileName, $description, $category);


                        //errors
                        $nameError = false;
                        $priceError = false;
                        $descriptionError = false;
                        $fileError = false;
                        $categoryError = false;
                        $errors = true;
                        // Redirect back to the previous page


                    }

                    // header("Location: ".$_SERVER['HTTP_REFERER']);
                    header("Location:HomeBreakfast.php");
                    ob_end_flush(); // flush output buffer

                } else {
                    echo '<div class="text text-danger">you are not login</div>';
                }
            }



            ?>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $results['name']; ?>">
                    <?php if ($nameError == true) {
                        echo '<div class="text text-danger">name is required,name must be at least 5 characters</div>';
                    } ?>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?php echo $results['price']; ?>">
                    <?php if ($priceError == true) {
                        echo '<div class="text text-danger">price is required, must be a number</div>';
                    } ?>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $results['desccraption']; ?>"></input>
                    <?php if ($descriptionError == true) {
                        echo '<div class="text text-danger">description is required,description must be at least 10 characters</div>';
                    } ?>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    <?php if ($fileError == true) {
                        echo '<div class="text text-danger">please upload valid file</div>';
                    } ?>
                </div>
                <img src="<?php echo $results['img']; ?>" style='width: 100px;'>
                <div class="form-group">
                    <label>Category</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="select" checked value="0">
                        <label class="form-check-label" for="select">
                            select...
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="breakfast" value="1">
                        <label class="form-check-label" for="breakfast">
                            breakfast
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="launch" value="2">
                        <label class="form-check-label" for="launch">
                            launch
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="dinner" value="3">
                        <label class="form-check-label" for="dinner">
                            dinner
                        </label>
                    </div>
                    <?php if ($categoryError == true) {
                        echo '<div class="text text-danger">category is required, category be a number</div>';
                    } ?>
                </div>
                <button type="submit" name="btn" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>





<?php require_once("./src/FrontFiles/Frontend/Footer.php");  ?>