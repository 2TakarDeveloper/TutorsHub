<html>
<body>
 
	<form method="post">
	
		<table  align="center" >
		<tr>
			<td colspan=4>
			<center><font size=4><b>Registration Form</b></font></center>
			<hr>
			</td>
		</tr>
		
		<tr>
			<td>Email</td><br/>
			<td>
			<input type="text" name="email" size="20" /><br />
			</td>
		</tr>
		
		<tr>
			<td>Password
			</td><br/>
			<td>
			<input type="password" name="password" size="20" /><br />
			</td>
		</tr>
		
		<tr>
			<td>Confirm Password
			</td><br/>
			<td>
			<input type="password" name="cpassword" size="20" /><br />
			</td>
		</tr>

		<tr>
			
			<td><button type="submit" formaction="http://localhost/project/mywork/homepage.php">Back to Home</button></td>
			
			<td align="right"><input type="submit" name="confirm" value="Confirm" /></td>
		</tr>
			
			
		</table>
	</form>
 
</body>
</html>


<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$pass = $_POST['password'];
		$cpass = $_POST['cpassword'];
		
		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
		{
			if($pass==$cpass)
			{
				$xml = simplexml_load_file("data.xml");		
				$xml->addChild("user", "");
				$pos = count($xml->user)-1;
				
				$xml->user[$pos]->addChild("email", $_POST['email']);
				$xml->user[$pos]->addChild("password", $_POST['password']);
				$xml->asXML("data.xml");
			}
		} 	
	}

?>