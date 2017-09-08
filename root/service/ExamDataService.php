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
    AddToExamTable($examName);
    AddtoUserExamTable($examName);
}


function AddToExamTable($examName){
    //add a new row to Examtable with the name of the exam

}


function AddToUserExamTable($examName){
    //Add a new Column to UserExamtable with the name of the exam
}



function GetAllExamNames(){
    //return exam Names from Exam Table
}


function GetExamQuestionByName($examName){
    //return 1st 5 columns of the named examTable
    // table name is a variable that was pass in as parameter
    //this function will be used when tutor applies for exam
}

function validateExamPaper($examPaper,$examName){
    //Will instruct later. no need to implement it now
}


function GetTutorExamResult($UserId,$ExamName){
    //Return true or false by searching userExamResultTable using userID and ExamnameColumn.
    //we will need this at some point just define it.
}

function GetTutorExamResultALL($UserId){
    //Return all columns from userExamResultTable using userID
    //This will be required to allow tutors to choose which subjects they can pick
}



