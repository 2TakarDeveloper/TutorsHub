<?php
/**
 * Created by PhpStorm.
 * User: Tazim
 * Date: 9/10/2017
 * Time: 10:47 AM
 */



function GetTutorShortInfo($area,$sex,$class,$minSal,$maxSal,$subjects,$medium)
{
   //Format for Subject and class val1|val2|val3


    //GetSearchInfo By tutorID;
    $sql = "SELECT UserID FROM searchinfo 
            WHERE 
            Availability='1' AND
            Gender= $sex AND
            ExpectedSalary BETWEEN $minSal AND 200000 $maxSal
            PreferredMedium=$medium AND
            CONCAT(\",\", `PreferredLocation`, \",\") REGEXP \",($area),\" AND
            CONCAT(\",\", `PreferredClasses`, \",\") REGEXP \",($class),\" AND
            CONCAT(\",\", `PreferredSubjects`, \",\") REGEXP \",($subjects),\"
        ";
    $result = executeSQL($sql);

    $row = mysqli_fetch_assoc($result);
    return $row;


}

