<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
                padding: 5px;
                text-align: left;
            }
            table#t01 {
                width: 100%;    
                background-color: #f0fff0;
            }
        </style>
    </head>
    <body>
        
        <fieldset>
                <legend style="font-size:40px;"><b>Search Product</b></legend>
                    <form action="saveorder.php" style="background-color: #f0fff0;">
                        Product Code &nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="search" name="psearch" size="60" placeholder="Product Code...">
                        <input type="submit" value="Get!!">
                        <table style="width:100%">
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>U/Price</th>
                                <th>U/Discount</th>
                                <th>Net</th>
                            </tr>
                        </table>
                    </form>
            </fieldset>
            <fieldset style="width:40%">
                <legend style="font-size:40px;"><b>Calculator</b></legend>
                    <form action="saveorder.php" style="background-color: #F0FFFF;">
                        Total   : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="total" size="40"><br>
                        PayAmount   : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="pay"size="40"><br>
                        Change   : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="change"size="40"><br>
                        Customer : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="name,surname">
                        <option style="color:#BEBEBE">---Select Customer---</option> 
                        <?
                            $con = mysqli_connect("localhost","root","root","exam");

                            // Check connection
                            if (mysqli_connect_errno())
                            {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }  
                            $sql = "SELECT * FROM ctm";
                            $result = $con->query($sql);

                            while($row=mysqli_fetch_assoc($result)){ ?>
                                    <option value="<?=$row['name']?>,<?=$row['surname']?>" >
                                    <?=$row['name']?>&nbsp;<?=$row['surname']?></option>
                            <?}
                        ?>
                        </select><br>
                        <br><input type="submit" value="Save Order">
                    </form>
            </fieldset>
            <button type="button"><a href="http://localhost:81/example/index.php">product group</a></button>
            <button type="button"><a href="http://localhost:81/example/viewproduct.php">product</a></button>
            <button type="button"><a href="http://localhost:81/example/viewpp.php">product pay</a></button>
            <button type="button"><a href="http://localhost:81/example/viewctm.php">customer</a></button>  
    </body>
</html>