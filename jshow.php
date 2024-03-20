<?php session_start();

$search_query = isset($_POST['search']);
$search_btn = isset($_POST['btn']);
$isClick = false; 
 ?>

<html>
<head>
  <title>Medisopedia</title>
  <meta charset="UTF-8">
    <meta name="description" content="Medisopedia">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="med.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="<?php include "dataconnect.php" ; ?>" >

    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
   <?php 
  if($search_query === '' and $search_btn !=$isClick)
  {
    echo 'please enter your query';
     //header('location:act.php');
     exit();

  ?>
<?php 
}
else
{
?>
<?php }?>
  <div class="w3-card-4">
      <img src="logo.png" alt="text" width="100" height="100">
  </div>
  <br>
  <br>
  <h1><center><strong>Mediscopedia</strong></center></h1>
  <div class="search_box2">
  <center>
  <form  action="search.php"  method="post" class="w3-container" id="search-form">
     <input type="search" name="search"  id="query" style="width: 50%; border-radius:100px; width:500px; height:50px"  placeholder="search your required medicine">
     <!-- <input type="submit"  name="btn" class="w3-button w3-blue" style="border-radius:100px; width:100px; height:50px" value="Search"> -->
        <select name="category" class="w3-button">
        <option value="">All Categories</option>
        <option value="painkiller">Pain Killer</option>
        <option value="Headache">Headache</option>
        <!-- Add more categories as needed -->
    </select>
    <input type="submit" name="search_button" class="w3-button w3-blue" style="border-radius: 100px; width: 100px; height: 50px" value="Search">
     
  </form>
    </center>
  </div>
  
  <!-- design section -->
  <br><br><br>


<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<footer style="list-style:none; text-decoration:none; background-color:grey;">
  <a href="about.php">About </a>
  <a href="contact.php" style="float:right">Contact Us </a>
</footer>

</body>
</html>