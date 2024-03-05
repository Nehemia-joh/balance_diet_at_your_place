<head>
  <?php
session_start();
$email=$_SESSION['Email'];
$id=$_SESSION['id'];

include 'link.php';
$fetch_id="select id from username where Email='$email'";
$query_id=mysqli_query($link,$fetch_id);
mysqli_num_rows($query_id)==1;
$row = mysqli_fetch_array($query_id);
$_SESSION['id']=$row['id'];

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
        <a onclick="openTab(event, 'foods_provide')">Foods provided</a>
       
      </div>
    <a onclick="openTab(event, 'Food_times')">Food Times</a>
    <a onclick="openTab(event, 'order_placed')">Orders</a>
    <a href="logout.php">Logout</a> 
  </div>
  
  <!-- Use any element to open the sidenav -->
  <span onclick="openNav()">&#9776;</span>
  
  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
  <div  id="main" >
  <header>
    <H1>
      <?php
      $b_name="SELECT * FROM username where id='$id'";
      $b_name_query=mysqli_query($link,$b_name);
      while($row_b_name=mysqli_fetch_array($b_name_query)){
        $b_name1=$row_b_name['b_name'];
      }
      $u_name="SELECT * FROM info where id='$id'";
      $u_name_query=mysqli_query($link,$u_name);
      while($row_u_name=mysqli_fetch_array($u_name_query)){
        $u_name1=$row_u_name['name'];
      }
      ?>
        Welcome <?php echo $u_name1 ?> From <?php echo $b_name1 ?>
    </H1>
</header>
    <div id="Food_times" class="tabcontent">
        <button class="button accordion"><span>Break Fast</span></button>
        <div class="panel">
          <?php include 'breakfast_form.php'; ?>
        </div>
        <button class="button accordion"><span>Lunch </span></button>
        <div class="panel"><?php include 'food_form_lunch.php'; ?></div>
        <button class="button accordion"><span>Dinner </span></button>
        <div class="panel"><?php include 'food_form_dinner.php'; ?></div>
        <button class="button accordion"><span>Snacks </span></button>
        <div class="panel"><?php include 'snacks_form.php'; ?></div>
     
  </div>
  <div id="order_placed" class="tabcontent">
  <button class="button accordion"><span>Order Placed for break fast</span></button>
    <div class="panel"> <?php include "received_orders_breakfast.php"; ?> </div>
    <button class="button accordion"><span>Order Placed for lunch</span></button>
    <div class="panel"> <?php include "received_orders.php"; ?> </div>
    <button class="button accordion"><span>Order Placed for dinner</span></button>
    <div class="panel"> <?php include "received_orders_dinner.php"; ?> </div>
    <button class="button accordion"><span>Order Placed for snacks</span></button>
    <div class="panel"> <?php include "received_orders_snacks.php"; ?> </div>
    <button class="button accordion"><span>Order ready served</span></button>
    <div class="panel"> <?php include "served_orders.php"; ?> </div>
  </div> 
  <div id="personal_info" class="tabcontent">
    <button class="button accordion"><span>Personal information</span></button>
    <div class="panel"> <?php echo $_SESSION['Email']; ?>
    <div><?php include "change_loc.php"; ?></div>
    <div><?php include "bussiness_name.php"; ?></div>
  </div>
    <button class="button accordion"><span>Update personal info</span></button>
    <div class="panel"><?php include "add_info.php"; ?></div>
  </div>
  <div id="foods_provide" class="tabcontent">
    <button class="button accordion"><span>Foods Provide</span></button>
    <div class="panel"> <?php include "vendor_foods.php"; ?> </div>
  </div>
  </div>
  <small>&copy; Balance Diet <?php echo date("Y"); ?></small>
</body>
<script src="../assets/js/ls.js">

</script>
