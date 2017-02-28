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
    <h1>Product Group</h1>
        <form action="updatectm.php">
            <fieldset>
                <legend>Edit Customer</legend>
                    <? while($row=mysqli_fetch_assoc($result)){?>
                    ID:<br>
                    <input type="text" name="number" value=<?=$row['id']?>>
                    <br>
                    Code:<br>
                    <input type="text" name="code" value=<?=$row['code']?>>
                    <br>
                    Name:<br>
                    <input type="text" name="name" value=<?=$row['name']?>>
                    <br>
                    Surname:<br>
                    <input type="text" name="surname" value=<?=$row['surname']?>>
                    <br>
                    Status:<br>
                    <input type="text" name="status" value=<?=$row['status']?>>
                    <br>
                    <?}?>
                    <br>
                    <input type="submit" value="UPDATE">
            </fieldset>
        </form>
    </body>
</html>