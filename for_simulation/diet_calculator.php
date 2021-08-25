<?php
	session_start();
	$submit='';
	if((array_key_exists("login", $_SESSION) and $_SESSION["login"]))
	{
		$submit='<button type="submit"
		class="btn btn-warning ml-3" name="submit" onclick="calory()">Update</button>';
	}
	$link=mysqli_connect("remotemysql.com","aWheyM4OjS","uSZzAjPiCI","aWheyM4OjS");
	if(mysqli_connect_error())
	{
		die ('database connection error');
	}
	if(array_key_exists("submit", $_POST)){
		$calories=$_POST['result'];
		$id=$_SESSION['login'];
		$date=date("Y-m-d");
		$query="INSERT INTO food_tracking(id,calories,date) values ('$id','$calories','$date')";

		$result=mysqli_query($link,$query);
		header("location: profile.php");
		
	}
		





?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="icon" type="image/png" href="heart.svg">
    <title>Diet Calculator</title>
    <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;

    }

    .box {
        width: 600px;
        margin: 5em auto;
        padding: 2em;
        background-color: #fdfdff;
        border-radius: 0.5em;
        box-shadow: 2px 3px 7px 2px rgba(0, 0, 0, 0.02);
    }

    a:link,
    a:visited {
        color: #38488f;
        text-decoration: none;
    }

    @media (max-width: 700px) {
        .box {
            margin: 0 auto;
            width: auto;
        }
    }
    </style>
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
                        <a class="dropdown-item" href="balance.php">Calorie Tracking</a>
                        <a class="dropdown-item" href="feedback.php">Workout Tracking</a>
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
    <div class="box">

        <form method="post">
            <div class="row mb-2">
                <div class="col text-center">
                    <h2>Diet Calculator</h2>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col col-sm-4"><label class="lab">Food Item</label></div>
                <div class="col col-sm-6"><select class="mdb-select md-form form-control" searchable="Search here.."
                        id='food' name='food-item'>
                        <option value="" disabled selected>Select your diet</option>
                        <option value="24">Apple</option>
                        <option value="18">Orange</option>
                        <option value="47">Banana</option>
                        <option value="30">Grapes</option>
                        <option value="30">Mango</option>
                    </select></div>
            </div>
            <div class="row mb-2">
                <div class="col col-sm-4"><label class="lab2">Quantity</label></div>

                <div class="col col-sm-6 input-group"> <input class="form-control" type="text" id="quantity" />
                    <div class="input-group-append">
                        <span class="input-group-text">X 50 grams</span>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col col-sm-4"><label class="lab3">Result</label></div>
                <div class="col col-sm-6 input-group"><input class="form-control" type="text" id="result" name="result"
                        readonly />
                    <div class="input-group-append">
                        <span class="input-group-text">Calories</span>
                    </div>
                </div>
            </div>


            <div class="row mb-2">
                <div class="col offset-sm-4"><button type="button" class="btn btn-success"
                        onclick="calory()">Calculate</button>
                    <?php echo $submit ?>
                </div>

            </div>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });

    function calory() {

        var food = document.getElementById('food').value;
        var quantity = document.getElementById('quantity').value;
        var calories = food * quantity;
        document.getElementById("result").value = calories;
    }
    </script>
</body>

</html>
