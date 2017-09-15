<?php
/**
 * Created by PhpStorm.
 * User: Tazim
 * Date: 9/15/2017
 * Time: 12:08 PM
 */


function NewTutorPreferredLocations($tutorID){
    //this function will take a tutorID object and add that to database

    $sql = "INSERT INTO preferredlocation(UserID) VALUES($tutorID)";
    $result = executeSQL($sql);
    return $result;
}