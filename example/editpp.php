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
        <h1>Edit Product Pay</h1>
        <form action="updatepp.php" method="post">
            <fieldset>
                <legend>Edit Product Pay</legend>
                    <? while($row=mysqli_fetch_assoc($result)){?>
                        ProductID:<br>
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="text" name="p_id" value="<?=$row['p_id']?>">
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