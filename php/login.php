<html>
<head>
    <title>Login Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <style>
       @import url('../assets/css/a.css');
       @import url('../assets/css/signup.css');
    </style>
</head>

<body>
    <div class="container">
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow">
                <div class="card-header text-center bg-primary text-white">
                <h2>Login Form</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                 <div class="form-group">
                    <label for="username">Email</label>
                    <input type="username" id="username" class="form-control" name="Email" required/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password" required/>
                </div>
                <input type="submit" class="btn btn-primary w-100" value="Sign in" name="submit">
            </form>
            <!-- <a href="signup.php"style="text-decoration:none;"><input type="submit" class="btn btn-primary w-90" value="Sign up" ></a> -->
            </div>
            <div class="card-footer text-right">
            <small>&copy; Balance Diet <?php echo date("Y"); ?></small>
            </div>
            </div>
        </div>
    </div>

    <?php
    session_start();
    if(isset($_POST['submit'])){
        include "link.php"; //connect to database
        if(!$link){
            die('Unable to connect to database');
        }

        $Email = mysqli_real_escape_string($link, $_POST['Email']); //sanitize user input
        $password = mysqli_real_escape_string($link, $_POST['password']);

        if(empty($Email) && empty($password)){
            echo "<p style='color:red;'>Please enter your login credentials</p>";
        }else{
            $query = "SELECT * FROM username WHERE Email ='$Email' AND password = '$password'";
            $result = mysqli_query($link,$query);

            // check if user exists
            if(mysqli_num_rows($result)==1){
                $row = mysqli_fetch_array($result);
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['id']=$row['id'];
                $_SESSION['role'] = $row['role'];

                // authorization level
                switch($_SESSION['role']){
                	case '1':
                		header("location: vendor.php");
                		break;
                	case '2':
                		header("location: customer.php");
                		break;
                	default:
                		echo "<p style='color:red;'>Invalid User</p>";
                }
            }
        }
        
    }

   
 
    ?>
</body>
</html>
