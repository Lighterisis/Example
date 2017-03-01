<!html>
<?
    $id = $_GET['id'];
  $con = mysqli_connect("127.1.0.0","root","root","exam");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "SELECT * FROM pg WHERE id = $id";
  $result = $con->query($sql);
?>

    <body>
        <h1>Edit Product Group</h1>
        <form action="update.php" method="post">
            <fieldset style="width:20%">
                <legend>Edit Product Group</legend>
                    <? while($row=mysqli_fetch_assoc($result)){?>
                        Code:<br>
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="text" name="code" value="<?=$row['code']?>">
                        <br>
                        Name:<br>
                            <input type="text" name="name" value="<?=$row['name']?>">
                        <br>
                        Status:<br>    
                        <input type="radio" name="status" value="Active" <?=$row["status"] == 'Active'  ? 'checked' : ''; ?>> Active
                        <input type="radio" name="status" value="Inactive" <?=$row["status"] == 'Inactive'  ? 'checked' : ''; ?>> Inactive<br> 
                    <?}?>  
                        <br>
                            <input type="submit" value="UPDATE">
            </fieldset>
        </form>
    </body>
</html>