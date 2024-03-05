<head>
    <style>
@import url('../assets/css/a.css');
</style>
</head>
<?php
session_start();
include "link.php";
$id=$_SESSION['id'];

//sql query for row needed to be updated
$query="SELECT * FROM info WHERE id='$id'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
?>

<body>
    <form action="" method="post">
    Name: <input type="text" name="name" value="<?php echo $row['name'];?>"><br><br>
    Gender:(Write 1 for woman and 2 for man) <input type="number" name="gender" value="<?php echo $row['gender'];?>"><br><br>
    Age: <input type="number" name="age" value="<?php echo $row['Age'];?>"><br><br>
    
    
    <input type="submit" class="btn" value="SAVE CHANGES" name="savechanges">
</form>    
    <?php
        if(isset($_POST['savechanges'])){
            include "link.php";
            $name =$_POST['name'];        
            $gender = $_POST['gender'];
            $age = $_POST['age'];        
           
                $query1="UPDATE info SET name='$name',gender='$gender',Age='$age' WHERE id='$id'";
                
                $result2=mysqli_query($link,$query1);
                if($result2){
                    echo "<font color=green> Update Complete</font>";
                } else{
                    // echo 
                    echo mysqli_error($link);
                }

            }
                
        
    ?>


