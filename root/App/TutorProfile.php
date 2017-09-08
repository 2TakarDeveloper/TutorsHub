<?php
$contact=false; //for public access contact will be true and there will be a contact window
?>

<?php
// Start the session
session_start();

var_dump($_SESSION);

if(!isset($_SESSION["UserId"]))
{
    header("Location: ../index.php");
}

?>


<?php require_once("../service/data_access.php") ?>
<?php require_once("../service/TutorService.php") ?>
<?php require_once("../service/TutorInfoService.php") ?>
<?php require_once("../service/SearchInfoService.php") ?>


<?php

//Set Coo

//-----------------------------------------------------
$tutor=getTutorbyId($_SESSION["UserId"]);
$name=$tutor['Name'];
$mail=$tutor['Email'];
$imageUrl="Resources/a.jpg";//set later
$activation=$tutor['MemberSince'];;//Member since
//--------------------------------




//--------------------------------
$tutorSearchInfo=getSearchInfo($_SESSION['UserId']);
$salary=$tutorSearchInfo['ExpextedSalary'];
$gender=$tutorSearchInfo['Gender'];


$areas=$tutorSearchInfo['PrefferedLocation'];
$area=explode(",",$areas);

$medium=$tutorSearchInfo['PrefferedMedium'];

$classes=$tutorSearchInfo['PrefferedClasses'];
$class=explode(",",$classes);

$subjects=$tutorSearchInfo['PrefferedSubjects'];
$subject=explode(",",$subjects);


if($tutorSearchInfo['Availability'])
{
    $availability="Available";
}
else
{
    $availability="Not Available";
}



//----------------------------------



//--------------------------------------

$tutorInfo=GetTutorInfo($_SESSION['UserId']);
$status=$tutorInfo['CurrentStatus'];
$bio=$tutorInfo['Bio'];

$phone=$tutorInfo['MobileNo'];

$address=$tutorInfo['Address'];

$log=$tutorInfo['LastLogin'];

$level=$tutorInfo['Level'];
$experience=$tutorInfo['Experience'];


//---------------------------------------


?>

<html>
<style>

    .container
    {
        width:100%;
        margin-left:12.5%;
        margin-right:12.5%;

    }

    .wrap
    {
        width: 75%;
    <!--overflow:auto;-->
        position: absolute;
        float: center;
        background:lightgray;
        height:830px;
    }

    .left
    {
        float:left;
        width: 65%;

    }

    .right
    {
        float: right;
        width: 35%;
    }

    table
    {
        border: 1px gray;
        width: 100%;

    }

    th, td
    {
        padding: 7px;
        text-align: left;

    }
    tr
    {
        background-color: white
    }

    h1, h2, h3, h4, h5, h6{
        margin-top:0px;
        margin-bottom:1px;
        padding: 0px;
    }


    #one td {
        border: .5px solid lightgray;
        padding: 5px;
    }

    #two td {
        border: .5px solid-lightgray;
        padding: 5px;
        text-align: center;
    }



    .button
    {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        position: center;
    }

</style>


<body>


<div class="container">

    <div class="wrap">

        <div class="left">
            <table style="width=100%" cellspacing="10">
                <tr>
                    <td>
                        <img src=<?php echo $imageUrl; ?>  style="width:200px;height:230px;">
                    </td>

                    <td>
                        <h1 style="margin-top:-30px">  <?php echo $name; ?> </h1>

                        </p>
                        <p> <b>Current Status: </b> <?php echo $status; ?>  </p>
                        <p> <?php echo $bio; ?> </p>
                    </td>

                </tr>

                <td  colspan="2">
                    <p style="margin-top:-20px"> <br> <img src="Resources/call.png"  style="width:20px;height:20px;"> +88<?php echo $phone; ?> <img src="Resources/email.jpg"  style="width:20px;height:20px;"> <?php echo $mail; ?> <img src="Resources/add.png"  style="width:20px;height:20px;"> <?php echo $address; ?> </P>
                </td>

            </table>




            <table cellspacing="10">


                <td>
                    <h1>
                        Tution Info
                    </h1>


                    <table id="one">
                        <tr >
                            <td style="width:150px">
                                Expected Salary:
                            </td>

                            <td>
                                <?php echo $salary; ?>tk/hour
                            </td>

                        </tr>

                        <tr>
                            <td >
                                Current Status:
                            </td>

                            <td>
                                <?php echo $availability; ?>
                            </td>

                        </tr>





                        <tr>
                            <td>
                                Preferred Medium:
                            </td>

                            <td>

                                <table id="two">
                                    <tr>
                                        <td align="center">
                                            <p> <?php if($medium=="Both" || $medium=="Bangla") echo"&#10004;";?> Bangla </p>
                                        </td>
                                        <td align="center">
                                            <p> <?php if($medium=="Both" || $medium=="English") echo"&#10004;";?> English </p>
                                        </td>

                                    </tr>
                                </table>



                            </td>

                        </tr>

                        <tr>
                            <td >
                                Preferred Classes:
                            </td>

                            <td>
                                <table id="two">
                                    <tr>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==1){ echo "&#10004;"; break;}} ?> Class1 </p>
                                        </td>
                                        <td>
                                        <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==2){ echo "&#10004;"; break;}} ?> Class2 </p>
                                        </td>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==3){ echo "&#10004;"; break;}} ?> Class3 </p>
                                        </td>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==4){ echo "&#10004;"; break;}} ?> Class4 </p>
                                        </td>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==5){ echo "&#10004;"; break;}} ?> Class5 </p>
                                        </td>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==6){ echo "&#10004;"; break;}} ?> Class6 </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==7){ echo "&#10004;"; break;}} ?> Class7 </p>
                                        </td>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==8){ echo "&#10004;"; break;}} ?> Class8 </p>
                                        </td>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==9){ echo "&#10004;"; break;}} ?> Class9 </p>
                                        </td>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==10){ echo "&#10004;"; break;}} ?> Class10 </p>
                                        </td>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==11){ echo "&#10004;"; break;}} ?> Class11 </p>
                                        </td>
                                        <td>
                                            <p> <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==12){ echo "&#10004;"; break;}} ?> Class12 </p>
                                        </td>

                                    </tr>
                                </table>



                            </td>
                        </tr>

                        <tr>
                            <td >
                                Preferred Subjects:
                            </td>

                            <td>
                                <table id="two">
                                    <tr>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="English"){ echo "&#10004;"; break;}} ?>  English </p>
                                        </td>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Bangla"){ echo "&#10004;"; break;}} ?> Bangla </p>
                                        </td>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Physics"){ echo "&#10004;"; break;}} ?> Physics </p>
                                        </td>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Chemistry"){ echo "&#10004;"; break;}} ?> Chemistry </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Math"){ echo "&#10004;"; break;}} ?>  Math </p>
                                        </td>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Religion"){ echo "&#10004;"; break;}} ?> Religion </p>
                                        </td>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="HigherMath"){ echo "&#10004;"; break;}} ?> HigherMath </p>
                                        </td>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="SocialScience"){ echo "&#10004;"; break;}} ?> SocialScience </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="PhysicalExercise"){ echo "&#10004;"; break;}} ?>  PhysicalExercise </p>
                                        </td>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Career"){ echo "&#10004;"; break;}} ?> Career </p>
                                        </td>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="ICT"){ echo "&#10004;"; break;}} ?> ICT </p>
                                        </td>
                                        <td>
                                            <p><?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Biology"){ echo "&#10004;"; break;}} ?> Biology </p>
                                        </td>
                                    </tr>


                                </table>




                            </td>
                        </tr>

                        <tr>
                            <td >
                                Preferred Area:
                            </td>

                            <td>
                                <table id="two">
                                    <tr>
                                        <?php for($i=0;$i<sizeof($area);$i++){ echo"<td><p>$area[$i]</p></td>";} ?>

                                    </tr>

                                </table>
                            </td>
                        </tr>

                    </table>

                </td>

            </table>

        </div>

        <div class="right">

            <table style="margin-top:0px" cellspacing="10">


                <td colspan="2">


                    <b> Member Since: </b> <?php echo $activation; ?> <br>
                    <b> Last Login: </b> <?php echo $log; ?> <br>



                </td>
            </table>

            <table  cellspacing="10">

                <tr>
                    <td>

                        <b> Level </b>

                    </td>

                    <td>

                        <p> <?php echo $level; ?> </p>
                    </td>

                </tr>


                <tr>


                    <td>

                        <b> Experience </b>

                    </td>

                    <td>

                        <p> <?php echo $experience; ?> </p>
                    </td>
                </tr>



            </table>

            <?php
            if($search)
            {
                echo '<table cellspacing="10">
				
							
					<tr>
						
						<td colspan="2">
						<h2> 
							Contact this Tutor
						</h2>
						
						<table>
							
							
							<tr>
								<td colspan="2">
									<b> Name <b> <br> <input type="text" name="fname" size="35"> <br>
									<b> Phone No <b> <br> <input type="text" name="fname" size="35"> <br>
									<b> Email <b> <br> <input type="text" name="fname" size="35"> <br>
									<b> Message <b> <br> <textarea name="Text1" cols="37" rows="5"></textarea> <br>								<br>
									<button type="button" class="button" >Send Message</button>
									
								</td>
								
								
							</tr>
	
						</table>
						
					</tr>					
					</td>
				
			</table>';
            }
            ?>

        </div>
    </div>
</div>

</body>

</html>