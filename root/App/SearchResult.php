<?php
include_once("../index.php");
include_once("./service/data_access.php");
include_once ("./service/TutorService.php");
include_once ("./service/TutorInfoService.php");
	
	$name="Tushar";
	$salary="6000Tk";
	$phoneno="01740072214";
?>

<body>
	<form method="post">	
	<br/>
	<br/>
	<table align=center border=1 width=800>
		
		<tr>
			
			<td>
				<img src="Resources/pic.jpg" height=80px width=80px>
			</td>
		
			<td>
				<b>Name: </b> <?php echo $name; ?> <br/>
				<b>Expected salary: </b><?php echo $salary; ?><br/>
				<b>Mobile no: </b> <?php echo $phoneno; ?>
			</td>
			<td>
				<input type="button" onClick="location.href='TutorProfile.php'" value='View'>
			</td>
			
		</tr>
		
		
	</table>
	</form>
</body>
