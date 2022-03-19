<?php
	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	$result=$blog->viewaddfood();
	
	
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
			<div class="col-lg-10">
				<div class="card">
					<div class="card-header">
						<span class="h3">Foods</span>
						<a href="../addfood/addfood.php" class="btn btn-outline-primary float-right">+</a>
					</div>
					<div class="card-body">
						<table class="table">
							<tr>
								<th>S.I</th>
								<th>Name</th>
								<th>Image</th>
								<th>Details</th>
								<th>Price</th>
							</tr>
							<?php while($blogs=mysqli_fetch_assoc($result)) { ?>
							<tr>

								<td>1</td>
								<td><?php echo $blogs['name'] ?></td>
								<td><img src="<?php echo $blogs['image'] ?>" alt="" width="100" height="100"></td>
								<td><?php echo $blogs['details'] ?></td>
								<td><?php echo $blogs['price'] ?></td>
								
								<td>
									<a href="../editfood/editfood.php?id=<?php echo $blogs['id'] ?>" class="btn btn-info btn-sm">Edit</a>
									<a href="../deletefood/deletefood.php?id=<?php echo $blogs['id'] ?>" class="btn btn-danger btn-sm" name="btn1">Delete</a>
								</td>

							</tr>
						<?php } ?>
							
						</table>
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