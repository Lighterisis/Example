<!html>
    <body>
    <h1>Customer</h1>
        <form action="savectm.php" method="post">
            <fieldset>
                <legend>Add Customer</legend>
                    Code:<br>
                    <input type="text" name="code">
                    <br>
                    Name:<br>
                    <input type="text" name="name">
                    <br>
                    Surname:<br>
                    <input type="text" name="surname">
                    <br>
                    Status:<br>
                    <input type="radio" name="status" value="Active" checked> Active<br>
                    <input type="radio" name="status" value="Inactive"> Inactive<br>
                    <br>
                    <br>
                    <input type="submit" value="Add">
            </fieldset>
        </form>
    </body>
</html>