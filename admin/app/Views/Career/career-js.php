<script type="text/javascript">

   pageload();

    function pageload(){

        $.ajax({

                method     : 'GET',
                url        : '<?php echo site_url('admin/Career/getDetails');?>',
                dataType   : 'json',
                success    : function(res){

                        var table = $('#career_table').DataTable();

                        table.clear();

                          $.each(res, function(i, item) {
                                console.log(res[i]);
                               let  title   = res[i]['title'],
                                    desc        = res[i]['description'],
                                    url         = res[i]['url'],
                                    created_dt   = new Date(res[i]['created_dt']).toLocaleDateString(),
                                    status       = '',
                                      checkbox     =  `<div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" name="id[]" class="custom-control-input" id="${res[i]['id']}" data-id="${res[i]['id']}" value="${res[i]['id']}"><label class="custom-control-label" for="${res[i]['id']}"></label></div>`,
                                    action       = `<ul class="nk-tb-actions gx-1 my-n1">
                                                            <li class="mr-n1">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                           <li id="edit-details" ids="${res[i]['id']}"><a href="javascript:void(0)"><em class="icon ni ni-edit"></em><span>Edit Details</span></a></li>
                                                                            <li id="delete-logo" ids="${res[i]['id']}"><a href="javascript:void(0)"><em class="icon ni ni-delete"></em><span>Delete Details</span></a></li>
                                                                             <li id="change-status" ids="${res[i]['id']}" status="${res[i]['is_active']}"><a href="javascript:void(0)"><em class="icon ni ni-exchange-v"></em><span>Change Status</span></a></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>`;

                                if(res[i]['is_active'] == 1){

                                     status = '<span class="tb-status text-success">Active</span>';

                                }else{

                                     status = '<span class="tb-status text-danger">De-active</span>';

                                }
 
                                table.row.add([checkbox,i+1,title,desc,url,status,created_dt,action]);

                          })

                          table.draw();
                          
                }
            
        })
    }

    $(document).on('click','#career-modal',function(e){
        $('#careerAdd').modal('show'); 
    })

     $(document).on('submit','#career_form',function(e){  //update & ADD have same function
        e.preventDefault();
       console.log($('#career_form').serialize());
        $.ajax({

            type        : 'POST',
            url         : '<?php echo site_url('admin/Career/addDetails');?>',
            data        :  $('#career_form').serialize(),
            dataType    : 'json',
            success     : function(res){

               
                $('#careerAdd').modal('toggle');
                    if(res.status == true){
                        Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Your work has been saved',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                        }else{
                            Swal.fire("Warning", res.message, "warning");
                        }
                        pageload();
                        $('#id').val('');

                    }
        })
    })


   


    $(document).on('click','#change-status',function(e){
        var ids = $(this).attr('ids');
        var status = $(this).attr('status');
          $.ajax({
                method: "POST",  
                url : '<?php echo site_url('admin/Career/changeStatus');?>',
                data : {'ids' : ids ,
                        'status':status},
                dataType : 'json',
                success: function(data)
                {
                    if (data.success == true) {
                        Swal.fire(data.msg, "", "success").then(() => {
                               pageload();
                            });
                    }
                    else
                    {
                         Swal.fire(data.msg,'','error')
                    }
                }
              })

    })

$(document).on('click','#delete-logo',function(e){   //single delete
      var ids = $(this).attr("ids");

    swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#1ee0ac',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
              $.ajax({
                method: "POST",  
                url : '<?php echo site_url('admin/Career/deleteDetails');?>',
                data : {'ids' : ids },
                dataType : 'json',
                success: function(data)
                {
                    if (data.success == true) {
                        Swal.fire(data.msg, "", "success").then(() => {
                              pageload();
                            });
                    }
                    else
                    {
                         Swal.fire(data.msg,'','error')
                    }
                }
              })
            }
          })

});


var checked = false;    
function ToggleAll(source) 
{        
    checkboxes = document.getElementsByName('id[]');
       
    for(var i=0,n=checkboxes.length;i<n;i++) 
    {
        checkboxes[i].checked = source.checked;
    }
}         
  
function deleteAll(event) 
{
    var mass_select_all = $('#mass_select_all').prop('checked');
    var ids = [];
    var data = {};
    if(mass_select_all == false || typeof(mass_select_all) == 'undefined')
    {
        data.mass_select_all = true;
    }
    
    var rows = $('#career_table').find('tbody tr');
    $.each(rows, function() {
        var checkbox = $($(this).find('td').eq(0)).find('input');
        if (checkbox.prop('checked') == true)
        {
            ids.push(checkbox.val()); 
        }
    });
           
    data.ids = ids;
     if(ids.length<=0)
     {
        Swal.fire('Please select data to delete data','','error')
     }
     else{
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1ee0ac',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
            if (result.isConfirmed) {
            $.ajax({
              url: '<?php echo site_url('admin/Career/deleteDetails');?>',
              type: "POST",
              dataType: "json",
              data: {'ids':ids},
              success: function (data)
              {
            
                if (data.success === true || data.success == 'true') 
                {
                    Swal.fire(data.msg, "", "success").then(() => {
                         $('input[type=checkbox]').prop('checked',false);
                                pageload();
                            });
                }
                else
                {
                   Swal.fire(data.msg,'','error')
                }
    
              }
           })
         }
    })
}
}

    $(document).on('click','#edit-details',function(e){
        e.preventDefault();
        document.getElementById('career_form').reset();
        var ids = $(this).attr('ids');
        $.ajax({

            type        : 'POST',
            url         : '<?php echo site_url('admin/Career/editDetails');?>',
            data        : {'ids' : ids },
            dataType    : 'json',
            success     : function(res){
                console.log(res);
                $('#title').val(res.title); 
                 tinyMCE.activeEditor.setContent(res.description);
              //  $('#description').val(res.description);
                $('#cid').val(res.id);
                $('#url').val(res.url);
                $('#careerAdd').modal('show');
            }

        })
    })

 



</script>