<?php require_once("../service/data_access.php") ?>
<?php require_once("../service/TutorService.php") ?>
<?php require_once("../service/TutorInfoService.php") ?>
<?php require_once("../service/SearchInfoService.php") ?>

<?php require_once("../service/PreferredLocationService.php") ?>
<?php require_once("../service/PreferredSubjectService.php") ?>

<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

     if(isset($_POST['confirm'])) {
         if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
             if ($pass == $cpass) {
                 $tutor['Email'] = $_POST['email'];
                 $tutor['Password'] = $_POST['password'];
                 $tutor['MemberSince'] = date_create('now')->format('Y-m-d');

                 //Set a method to sent back to home page if fail give error msg
                 if (NewTutor($tutor)) {

                     $id = GetTutorId($tutor['Email'], $tutor['Password']);

                     NewSearchInfo($id['Id']);
                     NewTutorInfo($id['Id']);
                     NewTutorPreferredLocations($id['Id']);
                     NewTutorPreferredSubjects($id['Id']);

                     header('Location:../index.php');
                     exit();
                 } else {
                     echo("Failed");
                 }
             }
         }
     }
}

?>
<style>
    body
    {
        font-family: sans-serif;
    //background-image: url("../bg.jpg");
    }
    tbody
    {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    table
    {
        border-spacing: 0px;
    }
    th
    {
        padding: 20px;
        color: white;
        background: linear-gradient(
                to bottom,
                #5d9634,
                #5d9634 50%,
                #538c2b 50%,
                #538c2b
        );
        background-size: 100% 20px;
    }
    input
    {
        border: 2px solid green;
    }
    input:focus{
        outline: none;
    }
    .left
    {
        background: green;
        padding:20px;
        color:#fff;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .right
    {
        padding: 20px;
        background: white;
    }
    button
    {
        padding:10px;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        color: green;
        border: 2px solid green;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        cursor: pointer;
    }
    button:hover {
        background-color: green;
        color: white;
    }
    #btn
    {
        padding:10px;
        background-color: green;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        color: white;
        border: 2px solid white;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        cursor: pointer;
    }
    #btn:hover {
        background-color: white;
        color: green;
        border: 2px solid green;
    }
</style>

<html>
<body>
<div class="wrap">

    <form method="post">

        <table  align="center" >
            <tr>
                <th colspan=4>
                    <center><font size=4><b>Registration Form</b>
                </th>
            </tr>

            <tr>
                <td class="left">Email</td><br/>
                <td class="right">
                    <input type="text" name="email" size="20" /><br />
                </td>
            </tr>

            <tr>
                <td class="left">Password
                </td><br/>
                <td class="right">
                    <input type="password" name="password" size="20" /><br />
                </td>
            </tr>

            <tr>
                <td class="left">Confirm Password
                </td><br/>
                <td class="right">
                    <input type="password" name="cpassword" size="20" /><br />
                </td>
            </tr>

            <tr>

                <td class="right"><button formaction="../index.php">Back to Home</button></td>

                <td align="center" style="background: green"><input id="btn" type="submit" name="confirm" value="Confirm" /></td>
            </tr>


        </table>
    </form>
</div>
</body>
</html>


