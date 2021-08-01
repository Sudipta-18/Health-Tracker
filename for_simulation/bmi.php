<?php
	session_start();
	$submit='';
	if((array_key_exists("login", $_SESSION) and $_SESSION["login"]))
	{
		$submit='<button type="submit "id="btn" name="submit" onClick="BMI()">Update BMI</button>';
	}
	$link=mysqli_connect("remotemysql.com","aWheyM4OjS","uSZzAjPiCI","aWheyM4OjS");
	if(mysqli_connect_error())
	{
		die ('database connection error');
	}
	if(array_key_exists("submit", $_POST)){
		$bmi=$_POST['result'];
		$id=$_SESSION['login'];
		$query="UPDATE personal_info set bmi=".$bmi." where ".$id."=id";
		$result=mysqli_query($link,$query);
		header("location: profile.php");
		
	}
		



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="heart.svg">
    <title>BMI Calculator</title>
</head>
<style media="screen">
body {
    margin: 0;
    padding: 0;
    text-align: center;
    font-family: sans-serif;
    background-image: linear-gradient(120deg, #ff6b6b, #5f27cd);
    min-height: 100vh;
}

div {
    width: 500px;
    position: absolute;
    top: 50%;
    left: 50%;
    background-color: #fff;
    transform: translate(-50%, -50%);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 1px 1px 20px #ee5253;
}

h2 {
    font-size: 30px;
    font-weight: 600;
}

.text {
    text-align: left;
    margin-left: 150px;
}

#w,
#h {
    color: #222f3e;
    text-align: left;
    font-size: 20px;
    font-weight: 200;
    outline: none;
    border: none;
    background: none;
    border-bottom: 1px solid #341f97;
    width: 200px;
}

#w:focus,
#h:focus {
    border-bottom: 2px solid #341f97;
    width: 300px;
    transition: 0.5s;
}

#result {
    color: #341f97;
}

#btn {
    font-family: inherit;
    margin-top: 10px;
    border: none;
    color: #fff;
    background-image: linear-gradient(120deg, #ff6b6b, #5f27cd);
    width: 150px;
    padding: 10px;
    border-radius: 30px;
    outline: none;
    cursor: pointer;
}

#btn:hover {
    box-shadow: 1px 1px 10px #341f97;
}

#info {
    font-size: 12px;
    font-family: inherit;
}
</style>
<script type="text/javascript">
function BMI() {
    var h = document.getElementById('h').value;
    var w = document.getElementById('w').value;
    var bmi = w / (h / 100 * h / 100);
    var bmio = (bmi.toFixed(2));
    document.getElementById("result").innerHTML = "Your BMI is " + bmio;
    document.getElementById("updateResult").value = bmio;
}
</script>

<body>
    <div>
        <h2>BMI Calculator</h2>
        <p class="text">Height</p>
        <input type="text" id="h" required>
        <p class="text">Weight</p>
        <input type="text" id="w" required>
        <p id="result"></p>
        <button id="btn" onClick="BMI()">Calculate</button>
        <form method="post">
            <input type="hidden" id="updateResult" name='result'>
            <?php echo $submit?>
        </form>
        <p id="info">Please enter height [cm] and weight [kg]</p>
    </div>
</body>

</html>