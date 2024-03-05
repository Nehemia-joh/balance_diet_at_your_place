<head>
    <style>
@import url('../assets/css/a.css');
</style>
</head>
<?php
session_start();
  $email=$_SESSION['Email'];
  $id=$_SESSION['id'];
  
// Your database connection code
$servername = "127.0.0.1";
$username = "root";
$password = "chance00";
$dbname = "balance_diet";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch data from the database
function fetchDataFromDatabase() {
    global $conn;
    global $email;
    
    $sql = "SELECT * FROM username where Email='$email'";
    $result = $conn->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data['location'] = $row['location'];
            $data['Map link'] = $row['google_map_link'];
            // echo $row["id"];
           

        }
    }

    return $data;
}

// AJAX endpoint to fetch data
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["action"]) && $_GET["action"] === "fetchData") {
    header('Content-Type: application/xml');
    echo json_encode(fetchDataFromDatabase());
    exit;
}

// fetchDataFromDatabase();
?>



<div id="dataContainer"></div>

<script>
function fetchData() {
    // AJAX request to fetch data from the server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Update the interface with the fetched data
            var dataContainer = document.getElementById("dataContainer");
            dbParam = JSON.stringify(dataContainer);
            dataContainer.innerHTML = JSON.stringify(JSON.parse(this.responseText));
        }
    };
    xhr.open("GET", "change_loc.php?action=fetchData", true);
    xhr.send();
}

// Periodically fetch data every 5 seconds (adjust as needed)
setInterval(fetchData, 5000);

// Initial fetch
fetchData();
</script>
<?php
$loc="SELECT * FROM username where Email='$email'";
$loc_query=mysqli_query($link,$loc);
while($row_loc= mysqli_fetch_array($loc_query))
{$location=$row_loc['location'];
    $map_link=$row_loc['google_map_link'];
    $buss_name=$row_loc['b_name'];
}

?>
<form method="post">
    <input type="text" name="location" value="<?php echo $location; ?>" >
    <a style="text-decoration: none; color:black;" href="https://maps.app.goo.gl/"><img src="../assets/svg/location-arrow.svg" height="15" width="15"> Find your exact google map location</a><br>
    Add a link of google map for your location: <input type="text" name="google_loc" value="<?php echo $map_link; ?>" ><br><br>
    Add bussiness name: <input type="text" name="buss_name" value="<?php echo $buss_name; ?>" ><br><br>
    change location and press the button below<br><br>
    <input type="submit" class="btn" name="saveloc" value="change location">
</form>
<?php 
if(isset($_POST['saveloc'])){
    include "link.php";
    $location =$_POST['location'];
    $google_map_loc = $_POST['google_loc']; 
    $buss_name01=$_POST['buss_name'];       
    $query1="UPDATE username SET location='$location',google_map_link='$google_map_loc',b_name='$buss_name01' WHERE id='$id'";
    $result2=mysqli_query($link,$query1);
}
?>
