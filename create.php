<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	

	<!-- boostrap code-->
	<link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.min.css'; ?>">
	
	<!--font Awesome-->
	<link rel="stylesheet" href="<?php echo base_url().'css/all.min.css'; ?>">

	<!-- Google Font-->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<!---Custom css-->
	<link rel="stylesheet" href="<?php echo base_url().'css/custom.css'; ?>">

	
	<title>EMSP</title>
</head>
<body>

	<nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top">
<a href="#" class="navbar-brand">CRUD</a>
</nav>
<br>
 <div class="container pt-5"  id="registration">
   	<h2 class="text-center">Create User</h2>
   	<div class="row mt-4 mb-4">
   		<div class="col-md-6 offset-md-3">
   			
   			<form action="" method="POST" class="shadow-lg p-4">

   			<div class="form-group">
   				<i class="fas fa-user"></i><label for=" " class="font-weight-bold pl-2">Name</label>
   				<input type="text" name="name" value="<?php echo set_value('name');  ?>" class="form-control" placeholder="Name">
   				<?php echo form_error('name'); ?>
   			</div>


   			<div class="form-group">
   				<i class="fas fa-user"></i><label for=" " class="font-weight-bold pl-2">Email</label>
   				<input type="email" name="email" value="<?php echo set_value('email');  ?>" class="form-control" placeholder="Email">
   				<?php echo form_error('email'); ?>
   				<small class="form-text">We'll never share your email with enyone else...</small>
   			</div>


   			<button type=" submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="Signup">Sing Up</button>
   			<em class="font-italic" style="font-size: 10px">Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy.</em>

             

   			</form>
   			
   		</div>
   		
   	</div>
   	
   </div>

 

<!--Javascript-->
<script src="<?php echo base_url().' js/jquer.min.js'; ?> "></script>
<script src="<?php echo base_url().'js/popper.min.js'; ?>"></script>
<script src="<?php echo base_url().'js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo base_url().'js/all.min.js'; ?>"></script>
</body>
</html>