<?php

function NewTutorInfo($tutorID){
    //this function will take a tutorID object and add that to database

    $sql = "INSERT INTO `userinfo`(`TutorId`,`Level`,`Experience`) VALUES('$tutorID','1','0')";
    $result = executeSQL($sql);
    return $result;
}

function updateTutorInfo($userInfo,$userId){
    //this function will take userInfo object and create an XML file
    // and save it with UserID The Path is Predefined but do keep an static string variable
    //This will work both as update or new Entry since it always rewrite everything in the file
    $sql = "UPDATE userinfo SET MobileNo='$userInfo[MobileNo]', Address='$userInfo[Address]', CurrentStatus='$userInfo[CurrentStatus]', Bio='$userInfo[Bio]' WHERE TutorId=$userId";
    $result = executeSQL($sql);
    return $result;
}

function GetTutorInfo($tutorID){
    //Return a Tutor info Object searched by the tutorID from local storage
    $sql = "SELECT * FROM userinfo WHERE TutorId= $tutorID";
    $result = executeSQL($sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}

function UpdateLastLogin($tutorID, $lastLogin){
    //Return a Tutor info Object searched by the tutorID from local storage
    $sql = "UPDATE userinfo SET LastLogin='$lastLogin' WHERE TutorId=$tutorID";
    $result = executeSQL($sql);
    return $result;
}
?>