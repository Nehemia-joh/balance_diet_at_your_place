<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Update dinner meal</title>

    <style>
        @import url('../assets/css/a.css');
        @import url('../assets/css/dropdown.css');
        @import url('../assets/css/css.css');
        @import url('../assets/css/diet.css');
        @import url('../assets/css/signup.css');
    </style>
</head>
<?php
include "link.php";
$id=$_GET['id'];
$foods="SELECT * FROM dinner where food_id='$id'";
$foods_query=mysqli_query($link,$foods);
while($row_foods= mysqli_fetch_array($foods_query)){
    $p=$row_foods['proteins'];
    $c=$row_foods['carbohydrates'];
    $v=$row_foods['vitmins'];
    $fa=$row_foods['fats'];
    $m=$row_foods['minerals'];
    $fi=$row_foods['fiber'];
    $hir=$row_foods['how_it_read'];
    $a=$row_foods['Additional'];
    $pr=$row_foods['Price'];
}

?>
<form method="post" action="">

<div class="form-group">
    <label for="Proteins">Proteins</label>
    <input type="text" id="Proteins" class="form-control" name="Proteins" value="<?php echo $p; ?>" required/>
    </div>

    <div class="form-group">
        <label for="Carbohydrates">Carbohydrates</label>
        <input type="text" id="Carbohydrates" class="form-control" name="Carbohydrates" value="<?php echo $c; ?>" required/>
    </div>
    
    <div class="form-group">
        <label for="Vitamins">Vitamins</label>
        <input type="text" id="Vitamins" class="form-control" name="Vitamins" value="<?php echo $v; ?>" required/>
    </div>

    <div class="form-group">
        <label for="Fats">Fats</label>
        <input type="text" id="Fats" class="form-control" name="Fats" value="<?php echo $fa; ?>" />
    </div>

    
    <div class="form-group">
        <label for="Minerals">Minerals</label>
        <input type="text" id="Minerals" class="form-control" name="Minerals" value="<?php echo $m; ?>" />
    </div>

    <div class="form-group">
        <label for="Fiber">Fiber</label>
        <input type="text" id="Fiber" class="form-control" name="Fiber" value="<?php echo $fi; ?>" />
    </div>
  
    <div class="form-group">
        <label for="How_it_read">How it Appear</label>
        <input type="text" id="How_it_read" class="form-control" name="How_it_read" value="<?php echo $hir; ?>" required/>
    </div>
    <div class="form-group">
        <label for="Additional">Additional Services</label>
        <input type="text" id="Additional" class="form-control" name="Additional" value="<?php echo $a; ?>" />
    </div>
    <div class="form-group">
        <label for="Price">Price</label>
        <input type="number" id="Price" class="form-control" name="Price" value="<?php echo $pr; ?>" required/>
    </div>
     
    
        <input type="submit" class="btn btn-primary w-100" value="Update Meal" name="submit1">
</form>   


<?php
    if(isset($_POST['submit1'])){
        include "link.php";

        $pro=$_POST['Proteins'];
        $carbohydrates=$_POST['Carbohydrates'];
        $Vitamins=$_POST['Vitamins'];
        $Fats=$_POST['Fats'];
        $Minerals=$_POST['Minerals'];
        $Fiber=$_POST['Fiber'];
        $how_it_read=$_POST['How_it_read'];
        $additional=$_POST['Additional'];
        $price=$_POST['Price'];

        $query="UPDATE dinner SET proteins='$pro',carbohydrates='$carbohydrates' ,vitmins='$Vitamins',fats='$Fats',minerals='$Minerals',fiber='$Fiber',how_it_read='$how_it_read',Additional='$additional',Price='$price' WHERE food_id='$id'";
        $query1=mysqli_query($link,$query);
        if($query1){
            header("location:vendor.php");
        }
    } 