<!DOCTYPE html>
<html>
<head>
  <title>Let Change</title>
  <style type="text/css">
    *{
      margin:0px;
      padding:0px;
    }
    .section
    {
      background-color:hotpink;
      height:500px;
    }
    .ide_section
    {
      border: 1px solid black;
      background-color:green;
      color:white;
      width:300px;
      height:500px;
    }
    .output_section
    {
      position: relative;
      top:-500px;
      left:320px;
      border: 1px solid black;
      background-color:blue;
      color:white;
      width:400px;
      height:500px;
    }
    .add_section
    {
      position: relative;
      top:-1000px;
      left:760px;
      border: 0px solid black;
      color:white;
      width:400px;
      height:500px;
    }
    .btn
    {
      border-radius:500px;
      width:300px;
      height:30px;
      margin:10px;
      background-color:green;

    }
    .btn:hover
    {
      background-color:brown;
      color:black;
    }
    .btn2
    {
      position: relative;
      top:-35px;
      left:180px;
      border-radius:500px;
      width:70px;
      height:30px;
      margin:10px;
      background-color:green;

    }
    .btn2:hover
    {
       background-color:brown;
      color:black;
    }
    .header
    {
      background-color:orange;
      height:40px;
    }
    .file_upload
    {
      background-color:grey;
      height:30px;
    }
  </style>
</head>
<body>
  <div class="header">
 <center><h1>Let Change</h1></center>
  </div>
  <br>
  <div class="file_upload">
    <form method="post">
      <input type="file" name="file_select"><br>
      <input type="submit" class="btn2" name="file_upload" value="Upload">
    </form>
  </div>

  <div colspan="3" class="section">
    <div class="ide_section">
       <code>
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;My Web Page&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;h1&gt;Hello, World!&lt;/h1&gt;
            &lt;/body&gt;
            &lt;/html&gt;
        </code>
    </div>
    <div class="output_section">
      <img src="output-image.png" alt="Output Image">
    </div>
    <div class="add_section">
      <form method="post">
      <input type="submit" name="add" class="btn"value="Add">
    </form>
    <form method="post">
      <input type="submit" name="add" class="btn" value="Database">
      </form>
      <form method="post">
      <input type="submit" name="add" class="btn" value="Connection of Database">
    </form>
    <form method="post">
      <input type="submit" name="add" class="btn" value="Delete">
    </form>
    <form method="post">
      <input type="submit" name="add"  class="btn" value="Update">
    </form>
    </div>
  </div>

</body>
</html>