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
    <?
        $con = mysqli_connect("localhost","root","root","exam");

        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
            $code = $_POST['code'];
            $sql = "SELECT p.code,pp.price FROM p JOIN pp ON pp.p_id = p.id AND p.code = '$code'";
            $result = $con->query($sql);
    ?>
    
    <body>    
        <fieldset>
                <legend style="font-size:40px;"><b>Search Product</b></legend>
                    <form action="order.php" style="background-color: #f0fff0;" method="post">
                        Product Code &nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="search" name="code" size="60" placeholder="Product Code...">
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

                    <? 
                        ob_start();
                        session_start();
                            $item = 0;
                            $net = 0;
                            $discount = 10;                            
                            if(@$_POST){ 
                                $item++; 
                                for($i=0;$i<=(int)$_SESSION["intLine"];$i++){
                                    if($_SESSION["strcode"][$i] != ""){
                                        $discount = $result["price"] - ($discount * $_SESSION["strqty"]);
                                        $net = $_SESSION["strqty"] * $row['price'];
                                    }
                                }
                            }
                            ?>                         
                                <tr>
                                    <td><?=$item?></td>
                                    <td><?=$_SESSION["strcode"][$i]?></td>
                                    <td><?=$_SESSION["strqty"][$i]?></td>
                                    <td><?=$_SESSION['price']?></td>
                                    <td><?=$discount?></td>
                                    <td><?=$net?></td><br>
                                </tr>
                            
                 
                        </table>
                        
                    </form>
            </fieldset>
            <fieldset style="width:40%">
                <legend style="font-size:40px;"><b>Calculator</b></legend>
                    <form action="saveorder.php" style="background-color: #F0FFFF;" method="post">
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