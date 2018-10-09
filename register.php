


<?php 

	$fname = $fname = $email = $phone = "";
	$fnameErr = $lnameErr = $emailErr = $phoneErr = "";

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(empty($_POST["fname"])){
			$fnameErr = "Please fill in your first name";
		}
		else{
			$fname = testData($_POST["fname"]);
				if(!preg_match ("/^[a-zA-Z ]*$/", $fname)){
				echo "This field must only contain letters and whitespaces";
			}
		}

		if(empty($_POST["lname"])){
			$fnameErr = "Please fill in your last name";
		}
		else{
			$lname = testData($_POST["lname"]);
				if(!preg_match ("/^[a-zA-Z ]*$/", $lname)){
				echo "This field must only contain letters and whitespaces";
			}
		}

		
		if(empty($_POST["email"])){
			$emailErr = "Enter your Email address";
		}
		else{
			$email = testData($_POST["email"]);
			
			if(!filter_var($email)){
				echo "Invalid Email format";
			}
		}
		
		
		if(empty($_POST["phone"])){
			$phoneErr = "Please enter your Phone Number";
		}
		else{
			$phone = testData($_POST["phone"]);
			
			if(!preg_match('/^[0-9]*$/', $phone")){
				echo "Invalid Number Format";
			}
		}
		
	}

	function testData($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	echo "<h2> Your Details </h2>";
	echo $fname. $lname."<br>";
	echo $email."<br>";
	echo $phone."<br>";




 ?>
