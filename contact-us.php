<?php
// 1. MUST start session to use $_SESSION variables
session_start();

include("includes/lead-cap.php");

$lead_source = $_SESSION['lead_source'] ?? 'Unknown';
$utm_source = $_SESSION['utm_source'] ?? 'Unknown';

date_default_timezone_set('America/Toronto');
$date = date('m/d/Y h:i:s a', time());

$error = "";
$successMessage = "";

if(isset($_POST['submit'])) {
    
    // Improved reCAPTCHA function using http_build_query
    function post_captcha($user_response) {
        $fields = array(
            'secret' => '6LflKOIUAAAAAPkahQzqX4f5-7EHeSTwC2wPivqE',
            'response' => $user_response
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    $res = post_captcha($_POST['g-recaptcha-response'] ?? '');

    if (!$res['success']) {
        $error = 'Please check the security CAPTCHA box.<br>';
    } else {
        // Validation logic
        if(empty($_POST['username'])) {
            $error .= "Please enter your full name!<br>";
        } elseif (!preg_match('/^[\p{L} ]+$/u', $_POST['username'])){
            $error .= 'Name must contain letters and spaces only!<br>';
        }
        
        if(empty($_POST['phone'])) {
            $error .= "Please enter your phone number!<br>";
        }
        
        if(empty($_POST['company'])) {
            $error .= "Please enter your company!<br>";
        }
        
        if(empty($_POST['email'])) {
            $error .= "Please enter your email address!<br>";
        } elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email address is invalid.<br>";
        }

        if($error == ""){
            $userName = ucwords($_POST["username"]);
            $userEmail = $_POST['email'];
            
            // --- Email 1: Auto-reply to User ---
            $subject1 = "Thank You - From 6ix Developers";
            $headers1 = "MIME-Version: 1.0\r\n";
            $headers1 .= "Content-type:text/html;charset=UTF-8\r\n";
            $headers1 .= "From: 6ix Developers <help@6ixdevelopers.com>\r\n";

            $content1 = '
            <div style="width:100%; margin:0 auto; border-radius: 7px; box-shadow: 0px 6px 18px -8px rgba(0,0,0,0.86); font-family: sans-serif;">
                <div style="padding:35px 20px; text-align:center; background-color:#051a2b; color:white; border-top-left-radius: 7px; border-top-right-radius: 7px;">
                    <img src="https://6ixdevelopers.com/media/logo/new-logo-white.png" width="160px">
                </div>
                <div style="padding:60px 20px; color:#474747; background-color:white; border:1px solid #cecece; text-align:center;">
                    <img src="https://6ixdevelopers.com/media/icons/done.png" width="70px">
                    <h2 style="color:#031523; font-size:30px;">Thank You '. $userName .'</h2>
                    <p>Your message is on its way to our team. We look forward to working with you!</p>
                </div>
            </div>';

            mail($userEmail, $subject1, $content1, $headers1);
            
            // --- Email 2: Notification to Admin ---
            $emailToAdmin = "faheem-afridi@live.com, musab@6ixdevelopers.com, leads@6ixdevelopers.odoo.com";
            $subjectAdmin = "New Lead: ". $userName ." via Contact Form";
            $headersAdmin = "MIME-Version: 1.0\r\n";
            $headersAdmin .= "Content-type:text/html;charset=UTF-8\r\n";
            $headersAdmin .= "From: Website Lead <help@6ixdevelopers.com>\r\n";

            $contentAdmin = '
            <h3>New Lead Information</h3>
            <table style="width:100%; border: 1px solid #ccc; border-collapse: collapse;">
                <tr><td style="padding:10px; border:1px solid #ccc;"><b>Name:</b></td><td style="padding:10px; border:1px solid #ccc;">'.$userName.'</td></tr>
                <tr><td style="padding:10px; border:1px solid #ccc;"><b>Email:</b></td><td style="padding:10px; border:1px solid #ccc;">'.$userEmail.'</td></tr>
                <tr><td style="padding:10px; border:1px solid #ccc;"><b>Phone:</b></td><td style="padding:10px; border:1px solid #ccc;">'.$_POST['phone'].'</td></tr>
                <tr><td style="padding:10px; border:1px solid #ccc;"><b>Company:</b></td><td style="padding:10px; border:1px solid #ccc;">'.$_POST['company'].'</td></tr>
                <tr><td style="padding:10px; border:1px solid #ccc;"><b>Website:</b></td><td style="padding:10px; border:1px solid #ccc;">'.$_POST['website'].'</td></tr>
                <tr><td style="padding:10px; border:1px solid #ccc;"><b>Message:</b></td><td style="padding:10px; border:1px solid #ccc;">'.$_POST['textarea'].'</td></tr>
                <tr><td style="padding:10px; border:1px solid #ccc;"><b>Lead Source:</b></td><td style="padding:10px; border:1px solid #ccc;">'.$lead_source.'</td></tr>
            </table>';

            if(mail($emailToAdmin, $subjectAdmin, $contentAdmin, $headersAdmin)) { 
                $successMessage = '
                <div class="success-message">
                    <h5><i class="fas fa-check-circle"></i></h5>
                    <h4>Message Sent!</h4>
                    <p>Your message has been sent successfully. One of our magicians will get back to you shortly.</p>
                </div>
                <style>.email-feilds{display:none;}</style>';
            } else {
                $error = '<p>Server error: Could not send message. Please try again later.</p>';
            }
        } else {
            $error = '<div class="error-message"><strong>There were error(s) in your form:</strong><br>' . $error . '</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Contact Us | 6ix Developers | Toronto Digital Marketing Agency</title>
    
        <meta name="description" content="6ix Developers is a digital marketing agency in Toronto, ON and specializes in PPC Management, SEO and Website Design.">
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="initial-scale=1, width=device-width" name=viewport>
        <?php include("includes/script-before-headend.php");  ?>
        
        <style type="text/css">
            
            /* Header section CSS start */
            
            .header-section{
                overflow: auto;
                animation: animate-bottom-slide 1.8s;
                animation-timing-function: ease-in-out;
                -webkit-animation-timing-function: ease-in-out;
            }
            
            .header-image{
                width:100%;
                padding:190px 60px 40px;
                text-align: center;
                 background-image: -webkit-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
                background-image: -moz-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
                background-image: -ms-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
                background-image: -o-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
                background-image: linear-gradient(to left, #66ccff 0%, #ff6699 30%);
            }
            
            .header-image h1{
                color:white;
                font-size:62px;
                font-weight:800;
                letter-spacing: 2px;
            }
            
            
            /* Header section CSS end */
            
            
            /* Body section 1 CSS start */
            
            
            .body-section-1{
                padding:70px 90px;
                visibility: hidden;
                text-align: center;
            }
            
            .divider{
                width:10%;
                margin:0px 30px 20px;
                height:3px;
                background-color:#ff6699;
            }

            .form-section {

              overflow: auto;
              padding:0px 0px 40px;

            }


            .email-section{

              width:65%;
              float:left;
              padding:30px 30px;
              text-align:left;
              overflow: auto;
            }

            .email-section h3 {

              font-weight:700;
              font-size:36px;
              padding-bottom:15px;
            }

            form input {

              width:100% !important;
              padding-top:15px !important;
              padding-bottom:15px !important;
              padding-left:8px;
              padding-right:8px;
              border-radius: 5px;
              border:1px solid #182a38;
              background-color:#f9f9f9;
              font-family: 'Montserrat', sans-serif;
            }
            
            .error-message {
                color:#e94b3d;
                line-height:1.3em;
                font-size:15px;
            }
            
            .success-message{
                text-align:center;
            }
            
            .success-message h5{
                font-size:65px !important;
                color:#2ECC71 !important;
            }
            
            .success-message h4{
                font-size:30px !important;
                line-height:2em;
            }
            
            .success-message p{
                font-size:18px;
            }

            .submit-btn{

              margin-top:15px;

            }

            textarea:focus, input:focus{
              outline: none;
            }

            form textarea {

              width:100% !important;
              border-radius: 5px;
              padding:15px;
              border:1px solid #182a38;
              background-color:#f9f9f9;
              font-family: 'Montserrat', sans-serif;
            }

            .email-feilds .name-feild {

              width:47.5% !important;
              float:left !important;
              margin-top:15px;
              margin-right:5%;
            }

            .email-feilds .email-field {

              width:47.5% !important;
              float:left !important;
              margin-top:15px;
            }

            .email-feilds .text-feild {

              width:100% !important;
              float:none !important;
              margin-top:15px;
            }

            .info-section{

              width:35%;
              float:left;
              padding:99px 30px 30px 40px;
              text-align:left;
              overflow: hidden;
            }

            .info-section i {

              font-size:36px;
              color:#003461;
              position:relative;
              top:10px;
            }

            .info-section h5 {

              color:#003461;
              font-weight:600;
              font-size:18px;
              line-height: 1.6em;
            }

            .info-section p {

              color:#421f1c;
              font-weight:600;
              font-size: 16px;
              position:relative;
              left:52px;
              line-height: 1.4em;
            }

            .info-section-1 a {

              color:#421f1c;
              font-weight:600;
              font-size: 17px;

            }

            .info-section-1{

              padding: 0 20px;
            }

            .info-section-1 span {

              color:white;
              background-color:#ab7105;
              padding:1.9px 8.5px 2.8px;
              margin-bottom:5px;
              border-radius: 50%;
            }

            .info-section-1:not(:first-child) {

              margin-top:30px;
            }

            .map-section {

              width:100%;
              height:460px;
              margin-top:60px;
              margin:0 auto;
              border-radius:5px;
            }


            
            
            /* Body section 2 CSS start */
            
            @media (max-width:980px){
                
                .clear-mbb{
                    clear:both;
                }
                
                /* Header section CSS start */
                
                .header-image{
                    padding:200px 30px 40px;
                }
                
                .header-image h1{
                    color:white;
                    font-size:42px;
                }
                
                /* body 1 section CSS start */
                
                .body-section-1{
                    padding:70px 60px;
                    visibility: visible;
                }

                .email-section{
                    width:100%;
                    float:none;
                    padding:30px 30px;
                    text-align:left;
                }

                .info-section{
                    width:100%;
                    float:none;
                    padding:40px 30px 30px 40px;
                    text-align:left;
                }
            }
            
            @media(max-width:620px){

                .clear-mb2{
                    clear:both;
                    display: block;
                }
                
                
                /* Body section 1 CSS start */
                
                .body-section-1{
                    padding:70px 30px;
                }

                .email-section{
                    width:100%;
                    float:none;
                    padding:30px 0px;
                }

                .info-section{
                    width:100%;
                    float:none;
                    padding:40px 0px;
                }

                .info-section p {
                    position:relative;
                    left:0px;
                    margin-left:55px;
                }

                .info-section-1{
                    padding:0px 0px;
                }

            }
            
        </style>
        

        
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '284882172943784'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=284882172943784&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

    </head>
    
    <body>
    

        
        <?php include("includes/header-main.php");  ?>

        <div class="clear"></div>
       
        <div class="header-section">
            
            <div class="header-image">
        
                <h1>Contact Us</h1>
                
            </div>
        
        </div>
        
        
        <div class="body-section-1">
            
        <div class="form-section">

      <div class="email-section">
     
            <h3>Book a Call</h3>
            
    <div class="error-message"><?php echo $error; ?></div>
    <div class="success-message"><?php echo $successMessage; ?></div>

        <div class="email-feilds">

          <form method="post" id="contact-form">

            <div class="name-feild">

              <input type="text" class="name" id="username" name="username" placeholder="Name">

            </div>

            <div class="email-field">

              <input type="email" class="email" id="email" name="email" placeholder="Email">

            </div>

            <div class="clear"></div>
              
            <div class="name-feild">

                <input type="tel" class="name" id="phone" name="phone" placeholder="Phone">

            </div>

            <div class="email-field">

                <input type="text" class="email" id="company" name="company" placeholder="Company">

            </div>

            <div class="clear"></div>
              
            <div style="margin-top:15px" class="text-field">
            
                <input type="text" class="email" id="website" name="website" placeholder="Current Website">
                
            </div>

            <div class="text-feild">

              <textarea class="text" rows="9" id="textarea" name="textarea" placeholder="Message"></textarea>

            </div>

            <div class="g-recaptcha" data-sitekey="6LflKOIUAAAAAA-fr94D5gdGl9mBpPB5RFtdrAzQ"></div>

            <div class="clear"></div>

            <input style="border:none" class="cst-btn submit-btn btn" type="submit" id="submit" name="submit" value="SEND MESSAGE">

          </form>
        </div>

      </div>

      <div class="info-section">

        <div class="info-section-1">

          <h5><i class="far fa-envelope"></i> &nbsp;&nbsp;Email Address</h5>
          <p><a href="mailto:info@help@6ixdevelopers.com">help@6ixdevelopers.com</a></p>

        </div>

        <div class="info-section-1">

          <h5><i style="transform:rotate(90deg);" class="fas fa-phone"></i> &nbsp;&nbsp;Phone</h5>
          <p><a href="tel:18888087265">Toll free: 1 888-808-7265</a><br>
            <a href="tel:4163063443">Toronto: (416) 306-3443</a></p>

        </div>

        <div class="info-section-1">

          <h5><i class="fas fa-map-marked-alt"></i> &nbsp;&nbsp;Address</h5>
          <p><a target="_blank" href="https://g.page/6ixdevelopers?share">1550 South Gateway Rd. <br>Mississauga, Ontario, Canada</a></p>


        </div>

      </div>

      <div class="clear"></div>

    </div>


    <div class="clear"></div>

            
        </div>
        
        <?php include("includes/cta.php") ?>
        <?php include("includes/footer.php") ?>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script type="text/javascript">

            
            function isEmail(email) {
                var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return emailRegex.test(email);
            }
            
            function isPhone(phone) {
                var phoneRegex = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
                return phoneRegex.test(phone);
            }   
            
            
            $("#contact-form").submit(function(){

                var fieldMissing = '';

                if($.trim($("#username").val()) == ''){

                    fieldMissing += 'Please enter your name with space (john smit)!<br>';
                    
                    $("#username").css("border-color", "#e94b3d");

                } else {
                    
                    $("#username").css("border-color", "#182a38");
                      
                }
                
                if($.trim($("#phone").val()) == '') {
             
                    fieldMissing += "Please enter your phone number!<br>";
             
                    $("#phone").css("border-color", "#e94b3d");
            
                }  else  if (isPhone($("#phone").val()) == false) {
                    
                    $("#phone").css("border-color", "#e94b3d");
                     
                    fieldMissing += "Please enter valid phone number!<br>";
                     
                } else {
                 
                    $("#phone").css("border-color", "#182a38");
        
                 
                }

                if($("#email").val() == "") {
            
                    fieldMissing += "Please enter your email address!<br>";
                    $("#email").css("border-color", "#e94b3d");

                } else if (isEmail($("#email").val()) == false) {

                    $("#email").css("border-color", "#e94b3d");
                    fieldMissing += "Please enter valid email address!<br>";

                } else {

                    $("#email").css("border-color", "#182a38");

                }
                
                
                if($.trim($("#company").val()) == ''){
                    
                    fieldMissing += "Please enter your company!<br>";
                    $("#company").css("border-color", "#e94b3d");
                    
                } else{
                    
                     $("#company").css("border-color", "#182a38");
                    
                }
                

                if(fieldMissing != ''){

                    $(".error-message").html("<p style='font-weight:16px; font-weight:bold'>There were error(s) in your form:</p>" + fieldMissing);
                    
                    return false;

                } else {

                    return true;

                }


            });
            
            
            
            $(document).ready(function(){
                
                if ($(window).width() > 980) {
                    
                    $('.body-section-1').viewportChecker({
                        classToAdd: 'animation-left-slide',
                        offset: 100

                    });
                    $('.body-section-2').viewportChecker({
                        classToAdd: 'animation-right-slide',
                        offset: 100

                    });
                    $('.body-section-3').viewportChecker({
                        classToAdd: 'animation-left-slide',
                        offset: 100

                    });
                    $('.body-section-4').viewportChecker({
                        classToAdd: 'animation-right-slide',
                        offset: 100

                    });
                    $('.body-section-5').viewportChecker({
                        classToAdd: 'animation-left-slide',
                        offset: 100

                    });
            
                    $('.call-to-action').viewportChecker({
                        classToAdd: 'animation-top-slide',
                        offset: 100

                    });
                    $('footer').viewportChecker({
                        classToAdd: 'animation-top-slide',
                        offset: 100

                    });
                    
                }
            });
        
        </script>

        <?php include("includes/script-before-bodyend.php");  ?>
    
    </body>
    
</html>