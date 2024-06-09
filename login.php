<?php

  $login=false;
  $showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
include 'partials/_dbconnect.php';
$username= $_POST["username"];
$password=$_POST["password"];



    $sql="SELECT * FROM `users` WHERE username = '$username' AND password = '$password';";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);
    if($num ==1)
    {
        $login =true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location:index.php");

       
    }
}
else{
    $showerror = "Invalid Credentials!!";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Login.css">
   
    <title>Login</title>
</head>
<body>
<?php require  'partials/_nav.php'?>

<?php
if($login)
{
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successs!!</strong> Your are logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
// if($showerror)
// {
// echo '
// <div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Something went wrong!!</strong>'.$showerror.'
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';
// }
?>

<div class="banner">
  <div class="logcontainer">

    <div class="box">
    <div class="image"></div><br><br>
    <h3>log in to your account</h3><br>
    <form action="/E_learning/login.php " method="POST">
      
     <label for="username" class="testing">Username</label><br>
    <input type="text" class="inputcontrol" id="username" name="username" aria-describedby="emailHelp"><br>
    <label for="password">Password</label><br>
    <input type="password" class="inputcontrol" id="password" name="password"><br>
    <!-- <p>forgate password ?</p> -->
    <button type="submit" class="submitBtn">Login</button>
    </form>
    </div>
   
  </div>

</div>



<!-- Loging page front end desing part :: -->

<!-- 
<div class="container my-4">
    <h1 >Login to our website</h1>
    <form action="/University_project/login.php" method="POST">
    <div class="form-group col-md-6">
        <label for="username" class="testing">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
       
    </div>
  <div class="form-group col-md-6">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  
  <button type="submit" class="btn btn-primary ">Login</button>
</form> -->



<!-- front end part end  -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>