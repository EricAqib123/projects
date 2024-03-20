<?php
session_start();
include "dataconnect.php"; // Include your database connection code
$search_query = isset($_POST['search']);
$search_btn = isset($_POST['btn']);
$isClick = false;

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
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f0f0f0;
        }

        .section {
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 600px;
            width: 90%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .data {
            text-align: center;
        }

        @media (max-width: 768px) {
            .section {
                width: 95%;
            }
        }
    </style>

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
if (isset($_POST['search_button'])) {
   

    $search_query = mysqli_real_escape_string($conn, $_POST['search']);
    $search_category = mysqli_real_escape_string($conn, $_POST['category']);

    $query = "SELECT * FROM meds LEFT JOIN category ON meds.med_id = category.med_id WHERE ";

    if (!empty($search_query) && !empty($search_category)) {
        $query .= "meds.me_name = '$search_query' AND category.category_name = '$search_category'";
    } elseif (!empty($search_query)) {
        $query .= "meds.me_name = '$search_query'";
    } elseif (!empty($search_category)) {
        $query .= "category.category_name = '$search_category'";
    } else {
        // No search criteria provided, you can handle this case as needed
    }

    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run)>0) {
        // Fetch and display search results

 ?>
 
 <?php     
        while ($row = mysqli_fetch_assoc($query_run)) {
            // Display search results here
          //echo $row['category_name'] . "<br>";
          //echo $row['me_name'] . "<br>";
?>

   <div class="container">
        <div class="section">
            <h1><?=$row['category_name']?></h1>
            <div class="data">
              <p><?='<img src="images/'.$row['med_image'].'" width=100 height="100" alt="image">'; ?></p>
                <p><?="Medicine Name".$row['me_name']?></p>
                <p><?="To Which Age Group This Medicine is given:".$row["med_age"]; ?></p>
                <p><?="Gram:".$row["med_gram"]; ?></p>
                <p><?="Medicine Formuale:".$row["med_formuale"]; ?></p>
                <p><?="Medicine Company:".$row["med_company"]; ?></p>
                <p><?="Medicine Alternate:".$row["med_alt"]; ?></p>
                <p><?="Illness Cured:".$row["med_illness"]; ?></p>
                <p><?="Diesase Cured:".$row["med_disease"]; ?></p>
                <p><?="Dosage:".$row["med_dosage"]; ?></p>
                </div>
        </div>
    </div>
    <!--futherinformation -->
     <div class="container">
        <div class="section">
            <h1><?="Futher Informaiton about specified medicine:" . $row['me_name']?></h1>
            <div class="data">
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
    } ?>
 <?php
}


 else {
        // Handle database query error
      echo "no matches found " . $search_category . $search_query;
    }
}

// Close the database connection if needed
mysqli_close($conn);
?>

</body>
</html>