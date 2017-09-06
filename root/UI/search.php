<?php
	require_once('homepage.php');
	
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
				<img src="pic.jpg"  height=80px width=80px>
			</td>
		
			<td>
				<b>Name: </b> <?php echo $name; ?> <br/>
				<b>Expected salary: </b><?php echo $salary; ?><br/>
				<b>Mobile no: </b> <?php echo $phoneno; ?>
			</td>
			<td>
				<input type="button" onClick="location.href='viewtutor.php'" value='View'>
			</td>
			
		</tr>
		
		
	</table>
	</form>
</body>
