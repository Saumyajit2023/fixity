<style type="text/css">
    header {
        position: absolute;
        padding: 0 2rem;
        background-color: #4c4848cc!important;
        width: 100%;
        height: 100px!important;
    }
    .dropdown_menu{
    	z-index: 1!important;
    }
    .navbar .toggle_btn{
    	z-index: 5!important;
    }
</style>

<section class="quickdeal_sec_1 padd-10">
	<div class="container">
		<div class="partners_title_head padd-5">Blogs</div>
		<div class="desc_2 white_color">
			Catch more updateds on the leading industry trends and updates
		</div>
		<div class="row">
		<?php foreach ($blog as $key => $value) { ?>
				  <input type="hidden" name="id" id="id" value="<?php echo $value['id'];?>">
			<div class="col-md-4 pd_b_5" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
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
				<label class="blogs_text_2">
					<?php echo $value['title'];?>
				</label>
				<div>
	        		<button class="award_btn" id="blog_button"><a href="<?php echo site_url('Resources/Blog_Detail/');?><?php echo urlencode(base64_encode($value['id']));?>">KNOW MORE  ></a></button>
	        	</div>
			</div>
		
	<?php }?>
	</div>
<!-- 
			<div class="col-md-4 pd_b_5" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
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
				<label class="blogs_text_2">
					At vero eos et accusamus et odio dignissimos.
				</label>
				<div>
	        		<button class="award_btn">KNOW MORE  ></button>
	        	</div>
			</div>

			<div class="col-md-4 pd_b_5" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
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
				<label class="blogs_text_2">
					At vero eos et accusamus et odio dignissimos.
				</label>
				<div>
	        		<button class="award_btn">KNOW MORE  ></button>
	        	</div>
			</div>
			<div class="col-md-4 pd_b_5" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
				<img class="award_blog_img" src="<?php echo base_url('assets/img/resource/blogs/image_1_Blog sample.jpg');?>">
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
				<label class="blogs_text_2">
					At vero eos et accusamus et odio dignissimos.
				</label>
				<div>
	        		<button class="award_btn">KNOW MORE  ></button>
	        	</div>
			</div>

			<div class="col-md-4 pd_b_5" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
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
				<label class="blogs_text_2">
					At vero eos et accusamus et odio dignissimos.
				</label>
				<div>
	        		<button class="award_btn">KNOW MORE  ></button>
	        	</div>
			</div>

			<div class="col-md-4 pd_b_5" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50" data-aos-duration="1000" data-aos-delay="50" data-aos-duration="1000">
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
				<label class="blogs_text_2">
					At vero eos et accusamus et odio dignissimos.
				</label>
				<div>
	        		<button class="award_btn">KNOW MORE  ></button>
	        	</div>
			</div>
		</div> -->

	</div><br><br><br>
</section>

	