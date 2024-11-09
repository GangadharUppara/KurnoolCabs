<?php
$name = $_POST['name'];
$number = $_POST['number'];
$pickUpPlace = $_POST['pickUpPlace'];
$dropOfPlace = $_POST['dropOfPlace'];
$date = $_POST['date'];
$carType = $_POST['carType'];
//Connecting Database
$conn = new mysqli('localhost','root','Uppara32@','test','3307');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed....  : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into bookingdetails(name,number,pickUpPlace,dropOfPlace,date,carType) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sissss", $name, $number, $pickUpPlace, $dropOfPlace, $date, $carType);
		$execval = $stmt->execute();
		echo $execval;
    echo "<script type='text/javascript'>alert('Registration Successfull.....');window.location.href='index.html'</script> ;";
    $stmt->close();
	$conn->close();
}
?>