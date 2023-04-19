  <header>
    <div class="navbar">
      <div class="logo">
        <a href="<?php echo base_url('index.php/home');?>">
            <img class="logo_img" src="<?php echo base_url('assets/img/fixity_logo.png');?>">
        </a>
      </div>

      <div class="menu_box desk">
        <ul id="menu" style="text-align: center">            
            <li class="parent">
              Services<span class="expand"></span>
              <!-- <?php echo base_url('index.php/services');?> -->
              <ul class="child">
                <li><a href="<?php echo site_url('staffing');?>">IT Staffing</a></li>
                <li><a href="<?php echo site_url('IT_Solution');?>">IT Solutions</a></li>
                <li><a href="<?php echo site_url('product_development');?>">Product Development </a></li>
                <li><a href="<?php echo site_url('htd');?>">HTD</a></li>
              </ul>
            </li>
            
            <li class="parent">Product<span class="expand"></span>
              <!-- <?php echo base_url('index.php/product');?> -->
              <ul class="child">
                <li><a href="<?php echo site_url('quilkdeals');?>">Qilkdeals</a></li>
                <li><a href="<?php echo site_url('goodgovernance');?>">Good Governance </a></li>
                <li><a href="<?php echo site_url('legacy');?>">Legacy</a></li>
                <li><a href="<?php echo site_url('AMTS');?>">Asset Management and Tracking System</a></li>
                <li><a href="<?php echo site_url('password_protector');?>">Password Protector</a></li>
                <li><a href="<?php echo site_url('pts');?>">Performance Tracking System </a></li>
                <li><a href="<?php echo site_url('task_master');?>">Task Master</a></li>
                <li><a href="<?php echo site_url('vts');?>">Vendor Tracking System</a></li>
              </ul>
            </li>
            <li class="parent"><a href="<?php echo site_url('resource');?>">Resources</a>
            </li>
            <li class="parent"><a href="<?php echo site_url('about_us');?>">About Us </a>
            </li>
            
            <li class="parent"><a href="<?php echo site_url('contact_us');?>">Contact Us</a>
            </li>
            
            
          </ul>
      </div>

      <div class="toggle_btn">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>
    <div class="dropdown_menu">
      <li class="desk padding-10">
        <div class="row">
          <div class="col-md-6 menu_border_right">
            <div>
              <ul>
                <li class="dropdown2">
                  <a class="menu_text" data-toggle="dropdown2" href="<?php echo site_url('partner');?>">Partners</a>
                </li>
                <li class="dropdown2">
                  <a class="menu_text" data-toggle="dropdown2" href="<?php echo site_url('career');?>">Careers</a>
                </li>
                <li class="dropdown2">
                  <a class="menu_text" data-toggle="dropdown2" href="<?php echo site_url('blog');?>">Blog</a>
                </li>
                <li class="dropdown2">
                  <a class="menu_text" data-toggle="dropdown2" href="<?php echo site_url('resource#award');?>">Awards</a>
                </li>
                <li class="dropdown2">
                  <a class="menu_text" data-toggle="dropdown2" href="<?php echo site_url('whitepaper');?>">Whitepaper</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
              <div class="menu_text_right menu_border_bottom">
                Fixity helps businesses across the globe to achieve their growth targets and objectives. We offer a specialized spectrum of services across various verticals & functions. We hold a remarkable experience of serving several renowned Fortune 500 clients among many other noteworthy names.
              </div>
              <div class="menu_text_right">
                <label class="address_menu_title">Head Quarters</label><br>
                <label>3333 Warrenville Road, <br>Suite #200 Lisle, Illinois 60532 USA.</label><br>
                <label><i class="fa fa-phone"></i> &nbsp&nbsp&nbsp+1 (630) 270 2250</label><br>
                <label><i class="fa fa-envelope"></i>&nbsp&nbsp&nbsp info@fixitytech.com</label>
              </div>
          </div>
        </div>
      </li>
      <li class="dropdown2 mob">
        <a  data-toggle="dropdown2" href="<?php echo site_url('home');?>">Home</a>
      </li>
      <li class="dropdown2 mob">
        <a  data-toggle="dropdown2" href="<?php echo site_url('about_us');?>">About</a>
      </li>
      <li class="dropdown2 mob">
        <a href="#" data-toggle="dropdown2">Services <i class="icon-arrow"></i></a>
        <ul class="dropdown2-menu">
          <li><a href="<?php echo site_url('staffing');?>" >IT Staffing</a></li>
          <li><a href="<?php echo site_url('IT_Solution');?>" >IT Solutions</a></li>
          <li><a href="<?php echo site_url('product_development');?>" >Product Development</a></li>
          <li><a href="<?php echo site_url('htd');?>" >HTD</a></li>
        </ul>
      </li>
      <li class="dropdown2 mob">
        <a href="#" data-toggle="dropdown2">Products <i class="icon-arrow"></i></a>
        <ul class="dropdown2-menu">
          <li><a href="<?php echo site_url('quilkdeals');?>" >Qlikdeals</a></li>
          <li><a href="<?php echo site_url('goodgovernance');?>" >Good Governance</a></li>
          <li><a href="<?php echo site_url('legacy');?>" >Legacy</a></li>
          <li><a href="<?php echo site_url('AMTS');?>">Asset Management and Tracking System</a></li>
          <li><a href="<?php echo site_url('password_protector');?>">Password Protector</a></li>
          <li><a href="<?php echo site_url('pts');?>">Performance Tracking System </a></li>
          <li><a href="<?php echo site_url('task_master');?>">Task Master</a></li>
          <li><a href="<?php echo site_url('vts');?>">Vendor Tracking System</a></li>
        </ul>
      </li>
      <li class="dropdown2 mob">
        <a  data-toggle="dropdown2" href="<?php echo site_url('partner');?>">Partners</a>
      </li>
      <li class="dropdown2 mob">
        <a  data-toggle="dropdown2" href="<?php echo site_url('resource');?>">Resources</a>
      </li>
      <li class="dropdown2 mob">
        <a  data-toggle="dropdown2" href="<?php echo site_url('career');?>">Careers</a>
      </li>
      <li class="dropdown2 mob">
        <a  data-toggle="dropdown2" href="<?php echo site_url('contact_us');?>">Contact</a>
      </li>
      
    </div>
  </header>
  <script type="text/javascript">
    // dropdown2 Menu
    var dropdown2 = document.querySelectorAll('.dropdown2');
    var dropdown2Array = Array.prototype.slice.call(dropdown2,0);
    dropdown2Array.forEach(function(el){
      var button = el.querySelector('a[data-toggle="dropdown2"]'),
          menu = el.querySelector('.dropdown2-menu'),
          arrow = button.querySelector('i.icon-arrow');

      button.onclick = function(event) {
        if(!menu.hasClass('show')) {
          menu.classList.add('show');
          menu.classList.remove('hide');
          arrow.classList.add('open');
          arrow.classList.remove('close');
          event.preventDefault();
        }
        else {
          menu.classList.remove('show');
          menu.classList.add('hide');
          arrow.classList.remove('open');
          arrow.classList.add('close');
          event.preventDefault();
        }
      };
    })

    Element.prototype.hasClass = function(className) {
        return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
    };
  </script>