<?php require_once("./src/Viwes/Frontend/Header.php");  ?>
<?php
use Models\ShowProduct;
?>

<!-- Menu Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mt-n1 mb-0">Breakfast</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Special</small>
                            <h6 class="mt-n1 mb-0">Launch</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Lovely</small>
                            <h6 class="mt-n1 mb-0">Dinner</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                        $food = new ShowProduct();
                        $breakFast = $food->Show(1);
                        if ($breakFast->num_rows > 0) {
                            // output data of each row
                            while ($row = $breakFast->fetch_assoc()) {
                                echo '<div class="col-lg-6">
           <div class="d-flex align-items-center">' .
                                    '<img class="flex-shrink-0 img-fluid rounded" src="' .
                                    $row["img"]
                                    . '" alt="" style="width: 80px;">' .
                                    '<div class="w-100 d-flex flex-column text-start ps-4">
                   <h5 class="d-flex justify-content-between border-bottom pb-2">
                       <span>' .
                                    $row["name"]
                                    . '</span>
                       <span class="text-primary">' .
                                    $row["price"]
                                    . ' EGP</span>
                   </h5>
                   <small class="fst-italic">' .
                                    $row["desccraption"]
                                    . '</small>
               </div>
           </div>
       </div>';
                                // print_r($row);
                                // echo "<br>";
                            }
                        } else {
                            echo "0 results";
                        }

                        
                        ?>
                    </div>
                </div>






                <div id="tab-2" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                        $food2 = new ShowProduct();
                        $launch = $food2->Show(2);
                        if ($launch->num_rows > 0) {
                            // output data of each row
                            while ($row2 = $launch->fetch_assoc()) {
                                echo '<div class="col-lg-6">
           <div class="d-flex align-items-center">' .
                                    '<img class="flex-shrink-0 img-fluid rounded" src="' .
                                    $row2["img"]
                                    . '" alt="" style="width: 80px;">' .
                                    '<div class="w-100 d-flex flex-column text-start ps-4">
                   <h5 class="d-flex justify-content-between border-bottom pb-2">
                       <span>' .
                                    $row2["name"]
                                    . '</span>
                       <span class="text-primary">' .
                                    $row2["price"]
                                    . ' EGP</span>
                   </h5>
                   <small class="fst-italic">' .
                                    $row2["desccraption"]
                                    . '</small>
               </div>
           </div>
       </div>';
                                // print_r($row);
                                // echo "<br>";
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                    </div>
                </div>






                <div id="tab-3" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                        $food3 = new ShowProduct();
                        $dinner = $food3->Show(3);
                        if ($dinner->num_rows > 0) {
                            // output data of each row
                            while ($row3 = $dinner->fetch_assoc()) {
                                echo '<div class="col-lg-6">
           <div class="d-flex align-items-center">' .
                                    '<img class="flex-shrink-0 img-fluid rounded" src="' .
                                    $row3["img"]
                                    . '" alt="" style="width: 80px;">' .
                                    '<div class="w-100 d-flex flex-column text-start ps-4">
                   <h5 class="d-flex justify-content-between border-bottom pb-2">
                       <span>' .
                                    $row3["name"]
                                    . '</span>
                       <span class="text-primary">' .
                                    $row3["price"]
                                    . ' EGP</span>
                   </h5>
                   <small class="fst-italic">' .
                                    $row3["desccraption"]
                                    . '</small>
               </div>
           </div>
       </div>';
                                // print_r($row);
                                // echo "<br>";
                            }
                        } else {
                            echo "0 results";
                        }

                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Menu End -->

<?php require_once("./src/Viwes/Frontend/Footer.php");  ?>


<?php
// // use Models\User;
// // use Models\CreateProduct;
// // use Models\DeleteProduct;
// // use Models\UpdateProduct;


// // $Products=new UpdateProduct();
// // $Products->update(1,"Chicken",30,"img",1);

// // $Products=new DeleteProduct();
// // $Products->delete(1);


// $Breakfastr=new ShowProduct();
// $results=$Breakfastr->Show(1);

// 		if ($results->num_rows > 0) {
// 		  // output data of each row
// 		  while($rows = $results->fetch_assoc()) {
//             print_r($rows);
// 			echo "<br>";
// 		  }
// 		} else {
// 		  echo "0 results";
// 		}


// // $User=new User();
// // // $User->register("islamm1995@gmail.com","@Islam1995");
// // $result=$User->login("islamm1995@gmail.com","@Islam1995");
// // echo "Islogin== " . $_SESSION["Islogin"] . ".<br>";

// // $Products=new CreateProduct();
// // $Products->create("Chicken",30,"img",1);
?>