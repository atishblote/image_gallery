<?php 

	if (isset($_GET['deleteCId'])) {
		$deleteconid = $_GET['deleteCId'];

		// connect database
		$con = new mysqli("localhost" , "root" , "","i_g");

		// write query
		$query = " UPDATE admin_contact SET ccontact_id = 0 WHERE id = $deleteconid";

		// exacute query
		$result = $con->query($query);

		if ($result) {
			header('location:acontact.php');
		}
		else{
			echo mysqli_error($con);
		}

	}

// recover conatct

	else if (isset($_GET['RecCId'])) {
		$deleteconid = $_GET['RecCId'];

		// connect database
		$con = new mysqli("localhost" , "root" , "","i_g");

		// write query
		$query = " UPDATE admin_contact SET ccontact_id = 1 WHERE id = $deleteconid";

		// exacute query
		$result = $con->query($query);

		if ($result) {
			header('location:archivedcontact.php');
		}
		else{
			echo mysqli_error($con);
		}

	}



// hard delete contact
	else if (isset($_GET['HarddeleteCId'])) {
		$deleteconid = $_GET['HarddeleteCId'];

		// connect database
		$con = new mysqli("localhost" , "root" , "","i_g");

		// write query
		$query = "DELETE FROM admin_contact WHERE id = $deleteconid";
		

		// exacute query
		$result = $con->query($query);

		if ($result) {
			header('location:archivedcontact.php');
		}
		else{
			echo mysqli_error($con);
		}

	}





	// feedback
	// sipmple delete
	else if (isset($_GET['deletefId'])) {
		$deletefeeid = $_GET['deletefId'];

		// connect database
		$con = new mysqli("localhost" , "root" , "","i_g");

		// write query
		$query = " UPDATE admin_feedback SET feedback_id = 0 WHERE id = $deletefeeid";

		// exacute query
		$result = $con->query($query);

		if ($result) {
			header('location:afeedback.php');
		}
		else{
			echo mysqli_error($con);
		}

	}




	// recover feedback 
	else if (isset($_GET['RecFId'])) {
		$recfeeid = $_GET['RecFId'];

		// connect database
		$con = new mysqli("localhost" , "root" , "","i_g");

		// write query
		$query = " UPDATE admin_feedback SET feedback_id = 1 WHERE id = $recfeeid";

		// exacute query
		$result = $con->query($query);

		if ($result) {
			header('location:archivedfeedback.php');
		}
		else{
			echo mysqli_error($con);
		}

	}



	// harddelete feedback 
	else if (isset($_GET['HarddeleteFId'])) {
		$harddelfeeid = $_GET['HarddeleteFId'];

		// connect database
		$con = new mysqli("localhost" , "root" , "","i_g");

		// write query
		$query = "DELETE FROM admin_feedback WHERE id = $harddelfeeid";

		// exacute query
		$result = $con->query($query);

		if ($result) {
			header('location:archivedfeedback.php');
		}
		else{
			echo mysqli_error($con);
		}

	}






 ?>
