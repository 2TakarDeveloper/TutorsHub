<?php


function updateTutorInfo($userInfo,$userId){
    //this function will take userInfo object and create an XML file
    // and save it with UserID The Path is Predefined but do keep an static string variable
    //This will work both as update or new Entry since it always rewrite everything in the file

}

function GetTutorInfo($tutorID){
    //Return a Tutor info Object searched by the tutorID from local storage

    $sql = "SELECT * FROM userinfo WHERE TutorId= $tutorID";

    $result = executeSQL($sql);

    $row=mysqli_fetch_assoc($result);
    return $row;
}
