<?php
    
    session_start();
    $_SESSION['action']='';
    
    $string='';
    if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
    {
        header("location: index.php");
    }
    
    
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
    $link=mysqli_connect("remotemysql.com","aWheyM4OjS","uSZzAjPiCI","aWheyM4OjS");
    if(mysqli_connect_error())
    {
        die ('database connection error');
    }
    $f_name='';
    $l_name='';
    $full_name='';     //concatenating into single string
    $email='';
    $phone_number='';
    $password='';
    $dob='';
    $height='';
    $weight='';
    $bmi='0';
    $gender='';
    $string='';
    if(array_key_exists("submit",$_POST))
    {
        $f_name=$_POST['fname'];
        $l_name=$_POST['lname'];
        $full_name=$f_name." ".$l_name;     //concatenating into single string
        $email=$_POST['email'];
        $phone_number=$_POST['phone'];
        $password=md5(md5($email).$_POST['password']);
        $dob=$_POST['dob'];
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        $gender=$_POST['gender'];
        if(strlen($phone_number)==10)
        {
            // Attempt insert query execution
            
              
                $query="SELECT count(email) from personal_info where '".$email."'=email";
                $result=mysqli_query($link,$query);
                $row=mysqli_fetch_array($result);
                if($row[0]==0)
                {
                    echo $dob;
                    $sql = "INSERT INTO personal_info(name,email,phone,dob,password,gender,height,weight,bmi)
                                values ('$full_name','$email','$phone_number','$dob','$password','$gender','$height','$weight','$bmi')";
                    if(mysqli_query($link, $sql)){
                        echo "I am fine here also";
                        $last_id = mysqli_insert_id($link); 
                        // email section ends here
                        header("location: login.php");
                    }
                }
                else
                {
                     $string='<div class="alert alert-danger" role="alert">
                            This email id has already been used.Try another!!</div>';
                }
            
        }
        else
        {
                $string='<div class="alert alert-danger" role="alert">
                        wrong mobile number</div>';
        }
    }

?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

    <!--External CSS-->
    <link rel="stylesheet" href="newAccountStyle.css">
    <title>Create Account</title>
    <link rel="icon" type="image/png" href="heart.svg">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <!--External JS-->
    <script src="newAccount.js"></script>
    <script src="cities.js"></script>

    <style>
    .dropdown-menu {
        background-color: black;
        border: none !important;
    }

    .dropdown-item {
        color: whitesmoke !important;
        letter-spacing: 2px;
    </style>


</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 ">
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                    </a>
                </li>
                <li class="nav-item dropdown bg-dark">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <!--<a class="dropdown-item" href="transaction.php">Transfer Money to own bank</a>
                            <a class="dropdown-item" href="tootherbank.php">Transfer Money to other bank</a>
                            <a class="dropdown-item" href="balance.php">current balance</a>
                            <a class="dropdown-item" href="feedback.php">Raise a Complaint</a>-->
                        <a class="dropdown-item" href="">Diet Calculator</a>
                        <a class="dropdown-item" href="">Exercise Calculator</a>
                        <a class="dropdown-item" href="">Personalized Diet</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Account</a>
                </li>


            </ul>
        </div>
        <!--</div>-->
        </div>
    </nav>


    <!--For a alert to check filled info-->
    <div class="alert alert-dark" role="alert">
        Go through the information you filled correctly before submitting.
    </div>
    <div>
        <?php echo $string ?>
    </div>


    <div class="container">
        <div class="info" id="personalInf" style="background-color:#212529d6">
            <p id="pi">Personal Information</p>
        </div>
    </div>
    <!--Bootstrap form-->
    <div class="container">
        <form method="post" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="fname">First name</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="lname">Last name</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option selected hidden value=""></option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>


            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="phone">Contact number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" placeholder="dd-mm-yyyy" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="height">Height</label>
                <input type="int" class="form-control" name="height" id="height" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="weight">Weight</label>
        <input type="int" class="form-control" name="weight" id="weight" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    </div>










    <div class="info" id="pswdInf" style="background-color:#212529d6">
        <p id="pi">Password field</p>
    </div>

    <div class="form-group">
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password"
                    minlength="7" required>
                <div class="invalid-feedback">
                    Please provide password with atleast 7 characters
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm your Password" name="confirmPassword"
                    id="confirmPassword" minlength="7" required>
            </div>
        </div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
            You must agree before submitting.
        </div>
    </div>
    </div>
    </div>
    </div>
    <center>
        <button name="submit" class="btn btn-outline-dark" type="submit">Submit form</button>
    </center>
    </form>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small blue  pt-4">

        <div class="footer-copyright text-center py-3">© 2021 Copyright: Fit Trac
        </div>

    </footer>
    <!-- Footer -->

    <script language="javascript">
    print_state("sts");
    </script>
    <script>
    $('.selectpicker').selectpicker({
        dropupAuto: false
    });
    </script>
    <!--THIS SCRIPT IS FOR CHECKING IF THE INFORMATION IS FILLED IN FORM-->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
    <!--TILL HERE-->

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


</body>

</html>