<?php 

  require 'config/dbc.php';

  $fullname = $_POST['fullname'];
  $city = $_POST['city'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $status = 'DEACTIVE';


  mysqli_query($connection, "INSERT INTO member(fullname, city, email, password)
               VALUES('$fullname', '$city', '$email', '$password')") or die(mysqli_error($connection));

  header("Location:member.php");



 ?>