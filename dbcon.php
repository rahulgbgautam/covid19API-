<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "coronavirus";


$con = mysqli_connect($server, $user, $password, $db);

if ($con) {
?>
    <script>
        alert("connection successful");
    </script>
	
<?php	    

		if (isset($_POST['submit'])) {
        
		$name =  $_POST['na'];
		$number =  $_POST['num'];
		$eid =  $_POST['eid'];
		$symp =  $_POST['symp'];
		$feel =  $_POST['feel'];
		
		$chk="";
	
		echo $name ;
		
		echo $number; 
		
		echo $eid ;
		
	
		
		echo $feel ;
		

		
		$insertquery = "INSERT INTO covid (name , phone_no,email,feeling) VALUES ('$name','$number','$eid','$feel')";
	
		$iquery = mysqli_query($con, $insertquery);
		
		if($iquery){
			?>
			
			<script>
				alert(" Your form submitted successfully");
			</script>
		
			<?php
		}
	
	}else{
		
		?>
		
		    <script>
				alert("Data Not Inserted ");
			</script>
		
		<?php
	}
	


} else {
?>
    <script>
        alert("NO connection");
    </script>
<?php
}


?>

