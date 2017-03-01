<!DOCTYPE html>
<html>
  <?
  $con = mysqli_connect("127.1.0.0","root","root","exam");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  // update
  $id = $_POST['id'];
  $code = $_POST['code'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $status = $_POST['status'];
  $sql = "UPDATE ctm SET code = '$code',name = '$name',surname = '$surname',status = '$status' 
          WHERE id = '$id'";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
    header('Location: '.'viewctm.php');
?>

 