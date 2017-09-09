<?php


session_start();

var_dump($_SESSION);

if(!isset($_SESSION["UserId"]))
{
    header("Location: ../index.php");
}

$imageUrl="https://www.gapyear.com/member_images/default_set/no-image.gif";


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
    }
</script>


<body>


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
                        <input type="text" name="name" size="25" />

                        <label> Email </label>
                        <input type="text" name="email" size="25" />


                        <label> Phone No. </label>
                        <input type="text" name="phnNo" size="25" />

                        <label> Address </label>
                        <input type="text" name="address" size="25" />
                    </td>

                    <td>

                        <!-- Image url -->

                        <img id="image" src="<?php echo $imageUrl ?>" image" width="150" height="150" />
                        <br><br>
                        <label> Image URL </label><input type="text" id="image_url">
                        <button id="clickme" onclick="viewImage()" >View</button>


                    </td>
                </tr>


            </table>



        </div>
        <div>
            <table>

                <label> Gender</label>

                <tr>

                    <td>
                        <input type="radio" name="gender" value="male">
                        Male
                    </td>
                    <td>
                        <input type="radio" name="gender" value="female">
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
                        <input  style="height:150px;" type="text" name="bio" size="25" />
                        <br>

                    </td>

                </tr>

            </table>
            <br>
            <table>

                <tr>


                    <label> Currtent Status </label>

                    <td>
                        <input type="text" name="currentStatus" size="25"/>

                    </td>

                </tr>

            </table>

            <br>
            <table>

                <label> Preferred Medium </label>
                <tr>




                    <td>
                        <input type="radio" name="medium" value="bangla">


                        <span> Bangla </span>
                    </td>
                    <td>
                        <input type="radio" name="medium" value="english">
                        <span> English </span>
                    </td>
                    <td>
                        <input type="radio" name="medium" value="both">
                        <span> Both </span>
                    </td>


                </tr>

            </table>
            <br>

            <table width="1000">



                <label> Preferred Locations </label>




                <tr>
                    <td><input type="checkbox" name="adabor" value="adabor">Adabor</td>
                    <td><input type="checkbox" name="badda" value="badda">Badda</td>
                    <td><input type="checkbox" name="dhanmondi" value="dhanmondi">Dhanmondi</td>
                    <td><input type="checkbox" name="gulshan" value="gulshan">Gulshan</td>
                    <td><input type="checkbox" name="kafrul" value="kafrul">Kafrul</td>
                    <td><input type="checkbox" name="kalabagan" value="kalabagan">Kalabagan</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="khilkhet" value="khilkhet">Khilkhet</td>
                    <td><input type="checkbox" name="khilgaon" value="khilgaon">Khilgaon</td>
                    <td><input type="checkbox" name="lalbagh" value="lalbagh">Lalbagh</td>
                    <td><input type="checkbox" name="mirpur" value="mirpur">Mirpur</td>
                    <td><input type="checkbox" name="mohammadpur" value="mohammadpur">Mohammadpur</td>
                    <td><input type="checkbox" name="newmarket" value="newmarket">New Market</td>

                </tr>
                <tr>
                    <td><input type="checkbox" name="pallabi" value="pallabi">Pallabi</td>
                    <td><input type="checkbox" name="ramna" value="ramna">Ramna</td>
                    <td><input type="checkbox" name="paltan" value="paltan">Paltan</td>
                    <td><input type="checkbox" name="shahbagh" value="shahbagh">Shahbagh</td>
                    <td><input type="checkbox" name="tejgaon" value="tejgaon">Tejgaon</td>
                    <td><input type="checkbox" name="uttara" value="uttara">Uttara</td>

                </tr>



            </table>

            <br>
            <table width="1000">



                <label> Preferred Subject </label>




                <tr>
                    <td><input type="checkbox" name="bangla" value="bangla">Bangla</td>
                    <td><input type="checkbox" name="english" value="english">English</td>
                    <td><input type="checkbox" name="math" value="math">Math</td>
                    <td><input type="checkbox" name="ict" value="ict">ICT</td>
                    <td><input type="checkbox" name="highermath" value="bangla">Higher Math</td>
                    <td><input type="checkbox" name="socialSciene" value="math">Social Science</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="religion" value="ict">Religion</td>
                    <td><input type="checkbox" name="physics" value="bangla">Physics</td>
                    <td><input type="checkbox" name="chemistry" value="ict">Chemistry</td>
                    <td><input type="checkbox" name="biology" value="bangla">Biology</td>
                    <td><input type="checkbox" name="physicalExcercise" value="bangla">Physical Excercise</td>
                    <td><input type="checkbox" name="career" value="bangla">Career</td>

                </tr>

            </table>


            <br>


            <table width="1000">



                <label> Preferred Classes </label>




                <tr>
                    <td><input type="checkbox" name="1" value="1">class 1</td>
                    <td><input type="checkbox" name="2" value="2">class 2</td>
                    <td><input type="checkbox" name="3" value="3">class 3</td>
                    <td><input type="checkbox" name="4" value="4">class 4</td>
                    <td><input type="checkbox" name="5" value="5">class 5</td>
                    <td><input type="checkbox" name="6" value="6">class 6</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="7" value="7">class 7</td>
                    <td><input type="checkbox" name="8" value="8">class 8</td>
                    <td><input type="checkbox" name="9" value="9">class 9</td>
                    <td><input type="checkbox" name="10" value="10">class 10</td>
                    <td><input type="checkbox" name="11" value="11">class 11</td>
                    <td><input type="checkbox" name="12" value="12">class 12</td>

                </tr>



            </table>
            <br>
            <table>



                <label> Expected Salary </label>

                <tr>

                    <td>
                        <input type="text" name="gpa" size="20" /> <span> /hour </span>
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


</body>

</html>