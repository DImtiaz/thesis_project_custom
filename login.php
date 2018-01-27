
<?php

include("connect.php");

if(isset($_POST['login'])) {

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$username = mysqli_real_escape_string($conn, $_REQUEST['user_email']);
		$password = mysqli_real_escape_string($conn, $_REQUEST['user_password']); 

		$sql = "SELECT * FROM registration WHERE Email='".$username."'";

		$res = mysqli_query($conn, $sql);

		if(mysqli_num_rows($res) > 0) {

			$dbUser  = '';
			$dbPass = '';
			while ($uRes = mysqli_fetch_array($res)) {
				
				$dbUser = $uRes['Email'];
				$dbName = $uRes['Name'];
				$dbPass = $uRes['Password']; 
				



			}

			if(md5($password) === $dbPass ) {

				$_SESSION['userEmail'] = $dbUser;
				$_SESSION['user'] = $dbName;
				

				echo 'Successfully logged in teacher account <br> Redirecting..';

				?>
					<script type="text/javascript">

					setTimeout(function(){

						window.location.href='proposalt.php';

					},2000);
						
					</script>

				<?php

			} else {

				echo 'Wrong password';
			}

		} else {

			$sql = "SELECT * FROM registration_st WHERE Email='".$username."'";

			$res = mysqli_query($conn, $sql);

			if(mysqli_num_rows($res) > 0) {

					$dbUser  = '';
			$dbPass = '';
			while ($uRes = mysqli_fetch_array($res)) {
				
				$dbUser = $uRes['Email'];
				$dbName = $uRes['Name'];
				$dbPass =  $uRes['Password']; 
			}

			if(md5($password) === $dbPass ) {

				$_SESSION['userEmail'] = $dbUser;
				$_SESSION['user'] = $dbName;

				echo 'Successfully logged in student account<br> Redirecting..';

				?>
					<script type="text/javascript">

					setTimeout(function(){

						window.location.href='displayProposalfS.php';

					},2000);
						
					</script>

				<?php

			} else {

				echo 'Wrong password';
			}


			} else {

				echo "no user found";
			}



			
		}

	}
}
?>