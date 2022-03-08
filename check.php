<?php 
	

	extract($_POST);
	
	// register 
	if (isset($_POST['RegisterAccount'])) {
		// connection
		$con = new mysqli("localhost", "root" ,"", "i_g");

		// write query
		$query = "INSERT INTO register VALUES(NULL ,'$rname' ,'$remail' ,'$rpass' , '$rmobile' )";

		// exacute query
		$result = $con->query($query);
		if ($result) {
			header('location:login.php');
		}
		else{
			header('location:login.php');
			
		}




	}

	// register 
	if (isset($_POST['UpdateAccount'])) {
		// connection
		$con = new mysqli("localhost", "root" ,"", "i_g");

		// write query
		$query = "INSERT INTO register VALUES(NULL ,'$rname' ,'$remail' ,'$rpass' , '$rmobile' )";

		// exacute query
		$result = $con->query($query);
		if ($result) {
			header('location:login.php');
		}
		else{
			header('location:login.php');
			
		}




	}



	// login 
	if (isset($_POST['loginAccount'])) {
		$email = $_POST['lemail'];
		$key = $_POST['skey'];
		// connection
		$con = new mysqli("localhost", "root" ,"", "i_g");

		// write query
		$query = "SELECT * FROM register WHERE email = '$lemail' AND password = '$lpass' ";

		// exacute query
		$result = $con->query($query);

		// data fetch
		$data = $result->fetch_object();
		
		//row fetch
		$rows = mysqli_num_rows($result);

		if ($key == 1996) {
			if ($rows == 1) {
				session_start();
				$_SESSION['sess_id'] = session_id();            // put session id into sess_id
				$_SESSION['id'] = $data->id;                    // database id put into id decrare variable
				$_SESSION['name'] = $data->name;                // db name into name
				$_SESSION['email'] = $data->email;              // db email into email
				$_SESSION['mobile'] = $data->mobile;


				header('location:dashboard.php');
			}
			else{
				echo "erroe";
				
			}
		}
		else{
			echo "<h2>wrong...</h2>";
		}




	}





 ?>