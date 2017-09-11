<?php
/**
 * Created by PhpStorm.
 * User: Tazim
 * Date: 9/10/2017
 * Time: 10:47 AM
 */



function GetTutorShortInfo($area,$sex,$class,$minSal,$maxsal,$subjects){

    //Make a query that wil search and return a list of ID that matches the paramters.
    //Notice that you will have to match for subjects to so it's going to be complex as the data is in CSV format


    $id;//this will hold an array of ids that are returned from the previous query

    foreach($id as $idd){
        //getTutor Image and name from tutor service using the $id;
        //GetTutor Expected salary from searchInfo Service using $id;

        //this will be a multi dimentional array both indexed and associative
        //$tutor[0]['ImageUrl']=value;
        //$tutor[0]['Name']=value;
        //$tutor[0]['salary']=value;

        //lets not put the phone number here because ain't nobody calling anybody from this result. They will open the
        //tutor profile anyway
    }

  //now Problems will arise when u are including new files. That you must resolve. I did help.//One suggesttion would be dun
    //include index page. instead copy it's content and treat is as a different page or add these all into index. just don't show if
    //there is no result as simple as that. so no need for a serch result page differently
}

