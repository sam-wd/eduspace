
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
<html lang="en" style="scroll-padding-top:70px;">
<head>
  <title>CODE</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="check.css"></link>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<BODY >
<style>

	
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 94%;
  opacity:1;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}


</style>
<style>
.w3-ul a
{
text-decoration:none;
}
</style>


<ul class="w3-ul" style="color:white;">
    <p class="w3-xlarge" style="position:fixed; top:10px;
  width:100%;z-index:1;background-color:blue;"><i class="fa fa-home"></i><a href="http://eduspacec.000webhostapp.com/index.html" style="COLOR:white;"><b > Home</b></a></p>
   </ul><br><br>
<div class ="row">
<DIV class="col-sm-12" >
<img class="center" alt="Responsive image" src="webappimage.jpg"  height="60%" width="96%"  ></img>
<h1 align ="center"> Hey Guys! there's a long road to go on</h1>

</div>
</div><br><br><br>
<div class="container">
<div class ="row">
<DIV class="col-sm-4" >
<img src="spotify.gif" height="40%" width="80%" style="border:2px;border-style:solid black;border-radius:10px;">
</div>

<DIV class="col-sm-8" >
<h3>This chapter describes the essence of a course for senior level undergraduate students and for master students of computer science and engineering, and analyzes its effects. The course prepares stuWriting research papers for SCI journals, (i) Making an Internet shop, (j) Making a MindGenomics campaign for the Internet shop, (k) DataMining from project history and project experiments, and (l) Preservation of project heritage and skills related to brand making. Each subject matter is covered by a homework assignment to help deepen the practical knowledge of the subject matter covered. In addition to the above described, which is accompanied with homework, the following four subjects are also covered and accompanied with in-class discussions (oriented to DataFlow research): (m) Inventivity, (n) Creativity, (o) Effectiveness, and (p) Efficiency. Consequently, the analysis part concentrates on the follo

</h3>



</div>
<?php

$query = "select naming, email from upload where id=2";

$queryy = "select screenshot from ss where id=2";

$result = mysqli_query($conn, $query);

$resultt = mysqli_query($conn, $queryy);
if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    echo $row["naming"]."<br>".$row["email"]."<br>";

  }
}
if(mysqli_num_rows($resultt)>0)
{
  while($roww = mysqli_fetch_assoc($resultt))
  {
    echo $row["screenshot"]."<br>";

  }
}





?>





</div>
</div>




</body>
</html>
</html>