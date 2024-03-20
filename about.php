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
    //$error = 'please enter your query';
     header('location:act.php');
     exit();

  ?>
<?php 
}
else
{
?>
<?php }?>
	<div class="w3-card-4">
     <a href="index.php"><img src="logo.png" alt="text" width="100" height="100"></a>
	</div>
	<br>
	<br>
	<div class="search_box">
	<center>
	
	
  <!-- design section -->
  <br>  <br>  <br>  <br>  <br>
   <h2>About</h2>
   <div class="intro">
   	<p><strong>At era of modern times, we are connected to worldwide to access whatever the information we wants, it contains every filed of information such as physics , chemistry  and many more. Not especially about the medicines where we can easily find them for understanding their mechanism in our human body or overall for the betterment of human being. It primarily focuses on getting information about the medicines such as their name, generic name, NDC number , their whole effect on human body and many more. This website purpose is to fulfills the gap knowledge which will be very helpful for common people and the expert </strong></p>
   </div>
   <h2>Our Teams</h2>
   <div class="card">
  <img src="aqib.jpg" alt="Avatar" style="width:100px; border-radius: 50px;">
  <div class="container">
    <h4><b>Aqib Ali</b></h4>
    <p>Backend Developer</p>
  </div>
  <br>
</div>
  <div class="card">
  <img src="shakir.jpg" alt="Avatar" style="width:100px; border-radius: 50px;">
  <div class="container">
    <h4><b>Shakir Hussain</b></h4>
    <p>Front-end Developer</p>
  </div>
</div>
<br>
  <div class="card">
  <img src="amjad.jpg" alt="Avatar" style="width:100px; border-radius: 50px;">
  <div class="container">
    <h4><b>Amajad Hussian</b></h4>
    <p>Database Integration</p>
  </div>
</div>
<br>
  <div class="card">
  <img src="raza.jpg" alt="Avatar" style="width:100px; border-radius: 50px;">
  <div class="container">
    <h4><b>Raza Ali</b></h4>
    <p>Data Collection and Designing</p>
  </div>
</div>
   <!-- <div class="teams">
   	<img src="a.png" alt="iamge" width="100" height="100"><br>
   	<span> Aqib Ali Group Leader: Backend Developer</span><br>
   		<img src="logo.png" alt="iamge" width="100" height="100"><br>
   	<span>Shakir Hussain  Front-end Developer</span><br>
   		<img src="logo.png" alt="iamge" width="100" height="100"><br>
   	<span>Amajad Hussian Data Integration</span><br>
   		<img src="logo.png" alt="iamge" width="100" height="100"><br>
   	<span>Raza Arian  Data Collection</span>
   </div>
 -->






</body>
</html>