<?php get_header(); /* Template Name: Register */ ?>
	<?php 
		$companyID = $_GET['company'];
		$company =  get_post( $companyID );
	?>
  <div class="container" style="padding: 50px 15px;">
    <div class="row">
      <div class="col-md-10">
				<h2><?php echo $company->post_title ?></h2>
        <div class="form-group register-form">
          <h3>Challenge Name</h3>
					<h4>Register</h4>
					<form>
						<label for="name" class="name">Name</label>
						<input type="text" id="name" name="name" class="name" >

						<label for="team" class="team">Team</label>
						<input type="text" id="team" name="team" class="team" >

						<label for="email" class="email">Email</label>
						<input type="text" id="email" name="email" class="email" >
						
						<label for="password" class="password">password</label>
						<input type="text" id="password" name="password" class="password" >

						<input type="Submit" class="btn" value="Save">
					</form>
        </div>
      </div>            
    </div>
  </div>
<?php get_footer(); ?>