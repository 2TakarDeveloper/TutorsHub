<?php
// Start the session
session_start();
?>


<?php
include_once("./service/data_access.php");
include_once ("./service/TutorService.php");
include_once ("./service/TutorInfoService.php");
include_once ("./service/SearchingService.php");


?>



<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['SearchButton'])){

        //$location=$_POST['location'];
        //$sex=$_POST['sex'];
        //$class=$_POST['class'];
        $min=$_POST['min'];
        $max=$_POST['max'];

        $subjects="";

        if(isset($_POST['Bangla']))
            $subjects.="Bangla|";
        if(isset($_POST['English']))
            $subjects.="English|";
        if(isset($_POST['Math']))
            $subjects.="Math|";
        if(isset($_POST['ICT']))
            $subjects.="ICT|";
        if(isset($_POST['Religion']))
            $subjects.="Religion|";
        if(isset($_POST['Physics']))
            $subjects.="Physics|";
        if(isset($_POST['Chemistry']))
            $subjects.="Chemistry|";
        if(isset($_POST['Biology']))
            $subjects.="Biology|";
        if(isset($_POST['SocialScience']))
            $subjects.="SocialScience|";
        if(isset($_POST['HigherMath']))
            $subjects.="HigherMath|";
        if(isset($_POST['Career']))
            $subjects.="Career|";
        if(isset($_POST['PhysicalExercise']))
            $subjects.="PhysicalExercise|";

        $subjects=substr_replace($subjects, "", -1);


        $r=GetTutorShortInfo('Mirpur','Male','11',$min,$max,$subjects,'Bangla');

        var_dump($r);

    }


    if(isset($_POST['LogInButton'])){
        if(ValidTutor($_POST['email'],$_POST['textpass']))
        {
            $lastLogin=date_create('now')->format('Y-m-d H:i:s');
            UpdateLastLogin($_SESSION['UserId'],$lastLogin);

            header("Location: ./App/TutorDashBoard.php");

        }
    }




}

?>


<html>
<head>
    <style>
        body
        {
            font-family: sans-serif;
            background: repeating-linear-gradient(
                    -55deg,
                    #5d9634,
                    #5d9634 10px,
                    #538c2b 10px,
                    #538c2b 20px
            );
            margin: 0;
        }
        form
        {
            margin: 0;
            background: #ffffff;
            width: 85%;
            margin: auto;
            padding: 30px;
            min-height: 93%;
        }
        header
        {
            margin: auto;
        }
        td
        {
            margin-bottom: 10px;
            padding: 10px;
        }
        input, select
        {
            border: 2px solid #4CAF50;
            padding: 5px;
            margin: 10px;
        }
        input, select:focus{
            outline: none;
        }
        select,option
        {
            font-weight: 700;
            margin-left: 10px;
        }

        #loginbtn
        {
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-left: 10px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
            background-color: white;
            color: #4CAF50;
            border: 2px solid #4CAF50;
            padding: 5px;
        }
        #loginbtn:hover {
            background-color: #4CAF50;
            color: white;
        }
        .salary{
            font-weight: 700;
            display: inline-block;
        }
        .pp
        {
            padding-left: 25px;
            padding-top: 10px;
        }
        .button
        {
            width: 55%;
            padding: 30px;
            text-align: center;
            font-size: 30px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #f4511e;
            color: #ffffff;
            font-weight: 700;
            transition: all 0.5s;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            border: none;
        }
        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
        .button:active
        {
            transform: translateY(4px);
        }
        .button:focus
        {
            outline: none;
        }

        a
        {
            text-decoration: none;
            font-weight: 700;
        }
        a:hover
        {
            color:#f4511e;
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
            width: 150px;
            font-weight: 700;
            color: #4CAF50;
        }

        .control input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }
        .control__indicator {
            position: absolute;
            top: 0px;
            left: 0;
            width: 20px;
            height: 20px;
            background: #e6e6e6;
            border: 2px solid #4CAF50;
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
    </style>
</head>
<body>
    <form method="post">
        <header>
            <div class="pp">  <h1>tutorsHUB</h1> </div>
            <div align="right">
                <table>
                    <tr>
                        <td>
                            Email<br/><input style="margin: 0" type="text" name="email" size="20"  />
                        </td>

                        <td>
                            Password<br/><input style="margin: 0" type="password" name="textpass" size="20" />
                        </td>

                        <td>
                            <br/>
                            <button id="loginbtn" name="LogInButton">Log in</button>

                        </td>


                    </tr>
                    <tr>
                        <td></td>
                        <td align="center">
                            <a href="./App/Registration.php">not registered yet?</a>
                        </td>
                    </tr>
                </table>
            </div>
            <hr>
            <br/>
            <br/>
            <br/>
            <br/>
        </header>

        <div align="center">
            <button name="SearchButton" class="button" type="submit"><span>Search</span></button>
        </div>
        <br/>


        <div align="center">
            <select>
                <option name="location" value="Mirpur"  style="width: 130">Mirpur</option>
                <option name="location" value="Uttara"  style="width: 130">Uttara</option>
                <option name="location" value="Dhanmondi"  style="width: 130">Dhanmondi</option>

            </select>

            <select>
                <option name="sex" value="Male"  style="width: 130">Male</option>
                <option name="sex" value="Female"  style="width: 130">Female</option>
                <option name="sex" value="Any"  style="width: 130">Any</option>

            </select>

            <select>
                <option name="class" value="1"  style="width: 130">Class 1</option>
                <option name="class" value="2"  style="width: 130">Class 2</option>
                <option name="class" value="3"  style="width: 130">Class 3</option>
                <option name="class" value="4"  style="width: 130">Class 4</option>
                <option name="class" value="5"  style="width: 130">Class 5</option>
                <option name="class" value="6"  style="width: 130">Class 6</option>
                <option name="class" value="7"  style="width: 130">Class 7</option>
                <option name="class"  value="8"  style="width: 130">Class 8</option>
                <option name="class" value="9"  style="width: 130">Class 9</option>
                <option name="class" value="10"  style="width: 130">Class 10</option>
                <option name="class" value="11"  style="width: 130">Class 11</option>
                <option name="class" value="12"  style="width: 130">Class 12</option>

            </select>
            <div class="salary">
                <label>Salary</label>  min<input type="text" name="min" size="5"  />-
                <input type="text" name="max" size="5"  />max
            </div>



        </div>



        <div align="center">
            <ul>
                <table>
                    <tr>
                        <td>Subjects:</td>
                    </tr>


                    <tr>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Bangla" value="bangla">Bangla<div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="English" value="english">English<div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Math" value="math">Math<div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="ICT" value="ict">ICT<div class="control__indicator"></div></label></td>

                    </tr>


                    <tr>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Religion" value="religion">Religion<div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="physics" value="physics">Physics<div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Chemistry" value="chemistry">Chemistry<div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="Biology" value="biology">Biology<div class="control__indicator"></div></label></td>

                    </tr>

                    <tr>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="SocialScience" value="science">Social Science<div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="HigherMath" value="higherMath">Higher Math<div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="career" value="career">Career<div class="control__indicator"></div></label></td>
                        <td  class="control-group"><label class="control control--checkbox"><input type="checkbox" name="PhysicalExercise" value="physical">Physical Exercise<div class="control__indicator"></div></label></td>

                    </tr>

                </table>

            </ul>

        </div>



    </form>
</body>

</html>



