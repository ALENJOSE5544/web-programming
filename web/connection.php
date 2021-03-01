<?php 
$servername = "localhost";
$username = "20mca008";
$password = "2328";
$conn = mysqli_connect($servername,$username,$password);
if($conn)
  {
    echo "connection successfully";
}
mysqli_close($conn);
?>