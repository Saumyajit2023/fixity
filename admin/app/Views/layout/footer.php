<div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"></a>
                            </div>
                            <div class="nk-footer-links">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="<?php echo base_url('admin/assets/js/bundle.js?ver=2.9.0');?>"></script>
    <script src="<?php echo base_url('admin/assets/js/scripts.js?ver=2.9.0');?>"></script>


    <?php
            if(isset($js))    // IF not external or plugin jump to footer js
            {
                $flag = 1;
                foreach ($js as $key => $value) 
                {
                   if($key == "plugin") 
                   {
                       foreach ($value as $include_plugin_js) 
                        {
                           echo '<script src="'.base_url($include_plugin_js).'"></script>';
                           echo "\n";
                        }     
                    }else{
                        foreach ($value as $include_plugin_js) 
                        {  
                           
                            echo view($include_plugin_js);
                            echo "\n";   
                        }
                    }
                }
            }            
?>
   
</body>

</html>