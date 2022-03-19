<?php
	include "../blog/blog.php";
	$blog=new Blog();
	$result=$blog->editfood($_GET['id']);
	$info="";
	$info=mysqli_fetch_assoc($result);
	$id=$_GET['id']%10000;
	if(isset($_POST['btn'])){
		
		$message=$blog->updatefood($id);
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
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-lg-8">
				
					
				
				<div class="card">
					<div class="card-header">
						<span class="h3">Add food</span>
						<a href="index.php" class=" float-right">Go Back</a>
					</div>
					<div class="card-body">
						<form method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" class="form-control" value="<?php echo $info['name'] ?>">
							</div>
							<div class="form-group">
								<label>Image</label>
								<input type="file" name="image" class="form-control" >
								<img src="<?php echo $info['image'] ?>" alt="" width="100" height="100">
							</div>
							<div class="form-group">
								<label>Details</label>
								<input type="text" name="details" class="form-control" value="<?php echo $info['details'] ?>">
							</div>
							<div class="form-group">
								<label>Price</label>
								<input type="text" name="price" class="form-control" value="<?php echo $info['price'] ?>">
							</div>
							
							<button type="submit" class="btn btn-primary" name="btn">Update  Food</button>
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