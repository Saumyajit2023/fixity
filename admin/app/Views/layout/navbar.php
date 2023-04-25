<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                       <!--  <a href="<?php echo site_url('dashboard');?>" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="<?php echo base_url('images/logo_trigen.png');?>" srcset="<?php echo base_url('images/logo_trigen.png');?>" alt="logo">
                            <img class="logo-dark logo-img" src="<?php echo base_url('images/logo_trigen.png');?>" srcset="<?php echo base_url('images/logo_trigen.png');?>" alt="logo-dark">
                            <img class="logo-small logo-img logo-img-small" src="<?php echo base_url('images/logo_trigen.png');?>" srcset="<?php echo base_url('images/logo_trigen.png');?>" alt="logo-small">
                        </a> -->
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">

                                <?php $menus = $_SESSION['menus']; 
                                     
                                    foreach($menus as $value){  
                                         

                                ?>

                                    <li class="nk-menu-item <?php echo sizeof($value['childmenus'])? 'has-sub' : '';?>">
                                        <a href="<?php echo sizeof($value['childmenus'])? '#' : site_url('admin/index.php/'.$value['url']);?>" class="nk-menu-link  <?php echo sizeof($value['childmenus'])? 'nk-menu-toggle' : '';?>">
                                           <!--  <span class="nk-menu-icon"><em class="<?php echo $value['icons'];?>"></em></span> -->
                                            <span class="nk-menu-text"><?php echo $value['name'];?></span>
                                        </a>
                                        <?php 
                                            if(sizeof($value['childmenus'])){ ?>

                                                <ul class="nk-menu-sub"> 
                                            
                                        <?php     foreach($value['childmenus'] as $val){
                                        
                                        ?>
                                                    <li class="nk-menu-item">
                                                        <a href="<?php echo site_url('admin/index.php/'.$val['url']);?>" class="nk-menu-link"><span class="nk-menu-text"><?php echo $val['name'];?></span></a>
                                                    </li>


                                             <?php }  ?>
                                                </ul>
                                    <?php   } 
                                        ?>
                                    </li>    

                    <?php           }
                                
                    ?>
                        
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>