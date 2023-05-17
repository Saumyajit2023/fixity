  <style>
	.owl-theme .owl-controls {
	    margin-top: 10px;
	    position: absolute;
	    bottom: 10%;
	    right: 0;
	}
	
	.post {
	    font-size: 14px;
	    color: #010101;
	    text-align: left;
	    font-weight: 500;
	}
	.left_dot_blue_pro_dev{
		margin-top: -18%;
	}
  </style>
  
   <!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>-->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">-->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
  <!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>-->
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css'>

    <div class="banner_div">
  		<img class="banner_img desk" src="<?php echo base_url('assets/img/partners/hero/partners_hero.jpg');?>">
		<img class="banner_img mob" src="<?php echo base_url('assets/img/partners/hero/partners_hero.jpg');?>">
	</div>


	<section class="partners_sec_1">
		<div class="row mg-lf">
			<div class="col-md-6" data-aos="fade-right" data-aos-offset="50" data-aos-delay="10" data-aos-duration="500">
				<img class="partners_img" src="<?php echo base_url('assets/img/partners/section_2/why_fixity.png');?>" style="margin-bottom: 0;">
			</div>
			<div class="col-md-5" data-aos="fade-left" data-aos-offset="50" data-aos-delay="10" data-aos-duration="500">
				<div class="about_title-head section_space partners_text">Why do partners choose Fixity Tech?</div>
				<div class="para_about_partners pad-lr-10">
					At Fixity Tech, we take pride in our partner-centric culture. We are committed to creating strong and loyal alliances with our partners and helping them grow with us. When you partner with us you get access to our services and technologies to get the right talent in your team and scale your business to scale new growth opportunities.
				</div>
			</div>
		</div>
		<img class="right_dot_partner" src="<?php echo base_url('assets/img/right_pattern.png');?>">
	</section>

	<section class="partners_sec_3">
		<div class="container ">
			<div class="partners_title_head">We made some friends along the way</div>
			<!-- <div class="desc_2">
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div> -->

			<div>
				<div class="slider">
			        <div class="slide-viewer">
			          <div class="row slide-group">
				          	<?php foreach ($partnerLogo as $value) {?>

			      			<div class="col-sm-3 col-6" data-aos="zoom-out" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="1">

			      				<img class="w-100"  src="<?php echo base_url('admin/writable/partnerLogo').'/'.$value['image_name'];?>" alt="partners_logo_one" />
			      			</div>
			  				<?php } ?>
			          </div>
			        </div>
			        <div class="slide-buttons"></div>
			      </div>
			</div>
		</div><br><br><br>
		<img class="left_dot_blue_pro_dev" src="<?php echo base_url('assets/img/left_pattern.png');?>">
	</section>

	<!-- <section class="partners_sec_4">
		<div class="container ">
			<div class="title-head">Here is what our partners have to say about their collaboration with Fixity Tech!</div>

			<div class="container-fluid" data-aos="zoom-in" data-aos-offset="50" data-aos-delay="10" data-aos-duration="500">
			  <div class="row">
			    <div class="col-md-12">
			      <div id="news-slider" class="owl-carousel">
			        <div class="post-slide">
			        	<div class="title_text_patner">Outstanding Services</div>
			        	<div>
			        		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took make a type specimen book.
			        	</div>
			        	<div class="row mg-t-5 ">
                            <div class="col-md-3">
                                <div class="pic_img">
                                    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="partners_name_title">John Doe</div>
                                <div class="post">CEO of fixity</div>
                            </div>
                        </div> 
			        </div>
			        
					<div class="post-slide">
			        	<div class="title_text_patner">Outstanding Services</div>
			        	<div>
			        		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took make a type specimen book.
			        	</div>
			        	<div class="row mg-t-5 ">
                            <div class="col-md-3">
                                <div class="pic_img">
                                    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="partners_name_title">John Doe</div>
                                <div class="post">CEO of fixity</div>
                            </div>
                        </div> 
			        </div>

			        <div class="post-slide">
			        	<div class="title_text_patner">Outstanding Services</div>
			        	<div>
			        		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took make a type specimen book.
			        	</div>
			        	<div class="row mg-t-5 ">
                            <div class="col-md-3">
                                <div class="pic_img">
                                    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="partners_name_title">John Doe</div>
                                <div class="post">CEO of fixity</div>
                            </div>
                        </div> 
			        </div>

			        <div class="post-slide">
			        	<div class="title_text_patner">Outstanding Services</div>
			        	<div>
			        		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took make a type specimen book.
			        	</div>
			        	<div class="row mg-t-5 ">
                            <div class="col-md-3">
                                <div class="pic_img">
                                    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="partners_name_title">John Doe</div>
                                <div class="post">CEO of fixity</div>
                            </div>
                        </div> 
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

		</div><br><br><br>
	</section> -->
	<section class="career_sec5">
		<div class="container">
			<div class="career_cta">
				Wish to
				<strong> Partner</strong><br> with us?
				<a href="<?php echo base_url('index.php/contact_us');?>">
					<button class="partner_btn">CONTACT US!  &gt;</button>
				</a>
			</div>
		</div>
	</section>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js'></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
	