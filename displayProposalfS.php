<?php include("connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Proposals for Students </title>
	
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

        <link rel="stylesheet" href="style.css">
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Proposal</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
<body style="color:black;   ">

  
 <?php include 'heading.php' ?>

<h1>Please select your project</h1>
<?php

$sql = "SELECT * FROM proposalft";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Proposal_Id</th>";
                echo "<th>Department</th>";
                echo "<th>Domain</th>";
                echo "<th>Title</th>";
                echo "<th>Project_Area</th>";
                echo "<th>Synopsys</th>";
                echo "<th>Programming Language</th>";
                echo "<th>Framework</th>";
                echo "<th>Hardware</th>";
                echo "<th>First Choice</th>";
                echo "<th>Second Choice</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Pid'] . "</td>";
                echo "<td>" . $row['Department'] . "</td>";
                echo "<td>" . $row['Domain'] . "</td>";
                echo "<td>" . $row['Title'] . "</td>";
                echo "<td>" . $row['PArea'] . "</td>";
                echo "<td>" . $row['Synopsys'] . "</td>";
                echo "<td>" . $row['Planguaget'] . "</td>";
                echo "<td>" . $row['Framework'] . "</td>";
                echo "<td>" . $row['Hardware'] . "</td>";
                echo "<td>" ."<input type='submit' id='firstc' name='firstc' Value='1st' style='width:100%'>". "</td>";

                echo "<td>" ."<input type='submit' id='secondc' name='secondc' Value='2st' style='width:100%'>". "</td>";


            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

?>




</body>
</html>