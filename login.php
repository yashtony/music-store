<?php
$server = "localhost";

$username = "root";

$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
//echo "Success connecting to the db"; how to handle cookies with php(next tuesday)

$Username = $_POST['Username'];
$Password = $_POST['Password'];


$sql = "INSERT INTO `wpl`.`login` (`Sr.no`, `Username`, `Password`) VALUES (NULL,'$Username', '$Password');";
if ($con->query($sql) === TRUE)
{
    echo "New record created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>