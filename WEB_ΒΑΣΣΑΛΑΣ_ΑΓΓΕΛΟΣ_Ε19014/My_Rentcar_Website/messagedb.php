<?php
if (isset($_POST['nameText']) && isset($_POST['emailText'])  && isset($_POST['phoneText']) && isset($_POST['topicText']) && isset($_POST['message'])) {

 $con = mysqli_connect('localhost', 'root', '','rentacardb');
 if (!$con) {
	echo "Failure: Could not connect to database!";
	exit();
  }

 $txtName = trim($_POST['nameText']);
 $txtEmail = trim($_POST['emailText']);
 $txtPhone = trim($_POST['phoneText']);
 $txtSubject = trim($_POST['topicText']);
 $txtMessage = trim($_POST['message']);

 if (empty($txtName) || empty($txtEmail) || empty($txtPhone) || empty($txtSubject) || empty($txtMessage)) {
	echo "Please complete all form fields!";
} else {
	$stmt = $con->prepare("INSERT INTO messages(name,phone_number,email,subject,message) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $txtName, $txtPhone, $txtEmail, $txtSubject, $txtMessage);
	$result = $stmt->execute();

	if ($result) {
		echo "New contact form inserted successfully!";
	} else {
		echo "Your contact form  could not be inserted due to an error!";
	}
	$stmt->close();
}

    mysqli_close($con);


} else {
	echo "Please complete all form fields!!";
}
?>
