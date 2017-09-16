<?php
// Start the session
session_start();
?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    var_dump($_POST);
    if(isset($_POST['ViewButton'])){

        $_SESSION['TutorID']=$_POST['ViewButton']['value'];
        $_SESSION['Contact']=true;

        header("Location: ./TutorProfile.php");
    }


}


?>

<body>
	<form method="post">	
	<br/>
	<br/>
	<table align=center border=1 style='width: 100%'>

        <?php
        foreach($_SESSION['SearchResults'] as $result)
        {


            echo "<tr>";

            echo "<td style='align-content: center'>";
            echo "<img src='$result[UserImage]' height=100px width=100px>";
            echo "</td>";

            echo "<td>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo "<b>Name:</b>";
            echo "</td>";
            echo "<td>";
            echo "<p>$result[Name]</p>";
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo "<b>Subject:</b>";
            echo "</td>";
            echo "<td>";
            echo "<p>$result[Subjects]</p>";
            echo "</td>";

            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo "<b>Gender:</b>";
            echo "</td>";
            echo "<td>";
            echo "<p>$result[Gender]</p>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<b>Medium:</b>";
            echo "</td>";
            echo "<td>";
            echo "<p>$result[Medium]</p>";
            echo "</td>";

            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo "<b>Salary:</b>";
            echo "</td>";
            echo "<td>";
            echo "<p>$result[Salary]</p>";
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo "<b>Location:</b>";
            echo "</td>";
            echo "<td>";
            echo "<p>$result[Locations]</p>";
            echo "</td>";
            echo "</tr>";



            echo "</table>";


            echo " </td>";

            echo "<td>";
           echo "<button type='submit' value=$result[Id]  name='ViewButton'>View Profile </button>";

            echo "</tr>";
        }
        ?>

		
		
	</table>
	</form>
</body>
