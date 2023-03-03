<?php
if (isset($_POST['userText']) && isset($_POST['passText'])) {

 $con = mysqli_connect('localhost', 'root', '','rentacardb');

 if (!$con) {
    echo "Failure: Could not connect to database!";
    exit();
   }

  $txtpassword = trim($_POST['passText']);
  $txtusername = trim($_POST['userText']);

  if($txtusername=='root' && $txtpassword=='admin123'){

    $result = mysqli_query($con,"SELECT * FROM clients");

    echo "<table>
    <tr>
    <th>Username</th>
    <th>Name</th>
    <th>Email</th>
    </tr>";

    while($row = mysqli_fetch_array($result)) {
	  echo "<tr>";
	  echo "<td>" . $row['username'] . "</td>";	
	  echo "<td>" . $row['name'] . "</td>";
	  echo "<td>" . $row['email'] . "</td>";
	  echo "</tr>";
    }

    echo "</table>";

 }else{
    echo "Sorry, you are not the manager of the website";
  }





} else {
	echo "Please complete all form fields!!";
}

?>