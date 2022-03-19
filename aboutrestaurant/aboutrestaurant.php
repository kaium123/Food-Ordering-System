<?php
	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	$result=$blog->viewrestaurant();
	
	
	if(isset($_POST['btn'])){
		
		$result=$blog->addBlog();
	}
	
	if(isset($_POST['btnlogin'])){
		$loginresult=$blog->login();
		if($loginresult){
			
			header("Location: ../homeaftersignin/homeaftersignin.php?id=$loginresult");
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
										<label style="font-size: 20px; color: orange;">Password :</label>
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
						<p style="transform: scale(1,3);">Le Cafe</p>
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
						<li class="active"><a href="../home/home.php" class="nav-link" style="font-size: 20px;">Home</a></li>
						<li><a href="../foodmenu/foodmenu.php" class="nav-link" style="font-size: 20px;">Food Menu</a></li>
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

		<div class="container">
			<div class="row justify-content-center mt-5">
				<div class="col-lg-10">
					<div class="card">
						<div class="card-header d-flex justify-content-center">
							<h3>About restaurant</h3>
						</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<th>S.I</th>
									<th>Name</th>
									<th>Image</th>
									<th>Details</th>
									<th>Address</th>
									<th>Number of chef</th>
									<th>Number of employee</th>
									
								</tr>

								<?php $i=1; while($blogs=mysqli_fetch_assoc($result)) { ?>
								<tr>

									<td><?php echo $i++ ?></td>
									<td><?php echo $blogs['name'] ?></td>
									<td><img src="<?php echo $blogs['image'] ?>" alt="" width="100" height="100"></td>
									<td><?php echo $blogs['details'] ?></td>
									<td><?php echo $blogs['address'] ?></td>
									<td><?php echo $blogs['nchef'] ?></td>
									<td><?php echo $blogs['nemployee'] ?></td>
									

								</tr>
								
							<?php } ?>
								
								
							</table>


									
								
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
					<h6 style="color: orange;">All Copyrights @ Le Cafe 2020</h6>
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
						<form class="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label style="color: orange;">First Name :</label>
								<input type="text" name="firstname" class="form-control">
							</div>
							<div class="form-group">
								<label style="color: orange;">Last Name :</label>
								<textarea type="text" name="lastname" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label style="color: orange;">Email :</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label style="color: orange;">Contact :</label>
								<input type="text" name="contact" class="form-control">
							</div>
							<div class="form-group">
								<label style="color: orange;">Address :</label>
								<textarea type="text" name="address" class="form-control"></textarea>
							</div>

							<div class="form-group">
								<label style="color: orange;">Image</label>
								<input type="file" name="image" class="form-control">
							</div>
							<div class="form-group">
								<label style="color: orange;">User Name :</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label style="color: orange;">Password :</label>
								<input type="text" name="password" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary" name="btn">Add Blog</button>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		<div class="modal" id="xy">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						wrong password or wrong username
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