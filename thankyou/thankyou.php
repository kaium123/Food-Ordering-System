<?php

	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	$id=$_GET['id'];
	$result=$blog->viewprofile1($id);
	$blogs=mysqli_fetch_assoc($result);
	$msg=$blog->deleteorder();

?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
			<div class="container">
				<div>
					<a href="" class="navbar-brand">
						<p class="head">Le Cafe</p>
					</a>
					<a href="" class="navbar-brand ml-0">
						<img src="image/boot.png" width="100" height="50">
					</a>
				</div>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#my-nav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="my-nav">
					<ul class="navbar-nav ml-auto">
						<li class=""><a href="../homeaftersignincontinue/homeaftersignincontinue.php?id=<?php echo $blogs['id'] ?>" class="nav-link" style="font-size: 20px;">Home</a></li>
						<li><a href="../foodmenuaftersignin/foodmenuaftersignin.php?id=<?php echo $blogs['id'] ?>" class="nav-link" style="font-size: 20px;">Food Menu</a></li>
						<li><a href="../viewcartlist/viewcartlist.php?id=<?php echo $id ?>" class="nav-link active" style="font-size: 20px;">Cart List</a></li>
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">About</a>
							<div class="dropdown-menu bg-grey">
								<a href="../aboutrestaurants/aboutrestaurants.php?id=<?php echo $blogs['id'] ?>" class="dropdown-item">About Restaurant</a>
								<a href="../aboutchefs/aboutchefs.php?id=<?php echo $blogs['id'] ?>" class="dropdown-item">About Chef</a>
								<a href="../aboutemploys/aboutemploys.php?id=<?php echo $blogs['id'] ?>" class="dropdown-item">About Employee</a>
								<a href="../aboutfooditems/aboutfooditems.php?id=<?php echo $blogs['id'] ?>" class="dropdown-item">About Food-Item</a>
							</div>
							
						</li>
						<li><a href="../profile/profile.php?id=<?php echo $blogs['id'] ?>" class="nav-link " style="font-size: 20px;">My Profile</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row justify-content-center mt-5">
				<div class="col-lg-10">
					<div class="card">
						
						<div class="card-body">
							<h2 class="" style="color: orange;">Thank You  for being with us.Your order  are in progress.Please wait</h2>


									
								
						</div>
						
					</div>
				</div>
			</div>

		</div>
		
		
		
		

		<div class="navbar navbar-expand-md navbar-dark bg-dark justify-center fixed-bottom">
			<div class="mx-auto">
				<div class="ml-5">
					<a href="" class="text-white mr-6">About Us  </a>
				</div>
				<div>
					<h6 style="color: orange;">Copyright All right @ Le Cafe 2020</h6>
				</div>
				
			</div>
		</div>
		

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>