
<div class="footer_bg ">
    <div class="container paddt-10">
        <div class="row ">
            <div class="col-md-12 col-lg-3">
                <div class="">
            <a href="">
                <img class="footer_logo" src="<?php echo base_url('assets/img/Footer_logo.png');?>">
            </a>
          </div>
          <div>
            <p class="footer_address">
                info@fixitytech.com<br>
                3333 Warrenville Road, Suite #200 Lisle,<br> Illinois 60532 USA.
            </p>

            <div class="social_icon_footer">
                <a href="https://www.facebook.com/fixitytech">
                    <i class="fa fa-facebook-f social_icon"></i>
                </a>
                <a href="https://twitter.com/FixityTech_">
                    <i class="fa fa-twitter social_icon"></i>
                </a>
                <a href="https://www.instagram.com/fixitytech/">
                    <i class="fa fa-instagram social_icon"></i>
                </a>
                <a href="https://www.linkedin.com/company/fixity-technologies/">
                    <i class="fa fa-linkedin social_icon"></i>
                </a>
            </div>
          </div>
            </div>

            <div class="col-md-12 col-lg-9">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-6">
                        <div class="footer_heading_title">
                            Quick Links
                            <div class="yellow_line"></div>
                        </div>
                        <ul class="footer_ui">
                            <a href="<?php echo base_url('home');?>">
                                <li>Home</li>
                            </a>
                            <a href="<?php echo base_url('about_us');?>">
                                <li>About Us</li>
                            </a>
                            <a href="<?php echo site_url('career');?>">
                                <li>Careers</li>
                            </a>
                            <a href="<?php echo base_url('contact_us');?>">
                                <li>Contacts Us</li>
                            </a>
                        </ul>
                    </div>

                    <div class="col-md-6 col-lg-3 col-6">
                        <div class="footer_heading_title">
                            Services 
                            <div class="yellow_line"></div>
                        </div>
                        <ul class=" footer_ui">
                            <a href="<?php echo base_url('staffing');?>">
                                <li>IT-Staffing</li>
                            </a>                            

                            <a href="<?php echo base_url('IT_Solution');?>">
                                <li>IT-Solutions</li>
                            </a>
                            <a href="<?php echo base_url('product_development');?>">
                                <li>Product Development</li>
                            </a>

                            <a href="<?php echo base_url('htd');?>">
                                <li>HTD</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 col-6">
                        <div class="footer_heading_title">
                            Products
                            <div class="yellow_line"></div>
                        </div>
                        <ul class="footer_ui">
                            <li>
                              <a href="<?php echo base_url('quilkdeals');?>">Qilkdeals</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('goodgovernance');?>">Good Governance</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('legacy');?>">
                                Legacy</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('AMTS');?>">
                                AMTS</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('password_protector');?>">
                                Password Protector</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('pts');?>">
                                PTS</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('task_master');?>">
                                Task Master</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('vts');?>">
                                Vendor Tracking System</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6 col-lg-3 col-6">
                        <div class="footer_heading_title">
                            Resources
                            <div class="yellow_line"></div>
                        </div>
                        <ul class="footer_ui line-height_2">
                            <li>
                                <label>Awards/Media</label>
                                <div class="row">
                                    <div class="col-md-4 padd-0">
                                        <img class="img_res" src="https://picsum.photos/200">
                                    </div>

                                    <div class="col-md-8">
                                        <strong class="footer_font_right">AWARDS/MEDIA</strong>
                                        <p class="res_des">Contrary to popular belief, Lorem Ipsum</p>
                                    </div>
                                </div>
                            </li><br>
                            <li>
                                <label>Blogs</label>
                                <div class="row">
                                    <div class="col-md-4 padd-0">

                                        <img class="img_res" id="image" src="<?php echo base_url('admin/writable/blog_banner').'/'.$blog_footer['blogImage'];?>">
                                    </div>

                                    <div class="col-md-8">
                                       
                                        <strong class="footer_font_right"><?php echo $blog_footer['title'];?></strong>
                                        <p class="res_des"><?php echo $blog_footer['descript'];?></p>
                                    </div>
                                </div>
                            </li>
                            <!-- <li>
                                <label>Whitepapers</label>
                                <div class="row">
                                    <div class="col-md-4 padd-0">
                                        <img class="img_res" src="https://picsum.photos/200">
                                    </div>

                                    <div class="col-md-8"> <strong
                                    class="footer_font_right">WHITEPAPERS</strong>
                                    <p class="res_des">Contrary to
                                    popular belief, Lorem Ipsum</p>
                                    </div> </div> 
                            </li>  -->
                        </ul> 
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
    <div class="copyright"> 
        <center>Copyright  © 2023 All right are reserved by Fixity Technologies.</center> 
        <label class="p_p">
            <a class="white_color"  href="<?php echo site_url('privacy_policy');?>"> Privacy Policy </a> 
        </label>
    </div> 
</div>

    
    <?php
            if(isset($js))    // IF not external or plugin jump to footer js
            {
                $flag = 1;
                foreach ($js as $key => $value) 
                {
                   if($key == "plugin") 
                   {
                       foreach ($value as $include_plugin_js) 
                        {
                           echo '<script src="'.base_url($include_plugin_js).'"></script>';
                           echo "\n";
                        }     
                    }else{
                        foreach ($value as $include_plugin_js) 
                        {  
                           
                            echo view($include_plugin_js);
                            echo "\n";   
                        }
                    }
                }
            }            
?>

   
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
   

  </script>

</html>