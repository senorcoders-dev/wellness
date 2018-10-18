<?php get_header('company'); /* Template Name: Register */ ?>
	<?php 

		$challengeID = $_GET['challengeID'];
		$challenge = get_post( $challengeID );
		
		$teamQuery = $wpdb->prepare( 
			"
				SELECT  ID, post_title
				FROM $wpdb->posts posts 
				INNER JOIN $wpdb->postmeta meta ON posts.ID = meta.post_id AND meta_key like 'challenge'
				WHERE meta_value = %d;
				",
				$challengeID
		); 
		$teams = $wpdb->get_results( $teamQuery, OBJECT );
		
		
	?>
  <div class="container" style="padding: 50px 15px;">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group register-form">
          
					<form>
						<h3><?php echo $challenge->post_title; ?></h3>
						<h4>Register</h4>

						<label for="name" class="name">Name</label>
						<input type="text" id="name" name="name" class="name" >

						<label for="team" class="team">Team</label>
						<select class="select2 team" name="team" id="team">
							<?php 
								foreach ( $teams as $team ) 
								{
									echo '<option value="'.$team->ID.'">'.$team->post_title.'</option>';
								}
							?>
							
							
						</select>

						<label for="email" class="email">Email</label>
						<input type="text" id="email" name="email" class="email" >
						
						<label for="password" class="password">password</label>
						<input type="text" id="password" name="password" class="password" >

						<input type="button" class="btn btn-primary" id="registerUser" value="Register">
						<span class="message"><span>
					</form>
        </div>
      </div>            
    </div>
  </div>
<?php get_footer(); ?>