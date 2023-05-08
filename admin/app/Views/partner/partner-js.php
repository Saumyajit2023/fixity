<script type="text/javascript">

   pageload();

    function pageload(){

        $.ajax({

                method     : 'GET',
                url        : '<?php echo site_url('admin/Partner/partner_list');?>',
                dataType   : 'json',
                success    : function(res){

                        var table = $('#partner_table').DataTable();

                        table.clear();

                          $.each(res, function(i, item) {
                                console.log(res[i]);
                               let  image_name   = res[i]['image_name'],
                                    image        = `<img src="<?php echo base_url('admin/writable/partnerLogo');?>/${res[i]['image_name']}" width="50" height="50" id="img1">`,
                                    created_dt   = new Date(res[i]['created_dt']).toLocaleDateString(),
                                    status       = '',
                                      checkbox     =  `<div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" name="id[]" class="custom-control-input" id="${res[i]['id']}" data-id="${res[i]['id']}" value="${res[i]['id']}"><label class="custom-control-label" for="${res[i]['id']}"></label></div>`,
                                    action       = `<ul class="nk-tb-actions gx-1 my-n1">
                                                            <li class="mr-n1">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                           <li id="edit-logo" ids="${res[i]['pid']}"><a href="javascript:void(0)"><em class="icon ni ni-edit"></em><span>Edit Logo</span></a></li>
                                                                            <li id="delete-logo" ids="${res[i]['pid']}"><a href="javascript:void(0)"><em class="icon ni ni-delete"></em><span>Delete Logo</span></a></li>
                                                                             <li id="change-status" ids="${res[i]['pid']}" status="${res[i]['is_active']}"><a href="javascript:void(0)"><em class="icon ni ni-exchange-v"></em><span>Change Status</span></a></li>

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
 
                                table.row.add([checkbox,i+1,image,image_name,status,created_dt,action]);

                          })

                          table.draw();
                          
                }
            
        })
    }

    $(document).on('click','#partner-modal',function(e){
        $('#partnerlogoAdd').modal('show'); 
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
            $('#partner_logo').on('submit', function (e) {

                e.preventDefault();
                if ($('#file').val() == '') {
                    $('.imgUploadButton').html('Uploading ...');
                    $('.imgUploadButton').prop('enabled');
                    document.getElementById("partner_logo").reset();
                } else {
                    $.ajax({
                        url: "<?php echo site_url('admin/partner_logo_upload'); ?>",
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
                      
                            document.getElementById("partner_logo").reset();
                               $('#label-file').html('Choose file');
                             $("#file").val('');
                              $('#id').val('');
                              $('#partnerlogoAdd').modal('hide');

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
                url : '<?php echo site_url('admin/Partner/changeLogoStatus');?>',
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
                url : '<?php echo site_url('admin/Partner/deleteLogo');?>',
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
    
    var rows = $('#partner_table').find('tbody tr');
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
              url: '<?php echo site_url('admin/Partner/deleteLogo');?>',
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

 $(document).on('click','#edit-logo',function(e){
        e.preventDefault();
        document.getElementById('partner_logo').reset();
        var ids = $(this).attr('ids');
        $('#id').val(ids);
        $('#partnerlogoAdd').modal('show');
          
    }) 

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