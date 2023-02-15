<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Doctor's Details</h1>
	<form action="doctorDB.php" method="POST">
		Doctor's Name : <input type="text" name="Name"><br><br>
		Address : <input type="text" name="Address"><br><br>
		Experience : <input type="number" name="Experience"><br><br>
		Degree : <input type="text" name="Degree"><br><br>
		Age : <input type="number" name="Age"><br><br>
		Gender : <input type="radio" name="gen" value="Male">Male<input type="radio" name="gen" value="Female">Female<br><br>
		Email ID : <input type="email" name="eId"><br><br>
		University : <input type="text" name="university"><br><br>
		Phone No : <input type="number" name="phone"><br><br>
		<input type="submit" name="Submit">
	</form>
</body>
</html>