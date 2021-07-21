<?php
	session_start();
	
	if(array_key_exists("logout",$_GET))
	{
		session_destroy();
		header("location: index.php");
		
	}
	else if((array_key_exists("login", $_SESSION) and $_SESSION["login"]))
	{
		header("location: index.php");
	}
	$link=mysqli_connect("remotemysql.com","aWheyM4OjS","uSZzAjPiCI","aWheyM4OjS");
	if(mysqli_connect_error())
	{
		die ('database connection error');
	}
	
	$string='';
	$email='';
	$id='';
	$name='';
	if(array_key_exists("submit", $_POST))
	{
		if(!$_POST['login'] or !$_POST['password'])
		{
			$string='<div class="alert alert-danger" role="alert">
  						Fill the form correctly!!.</div>';
		}
		else
		{
			$email=$_POST['login'];
			$query="SELECT id,name from personal_info where '".$email."'=email";
			if($result=mysqli_query($link,$query))
			{
				$row=mysqli_fetch_array($result);
				if(!isset($row))
				{
					$string='<div class="alert alert-danger" role="alert" >
  						Incorrect LoginID or Password</div>';
				}
				else
				{
					$id=$row[0];
					$name=$row[1];
					$query="SELECT password from personal_info where ".$id."=id";
					if($result=mysqli_query($link,$query))
					{
						$row=mysqli_fetch_array($result);
						if($row[0]==md5(md5($email).$_POST['password']))
						{
							// $string='<div class="alert alert-success" role="alert">
  					// 	Welcome back!! You are successfully logged in.</div>';
							$_SESSION['login']=$id;
							$_SESSION['name']=$name;
							$_SESSION['email']=$email;
							
							
					
							header("location: index.php");

						}
						else
						{
							$string='<div class="alert alert-danger" role="alert">
						  Incorrect LoginID or Password</div>';
					

						}
					}


				}
			}

		}

	}
	









?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Page</title>
    <!-- <link rel="stylesheet" href="loginstyle.css"> -->
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link rel="icon" type="image/png" href="heart.svg">

    <style>
    body {
        background: url(foodhomepg1.jpg) no-repeat fixed center;
        background-size: cover;
        background-position: center;
        background-color: white;
    }
    </style>

</head>

<body>
    <!-- Image and text for navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 funny">

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
                <li class="nav-item dropdown bg-dark">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="transaction.php">Transfer Money to own bank</a>
                        <a class="dropdown-item" href="tootherbank.php">Transfer Money to other bank</a>
                        <a class="dropdown-item" href="balance.php">current balance</a>
                        <a class="dropdown-item" href="feedback.php">Raise a Complaint</a>
                    </div>
                </li>

                <li class="nav-item dropdown bg-dark">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>

                        <a class="dropdown-item" href="transactionsummary.php">Transction details</a>
                        <a class="dropdown-item" href="deleteAccount.php">Delete Account</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>



            </ul>
        </div>
        </div>
    </nav>
    <!--  end of navbar -->
    <!--<div class="name">
			<h1>Fit Trac</h1>
		</div>-->






    <!-- <form class="box" method="post"> -->


    <!-- <h1>LOGIN</h1>
		<input type="text" name="login" placeholder="Enter Email">
		<input type="password" name="password" placeholder="Enter Password">
		 <input type="submit" name="submit" value="Sign In"> -->

    <!-- <div class="links">
				<a href="forgotpassword.php">Forgot Password?</a>
			</div>
			<br>
			<br>
			<br/>
			<div class="links">
				<a href="newAccount.php">Create Account</a>
			</div>
	</form> -->




    <div class="container">

        <form method="post">

            <h1>LOGIN</h1>
            <div class="input-field">
                <input type="text" name="login" required>
                <label>Enter Email</label>
            </div>
            <div class="input-field">
                <input class="pswrd" type="password" name="password" required>
                <span class="show">SHOW</span>
                <label>Enter Password</label>
            </div>
            <div class="button" name="submit">
                <div class="inner">
                </div>

                <button type="submit">SIGN IN</button>
            </div>
        </form>

        <div class="signup">
            <a href="forgotpassword.php">Forgot Password?</a>
            <br><br>
            <a href="newAccount.php">Create an account</a>
        </div>
    </div>
    <script>
    var input = document.querySelector('.pswrd');
    var show = document.querySelector('.show');
    show.addEventListener('click', active);

    function active() {
        if (input.type === "password") {
            input.type = "text";
            show.style.color = "#1DA1F2";
            show.textContent = "HIDE";
        } else {
            input.type = "password";
            show.textContent = "SHOW";
            show.style.color = "#111";
        }
    }
    </script>






</body>

</html>