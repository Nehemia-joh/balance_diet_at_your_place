<?php
session_start();
session_start();
$email=$_SESSION['Email'];
$id=$_SESSION['id'];

include "link";

$vendor_foods_present="SELECT * FROM snacks where id='$id'";
$vendor_foods_present_query=mysqli_query($link,$vendor_foods_present);
        echo "<table id=\"myTable\" align='center'>";
        echo "<input type=\"text\" id=\"searchInput\" onkeyup=\"searchTable()\" placeholder=\"Search...\">";

echo "<tr class=\"header\">
<th>Proteins</th>
<th>Carbohydrates</th>  
<th>Vitamins</th>
<th>Fats</th>
<th>Minerals</th>
<th>Fiber</th>
<th>How it reads</th>
<th>Additionals</th>
<th>Price</th>
    </tr>";
      while($row_vendor_foods_present= mysqli_fetch_array($vendor_foods_present_query)){
       
    echo "<tr>";
    echo "<td>".$row_vendor_foods_present['proteins']."</td>";
    echo "<td>".$row_vendor_foods_present['carbohydrates']."</td>";
    echo "<td>".$row_vendor_foods_present['vitmins']."</td>";
    echo "<td>".$row_vendor_foods_present['fats']."</td>";
    echo "<td>".$row_vendor_foods_present['minerals']."</td>";
    echo "<td>".$row_vendor_foods_present['fiber']."</td>";
    echo "<td>".$row_vendor_foods_present['how_it_read']."</td>";
    echo "<td>".$row_vendor_foods_present['Additional']."</td>";
    echo "<td>".$row_vendor_foods_present['Price']."</td>";
    echo "<td><a style=\"text-decoration: none;\" href='update_snacks.php?id=".$row_vendor_foods_present['food_id']."'>update Meal</a></td>";
    echo "<td><a style=\"text-decoration: none;\" href='delete_snacks.php?id=".$row_vendor_foods_present['food_id']."'>Delete snack</a></td>";
    echo "</tr>";
}

echo"</table>";
     ?>
     <script src="../assets/js/search.js"></script>