<?php
session_start();
$id=$_SESSION['id'];
?>
<form method="post" action="">

<div class="form-group">
    <label for="Proteins">Proteins</label>
    <input type="text" id="Proteins" class="form-control" name="Proteins" />
    </div>

    <div class="form-group">
        <label for="Carbohydrates">Carbohydrates</label>
        <input type="text" id="Carbohydrates" class="form-control" name="Carbohydrates" />
    </div>
    
    <div class="form-group">
        <label for="Vitamins">Vitamins</label>
        <input type="text" id="Vitamins" class="form-control" name="Vitamins" />
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
        <label for="How_it_read">How it Appear</label>
        <input type="text" id="How_it_read" class="form-control" name="How_it_read" required/>
    </div>
    <div class="form-group">
        <label for="Additional">Additional Services</label>
        <input type="text" id="Additional" class="form-control" name="Additional" />
    </div>
    <div class="form-group">
        <label for="Price">Price</label>
        <input type="number" id="Price" class="form-control" name="Price" required/>
    </div>
     
    
        <input type="submit" class="btn btn-primary w-100" value="Save your snacks" name="submit2">
</form>   


<?php
    if(isset($_POST['submit2'])){
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

        $query="INSERT INTO snacks (id,proteins,carbohydrates,vitmins,fats,minerals,fiber,how_it_read,Additional,Price) VALUES ('$id','$pro','$carbohydrates','$Vitamins','$Fats','$Minerals','$Fiber','$how_it_read','$additional','$price')";
        $query1=mysqli_query($link,$query);
        if($query1){
            echo "saved";
        }
    } 