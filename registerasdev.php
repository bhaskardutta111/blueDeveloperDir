<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<meta name="description" content="Blue Developer Directory">
	
<!--	<link rel = "stylesheet" href = "styles/w3.css" type = "text/css">  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/home.css">
	<link rel="stylesheet" href="styles/register.css">
	
<title>Blue Developer Directory</title>
</head>

<body>
	<div class="container-fluid">

<!--HEADER -->
		<div class="row">
    		<div class="col">
      			<h1><span class="blue-text">Blue</span> Developer Directory</h1>
    		</div>
			<div class="col">
      			<h4>Find A Developer <span class="now">NOW</span></h4>
    		</div>
  		</div>

<!--NAVBAR--> 
 <nav class="nav">
 	<ul>
		<li class="menuitem"> <a class="nav-link" href="index.html">Home</a> </li>
		<li class="menuitem"> </li><a class="nav-link" href="aboutus.html">About Us</a>
		<li class="menuitem"> </li><a class="nav-link" href="browsedev.html">Browse Developers</a>
		<li class="menuitem"> </li><a class="nav-link" href="registerasdev.html">Register as Developers</a>
		<li class="menuitem"> </li><a class="nav-link" href="contactus.html">Contact Us</a>
	</ul>
</nav>

<!--LINKS-->
	<aside>
		<nav id="links">
			<h3>Links</h3>
			<ul class="leftLinks">
				<li class="nav-item">
    				<a href="#">SEO</a> </li>
				<li class="nav-item">
    				<a href="#">PHP</a> </li>
    			<li class="nav-item">
    				<a href="#">AJAX</a> </li>
    			<li class="nav-item">
    				<a href="#">jQuery</a> </li>
    			<li class="nav-item">
    				<a href="#">Web Design</a> </li>
				<li class="nav-item">
    				<a href="#">Web Developer</a> </li>
    			<li class="nav-item">
    				<a href="#">Content Creation</a> </li>
    			<li class="nav-item">
    				<a href="#">Internet Marketing</a> </li>
    			<li class="nav-item">
    				<a href="#">XHTML Templates</a> </li>
			</ul>
		</nav>
	</aside>

<!--REGISTER FORM-->
	<section class="registerform">
		<h4> Please fill out your details to register </h4>

		<form method="post" action="register.php">
			<div class="form-group row">
				<div class="col-xs-4" id="firstname">
					<label for="inputFirstName">First Name</label>
					<input type="text" class="form-control" id="inputFirstName" name="fname" placeholder="John/Jane">
					<span class = "error"> * <?php echo $fnameErr; ?> </span> <br> </p>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-xs-4" id="lastname">
					<label for="inputLastName">Last Name</label>
					<input type="text" class="form-control" id="inputFirstName" name="lname" placeholder="Doe">
					<span class = "error"> * <?php echo $lnameErr; ?> </span> <br> </p>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-xs-4" id="email">
					<label for="inputEmail">Email</label>
					<input type="email" class="form-control" id="inputEmail" name="email" placeholder="example@mail.com">
					<span class = "error"> * <?php echo $emailErr; ?> </span> <br> </p>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-xs-4" id="phone">
					<label for="inputPhone">Phone</label>
					<input type="number" class="form-control" id="inputPhone" name="phone" placeholder="+91 0123456789">
					<span class = "error"> * <?php echo $phoneErr; ?> </span> <br> </p>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-xs-4" id="location">
					<label for="inputLocation">Location</label>
					<input type="number" class="form-control" id="inputLocation" placeholder="">
				</div>
					<button type="button" class="btn btn-primary">Detect my Location</button>
			</div>

			<button type="submit" class="btn btn-primary">Register</button>
		</form>

	</section>

	


<!--
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> </script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"> </script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"> </script>
-->

</body>
</html>
