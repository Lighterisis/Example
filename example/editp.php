<!html>
<?
  $id = $_GET['id'];
  $con = mysqli_connect("localhost","root","root","exam");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }  
    $sql = "SELECT * FROM p WHERE id = $id";
    $result = $con->query($sql);
?>
    <body>
    <h1>Product</h1>
        <form action="updatep.php" method="post">
            <fieldset>
                <legend>Edit Product</legend>
                    <? 
                        while($row=mysqli_fetch_assoc($result)){?>
                        PG_ID:<br>
                        <input type="text" name="pg_id" value=<?=$row['pg_id']?>>
                        <br>
                        Code:<br>
                        <input type="text" name="code" value=<?=$row['code']?>>
                        <br>
                        Name:<br>
                        <input type="text" name="name" value=<?=$row['name']?>>
                        <br>
                        Status:<br>
                        <input type="radio" name="status" value="Active" checked> Active<br>
                        <input type="radio" name="status" value="Inactive"> Inactive<br>
                        <br>
                    <?}?>
                        <br>
                        <input type="submit" value="UPDATE">
            </fieldset>
        </form>
    </body>
</html>