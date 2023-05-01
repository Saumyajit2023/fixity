
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                 
                                                <h4 class="nk-block-title">Blog List</h4>
                                                <div class="nk-block-des">
                                                    
                                                </div>
                                            </div>
                                          
                                        </div>
                            <div class="card card-preview">
                                <div class="card-inner">

                                       <div style="float:right;">
                                                 <a href="javascript:void(0)" onclick="makePopular()" id="popular" class="btn btn-primary d-none d-md-inline-flex"><span><em class="icon ni ni-plus"></em>Add Popular Blog</span></a>
                                                <a href="javascript:void(0)" class="btn btn-primary d-none d-md-inline-flex" id="blog-modal"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                                <a href="javascript:void(0)" onclick="deleteAll()" id="delete_selected" class="btn btn-primary d-none d-md-inline-flex"><span>Delete Selected</span></a>            
                                        </div> 
                                           

                                    <table class="datatable-init table" id="blog_table"> 
                                                    <thead>
                                                        <tr>
                                                            <th data-orderable="false"><span class="hide"> </span>  <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input" id="mass_select_all" onclick="ToggleAll(this)">
                                                                    <label class="custom-control-label" for="mass_select_all"></label>
                                                                </div></th>
                                                            <th>Sr.No</th>
                                                            <th>Banner Image</th>
                                                            <th>Thumbnail Image</th>
                                                            <th>Title</th>
                                                            <th>Visible On</th>
                                                            <th>Is Popular</th>
                                                            <th>Status</th>
                                                            <th>Action</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       
                                                    </tbody id="tbody">
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>



               <div class="modal fade" id="blogAdd">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Blog Info</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <em class="icon ni ni-cross"></em>
                                </a>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="blog_add" enctype="multipart/form-data">
                                <div class="form-group">
                                        <label class="form-label" for="full-name">Title</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="title" name="title" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="form-label">Visible Date</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control date-picker" data-date-format="yyyy/mm/dd" id="date1" name="date1" required>
                                        </div>
                                        <div class="form-note">Date format <code>yyyy/mm/dd</code></div>
                                </div>
                                <div class="form-group">
                                  <label class="form-label" for="banner_img">Banner Image Upload</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                        <input type="file" multiple class="custom-file-input" name="banner_img" id="banner_img"  onchange="onImageUpload(this);" accept="image/*">
                                        <label class="custom-file-label" for="customMultipleFiles" id="label-file">Choose files</label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" id="id">
                                </div>
                                <div class="form-group">
                                  <label class="form-label" for="thumbnail_img">Thumbnail Image Upload</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                        <input type="file" multiple class="custom-file-input" name="thumbnail_img" id="thumbnail_img"  onchange="onImageUpload(this);" accept="image/*">
                                        <label class="custom-file-label" for="customMultipleFiles" id="label-file1">Choose files</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-primary">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

               
                  