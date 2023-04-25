
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
                            99 S.t Jomblo Park Pekanbaru 28292.<br>
                            Indonesia.
                </p>

                <div class="social_icon_footer">
                    <i class="fa fa-facebook-f social_icon"></i>
                    <i class="fa fa-twitter social_icon"></i>
                    <i class="fa fa-instagram social_icon"></i>
                    <i class="fa fa-linkedin social_icon"></i>
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
                                <li>Home</li>
                                <li>About Us</li>
                                <li>Careers</li>
                                <li>Contacts Us</li>
                            </ul>
                        </div>

                        <div class="col-md-6 col-lg-3 col-6">
                            <div class="footer_heading_title">
                                Services 
                                <div class="yellow_line"></div>
                            </div>
                            <ul class="footer_ui">
                                <li>IT-Staffing</li>
                                <li>HTD</li>
                                <li>IT-Solutions</li>
                                <li>Product Development</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-3 col-6">
                            <div class="footer_heading_title">
                                Products
                                <div class="yellow_line"></div>
                            </div>
                            <ul class="footer_ui">
                                <li>
                                  <a href="<?php echo base_url('index.php/quilkdeals');?>">Qilkdeals</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/goodgovernance');?>">Good Governance</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/legacy');?>">
                                    Legacy</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/AMTS');?>">
                                    AMTS</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/password_protector');?>">
                                    Password Protector</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/pts');?>">
                                    PTS</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/task_master');?>">
                                    Task Master</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/vts');?>">
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
                                </li>
                                <li>
                                    <label>Blogs</label>
                                    <div class="row">
                                        <div class="col-md-4 padd-0">
                                            <img class="img_res" src="https://picsum.photos/200">
                                        </div>

                                        <div class="col-md-8">
                                            <strong class="footer_font_right">BLOGS</strong>
                                            <p class="res_des">Contrary to popular belief, Lorem Ipsum</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <label>Whitepapers</label>
                                    <div class="row">
                                        <div class="col-md-4 padd-0">
                                            <img class="img_res" src="https://picsum.photos/200">
                                        </div>

                                        <div class="col-md-8">
                                            <strong class="footer_font_right">WHITEPAPERS</strong>
                                            <p class="res_des">Contrary to popular belief, Lorem Ipsum</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright"><center>Copyright © 2023 All right are reserved by Fixity Technologies.</center></div>
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