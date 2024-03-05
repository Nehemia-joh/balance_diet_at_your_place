<head>
    <style>
@import url('../assets/css/a.css');
</style>
</head>
<?php
session_start();
$id=$_SESSION['id'];
?>
<form method="post" action="">

<div class="form-group">
    <label for="Proteins">Proteins</label><p style="color:red;">*</p>
    <input type="text" id="Proteins" class="form-control" name="Proteins" required/>
    </div>

    <div class="form-group">
        <label for="Carbohydrates">Carbohydrates</label><p style="color:red;">*</p>
        <input type="text" id="Carbohydrates" class="form-control" name="Carbohydrates" required/>
    </div>
    
    <div class="form-group">
        <label for="Vitamins">Vitamins</label><p style="color:red;">*</p>
        <input type="text" id="Vitamins" class="form-control" name="Vitamins" required/>
    </div>

    <div class="form-group">
        <label for="Fats">Fats</label>
        <input type="text" id="Fats" class="form-control" name="Fats" />
    </div>

    
    <div class="form-group">
        <label for="Minerals">Minerals</label>
        <input type="text" id="Minerals" class="form-control" name="Minerals" />
    </div>

    <div class="form-group">
        <label for="Fiber">Fiber</label>
        <input type="text" id="Fiber" class="form-control" name="Fiber" />
    </div>
  
    <div class="form-group">
        <label for="How_it_read">How it Appear</label><p style="color:red;">*</p>
        <input type="text" id="How_it_read" class="form-control" name="How_it_read" required/>
    </div>
    <div class="form-group">
        <label for="Additional">Additional Services</label>
        <input type="text" id="Additional" class="form-control" name="Additional" />
    </div>
    <div class="form-group">
        <label for="Price">Price</label><p style="color:red;">*</p>
        <input type="number" id="Price" class="form-control" name="Price" required/>
    </div>
     
    
        <input type="submit" class="btn btn-primary w-100" value="Save food" name="submit3">
</form>   


<?php
    if(isset($_POST['submit3'])){
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

        $query="INSERT INTO breakfast (id,proteins,carbohydrates,vitmins,fats,minerals,fiber,how_it_read,Additional,Price) VALUES ('$id','$pro','$carbohydrates','$Vitamins','$Fats','$Minerals','$Fiber','$how_it_read','$additional','$price')";
        $query1=mysqli_query($link,$query);
        if($query1){
            echo "saved";
        }
    } 