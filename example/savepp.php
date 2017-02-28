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
  $p_id = $_POST['p_id'];
  $price = $_POST['price'];
  $sql = "INSERT INTO pp (productid,price) 
        VALUES ('$p_id','$price')";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
    header('Location: '.'viewpp.php');
?>

 