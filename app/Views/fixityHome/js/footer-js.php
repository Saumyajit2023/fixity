<script type="text/javascript">

    $(document).ready(function() {
		   $.ajax({
                method: "GET",  
                url : '<?php echo site_url('fixityHome/getFooter');?>',
                dataType : 'json',
                success: function(data)
                {
                	console.log(data[0]['title']);
                	$("#image").attr("src","<?php echo base_url('admin/writable/blog_banner');?>"+ '/' +data[0].banner_img);
                //	$('#title').val(data[0].title);
                    $('p').append('<span id="add_here">'+data[0].title+'</span>');
                	//document.getElementsByTagName("p")[0].innerHTML= data[0].title;
                }
              })
		});
    


		
  </script>
  