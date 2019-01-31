<?php 

 require 'config/config.php';
 require 'includes/register_handlers.php';
 require 'includes/login_handlers.php';

 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome Raise the problem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/font-awesome.min.css">
     
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     <link rel="stylesheet" type="text/css" href="assets/css/style2.css"> 
     <link rel="stylesheet" type="text/css" href="assets/css/style3.css"> 
     <script src="assets/js/register.js"></script>
     <script src="assets/js/bootstrap.js"></script>
	 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

	<?php  

	if(isset($_POST['register_button'])) {
		echo '
		<script>

		$(document).ready(function() {
			$("#first").show();
			$("#second").hide();
		});

		</script>

		';
	}


	?>
	
   

    <div class="fb-header">
        <div id="img1" class="fb-header">
            <img id="img1" src="assets/images/raise.png">
        </div>

        <div id="first">
        <form action="register.php" method="POST">
        <div class="login-form">
            <div id="form1" class="fb-header">
                Email  <br>
                <input style="color:black"; type="text" name="log_email" placeholder="Email Address" value="<?php 
		if(isset($_SESSION['log_email'])) {
			echo $_SESSION['log_email'];
		} 
		?>"> <br>

              <!--  <input  type="checkbox"> Keep me logged in -->
            </div>

            <div id="form2" class="fb-header">
                Password <br>
                <input style="color:black"; type="password" name="log_password" placeholder="Password"> <br>
                <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
            
               
            </div>
            <input type="submit" class="submit1" name="login_button" value="Login" >
        </div>
        </form>
        </div>
    
    </div>
    




    
    <div class="fb-body">
        <div id="intro1" class="fb-body"> Raise The Problem helps you connect and share problem with the people in your life
        </div>


        <div id="img2" class="fb-body"> 
            <img id="img2" src="assets/images/connected.jpg" alt="" width="537" height="195">
        </div>
         <div id="second">
         <div id="intro2" class="fb-body">
              Need and account? 
        </div>

        <div id="intro3" class="fb-body">
            Register here!
        </div>


       
        <form method="POST" action="register.php">
        <div id="form3" class="fb-body">
             <label for="uname"><b></b></label>
            <input type="text" placeholder="First Name"value="<?php 
		if(isset($_SESSION['reg_fname'])) {
			echo $_SESSION['reg_fname'];
		} 
		?>" name="reg_fname" required><br>
		<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>

             <label for="uname"><b></b></label>
            <input type="text" placeholder="Last Name" value="<?php 
		if(isset($_SESSION['reg_lname'])) {
			echo $_SESSION['reg_lname'];
		} 
		?>" name="reg_lname" required><br>
		<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>


             <label for="email"><b></b></label>
            <input type="text" placeholder="Enter Email" value="<?php 
		if(isset($_SESSION['reg_email'])) {
			echo $_SESSION['reg_email'];
		} 
		?>" name="reg_email" required><br>

            <label for="email"><b></b></label>
            <input type="text" placeholder="Confirm Email" value="<?php 
		if(isset($_SESSION['reg_email2'])) {
			echo $_SESSION['reg_email2'];
		} 
		?>" name="reg_email2" required><br>

		<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
		else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
		else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>

            <label for="psw"><b></b></label>
             <input type="password" placeholder="Enter Password" name="reg_password" required><br>

             <label for="psw-repeat"><b></b></label>
             <input type="password" placeholder="Repeat Password" name="reg_password2" required><br>

             <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
		else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
		else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>

             <!--
             <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
        -->

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>


            <p id="intro4"> By clicking Create an account, you agree to our Terms and That you have read our Data Policy, including our cookie use.</p>

            <input type="submit" name="register_button" class="button2" value="Register"> <br> <br>

            <p id="intro5"> <a href="#"> Create a page  </a> for a celebrity, band or Business </p>
        </div>
        </form>
        </div>



    </div>

    <div class="fb-body-footer">
        <div id="fb-body-footer-base"  class="fb-body-footer"> English (UK) <br>
            <p style="color: gray";> _______________________________________________________________________________________________________________________________
                </p>
             
            Sign up Log In 

            <br> <br>
            <p style="color:black;"> &copy; <a href="">Raise The Problem</a> </p>
        </div>
    </div>








</body>
</html>



