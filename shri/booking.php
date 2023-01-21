<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<button><a href="booking.html"> back</a></button>
<?php
      $server="localhost";
      $username="root";
      $password="Shrish@2004";

      $con=mysqli_connect($server,$username,$password);
      if(!$con)
      {
        die("connection to this database failed due to " .mysqli_connect_error());
      }
      
      $name=$_POST['name'] ;
      $Audience=$_POST['Audience'];
      $Place=$_POST['Place'];
      $Event=$_POST['Event'];
      $email=$_POST['email'];
      $Contact=$_POST['Contact'];
      $sql="INSERT INTO `shri_web`.`book` (`name`, `contact`, `date`, `place`, `event`, `email`, `audience`) VALUES ('$name', '$Contact', current_timestamp(), '$Place', '$Event', '$email', '$Audience');";
      // echo $sql;
      if($con->query($sql)==true)
      {
        echo "success";
      }
      else 
      {
        echo "failure";
      }

      $con->close();

?>
</body>
</html>
