<!doctype html>
<html lang="en">
  <head>
  	<title>Table 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	

	</head>
	<body>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">ONGOING MATTERS......</h2>
						<a href="userhome.php">HOME PAGE</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!--<h4 class="text-center mb-4">Create Your Domain Name</h4>-->
						<div class="table-wrap">
							<table class="table">
							<thead class="thead-primary">
							  <tr>
								
								<th>TOPIC </th>
								<th></th>
							
								<th></th>
								<th>JOIN!!!!!!!</th>					     
							   
							  </tr>
							</thead>
							<?php
							include 'world_connection.php';
			  $conn=  mysqli_query($conn, "select * from discussion_create");
				$i=0;
				while($row=  mysqli_fetch_array($conn))
	
				{
					?>
							<tbody>
							<tr style="height:200px; width:100px;">
								
								<td><?php echo $row['topic']?></td>
								<td></td>
								<td></td>
							
								<td><a href="discu.php?edit=<?php echo $row['t_id']; ?>" class="btn btn-primary">Join</a></td>
							  </tr>
							  <?php
								}
								?>
							 
							</tbody>
						  </table>
						</div>
	   
					</div>
				</div>
			</div>
		</section>
	
		<script src="js/jquery.min.js"></script>
	  <script src="js/popper.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/main.js"></script>
	</body>
	</html>





