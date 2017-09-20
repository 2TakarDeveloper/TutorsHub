<?php
$contact=false;
$userId;


?>

<?php
// Start the session
session_start();

//
//var_dump($_SESSION);

if(isset($_SESSION['Contact'])){
    $contact=$_SESSION['Contact'];
}

if($contact){
    $userId=$_SESSION["TutorID"];

}else{
    if(!isset($_SESSION["UserId"]))
    {
        header("Location: ../index.php");
    }else{
        $userId=$_SESSION['UserId'];
    }

}

?>


<?php require_once("../service/data_access.php") ?>
<?php require_once("../service/TutorService.php") ?>
<?php require_once("../service/TutorInfoService.php") ?>
<?php require_once("../service/SearchInfoService.php") ?>
<?php require_once("../service/ExamDataService.php") ?>


<?php

//Set Coo

//-----------------------------------------------------
$tutor=getTutorbyId($userId);
$name=$tutor['Name'];
$mail=$tutor['Email'];
$imageUrl=$tutor['UserImage'];
$activation=$tutor['MemberSince'];;//Member since
//--------------------------------




//--------------------------------
$tutorSearchInfo=getSearchInfo($userId);
$salary=$tutorSearchInfo['ExpectedSalary'];
$gender=$tutorSearchInfo['Gender'];


$areas=$tutorSearchInfo['PreferredLocation'];
$area=explode(",",$areas);

$medium=$tutorSearchInfo['PreferredMedium'];

$classes=$tutorSearchInfo['PreferredClasses'];
$class=explode(",",$classes);

$subjects=$tutorSearchInfo['PreferredSubjects'];
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

$tutorInfo=GetTutorInfo($userId);
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
    body
    {
        font-family: sans-serif;
    }
    .container
    {
        width:100%;
    }

    .wrap
    {
    <!--overflow:auto;-->
        position: absolute;
        float: center;
        height:750px;
        background: repeating-linear-gradient(
                -55deg,
                #5d9634,
                #5d9634 10px,
                #538c2b 10px,
                #538c2b 20px
        );
        padding:30px;
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
        background:#181A1A;
        margin-top: 10px;
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
        border-radius:5px;

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

    #info h1{

        border-bottom: 2px solid #4CAF50;
        width:20%;
    }
    #profile_img
    {
        height: 150px;
        width:150px;
        border-radius: 50%;
        border: 15px double #4CAF50;

    }
    .active{
        background: #4CAF50;
        color: #ffffff;
        border: 2px solid #4CAF50 !important;

    }

    #one {
        padding: 5px;
        font-weight:600;
    }

    #two td {
        border: 2px solid red;
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
                <tr style="background:transparent">
                    <td style="width:30%;">
                        <img id="profile_img" src= "<?php echo $imageUrl;?>" >
                    </td>

                    <td style="background: white">
                        <h1 style="margin-top:-30px">  <?php echo $name; ?> </h1>

                        </p>
                        <p> <b>Current Status: </b> <?php echo $status; ?>  </p>
                        <p> <?php echo $bio; ?> </p>
                    </td>

                </tr>

                <td  colspan="2">
                    <p style="margin-top:-20px"> <br> <img src="./Resources/call.png"  style="width:20px;height:20px;"> <?php echo $phone; ?> <img src="Resources/email.jpg"  style="width:20px;height:20px;"> <?php echo $mail; ?> <img src="Resources/add.png"  style="width:20px;height:20px;"> <?php echo $address; ?> </P>
                </td>

            </table>




            <table cellspacing="10">


                <td id="info">
                    <h1>
                        Tuition Info
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

                                <table style="width: auto" id="two">
                                    <tr>
                                        <td <?php if($medium=="Both" || $medium=="Bangla") echo 'class="active"' ;?> align="center">
                                            <p > <?php if($medium=="Both" || $medium=="Bangla")  echo"&#10004;" ;?> Bangla </p>
                                        </td>
                                        <td <?php if($medium=="Both" || $medium=="English") echo 'class="active"' ;?> align="center">
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
                                <table style="width: auto" id="two">
                                    <tr>
                                        <?php
                                            for($j=1;$j<=12;$j++){
                                                if(($j-1)%4==0){
                                                    echo "<tr>";
                                                }
                                                echo "<td";

                                                ?>

                                                    <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==$j){ echo 'class="active"'; break;}}
                                                    echo "><p>";
                                                ?>

                                                        <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==$j){ echo "&#10004;"; break;}} ?>

                                                        <?php echo "Class $j"?>

                                            <?php
                                                echo   "</p></td>";
                                            }?>

                                </table>



                            </td>
                        </tr>

                        <tr>
                            <td >
                                Preferred Subjects:
                            </td>

                            <td>
                                <table style="width: auto" id="two">
                                    <tr>

                                        <?php
                                        $subjects=GetAllSubjectNames();


                                        for($j=0;$j<12;$j++){
                                            if(($j)%4==0){
                                                echo "<tr>";
                                            }
                                            echo "<td";

                                            ?>

                                            <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]==$subjects[$j]['ExamName']){ echo 'class="active"'; break;}}
                                            echo "><p>";
                                            ?>

                                            <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]==$subjects[$j]['ExamName']){ echo "&#10004;"; break;}} ?>

                                            <?php

                                            echo $subjects[$j]['ExamName']?>

                                            <?php
                                            echo   "</p></td>";
                                        }?>



                                </table>




                            </td>
                        </tr>

                        <tr>
                            <td >
                                Preferred Area:
                            </td>

                            <td>
                                <table style="width: auto" id="two">
                                    <tr>
                                        <?php for($i=0;$i<sizeof($area);$i++){ echo"<td style='border:2px solid green;'><p>$area[$i]</p></td>";} ?>

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
                    <td style="width:30%">

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
            if($contact)
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
									<b> Name <b> <br> <input type="text" name="senderName" size="35"> <br>
									<b> Phone No <b> <br> <input type="text" name="senderPhone" size="35"> <br>
									<b> Email <b> <br> <input type="text" name="senderEmail" size="35"> <br>
									<b> Message <b> <br> <textarea name="senderMsg" cols="37" rows="5"></textarea> <br>								<br>
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