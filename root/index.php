<?php
$name="Samiul Haque Shovon";
$id=15291721;
$status="Last year Student @AIUB";
$bio="Beside doing my study I also do some tutions. I already give tution to many students. I do tution with great 
						care and can deal with my responsibilty!";

$phone="01758135197";
$mail="s.h.shovon@gmail.com";
$address="Rajshahi, Bangladesh";
$salary=5000;
$currStatus="Available";
$day=4;
$place="Home Visit";
$medium="Bangla";
$class="VII,VIII,IX,X,XI,XII";
$subject="Sciene, Math, English";
$area="Mirpur,Mohammadpur,Dhanmondi";

$log="00:09:45";
$activation="04-August-2013";
$rating=5;

$qualification1="BSc";
$qualification2="HSC";
$qualification3="SSC";

$school1="AIUB";
$school2="Rajshahi Govt. City College";
$school3="Govt. Laboratory High School";

$year1=2018;
$year2=2013;
$year3=2011;

$grade1=3.96;
$grade2=5.0;
$grade3=5.0;

$dept1="CSE";
$dept2="Science";
$dept3="Science";



?>

<html>
<style>

    .container
    {
        width:100%;
        margin-left:12.5%;
        margin-right:12.5%;

    }

    .wrap
    {
        width: 75%;
    <!--overflow:auto;-->
        position: absolute;
        float: center;
        background:lightgray;
        height:1000px;
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


    #one td {
        border: .5px solid lightgray;
        padding: 5px;
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
                <tr>
                    <td>
                        <img src="a.jpg"  style="width:200px;height:230px;">
                    </td>

                    <td>
                        <h1 style="margin-top:-30px">  <?php echo $name; ?> </h1>
                        <p style="margin-top: 2px"> <b> ID #<?php echo $id; ?> </b>
                        </p>
                        <p> <b>Current Status: </b> <?php echo $status; ?>  </p>
                        <p> <?php echo $bio; ?> </p>
                    </td>

                </tr>

                <td  colspan="2">
                    <p style="margin-top:-20px"> <br> <img src="call.png"  style="width:20px;height:20px;"> +88<?php echo $phone; ?> <img src="email.jpg"  style="width:20px;height:20px;"> <?php echo $mail; ?><img src="add.png"  style="width:20px;height:20px;"> <?php echo $address; ?> </P>
                </td>

            </table>

            <table cellspacing="10">

                <td colspan="2">

                    <table border=10>

                        <h2>
                            Educational Qualification
                        </h2>
                        <br>
                        <tr>
                            <th style="text-align:center">Qualification</th>
                            <th style="text-align:center">School/College/University</th>
                            <th style="text-align:center">Year of passing</th>
                            <th style="text-align:center">Grade</th>
                            <th style="text-align:center">Group/Subject</th>


                        </tr>

                        <tr>
                            <td style="text-align:center"><?php echo $qualification1; ?></td>
                            <td style="text-align:center"><?php echo $school1; ?></td>
                            <td style="text-align:center"><?php echo $year1; ?></td>
                            <td style="text-align:center"><?php echo $grade1; ?></td>
                            <td style="text-align:center"><?php echo $dept1; ?></td>


                        </tr>

                        <tr>
                            <td style="text-align:center"><?php echo $qualification2; ?></td>
                            <td style="text-align:center"><?php echo $school2; ?></td>
                            <td style="text-align:center"><?php echo $year2; ?></td>
                            <td style="text-align:center"><?php echo $grade2; ?></td>
                            <td style="text-align:center"><?php echo $dept2; ?></td>


                        </tr>

                        <tr>
                            <td style="text-align:center"><?php echo $qualification3; ?></td>
                            <td style="text-align:center"><?php echo $school3; ?></td>
                            <td style="text-align:center"><?php echo $year3; ?></td>
                            <td style="text-align:center"><?php echo $grade3; ?></td>
                            <td style="text-align:center"><?php echo $dept3; ?></td>



                        </tr>

                        </td colspan="2">

                    </table>

            </table>


            <table cellspacing="10">


                <td>
                    <h1>
                        Tution Info
                    </h1>


                    <table id="one">
                        <tr >
                            <td style="width:150px">
                                Expected Salary:
                            </td>

                            <td>
                                <?php echo $salary; ?>tk
                            </td>

                        </tr>

                        <tr>
                            <td >
                                Current Status:
                            </td>

                            <td>
                                <?php echo $currStatus; ?>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                Days Per Week:
                            </td>

                            <td>
                                <?php echo $day; ?> days
                            </td>

                        </tr>

                        <tr>
                            <td>
                                Place of learning:
                            </td>

                            <td>
                                <?php echo $place; ?>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                Preferred Medium:
                            </td>

                            <td>
                                <?php echo $medium; ?>
                            </td>
                        </tr>

                        <tr>
                            <td >
                                Preferred Classes:
                            </td>

                            <td>
                                <?php echo $class; ?>
                            </td>
                        </tr>

                        <tr>
                            <td >
                                Preferred Subjects:
                            </td>

                            <td>
                                <?php echo $subject; ?>
                            </td>
                        </tr>

                        <tr>
                            <td >
                                Preferred Area:
                            </td>

                            <td>
                                <?php echo $area; ?>
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

            <table cellspacing="10">


                <td colspan="2">


                    <h2> Rating </h2>




                </td>

                <td colspan="2">

                    <h2> <?php echo $rating; ?> </h2>	<br>
                    <font size="6"> <?php for($i=0;$i<$rating;$i++)echo "* "; ?></font>




                </td>



            </table>

            <table cellspacing="10">


                <tr>

                    <td colspan="2">
                        <h2>
                            Contact this Tutor
                        </h2>

                        <table>


                            <tr>
                                <td colspan="2">
                                    <b> Name <b> <br> <input type="text" name="name" size="35"> <br/>
                                            <b> Phone No <b> <br> <input type="text" name="phone" size="35"> <br/>
                                                    <b> Email <b> <br> <input type="text" name="email" size="35"> <br/>
                                                            <b> Message <b> <br> <input type="text" name="message" size="35" style="height: 60px;"> <br/>								<br>
                                                                    <button type="button" class="button" >Send Message</button>

                                </td>


                            </tr>

                        </table>

                </tr>
                </td>

            </table>

        </div>

    </div>
</div>

</body>

</html>