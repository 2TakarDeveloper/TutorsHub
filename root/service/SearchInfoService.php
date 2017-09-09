<?php
/**
 * Created by PhpStorm.
 * User: Tazim
 * Date: 9/7/2017
 * Time: 6:48 PM
 */




function NewSearchInfo($searchInfo){
    //this function will take a searchInfo object and add that to database

    $sql = "INSERT INTO searchinfo(UserId, Gender, Availability,PrefferedLocation,PrefferedSubjects,PrefferedClasses,PrefferredMedium,ExpextedSalary) VALUES($searchInfo[tutorID], '$searchInfo[gender]', $searchInfo[availability], '$searchInfo[location]', '$searchInfo[subjects]', '$searchInfo[classes]', '$searchInfo[medium]', $searchInfo[salary])";
    $result = executeSQL($sql);

    return $result;
}




function UpdateSearchInfo($searchInfo,$id){
    //Update Key=tutorID;
    //this function will take a searchInfo object and update that in the database

    $sql = "UPDATE searchinfo SET Gender='$searchInfo[Gender]', PrefferedLocation='$searchInfo[PrefferedLocation]', PrefferedSubjects='$searchInfo[PrefferedSubjects]', PrefferedClasses='$searchInfo[PrefferedClasses]', PrefferedMedium='$searchInfo[PrefferedMedium]', ExpextedSalary=$searchInfo[ExpextedSalary]   WHERE UserID=$id";
    $result = executeSQL($sql);


    return $result;
}


function getSearchInfo($tutorID){
    //GetSearchInfo By tutorID;

    $sql = "SELECT * FROM searchinfo WHERE UserID= $tutorID";

    $result = executeSQL($sql);

//    $tutors = array(
//        'UserID'=>'',
//        'Gender'=>'',
//        'Availability'=>'',
//        'PrefferedLocation'=>'',
//        'PrefferedSubjects'=>'',
//        'PrefferedClasses'=>'',
//        'PrefferedMedium'=>'',
//        'ExpectedSalary'=>''
//    );
//
//    for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
//        $tutors['UserId'] = $row['UserId'];
//        $tutors['Gender'] = $row['Gender'];
//        $tutors['Availability'] = $row['Availability'];
//        $tutors['PrefferedLocation'] = $row['PrefferedLocation'];
//        $tutors['PrefferedSubjects'] = $row['PrefferedSubjects'];
//        $tutors['PrefferedClasses'] = $row['PrefferedClasses'];
//        $tutors['PrefferedMedium'] = $row['PrefferedMedium'];
//        $tutors['ExpectedSalary'] = $row['ExpextedSalary'];
//    }

//    return $tutors;


    $row=mysqli_fetch_assoc($result);
    return $row;
}