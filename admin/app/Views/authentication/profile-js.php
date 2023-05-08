<script  type="text/javascript">



function open_modal() {
   
             document.getElementById("image_form").reset();
        $('#modalForm').modal('show');
}
       




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
            $('#image_form').on('submit', function (e) {

                e.preventDefault();
                if ($('#file').val() == '') {
                    $('.imgUploadButton').html('Uploading ...');
                    $('.imgUploadButton').prop('enabled');
                    document.getElementById("image_form").reset();
                } else {
                    $.ajax({
                        url: "<?php echo site_url('admin/imageUpload'); ?>",
                        method: "POST",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json",
                        success: function (res) {
                            var session = res.data;
                          
                             $("#img").attr("src","<?php echo base_url('admin/writable/uploads');?>"+'/'+session);
                             $("#img1").attr("src","<?php echo base_url('admin/writable/uploads');?>"+'/'+session);
                            console.log(session)
                            if (res.success == true) {
                                Swal.fire("success",res.msg,"success");
                               
                            } else if (res.success == false) {
                               Swal.fire("Warning",'Something went wrong',"warning");
                            }
                      
                            document.getElementById("image_form").reset();
                               $('#label-file').html('Choose file');
                             $("#file").val('');
                              $('#modalForm').modal('hide');

                        }
                    });
                }
            });
});


$(document).on('click','#update-modal',function(e){
     document.getElementById("update_form").reset();
        e.preventDefault();
        var ids = 1;
        $.ajax({

            type        : 'POST',
            url         : '<?php echo site_url('admin/Login/updateProfile');?>',
            data        :  {'ids' : ids },
            dataType    : 'json',
            success     : function(res){
           
                  // $('#user').val(res.username); 
                  $('#email').val(res.email);
                  $('#profileUpdate').modal('show');
            }

        })
})

$('#update_form').on('submit', function(e) {
      e.preventDefault();
         

     var newPassword = document.getElementById('password').value;
     var confirmPassword = document.getElementById('password1').value;
       document.getElementById("error").textContent='';
        if(newPassword != confirmPassword)
        { 
            error = document.getElementById("error");
            error.textContent = "Password Mismatch";
            error.style.color = "red" 
        }      
        else
        {    
            var formData = new FormData(this);

            $.ajax({
                url: "<?= site_url('admin/Login/update_form')?>",
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function(data) {
                     document.getElementById("update_form").reset();       
                    // $('#user1').html(data.result.username)
                    // $('#user2').html(data.result.username)
                    // $('#user3').html(data.result.username)
                    $('#email1').html(data.result.email)
                    $('#email2').html(data.result.email)
                    $('#email3').html(data.result.email)
                  
                    if (data.success == true) {
                        Swal.fire(data.msg, '', 'success');
                         $('#profileUpdate').modal('hide');     
                    }
                    else
                    {
                        Swal.fire(data.msg,'','error')
                    }
                },
              
        });
        }
        
});

</script>