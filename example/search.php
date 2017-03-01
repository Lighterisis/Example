<!DOCTYPE html>
<html>
<?
  $con = mysqli_connect("localhost","root","root","exam");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT * FROM p WHERE code = '$_POST['code']'";
  $result = $con->query($sql);
  
?>
    <body>

    </body>
</html>