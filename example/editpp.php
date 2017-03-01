<!html>
<?
    $id = $_GET['id'];
  $con = mysqli_connect("127.1.0.0","root","root","exam");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "SELECT * FROM pp WHERE id = $id";
  $result = $con->query($sql);
?>

    <body>
        <h1>Edit Product Price</h1>
        <form action="updatepp.php" method="post">
            <fieldset style="width:20%">
                <legend>Edit Product Pricce</legend>
                    <? while($row=mysqli_fetch_assoc($result)){?>
                        ProductID:<br>
                            <input type="hidden" name="id" value="<?=$id?>">
                            <select name="p_id">
                                <?
                                $sql = "SELECT * FROM p";
                                $listp = $con->query($sql);

                                while($rowp=mysqli_fetch_assoc($listp)){ 
                                        $text = "<option value=".$rowp['id'];
                                            if ($row['p_id'] == $rowp['id']) {
                                                $text = $text." selected";
                                            }
                                            $text = $text.">".$rowp['id']."</option>";
                                            echo $text;
                                }
                                ?>
                            </select>
                        <br>
                        Price:<br>
                            <input type="text" name="price" value="<?=$row['price']?>">
                        <br>
                    <?}?>  
                        <br>
                            <input type="submit" value="UPDATE">
            </fieldset>
        </form>
    </body>
</html>