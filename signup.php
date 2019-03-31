<?php 
	session_start(); 
	include('shared/header.php');
    
    if(isset($_SESSION["id"])){
     header('Location: http://localhost/SignUp/index.php');
}
 ?>
	
		<section class="sign-up-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 mx-auto">
						<div class="form-area signup">
							<form class="form" action="action/action.php" method="POST" enctype="multipart/form-data">
								<h4>Sign up for free!</h4>
								  <div class="form-group">
									<input type="hidden" name="userType" value="Admin" />
								</div>
								   <div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Full name">
								  </div>
								  <div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email address">
								  </div>
								  <div class="form-group">
									<input type="text" class="form-control" name="phone" placeholder="Phone">
								  </div>
								   <div class="form-group">
									<input type="text" class="form-control" name="address" placeholder="Address">
								  </div>
								   <div class="form-group">
									<input type="file" class="form-control" name="image" placeholder="Image">
								  </div>
								  <div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
								  </div>
								<!--   <input type="submit" value="Sign in"/> -->
								 <button type="submit" class="btn btn-primary">Sign in</button>
								  <a href="index.html">Already have an account?</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php include('shared/footer.php'); ?>
		
	