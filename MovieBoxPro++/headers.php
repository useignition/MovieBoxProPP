<?php 

	function dlPage($href, $headers = array(), $hasBody = false, $bodyArray = array()) {

	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	    curl_setopt($curl, CURLOPT_HEADER, false);
	    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	    curl_setopt($curl, CURLOPT_URL, $href);
	    curl_setopt($curl, CURLOPT_REFERER, $href);
	    // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.125 Safari/533.4");
	    $str = curl_exec($curl);
	    curl_close($curl);

	    return $str;
    }

    $page = dlPage("https://api.movieboxpro.app/api/api_client/index?".$_SERVER['QUERY_STRING']);

    $contents = json_decode($page, true);


    if (isset($contents['data']['uid']) && isset($contents['data']['username']) && isset($contents['data']['nickname'])) {
    	echo '{"code":1,"msg":"success","data":{"id":324192,"uid":10548298,"username":"Ignition Tweaks","nickname":"Ignition Tweaks","last_time":1545361123,"add_time":1545360976,"dead_time":1955591607,"appid":"com.feng.MovieBox","email":"Ignition Tweaks","avatar":"https:\/\/pbs.twimg.com\/profile_images\/1075332966014803968\/hinjyYuX.jpg","isvip":1,"bind":[{"id":"820552","uid":"10548298","type":"google","openid":"112769557582261870348","token":"ya29.Glt5Bmiepf90E6hca2KoHFJeZzDyy0HrCzJXvMZNgv2eWV9BfA91G_Ulp8iRPllVWoHMxwoS9fsqzA-ZwAa_azuSMrBLDydBSuPuHrtdfIvNxDiFlDWBpkLQsboZ","validtime":"1545360980","name":"Ignition","nick":"Ignition","lock":"1"}]}}';
    } else {
    	echo $page;
    }

?>