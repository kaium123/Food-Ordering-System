<?php
	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	if(isset($_POST['btn'])){
		
		$result=$blog->addemployee();
	}
	
	//echo $result['firstname'];
	

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
						<li class="active"><a href="../homeaftersignin/homeaftersignin.php?id=<?php echo $result['id'] ?>" class="nav-link" style="font-size: 20px;">Home</a></li>
						<li><a href="../foodmenuaftersignin/foodmenuaftersignin.php?id=<?php echo $result['id'] ?>" class="nav-link" style="font-size: 20px;">Food Menu</a></li>
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">About</a>
							<div class="dropdown-menu bg-grey">
								<a href="" class="dropdown-item">About Restaurant</a>
								<a href="" class="dropdown-item">About Chef</a>
								<a href="" class="dropdown-item">About Employee</a>
								<a href="" class="dropdown-item">About Food-Item</a>
							</div>
							
						</li>
						<li><a href="../profile/profile.php?id=<?php echo $result['id'] ?>" class="nav-link" style="font-size: 20px;">My Profile</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="card w-50">
					<div class="card-header">
						<h4>Insert details of the employee</h4>
					</div>
					<div class="card-body">
						<form class="" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>Name :</label>
										<input type="text" name="name" class="form-control">
									</div>
									<div class="form-group">
										<label>Image :</label>
										<input type="file" name="image" class="form-control">
									</div>
									<div class="form-group">
										<label>Details :</label>
										<input type="text" name="details" class="form-control">
									</div>
									<div class="form-group">
										<label>Address :</label>
										<input type="text" name="address" class="form-control">
									</div>
									<div class="form-group">
										<label>Experience Year :</label>
										<input type="text" name="eyear" class="form-control">
									</div>
									
									<button type="submit" class="btn btn-primary" name="btn">Submit</button>
								</form>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-expand-md navbar-dark bg-dark justify-center">
			<div class="mx-auto">
				<div class="ml-5">
					<a href="" class="text-white mr-6">About Us  </a>
				</div>
				<div>
					<h6 style="color: orange;">Copyright All right @ Le Cafe 2020</h6>
				</div>
				
			</div>
		</div>
		<div class="modal" id="mymodal" >
			<div class="modal-dialog">
				<div class="modal-content" style="background-color: indigo;">
					<div class="modal-header">
						<h1 style="color: white;">Log In your account</h1>
						<button class="close" data-dismiss="modal" type="button" style="color: white;">&times;</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label style="font-size: 20px;">User Name :</label>
								<input type="text" name="input" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px;">Password :</label>
								<input type="password" name="input" class="form-control">
							</div>

						</form>
					</div>
					<div class="modal-footer">
						<a class="btn btn-primary" href="user.html">Log in</a>
						<button type="button" class="btn btn-primary">Register</button>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="modal " id="mymodalsignup" >
			<div class="modal-dialog " style="position: relative; right: 100px;">
				<div class="modal-content" style="background-color: indigo;width: 700px;">
					<div class="modal-header">
						<h1 style="color: white;">Create your account free and safe </h1>
						<button class="close" data-dismiss="modal" type="button" style="color: white;">&times;</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px;">First Name :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px;">Second Name :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px;">Email :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px;">Contact :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px;">Address :</label>
											<textarea type="text" class="form-control"></textarea>
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px;">Image :</label>
											<input type="file" name="input" class="form-control-file">
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px;">User Name :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px;">Password :</label>
											<input type="password" name="input" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Sign Up</button>
					</div>
				</div>
			</div>
		</div>

		

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>