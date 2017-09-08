<?php
// Start the session
session_start();
?>


<?php
require_once("./service/data_access.php");
require_once "./service/TutorService.php";


?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{

    if(ValidTutor($_POST['email'],$_POST['password']))
    {
        header("Location: ./App/TutorDashBoard.php");
    }

}

?>


<html>

<body>
<head>
    <style>
        .pp
        {
            padding-left: 25px;
            padding-top: 10px;
        }
        .button
        {
            padding: 12px 180px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="pp">  <h1>tutorsHUB</h1> </div>



    <div align="right">
        <table>
            <tr>
                <td>
                    Email<br/><input type="text" name="email" size="20"  />
                </td>

                <td>
                    Password<br/><input type="password" name="password" size="20" />
                </td>

                <td>
                    <br/>
                    <button>Log in</button>

                </td>


            </tr>
            <tr>
                <td></td>
                <td align="center">
                    <a href="./App/Registration.php">not registered yet</a>
                </td>
            </tr>


        </table>




    </div>
    <hr>
    <br/>
    <br/>
    <br/>
    <br/>

    <div align="center">
        <button class="button" type="submit" formaction="./App/SearchResult.php">Search</button>
    </div>
    <br/>


    <div align="center">
        <select>
            <option value="Mirpur"  style="width: 130">Mirpur</option>
            <option value="Uttara"  style="width: 130">Uttara</option>
            <option value="Dhanmondi"  style="width: 130">Dhanmondi</option>

        </select>

        <select>
            <option value="Male"  style="width: 130">Male</option>
            <option value="Female"  style="width: 130">Female</option>
            <option value="Any"  style="width: 130">Any</option>

        </select>

        <select>
            <option value="one"  style="width: 130">Class 1</option>
            <option value="two"  style="width: 130">Class 2</option>
            <option value="three"  style="width: 130">Class 3</option>
            <option value="four"  style="width: 130">Class 4</option>
            <option value="five"  style="width: 130">Class 5</option>
            <option value="six"  style="width: 130">Class 6</option>
            <option value="seven"  style="width: 130">Class 7</option>
            <option value="eight"  style="width: 130">Class 8</option>
            <option value="nine"  style="width: 130">Class 9</option>
            <option value="ten"  style="width: 130">Class 10</option>
            <option value="eleven"  style="width: 130">Class 11</option>
            <option value="twelve"  style="width: 130">Class 12</option>

        </select>

        <label>Salary</label>  min<input type="text" name="min" size="5"  />-
        <input type="text" name="max" size="5"  />max


    </div>



    <div align="center">
        <ul>
            <table>
                <tr>
                    <td>Subjects:</td>
                </tr>


                <tr>
                    <td><input type="checkbox" name="bangla" value="bangla">Bangla</td>
                    <td><input type="checkbox" name="english" value="english">English</td>
                    <td><input type="checkbox" name="math" value="math">Math</td>
                    <td><input type="checkbox" name="ict" value="ict">ICT</td>

                </tr>


                <tr>
                    <td><input type="checkbox" name="religion" value="religion">Religion</td>
                    <td><input type="checkbox" name="physics" value="physics">Physics</td>
                    <td><input type="checkbox" name="chemistry" value="chemistry">Chemistry</td>
                    <td><input type="checkbox" name="biology" value="biology">Biology	</td>

                </tr>

                <tr>
                    <td><input type="checkbox" name="science" value="science">Social Science</td>
                    <td><input type="checkbox" name="higherMath" value="higherMath">Higher Math</td>
                    <td><input type="checkbox" name="career" value="career">Career</td>
                    <td><input type="checkbox" name="physical" value="physical">Physical Exercise	</td>

                </tr>

            </table>

        </ul>

    </div>



</form>
</body>

</html>

