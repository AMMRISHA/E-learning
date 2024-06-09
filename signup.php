<?php
  $showAlert=false;
  $showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
include 'partials/_dbconnect.php';
$username= $_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

if(($password == $cpassword))
{

    $sql="INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp());";
    $result = mysqli_query($conn , $sql);
    if($result)
    {
        $showAlert = true;
        header("location:login.php");
    }
}
else{
    $showerror = "Passwords do not match !!!";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signup.css">
    <title>Signup</title>
</head>
<body>
<?php require  'partials/_nav.php'?>


<?php
if($showAlert)
{
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successs!!</strong> Your account is created and you login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
if($showerror)
{
echo '
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Something went wrong!!</strong>'.$showerror.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>

<div class="signupContainer">

  <div class="inputbox">
   
    <form action="/E_learning/signup.php " method="POST">
    <h3 class="signupTxt">Sign up your account</h3><br>
    <label for="username">Username</label><br>
        <input type="text"  id="username" name="username"
         aria-describedby="emailHelp"><br>
         <label for="password">Password</label><br>
    <input type="password"  id="password" name="password"><br>
    <label for="cpassword"> Comform Password</label><br>
    <input type="password"  id="cpassword" name="cpassword"><br>
    <small id="emailHelp" class="form-text text-muted">Make sure to type same password</small>
    
  <button type="submit" class="btn-signup">Signup</button>
  <div class="icon-box">
    <img src="./facebook.png" alt="icons" width="30" height="30">
    <img src="./email.png" alt="icons" width="30" height="30">
    <img src="./twitter.png" alt="icons" width="30" height="30">
    <img src="./youtube.png" alt="icons" width="30" height="30">
  </div>
  </form>
 
  </div>
  <!-- <div class="image"></div> -->
  <img src="./signupLogo.png" alt="Girl in a jacket" width="500" height="500">

</div>
<div class="endTxt">
  <h5>@Copyright 2022-2023</h5>
  <span>All right reserved by the E-learning portal</span>
</div>

<!-- <div class="container my-4">
    <h1 >Signup to our website</h1>
    <form action="/Zomato/signup.php" method="POST">
    <div class="form-group col-md-6">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
       
    </div>
  <div class="form-group col-md-6">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword"> Comform Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <small id="emailHelp" class="form-text text-muted">Make sure to type same password</small>
  </div>
  

  <button type="submit" class="btn btn-primary ">Signup</button>
</form>
</div> -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>