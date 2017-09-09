<?php require_once("../service/data_access.php") ?>
<?php require_once("../service/TutorService.php") ?>


<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];


    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
    {
        if($pass==$cpass)
        {
            $tutor['Email']=$_POST['email'];
            $tutor['Password']=$_POST['password'];
            $tutor['MemberSince']=date_create('now')->format('Y-m-d');

            //Set a method to sent back to home page if fail give error msg
            if(NewTutor($tutor)){
                header('../index.php');
            }
        }
    }
}

?>


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
			
			<td><button formaction="../index.php">Back to Home</button></td>
			
			<td align="right"><input type="submit" name="confirm" value="Confirm" /></td>
		</tr>
			
			
		</table>
	</form>
 
</body>
</html>

