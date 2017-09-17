<?php
/**
 * Created by PhpStorm.
 * User: Tazim
 * Date: 9/15/2017
 * Time: 12:08 PM
 */


function GetAllLocations(){
    //this function will take a tutorID object and add that to database

    $sql = "SELECT Location FROM `location` ";
    $result = executeSQL($sql);
    $value=[];
    $i=0;

    while ($row = mysqli_fetch_assoc($result)) {
        $value[$i++]=$row;

    }

    return $value;
}