<?php
	
	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	
	$result=$blog->editprofile($_GET['id']);
	$info="";
	$info=mysqli_fetch_assoc($result);
	
	if(isset($_POST['btn'])){
		
		$message=$blog->updateprofile($_GET['id']);
	}

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
						<li class=""><a href="../homeaftersignin/homeaftersignin.php" class="nav-link" style="font-size: 20px;">Home</a></li>
						<li><a href="../foodmenuaftersignin/foodmenuaftersignin.php" class="nav-link" style="font-size: 20px;">Food Menu</a></li>
						<li><a href="../viewcartlist/viewcartlist.php?id=<?php echo $id ?>" class="nav-link active" style="font-size: 20px;">Cart List</a></li>
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">About</a>
							<div class="dropdown-menu bg-grey">
								<a href="" class="dropdown-item">About Restaurant</a>
								<a href="" class="dropdown-item">About Chef</a>
								<a href="" class="dropdown-item">About Employee</a>
								<a href="" class="dropdown-item">About Food-Item</a>
							</div>
							
						</li>
						<li><a href="../profile/profile.php" class="nav-link active" style="font-size: 20px;">My Profile</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container mb-5 mt-5">
			
			<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-2">
						<label>First Name :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="firstname" class="form-control" value="<?php echo $info['firstname'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Last Name :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="lastname" class="form-control" value="<?php echo $info['lastname'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Email :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="email" class="form-control" value="<?php echo $info['email'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Contact :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="contact" class="form-control" value="<?php echo $info['contact'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Address :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="address" class="form-control" value="<?php echo $info['address'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Image :</label>
					</div>
					<div class="col-lg-6">
						<input type="file" name="image" class="form-control-file">
						<img src="<?php echo $info['image'] ?>" alt="" width="100" height="100">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>User Name :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="username" class="form-control" value="<?php echo $info['username'] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label>Password :</label>
					</div>
					<div class="col-lg-6">
						<input type="text" name="password" class="form-control" value="<?php echo $info['password'] ?>">
					</div>
				</div>

							
				<button type="submit" class="btn btn-primary" name="btn">Update  profile</button>
			</form>
		</div>
		
		
		
		<div class="navbar navbar-expand-md navbar-dark bg-dark justify-center ">
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