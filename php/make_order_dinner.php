<?php
session_start();
$email=$_SESSION['Email'];
include "link.php";
//capture the id variable from select.php

//super global array
$id=$_GET['id'];
$vendor_id_take="SELECT * FROM dinner where food_id='$id'";
$vendor_id_query=mysqli_query($link,$vendor_id_take);
while($row_vendor_id= mysqli_fetch_array($vendor_id_query)){
    $vendor_id=$row_vendor_id['id'];
}

//sql query for deleteing a row
$query="INSERT INTO cus_order(vendor_id,food_id,cus_email,statues,food_time) values ('$vendor_id','$id','$email','Not Served','dinner')";
$result=mysqli_query($link,$query);
if($result){
    header("location:customer.php");
}
