<?php
// Start the session
session_start();
?>


<?php
include_once("./service/data_access.php");
include_once ("./service/TutorService.php");
include_once ("./service/TutorInfoService.php");
include_once ("./service/SearchInfoService.php");
include_once ("./service/SearchingService.php");
include_once ("./service/ExamDataService.php");
include_once ("./service/LocationService.php");

?>



<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['SearchButton'])){

        $location=$_POST['location'];
        $sex=$_POST['sex'];
        $class=$_POST['class'];


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


        $r=GetTutorShortInfo($location,$sex,$class,$min,$max,$subjects,'Bangla');
        $_SESSION["SearchResults"]=$r;

        header("Location:./App/SearchResult.php");


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

        </header>

        <div align="center">
            <button name="SearchButton" class="button" type="submit"><span>Search</span></button>
        </div>
        <br/>


        <div align="center">
            <select name="location">

                <?php
                $locations=  GetAllLocations();
                foreach ($locations as $location){
                    echo "<option value=$location[Location]>$location[Location]</option>";
                }


                ?>



            </select>

            <select name="sex">
                <option value="Male"  style="width: 130">Male</option>
                <option value="Female"  style="width: 130">Female</option>
                <option value="Any"  style="width: 130">Any</option>

            </select>

            <select name="class">
                <?php

                for($i=1;$i<=12;$i++){
                    echo "<option value= $i style='width: 130px'>Class $i</option>";
                }
                ?>

            </select>
            <div class="salary">
                <label>Salary</label>  min<input type="text" name="min" size="5" value="3000" />-
                <input type="text" name="max" size="5"  value="10000"/>max
            </div>



        </div>



        <div align="center">
            <ul>
                <table style="padding-left: 13%">
                    <tr>
                        <td>Subjects:</td>
                    </tr>
                    <?php
                      $subjects = GetAllSubjectNames();//Later make table of  subjects and service class
                      foreach ($subjects as $subject){
                          echo "<td  class='control-group'><label class='control control--checkbox'><input type='checkbox' name=$subject[ExamName] value=$subject[ExamName]>$subject[ExamName]<div class='control__indicator'></div></label></td>";
                      }
                    ?>
                </table>

            </ul>

        </div>



    </form>
</body>

</html>



