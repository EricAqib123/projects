<!DOCTYPE html>
<html>
<head>
	<title>Medisopedia</title>
	<link rel="stylesheet" type="text/css" href="med.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href= <?php include "dataconnect.php" ; ?> >

</head>
<body>
	<div class="logo w3-card-4 ">
      <img src="logo.png" alt="text" width="100" height="100">
	</div>
	<br>
	<br>

	<div class="mid_section">
    <center><h2 class="w3-container  ">Login</h2></center>
    </div>
    <center>
    <div class="w3-container w3-blue">
    	<form class="w3-container">
    		<label class="w3-text-white">Name:</label><br>
    		<input type="text" class="w3-input w3-border"  name="patient_name"><br>
    		<label>Cast:</label><br>
    		<input type="text" class="w3-input w3-border"  name="patient_cast"><br>
    		<label>Email:</label><br>
    		<input type="Email" class="w3-input w3-border" name="patient_email"><br>
    		<label>Password:</label><br>
    		<input type="passwrod" class="w3-input w3-border"  name="patient_password"><br>
    		<label>Patient Image:</label><br>
    		<input type="file"  class="w3-input w3-border" name="patient_image"><br>
    		<br>
    		<input type="submit"  class="w3-input w3-border w3-yellow" name="patient_data_submit " value="Login">
    	</form>
    </div>
	
	</center>
	</div>













</body>
</html>