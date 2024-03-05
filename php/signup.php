<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
      @import url('../assets/css/a.css');
        @import url('../assets/css/signup.css');
        @import url('../assets/css/snackbar.css');
    </style>
</head>
<body>
  <?php
  include 'link.php';

  ?>
<div class="container">
  <form action="" method="post">
    <label for="usrname">Email</label>
    <input type="email" id="usrname" name="Email" required>
    <?php 
    ?>
    <label for="location">Location</label>
    <input type="" id="usrname" name="location" required>
    <label for="sign_up_as">Sign up As</label>
    <select id="sign_up_as" name="sign_up_as" required>
    <option> Choose how to sign up as</option>
    <option value="1">Vendor</option>
    <option value="2">Customer</option>
    </select></br>
    

    <label for="psw">Password</label>
  <input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

    <input type="submit" class="btn" value="Submit" name="submit" >
  </form>
  <small>&copy; Balance Diet <?php echo date("Y"); ?></small>
</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>  
<?php 
if(isset($_POST['submit'])){
include 'link.php';
      $Email = $_POST['Email'];
      $password = $_POST['password'];
      $role = $_POST['sign_up_as'];
      $location=$_POST['location'];

      $email_validate="SELECT * FROM username";
      $email_validate_query=mysqli_query($link,$email_validate);
        while($row_email_validate= mysqli_fetch_array($email_validate_query)){
          $email_validate1=$row_email_validate['Email'];
        }
  if($Email==$email_validate1){
    //  echo " <div id=\"snackbar\" alert=(\"yuuuuy\") >Email already in use..</div> ";
    echo "<p style='color:red;'>Email already in use</p>";
    }
    else{
// Insert the student record into the database
$signup = "INSERT INTO username (Email,password,location,role) VALUES ('$Email','$password','$location','$role')";
$query=mysqli_query($link,$signup);
if($query){
  header("location: login.php");
 
}
  else{
    echo "<p style='color:red;'>Sign up Failed</p>"; 
  }
    }
      }
      $add_to_info="SELECT * FROM username WHERE Email='$Email'";
      $result=mysqli_query($link,$add_to_info);
      $row=mysqli_fetch_array($result);
      $id=$row['id'];
      $add_to_info1="INSERT INTO info (id) VALUES ('$id')";
      $query1=mysqli_query($link,$add_to_info1);
?>

</body>
</html>
<!-- <script src="../assets/js/snackbar.js"></script> -->
<script src="../assets/js/signup.js"></script>
