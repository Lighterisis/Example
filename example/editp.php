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
            <fieldset style="width:20%">
                <legend>Edit Product</legend>
                    <? 
                        while($row=mysqli_fetch_assoc($result)){?>
                        PG_ID:<br>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <select name="pg_id">
                                <?
                                $sql = "SELECT * FROM pg";
                                $listpg = $con->query($sql);

                                while($rowpg=mysqli_fetch_assoc($listpg)){ 
                                        $text = "<option value=".$rowpg['id']; 
                                            if ($row['pg_id'] == $rowpg['id']) {
                                                $text = $text." selected";
                                            }
                                            $text = $text.">".$rowpg['id']."</option>";
                                            echo $text;
                                }
                        ?>
                        </select>
                        <br>
                        Code:<br>
                        <input type="text" name="code" value="<?=$row['code']?>">
                        <br>
                        Name:<br>
                        <input type="text" name="name" value="<?=$row['name']?>">
                        <br>
                        Status:<br>
                        <input type="radio" name="status" value="Active"<?=$row['status']=='Active'  ? "checked": " "?>> Active
                        <input type="radio" name="status" value="Inactive"<?=$row['status']=='Inactive'  ? "checked": " "?>> Inactive<br>
                        <br>
                    <?}?>
                        <input type="submit" value="UPDATE">
            </fieldset>
        </form>
    </body>
</html>