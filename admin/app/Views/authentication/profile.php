
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">

                                <div class="nk-block">
                                     <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title" style="color:#526484;">Profile</h3>
                                        </div><br>
                                    <div class="card">

                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">

                                                            <h4 class="nk-block-title">Personal Information</h4>
                                                            <div class="nk-block-des">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                         <form method="post" id="update_form" enctype="multipart/form-data">
                                
                                      <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $admin->email;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">New Password</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="password" name="password" minlength="8" required>
                                        </div>
                                        <span id="error"></span>
                                    </div>
                                      <div class="form-group">
                                        <label class="form-label" for="full-name">Confirm Password</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="password1" name="password1" minlength="8" required>
                                        </div>
                                    </div>
                                   
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-primary">Update Profile</button>
                                </div>
                                </form>
                                                     
                                                       
                                                       
                                                    </div><!-- data-list -->
                                                  
                                                </div><!-- .nk-block -->
                                            </div>
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true" style="width: 450px;">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">

                                                        <div class="user-card">
                                                            <div style="background-color: white;">
                                                                <span> 
                                                                <i> <img src="<?php echo base_url('admin/writable/uploads/'.$admin->image.'');?>" width="500" height="300" id="img1" onclick="open_modal()"></i>
                                                             </span>
                                                            </div>
                                                       <!--      <div class="user-info">
                                                                <span class="lead-text" id="user3"><?php echo $admin->username;?></span>
                                                                <span class="sub-text" id="email3"><?php echo $admin->email;?></span>
                                                            </div> -->
                                                         <!--    <div class="user-action">
                                                                <div class="dropdown"> -->
                                                                
                                                                 <!--    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="Javascript:void(0)" id="open-modal"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                                           <li><a href="Javascript:void(0)" id="update-modal"><em class="icon ni ni-edit-fill"></em><span>Update Info</span></a></li> 
                                                                        </ul>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div><!-- .user-card -->

                                                    </div><!-- .card-inner -->
                                                   <!--  <div class="card-inner">
                                                        <div class="user-account-info py-0">
                                                            <h6 class="overline-title-alt">Last Login</h6>
                                                            <p><?php echo $admin->lastlogin;?></p>
                                                            <h6 class="overline-title-alt">Login IP</h6>
                                                            <p>192.129.243.28</p>
                                                        </div>
                                                    </div> --><!-- .card-inner -->
                                                  
                                                </div><!-- .card-inner-group -->
                                            </div><!-- card-aside -->
                                        </div><!-- .card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalForm">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Photo</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <em class="icon ni ni-cross"></em>
                                </a>
                            </div>
                        <div class="modal-body">
                            <div class="container">
                                <form method="post" id="image_form" enctype="multipart/form-data">
                                 
                                <div class="form-group">
                                  <label class="form-label" for="customMultipleFilesLabel">Image Upload</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                        <input type="file" multiple class="custom-file-input" name="userfile" id="file"  onchange="onImageUpload(this);" accept="image/*">
                                        <label class="custom-file-label" for="customMultipleFiles" id="label-file">Choose files</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-primary">Upload Image</button>
                                </div>
                                </form>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>

              <div class="modal fade" id="profileUpdate">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Profile Info</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <em class="icon ni ni-cross"></em>
                                </a>
                            </div>
                        <div class="modal-body">
                            <div class="container">
                                <form method="post" id="update_form" enctype="multipart/form-data">
                                
                                      <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">New Password</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="password" name="password" minlength="8" required>
                                        </div>
                                        <span id="error"></span>
                                    </div>
                                      <div class="form-group">
                                        <label class="form-label" for="full-name">Confirm Password</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="password1" name="password1" minlength="8" required>
                                        </div>
                                    </div>
                                   
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-primary">Update Profile</button>
                                </div>
                                </form>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
             