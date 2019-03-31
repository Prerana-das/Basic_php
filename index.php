<?php include('shared/header.php'); ?>
	
		<section class="sign-up-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 mx-auto">
						<div class="form-area">
							<form class="form" action="action/login.php" method="POST" enctype="multipart/form-data">
								<h4>Login to your account</h4>
								<span>Don't have any account? <a href="signup.php">Sign Up Free!</a></span>
								  <div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email Address">
								  </div>
								  <div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
								  </div>
								  <div class="form-group">
									<div class="form-check">
									  <input type="checkbox" class="form-check-input" id="dropdownCheck2">
									  <label class="form-check-label" for="dropdownCheck2">
										Remember me
									  </label>
									</div>
								  </div>
								  <button type="submit" class="btn btn-primary">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
<?php include('shared/footer.php'); ?>
		