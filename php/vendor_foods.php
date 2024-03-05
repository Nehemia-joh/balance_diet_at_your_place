<head>
    <style>
        @import url('../assets/css/vendor_foods.css');
        @import url('../assets/css/dropdown.css');
        @import url('../assets/css/css.css');
        @import url('../assets/css/diet.css');
        @import url('../assets/css/signup.css');
    </style>
</head>
<div id="myBtnContainer">
  <!-- <button class="btn active" onclick="filterSelection('all')"> Show all</button> -->
  <button class="btn" onclick="filterSelection('breakfast')"> BreakFast</button>
  <button class="btn" onclick="filterSelection('lunch')"> Lunch</button>
  <button class="btn" onclick="filterSelection('dinner')"> Dinner</button>
  <button class="btn" onclick="filterSelection('snacks')"> Snacks</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column breakfast">
    <div class="content">
      <h4>Break Fast</h4>
      <?php include "vendor_foods_breakfast.php"; ?>
    </div>
  </div>
  <div class="column lunch">
    <div class="content">
      <h4>Lunch</h4>
      <?php include "vendor_foods_lunch.php"; ?>
    </div>
  </div>
  <div class="column dinner">
    <div class="content">
      <h4>Dinner</h4>
      <?php include "vendor_foods_dinner.php"; ?>
    </div>
  </div>
  <div class="column snacks">
    <div class="content">
      <h4>Snacks</h4>
      <?php include "vendor_foods_snacks.php"; ?>
    </div>
  </div>
  

<!-- END MAIN -->
</div>

<script>
filterSelection("breakfast")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>
