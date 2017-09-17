<?php
session_start();
if(!isset($_SESSION["UserId"]))
{
    header("Location: ../index.php");
}
?>

<?php require_once("../service/data_access.php") ?>
<?php require_once("../service/TutorService.php") ?>
<?php require_once("../service/TutorInfoService.php") ?>
<?php require_once("../service/SearchInfoService.php") ?>
<?php require_once("../service/LocationService.php") ?>
<?php require_once("../service/ExamDataService.php") ?>


<?php


$c = ""; //calsses
$s = ""; //subjects
$a = ""; //areas


if($_SERVER['REQUEST_METHOD']=="POST")
{

    if(isset($_POST['cancel'])){
        header("Location:./TutorDashBoard.php");
    }

    /////////////////////
    $tutor;//this is the array that holds tutor object
    //name
    if(isset($_POST["name"]))
    {
        $tutor['Name']=$_POST["name"];
    }
    //email
    if(isset($_POST["email"]))
    {
        $tutor['Email']=$_POST["email"];
    }
    if(isset($_POST["image_URL"]))
    {
        $tutor['UserImage']=$_POST["image_URL"];
    }
    UpdateTutor($tutor,$_SESSION["UserId"]);
    //////
    //
    $userInfo;//this array holds user info
    //phone no
    if(isset($_POST["phone"]))
    {
        $userInfo['MobileNo']=$_POST["phone"];
    }
    //bio
    if(isset($_POST["bio"]))
    {
        $userInfo['Bio']=$_POST["bio"];
    }
    //current status
    if(isset($_POST["status"]))
    {
        $userInfo['CurrentStatus']=$_POST["status"];
    }
    //address
    if(isset($_POST["address"]))
    {
        $userInfo['Address']=$_POST["address"];
    }
    updateTutorInfo($userInfo,$_SESSION['UserId']);
    /////////////////////////////
    $searchInfo;//This one holds searchInfoProperties
    //gender
    if(isset($_POST["gender"]))
    {
        $searchInfo['Gender']=$_POST["gender"];
    }
    //medium
    if(isset($_POST["medium"]))
    {
        $searchInfo['PreferredMedium']=$_POST["medium"];
    }
    //salary
    if(isset($_POST["salary"]))
    {
        $searchInfo['ExpectedSalary']=$_POST["salary"];
    }
    //classes

    for($i=1;$i<=12;$i++){
        if(isset($_POST[$i]))
        {
            $c.="$i,";
        }
    }
    $searchInfo['PreferredClasses']=substr_replace($c, "", -1);
    //areas

    foreach (getAllLocations() as $location){

        if(isset($_POST[$location['Location']]))
        {
            $a.="$location[Location],";
        }
    }

    $searchInfo['PreferredLocation']=substr_replace($a, "", -1);
    //subjects

    foreach (GetAllSubjectNames() as $examName){

        if(isset($_POST[$examName['ExamName']]))
        {
            $s.="$examName[ExamName],";
        }
    }
    $searchInfo['PreferredSubjects']=substr_replace($s, "", -1);
    UpdateSearchInfo($searchInfo,$_SESSION['UserId']);
}
?>

<?php




//
//-----------------------------------------------------
    $tutor = getTutorbyId($_SESSION["UserId"]);
    $name = $tutor['Name'];
    $email = $tutor['Email'];
    $imageUrl = $tutor['UserImage'];
//--------------------------------
//--------------------------------
    $tutorSearchInfo = getSearchInfo($_SESSION['UserId']);
    $salary = $tutorSearchInfo['ExpectedSalary'];
    $gender = $tutorSearchInfo['Gender'];
    $areas = $tutorSearchInfo['PreferredLocation'];
    $area = explode(",", $areas);
    $medium = $tutorSearchInfo['PreferredMedium'];
    $classes = $tutorSearchInfo['PreferredClasses'];
    $class = explode(",", $classes);
    $subjects = $tutorSearchInfo['PreferredSubjects'];
    $subject = explode(",", $subjects);


    if ($tutorSearchInfo['Availability']) {
        $availability = "Available";
    } else {
        $availability = "Not Available";
    }
//----------------------------------
//--------------------------------------
    $tutorInfo = GetTutorInfo($_SESSION['UserId']);
    $status = $tutorInfo['CurrentStatus'];
    $bio = $tutorInfo['Bio'];
    $phone = $tutorInfo['MobileNo'];
    $address = $tutorInfo['Address'];


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
        min-width: 1260px;
        background: repeating-linear-gradient(
                -55deg,
                #5d9634,
                #5d9634 10px,
                #538c2b 10px,
                #538c2b 20px
        );

    }
    .wrap
    {
        width: 80%;
        margin:0 auto;
        padding: 50px 20px 150px;
        background:white;
    }
    h1,h2
    {
        color: #4CAF50;
    }
    label
    {
        width:130px;
        clear:left;
        text-align:left;
        padding-right:10px;
        padding-bottom:10px
    }
    input, label
    {
        float:left;
        margin-bottom: 10px;
    }
    #left
    {
        width: 50%;
    }
    #gender
    {
        width: 100%;
        float: left;
    }
    .box {
        width: 0%;
        margin: auto;
    }
    .btn
    {
        padding: 20px;
        margin: 20px;
        font-weight: 700;
        font-size: 20px;
        transition-duration: 0.4s;
        background-color: #4CAF50;
        color: white;
        border: 2px solid #4CAF50;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .btn:hover {
        background-color: white;
        color: black;
    }
    #bck
    {
        margin: 0;

    }
    input , textarea, #image
    {
        border: 2px solid #4CAF50;
    }
    input[type='text'] , textarea, #image
    {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    input[type='text']
    {
        padding: 5px;
    }
    input[type='checkbox']
    {
        margin-top: 5px;
    }
    label
    {
        padding: 10px;
    }
    input , textarea, #img_submit:focus{
        outline: none;
    }
    #img_submit
    {
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin-left: 10px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
        background-color: white;
        color: black;
        border: 2px solid #4CAF50;
        padding: 5px;
    }
    #img_submit:hover {
        background-color: #4CAF50;
        color: white;
    }

    .control-group {
        display: inline-block;
        text-align: left;
        vertical-align: top;
        background: #fff;
        box-shadow: 0 1px 2px rgba(0,0,0,.1);
    }
    .control {
        position: relative;
        display: block;
        padding-left: 30px;
        cursor: pointer;
        width: 120px;
    }

    .control input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }
    .control__indicator {
        position: absolute;
        top: 10px;
        left: 0;
        width: 20px;
        height: 20px;
        background: #e6e6e6;
        border: 2px solid #4CAF50;
    }

    .control--radio .control__indicator {
        border-radius: 50%;
    }

    .control:hover input ~ .control__indicator,
    .control input:focus ~ .control__indicator {
        background: #ccc;
    }

    .control input:checked ~ .control__indicator {
        background: #2aa1c0;
    }

    .control:hover input:not([disabled]):checked ~ .control__indicator,
    .control input:checked:focus ~ .control__indicator {
        background: #0e647d;
    }

    .control input:disabled ~ .control__indicator {
        pointer-events: none;
        opacity: .6;
        background: #e6e6e6;
    }

    .control__indicator:after {
        position: absolute;
        display: none;
        content: '';
    }

    .control input:checked ~ .control__indicator:after {
        display: block;
    }

    .control--checkbox .control__indicator:after {
        top: 4px;
        left: 8px;
        width: 3px;
        height: 8px;
        transform: rotate(45deg);
        border: solid #fff;
        border-width: 0 2px 2px 0;
    }

    .control--checkbox input:disabled ~ .control__indicator:after {
        border-color: #7b7b7b;
    }

    .control--radio .control__indicator:after {
        top: 7px;
        left: 7px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #fff;
    }


    .control--radio input:disabled ~ .control__indicator:after {
        background: #7b7b7b;
    }
</style>


<body>

<form method="Post">
    <div class="container">

        <div class="wrap">
            <div style="width: 50px; height: 50px;top: -20px;"><input class="btn" id="bck" type="submit" name="cancel" value="Back"></div>

            <h1 align="Center">Edit Profile</h1>
            <hr>

            <h2 align="left">  Basic  </h2>
            </br>
            <div align="center">

                <table style="width:100%">

                    <tr>
                        <td id="left">

                            <!-- Image url -->

                            <img id="image" src="<?php echo $imageUrl?>" image" width="150" height="150" />
                            <br><br>
                            <label> Image URL </label>
                            <input type="text" name="image_URL" value= "<?php echo $imageUrl ?>"/>
                            <button id="img_submit">View</button>
                        </td>
                        <td>
                            <label> Name </label>
                            <input type="text" name="name" value="<?php echo $name ?>" size="25" />

                            <label> Email </label>
                            <input type="text" name="email" value="<?php echo $email ?>" size="25" />


                            <label> Phone No. </label>
                            <input type="text" name="phone" value="<?php echo $phone ?>" size="25" />

                            <label> Address </label>
                            <input type="text" name="address" value= "<?php echo $address ?>" size="25" />
                            <div id="gender">
                                <table>
                                    <label> Gender</label>
                                    <tr>
                                        <td class="control-group">
                                            <label class="control control--radio"><input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked='checked'"; ?> >Male<div class="control__indicator"></div></label>
                                        </td>
                                        <td class="control-group" >
                                            <label class="control control--radio"><input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked='checked'"; ?> >Female<div class="control__indicator"></div></label>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>

                    </tr>
                </table>
            </div>

            <h2 align="left">Additional  </h2>
            </br>
            <div align="left">
                <table>
                    <tr>
                        <td>
                            <label> Bio </label>
                            <textarea name="bio" cols="27" rows="5"><?php echo $bio ?></textarea>
                            <br>
                        </td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <label> Currtent Status </label>
                        <td>
                            <input type="text" name="status" value="<?php echo $status ?>" size="25"/>
                        </td>
                    </tr>
                </table>
                <br>
                <table>
                    <label> Preferred Medium </label>
                    <tr>
                        <td class="control-group">
                            <label class="control control--radio"><input type="radio" name="medium" value="Bangla" <?php if($medium=="Bangla") echo "checked='checked'"; ?> >
                            <span> Bangla </span><div class="control__indicator"></div></label>
                        </td>
                        <td class="control-group">
                            <label class="control control--radio"><input type="radio" name="medium" value="English" <?php if($medium=="English") echo "checked='checked'"; ?> >
                            <span> English </span><div class="control__indicator"></div></label>
                        </td>
                        <td class="control-group">
                            <label class="control control--radio"><input type="radio" name="medium" value="Both" <?php if($medium=="Both") echo "checked='checked'"; ?> >
                            <span> Both </span><div class="control__indicator"></div></label>
                        </td>
                    </tr>
                </table>
                <br>
                <table style="width: auto">
                    <label style="width: auto">Preferred Locations </label>
                    <tr>
                        <?php
                        $locations=  GetAllLocations();
                        foreach ($locations as $location){
                        echo "<td  class='control-group'><label class='control control--checkbox'>$location[Location]<input type='checkbox' name='$location[Location]' value='$location[Location]'";?>
                        <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="$location[Location]"){ echo "checked='checked'"; break;}} ?>
                        <?php echo
                        "><div class='control__indicator'></div></label></td>";
                        }
                        ?>

                </table>
                <br>
                <table style="width: auto">
                    <label> Preferred Subject </label>
                    <tr>
                        <?php
                        $subjects=  GetAllSubjectNames();
                        foreach ($subjects as $s){
                            echo "<td  class='control-group'><label class='control control--checkbox'>$s[ExamName]<input type='checkbox' name=$s[ExamName] value=$s[ExamName]";?>
                            <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]==$s['ExamName']){ echo "checked='checked'"; break;}} ?>
                            <?php echo
                            "><div class='control__indicator'></div></label></td>";
                        }
                        ?>
                    </tr>
                </table>
                <br>
                <table style="width: auto">
                    <label> Preferred Classes </label>
                    <tr>
                    <?php
                        for ($j=1;$j<=12;$j++){
                        echo "<td  class='control-group'><label class='control control--checkbox'>class $j<input type='checkbox' name=$j value=$j";?>
                    <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]==$j){ echo "checked='checked'"; break;}} ?>
                    <?php echo
                    "><div class='control__indicator'>
                            </div></label>
                                        </td>";
                    }?>






                </table>
                <br>
                <table>
                    <label> Expected Salary </label>
                    <tr>
                        <td>
                            <input type="text" name="salary" value="<?php echo $salary ?> "size="20" /> <span> /hour </span>
                        </td>
                    <tr>
                </table>
            </div>
            <br>
            <br>
            <div class="box">
                <input class="btn" type="submit" value="Save">
            </div>
        </div>
    </div>
</form>
</body>
</html>