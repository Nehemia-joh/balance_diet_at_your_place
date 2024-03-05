<?php
session_start();
$email1=$_SESSION['Email'];
include "link.php";
//pick the vendor id

$cus_orders="SELECT * FROM cus_order where cus_email='$email1' and food_time='breakfast'";
$cus_order_query=mysqli_query($link,$cus_orders);
        echo "<table id=\"myTable\" align='center'>";
        echo "<input type=\"text\" id=\"searchInput\" onkeyup=\"searchTable()\" placeholder=\"Search...\">";

echo "<tr class=\"header\">
        <th>Food</th>
        <th>Customer Email</th>    
    </tr>";
      while($row_cus_order= mysqli_fetch_array($cus_order_query)){
        $food_id1=$row_cus_order['food_id'];
        $food_name="SELECT * FROM breakfast where food_id='$food_id1'";
        $food_name_query=mysqli_query($link,$food_name);
        while($row_food_name= mysqli_fetch_array($food_name_query)){
        $food_name1=$row_food_name['how_it_read'];
        echo "<tr>";
        echo "<td>".$food_name1."</td>";
        echo "<td>".$row_cus_order['statues']."</td>";
        echo "</tr>";
        }
}

echo"</table>";
     ?>
     <script src="../assets/js/search.js"></script>