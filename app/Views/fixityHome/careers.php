<div class="banner_div">
		<img class="banner_img desk" src="<?php echo base_url('assets/img/career/section_1/hero_image.png');?>">
		<img class="banner_img mob" src="<?php echo base_url('assets/img/career/section_1/hero_image_mobile.png');?>">
	</div>

	<section class="career_sec2">
		<img class="car_dot_blue" src="<?php echo base_url('assets/img/right_pattern.png');?>">
		<div class="container ">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-6" data-aos="fade-right" data-aos-offset="50" data-aos-delay="10" data-aos-duration="500">
					<img class="w-100 section_space" src="<?php echo base_url('assets/img/career/section_2/philosophy_image.png');?>">
				</div>

				<div class="col-12 col-sm-12 col-lg-6" data-aos="fade-left" data-aos-offset="50" data-aos-delay="10" data-aos-duration="500">
					<div class="about_title-head section_space">Our Philosophy</div><br>
					<p class="para_about">
						At Fixity, we are committed to creating a culture of faith, trust, and growth. Our work culture is driven by the discipline of courage, honesty & transparency. We help our employees feel connected, engaged, and aligned with the company's vision to become a global leader in IT staffing and product outsourcing.</p>
					<p class="para_about">
						We have an enriching custom of celebrating the small wins of our employees to boost their motivation and empower them. We encourage clear communication and foster a safe environment for our employees to share their ideas, views, and opinions. We are committed to the safety of our workplace and true to our philosophy of 'we deliver what we promise' to both our clients and employees.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="quickdeal_sec_2">
		<div class="container ">
			<div class="title-head" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
				data-aos-duration="1000">Fixity Life</div>
			<div class="desc_2">
						Fixity has its presence across three continents currently and we are on a mission to build a global footprint. Join us in this mission and start doing work that matters.
			</div>
			<div class="desc_2">
						At Fixity Tech, you get the chance to be part of an organization that fosters an environment conducive to growth and helps you achieve your professional goals.
			</div>
			<div class="desc_2">
						Our team prioritizes innovation and always seeks to push the boundaries of IT staffing, product outsourcing, and more. We thrive on knowledge exchange and work together to deliver the best services to our clients. No matter who you are or where you're from, your growth is always our priority..
			</div>

			<div>
				<img class="w-100" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50"
				data-aos-duration="1000" src="<?php echo base_url('assets/img/career/section_3/image_collage.png');?>">
			</div>
		</div><br><br><br>
		<img class="about_dot_blue" src="<?php echo base_url('assets/img/right_pattern.png');?>">
	</section>

	<section class="career_sec4">
		<div class="container ">
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-6">
					<img class="mission_img"  src="<?php echo base_url('assets/img/career/section_4/icon.png');?>">
					<div class="join_us">
						Join us to be part of our mission
					</div>
					<p class="para_about join_us_text">
						We are currently hiring for these roles -
					</p>
				</div>

				<div class="col-12 col-sm-6 col-lg-6">
					<div class="accordion">
						<?php $i=1; foreach ($career as $value) {
							?>
              <div class="box">
                  <div class="label"><?php echo $i.".  ". $value['title'];?></div>
                  <div class="content">
                  	<p><?php echo $value['description'];?></p>
                  	<a href="#"><button class="apply_now">Apply Now</button></a>                      
                  </div>
              </div>
            <?php $i++; }?>
              
             
          </div>
				</div>
			</div>
		</div>
	</section>

	<section class="career_sec5">
		<div class="container">
			<div class="career_cta">
				If you think you are fit for any of these roles,<br>
				<strong> reach out to us!</strong><br>
				<a href="<?php echo base_url('index.php/contact_us');?>">
					<button class="about_btn">CONTACT US!  &gt;</button>
				</a>
			</div>
		</div>
	</section>

	<script type="text/javascript">
      let label = document.querySelectorAll(".box")

      label.forEach((e)=>{
          e.addEventListener("click", ()=>{
              removeClass()
              e.classList.toggle("active")
          })
      })

      function removeClass(){
          label.forEach((e)=>{
              e.classList.remove("active")
          })
      }
  </script>