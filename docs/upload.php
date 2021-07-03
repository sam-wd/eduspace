<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="test";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if ($conn) {
} else {
    die("connection failed because".mysqli_connect_error());
}


?>

<html>
<head>
<title></title>
 <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="check.css"></link>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<ul class="w3-ul" style="color:white;">
    <p class="w3-xlarge" style="position:fixed; top:10px;
  width:100%;z-index:1;background-color:blue;"><i class="fa fa-home"></i><a href="http://eduspacec.000webhostapp.com/index.html" style="COLOR:white;"><b > Home</b></a></p>
   </ul><br><br><br><br>
   <div class="container" align="justify">
   <div class="col-sm-6">
<form action="upload.php" method="POST" enctype="multipart/form-data">

 Name:
<input type =  "text" placeholder="Name" name="naming"><br><br>

Email:
<input type="text" placeholder="Email" name="email"><br><br>

Project Name:
<input type="text" placeholder="Project Name" name="pname"><br><br>

Project link:
<input type="text" placeholder="Link" name="plink"><br><br>

Project File:
<input type="file" placeholder="Project File" name="pfile"><br><br>

Project First Page Screenshot:
<input type="file" placeholder="Screenshot" name="screenshot" id="screenshot"><br><br>


<input type="Submit" name="Submit">

</form>
</div>
<div class="col-sm-6">
<img src="form.jpg" style="height:650px;width:700px;"></img>
</div>
</div>
<?php
if (isset($_POST["Submit"])) {
    $msg="";
    
    $filenamee = $_FILES["pfile"]["name"];
    $tempnamee = $_FILES["pfile"]["tmp_name"];
    $filename = $_FILES["screenshot"]["name"];
    $tempname = $_FILES["screenshot"]["tmp_name"];
   
    $foldertwo = "files/".$filenamee;
    $folder = "uploads/".$filename;
    // $imagefiletype=strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    // $imagefiletypetwo=strtolower(pathinfo($filenamee, PATHINFO_EXTENSION));
    // if ($imagefiletype==".png" || $imagefiletype==".jpg" || $imagefiletypetwo == ".pdf") {
          
    
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO ss (pfile, screenshot) VALUES ('$filenamee','$filename')";
        
  
        // Execute query
        $res = mysqli_query($conn, $sql);
    // }
          
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder) && move_uploaded_file($tempnamee, $foldertwo)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
        
 
        
    $na=$_POST["naming"];
    $em=$_POST["email"];
                 
            
    $pn=$_POST["pname"];
    $pl=$_POST["plink"];
              
               
        
        
        
        
            
            
            
    $q= "INSERT into upload(naming,email,pname,plink)values('$na','$em','$pn','$pl')";

    $result = mysqli_query($conn, $q);
    if ($result) {
        echo "<script>alert('Your Project have been Submitted successfully')</script>";
    } else {
        echo "<script>alert('nope')</script>";
    }
}
?>

</body>
</html>