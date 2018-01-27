<?php include("connect.php"); ?>
<!DOCTYPE html>
<html>
<head>

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

    </head>
    <body style="color: black">
    <?php include 'heading.php' ?>
    
      <form action="submitProposalT.php" method="post">
      
        <h1>New Proposal for Teacher</h1>
        
        <fieldset>
          
          <label for="department">Department:</label>
          <select name="department" id="dropdown" required>
            <option value="SWE">SWE</option>
            <option value="EEE">EEE</option>
            <option value="CSE">CSE</option>
            <option value="BBA">BBA</option>

        </select>
          
          <label for="domain">Domain:</label>
          <select name="domain" id="dropdown" required>
            <option value="Project">Project</option>
            <option value="Thesis">Thesis</option>

        </select>

          <label for="title">Title:</label>
          <input type="text" id="title" name="title" required>
          
          <label for="parea">Project Area:</label>
          <input type="text" id="Project Area" name="parea" required>
           <br>

          <label for="synopsys">Synopsys:</label>
          <textarea rows="10" name="synopsys" id="synopsys" required >  </textarea>
           <br>
          <label for="planguage">Programming Language:</label>
          <input type="checkbox" name="pl[]" value="php">PHP <br>
          <input type="checkbox" name="pl[]" value="cs">C# <br>
          <input type="checkbox" name="pl[]" value="c">C <br>
          <input type="checkbox" name="pl[]" value="python">Python <br>
          <input type="checkbox" name="pl[]" value="ruby">Ruby <br>
          <input type="checkbox" name="pl[]" value="cpp">C++ <br>
          <input type="checkbox" name="pl[]" value="java">Java <br>
          <input type="checkbox" name="pl[]" value="js">Javascript <br>
          <input type="checkbox" name="pl[]" value="mysql">MySQL <br>
          <input type="checkbox" name="pl[]" value="oracle">Oracle <br>
         
          <label for="framework">Framework:</label>
          <select name="framework" id="framework" >
            <option value="laravel">Laravel</option>
            <option value="asp">ASP.NET</option>
            <option value="spring">Spring</option>
            <option value="codeigniter">Codeigniter</option>
            <option value="cakephp">CakePHP</option>
            <option value="cinder">Cinder</option>




        </select>


         <label for="hardware">Hardware:</label>
          <textarea rows="3" name="hardware" id="hardware"  >  </textarea>
           <br>

          
        </fieldset>
        
       
        
        <button  type="submit" name="pft" >Submit</button>
      </form>
      
<?php

$sql = "SELECT * FROM proposalft WHERE Lecturer_Name='$_SESSION[user]' ";



if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1' >";
            echo "<tr>";
                echo "<th>Proposal_Id</th>";
                echo "<th>Lecturer Name</th>";
                echo "<th>Department</th>";
                echo "<th>Domain</th>";
                echo "<th>Title</th>";
                echo "<th>Project_Area</th>";
                echo "<th>Synopsys</th>";
                echo "<th>Programming Language</th>";
                echo "<th>Framework</th>";
                echo "<th>Hardware</th>";
                echo "<th>Remove Proposal</th>";
                

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Pid'] . "</td>";
                echo "<td>" . $row['Lecturer_Name'] . "</td>";

                echo "<td>" . $row['Department'] . "</td>";
                echo "<td>" . $row['Domain'] . "</td>";
                echo "<td>" . $row['Title'] . "</td>";
                echo "<td>" . $row['PArea'] . "</td>";
                echo "<td>" . $row['Synopsys'] . "</td>";
                echo "<td>" . $row['Planguaget'] . "</td>";
                echo "<td>" . $row['Framework'] . "</td>";
                echo "<td>" . $row['Hardware'] . "</td>";
                echo "<td>" ."<input type='submit' id='delete' name='delete' Value='DELETE' style='width:100%'>". "</td>";

                
               
            
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