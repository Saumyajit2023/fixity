     <!-- BEGIN: Html tag-->
   
     <?php
         
          if(isset($css))
          {        
            echo   view('layout/head',$css);
          }
          else
          {
            echo   view('layout/head');
          }
//---------------------------------------------------------------------------------------------------------------------------
            

          echo   view('layout/navbar'); 
          echo   view('layout/header');
                
         
         
//-------------------------------------- Content of Page  Begin----------------------------------------------------------------	

    // print_r($page);die;
          if(isset($data)){

            
            echo   view($page,$data);

          }else{

            echo   view($page);

          }
           
        //  echo view('page');

//------------------------------------  Content of Page  End------------------------------------------------------------------  

 //-------------------------------------- Footer  Begin----------------------------------------------------------------------                    
          if(isset($js))
            {  

              echo   view('layout/footer',$js);
            }
            else
            {
              echo   view('layout/footer');
            }
//--------------------------------------- Footer End --------------------------------------------------------------------------
        ?>
