<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['email']))
{
	  require_once APPPATH.'ThirdParty\phpmailer\phpmailer\src\Exception.php';
      require_once APPPATH.'ThirdParty\phpmailer\phpmailer\src\PHPMailer.php';
      require_once APPPATH.'ThirdParty\phpmailer\phpmailer\src\SMTP.php';
	 require 'vendor/autoload.php';
  
        $mail = new PHPMailer(true);
  
        try {
        $mail->SMTPDebug = 0;                                       
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com.';                    
        $mail->SMTPAuth   = true;                             
        $mail->Username   = 'fixitytech2320@gmail.com';                 
        $mail->Password   = 'pkwushaafqhabmav';                        
        $mail->SMTPSecure = 'ssl';                              
        $mail->Port       = 465; 
        $mail->setFrom('fixitytech2320@gmail.com');           
   		
   		$mailArray = array('sawlechetan27@gmail.com','chetan.sawle@straltoglobal.com');
   		foreach ($mailArray as  $value) {
   			 $mail->addAddress($value);
   		}
       
       
        $mail->isHTML(true);                                  
        $mail->Subject = 'Subject';

        $message  = "<b>First Name</b>       = ".$_POST['first_name'];
        $message .= "<br><b>Last Name</b>      = ".$_POST['last_name'];
        $message .= "<br><b>Email</b>  = ".$_POST['email'];
        $message .= "<br><b>Mobile No</b>    = ".$_POST['phone_no'];
        $message .= "<br><b>Message</b>    = ".$_POST['message'];

        $mail->Body    = $message;
  /**/
        if($mail->send()){
        	echo '
			<script type="text/javascript">

			$(document).ready(function(){

  			swal({
    		position: "top-end",
    		type: "success",
    		title: "Thank you for contacting us",
    		showConfirmButton: false,
    		timer: 1500
  			})
			});
			</script>';
      	}
   
        } catch (Exception $e) {

    			echo '
				<script type="text/javascript">

				$(document).ready(function(){

  				swal({
   	 				position: "top-end",
    				type: "warning",
    				title: "Thank you for contacting us",
    				showConfirmButton: false,
    				timer: 1500
  				})
			});

			</script>';
        }

}
?>



<div class="banner_div">
		<img class="banner_img desk" src="<?php echo base_url('assets/img/contact_us/hero/hero_web_banner.jpg');?>">
		<img class="banner_img mob" src="<?php echo base_url('assets/img/contact_us/hero/hero_mobile.jpg');?>">
	</div>

	<section class="address_bg">
		<div class="container ">
			<div class="title-head" data-aos="fade-up" data-aos-offset="50" data-aos-delay="10" data-aos-duration="500">Address</div>
			<div class="row">
				<div class="col-md-4 col-12" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
    				data-aos-duration="1000">
    				<div class="office_text">USA </div>
					<img class="award_img" src="<?php echo base_url('assets/img/contact_us/section_2/headquarters.png');?>">
					<div class="address_title">Head Quarters:</div>
					<div class="flex address_padding">
						<div class="w-7">
							<img class="w-85" src="<?php echo base_url('assets/img/contact_us/section_2/location_icon.png');?>">
						</div>
						<div class="address_text w-90">
							3333 Warrenville Road,
							Suite #200 Lisle, Illinois 60532 USA.
						</div>
					</div>
					<div class="flex address_padding">
						<div class="w-7">
							<img class="w-85" src="<?php echo base_url('assets/img/contact_us/section_2/phone_icon.png');?>">
						</div>
						<div class="address_text w-90">
							+1 (630) 270 2250
						</div>
					</div>
					<div class="flex address_padding">
						<div class="w-7">
							<img class="w-85 " src="<?php echo base_url('assets/img/contact_us/section_2/mail_icon.png');?>">
						</div>
						<div class="address_text w-90">
							info@fixitytech.com
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
    				data-aos-duration="1000">
    				<div class="office_text">India </div>
						<img class="award_img" src="<?php echo base_url('assets/img/contact_us/section_2/offshore_office.png');?>">
					<div class="address_title">Offshore office:</div>
					<div class="flex address_padding">
						<div class="w-7">
							<img class="w-85" src="<?php echo base_url('assets/img/contact_us/section_2/location_icon.png');?>">
						</div>
						<div class="address_text w-90">
							#1st floor, Legend Platinum, Jubilee Enclave, Kondapur Village, Serilingampally Mandal, Hitech City, Hyderabad, RR District - 500081.
						</div>
					</div>
					<div class="flex address_padding">
						<div class="w-7">
							<img class="w-85" src="<?php echo base_url('assets/img/contact_us/section_2/phone_icon.png');?>">
						</div>
						<div class="address_text w-90">
							+91 (720) 710 7334
						</div>
					</div>
					<div class="flex address_padding">
						<div class="w-7">
							<img class="w-85 " src="<?php echo base_url('assets/img/contact_us/section_2/mail_icon.png');?>">
						</div>
						<div class="address_text w-90">
							info@fixitytech.com
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
    				data-aos-duration="1000">
    				<center><div class="office_text ">Mexico </div></center>
					<img class="award_img" src="<?php echo base_url('assets/img/contact_us/section_2/nearshore_office.png');?>">
					<div class="address_title">Nearshore office:</div>
					<div class="flex address_padding">
						<div class="w-7">
							<img class="w-85" src="<?php echo base_url('assets/img/contact_us/section_2/location_icon.png');?>">
						</div>
						<div class="address_text w-90">
							Fixity Technologies S. de R.L. de C.V..
							WTC, Torre de oficinas, Piso 16
							Paseo de la República Km 13020,
							76230 Juriquilla, Qro, Mexico
						</div>
					</div>

					<div class="flex address_padding">
						<div class="w-7">
							<img class="w-85" src="<?php echo base_url('assets/img/contact_us/section_2/phone_icon.png');?>">
						</div>
						<div class="address_text w-90">
							+52 (442) 6441000
						</div>
					</div>
					<div class="flex address_padding">
						<div class="w-7">
							<img class="w-85 " src="<?php echo base_url('assets/img/contact_us/section_2/mail_icon.png');?>">
						</div>
						<div class="address_text w-90">
							info@fixitytech.com
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact_bg">
		<div class="container ">
			<div class="title-head">Contact Us</div>
				<form method="POST" action="<?php echo site_url('fixityHome/contact');?>" class="contact_form pd_b_5" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50"
    				data-aos-duration="1000">
					<div class="row">
						<div class="col-md-6 col-12">
					 		<label>First Name <span class="red">*</span></label>
					 		<input type="text" class="form-control" name="first_name" placeholder="Enter First Name" id="first_name" required="required">
					 	</div>
					 	<div class="col-md-6 col-12">
					 		<label>Last Name <span class="red">*</span></label>
					 		<input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" id="last_name" required="required">
					 	</div>
					 	<div class="col-md-6 col-12">
					 		<label>Email <span class="red">*</span></label>
					 		<input type="text" class="form-control" name="email" placeholder="Enter Email" id="email" required="required">
					 	</div>
					 	<div class="col-md-6 col-12">
					 		<label>Phone No.<span class="red">*</span></label>
					 		<input type="text" class="form-control" name="phone_no" placeholder="Enter Phone No." id="phone_no" required="required">
					 	</div>
					 	<div class="col-md-12 col-12">
					 		<label>Message <span class="red">*</span></label>
					 		<textarea type="text" class="form-control" style="height:150px !important;" name="message" placeholder="Enter Message" id="message"></textarea>
					 	</div>

					 	<button type='submit' class="form_btn" id="userdata">Submit &nbsp ></button>
					</div>
				</form>
			</div>
		</div><br><br><br>
	</section>
	<div class="contact_box">
		<div class="about_contact">
			<label class="about_label">SAY HELLO</label> &nbsp To 
			<a href = "mailto: info@fixitytech.com">
					<button class="about_btn">INFO@FIXITYTECH.COM</button>
				</a>

		</div>
	</div>
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
 <script src="<?php echo base_url('app/ThirdParty/sweetalert/jquery.min.js');?>"></script>
<script src="<?php echo base_url('app/ThirdParty/sweetalert/sweetalert.min.js');?>"></script>


