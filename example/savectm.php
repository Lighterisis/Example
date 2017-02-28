<!DOCTYPE html>
<html>
  <?
  $con = mysqli_connect("127.1.0.0","root","root","exam");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  // insert
  $code = $_POST['code'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $status = $_POST['status'];
  $sql = "INSERT INTO ctm (code,name,surname,status) 
        VALUES ('$code','$name','$surname','$status')";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
    header('Location: '.'viewctm.php');
?>

 