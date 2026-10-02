<?php
error_reporting(0); // hide warnings

include('session_m.php');

if (!isset($login_session)) {
    header("Location: managerlogin.php");
    exit();
}

$query = "SELECT * FROM orders ORDER BY order_ID";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Your Food Order List</title>

<style>
table{
    width:100%;
    border-collapse: collapse;
}

th,td{
    padding:10px;
    border-bottom:1px solid #ddd;
    text-align:center;
}

th{
    background:#f2f2f2;
}
</style>

</head>

<body>

<h2 style="text-align:center;">YOUR FOOD ORDER LIST</h2>

<table>

<tr>
<th>Order ID</th>
<th>Food ID</th>
<th>Order Date</th>
<th>Food Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Customer</th>
</tr>

<?php

if($result && mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){
?>

<tr>
<td><?php echo isset($row['order_ID']) ? $row['order_ID'] : ''; ?></td>
<td><?php echo isset($row['food_ID']) ? $row['food_ID'] : ''; ?></td>
<td><?php echo isset($row['order_date']) ? $row['order_date'] : ''; ?></td>
<td><?php echo isset($row['foodname']) ? $row['foodname'] : ''; ?></td>
<td><?php echo isset($row['price']) ? $row['price'] : ''; ?></td>
<td><?php echo isset($row['quantity']) ? $row['quantity'] : ''; ?></td>
<td><?php echo isset($row['username']) ? $row['username'] : ''; ?></td>
</tr>

<?php
}
}
?>

</table>

</body>
</html>