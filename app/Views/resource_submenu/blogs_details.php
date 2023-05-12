<style type="text/css">
    header {
        position: absolute;
        padding: 0 2rem;
        background-color: #4c4848cc!important;
        width: 100%;
        height: 100px!important;
    }
</style>
<div class="container">
	<div class="row padd-5">
		<div class="col-md-8 z-index_blog padd-bottom-10">
			<label class="blog_title">
				<strong><?php echo $blogDetail[0]['title'];?>
				</strong>
			</label>
			<div class="padding-top-5">
				<img class="w-100 blog_img" src="<?php echo base_url('admin/writable/blog_banner').'/'.$blogDetail[0]['banner_img'];?>">
			</div>
			<div class="para_about text-justify">

				<?php echo $blogDetail[0]['description'];?>
			<!-- 
				Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.<br><br>

				The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
				The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. -->
			</div>
			<!-- <div class="padding-top-5">
				<img class="w-100 blog_img" src="<?php echo base_url('admin/writable/blog_banner').'/'.$blogDetail[0]['banner_img'];?>">
			</div> -->
		<!-- 	<div class="para_about text-justify ">
				<?php echo $array[1];?>
				The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
				The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
			</div> -->
		</div>
		<div class="col-md-4 z-index_blog">
			<div class="blog_comments">
				Comment (123)
			</div>

			<div class="blog_box">
				<div class="para_about padding_com">
					Comprehensive support &	maintenance for Oracle E-Business Suite & PeopleSoft, including upgrades, patching, troubleshooting, & performance tuning.
				</div>
				<div class="blog_name_title">- John Doe</div>
                <hr>
			</div>
			<div class="blog_box">
				<div class="para_about padding_com">
					Comprehensive support &	maintenance for Oracle E-Business Suite & PeopleSoft, including upgrades, patching, troubleshooting, & performance tuning.
				</div>
				<div class="blog_name_title">- John Doe</div>
                <hr>
			</div>
			<div class="blog_box">
				<div class="para_about padding_com">
					Comprehensive support &	maintenance for Oracle E-Business Suite & PeopleSoft, including upgrades, patching, troubleshooting, & performance tuning.
				</div>
				<div class="blog_name_title">- John Doe</div>
                <hr>
			</div>
			
		</div>
	</div>
</div>	

	