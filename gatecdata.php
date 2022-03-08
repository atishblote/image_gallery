<?php 

	extract($_POST);
	if (isset($_POST['ContactSubmit'])) {
		echo "<pre>";
		print_r($_POST);


		// data base connectivity
		$con = new mysqli("localhost" , "root" ,"" , "i_g");

		// write query
		$query = "INSERT INTO admin_contact VALUES(NULL , '$cname' , '$cemail' , '$cmobile' ,'$cmessage' , 1)";

		// ecxacute query

		$result = $con->query($query);

		if ($result) {
			header('location:contact.php');
		}
		else{
			echo mysqli_error($con);
		}


	}



	if (isset($_POST['FeedbackSubmit'])) {
		// echo "<pre>";
		// print_r($_POST);

		// data base connectivity
		$con = new mysqli("localhost" , "root" ,"" , "i_g");

		// write query
		$query = "INSERT INTO admin_feedback VALUES(NULL , '$fname' , '$femail' , '$fmessage'  , 1)";

		// ecxacute query

		$result = $con->query($query);

		if ($result) {
			header('location:feedback.php');
			
		}
		else{
			echo mysqli_error($con);
		}
		

	}
 ?>