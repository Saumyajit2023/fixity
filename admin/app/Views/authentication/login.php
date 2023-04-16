<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="">
    <!-- Page Title  -->
    <title>Fixity</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?php echo base_url('admin/assets/css/dashlite.css?ver=2.9.0');?>">
    <link id="skin-default" rel="stylesheet" href="<?php echo base_url('admin/assets/css/theme.css?ver=2.9.0');?>">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white toggle-slide-middle" style="margin: auto;">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                   <!--  <a class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="<?php echo  base_url('images/logo_trigen.png');?>" srcset="<?php echo base_url('images/logo_trigen.png');?>" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="<?php echo base_url('images/logo_trigen.png');?>" srcset="<?php echo base_url('images/logo_trigen.png');?>" alt="logo-dark"> 
                                    </a> -->
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <?php if(session()->getFlashdata('msg')){?>
                                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                <?php } 
                                ?>
                                        <h5 class="nk-block-title">Sign-In</h5>
                                        <!-- <div class="nk-block-des">
                                            <p>Access the DashLite panel using your email and passcode.</p>
                                        </div> -->
                                    </div>
                                </div><!-- .nk-block-head -->
                               
                                <form class="form-validate is-alter" method="POST" id="loginform" action="<?php echo site_url('admin/index.php/auth');?>">

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email-address">Email</label>
                                            <!-- <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a> -->
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" required id="email-address" name="username" placeholder="Enter your email address">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                           <!--  <a class="link link-primary link-sm" tabindex="-1" href="<?php echo site_url('forgetCode');?>">Forgot Password ?</a> -->
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password" class="form-control form-control-lg" required id="password" placeholder="Enter your password">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form><!-- form -->
                              <!--   <div class="form-note-s2 pt-4"> New on our platform? <a href="html/pages/auths/auth-register.html">Create an account</a>
                                </div> -->
                                
                               <!--  <div class="text-center mt-5">
                                    <span class="fw-500">I don't have an account? <a href="#">Try 15 days free</a></span>
                                </div> -->
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                   
                                </div>
                                <div class="mt-3">
                                   <!--  <p>&copy;Copyright @2022 Exam Portal. Design By Trigensoft Solutions</p> -->
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                  
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="<?php echo base_url(); ?>/admin/assets/js/bundle.js?ver=2.9.0"></script>
    <script src="<?php echo base_url(); ?>/admin/assets/js/scripts.js?ver=2.9.0"></script>
    <!-- select region modal -->
    

</html>