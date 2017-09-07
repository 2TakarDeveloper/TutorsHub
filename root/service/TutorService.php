<?php
/**
 * Created by PhpStorm.
 * User: Tazim
 * Date: 9/7/2017
 * Time: 6:41 PM
 */



function NewTutor($tutor){
    //this function will take a tutor object and add that to database

    $sql = "INSERT INTO user(Email, Password, MemberSince) VALUES('$tutor->email', '$tutor->password', '$tutor->membersince')";
    $result = executeSQL($sql);

    $sql = "SELECT * FROM user WHERE Email='$tutor[Email]'";
    $result = executeSQL($sql);

    $person[id] = mysqli_fetch_assoc($result);

    $sql = "INSERT INTO searchinfo(UserId) VALUES('$tutor[id]')";
    $result = executeSQL($sql);

    return $result;
}


function UpdateTutor($tutor){
    //Update Key=tutorID;
    //this function will take a tutor object and update that in the database

    $sql = "UPDATE user SET Name='$tutor->name', UserImage='$tutor->image' WHERE Id=$tutor->id";
    $result = executeSQL($sql);

    $sql = "UPDATE searchinfo SET Availability=0, PreferredLocation='$tutor[location]', PreferredSubjects='$tutor[subjects]', PreferredClasses='$tutor[classes]', PreferredMedium='$tutor[medium]', ExpectedSalary=$tutor[salay] WHERE id=$tutor[id]";
    $result = executeSQL($sql);
    return $result;
}


function ValidTutor($tutor){
    //returns true if username and password is correct

    $sql = "SELECT * FROM user where Email='$tutor->email' AND Password='$tutor->password'";
    $result = executeSQL($sql);
    return $result;
}

function getTutorImage($tutor){
    //return image url

    $sql = "SELECT UserImage FROM user where Id=$tutor->id";
    $result = executeSQL($sql);

    $tutorImage = mysqli_fetch_assoc($result);

    return $tutorImage;
}





