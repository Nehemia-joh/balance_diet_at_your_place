<?php
session_start();
$email1=$_SESSION['Email'];
include "link.php";
//pick the vendor id
$vendor_id_pick="SELECT * FROM username where Email='$email1'";
$vendor_id_pick_query=mysqli_query($link,$vendor_id_pick);
while($row_vendor_id_pick= mysqli_fetch_array($vendor_id_pick_query)){
    $vendor_id=$row_vendor_id_pick['id'];
}
$vendor_orders="SELECT * FROM cus_order where vendor_id='$vendor_id' and food_time='breakfast'";
$vendor_order_query=mysqli_query($link,$vendor_orders);
        echo "<table id=\"myTable\" align='center'>";
        echo "<input type=\"text\" id=\"searchInput\" onkeyup=\"searchTable()\" placeholder=\"Search...\">";

echo "<tr class=\"header\">
        <th>Food</th>
        <th>Customer Email</th>    
    </tr>";
      while($row_vendor_order= mysqli_fetch_array($vendor_order_query)){
        $food_id1=$row_vendor_order['food_id'];
        $vendor_name="SELECT * FROM breakfast where food_id='$food_id1'";
        $food_name_query=mysqli_query($link,$vendor_name);
        while($row_food_name= mysqli_fetch_array($food_name_query)){
        $food_name1=$row_food_name['how_it_read'];
        }
    echo "<tr>";
    echo "<td>".$food_name1."</td>";
    echo "<td>".$row_vendor_order['cus_email']."</td>";
    echo "<td><a style=\"text-decoration: none;\" href='food_order_status.php?id=".$row_vendor_order['order_id']."'>Served</a></td>";
    echo "</tr>";
}

echo"</table>";
     ?>
     <script src="../assets/js/search.js"></script>