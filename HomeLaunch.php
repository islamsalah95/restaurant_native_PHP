<?php ob_start(); ?>
<?php require_once("./src/FrontFiles/Frontend/HeaderDahs.php");  ?>

<?php 
if ($_SESSION['Islogin'] !== 1) {
  header("Location:index.php");
  ob_end_flush(); // flush output buffer
}
?>
<h1 class="text text-primary" style="text-align: center; font-size: 40px;">Launch</h1>

<div class="container mt-3">         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>desccraption</th>
        <th>categorie_id</th>
        <th>img</th>
        <th>created_at</th>
        <th>actions</th>

      </tr>
    </thead>
    <tbody>

<?php 
use Models\ShowProduct;
if ($_SESSION['Islogin'] == 1) {

$ShowProduct=new ShowProduct();
$results=$ShowProduct->Show(2);
foreach ($results as $result) {
   
echo "<tr>";
echo "<td>".$result["id"]."</td>";
echo "<td>".$result["name"]."</td>";
echo "<td>".$result["price"]."</td>";
echo "<td>".$result["desccraption"]."</td>";
echo "<td>".$result["categorie_id"]."</td>";
echo "<td><img src='$result[img]' style='width: 100px;'></td>";
echo "<td>".$result["created_at"]."</td>";

echo "<td> <a class='btn btn-danger' href='Delete.php?id=$result[id]'>Delete</a> 
            <a class='btn btn-primary' href='Update.php?id=$result[id]'>Edit</a>
      </td>";

echo "</tr>";

}
}

    ?>

     
    </tbody>
  </table>
</div>




<?php require_once("./src/FrontFiles/Frontend/Footer.php");  ?>




