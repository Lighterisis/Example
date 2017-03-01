<!html>
    <body>
    <h1>Customer</h1>
        <form action="savectm.php" method="post">
            <fieldset style="width:40%">
                <legend>Add Customer</legend>
                    Code:<br>
                    <input type="text" name="code">
                    <br>
                    Name:
                    <input type="text" name="name"> &nbsp;&nbsp;&nbsp;&nbsp;
                    
                    Surname:
                    <input type="text" name="surname">
                    <br>
                    Status:<br>
                    <input type="radio" name="status" value="Active" checked> Active
                    <input type="radio" name="status" value="Inactive"> Inactive<br>
                    <br>
                    <input type="submit" value="Add">
            </fieldset>
        </form>
    </body>
</html>