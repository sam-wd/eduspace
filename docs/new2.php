<?php





if($_POST["submit"])
{
		$fu=$_POST["screenshot"];
			
			    $em=$_POST["email"];
         		$na=$_POST["naming"];
		    
		        $pn=$_POST["pname"];
				$pl=$_POST["plink"];
		        $pf=$_POST["pfile"];
		       
		
		
		
		
			
			
			
				 $sql= "insert into upload(screenshot,email,naming,pname,plink,pfile)values('$fu','$em','$na','$pn','$pl','$pf')";
                 if ($conn->query($sql)==true)
				 {
					 echo"done";
				}
				else
				{
					echo"can't";
				}
				
}
?>