<?php

include "link.php";
//capture the id variable from select.php

//super global array
$id=$_GET['id'];
//sql query for deleteing a row
$query="DELETE from breakfast WHERE food_id = '$id'";
$result=mysqli_query($link,$query);
if($result){
    header("location:vendor.php");
}
