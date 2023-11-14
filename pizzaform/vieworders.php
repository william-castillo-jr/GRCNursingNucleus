<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>View Orders</title>
  

</head>

<body>
<?php
require '/home/chipmunk/db.php';
$sql = "SELECT * FROM `pizza_data`";
$result = @mysqli_query($cnxn, $sql);
echo "<table> <tr> <th>Name</th> <th>Phone</th> <th>Size</th> <th>Toppings</th> <th>Price</th> <th>Comments</th> </tr>";
while ($row = mysqli_fetch_assoc($result))
{
$name = $row['Name'];
$phone = $row['Phone'];
$size = $row['Size'];
$toppings = $row['Toppings'];
$price = $row['Price'];
$comments = $row['Comments'];
echo "<tr> <td>".$name."</td> <td>".$phone."</td> <td>".$size."</td> <td>".$toppings."</td> <td>".$price."</td> <td>".$comments."</td> </tr>";
}

  


echo "</table>";

?>
</body>
</html>