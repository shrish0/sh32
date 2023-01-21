<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="contact.html"> back</a></button>
<?php
      $server="localhost";
      $username="root";
      $password="Shrish@2004";

      $con=mysqli_connect($server,$username,$password);
      if(!$con)
      {
        die("connection to this database failed due to " .mysqli_connect_error());
      }
      
      $username=$_POST['username'] ;
      $description=$_POST['description'];
      $email=$_POST['email'];
      $sql="INSERT INTO `shri_web`.`contact` (`username`, `description`, `email`) VALUES ('$username', '$description', '$email');
      ";
    //   echo $sql;
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
