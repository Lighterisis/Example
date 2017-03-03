<?for($i=0;$i<=(int)$_SESSION["intLine"];$i++){
                            while($row=mysqli_fetch_assoc($result)){
                                if($_SESSION["strcode"][$i] != ""){
                                    $sql = "SELECT * FROM p WHERE code = '".$_SESSION['$strcode'][$i]."' ";
                                    $query = mysqli_query($con, $sql); //or die(mysql_error());
                                    $total = $_SESSION["strQty"][$i] * $row["price"];
                                    $sumtotal =+ $total;
                                    $item++;
                    ?>
                            <tr>
                                <td><?=$item?></td>
                                <td><?=$_SESSION['strcode'][$i]?></td>
                                <td><?=$_SESSION['strQty'][$i]?></td>
                                <td><?=$row['price']?></td>
                                <td><?=$row['u_discount']?></td>
                                <td><?=$row['net']?></td><br>
                            </tr>
                            <?}
                        }
                    }