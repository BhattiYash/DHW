<?php 
            $conn = mysqli_connect("localhost","admin","admin");
            $db = mysqli_select_db($conn,"admin");
            $sql = "SELECT Age FROM doctor";
            $result = mysqli_query ($conn,$sql);
            if ($conn==true) {
                echo "Successfully";
            }
            if ($db==true) {
                echo "Data";
            }
            if (mysqli_query($conn,$sql)) {
                echo "selected";
            }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depression Healing</title>
    <link rel="stylesheet" href="delete.css">
</head>
<body>
    <div id="main">
        <div id="details">
            <h2 id="h2">Delete Doctor's Details</h2>
            <form action="#" id="register" method="GET">
                <select name="dropdown" id="drlist">
                    <?php 
                    while($row=mysqli_fetch_array($result)){
                    echo "<span><option>".$row[0]."</option>";
                }
                ?>
                </select>
                <br><br>
                <button name="submit" id="submit">Delete
<?php
                if(isset($_GET['submit'])) {
                    $del = $_GET['dropdown'];
                if (mysqli_query($conn,"DELETE FROM doctor WHERE Age = $del")) {
                echo "Data is deleted";
            }
            else{ echo "error occurred"; }
}
?>
            </form>
        </div>
    </div>
</body>
</html>