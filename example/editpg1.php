<!html>
<?
  $con = mysqli_connect("localhost","root","root","exam");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT * FROM pg WHERE id=1";
  $result = $con->query($sql);
  
  ?>
    <body>
        <h1>Product Group</h1>
        <form action="/action_page.php">
            <fieldset>
                <legend>Edit Product Group</legend>
                    <? while($row=mysqli_fetch_assoc($result)){?>
                        ID:<br>
                        <input type="text" name="number" <?=$row['id']?>>
                        <br>
                        Code:<br>
                        <input type="text" name="code" value=<?=$row['code']?>>
                        <br>
                        Name:<br>
                        <input type="text" name="name" value=<?=$row['name']?>>
                        <br>
                        Status:<br>
                        <input type="text" name="status" value=<?=$row['status']?>>
                        <br>
                    <?}?>  
                        <br>
                        <input type="submit" value="save">
            </fieldset>
        </form>
    </body>
</html>