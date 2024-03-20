<?php 
session_start();
include "dataconnect.php";
$search_query = isset($_POST['search']);
$search_btn = isset($_POST['btn']);
$isClick = false;
if($search_query === '' and $search_btn !=$isClick)
  {
    //$error = 'please enter your query';
     header('locattion:index.php');
     exit();
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Medisopedia</title>
  <meta charset="UTF-8">
  <meta name="description" content="Medisopedia">
  <meta http-equiv="refresh" content="30">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="med.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="<?php include "dataconnect.php" ; ?>">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
 

</head>
<body>
	<div class="w3-container w3-teal">
     <a href="index.php"> <img src="logo.png" alt="text" width="100" height="100"><a href="index.php">
  </a>
  </div>

  <br>
  <br>
  <!--collector-->
 <body class="padding">
  <div class="heading">
    <h3><strong>Order</strong> </h3>
  </div>
  <br>
  <?php 
  if($search_query === '' and $search_btn !=$isClick)
  {
    //$error = 'please enter your query';
     header('locattion:index.php');
     exit();
  ?>
<?php 
}
else
{
?>
 <?php
    // header("admin/add.php");
    //  $sno = $_POST['sno'];
    //  $_SESSION['id'] = $sno;
     if(isset($_SESSION['searchbar']) )
     {
     $_SESSION['searchbar'] =$search_query ;
     $search_query = mysqli_real_escape_string($conn,$_POST['search']);
     $query = "SELECT med_id, me_name,med_image FROM med where me_name like '%$search_query%'";
     $query1 ="SELECT * FROM med WHERE me_name LIKE '%$search_query%'";
     $query_run = mysqli_query($conn,$query);
  
   if ($query_run && mysqli_num_rows($query_run) > 0)
      {
          
         

 ?>
 <?php
    while($row = mysqli_fetch_assoc($query_run))
              {
 ?>
<div class="section_design">
     <p> <?="sno". $row['med_id']; ?></p>
     <p> <?="Name". $row['me_name']; ?> </p>
  </div>
  <div class="image_section">
    <!-- <img src="images/panadol1.jpeg" alt="images" width="200" height="200"><br> -->
    <?='<img src="images/'.$row['med_image'].'" width=100 height="100" alt="image">'; ?>
    <p> <?="Name". $row['me_name']; ?></p>
  </div>

<?php 
}
} 
}
else
{
  echo "hellow ";
}
}
?>

  <!-- <div class="section_design">
     <p> sno </p>
     <p> Name </p>
  </div>
  <div class="image_section">
    <img src="images/panadol1.jpeg" alt="images" width="200" height="200"><br>
    <p> Description </p>
  </div> -->
    <!--php code-->
  <p class="text">Before clicking the order form, first fill following field</p>

  <div class="form_design">
    <form action="" method="post">
      <label>Name:</label><br>
      <input type="text" naem="username" ><br>
      <label>Email:</label><br>
      <input type="email" naem="useremail" ><br>
        <label>Location:</label><br>
      <input type="text" naem="userloction" ><br>
      <label>Payment Method </label><br>
      <select value="0">
            <option value="JazzCash">  JazzCash</option>
      <option value="EasyPisa">  EasyPisa</option>      
      </select><br><br>
            <input type="submit" value="Order" name="order_form_btn" id="order_form_btn">
    </form>
  </div>


   
  <br>
  <br>
  <br>
	

  <br>
    <br>
      <br>
        <br>
          <br>
<div>
  
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<footer class="w3-container w3-teal">
  @copyright 
</footer>
  






</body>
</html>

