<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Image loader</title>
	<style type="text/css">
		.loader
		{
		
			margin:20px;
			padding:20px;
			border:2px solid;
			box-shadow:2px 2px 2px 2px;
			width:100px;
			background-color:lightblue;
			border-radius: 30px;
		}
		.loader img
		{
			background-color:blue;	
			border-radius:200px;
			opacity:4.8;
/*			cursor: pointer;*/
		}
		.loader img:hover
		{
			background-color:green;
		}
		@keyframes move
		{
			from{position:relative; top:-100px; left:20px; background-color:blue;}
			to
			{
				position:relative;
          top:-50px;
          left:150px;
          
  			}
		}
		.silder
		{
		  border-radius:30px;
		  border:2px solid;
		  width:300px;
		  background-color:crimson;
		  animation-name:move;
		  animation-duration: 5s;
          
		}
	</style>
</head>
<body>
	<div class="loader">
		<img src="h.jpeg" alt="Image" width="100" height="100" >

	</div>
		<div class="silder">this </div>


<div class="image-container">
  <img src="h.jpeg" alt="Image">
  <div class="hover-div">Hovered Div</div>
</div>


</body>


</html>