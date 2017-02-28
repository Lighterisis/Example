<!html>
    <body>
        <h1>Product</h1>
        <form action="savep.php" method="post">
            <fieldset>
                <legend>Add Product</legend>
                    ProductGroupID:<br>
                    <input type="text" name="pg_id">
                    <br>
                    Code:<br>
                    <input type="text" name="code">
                    <br>
                    Name:<br>
                    <input type="text" name="name">
                    <br>
                    Status:<br>
                    <input type="radio" name="status" value="Active" checked> Active<br>
                    <input type="radio" name="status" value="Inactive"> Inactive<br>
                    <br>
                    <br>
                    <input type="submit" value="SAVE">
            </fieldset>
        </form>
    </body>
</html>