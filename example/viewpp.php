<!DOCTYPE html>
<html>
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
  $con = mysqli_connect("127.0.0.1","root","root","exam");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT * FROM pp";
  $result = $con->query($sql);
  
  ?>
  <body>
    <h1>Product Pay</h1>
    <form action="addpp.php">
    <table>
      <tr>
        <th>ID</th>
        <th>ProductID</th>
        <th>Price</th>
      </tr>
          <?
              while($row=mysqli_fetch_assoc($result)){?>
            <tr>
              <td><?=$row['id']?></td>
              <td><?=$row['p_id']?></td>
              <td><?=$row['price']?></td>
              <td><button type="button"><a href="http://localhost:81/example/editpp.php?id=<?=$row['id']?>">Edit</a></button></td>
            </tr>
            <?}?>
    </table>
    <br>
        <input type="submit" value="ADD">
    </form>    
  </body>
</html>