<?php 
	include 'koneksi.php';
	require_once("../Authentication/auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chart</title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
	<style type="text/css">
	h2 {
		line-height: 1.66;
		margin: 0;
		padding: 0;
		font-weight: bold;
		color: #222;
		font-family: Poppins;
		font-size: 36px; }
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center>
		<h2>Chart</h2>
	</center>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Mystery", "Non-fiction", "Fantasy", "Science Fiction", "Thriller", "Self-help", "Fiction"],
				datasets: [{
					label: 'Favorite Genre Count',
					data: [
					<?php 
					$jumlah_mystery = mysqli_query($koneksi,"select * from book_club where favorite_genre='Mystery'");
					echo mysqli_num_rows($jumlah_mystery);
					?>, 
					<?php 
					$jumlah_nonfi = mysqli_query($koneksi,"select * from book_club where favorite_genre='Non-fiction'");
					echo mysqli_num_rows($jumlah_nonfi);
					?>, 
					<?php 
					$jumlah_fantasy = mysqli_query($koneksi,"select * from book_club where favorite_genre='Fantasy'");
					echo mysqli_num_rows($jumlah_fantasy);
					?>, 
					<?php 
					$jumlah_scifi = mysqli_query($koneksi,"select * from book_club where favorite_genre='Science Fiction'");
					echo mysqli_num_rows($jumlah_scifi);
					?>,
					<?php 
					$jumlah_thriller = mysqli_query($koneksi,"select * from book_club where favorite_genre='Thriller'");
					echo mysqli_num_rows($jumlah_thriller);
					?>,
					<?php 
					$jumlah_selfhelp = mysqli_query($koneksi,"select * from book_club where favorite_genre='Self-help'");
					echo mysqli_num_rows($jumlah_selfhelp);
					?>,
					<?php 
					$jumlah_fiction = mysqli_query($koneksi,"select * from book_club where favorite_genre='Fiction'");
					echo mysqli_num_rows($jumlah_fiction);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>