<?php 


// mysql connectivity
  $con = new mysqli("localhost" , "root" , "" , "i_g");

  // write query data
  $query = "SELECT * FROM admin_contact WHERE ccontact_id = 0";

   // exacute query
  $result = $con->query($query);

  if ($result) {
  	header('location:archivedcontact.php');
  }


 ?>