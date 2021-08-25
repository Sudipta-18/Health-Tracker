<?php
  session_start();
  $_SESSION['action']='';

  if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
  {
    // $now=time();
    // if($now>$_SESSION['expire'])
    // {
    //   session_destroy();
    //   // header("location: login.php");
    //   header('Location: login.php?msg=' . urlencode(base64_encode("You have been successfully logged out!")));
    // }
    
  }
  else
  {
    header("location: login.php");
  }
  $link=mysqli_connect("remotemysql.com","aWheyM4OjS","uSZzAjPiCI","aWheyM4OjS");
  if(mysqli_connect_error())
  {
      die ('database connection error');
  }
    $string='';
    
      $date=date("Y-m-d");
      $query="select name from personal_info where ".$_SESSION['login']."=id";
      $query1="select email from personal_info where ".$_SESSION['login']."=id";
      $query2="select bmi from personal_info where ".$_SESSION['login']."=id";
      $query3="select phone from personal_info where ".$_SESSION['login']."=id";
      $query4="select dob from personal_info where ".$_SESSION['login']."=id";
      $query5="select gender from personal_info where ".$_SESSION['login']."=id";
      $query6="SELECT sum(calories) from food_tracking where ".$_SESSION['login']."=id and date='$date'";
      $query7="SELECT sum(calories_burnt) from workout_tracking where ".$_SESSION['login']."=id and date='$date'";


      $result=mysqli_query($link,$query);
      $row=mysqli_fetch_array($result);
      $result1=mysqli_query($link,$query1);
      $row1=mysqli_fetch_array($result1);
      $result2=mysqli_query($link,$query2);
      $row2=mysqli_fetch_array($result2);
      $result3=mysqli_query($link,$query3);
      $row3=mysqli_fetch_array($result3);
      $result4=mysqli_query($link,$query4);
      $row4=mysqli_fetch_array($result4);
      $result5=mysqli_query($link,$query5);
      $row5=mysqli_fetch_array($result5);
      $result6=mysqli_query($link,$query6);
      $row6=mysqli_fetch_array($result6);
      $result7=mysqli_query($link,$query7);
      $row7=mysqli_fetch_array($result7);
    
    $string1='';
    $string1= "<h2>".$row[0]."</h2>"; 
    $string2="<h2>".$row1[0]."</h2>";  
    $string3="<h2> ".$row2[0]."</h2>";  
    $string4="<h2> ".$row3[0]."</h2>";  
    $string5="<h2> ".$row4[0]."</h2>";  
    $string6="<h2> ".$row5[0]."</h2>";
    $string7="<h2> ".$row6[0]." calories</h2>";
    $string8="<h2> ".$row7[0]." calories</h2>";
    
  






?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="heart.svg">
    <link rel="stylesheet" href="./profile.css">



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3 ">
        <!--<div class="container-fluid">-->
        <a class="navbar-brand" href="index.php" id="nm">
            <img src="heart.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Fit Trac
        </a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown bg-primary">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="bmi.php">Calculate BMI</a>
                        <a class="dropdown-item" href="optimalintake.html">Optimal Intake</a>
                        <a class="dropdown-item" href="diet_calculator.php">Calorie Tracking</a>
                        <a class="dropdown-item" href="excercise_calculator.php">Workout Tracking</a>
                    </div>
                </li>

                <!-- <li class="nav-item dropdown bg-primary">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>

                        <a class="dropdown-item" href="transactionsummary.php">Transction details</a>
                        <a class="dropdown-item" href="deleteAccount.php">Delete Account</a>

                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>



            </ul>
        </div>
        <!--</div>-->
        </div>
    </nav>
    <!--  end of navbar -->

    <!-- table starts-->



    <!-- table ends -->

    <div class="login_box container" style="overflow-x:auto;">
        <h4 class="title"> My Profile</h4>
        <div class="row">
            <div class="col-sm-6">
                <h3>Name</h3>
            </div>
            <div class="col-sm-6"><?php echo $string1 ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3>Email Id</h3>
            </div>
            <div class="col-sm-6"><?php echo $string2 ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3>Mobile No</h3>
            </div>
            <div class="col-sm-6"><?php echo $string4 ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3>Date Of Birth</h3>
            </div>
            <div class="col-sm-6"><?php echo $string5 ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3>Gender</h3>
            </div>
            <div class="col-sm-6"><?php echo $string6 ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3>BMI</h3>
            </div>
            <div class="col-sm-6"><?php echo $string3 ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3>Today's Calorie Intake </h3>
            </div>
            <div class="col-sm-6"><?php echo $string7 ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3>Today's Calorie Burnt </h3>
            </div>
            <div class="col-sm-6"><?php echo $string8 ?></div>
        </div>
        <div class="row">
            <div class="col col-sm-2"><a href="bmi.php"><button class="btn btn-warning mt-2">Update BMI</button></a><a
                    href="deleteAccount.php"><button class="btn btn-danger mt-2">Delete
                        Account</button></a></div>
            <div></div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


</body>

</html>