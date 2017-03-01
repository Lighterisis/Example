<!html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

        tr:nth-child(even) {
            background-color: #dddddd;
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

  $sql = "SELECT * FROM p";
  $result = $con->query($sql);
  
?>
<body>
  <h1>Product</h1>
  <form action="addp.php">
    <table>
         <tr>
            <th>ID</th>
            <th>ProductGroupID</th>
            <th>Code</th>
            <th>Name</th>
            <th>status</th>  
         </tr>
        <? 
        while($row=mysqli_fetch_assoc($result)){?>
        <tr>
          <td><?=$row['id']?></td>
          <td><?=$row['pg_id']?></td>
          <td><?=$row['code']?></td>
          <td><?=$row['name']?></td>
          <td><?=$row['status']?></td>          
          <td><button type="button"><a href="http://localhost:81/example/editp.php?id=<?=$row['id']?>">Edit</a></button></td>          
        </tr>
      <?}?>
    </table>
      <br>
        <input type="submit" value="ADD">
        <button type="button"><a href="http://localhost:81/example/index.php">product group</a></button>
        <button type="button"><a href="http://localhost:81/example/viewpp.php">product pay</a></button>
        <button type="button"><a href="http://localhost:81/example/viewctm.php">customer</a></button>
        <button type="button"><a href="http://localhost:81/example/viewpsearch.php">search product</a></button>
        
    </form>
</body>

</html>