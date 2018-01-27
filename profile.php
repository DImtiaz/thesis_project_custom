<!DOCTYPE html>
<html>
<head>
	<title>My Profile </title>

	 	<link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <style type="">
        	u {
    text-decoration: none;
    border-bottom: 100px solid black;
  }​



        </style>

</head>

<body>

<?php 
include("connect.php");
include ("heading.php" );
?>

<?php 
			$imagepath = '';
			$email = $_SESSION['userEmail'];
			$sql = "SELECT * FROM `registration` inner join `registration_st` WHERE `Email` = '$email'";
		



					if ($result=mysqli_query($conn,$sql))
						  {
						  // Fetch one and one row
						  while ($row=mysqli_fetch_array($result))
						    {
						    	$imagepath = $row['imglink'];
						    }
						  // Free result set
						}
						else{
							echo "no image found!";
						}


	 ?>




<u> <h1 style=" font-size: 80px;">Profile of <?php echo '<span style="padding: 0 8px 0 0;">'
.$_SESSION['user'] .'</span>'; ?> </h1> </u>


<div class="contents" style="font-size: 30px">
	<div class="cleft" >
		<img src="uploads/<?php echo $imagepath; ?>">
			<input type="submit" value="Update Profile" style="width: 250px;"> </input>

	</div>
	<div class="cright">
		<table border="10" style="padding:3;">
			<tr> 
				<td> Name  </td>
				<td> <?php echo  $_SESSION['user'] ; ?> </td>
			</tr>

			<tr> 
				<td>  Id </td>
				<td>  132-35-568 </td>
			</tr>

			<tr> 
				<td>  Contact </td>
				<td>  01521434135 </td>
			</tr>

			<tr> 
				<td>  Email </td>
				<td>  <?php echo  $_SESSION['userEmail'] ; ?></td>
			</tr>

			<tr> 
				<td> Password  </td>
				<td>  123456 </td>
			</tr>

		</table>

	</div>





</div>


</body>

</html>