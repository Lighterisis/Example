<!html>
    <body>
    <h1>Product Pay</h1>
        <form action="savepp.php" method="post">
            <fieldset style="width:20%">
                <legend>Add Product Price</legend>
                    ProductID:<br>
                    <select name="p_id">
                        <?
                            $con = mysqli_connect("localhost","root","root","exam");

                            // Check connection
                            if (mysqli_connect_errno())
                            {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }  
                            $sql = "SELECT * FROM p";
                            $result = $con->query($sql);

                            while($row=mysqli_fetch_assoc($result)){ ?>
                                    <option value=<?=$row['id']?>><?=$row['id']?></option>
                            <?}
                        ?>
                        </select>
                    <br>
                    Price:<br>
                    <input type="text" name="price">
                    <br>
                    <br>
                    <input type="submit" value="SAVE">
            </fieldset>
        </form>
    </body>
</html>