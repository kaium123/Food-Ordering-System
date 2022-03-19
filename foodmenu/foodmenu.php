<?php

	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	$result=$blog->viewaddfood();
	if(isset($_POST['btn'])){
		
		$result=$blog->addBlog();
	}
	
	if(isset($_POST['btnlogin'])){
		$loginresult=$blog->login();
		if($loginresult){
			
			header("Location: ../foodmenujustaftersignin/foodmenujustaftersignin.php?id=$loginresult");
		}
		else{
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
			<meta charset="utf-8">
			<title>Open Bootstrap Modal on Page Load</title>
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<script src="js/jquery-3.5.1.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script>
			    $(document).ready(function(){
			        $("#mymodal").modal('show');
			    });
			</script>
			</head>
			<body>
				<div class="modal" id="mymodal" >
					<div class="modal-dialog">
						<div class="modal-content" style="background-color: indigo;">
							<div class="modal-header">
								<h1 style="color: white;">Log In your account</h1>
								<button class="close" data-dismiss="modal" type="button" style="color: white;">&times;</button>
							</div>
							<div class="modal-body">
								<form method="post">
									<div class="form-group">
										<label style="font-size: 20px; color: orange;">User Name :</label>
										<input type="text" name="username" class="form-control">
									</div>
									<div class="form-group">
										<label style="font-size: 20px;color: orange;">Password :</label>
										<input type="password" name="password" class="form-control">
									</div>
									<button type="submit" name="btnlogin" class="btn btn-primary">Log in
										
									</button>
									<button type="submit" class="btn btn-primary">Register</button>
								</form>
							</div>
							<div class="modal-footer">
								<h6 class="text-danger mx-auto">Wrong username or wrong password...please try again...</h6>
							</div>
						</div>
					</div>
				</div>
			</body>
			</html>
	<?php
		}
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
						<li class=""><a href="../home/home.php" class="nav-link" style="font-size: 20px;">Home</a></li>
						<li><a href="../foodmenu/foodmenu.php" class="nav-link active" style="font-size: 20px;">Food Menu</a></li>
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">About</a>
							<div class="dropdown-menu bg-grey">
								<a href="../aboutrestaurant/aboutrestaurant.php" class="dropdown-item">About Restaurant</a>
								<a href="../aboutchef/aboutchef.php" class="dropdown-item">About Chef</a>
								<a href="../aboutemploy/aboutemploy.php" class="dropdown-item">About Employee</a>
								<a href="../aboutfooditem/aboutfooditem.php" class="dropdown-item">About Food-Item</a>
							</div>
							
						</li>
						<li><a href="#signupmodal" class="nav-link" data-toggle="modal" style="font-size: 20px;" data-target="#mymodalsignup">Sign Up</a></li>
						<li><a href="" class="nav-link" data-toggle="modal" style="font-size: 20px;" data-target="#mymodal">Sign In</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div style="background-image: url(image/slide1.jpg); background-repeat: no-repeat;height: 500px;background-attachment: fixed;background-size: 100% 100%;">
			
		</div>

		<div class="container mt-4 mb-5">
			<div class="row">
				<div class="col-lg-12">
					<?php while($blogs=mysqli_fetch_assoc($result)) { ?>
					<div class="card float-left m-3" style="width: 300px;height: 400px;">
						<div class="card-header">
							<h4><?php echo $blogs['name'] ?></h4>
						</div>
						<div class="card-body">
							<div >
								<img src="<?php echo $blogs['image'] ?>" class="card-img-top" height="190px" width="100%">
							</div>
							
						</div>
						<div class="card-footer">
							Price : 
							<label><?php echo $blogs['price'] ?> Tk</label>
							
						</div>
						
					</div>
					<?php } ?>
				</div>
			</div>
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
		
		<div class="modal" id="mymodal" >
			<div class="modal-dialog">
				<div class="modal-content" style="background-color: indigo;">
					<div class="modal-header">
						<h1 style="color: white;">Log In your account</h1>
						<button class="close" data-dismiss="modal" type="button" style="color: white;">&times;</button>
					</div>
					<div class="modal-body">
						<form method="post" >
							<div class="form-group">
								<label style="font-size: 20px; color: orange;">User Name :</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label style="font-size: 20px; color: orange;">Password :</label>
								<input type="password" name="password" class="form-control">
							</div>
							<button type="submit" name="btnlogin" class="btn btn-primary">Log in
								
							</button>
							<button type="submit" class="btn btn-primary">Register</button>
						</form>
					</div>
					<div class="modal-footer">
						
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
											<label style="font-size: 20px; color: orange;">First Name :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px; color: orange;">Second Name :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px; color: orange;">Email :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px; color: orange;">Contact :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px; color: orange;">Address :</label>
											<textarea type="text" class="form-control"></textarea>
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px; color: orange;">Image :</label>
											<input type="file" name="input" class="form-control-file">
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-lg-6 float-left">
										<div class="form-group">
											<label style="font-size: 20px; color: orange;">User Name :</label>
											<input type="text" name="input" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 float-right">
										<div class="form-group">
											<label style="font-size: 20px; color: orange;">Password :</label>
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