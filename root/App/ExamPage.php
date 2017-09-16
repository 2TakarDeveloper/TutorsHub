<?php require_once("../service/data_access.php") ?>
<?php require_once("../service/ExamDataService.php") ?>

<?php


 session_start();
 $examName=$_SESSION['ExamName'];
 $examName="Bangla";
 $_SESSION['questions']=GetExamQuestionByName($examName);


if($_SERVER['REQUEST_METHOD']=="POST")
{

    if(isset($_POST['SubmitButton'])){


         $i=0;
        $examAnswers=[];

        foreach ($_SESSION['questions'] as $question){

            $examAnswer['qid']=$question['SerialNo'];
            $examAnswer['answer']=$_POST[$question['SerialNo']];
            $examAnswers[$i++]=$examAnswer;
        }


        var_dump( validateExamPaper($examAnswers,$examName));
       // header("Location: ./TutorDashBoard.php");

    }

    if(isset($_POST['BackButton'])){

        var_dump($_POST);

        header("Location: ./TutorDashBoard.php");

    }


}


?>

<html>

	<body>
	<head>
	<style>
div.pp
		{
            padding-left: 25px;
			padding-top: 10px;
		}


		.button
		{
            background-color:  #277ec8 ;
    color: white;
    padding: 16px;
    font-size: 14px;
    border: none;
    cursor: pointer;
		}

	.button1
		{
            background-color:1f9609 ;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
		}



	</style>

	</head>
	<body>
    <form method="Post">
	<div class="pp">  <h1>tutorsHUB</h1>


		<div  style="width:70px;">
			  <button name="BackButton" class="button" style="width:70px;">Back </button>

			</div>

	</div>

    <?php
		  echo"<center><h2>$examName</h2></center>";
    ?>

	<hr>


		<br>

       <?php

       $i=1;
       foreach ( $_SESSION['questions'] as $question){
           echo "<div>";



           echo "<label>$i)$question[Question]</label>";

           echo "<br>";

           $answer['id']=$question['SerialNo'];
          // $answer['answer'];

           echo "<input type='radio' name='$answer[id]'  value='$question[A]'>";
           echo "<label for='a'>$question[A]</label>";

           echo "<input type='radio' name='$answer[id]'  value='$question[B]'>";
           echo "<label for='a'>$question[B]</label>";

           echo "<input type='radio' name='$answer[id]'  value='$question[C]'>";
           echo "<label for='a'>$question[C]</label>";

           echo "<input type='radio' name='$answer[id]'  value='$question[D]'>";
           echo "<label for='a'>$question[D]</label>";

           echo "</div>";

           $i++;
       }



        ?>

			<div align=center>
			  <button  name="SubmitButton" class="button1" style="width:100px;">Submit</button>

			</div>



    </form>
	</body>

</html>
