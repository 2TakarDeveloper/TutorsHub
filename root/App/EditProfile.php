<?php
/*session_start();
var_dump($_SESSION);
if(!isset($_SESSION["UserId"]))
{
    header("Location: ../index.php");
}*/
?>

<?php require_once("../service/data_access.php") ?>
<?php require_once("../service/TutorService.php") ?>
<?php require_once("../service/TutorInfoService.php") ?>
<?php require_once("../service/SearchInfoService.php") ?>


<?php


$c = ""; //calsses
$s = ""; //subjects
$a = ""; //areas


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
        width:100%;
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
        width: 50%;
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
                <table width="1000">
                    <label> Preferred Locations </label>
                    <tr>
                        <td  class="control-group"><label class="control control--checkbox">Adabor<input type="checkbox" name="Adabor" value="Adabor" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Adabor"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Badda<input type="checkbox" name="Badda" value="Badda" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Badda"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Dhanmondi<input type="checkbox" name="Dhanmondi" value="Dhanmondi" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Dhanmondi"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Gulshan<input type="checkbox" name="Gulshan" value="Gulshan" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Gulshan"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Kafrul<input type="checkbox" name="Kafrul" value="Kafrul" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Kafrul"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Kalabagan<input type="checkbox" name="Kalabagan" value="Kalabagan" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Kalabagan"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                    </tr>
                    <tr>
                        <td  class="control-group"><label class="control control--checkbox">Khilkhet<input type="checkbox" name="Khilkhet" value="Khilkhet" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Khilkhet"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Khilgaon<input type="checkbox" name="Khilgaon" value="Khilgaon" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Khilgaon"){ echo "checked='checked'"; break;}} ?>  ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Lalbagh<input type="checkbox" name="Lalbagh" value="Lalbagh" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Lalbagh"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Mirpur<input type="checkbox" name="Mirpur" value="Mirpur" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Mirpur"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Mohammadpur<input type="checkbox" name="Mohammadpur" value="Mohammadpur" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Mohammadpur"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">NewMarket<input type="checkbox" name="NewMarket" value="NewMarket" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="NewMarket"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                    </tr>
                    <tr>
                        <td  class="control-group"><label class="control control--checkbox">Pallabi<input type="checkbox" name="Pallabi" value="Pallabi" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Pallabi"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Ramna<input type="checkbox" name="Ramna" value="Ramna" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Ramna"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Paltan<input type="checkbox" name="Paltan" value="Paltan" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Paltan"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Shahbagh<input type="checkbox" name="Shahbagh" value="Shahbagh" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Shahbagh"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Tejgaon<input type="checkbox" name="Tejgaon" value="Tejgaon" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Tejgaon"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox">Uttara<input type="checkbox" name="Uttara" value="Uttara" <?php for($i=0;$i<sizeof($area);$i++){ if($area[$i]=="Uttara"){ echo "checked='checked'"; break;}} ?> ><div class="control__indicator"></div></label></td>
                    </tr>
                </table>
                <br>
                <table width="1000">
                    <label> Preferred Subject </label>
                    <tr>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Bangla" value="Bangla" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Bangla"){ echo "checked='checked'"; break;}} ?> >Bangla<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="English" value="English" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="English"){ echo "checked='checked'"; break;}} ?> >English<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Math" value="Math" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Math"){ echo "checked='checked'"; break;}} ?> >Math<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="ICT" value="ICT" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="ICT"){ echo "checked='checked'"; break;}} ?> >ICT<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="HigherMath" value="HigherMath"<?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="HigherMath"){ echo "checked='checked'"; break;}} ?> >Higher Math<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="SocialSciene" value="SocialScience" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="SocialScience"){ echo "checked='checked'"; break;}} ?> >Social Science<div class="control__indicator"></div></td>
                    </tr>
                    <tr>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Religion" value="Religion" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Religion"){ echo "checked='checked'"; break;}} ?> >Religion<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Physics" value="Physics" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Physics"){ echo "checked='checked'"; break;}} ?> >Physics<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Chemistry" value="Chemistry" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Chemistry"){ echo "checked='checked'"; break;}} ?> >Chemistry<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Biology" value="Biology" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Biology"){ echo "checked='checked'"; break;}} ?> >Biology<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="PhysicalExcercise" value="PhysicalExcercise" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="PhysicalExercise"){ echo "checked='checked'"; break;}} ?> >P. Excercise<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Career" value="Career" <?php for($i=0;$i<sizeof($subject);$i++){ if($subject[$i]=="Career"){ echo "checked='checked'"; break;}} ?> >Career<div class="control__indicator"></div></td>
                    </tr>
                </table>
                <br>
                <table width="1000">
                    <label> Preferred Classes </label>
                    <tr>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="1" value="1" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="1"){ echo "checked='checked'"; break;}} ?> >class 1<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="2" value="2" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="2"){ echo "checked='checked'"; break;}} ?> >class 2<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="3" value="3" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="3"){ echo "checked='checked'"; break;}} ?> >class 3<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="4" value="4" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="4"){ echo "checked='checked'"; break;}} ?> >class 4<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="5" value="5" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="5"){ echo "checked='checked'"; break;}} ?> >class 5<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="6" value="6" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="6"){ echo "checked='checked'"; break;}} ?> >class 6<div class="control__indicator"></div></td>
                    </tr>
                    <tr>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="8" value="8" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="8"){ echo "checked='checked'"; break;}} ?> >class 8<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="9" value="9" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="9"){ echo "checked='checked'"; break;}} ?> >class 9<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="10" value="10" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="10"){ echo "checked='checked'"; break;}} ?> >class 10<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="11" value="11" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="11"){ echo "checked='checked'"; break;}} ?> >class 11<div class="control__indicator"></div></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="12" value="12" <?php for($i=0;$i<sizeof($class);$i++){ if($class[$i]=="12"){ echo "checked='checked'"; break;}} ?> >class 12<div class="control__indicator"></div></td>
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
                <input class="btn" type="submit" name="cancel" value="Back">
                <input class="btn" type="submit">
            </div>
        </div>
    </div>
</form>
</body>
</html>