<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookingDetailsList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
      <nav class="navbar  sticky-top navbar-light bg-info" >
        <div class="container-fluid" >
          <div style="padding-left: 5%;"><h1 style="color:white;">KurnoolCabs</h1></div>
          <div style="padding-right: 10%; "><a class="link-offset-2 link-underline link-underline-opacity-0 " style="color: white;" href="index.html">Home</a></div>
        </div>
      </nav>

    <div class="container col-12 col-lg-12 pt-5">
    <div class="mx-auto p-2" style="width: 400px;">
    <h2>Car Booking Customers</h2>
    </div>
<table class="table table-striped col-12 col-lg-12 ">
  <thead> 
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Pick Up Place</th>
      <th scope="col">Drop-Off Place</th>
      <th scope="col">Date</th>
      <th scope="col">Car Type</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $conn = new mysqli('localhost','root','Uppara32@','test','3307');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT *FROM bookingdetails"; 
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>        
    <tr>
      <td><?php echo $row['id']; ?> </td>
      <td><?php echo $row['name']; ?> </td>
      <td><?php echo $row['number']; ?> </td>
      <td><?php echo $row['pickUpPlace']; ?> </td>
      <td><?php echo $row['dropOfPlace']; ?> </td>
      <td><?php echo $row['date']; ?> </td>
      <td><?php echo $row['carType']; ?> </td>
    </tr>
   <?php 
   }
      } else {
        echo "0 results";
         }
         $conn->close();
        ?>
  </tbody>
</table>
</div>
</body>
</html>