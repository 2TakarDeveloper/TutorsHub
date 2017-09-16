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
            Gender= '$sex' AND
            ExpectedSalary BETWEEN '$minSal' AND '$maxSal' AND
            PreferredMedium='$medium' AND
            CONCAT(\",\", `PreferredLocation`, \",\") REGEXP \",($area),\" AND
            CONCAT(\",\", `PreferredClasses`, \",\") REGEXP \",($class),\" AND
            CONCAT(\",\", `PreferredSubjects`, \",\") REGEXP \",($subjects),\"
        ";



    $result = executeSQL($sql);


    $value=[];
    $i=0;

    while ($row = mysqli_fetch_assoc($result)) {
        $value[$i++]=$row['UserID'];

    }



    return GetTutorSearchResult($value);


}

function GetTutorSearchResult($tutorIds)
{
    $resultSet=[];
    $i=0;

    foreach ($tutorIds as $id)
    {
        $temp = getTutorbyId($id);
        $resultSet[$i]['Id']= $id;
        $resultSet[$i]['Name']= $temp['Name'];
        $resultSet[$i]['UserImage']= $temp['UserImage'];

        $temp=getSearchInfo($id);
        $resultSet[$i]['Salary']=$temp['ExpectedSalary'];
        $resultSet[$i]['Subjects']=$temp['PreferredSubjects'];
        $resultSet[$i]['Gender']=$temp['Gender'];
        $resultSet[$i]['Medium']=$temp['PreferredMedium'];
        $resultSet[$i++]['Locations']=$temp['PreferredLocation'];

    }

    return $resultSet;
}


