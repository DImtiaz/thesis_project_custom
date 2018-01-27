<?php

include("connect.php");

if(isset($_POST['pft'])) {

	


$ptDepartment = mysqli_real_escape_string($conn, $_REQUEST['department']);
$ptDomain = mysqli_real_escape_string($conn, $_REQUEST['domain']);
$ptTitle = mysqli_real_escape_string($conn, $_REQUEST['title']);
$ptParea = mysqli_real_escape_string($conn, $_REQUEST['parea']);
$ptSynopsys = mysqli_real_escape_string($conn, $_REQUEST['synopsys']);

$ptFramework = mysqli_real_escape_string($conn, $_REQUEST['framework']);
$ptHardware = mysqli_real_escape_string($conn, $_REQUEST['hardware']);
$LecturerName=$_SESSION['user'];

$checkbox1=$_POST['pl']; 
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  


$psql = "INSERT INTO proposalft (Pid,Lecturer_Name,Department,Domain,Title,PArea,Synopsys,Planguaget,Framework,Hardware) VALUES ('','$LecturerName','$ptDepartment','$ptDomain','$ptTitle','$ptParea','$ptSynopsys','$chk','$ptFramework','$ptHardware')";


					if(mysqli_query($conn, $psql)){

						
         				echo 'Proposal submitted  succesfull <br>Redirecting..'; ?>

         				<script type="text/javascript">
         					setTimeout(function(){
         						window.location.href = 'proposalt.php';
         					},1200);
         				</script>
		
	<?php }
}
?>
