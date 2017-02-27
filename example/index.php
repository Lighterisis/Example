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
  $con = mysqli_connect("localhost","root","root","exam");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT * FROM pg";
  $result = $con->query($sql);
  
  ?>
  <body>
    <h1>Product Group</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
        <th>status</th>  
      </tr>
      <? while($row=mysqli_fetch_assoc($result)){?>
        <tr>
          <td><?=$row['id']?></td>
          <td><?=$row['code']?></td>
          <td><?=$row['name']?></td>
          <td><?=$row['status']?></td>
          <td><a href="http://localhost:81/example/editpg1.php">Edit</a></td>
        </tr>
      <?}?>
    </table>
    <a href="http://localhost:81/example/add.php">Add</a>
  </body>
</html>