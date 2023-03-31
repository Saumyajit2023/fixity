 <?php
 function isSiteAvailible($url) // to check site is working or not
    {
        if(!filter_var($url, FILTER_VALIDATE_URL)){
                return false;
            }
   
        $curlInit = curl_init($url);

        curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
        curl_setopt($curlInit,CURLOPT_HEADER,true);
        curl_setopt($curlInit,CURLOPT_NOBODY,true);
        curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

        $response = curl_exec($curlInit);

        curl_close($curlInit);

        if($response != true)
        {
              echo view('authentication/maintenance_mode');
        }
    }
?>