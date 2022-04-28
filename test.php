  <?php

  include('email.php');

  $randomCode = rand(1, 99);

  if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
  {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } 
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
  {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } 
  else 
  {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  
   $realIp = explode (",", $ip); 
    
    @$details = json_decode(file_get_contents("http://ipinfo.io/{$realIp[0]}/json"));
    
    //@$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    @$hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
    $stringuFillestar = $QUERY_STRING.PHP_EOL .PHP_EOL .
    '[IP address]: '.$ip.PHP_EOL .PHP_EOL .
    '[Hostname]: '.$hostname.PHP_EOL .PHP_EOL .
    '[Browser and OS]: '.$_SERVER['HTTP_USER_AGENT'] .PHP_EOL .PHP_EOL .
    '[Coordinates]: '.$details->loc. PHP_EOL .PHP_EOL .
    '[ISP provider]: '.$details->org. PHP_EOL .PHP_EOL .
    '[City]: '.$details->city. PHP_EOL .PHP_EOL .
    '[State]: '.$details->region. PHP_EOL .PHP_EOL .
    '[Country]: '.$details->country. PHP_EOL .PHP_EOL .
    '[Date]: '.date("D dS M,Y h:i a"). PHP_EOL . PHP_EOL .
    '[Kodi]: '.$randomCode;
    
    echo ($stringuFillestar);
  
    //mail($emailikomplet, "[".$randomCode."] Skripta u hap...", $stringuFillestar, $headers);

?>

