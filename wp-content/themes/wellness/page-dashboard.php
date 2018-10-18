<?php get_header(); /* Template Name: Dashboard */ ?>
	<?php get_template_part( 'template-parts/big', 'hero') ; ?>
  <div class="container" style="padding: 50px 15px;">
    <div class="row">
      <div class="col-md-10">
        <div class="form-group dashboard-form">
          <div class="row">
            <div class="col-md-8">
              <input type="text" class="form-control" placeholder="ENTER EXERCISE">
            </div>
            <div class="col-md-4">
              <button><i class="fa fa-play" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-10 challenge-row">
      
        <div class="row flex-center">
        
          <div class="col-md-6">
              <div class="challenge-card">Current Challenge</div>
          </div>
          <div class="col-md-6">
            <p>Team 1 &nbsp;&nbsp;&nbsp; 278 minutes</p>
            <p>Team 2 &nbsp;&nbsp;&nbsp; 235 minutes</p>
            <p>Team 3 &nbsp;&nbsp;&nbsp; 224 minutes</p>
            <p>Team 4 &nbsp;&nbsp;&nbsp; 180 minutes</p>
          </div>
        </div>
      </div>
      <div class="col-md-10 challenge-row">
      
        <div class="row flex-center">
        
          <div class="col-md-6">
              <div class="challenge-card">Old Challenge</div>
          </div>
          <div class="col-md-6">
            <p>Team 2 Winner 505 minutes</p>
            <p>Team 4 380 minutes</p>
            <p>Team 1 377 minutes</p>
            <p>Team 3 250 minutes</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>