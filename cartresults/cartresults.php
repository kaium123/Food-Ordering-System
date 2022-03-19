<?php
	include "../blog/blog.php";
	$blog=new Blog();
	
	$x=floor($_GET['id']%10000);
	$result=$blog->editfood($x);
	$info="";
	
	$info=mysqli_fetch_assoc($result);
	
	$id=floor($_GET['id']/10000);
	if(isset($_POST['btn'])){
		//$filename=$_FILES['image']['name'];
			//$directory='../images/';
			$imageUrl=$info['image'];
			//move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
		
		$message=$blog->addtocart($x,$imageUrl);
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
						<li class=""><a href="../homeaftersignincontinue/homeaftersignincontinue.php?id=<?php echo $id?>" class="nav-link" style="font-size: 20px;">Home</a></li>
						<li><a href="../foodmenuaftersignin/foodmenuaftersignin.php?id=<?php echo $id ?>" class="nav-link" style="font-size: 20px;">Food Menu</a></li>
						<li><a href="../viewcartlist/viewcartlist.php?id=<?php echo $id ?>" class="nav-link active" style="font-size: 20px;">Cart List</a></li>
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">About</a>
							<div class="dropdown-menu bg-grey">
								<a href="../aboutrestaurants/aboutrestaurants.php?id=<?php echo $id ?>" class="dropdown-item">About Restaurant</a>
								<a href="../aboutchefs/aboutchefs.php?id=<?php echo $id ?>" class="dropdown-item">About Chef</a>
								<a href="../aboutemploys/aboutemploys.php?id=<?php echo $id ?>" class="dropdown-item">About Employee</a>
								<a href="../aboutfooditems/aboutfooditems.php?id=<?php echo $id ?>" class="dropdown-item">About Food-Item</a>
							</div>
							
						</li>
						<li><a href="../profile/profile.php?id=<?php echo $id ?>" class="nav-link active" style="font-size: 20px;">My Profile</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-lg-8">
				
					
				
				<div class="card">
					
					<div class="card-body">
						<div class="container">
			<div class="row">
				
				<table class="mt-4 mb-4 ml-3">
					<tr>
						<th width="200">Food Name :</th>
						<td width="400"><?php echo $info['name'] ?></td>
					</tr>
					<tr>
						<th width="200">Image :</th>
						<td width="400"><img src="<?php echo $info['image'] ?>" alt="" width="100" height="100"></td>
					</tr>
					<tr>
						<th width="200">Details :</th>
						<td width="400"><?php echo $info['details'] ?></td>
					</tr>
					<tr>
						<th width="200">Price :</th>
						<td width="400"><?php echo $info['price'] ?></td>
					</tr>
					
				</table>
				
			</div>
		</div>
						<form method="post" enctype="multipart/form-data">
							
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" name="quantity" class="form-control" value="">
							</div>
							
							<button type="submit" class="btn btn-primary" name="btn">Add</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>	
</body>
</html>