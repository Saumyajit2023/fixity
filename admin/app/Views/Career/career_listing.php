
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                 
                                                <h4 class="nk-block-title">Career List</h4>
                                                <div class="nk-block-des">
                                                    
                                                </div>
                                            </div>
                                          
                                        </div>
                            <div class="card card-preview">
                                <div class="card-inner">

                                       <div style="float:right;">
                                                 <a href="javascript:void(0)" class="btn btn-primary d-none d-md-inline-flex" id="career-modal"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                                <a href="javascript:void(0)" onclick="deleteAll()" id="delete_selected" class="btn btn-primary d-none d-md-inline-flex"><span>Delete Selected</span></a>            
                                        </div> 
                                           

                                    <table class="datatable-init table" id="career_table"> 
                                                    <thead>
                                                        <tr>
                                                            <th data-orderable="false"><span class="hide"> </span>  <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input" id="mass_select_all" onclick="ToggleAll(this)">
                                                                    <label class="custom-control-label" for="mass_select_all"></label>
                                                                </div></th>
                                                            <th>Sr.No</th>
                                                            <th>Job Title</th>
                                                            <th>Job Description</th>
                                                            <th>Status</th>
                                                            <th>Created Date</th>
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



               <div class="modal fade" id="careerAdd">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Career Info</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <em class="icon ni ni-cross"></em>
                                </a>
                            </div>
                            <div class="modal-body">
                                <form method="post" id="career_form" enctype="multipart/form-data">
                           
                              
                                 <div class="form-group">
                                        <label class="form-label" for="full-name">Job Title</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="title" name="title" value="" required>
                                            <input type="hidden" id="id" value="" name="id">
                                        </div>

                                        <input type="hidden" name="cid" id="cid">
                                    </div>

                                     <div class="form-group">
                                        <label class="form-label" for="full-name">Job Description</label>
                                        <div class="form-control-wrap">
                                            <input type="textarea" class="form-control" id="description" name="description" required>
                                        </div>
                                        <span id="error2" style="color: red;"></span>
                                    </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-primary">Save Info</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

               
                  