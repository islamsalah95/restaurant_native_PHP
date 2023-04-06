<?php ob_start();  ?>
<!-- // start output buffering -->

<?php 
require_once("./src/FrontFiles/Frontend/HeaderDahs.php");  
?>
<?php
    $EmailError = false;
    $PasswordError = false;
    $wrongpassDatabase =true;
if (isset($_POST["btn"])) {


    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $errors = false;

    $patternEmail = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
    if (preg_match($patternEmail, $Email)) {
        // echo "valid email";
        // echo "<br>";
    } else {

        $errors = true;
        $EmailError = true;
    }

    if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/', $Password)) {
        // echo "Valid password!";
    } else {
        $errors = true;
        $PasswordError = true;
    }


    if ($errors == false) {
        $Islogin = $User->login($Email, $Password);
        $errors = true;
        $wrongpassDatabase= $Islogin ;
        if ($Islogin) {
            $_SESSION['Islogin']=1 ;
                header("Location:HomeBreakfast.php");
                ob_end_flush(); // flush output buffer
        }

    }
}

?>

<div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('./src/FrontFiles/loginFiles/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6">
                    <div class="form-block">
                        <div class="text-center mb-5">
                            <h3>Login to <strong>Colorlib</strong></h3>
                            <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                        </div>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group first">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control" placeholder="your-email@gmail.com" value="islamm1995@gmail.com" name="Email" id="Email">
                                <?php if ($EmailError == true) {
                                    echo '<div class="text text-danger">please insert valid email</div>';
                                } ?>
                            </div>
                            <div class="form-group last mb-3">
                                <label for="Password">Password</label>
                                <input type="Password" class="form-control" placeholder="Your Password" value="@Islam1995" name="Password" id="Password">
                                <?php if ($PasswordError == true) {
                                    echo '<ul class="text text-danger">
                                    <li>Invalid password!</li>
                                    <li>At least 8 characters</li>
                                    <li>Contains at least one uppercase letter</li>
                                    <li>Contains at least one lowercase letter</li>
                                    <li>Contains at least one digit</li>
                                    <li>Contains at least one of the following special characters: ! @ # $ % ^ & *</li>
                                    </ul>';
                                } ?>
                            </div>

                            <div class="d-sm-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>
                            <?php if ($wrongpassDatabase == false) {
                                    echo '<h4 class="text text-danger">Invalid password from database.</h4>';
                                } ?>
                           

                            <input type="submit" name="btn" value="Log In" class="btn btn-block btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require_once("./src/FrontFiles/Frontend/Footer.php");  ?>