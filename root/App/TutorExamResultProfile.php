<?php
session_start();
if(!isset($_SESSION["UserId"]))
{
    header("Location: ../index.php");
}
?>

<?php require_once("../service/data_access.php") ?>
<?php require_once("../service/TutorService.php") ?>
<?php require_once("../service/TutorInfoService.php") ?>
<?php require_once("../service/SearchInfoService.php") ?>
<?php require_once("../service/ExamDataService.php") ?>
<?php require_once("../service/LocationService.php") ?>

<html>

<table border="1px">
    <tr>
        <td>
            <p> Exam Name </p>
        </td>
        <td>
            <p>
                Score
            </p>
        </td>
    </tr>

    <?php


    $data=GetTutorExamResultALL($_SESSION['UserId']);
    $examName=GetAllExamNames();

    //var_dump($data);
    //var_dump($examName);

    foreach ($examName as $e) {
    $v=$e['ExamName'];

        echo "<tr>";
        echo "<td>";
        echo "<p>$e[ExamName]</p>";
        echo "</td>";
        echo "<td>";
        echo "<p>$data[$v]</p>";
        echo "</td>";
        echo "</tr>";
    }

?>

</table>

</html>


