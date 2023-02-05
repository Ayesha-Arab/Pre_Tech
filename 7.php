
 <?php   
    if(isset($_POST['name']))
    {
    $server = "localhost";
    $username = "root";
    $password = "";

    
    $con = mysqli_connect($server, $username, $password);

    
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "Success connecting to the db";
    
     $City = $_POST['City'];
     $Homemaid = $_POST['Homemaid'];
     $Cookingmaid =$_POST['Cookingmaid'];
     $BabyCartecker=$_POST['BabyCartecker'];
     $Allrounder=$_POST['Allrounder'];
    
    $sql = "INSERT INTO `trip.trip` ( `City`, `Home maid`, `Cooking Maid`, `baby Cartecker`, `All Rounder`, `Date`) VALUES ('$City', '$Homemaid', '$Cookingmaid', '$BabyCartecker', '$Allrounder', '2023-02-04 16:49:42.000000');";
    echo $sql;
    if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql  <br> $con->error";
    }
    $con->close();
  
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="bg (1).jpg" style="background-size: cover; font-size: 28px;">

    <h1 align="center">Booking Detials</h1>
    <form action="I1.php" method="post">

        <label><b>Choose a City:</b></label>
      
      <select name="city" id="city" >
        <option value="Gandhinagar">Gandhinagar</option>
        <option value="Ahmedabad">Ahmedabad</option>
      </select>
      <br>
      <br>
      <b>Home Maid : </b><input type="checkbox" id="Brooming" name="Bromming" value="Servies">
        <label>Brooming</label>
        <input type="checkbox" id="Brooming" name="Bromming" value="Servies">
        <label>Mopping</label>
        <input type="checkbox" id="Brooming" name="Bromming" value="Servies">
        <label>Bathroom Cleaning</label>
        <input type="checkbox" id="Brooming" name="Bromming" value="Servies">
        <label>Dusting</label>
         <br>
            <br>
         <b>Cooking Maid : </b><input type="checkbox" id="cooking" name="cooking" value="Servies">
        <label>Home Style North-Indian</label>
        <input type="checkbox" id="cooking" name="cooking" value="Servies">
        <label>Home Style Multi Cuisine</label>
        <input type="checkbox" id="cooking" name="cooking" value="Servies">
        <label>Dish Washing</label>
        <input type="checkbox" id="cooking" name="cooking" value="Servies">
        <label>Home Style South-Indian</label>
        <br>
           <br>
        <b>Baby Cartecker :</b> <input type="checkbox" id="baby" name="baby" value="Servies">
        <label>For 0 to 3  Month</label>
        <input type="checkbox" id="baby" name="baby" value="Servies">
        <label>For 3 to 6 Month</label>
        <input type="checkbox" id="baby" name="baby" value="Servies">
        <label>For 1 Year</label>
        <input type="checkbox" id="baby" name="baby" value="Servies">
        <label>For 2 to 6 Year</label>
        <br>
        <br>
         
       <b>All Rounder :</b> <input type="checkbox" id="all" name="all" value="Servies">
        <label>6 Hour Per Day</label>
        <input type="checkbox" id="all" name="all" value="Servies">
        <label>8 Hour Per Day</label><input type="checkbox" id="all" name="all" value="Servies">
        <label>10 Hour Per Day</label><input type="checkbox" id="all" name="all" value="Servies">
        <label>12 Hour Per Day</label>
           <br>   <br>
        
       <center> <input type="submit" value="Submit" style="font-size: 25px;"></center>
      </form>
       <script src="index.js">
        // <INSERT INTO `trip` (`Sr Number`, `City`, `Home maid`, `Cooking Maid`, `Baby Cartecker`, `All Rounder`, `Date`) VALUES ('1', 'Gandhinagar', 'Brooming', 'Dish-Washing', 'For 1 Year', '10 hour per Day', '2023-02-05 17:38:35.000000'); --> -->
      </script>
</body>
</html>
    
    ?>