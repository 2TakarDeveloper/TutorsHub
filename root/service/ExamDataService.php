<?php
/**
 * Created by PhpStorm.
 * User: Tazim
 * Date: 9/8/2017
 * Time: 10:50 PM
 */

//The purpose of this service class is to allow admins to create new exam tables or remove them


function createNewExamTable($examName){
    //Takes the table name as input and creates a table in the database
    //Table creation code goes here
    //Tables will always have the same format SerialNo,Q,A,B,C,D,Ans and serialno is auto increment.
    //if Table creation is a success then call the bellow function

    $sql="CREATE TABLE IF NOT EXISTS `$examName` (
      `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
      `Question` varchar(10000) NOT NULL,
      `A` varchar(100) NOT NULL,
      `B` varchar(100) NOT NULL,
      `C` varchar(100) NOT NULL,
      `D` varchar(100) NOT NULL,
      `Answer` varchar(100) NOT NULL,
      PRIMARY KEY (`SerialNo`)
      ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

    $result = executeSQL($sql);

    if($result)
    {
        AddToExamTable($examName);
        AddtoUserExamTable($examName);
    }

    return $result;
}


function AddToExamTable($examName){
    //add a new row to Examtable with the name of the exam

    $sql="INSERT INTO exam(ExamName) VALUES('$examName')";
    $result = executeSQL($sql);

    return $result;
}


function AddToUserExamTable($examName){
    //Add a new Column to UserExamtable with the name of the exam

    $sql="ALTER TABLE userexaminfo ADD $examName tinyint(1)";
    $result = executeSQL($sql);

    return $result;
}



function GetAllExamNames(){
    //return exam Names from Exam Table

    $sql = "SELECT * FROM exam";

    $result = executeSQL($sql);

    $row=mysqli_fetch_assoc($result);
    return $row;
}


function GetExamQuestionByName($examName){
    //return 1st 5 columns of the named examTable
    // table name is a variable that was pass in as parameter
    //this function will be used when tutor applies for exam

    $sql = "SELECT SerialNo,Question,A,B,C,D FROM $examName";

    $result = executeSQL($sql);

    $value=[];
    $i=0;

    while ($row = mysqli_fetch_assoc($result)) {
        $value[$i++]=$row;

    }

 return $value;

}

function validateExamPaper($examAnswers,$examName){
    //Will instruct later. no need to implement it now
    $score=0;
    foreach ($examAnswers as $examAnswer){
        $sql = "SELECT count(*) FROM $examName WHERE SerialNo='$examAnswer[id]' AND Answer='$examAnswer[answer]' ";
        $result = executeSQL($sql);
        $row=mysqli_fetch_assoc($result);

        if($row['count(*)']>0){
            $score++;
        }


    }


    return $score;
}


function GetTutorExamResult($UserId,$ExamName){
    //Return true or false by searching userExamResultTable using userID and ExamnameColumn.
    //we will need this at some point just define it.
}

function GetTutorExamResultALL($UserId){
    //Return all columns from userExamResultTable using userID
    //This will be required to allow tutors to choose which subjects they can pick
}



