<!html>
    <body>
        <h1>Product</h1>
        <form action="savep.php" method="post">
            <fieldset style="width:20%">
                <legend>Add Product</legend>
                    ProductGroupID:<br>
                        <select name="pg_id">
                        <?
                            $con = mysqli_connect("localhost","root","root","exam");

                            // Check connection
                            if (mysqli_connect_errno())
                            {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }  
                            $sql = "SELECT * FROM pg";
                            $result = $con->query($sql);

                            while($row=mysqli_fetch_assoc($result)){ ?>
                                    <option value=<?=$row['id']?>><?=$row['id']?></option>
                            <?}
                        ?>
                        </select>
                    <br>
                    Code:<br>
                    <input type="text" name="code">
                    <br>
                    Name:<br>
                    <input type="text" name="name">
                    <br>
                    Status:<br>
                    <input type="radio" name="status" value="Active" checked> Active
                    <input type="radio" name="status" value="Inactive"> Inactive<br>
                    <br>
                    <input type="submit" value="ADD">
            </fieldset>
        </form>
    </body>
</html>