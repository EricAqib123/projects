<?php 
session_start();
include "dataconnect.php";
$search_query = isset($_POST['search']);
$search_btn = isset($_POST['btn']);
$isClick = false;
  if($search_query === '' and $search_btn !=$isClick)
  {
     echo  'please enter your query';
    
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
	<div class=" w3-card-4">
     <a href="index.php"><img src="logo.png" alt="text" width="100" height="100"></a>
  </div>
  <br>
  <br>
 <div class="search_box">
  <center>
  <form  action="act.php"  method="post" class="" id="search-form">
     <input type="search" name="search" id="text" style="width: 50%; border-radius:100px; width:500px; height:50px"  placeholder="search your required medicine">
     <input type="submit"  name="btn" class="w3-button w3-blue" style="border-radius:100px; width:100px; height:50px" value="Search">
     
  </form>
    </center>
  </div>

<div>
 
 <?php
      // if(isset($_POST['category']))
      //   {
      //      $search_category = mysqli_real_escape_string($conn,$_POST['category']);
      //      echo "Category selected: " . $search_category;   
      //   }
   // $search_category= isset($_POST['category']);
     if(isset($_POST['search']))
     {
     
     $search_query = mysqli_real_escape_string($conn,$_POST['search']);
     $query = "SELECT * from meds where me_name LIKE '%$search_query%' OR generic_name LIKE  '%$search_query%' OR med_formuale  LIKE '%$search_query' ";
       // $query = "SELECT * FROM meds LEFT JOIN category ON meds.me_name = category.category_name WHERE meds.me_name = '$search_query' or category.category_name = '$search_category'";
     //$query = "SELECT * from meds left join category on meds.med_id = category.cat_id";
      // $query = "SELECT * FROM meds
      //       LEFT JOIN category ON meds.med_id = category.cat_id
      //       WHERE meds.me_name LIKE '%$search_query%'
      //       AND (category.category_name = '$category' OR '$category' = '')";
     $query_run = mysqli_query($conn,$query);
  
     if(mysqli_num_rows($query_run))
      {
          
         

 ?>
 <?php
    while($row = mysqli_fetch_assoc($query_run))
              {
 ?>
<button class="w3-animate-right  " onclick="document.getElementById('id01').style.display='block'" class="w3-button ">
  <br>
  <?='<img src="images/'.$row['med_image'].'" width=150 height="150" alt="image">'; ?>
  
 </button>


  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2><?php //echo $row["med_id"]; ?></h2>
        <h2><?php echo "".$row["me_name"]; ?></h2>

      </header>
      <div class="w3-container">
         <p><?="Images:".'<img src="images/'.$row['med_image'].'" width=100 height="100" alt="image">'; ?></p>
        <p><?="To Which Age Group This Medicine is given:".$row["med_age"]; ?></p>
        <p><?="Gram:".$row["med_gram"]; ?></p>
        <p><?="Medicine Formuale:".$row["med_formuale"]; ?></p>
        <p><?="Medicine Company:".$row["med_company"]; ?></p>
        <p><?="Medicine Alternate:".$row["med_alt"]; ?></p>
        <p><?="Illness Cured:".$row["med_illness"]; ?></p>
        <p><?="Diesase Cured:".$row["med_disease"]; ?></p>
        <p><?="Dosage:".$row["med_dosage"]; ?></p>
      </div>
    
        <!--another section s-->
      <div>
   <!--    <footer class="w3-container w3-blue">
     
      </footer> -->
    </div>
<br>
     <button onclick="document.getElementById('id02').style.display='block'" class="w3-yellow">
  <br>
    INFO:
  
 </button>

  <div id="id02" class=" w3-modal-content ">
    <div class="w3-modal-content">
      <header class="w3-container w3-red"> 
        <span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Info:</h2>

      </header>
      <div class="w3-container">
         <p><?php echo "Images:".'<img src="images/'.$row['med_image'].'" width=100 height="100" alt="image">'; ?></p>
          <p style="border:1px solid"><?="Generic Name:".$row['generic_name']?></p>
          <p style="border:1px solid"><?="National Drug Code:".$row['national_dc']?></p>
           <p style="border:1px solid"><?="Forms of Dosage:".$row['tablet']?></p>
            <p style="border:1px solid"><?="Side Effect:".$row['side_effect']?></p>
             <p style="border:1px solid"><?="Warnings and Precaution:".$row['warnings']?></p>
              <p style="border:1px solid"><?="Contraindication:".$row['contraind']?></p>
               <p style="border:1px solid"><?="Mechanism of Action:".$row['mechanism_action']?></p>
               <p style="border:1px solid"><?="Pharmacodynamics:".$row['pharmacodynamics']?></p>
                  <p style="border:1px solid"><?="Storage and Handling:".$row['str_handle']?></p><br>
                  
                 
      </div>

      </div>
      
  </div>

<?php 

} 
}
else
{
  echo "Search Result:". $search_query. "<br>";
  echo "no matches for your search". "<br>";
  echo "alway search by medicine name";
}
}
?>


</div>



</body>
</html>

