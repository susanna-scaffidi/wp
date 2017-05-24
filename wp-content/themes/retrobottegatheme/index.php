<?php get_header(); ?>
    <div class="row">   
        <h1><?php bloginfo('name') ?></h1>
        <h2><?php bloginfo('description') ?></h2>   
    </div>
  </div>

  <div class="row" id="services">
    <div class="col-lg-12 text-center">
      <h3>Our Services</h3>
      <h2>Flowers for every need</h2>
    </div>
  </div>
  <div class="row row-services">
    <div class="col-lg-12 text-center">
      <div class="col-sm-6 col-md-4">
        <a href="#" class="img-thumbnail">
          <img src="<?php bloginfo('template_url');?>/images/t1.jpg" class="img-responsive" alt="">
        </a>
          <p><a href="#" class="btn btn-success" role="button">Garden</a></p>    
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="#" class="thumbnail">
          <img src="<?php bloginfo('template_url');?>/images/t2.jpg" class="img-responsive" alt="">
        </a>
            <p><a href="#" class="btn btn-success" role="button">Wedding</a></p>
      </div>
      <div class="col-sm-6 col-md-4">
      <a href="#" class="thumbnail">
        <img src="<?php bloginfo('template_url');?>/images/t3.jpg" class="img-responsive" alt="">
      </a>
          <p><a href="#" class="btn btn-success" role="button">Workshops</a></p>
      </div>
    </div>
  </div>

  <div class="row" id="contact">
    <div class="col-lg-12 text-center">
      <h3>Contact us</h3>
      <h2>We are happy to help you!</h2>
    </div>
  </div>
  <form role="form" data-toggle="validator">
    <div class="row row-form">
      <div class="col-lg-12">
          <div class="form-group has-feedback">
            <label for="inputName" class="control-label">Name</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" class="form-control input-lg" id="inputName" placeholder="Your name" data-error="Please insert your name" required>
            </div>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputEmail" class="control-label">Email</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control input-lg" id="inputEmail" placeholder="email@example.com" data-error="Hey, that email address is invalid!" required>
            </div>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"><i>Please insert a valid email address</i></div>
          </div>
          <div class="form-group">
            <label for="inputPhone" class="control-label">Phone</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
              <input type="number" class="form-control input-lg" id="inputPhone" placeholder="Leave phone number if you wish to be called">
            </div>
            <div class="help-block with-errors"><i>Please insert numbers only</i></div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputText" class="control-label">Message</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
              <textarea class="form-control input-lg" rows="3" placeholder="Why are you contacting us?" required></textarea>
            </div>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          </div>
          <div class="form-group">
            <div class="row text-center">
              <label for="inputSubscribe" class="control-label"><h2>Would you like to subscribe to our newsletter?</h2></label>
                <div class="radio">
                  <label><input type="radio" name="optradio" required="">Sure!</label>
                </div>
                <div class="radio">
                  <label><input type="radio" name="optradio" required="">No, thanks</label>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 text-center">
              <button type="submit" class="btn btn-default btn-lg">Submit</button>
            </div>
          </div>
  </form>
<?php get_footer(); ?>
