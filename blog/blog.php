<?php
	class Blog
	{
		
		function dbConnect(){
			$link=mysqli_connect("localhost","root","","project2");
			return $link;
		}

		function delete($id)
		{
			
				$sql="DELETE FROM cartlist WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
			
								
						
		}

		function addBlog(){
			
			
			$filename=$_FILES['image']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
			
			$sql="INSERT INTO user(firstname,lastname,email,contact,address,image,username,password) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]','$_POST[address]','$imageUrl','$_POST[username]','$_POST[password]')";

			$result=mysqli_query($this->dbConnect(),$sql);


			
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function login(){
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
			$result=mysqli_query($this->dbConnect(),$sql);
			$info=mysqli_fetch_assoc($result);
			
			if($info){
				
				return $info['id'];
			}
			else{
				return 0;
			}
			
		}
		function viewprofile($name,$pass){
			
			$sql="SELECT * FROM user WHERE username='$name' AND password='$pass'";
			$result=mysqli_query($this->dbConnect(),$sql);
			$info=mysqli_fetch_assoc($result);
			return $info;
		}
		function viewprofile1($id)
		{
			$sql="SELECT * FROM user WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;

		}
		function editprofile($id){
			$sql="SELECT * FROM user WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function updateprofile($id)
		{
			
			$blogImage=$_FILES['image']['name'];
			
			if($blogImage){
				$filename=$_FILES['image']['name'];
				$directory='../images/';
				$imageUrl=$directory.$filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
				$sql="UPDATE user SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',contact='$_POST[contact]',address='$_POST[address]',image='$imageUrl',username='$_POST[username]',password='$_POST[password]' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
			else{
				$time=date("Y-m-d H:i:s");
				$sql="UPDATE user SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',contact='$_POST[contact]',address='$_POST[address]',username='$_POST[username]',password='$_POST[password]' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
		}
		function addfood(){
			$filename=$_FILES['image']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
			$sql="INSERT INTO food(name,image,details,price) VALUES ('$_POST[name]','$imageUrl','$_POST[details]','$_POST[price]')";

			$result=mysqli_query($this->dbConnect(),$sql);


			
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function viewaddfood()
		{
			$sql="SELECT * FROM food";
			
			$result=mysqli_query($this->dbConnect(),$sql);

			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function editfood($id){
			$sql="SELECT * FROM food WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
			return $result;
		}
		function updatefood($id){
			$blogImage=$_FILES['image']['name'];
			
			if($blogImage){
				$filename=$_FILES['image']['name'];
				$directory='../images/';
				$imageUrl=$directory.$filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
				$sql="UPDATE food SET name='$_POST[name]',image='$imageUrl',details='$_POST[details]',price='$_POST[price]' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
			else{
				$sql="UPDATE food SET name='$_POST[name]',details='$_POST[details]',price='$_POST[price]' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
		}

		function deletefood($id){
			
			$sql="DELETE FROM food WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
		}
		function viewAllBlog(){
			
			$sql="SELECT * FROM blogs";
			
			$result=mysqli_query($this->dbConnect(),$sql);
			//print_r($result);
			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function editBlog($id){
			$sql="SELECT * FROM blogs WHERE id='$id'";
			$result=mysqli_query($this->dbConnect(),$sql);
			
			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function updateBlog($id){
		
			$blogImage=$_FILES['image']['name'];
			if($blogImage){
				$filename=$_FILES['image']['name'];
				$directory='../images/';
				$imageUrl=$directory.$filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
				$time=date("Y-m-d H:i:s");
				$sql="UPDATE blogs SET title='$_POST[title]',description='$_POST[description]',author='$_POST[author]',image='$imageUrl',status='$_POST[status]',timestamp='$time' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
			else{
				$time=date("Y-m-d H:i:s");
				$sql="UPDATE blogs SET title='$_POST[title]',description='$_POST[description]',author='$_POST[author]',status='$_POST[status]',timestamp='$time' WHERE id='$id'";
				$result=mysqli_query($this->dbConnect(),$sql);
				
				if($result){
					return "Blog Updated successfully";
				}
				else{
					die(mysqli_error($this->dbConnect()));
				}
			}
		}
		function viewPublishedBlog(){
			$sql="SELECT * FROM blogs WHERE status=1";
			$result=mysqli_query($this->dbConnect(),$sql);
	
			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
			
		}

		function addtocart($x,$imageUrl)
		{
			$sq="SELECT * FROM food WHERE id='$x'";
			$res=mysqli_query($this->dbConnect(),$sq);;
			$info="";
			
			$info=mysqli_fetch_assoc($res);
			
			$totalprice=$_POST['quantity']*$info['price'];
			$sql="INSERT INTO cartlist(name,image,details,price,quantity,totalprice) VALUES ('$info[name]','$imageUrl','$info[details]','$info[price]','$_POST[quantity]',$totalprice)";

			$result=mysqli_query($this->dbConnect(),$sql);


			
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
			
			
		}
		function viewfood($foodid)
		{
			$sql="SELECT * FROM food WHERE id='$foodid'";
			
			$result=mysqli_query($this->dbConnect(),$sql);

			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function viewcartlist()
		{
			$sql="SELECT * FROM cartlist";
			
			$result=mysqli_query($this->dbConnect(),$sql);

			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function addchef()
		{
			$filename=$_FILES['image']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
			$sql="INSERT INTO chef(name,image,details,address,eyear) VALUES ('$_POST[name]','$imageUrl','$_POST[details]','$_POST[address]','$_POST[eyear]')";

			$result=mysqli_query($this->dbConnect(),$sql);


			
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function addemployee(){
			$filename=$_FILES['image']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
			$sql="INSERT INTO employee(name,image,details,address,eyear) VALUES ('$_POST[name]','$imageUrl','$_POST[details]','$_POST[address]','$_POST[eyear]')";

			$result=mysqli_query($this->dbConnect(),$sql);


			
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function addrestaurant()
		{
			$filename=$_FILES['image']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
			$sql="INSERT INTO restaurant(name,image,details,address,nchef,nemployee) VALUES ('$_POST[name]','$imageUrl','$_POST[details]','$_POST[address]','$_POST[nchef]','$_POST[nemployee]')";

			$result=mysqli_query($this->dbConnect(),$sql);


			
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function addfooditem()
		{
			$filename=$_FILES['image']['name'];
			$directory='../images/';
			$imageUrl=$directory.$filename;
			move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);
			$sql="INSERT INTO fooditem(name,image,details) VALUES ('$_POST[name]','$imageUrl','$_POST[details]')";

			$result=mysqli_query($this->dbConnect(),$sql);


			
			if($result){
				return "Blog added successfully";
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function viewrestaurant(){
			$sql="SELECT * FROM restaurant";
			
			$result=mysqli_query($this->dbConnect(),$sql);

			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function viewchef(){
			$sql="SELECT * FROM chef";
			
			$result=mysqli_query($this->dbConnect(),$sql);

			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function viewemployee(){
			$sql="SELECT * FROM employee";
			
			$result=mysqli_query($this->dbConnect(),$sql);

			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}
		function viewfooditem(){
			$sql="SELECT * FROM fooditem";
			
			$result=mysqli_query($this->dbConnect(),$sql);

			if($result){
				return $result;
			}
			else{
				die(mysqli_error($this->dbConnect()));
			}
		}

		function deleteorder(){
			$sql="SELECT * FROM cartlist";
			
			$result=mysqli_query($this->dbConnect(),$sql);

			while($blogs=mysqli_fetch_assoc($result)) { 
				
				$cur=$blogs['id'];
				
				$x="DELETE FROM cartlist WHERE id='$cur'";
				$y=mysqli_query($this->dbConnect(),$x);
			} 
		}
	}

?>

