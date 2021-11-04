<?php 
include 'koneksi.php';
require_once("../Authentication/auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
            body {
                font-family: 'Poppins';
				text-align: center;
            }

			th{
				font-family: 'Poppins';
				text-align: center;
			}
            </style>
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
			
				<div class="table">
				<!-- <p>Heloo</p> -->
					<table class="table table-striped">                     
						<div class="table responsive">
							<thead class="thead-dark">
								<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Gender</th>
								<th>Year Joined</th>
								<th>Favorite Genre</th>
								<th>Favorite Author</th>
							</tr>
							</thead>
							<tbody>
					<?php 
						$no = 1;
						$data = mysqli_query($koneksi,"select * from book_club");
						while($d=mysqli_fetch_array($data)){
							?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $d['name']; ?></td>
								<td><?php echo $d['gender']; ?></td>
								<td><?php echo $d['year_joined']; ?></td>
								<td><?php echo $d['favorite_genre']; ?></td>
								<td><?php echo $d['favorite_author']; ?></td>
							</tr>
							<?php 
						}
					
					?>
						</tbody>
						</div>
					</table>

				</div>
			</div>
		</div>
		
	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>