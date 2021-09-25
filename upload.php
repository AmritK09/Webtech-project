<?php 
$con=mysqli_connect('localhost', 'root', '','project');

$name=$_POST['name'];
$payment_method=$_POST['payment_method'];
$price=$_POST['price'];
$cust_ID=$_POST['cust_ID'];




$sql="insert into `CUSTOMER`  values ('$name','$payment_method','$price','$cust_ID')";
$rs=mysqli_query($con,$sql);


?>