<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
    header("location :login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Classes are shortly describes here</title>


    <style>
        .box-1{
            width:90%;
            justify-content:space-between;
            margin:20px auto;
            display:flex;

        }

        .box-1 .box{
            width:20%;
            margin:auto;
            padding:10px;
            justify-content:center;
            align-items:center;
            display: flex;
            box-shadow: 0px 2px 6px 0 rgba(236, 140, 172, 0.2), 0px 4px 16px 0 rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1> Some courses that we are offering</h1>
    <h2>WEB_DEVELOPMENT</h2>
    <div class="box-1">
      
            <div class="box">
           <a href="Html_content.html"> <h3>HTML  </h3></a> 
            </div>
            <div class="box">
             <a href="CSS.html">   <h3>CSS</h3></a>
            </div>
            <div class="box">
           <a href="javascript.html"><h3>Javascript</h3> </a> 
            </div>
            <div class="box">
           <a href=""> <h3>PHP</h3></a>
            </div>
    </div>
    <div class="box-1">

            <div class="box">
           <a href=""> <h3>PYTHON</h3> </a>
            </div>
            <div class="box">
               <a href=""> <h3>JAVA</h3></a> 
            </div>
            <div class="box">
            <a href="">  <h3>C</h3> </a> 
            </div>
            <div class="box">
            <a href=""> <h3>C++</h3></a> 
            </div>
    </div>
</body>
</html>