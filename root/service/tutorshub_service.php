<?php require_once "service/data_access.php"; ?>
<?php
    function addTutor($tutor){
        $sql = "INSERT INTO user(Id, Email, Password, MemberSince) VALUES(NULL, '$tutor[email]', '$tutor[password]', '$tutor[membersince]')";
        $result = executeSQL($sql);
		
		$sql = "SELECT * FROM user WHERE Email='$person[Email]'";        
        $result = executeSQL($sql);
        
        $person[id] = mysqli_fetch_assoc($result);
		
		$sql = "INSERT INTO searchinfo(UserId) VALUES('$tutor[id]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	function editTutor($tutor){
        $sql = "UPDATE user SET Name='$tutor[name]', UserImage='$tutor[image]' WHERE id=$tutor[id]";
        $result = executeSQL($sql);
		
		$sql = "UPDATE searchinfo SET Availability=0, PreferredLocation='$tutor[location]', PreferredSubjects='$tutor[subjects]', PreferredClasses='$tutor[classes]', PreferredMedium='$tutor[medium]', ExpectedSalary=$tutor[salay] WHERE id=$tutor[id]";
        $result = executeSQL($sql);
        return $result;
    }
    function getTutor($personName){
        $sql = "SELECT * FROM user,searchinfo WHERE user.id=searchinfo.UserId and searchinfo.PreferredLocation='$tutor[location]' and searchinfo.Gender='$tutor[gender]' and searchinfo.PreferredClasses='$tutor[classes]', searchinfo.PreferredMedium='$tutor[medium]' and  searchinfo.PreferredSubjects LIKE '%$tutor[subjects]%' and searchinfo.ExpectedSalary between $tutor[minSalary] and $tutor[maxSalary]";
        $result = executeSQL($sql);
        
        $tutors = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $tutors[$i] = $row;
        }
        
        return $tutors;
    }
    
    
?>
