<?php
	
   $con = mysqli_connect('localhost','root','','hotel');
   $name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $phoneno = $_REQUEST['phoneno'];
   $query = $_REQUEST['query'];
   if($con){
   	echo "Connection successful<br>";
	$sql="insert into contact values('$name','$email','$phoneno','$query')";
	if($name!=null && $email!=null && $phoneno!=null && $query!=null){
		$res=mysqli_query($con,$sql);
		if($res){
			echo "Thankyou for showing interest in hotel Paradise...<br>";
			echo "Your query is submitted successfully<br>";
			echo "It will be answered in your mail within 24 hours<br>";
			echo "Have a good day...<br>";
		}
		else{
			echo "ERROR DESCRIPTION: ".mysqli_error($con);
		}
	}
	else
	{echo "Your query was not submitted successfully... please try again filling all entries";}
	
   }
   else {
   	die("Sorry we failed to connect you:   ".mysqli_connect_error());    
   }
   mysqli_close($con);
?>