<!html>
    <body>
    <h1>Product Group</h1>
        <form action="save.php" method="post">
            <fieldset>
                <legend>Add Product Group</legend>
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