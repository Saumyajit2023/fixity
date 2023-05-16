<style>
	.owl-theme .owl-controls {
	    margin-top: 10px;
	    position: absolute;
	    bottom: 10%;
	    right: 0;
	}
	.owl-controls .owl-buttons .owl-prev{
		right: 90px!important;
	    left: inherit;
	}
	.post {
	    font-size: 14px;
	    color: #010101;
	    text-align: left;
	    font-weight: 500;
	}

	header {
    	background: rgb(255,255,255);
		background: linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(1,22,79,0.9248074229691877) 22%, rgba(1,22,79,1) 43%);
	}
    .dropdown_menu{
    	z-index: 1!important;
    }
    .navbar .toggle_btn{
    	z-index: 5!important;
    }
    .text_des_blog{
	    color: #fff;
	    height: 15vh;
	}
</style>
	<!-- <div class="banner_div">
		<img class="banner_img desk" src="<?php echo base_url('assets/img/resource/hero/resource_hero.jpg');?>">
		<img class="banner_img mob" src="<?php echo base_url('assets/img/resource/hero/resource_hero.jpg');?>">
	</div> -->
	
	<section class="award_sec_1 section_space mobile_top" id="award">
		<img class="blgo_dot_blue" src="<?php echo base_url('assets/img/right_pattern.png');?>">
		<div class="container" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
			<div class="title-head">We lead ahead with<br> award-winning learning expertise</div>
			<div class="desc_2">
				We are humbled to be recongnized & applauded by esteemed names in the industry
			</div>

			<div class="row mg-lf award_padding_bottom">
				<div class="col-12 col-sm-12 col-lg-6" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
					<img class="award_img" src="<?php echo base_url('assets/img/resource/awards/award_sample_2.jpg');?>">

					<!-- <div class="award_name_title">John Doe</div>
					<div class="award_name_text">
		        		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took make a type specimen book.when an unknown printer took make a type specimen book.
		        	</div>
		        	<div>
		        		<button class="award_btn">KNOW MORE  ></button>
		        	</div> -->
				</div>
				<div class="col-12 col-sm-12 col-lg-6" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
					<img class="award_img_2" style="padding-bottom: 5%" src="<?php echo base_url('assets/img/resource/awards/award_sample_1.jpg');?>">
					<img class="award_img_2" src="<?php echo base_url('assets/img/resource/awards/award_sample_3.jpg');?>">
					<!-- <div class="award_name_title">John Doe</div>
					<div class="award_name_text">
		        		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took make a type specimen book.when an unknown printer took make a type specimen book.
		        	</div>
		        	<div>
		        		<button class="award_btn">KNOW MORE  ></button>
		        	</div> -->
				</div>
				<!-- <div class="col-12 col-sm-12 col-lg-6">
					<div class="row award_overflow">
						<div class="col-12 col-sm-12 col-lg-4 award_padding">
							<img class="award_img" src="<?php echo base_url('assets/img/resource/awards/award_sample_2.jpg');?>">
						</div>
						<div class="col-12 col-sm-12 col-lg-8 award_padding_2">
							<div class="award_name_title">John Doe</div>
							<div class="award_name_text">
				        		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took make a type specimen book.when an unknown printer took make a type specimen book.
				        	</div>
				        	<div>
				        		<button class="award_btn">KNOW MORE  ></button>
				        	</div>
						</div> -->

						<!-- <div class="col-12 col-sm-12 col-lg-4 award_padding">
							<img class="award_img" src="<?php echo base_url('assets/img/resource/awards/award_sample_1.jpg');?>">
						</div>
						<div class="col-12 col-sm-12 col-lg-8 award_padding_2">
							<div class="award_name_title">John Doe</div>
							<div class="award_name_text">
				        		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took make a type specimen book.when an unknown printer took make a type specimen book.
				        	</div>
				        	<div>
				        		<button class="award_btn">KNOW MORE  ></button>
				        	</div>
						</div>

						<div class="col-12 col-sm-12 col-lg-4 award_padding">
							<img class="award_img" src="<?php echo base_url('assets/img/resource/awards/award_sample_2.jpg');?>">
						</div>
						<div class="col-12 col-sm-12 col-lg-8 award_padding_2">
							<div class="award_name_title">John Doe</div>
							<div class="award_name_text">
				        		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took make a type specimen book.when an unknown printer took make a type specimen book.
				        	</div>
				        	<div>
				        		<button class="award_btn">KNOW MORE  ></button>
				        	</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="award_sec_2" >
		<div class="container">
			<div class="service_title_2 padd-5">Blogs</div>
			<div class="desc_2 white_color">
				Catch more updateds on the leading industry trends and updates
			</div>

			<div class="row">
				<?php foreach ($blog as $key => $value) { ?>
		
				<div class="col-md-4" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
					<img class="award_blog_img" src="<?php echo base_url('admin/writable/blog_thumbnail').'/'.$value['thumbnail_img'];?>">
					<div class="row">
						<div class="col-md-6 col-6">
							<img src="<?php echo base_url('assets/img/resource/blogs/calander_icon.png');?>">
							<span class="icon_text"><?php echo $value['visible_on'];?></span>
						</div>
						<div class="col-md-6 col-6">
							<img src="<?php echo base_url('assets/img/resource/blogs/comment_icon.png');?>">
							<span class="icon_text">Comment </span>
						</div>
					</div>
					<label class="blogs_text">
							<?php echo $value['title'];?>
					</label>
					<p class="text_des_blog">
							<?php echo implode('.', array_slice(explode('.', $value['description']), 0, 1));?>
					</p>
					<div>
		        		<button class="award_btn" id="blog_button"><a href="<?php echo site_url('Resources/Blog_Detail/');?><?php echo urlencode(base64_encode($value['id']));?>">KNOW MORE  ></a></button>
		        	</div>
				</div>

			   <?php }?>


	<!-- 			<div class="col-md-4" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
					<img class="award_blog_img" src="<?php echo base_url('assets/img/resource/blogs/image_2_Blog sample.jpg');?>">
					<div class="row">
						<div class="col-md-6 col-6">
							<img src="<?php echo base_url('assets/img/resource/blogs/calander_icon.png');?>">
							<span class="icon_text">20 Mar 2023</span>
						</div>
						<div class="col-md-6 col-6">
							<img src="<?php echo base_url('assets/img/resource/blogs/comment_icon.png');?>">
							<span class="icon_text">Comment </span>
						</div>
					</div>
					<label class="blogs_text">
						At vero eos et accusamus et odio dignissimos.
					</label>
					<div>
		        		<button class="award_btn">KNOW MORE  ></button>
		        	</div>
				</div> -->

				<!-- <div class="col-md-4" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
					<img class="award_blog_img" src="<?php echo base_url('assets/img/resource/blogs/image_3_Blog sample.jpg');?>">
					<div class="row">
						<div class="col-md-6 col-6">
							<img src="<?php echo base_url('assets/img/resource/blogs/calander_icon.png');?>">
							<span class="icon_text">20 Mar 2023</span>
						</div>
						<div class="col-md-6 col-6">
							<img src="<?php echo base_url('assets/img/resource/blogs/comment_icon.png');?>">
							<span class="icon_text">Comment </span>
						</div>
					</div>
					<label class="blogs_text">
						At vero eos et accusamus et odio dignissimos.
					</label>
					<div>
		        		<button class="award_btn">KNOW MORE  ></button>
		        	</div>
				</div>
			</div> -->

			

		</div>
		<center>
			<a href="<?php echo site_url('blog');?>">
                <button class="blog-more-btn">View More</button>
            </a>
		</center>
		<br><br><br>
		<img class="left_dot_blue_blgo " src="<?php echo base_url('assets/img/right_pattern.png');?>">
	</section>

	<!-- 	<section class="whitepaper blogs_bg">
		<div class="container" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
			<div class="title-head">Whitepaper</div>
			<div class="desc_2 award_padding_bottom">
				Get insights on IT hiring and product outsourcing trends!
			</div>
			<div class="row mg-lf">
				<div class="col-12 col-sm-12 col-lg-6">
					<img class="whitepaper_img" src="<?php echo base_url('assets/img/resource/whitepaper/whitepaper_sample_image.png');?>">
				</div>
				<div class="col-12 col-sm-12 col-lg-6">
					<div class="milestones_details">Lorem Ipsum is simply dummy</div>
					<div class="whitepaper_desc">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br><br>

						It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-4" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
					<img class="award_blog_img" src="<?php echo base_url('assets/img/resource/whitepaper/whitepaper_sample_image_1.png');?>">
					
					<label class="award_name_text_2">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</label>
					<div>
		        		<button class="award_btn">KNOW MORE  ></button>
		        	</div>
				</div>

				<div class="col-12 col-sm-12 col-lg-4" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
					<img class="award_blog_img" src="<?php echo base_url('assets/img/resource/whitepaper/whitepaper_sample_image_2.png');?>">
					
					<label class="award_name_text_2">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</label>
					<div>
		        		<button class="award_btn">KNOW MORE  ></button>
		        	</div>
				</div>

				<div class="col-12 col-sm-12 col-lg-4" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
					<img class="award_blog_img" src="<?php echo base_url('assets/img/resource/whitepaper/whitepaper_sample_image_3.png');?>">
					
					<label class="award_name_text_2">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</label>
					<div>
		        		<button class="award_btn">KNOW MORE  ></button>
		        	</div>
				</div>
			</div>
		</div>
	</section> -->

	<section class="career_footer">
		<div class="container">
			<div class="resource_cta">
				Stay turned with us to remain 
				updated with 
				<strong>industry trends!</strong>
			</div>
		</div>
	</section>
