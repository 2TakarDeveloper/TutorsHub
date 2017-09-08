


<?php


function NewTutor($tutor){
    //this function will take a tutor object and add that to database

    $sql = "INSERT INTO user(Email, Password, MemberSince) VALUES('$tutor[email]','$tutor[password]', '$tutor[membersince]')";
    $result = executeSQL($sql);

    return $result;
}


function UpdateTutor($tutor){
    //Update Key=tutorID;
    //this function will take a tutor object and update that in the database

    $sql = "UPDATE user SET Name='$tutor[name]', UserImage='$tutor[image]' WHERE Id=$tutor[id]";
    $result = executeSQL($sql);


    return $result;
}


function ValidTutor($email,$password){
    //returns true if username and password is correct

    $sql = "SELECT * FROM user where Email='$email' AND Password='$password'";
    $result = executeSQL($sql);

    $row=mysqli_fetch_assoc($result);

    if($result){
        //Create new session

        $_SESSION["UserId"] = $row['Id'];
    }
    return $result;
}

function getTutorImage($tutorID){
    //return image url

    $sql = "SELECT UserImage FROM user where Id=$tutorID";
    $result = executeSQL($sql);

    $tutorImage = mysqli_fetch_assoc($result);

    return $tutorImage;
}

function getTutorbyId($tutorId){

    $sql = "SELECT * FROM user where Id=$tutorId";
    $result = executeSQL($sql);

    $row=mysqli_fetch_assoc($result);

    return $row;
}


?>




