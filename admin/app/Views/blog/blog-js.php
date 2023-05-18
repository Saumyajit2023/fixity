<script type="text/javascript">

   pageload();

    function pageload(){

        $.ajax({

                method     : 'GET',
                url        : '<?php echo site_url('admin/Blog/blog_list');?>',
                dataType   : 'json',
                success    : function(res){

                        var table = $('#blog_table').DataTable();

                        table.clear();

                          $.each(res, function(i, item) {
                                console.log(res[i]);
                               let  title   = res[i]['title'],
                                    banner_img        = `<img src="<?php echo base_url('admin/writable/blog_banner');?>/${res[i]['banner_img']}" width="50" height="50" id="img1">`,
                                    thumbnail_img        = `<img src="<?php echo base_url('admin/writable/blog_thumbnail');?>/${res[i]['thumbnail_img']}" width="50" height="50" id="img2">`,
                                    visible_date  = res[i]['visible_on'];

                                    created_dt   = new Date(res[i]['created_dt']).toLocaleDateString(),
                                    status       = '',
                                    popular = '',
                                      checkbox     =  `<div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" name="id[]" class="custom-control-input" id="${res[i]['id']}" data-id="${res[i]['id']}" value="${res[i]['id']}"><label class="custom-control-label" for="${res[i]['id']}"></label></div>`,
                                    action       = `<ul class="nk-tb-actions gx-1 my-n1">
                                                            <li class="mr-n1">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                           <li id="edit-logo" ids="${res[i]['id']}"><a href="javascript:void(0)"><em class="icon ni ni-edit"></em><span>Edit Blog Details</span></a></li>
                                                                            <li id="delete-logo" ids="${res[i]['id']}"><a href="javascript:void(0)"><em class="icon ni ni-delete"></em><span>Delete Blog Details</span></a></li>
                                                                             <li id="change-status" ids="${res[i]['id']}" status="${res[i]['is_active']}"><a href="javascript:void(0)"><em class="icon ni ni-exchange-v"></em><span>Change Status</span></a></li>
                                                                              <li id="remove-logo" ids="${res[i]['id']}"><a href="javascript:void(0)"><em class="icon ni ni-delete"></em><span>Remove Popular</span></a></li>

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

                                if(res[i]['is_popular'] == 1){

                                     popular = '<span class="tb-status text-success">Popular</span>';

                                }else{

                                     popular = '<span class="tb-status text-danger">Not Popular</span>';

                                }
 
                                table.row.add([checkbox,i+1,banner_img,thumbnail_img,title,visible_date,popular,status,action]);

                          })

                          table.draw();
                          
                }
            
        })
    }

    $(document).on('click','#blog-modal',function(e){
        $('#blogAdd').modal('show'); 
    })

    function onImageUpload(input, id) {
            id = id || '#file';
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(id).attr('src', e.target.result).width(400)
                };
                reader.readAsDataURL(input.files[0]);
            }
}


$(document).ready(function () {
            $('#blog_add').on('submit', function (e) {

                e.preventDefault();
                if ($('#file').val() == '') {
                    $('.imgUploadButton').html('Uploading ...');
                    $('.imgUploadButton').prop('enabled');
                    document.getElementById("blog_add").reset();
                } else {
                    $.ajax({
                        url: "<?php echo site_url('admin/Blog/blogAdd'); ?>",
                        method: "POST",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json",
                        success: function (res) {
                            var session = res.data;
                          
                            if (res.success == true) {
                                Swal.fire("success",res.msg,"success");
                                 pageload();
                               
                            } else if (res.success == false) {
                               Swal.fire("Warning",'Something went wrong',"warning");
                                pageload();
                            }
                      
                            document.getElementById("blog_add").reset();
                               $('#label-file').html('Choose file');
                             $("#file").val('');
                             $('#label-file1').html('Choose file');
                             $("#file").val('');
                              $('#id').val('');
                              $('#blogAdd').modal('hide');

                        }
                    });
                }
            });
});

    $(document).on('click','#change-status',function(e){
        var ids = $(this).attr('ids');
        var status = $(this).attr('status');
          $.ajax({
                method: "POST",  
                url : '<?php echo site_url('admin/Blog/changeStatus');?>',
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
                url : '<?php echo site_url('admin/Blog/deleteBlogDetails');?>',
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
    
    var rows = $('#blog_table').find('tbody tr');
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
              url: '<?php echo site_url('admin/Blog/deleteBlogDetails');?>',
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

 function makePopular(event)
 {

    var mass_select_all = $('#mass_select_all').prop('checked');
    var ids = [];
    var data = {};
    if(mass_select_all == false || typeof(mass_select_all) == 'undefined')
    {
        data.mass_select_all = true;
    }
    
    var rows = $('#blog_table').find('tbody tr');
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
        Swal.fire('Please select data to add  data','','error')
     }
     else{

            $.ajax({
              url: '<?php echo site_url('admin/Blog/updateToPopular');?>',
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
   
}
 

 $(document).on('click','#edit-logo',function(e){
        e.preventDefault();
        document.getElementById('blog_add').reset();
        var ids = $(this).attr('ids');
       
         $.ajax({
              url: '<?php echo site_url('admin/Blog/getDetailsById');?>',
              type: "POST",
              dataType: "json",
              data: {'ids':ids},
              success: function (data)
              {
                 // var res = JSON.parse(data);
                  console.log(data)
                  $('#title').val(data[0].title);
                  //$('#description').val(data[0].description);
                  tinyMCE.activeEditor.setContent(data[0].description);
                  $('#date1').val(data[0].visible_on);
                   $('#id').val(ids);
                  $('#blogAdd').modal('show');
    
              }
           })
      
          
    }) 

 $(document).on('click','#remove-logo',function(e){  
      var ids = $(this).attr("ids");

    swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#1ee0ac',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, remove it!'
        }).then((result) => {
            if (result.isConfirmed) {
              $.ajax({
                method: "POST",  
                url : '<?php echo site_url('admin/Blog/removePopular');?>',
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

// $(document).ready(function () {                      //filter data
//   var oTable = $('#student_table').dataTable();
//   var indexOfMyCol = 5;
//   var indexOfMyCol1=6;
//  $("thead th").each( function ( i ) {
//     if(i === indexOfMyCol){
//         $("#selectCollege").on('change', function(){        
//           oTable.fnFilter($(this).val(),i);
//       });
//     }
//     else if(i === indexOfMyCol1){
//         $("#selectStream").on('change', function(){          
//           oTable.fnFilter($(this).val(),i);
//       });
//     }
//  }); 
// });



</script>