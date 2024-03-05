<?php 
session_start();
$email=$_SESSION['Email'];
$cus_loc="SELECT * FROM username where Email='$email'";
$cus_loc_query=mysqli_query($link,$cus_loc);
while($row_cus_loc= mysqli_fetch_array($cus_loc_query)){$cus_loc1=$row_cus_loc['location'];}
//vendor loc
$vendor_loc="SELECT * FROM username where location='$cus_loc1' and role=1";
$vendor_loc_query=mysqli_query($link,$vendor_loc);
echo "<input type=\"text\" id=\"searchInput\" onkeyup=\"searchTable()\" placeholder=\"Search...\">";
echo "<table id=\"myTable\" align='center'>";
  
echo "<tr class=\"header\">
        <th>Food</th>
        <th>Price</th>  
    </tr>";

while($row_vendor_loc= mysqli_fetch_array($vendor_loc_query)){$vendor_id=$row_vendor_loc['id'];
  
  $vendor_foods="SELECT * FROM dinner where id='$vendor_id'";
  $vendor_foods_query=mysqli_query($link,$vendor_foods);

        while($row_vendor_foods= mysqli_fetch_array($vendor_foods_query)){
          $vendor_google_loc="SELECT * FROM username where id='$vendor_id'";
            $vendor_google_loc_query=mysqli_query($link,$vendor_google_loc);
            while($row_vendor_google= mysqli_fetch_array($vendor_google_loc_query)){
                $google_link=$row_vendor_google['google_map_link'];
      echo "<tr>";
      echo "<td>".$row_vendor_foods['how_it_read']."</td>";
      echo "<td>".$row_vendor_foods['Price']." also " .$row_vendor_foods['Additional']."</td>";
      echo "<td><a style=\"text-decoration: none;\" href=".$google_link."  rel=\"external\"><img src=\"../assets/svg/location-arrow.svg\" height=\"15\" width=\"15\"> Click here for google map location</a><td>";
      echo "<td><a style=\"text-decoration: none;\" href='make_order_dinner.php?id=".$row_vendor_foods['food_id']."'>Make order</a></td>";
      echo "</tr>";
  }  
}
}
echo"</table>";

?>
     <script src="../assets/js/search.js"></script>