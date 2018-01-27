<?php

include("connect.php");

if(isset($_POST['reg'])) {

	if($_SERVER['REQUEST_METHOD'] == "POST") {


$rName = mysqli_real_escape_string($conn, $_REQUEST['name']);
$rEmail = mysqli_real_escape_string($conn, $_REQUEST['email']);
$rId = mysqli_real_escape_string($conn, $_REQUEST['id']);
$rGender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
$rUser = mysqli_real_escape_string($conn, $_REQUEST['user']);
$rMobile1 = mysqli_real_escape_string($conn, $_REQUEST['mobile1']);
$rMobile2 = mysqli_real_escape_string($conn, $_REQUEST['mobile2']);
$rPassword = mysqli_real_escape_string($conn, $_REQUEST['password']);
$cPassword = mysqli_real_escape_string($conn, $_REQUEST['cpassword']);


if(!empty($_FILES['image']['name'])) {

			$name = $_FILES['image']['name'];
			$size = $_FILES['image']['size'];
			$type = $_FILES['image']['type'];
	        $tmp = $_FILES['image']['tmp_name'];
	        $getfileExt = substr(strrchr($name, "."), 1);

			// generate the random file name
			$randName = md5(rand() * time());
			// image name with extension
	
			$myfile= $randName.'.'.$getfileExt;



	        if(($getfileExt =="jpg" ) || ($getfileExt =="png" ) || ($getfileExt =="JPG" ) || ($getfileExt =="PNG" )) {

	        	if(($size == 0) || ($size > 1048576 )) {
                     
                     echo '<span style="color: red;">maximum upload size 1MB, Try another one</span>';

                 } else { 

					if($rPassword === $cPassword) {
							$imglink = $myfile;
						$cPassword = md5($cPassword);
						
						if($rUser === 'student') {


							if(isset($_POST['cgpa10']) && isset($_POST['cgpa11'])) {

								$cgpa10 = mysqli_real_escape_string($conn, $_POST['cgpa10']);
								$cgpa11 = mysqli_real_escape_string($conn, $_POST['cgpa11']);

									// attempt insert query execution
								$sql = "INSERT INTO registration_st (Name,Email,Id,Gender,User,cgpa10,cgpa11,Mobile1,Mobile2,Password,imglink) VALUES ('$rName', '$rEmail', '$rId', '$rGender','$rUser', '$cgpa10','$cgpa11','$rMobile1', '$rMobile2', '$cPassword','$myfile')";
								
								if(mysqli_query($conn, $sql)){

									move_uploaded_file($tmp, __DIR__.'/uploads/'.$imglink);
									$_SESSION['userEmail'] = $rEmail;
									$_SESSION['user'] = $rName;
			         				echo 'registration succesfull <br>Redirecting..';

			         				?>
			         				<script type="text/javascript">
			         					window.location.href = 'displayProposalfS.php';
			         				</script>

			         				<?php 

									

								} else{

									echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
								}
							}
							


						} 

						if($rUser === 'teacher') {

							// attempt insert query execution
							$sql = "INSERT INTO registration (Name,Email,Id,Gender,User,Mobile1,Mobile2,Password,imglink) VALUES ('$rName', '$rEmail', '$rId', '$rGender', '$rUser', '$rMobile1', '$rMobile2', '$cPassword','$myfile')";
							
							if(mysqli_query($conn, $sql)){

								move_uploaded_file($tmp, __DIR__.'/uploads/'.$imglink);
								$_SESSION['userEmail'] = $rEmail;
								$_SESSION['user'] = $rName;
		         				echo 'registration succesfull <br>Redirecting..';

		         				?>
		         				<script type="text/javascript">
		         					window.location.href = 'proposalt.php';
		         				</script>

		         				<?php 

								

							} else{

								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}


						} 


					} else {
						echo 'Password missmatched';
					}

                 }
                 
             } else {

             	echo  '<span style="color: red;font-size: 12px;"> Need .jpg or .png file </span>';

             }




	} else {

		echo 'No image selected';
	}




	}
}




?>
