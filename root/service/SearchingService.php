<?php
/**
 * Created by PhpStorm.
 * User: Tazim
 * Date: 9/10/2017
 * Time: 10:47 AM
 */



function GetTutorShortInfo($area,$sex,$class,$minSal,$maxSal,$subjects)
{

    //Make a query that wil search and return a list of ID that matches the paramters.
    //Notice that you will have to match for subjects to so it's going to be complex as the data is in CSV format

    //GetSearchInfo By tutorID;
    $sql = "SELECT * FROM searchinfo 
            WHERE Gender= $sex AND
            Availability='1' AND
            ExpectedSalary BETWEEN $minSal AND 200000 AND
            PreferredMedium='Bangla' AND
            find_in_set('Adabor',PreferredLocation) <> 0 AND
            find_in_set('1',PreferredClasses) <> 0
            find_in_set('1',PreferredSubjects) <> 0
        ";
    $result = executeSQL($sql);

    $row = mysqli_fetch_assoc($result);
    return $row;


}

