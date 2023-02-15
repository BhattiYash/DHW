<?php
// $conn = mysqli_connect("localhost","admin","admin","admin");
// $db = mysqli_select_db($conn,"");
// $result = mysqli_query($conn,"SELECT * FROM employee;");
// $nm = $_POST['Name'];
// $add = $_POST['Address'];
// $exp = $_POST['Experience'];
// $deg = $_POST['Degree'];
// $age = $_POST['Age'];
// $gen = $_POST['gen'];
// $eid = $_POST['eId'];
// $uni = $_POST['university'];
// $num = $_POST['phone'];
// echo "
//     <table border='2'>
//         <tr>
//         <th>Doctor's Name</th>
//         <th>Address</th>
//         <th>Experience</th>
//         <th>Degree</th>
//         <th>Age</th>
//         <th>gen</th>
//         <th>eId</th>
//         <th>university</th>
//         <th>phone</th>
//         </tr>";
//         	 echo "<tr><td>".$nm."</td><td>".$add."</td><td>".$exp."</td><td>".$deg."</td><td>".$age."</td><td>".$gen."</td><td>".$eid."</td><td>".$uni."</td><td>".$num."</td></tr>";
// while($row=mysqli_fetch_array($result))
// {
// 	 echo "<tr><td>".$row[0]."</td><td> ".$row[1]." </td><td>".$row[2]."</td><td> ".$row[3]."</td><tr>";
// }
// echo "</table>";
$conn = mysqli_connect("localhost","admin","admin");
$db = mysqli_select_db($conn,"admin");
$nm = $_POST['Name'];
$add = $_POST['Address'];
$exp = $_POST['Experience'];
$deg = $_POST['Degree'];
$age = $_POST['Age'];
$gen = $_POST['gen'];
$eid = $_POST['eId'];
$uni = $_POST['university'];
$num = $_POST['phone'];
// $dex = "CREATE UNIQUE INDEX Doctor_Index ON doctor;";
$sql = "INSERT INTO doctor (Doctor_Name,Address,Experience,Degree,Age,Gender,Email_ID,University,Phone_No) VALUES ('$nm','$add','$exp','$deg','$age','$gen','$eid','$uni','$num')";
// $result = mysqli_query($conn,$sql);
if (!$conn) {
	echo "Connection failed";
}
else{
	echo "Connection Established";
}
if (!$db) {
	echo "DataBase Connection failed";
}
else{
	echo "DataBase Connection Established";
}
// if (mysqli_query($conn,$dex)){
// 	echo "Index Drop Successfully :)";
// } else {
// 	echo "Not drop... :(".mysqli_error($conn);
// }
if (mysqli_query($conn,$sql)){
	echo "Data Inserted Successfully :)";
} else {
	echo "Not Inserted... :(".mysqli_error($conn);
}

// ?>
<!-- <html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DataBase</title>
</head>
<body>

</body>
</html> -->