<?php session_start();
include "dataconnect.php";
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
  <center><h2 class="contact" style="background-color:lightblue;border:0px solid; width:300px;color:black;">Contact Us:</h2></center>
  <center>
	<div class="body">
   <form action="contact.php" method="post" style="background-color:lightblue;border:0px solid;width:300px;">
    <label for="name" style="color:black;">Name</label><br>
     <input type="text"  name="username" style="border-radius:300px;width:200px;"><br>
       <label for="email">Email</label><br>
     <input type="text"  name="useremail" style="border-radius:300px;width:200px;"><br>
      <label for="feedback">Feedback</label><br>
     <input type="textarea"  name="userfeedback" style="border-radius:300px;width:200px;"><br><br>
     <input type="submit" value="Contact us" name="contact_btn" style="border-radius:300px;width:200px;background-color: green;">
   </form>

   </div>

</center>
</body>
</html>
<?php
if (isset($_POST['contact_btn'])) {
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $feedback = $_POST['userfeedback'];

    $ins = mysqli_query($conn,"INSERT INTO `feedback`(`name`, `email`, `feedback`) VALUES ('$name','$email','$feedback')");
    if(!$ins)
    {
        echo mysqli_error($conn);
    }
    else
    {
        echo "<center>". "feedback has been sent!" ."</center>";
    }
}
?>



