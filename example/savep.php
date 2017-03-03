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
  $pg_id = $_POST['pg_id'];
  $code = $_POST['code'];
  $name = $_POST['name'];
  $status = $_POST['status'];
  $sql = "SELECT * FROM p WHERE code='$code' OR name='$name'";
      $query = mysqli_query($con, $sql);

      if(mysqli_num_rows($query) != '0'){
        echo "invalid ,please insert other value"; 
?>
      <tr>
       <br><button type="button"><a href="http://localhost:81/example/addp.php">Back</a></button>
      </tr>
<?
      }else{
        // insert
        $sql = "INSERT INTO p (pg_id,code,name,status) 
              VALUES ('$pg_id','$code','$name','$status')";
        $query = mysqli_query($con, $sql);
        mysqli_close($con);
        header('Location: '.'viewproduct.php');
      }
?>

 