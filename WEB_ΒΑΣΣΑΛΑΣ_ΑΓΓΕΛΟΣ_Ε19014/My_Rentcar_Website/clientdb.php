<?php
if (isset($_POST['nameeText']) && isset($_POST['usernameText'])  && isset($_POST['emaillText'])) {

 $con = mysqli_connect('localhost', 'root', '','rentacardb');

 if (!$con) {
	echo "Failure: Could not connect to database!";
	exit();
  }


 // get the post records
 $txtName = trim($_POST['nameeText']);
 $txtUsername = trim($_POST['usernameText']);
 $txtemail = trim($_POST['emaillText']);

 if (empty($txtName) || empty($txtUsername) || empty($txtemail)) {
	echo "Please complete all form fields!";
 } else {
	$stmt = $con->prepare("INSERT INTO clients(username,name,email) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $txtUsername, $txtName, $txtemail);
	$result = $stmt->execute();


 if ($result) {
	echo "New Newsletter form inserted successfully!";
  } else {
	echo "Your Newsletter form could not be inserted due to an error!";
  }
  $stmt->close();
 }

   mysqli_close($con);


} else {
	echo "Please complete all form fields!!";
}

?>