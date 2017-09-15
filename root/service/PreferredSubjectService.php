<?php
/**
 * Created by PhpStorm.
 * User: Tazim
 * Date: 9/15/2017
 * Time: 12:07 PM
 */

function NewTutorPreferredSubjects($tutorID){
    //this function will take a tutorID object and add that to database

    $sql = "INSERT INTO preferredsubject(UserID) VALUES($tutorID)";
    $result = executeSQL($sql);
    return $result;
}



function GetTutorIDs(){//This will return an array of id by searching table




        $sql = "SELECT UserID FROM preferredsubject where Email='$email' AND Password='$password'";
        $result = executeSQL($sql);

        $row=mysqli_fetch_assoc($result);

        return $row;



}