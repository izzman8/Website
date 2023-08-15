<?php 
require('database.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css">
<title>View Orders</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<ul>
  <li><a class="active" href="admin.php">Home</a></li>
  <li><a class="#news" href="viewpayment.php">View Resit</a></li>
</ul>

<div class="w3-container w3-black w3-padding-64 w3-xxlarge">
<div class="form">
<h2>Paid Orders</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Phone Number</strong></th><th><strong>Address</strong></th><th><strong>Services</strong></th><th><strong>Price</strong></th><th><strong>Status</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<style>
  body {
  background-image: url("adminbg.jpg");
  background-position: auto;
  background-size: 1363px 800px;
}
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #6c757d;
}  
</style>
<?php
$count=1;
$sql="Select * from booking where status = 'paid';";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center">0<?php echo $row["phone_num"]; ?></td><td align="center"><?php echo $row["address"]; ?></td><td align="center"><?php echo $row["service"]; ?></td><td align="center">RM <?php echo $row["price"]; ?></td><td align="center"><?php echo $row["status"]; ?></td><td align="center"><a href="editorder_admin.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="deleteorder.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<h2>Completed Orders</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Phone Number</strong></th><th><strong>Address</strong></th><th><strong>Services</strong></th><th><strong>Status</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sql="Select * from booking where status = 'completed';";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center">0<?php echo $row["phone_num"]; ?></td><td align="center"><?php echo $row["address"]; ?></td><td align="center"><?php echo $row["service"]; ?></td><td align="center"><?php echo $row["status"]; ?></td><td align="center"><a href="editorder_admin.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="deleteorder.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<h2>Pending Orders</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Phone Number</strong></th><th><strong>Address</strong></th><th><strong>Services</strong></th><th><strong>Status</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sql="Select * from booking where status = 'unpaid';";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center">0<?php echo $row["phone_num"]; ?></td><td align="center"><?php echo $row["address"]; ?></td><td align="center"><?php echo $row["service"]; ?></td><td align="center"><?php echo $row["status"]; ?></td><td align="center"><a href="editorder_admin.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="deleteorder.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<br /><br /><br /><br />
</div>
<div class="w3-container w3-black w3-padding-64 w3-xxlarge">
</body>
</html>