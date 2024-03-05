<head>
  <?php session_start();
  $email=$_SESSION['Email'];
  $id=$_SESSION['id'];
  include 'link.php';
//customer location
$customer_loc="SELECT * FROM username where Email='$email'";

$cus_loc_query=mysqli_query($link,$customer_loc);
// mysqli_num_rows($cus_loc_query)==1;
while($row = mysqli_fetch_array($cus_loc_query)){
// $_SESSION['location']=$row['location'];
$cus_loc=$row['location'];
}

//vender location
$vendor_loc="SELECT * FROM username where location='$cus_loc' and role=1";

$vendor_loc_query=mysqli_query($link,$vendor_loc);
while($row_vendor = mysqli_fetch_array($vendor_loc_query)){
  $vendor_id=$row_vendor['id'];
}
//vendor foods



  ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Menu</title>

    <style>
        @import url('../assets/css/dropdown.css');
        @import url('../assets/css/css.css');
        @import url('../assets/css/diet.css');
        @import url('../assets/css/signup.css');
    </style>
</head>
<body>
<div id="mySidenav" class="tab sidenav " target="main">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="dropdown-btn">Personal infos
        <i class="fa fa-caret-down"></i>
    </a>
      <div class="dropdown-container">
        <a onclick="openTab(event, 'personal_info')">Personal infomation</a>
       
      </div>
    <a onclick="openTab(event, 'areas_around')">Areas Around</a>
    <a onclick="openTab(event, 'Orders_made')">My orders</a>
   
    
    <!-- <a>.....</a>
    <a href="#">About us</a>  -->
    <a href="logout.php">Logout</a> 
  </div>
  
  <!-- Use any element to open the sidenav -->
  <span onclick="openNav()">&#9776;</span>
  
  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
  <div  id="main" >
  <header>
    <?php
  $u_name="SELECT * FROM info where id='$id'";
      $u_name_query=mysqli_query($link,$u_name);
      while($row_u_name=mysqli_fetch_array($u_name_query)){
        $u_name1=$row_u_name['name'];
      }
      ?>
    <H1>
    <?php echo $u_name1; ?>
    </H1>
</header>
    <div id="areas_around" class="tabcontent">
    <button class="button accordion"><span>Near areas for breakfast</span></button>
        <div class="panel"> 
          <?php include "near_places_breakfast.php"; ?>
        </div>            
        <button class="button accordion"><span>Near areas for lunch</span></button>
        <div class="panel"> 
          <?php include "near_places.php"; ?>
        </div>
        <button class="button accordion"><span>Near areas for dinner</span></button>
        <div class="panel"> 
          <?php include "near_places_dinner.php"; ?>
        </div> 
        <button class="button accordion"><span>Near areas for snacks</span></button>
        <div class="panel"> 
          <?php include "near_places_snacks.php"; ?>
        </div>            
  </div>
  <div id="Orders_made" class="tabcontent">
  <button class="button accordion"><span>Orders Made for break fast</span></button>
        <div class="panel"> 
          <?php include "customer_orders_breakfast.php"; ?>
        </div>
        <button class="button accordion"><span>Orders Made for lunch</span></button>
        <div class="panel"> 
          <?php include "customer_orders.php"; ?>
        </div>
        <button class="button accordion"><span>Orders Made for dinner</span></button>
        <div class="panel"> 
          <?php include "customer_orders_dinner.php"; ?>
        </div>
        <button class="button accordion"><span>Orders Made for snacks</span></button>
        <div class="panel"> 
          <?php include "customer_orders_snacks.php"; ?>
        </div>       
  </div>
  <div id="personal_info" class="tabcontent">
    <button class="button accordion"><span>Personal information</span></button>
    <div class="panel"> Email:<?php echo $_SESSION['Email']; ?>
    <div><?php 
    include "change_loc_cus.php";?></div>
  </div>
    <button class="button accordion"><span>Update personal info</span></button>
    <div class="panel">
      <?php 
      include "add_info.php";
      ?>
</div>
  </div>
</div>
<small>&copy; Balance Diet <?php echo date("Y"); ?></small>
</body>
<script src="../assets/js/ls.js">

</script>
