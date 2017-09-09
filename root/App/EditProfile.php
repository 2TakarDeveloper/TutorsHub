<?php
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
//
$c=""; //calsses
$s=""; //subjects
$a=""; //areas
//
//-----------------------------------------------------
$tutor=getTutorbyId($_SESSION["UserId"]);
$name=$tutor['Name'];
$email=$tutor['Email'];
$imageUrl=$tutor['UserImage'];
//--------------------------------
//--------------------------------
$tutorSearchInfo=getSearchInfo($_SESSION['UserId']);
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
$tutorInfo=GetTutorInfo($_SESSION['UserId']);
$status=$tutorInfo['CurrentStatus'];
$bio=$tutorInfo['Bio'];
$phone=$tutorInfo['MobileNo'];
$address=$tutorInfo['Address'];
//---------------------------------------
?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
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
    if(isset($_POST["imageUrl"]))
    {
        $tutor['UserImage']=$_POST["imageUrl"];
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
    if(isset($_POST["1"]))
    {
        $c.="1,";
    }
    if(isset($_POST["2"]))
    {
        $c.="2,";
    }
    if(isset($_POST["3"]))
    {
        $c.="3,";
    }
    if(isset($_POST["4"]))
    {
        $c.="4,";
    }
    if(isset($_POST["5"]))
    {
        $c.="5,";
    }
    if(isset($_POST["6"]))
    {
        $c.="6,";
    }
    if(isset($_POST["7"]))
    {
        $c.="7,";
    }
    if(isset($_POST["8"]))
    {
        $c.="8,";
    }
    if(isset($_POST["9"]))
    {
        $c.="9,";
    }
    if(isset($_POST["10"]))
    {
        $c.="10,";
    }
    if(isset($_POST["11"]))
    {
        $c.="11,";
    }
    if(isset($_POST["12"]))
    {
        $c.= "12,";
    }
    $searchInfo['PreferredClasses']=substr_replace($c, "", -1);
    //areas
    if(isset($_POST["Adabor"]))
    {
        $a.="Adabor,";
    }
    if(isset($_POST["Badda"]))
    {
        $a.="Badda,";
    }
    if(isset($_POST["Dhanmondi"]))
    {
        $a.="Dhanmondi,";
    }
    if(isset($_POST["Gulshan"]))
    {
        $a.="Gulshan,";
    }
    if(isset($_POST["Kafrul"]))
    {
        $a.="Kafrul,";
    }
    if(isset($_POST["Kalabagan"]))
    {
        $a.="Kalabagan,";
    }
    if(isset($_POST["Khilkhet"]))
    {
        $a.="Khilkhet,";
    }
    if(isset($_POST["Khilgaon"]))
    {
        $a.="Khilgaon,";
    }
    if(isset($_POST["Lalbagh"]))
    {
        $a.="Lalbagh,";
    }
    if(isset($_POST["Mirpur"]))
    {
        $a.="Mirpur,";
    }
    if(isset($_POST["Mohammadpur"]))
    {
        $a.="Mohammadpur,";
    }
    if(isset($_POST["NewMarket"]))
    {
        $a.= "NewMarket,";
    }
    if(isset($_POST["Pallabi"]))
    {
        $a.="Pallabi,";
    }
    if(isset($_POST["Ramna"]))
    {
        $a.="Ramna,";
    }
    if(isset($_POST["Paltan"]))
    {
        $a.="Paltan,";
    }
    if(isset($_POST["Shahbagh"]))
    {
        $a.="Shahbagh,";
    }
    if(isset($_POST["Tejgaon"]))
    {
        $a.="Tejgaon,";
    }
    if(isset($_POST["Uttara"]))
    {
        $a.= "Uttara,";
    }
    $searchInfo['PreferredLocation']=substr_replace($a, "", -1);
    //subjects
    if(isset($_POST["Bangla"]))
    {
        $s.="Bangla,";
    }
    if(isset($_POST["English"]))
    {
        $s.="English,";
    }
    if(isset($_POST["Math"]))
    {
        $s.="Math,";
    }
    if(isset($_POST["ICT"]))
    {
        $s.="ICT,";
    }
    if(isset($_POST["HigherMath"]))
    {
        $s.="HigherMath,";
    }
    if(isset($_POST["SocialScience"]))
    {
        $s.="SocialScience,";
    }
    if(isset($_POST["Religion"]))
    {
        $s.="Religion,";
    }
    if(isset($_POST["Physics"]))
    {
        $s.="Physics,";
    }
    if(isset($_POST["Chemistry"]))
    {
        $s.="Chemistry,";
    }
    if(isset($_POST["Biology"]))
    {
        $s.="Biology,";
    }
    if(isset($_POST["PhysicalExcercise"]))
    {
        $s.="PhysicalExcercise,";
    }
    if(isset($_POST["Career"]))
    {
        $s.= "Career,";
    }
    $searchInfo['PreferredSubjects']=substr_replace($s, "", -1);
    UpdateSearchInfo($searchInfo,$_SESSION['UserId']);
}
?>



<html>
<style>
    .container
    {
        width:100%;
        margin-left:5%;
        margin-right:5%;
    }
    .wrap
    {
        width: 90%;
    <!--overflow:auto;-->
        position: absolute;
        float: center;
        background:white;
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
    }
    .box {
        position:relative;
    }
    .btn {
        position:absolute;
        bottom:0;
        right:0;
        font-size: 16px;
    }
    .btn2 {
        position:absolute;
        bottom:0;
        right:80;
        font-size: 16px;
    }
</style>

<script type="text/javascript">
    function viewImage()
    {
        var newImageSrc=document.getElementById('image_url').value;
        document.getElementById('image').src=newImageSrc;
        return false;
    }
</script>


<body>

<form>
    <div class="container">

        <div class="wrap">

            <h1 align="Center">Edit Profile</h1>
            <hr>

            <h4 align="left"> <u> Basic </u> </h4>
            </br>
            <div align="center">

                <table style="width:100%">

                    <tr>
                        <td>
                            <label> Name </label>
                            <input type="text" name="name" value="<?php echo $name ?>" size="25" />

                            <label> Email </label>
                            <input type="text" name="email" value="<?php echo $email ?>" size="25" />


                            <label> Phone No. </label>
                            <input type="text" name="phone" value="<?php echo $phone ?>" size="25" />

                            <label> Address </label>
                            <input type="text" name="address" value= "<?php echo $address ?>" size="25" />
                        </td>

                        <td>

                            <!-- Image url -->

                            <img id="image" src="<?php echo $imageUrl ?>" image" width="150" height="150" />
                            <br><br>
                            <label> Image URL </label><input type="text" id="image_url" value=<?php echo $imageUrl ?>>
                            <button id="clickme" onclick=" return viewImage()" >View</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table>
                    <label> Gender</label>
                    <tr>
                        <td>
                            <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked='checked'"; ?> >
                            Male
                        </td>
                        <td>
                            <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked='checked'"; ?> >
                            Female
                        </td>
                    </tr>
                </table>
            </div>
            <h4 align="left"> <u> Additional </u> </h4>
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
                        <td>
                            <input type="radio" name="medium" value="Bangla" <?php if($medium=="Bangla") echo "checked='checked'"; ?> >
                            <span> Bangla </span>
                        </td>
                        <td>
                            <input type="radio" name="medium" value="English" <?php if($medium=="English") echo "checked='checked'"; ?> >
                            <span> English </span>
                        </td>
                        <td>
                            <input type="radio" name="medium" value="Both" <?php if($medium=="Both") echo "checked='checked'"; ?> >
                            <span> Both </span>
                        </td>
                    </tr>
                </table>
                <br>
                <table width="1000">
                    <label> Preferred Locations </label>
                    <tr>
                        <td><input type="checkbox" name="Adabor" value="Adabor" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Adabor"){ echo "checked='checked'"; break;}} ?> >Adabor</td>
                        <td><input type="checkbox" name="Badda" value="Badda" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Badda"){ echo "checked='checked'"; break;}} ?> >Badda</td>
                        <td><input type="checkbox" name="Dhanmondi" value="Dhanmondi" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Dhanmondi"){ echo "checked='checked'"; break;}} ?> >Dhanmondi</td>
                        <td><input type="checkbox" name="Gulshan" value="Gulshan" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Gulshan"){ echo "checked='checked'"; break;}} ?> >Gulshan</td>
                        <td><input type="checkbox" name="Kafrul" value="Kafrul" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Kafrul"){ echo "checked='checked'"; break;}} ?> >Kafrul</td>
                        <td><input type="checkbox" name="Kalabagan" value="Kalabagan" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Kalabagan"){ echo "checked='checked'"; break;}} ?> >Kalabagan</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="Khilkhet" value="Khilkhet" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Khilkhet"){ echo "checked='checked'"; break;}} ?> >Khilkhet</td>
                        <td><input type="checkbox" name="Khilgaon" value="Khilgaon" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Khilgaon"){ echo "checked='checked'"; break;}} ?> >Khilgaon</td>
                        <td><input type="checkbox" name="Lalbagh" value="Lalbagh" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Lalbagh"){ echo "checked='checked'"; break;}} ?> >Lalbagh</td>
                        <td><input type="checkbox" name="Mirpur" value="Mirpur" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Mirpur"){ echo "checked='checked'"; break;}} ?> >Mirpur</td>
                        <td><input type="checkbox" name="Mohammadpur" value="Mohammadpur" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Mohammadpur"){ echo "checked='checked'"; break;}} ?> >Mohammadpur</td>
                        <td><input type="checkbox" name="NewMarket" value="NewMarket" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="NewMarket"){ echo "checked='checked'"; break;}} ?> >New Market</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="Pallabi" value="Pallabi" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Pallabi"){ echo "checked='checked'"; break;}} ?> >Pallabi</td>
                        <td><input type="checkbox" name="Ramna" value="Ramna" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Ramna"){ echo "checked='checked'"; break;}} ?> >Ramna</td>
                        <td><input type="checkbox" name="Paltan" value="Paltan" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Paltan"){ echo "checked='checked'"; break;}} ?> >Paltan</td>
                        <td><input type="checkbox" name="Shahbagh" value="Shahbagh" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Shahbagh"){ echo "checked='checked'"; break;}} ?> >Shahbagh</td>
                        <td><input type="checkbox" name="Tejgaon" value="Tejgaon" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Tejgaon"){ echo "checked='checked'"; break;}} ?> >Tejgaon</td>
                        <td><input type="checkbox" name="Uttara" value="Uttara" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Uttara"){ echo "checked='checked'"; break;}} ?> >Uttara</td>
                    </tr>
                </table>
                <br>
                <table width="1000">
                    <label> Preferred Subject </label>
                    <tr>
                        <td><input type="checkbox" name="Bangla" value="Bangla" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Bangla"){ echo "checked='checked'"; break;}} ?> >Bangla</td>
                        <td><input type="checkbox" name="English" value="English" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="English"){ echo "checked='checked'"; break;}} ?> >English</td>
                        <td><input type="checkbox" name="Math" value="Math" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Math"){ echo "checked='checked'"; break;}} ?> >Math</td>
                        <td><input type="checkbox" name="ICT" value="ICT" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="ICT"){ echo "checked='checked'"; break;}} ?> >ICT</td>
                        <td><input type="checkbox" name="HigherMath" value="HigherMath"<?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="HigherMath"){ echo "checked='checked'"; break;}} ?> >Higher Math</td>
                        <td><input type="checkbox" name="SocialSciene" value="SocialScience" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="SocialScience"){ echo "checked='checked'"; break;}} ?> >Social Science</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="Religion" value="Religion" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Religion"){ echo "checked='checked'"; break;}} ?> >Religion</td>
                        <td><input type="checkbox" name="Physics" value="Physics" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Physics"){ echo "checked='checked'"; break;}} ?> >Physics</td>
                        <td><input type="checkbox" name="Chemistry" value="Chemistry" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Chemistry"){ echo "checked='checked'"; break;}} ?> >Chemistry</td>
                        <td><input type="checkbox" name="Biology" value="Biology" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Biology"){ echo "checked='checked'"; break;}} ?> >Biology</td>
                        <td><input type="checkbox" name="PhysicalExcercise" value="PhysicalExcercise" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="PhysicalExercise"){ echo "checked='checked'"; break;}} ?> >Physical Excercise</td>
                        <td><input type="checkbox" name="Career" value="Career" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Career"){ echo "checked='checked'"; break;}} ?> >Career</td>
                    </tr>
                </table>
                <br>
                <table width="1000">
                    <label> Preferred Classes </label>
                    <tr>
                        <td><input type="checkbox" name="1" value="1" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="1"){ echo "checked='checked'"; break;}} ?> >class 1</td>
                        <td><input type="checkbox" name="2" value="2" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="2"){ echo "checked='checked'"; break;}} ?> >class 2</td>
                        <td><input type="checkbox" name="3" value="3" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="3"){ echo "checked='checked'"; break;}} ?> >class 3</td>
                        <td><input type="checkbox" name="4" value="4" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="4"){ echo "checked='checked'"; break;}} ?> >class 4</td>
                        <td><input type="checkbox" name="5" value="5" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="5"){ echo "checked='checked'"; break;}} ?> >class 5</td>
                        <td><input type="checkbox" name="6" value="6" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="6"){ echo "checked='checked'"; break;}} ?> >class 6</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="7" value="7" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="7"){ echo "checked='checked'"; break;}} ?> >class 7</td>
                        <td><input type="checkbox" name="8" value="8" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="8"){ echo "checked='checked'"; break;}} ?> >class 8</td>
                        <td><input type="checkbox" name="9" value="9" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="9"){ echo "checked='checked'"; break;}} ?> >class 9</td>
                        <td><input type="checkbox" name="10" value="10" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="10"){ echo "checked='checked'"; break;}} ?> >class 10</td>
                        <td><input type="checkbox" name="11" value="11" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="11"){ echo "checked='checked'"; break;}} ?> >class 11</td>
                        <td><input type="checkbox" name="12" value="12" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="12"){ echo "checked='checked'"; break;}} ?> >class 12</td>
                    </tr>
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
                <input class="btn2" type="submit" name="cancel" value="Back">
                <input class="btn" type="submit">
            </div>
        </div>
    </div>
</form>
</body>
</html>