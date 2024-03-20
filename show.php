<?php
include "dataconnect.php";
$search_query = $_POST['search_query'];
$search_btn = $_POST['search_btn'];
$isClick = false;

if($search_query==='' and $search_btn!=$isClick)
{
  echo "please write something";
}

?> 
<!DOCTYPE html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport"
   content="width=device-width, initial-scale=1"> 
   <meta charset="UTF-8">
   <meta name="description" content="Medisopedia"> 
   <meta http-equiv="refresh"
   content="30">
   <meta name="viewport" content="width=device-width,
   initial-scale=1.0"> <link rel="stylesheet" type="text/css" href="med.css">
   <link rel="stylesheet" type="text/css" href="style.css"> <script
   type="text/javascript" src="search.js"></script> 
   <link href="<?php
   include "dataconnect.php" ; ?>" >
    <link rel="icon" type="image/x-icon" href="favicon.ico">
  <title>php coding inside html</title>
</head>
<body>
  <div class="w3-card-4">
      <a href="index.php"><img src="logo.png" alt="text" width="100" height="100"></a>
  </div>
   <div class="search_box2">
  <form action="show.php" method="post">
    <input type="search" name="search_query" style="width: 50%; border-radius:100px; width:500px; height:50px" id="text"><br>
    <input type="submit" name="search_btn"  style="border-radius:100px; width:100px; height:50px; background-color:lightblue" value="Search" id="search_btn">
  </form>
</div>

<?php  
if(isset($_POST['search_query']))
{
  $search = mysqli_real_escape_string($conn,$_POST['search_query']);
  $query = "SELECT * from med where me_name LIKE '%$search_query%' OR generic_name LIKE  '%$search_query%' OR med_formuale  LIKE '%$search_query' ";
     $query_run = mysqli_query($conn,$query);
  
     if(mysqli_num_rows($query_run))
      {
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
        <h2><?php echo $row["med_id"]; ?></h2>
        <h2><?php echo "Medicine Name:".$row["me_name"]; ?></h2>

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
                  
                  <!-- <form action="orderform.php" method="post">
                    <input type="submit" name="order_form" class="w3-red" value="Order">
                  </form> -->
      </div>

      </div>
      
  </div>



<?php 
} 
?>
<?php
}
else
{
  echo "search not found:". $search_query;
}
}

?>
<div><?php echo date("l jS \of F Y h:i:s A");?></div>

</body>
</html>
