<!html>
<?
    $id = $_GET['id'];
  $con = mysqli_connect("localhost","root","root","exam");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }  
   $sql = "SELECT * FROM ctm WHERE id = $id";
  $result = $con->query($sql);
?>
    <body>
    <h1>Customer</h1>
        <form action="updatectm.php" method="post">
            <fieldset style="width:40%">
                <legend>Edit Customer</legend>
                    <? while($row=mysqli_fetch_assoc($result)){?>
                    Code:<br>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="text" name="code" value=<?=$row['code']?>>
                    <br>
                    Name:
                    <input type="text" name="name" value=<?=$row['name']?>>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Surname:
                    <input type="text" name="surname" value=<?=$row['surname']?>>
                    <br>
                    Status:<br>
                    <input type="radio" name="status" value="Active"<?=$row['status']=='Active'  ? "checked": " "?>> Active
                    <input type="radio" name="status" value="Inactive"<?=$row['status']=='Inactive'  ? "checked": " "?>> Inactive<br>
                    <?}?>
                    <br><input type="submit" value="UPDATE">
            </fieldset>
        </form>
    </body>
</html>