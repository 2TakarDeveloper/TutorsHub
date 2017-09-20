<?php require_once("../service/data_access.php") ?>
<?php require_once("../service/TutorService.php") ?>
<?php require_once("../service/TutorInfoService.php") ?>
<?php require_once("../service/SearchInfoService.php") ?>
<?php require_once("../service/ExamDataService.php") ?>

<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $p = $_POST['textpass'];
    $cpass = $_POST['cpassword'];


    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
    {
        if($p==$cpass)
        {
            $tutor['Email']=$_POST['email'];
            $tutor['textpass']=$_POST['textpass'];
            $tutor['MemberSince']=date_create('now')->format('Y-m-d');

            //Set a method to sent back to home page if fail give error msg
            if(NewTutor($tutor)){

                $id = GetTutorId($tutor['Email'], $tutor['textpass']);

                NewSearchInfo($id['Id']);
                NewTutorInfo($id['Id']);
                NewTutorExamData($id['Id']);

                $message = 'Your account has been created!';

                echo "<SCRIPT>
                    alert('$message');
                    window.location.replace('../index.php');
                    </SCRIPT>";







            }
            else{
                echo ("Failed");
            }
        }
    }
}

?>

<html>
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
        position: relative;
    }
    .wrap
    {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
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
        background: repeating-linear-gradient(
                -55deg,
                #222,
                #222 10px,
                #333 10px,
                #333 20px
        );
    }
    th
    {
        font-size: 20px;
    }
    input
    {
        border: 2px solid green;
        padding: 10px;
        font-size: large;
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
                <input type="password" name="textpass" size="20" /><br />
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


