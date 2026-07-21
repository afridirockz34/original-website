<?php 

include("includes/lead-cap.php");


$lead_source = $_SESSION['lead_source'] ?? 'Unknown';

$utm_source = $_SESSION['utm_source'] ?? 'Unknown';

$dir = "media/cal-pics/";
$scan_pictures = scandir($dir);
unset($scan_pictures[0]);
unset($scan_pictures[1]);
$random_pic = array_rand($scan_pictures, 1);
$calculate_pic = $scan_pictures[$random_pic];
date_default_timezone_set('America/Toronto');
$date = date('m/d/Y h:i:s a', time());
if (isset($_POST['submit-quote'])) {
    $error = "";
    $phpPicVal = $_POST['phpCalVal'];
    $calValue = '';
    if ($phpPicVal == "threeplusthree.png") {
        $calValue = '6';
    } else if ($phpPicVal == "fourplusthree.png") {
        $calValue = '7';
    } else if ($phpPicVal == "fiveplustwo.png") {
        $calValue = '7';
    } else if ($phpPicVal == "twoplusone.png") {
        $calValue = '3';
    } else if ($phpPicVal == "eightplusfour.png") {
        $calValue = '12';
    } else if ($phpPicVal == "twoplusnine.png") {
        $calValue = '11';
    } else if ($phpPicVal == "sevenplusone.png") {
        $calValue = '8';
    }
    if (!$_POST['username']) {
        $error.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you full name!<br>';
    }
    if (!$_POST['email']) {
        $error.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you email address!<br>';
    }
    if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
        $error.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; The email address is invalid.<br>';
    }
    if (!$_POST['company']) {
        $error.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter your company name!<br>';
    }
    if (!$_POST['website']) {
        $error.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter your website url!<br>';
    }
    if (!$_POST['inquiry-type']) {
        $error.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please select your inquiry type!<br>';
    }
    if (!$_POST['calVal']) {
        $error.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please complete the calculation!<br>';
    } else if ($_POST['calVal'] != $calValue) {
        $error.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Calculated value is wrong!<br>';
    }
    if ($error != "") {
        $error = '<h4 style="font-weight:16px; font-weight:bold">There were error(s) in your form:</h4>' . $error; ?><script>window.location.hash="#get-quote"</script><?php
    } else {
        $userName = ucwords($_POST["username"]);
        $emailTo1 = $_POST['email'];
        $subject1 = "Thank You - From 6ix Developers";
        $content1 = '<div style="width:100%; 
margin:0 auto;
border-radius: 7px;
box-shadow: 0px 6px 18px -8px rgba(0,0,0,0.86);">
<div style="padding:35px 20px; 
text-align:center;
background-color:#051a2b;
color:white; border-top-left-radius: 7px; 
border-top-right-radius: 7px;">
<img src="https://6ixdevelopers.com/media/logo/new-logo-white.png" width="160px">
</div>
<div style="padding:60px 20px 70px;
color:white;
background-color:white;">
<div style="text-align:center; margin-bottom:50px">
<img src="https://6ixdevelopers.com/media/icons/done.png" width="70px">
<h2 style="color:#031523; font-size:30px; font-weight">Thank You ' . $userName . '</h2>
</div>
<div style="text-align:left;">
<p style="color:#474747; font-size:16px; line-height:1.5em;">Your e-mail is on it’s way straight to the inbox of our qualified specialist. They review every e-mail personally, and will respond to you as quickly as they can.</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">In the meantime, please feel free to check us out on social media, or meet with <a href="https://6ixdevelopers.com/about-us">the team</a> who will be taking care of your project like a baby.</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">We look forward to the opportunity of working with you!</p>
<p>&nbsp;</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">Sincerely,</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">The 6ix Developers Team</p>
<p>&nbsp;</p>
<span style="color:#474747; font-size:16px; line-height:1.5em;">Follow us: &nbsp;&nbsp;<a href="https://web.facebook.com/6ixDevelopers/"><img style="position:relative; top:14px;" src="https://6ixdevelopers.com/media/icons/facebook.png" width="40px"></a> &nbsp;&nbsp;<a href="https://www.instagram.com/6ixdevelopers/"><img style="position:relative; top:14px;" src="https://6ixdevelopers.com/media/icons/instagram-sketched.png" width="40px"></a></span>
</div>
</div>
<div style="border-top:1px solid #cecece; padding:30px; 20px; text-align:center; color:black; background-color:#ededed">
<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/privacy-policy">Privacy Policy</a>&nbsp;  | &nbsp;<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/terms-and-conditions">Terms & Conditions</a>&nbsp; | &nbsp;<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/sitemap">Sitemap</a>
</div>
</div>';
        $headers1 = "MIME-Version: 1.0" . "\r\n";
        $headers1.= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers1.= "From: Help@6ixdevelopers.com";
        mail($emailTo1, $subject1, $content1, $headers1);
        $emailTo = "faheem-afridi@live.com, musab@6ixdevelopers.com, leads@6ixdevelopers.odoo.com";
        $subject = "New PPC Google Ads Management Quote Request From " . $_POST["username"] . " 6ixdevelopers - PPC-google-ads-management-toronto";
        $content = '<p>You got a new request for quote from 6ixdevelopers PPC Google ads management agency toronto page on ' . $date . '.</p>
<span style="font-weight:bold;">USER INFORMATION</span>
<table bgcolor="white" style="border-collapse:collapse; width:100%; border: 1px solid grey; color:black; margin-top:10px">
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Name</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["username"] . '</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Email</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["email"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Phone</td>
<td style="border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["phone"] . '</td>
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Current Website</td>
<td style="border-collapse:collapse; border: 1px solid greyk; width:25%;">' . $_POST["website"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Company</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["company"] . '</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Social Media Inquiry</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["inquiry-type"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Date/Time</td>
<td style="border-collapse:collapse; border: 1px solid grey; width:25%;">' . $date . '</td>
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Message</td>
<td style="border-collapse:collapse; border: 1px solid greyk; width:25%;">' . $_POST["textarea"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Lead Source</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'. $lead_source .'</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">UTM Source (if any):</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'. $utm_source .'</td>
            </tr>
</table>
<p><br>
</p>
<p></p><br>';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers.= "From: help@6ixdevelopers.com";
        if (mail($emailTo, $subject, $content, $headers)) {
            session_start();
            $_SESSION['emailType'] = "ppc";
            header('location:thank-you-google-ads-management-toronto.php');
        } else {
            $error = '<p>Due to problem in server we could not send your message please try again later. 6ixdevelopers team&reg.</p>';
        }
    }
}
if (isset($_POST['submit'])) {
    $error1 = "";
    $phpPicVal1 = $_POST['phpCalVal1'];
    $calValue1 = '';
    if ($phpPicVal1 == "threeplusthree.png") {
        $calValue1 = '6';
    } else if ($phpPicVal1 == "fourplusthree.png") {
        $calValue1 = '7';
    } else if ($phpPicVal1 == "fiveplustwo.png") {
        $calValue1 = '7';
    } else if ($phpPicVal1 == "twoplusone.png") {
        $calValue1 = '3';
    } else if ($phpPicVal1 == "eightplusfour.png") {
        $calValue1 = '12';
    } else if ($phpPicVal1 == "twoplusnine.png") {
        $calValue1 = '11';
    } else if ($phpPicVal1 == "sevenplusone.png") {
        $calValue1 = '8';
    }
    if (!$_POST['username1']) {
        $error1.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you full name!<br>';
    }
    if (!$_POST['email1']) {
        $error1.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you email address!<br>';
    }
    if ($_POST['email1'] && filter_var($_POST["email1"], FILTER_VALIDATE_EMAIL) === false) {
        $error1.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; The email address is invalid.<br>';
    }
    if (!$_POST['company1']) {
        $error1.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter your business name!<br>';
    }
    if (!$_POST['website1']) {
        $error1.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter your website url!<br>';
    }
    if (!$_POST['calVal1']) {
        $error1.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please complete the calculation!<br>';
    } else if ($_POST['calVal1'] != $calValue1) {
        $error1.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Calculated value is wrong!<br>';
    }
    if ($error1 != "") {
        $error1 = '<h4 style="font-weight:16px; font-weight:bold">There were error(s) in your form:</h4>' . $error1; ?><script>window.location.hash="#check-eligibility"</script><?php
    } else {
        $userName = ucwords($_POST["username1"]);
        $emailTo2 = $_POST['email1'];
        $subject2 = "Thank You - From 6ix Developers";
        $content2 = '<div style="width:100%; 
margin:0 auto;
border-radius: 7px;
box-shadow: 0px 6px 18px -8px rgba(0,0,0,0.86);">
<div style="padding:35px 20px; 
text-align:center;
background-color:#051a2b;
color:white; border-top-left-radius: 7px; 
border-top-right-radius: 7px;">
<img src="https://6ixdevelopers.com/media/logo/new-logo-white.png" width="160px">
</div>
<div style="padding:60px 20px 70px;
color:white;
background-color:white;">
<div style="text-align:center; margin-bottom:50px">
<img src="https://6ixdevelopers.com/media/icons/done.png" width="70px">
<h2 style="color:#031523; font-size:30px; font-weight">Thank You ' . $userName . '</h2>
</div>
<div style="text-align:left;">
<p style="color:#474747; font-size:16px; line-height:1.5em;">Your e-mail is on it’s way straight to the inbox of our qualified specialist. They review every e-mail personally, and will respond to you as quickly as they can.</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">In the meantime, please feel free to check us out on social media, or meet with <a href="https://6ixdevelopers.com/about-us">the team</a> who will be taking care of your project like a baby.</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">We look forward to the opportunity of working with you!</p>
<p>&nbsp;</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">Sincerely,</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">The 6ix Developers Team</p>
<p>&nbsp;</p>
<span style="color:#474747; font-size:16px; line-height:1.5em;">Follow us: &nbsp;&nbsp;<a href="https://web.facebook.com/6ixDevelopers/"><img style="position:relative; top:14px;" src="https://6ixdevelopers.com/media/icons/facebook.png" width="40px"></a> &nbsp;&nbsp;<a href="https://www.instagram.com/6ixdevelopers/"><img style="position:relative; top:14px;" src="https://6ixdevelopers.com/media/icons/instagram-sketched.png" width="40px"></a></span>
</div>
</div>
<div style="border-top:1px solid #cecece; padding:30px; 20px; text-align:center; color:black; background-color:#ededed">
<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/privacy-policy">Privacy Policy</a>&nbsp;  | &nbsp;<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/terms-and-conditions">Terms & Conditions</a>&nbsp; | &nbsp;<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/sitemap">Sitemap</a>
</div>
</div>';
        $headers2 = "MIME-Version: 1.0" . "\r\n";
        $headers2.= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers2.= "From: Help@6ixdevelopers.com";
        mail($emailTo2, $subject2, $content2, $headers2);
        $emailTo3 = "faheem-afridi@live.com, musab@6ixdevelopers.com, leads@6ixdevelopers.odoo.com";
        $subject3 = "New Google Ads Credit Request From " . $_POST["username1"] . " 6ixdevelopers - PPC-google-ads-management-toronto";
        $content3 = '<p>You got a new Google ads credit request from 6ixdevelopers PPC Google ads management agency toronto page on ' . $date . '.</p>
<span style="font-weight:bold;">USER INFORMATION</span>
<table bgcolor="white" style="border-collapse:collapse; width:100%; border: 1px solid grey; color:black; margin-top:10px">
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Name</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["username1"] . '</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Email</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["email1"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Phone</td>
<td style="border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["phone1"] . '</td>
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Current Website</td>
<td style="border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["website1"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Business name</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["company1"] . '</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Do you have account?</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["account-type"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Account ID</td>
<td style="border-collapse:collapse; border: 1px solid greyk; width:25%;">' . $_POST["accountid"] . '</td>
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Date/Time</td>
<td style="border-collapse:collapse; border: 1px solid grey; width:25%;">' . $date . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Lead Source</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'. $lead_source .'</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">UTM Source (if any):</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'. $utm_source .'</td>
            </tr>
</table>
<p><br>
</p>
<p></p><br>';
        $headers3 = "MIME-Version: 1.0" . "\r\n";
        $headers3.= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers3.= "From: help@6ixdevelopers.com";
        if (mail($emailTo3, $subject3, $content3, $headers3)) {
            session_start();
            $_SESSION['emailType'] = "ppc";
            header('location:thank-you-google-ads-management-toronto.php');
        } else {
            $error1 = '<p>Due to problem in server we could not send your message please try again later. 6ixdevelopers team&reg.</p>';
        }
    }
} 


if (isset($_POST['submit-audit'])) {
    $error2 = "";
    $phpPicVal2 = $_POST['phpCalVal2'];
    $calValue2 = '';
    if ($phpPicVal2 == "threeplusthree.png") {
        $calValue2 = '6';
    } else if ($phpPicVal2 == "fourplusthree.png") {
        $calValue2 = '7';
    } else if ($phpPicVal2 == "fiveplustwo.png") {
        $calValue2 = '7';
    } else if ($phpPicVal2 == "twoplusone.png") {
        $calValue2 = '3';
    } else if ($phpPicVal2 == "eightplusfour.png") {
        $calValue2 = '12';
    } else if ($phpPicVal2 == "twoplusnine.png") {
        $calValue2 = '11';
    } else if ($phpPicVal2 == "sevenplusone.png") {
        $calValue2 = '8';
    }
    if (!$_POST['audit-username']) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you full name!<br>';
    }
    if (!$_POST['audit-email']) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you email address!<br>';
    }
    if ($_POST['audit-email'] && filter_var($_POST["audit-email"], FILTER_VALIDATE_EMAIL) === false) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; The email address is invalid.<br>';
    }
    if (!$_POST['audit-company-name']) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter your company name!<br>';
    }
    if (!$_POST['audit-website']) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter your website url!<br>';
    }
    if (!$_POST['audit-inquiry-type']) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please select the inquiry type!<br>';
    }
    if (!$_POST['aboutbusiness']) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please let us know about your business/industry type!<br>';
    }
    if (!$_POST['audit-services']) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please let us know about the description of services/products!<br>';
    }
    if (!$_POST['audit-goals']) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please let us know about your Google Ads goals!<br>';
    }
    if (!$_POST['audit-monthly-ads']) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please let us know about your monthly ad spend!<br>';
    }
    if (!$_POST['calVal2']) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please complete the calculation!<br>';
    } else if ($_POST['calVal2'] != $calValue2) {
        $error2.= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Calculated value is wrong!<br>';
    }
    if ($error2 != "") {
        $error2 = '<h4 style="font-weight:16px; font-weight:bold">There were error(s) in your form:</h4>' . $error2; ?><script>window.location.hash="#get-audit"</script><?php
    } else {
        $userName4 = ucwords($_POST["audit-username"]);
        $emailTo4 = $_POST['audit-email'];
        $subject4 = "Thank You - From 6ix Developers";
        $content4 = '<div style="width:100%; 
margin:0 auto;
border-radius: 7px;
box-shadow: 0px 6px 18px -8px rgba(0,0,0,0.86);">
<div style="padding:35px 20px; 
text-align:center;
background-color:#051a2b;
color:white; border-top-left-radius: 7px; 
border-top-right-radius: 7px;">
<img src="https://6ixdevelopers.com/media/logo/new-logo-white.png" width="160px">
</div>
<div style="padding:60px 20px 70px;
color:white;
background-color:white;">
<div style="text-align:center; margin-bottom:50px">
<img src="https://6ixdevelopers.com/media/icons/done.png" width="70px">
<h2 style="color:#031523; font-size:30px; font-weight">Thank You ' . $userName4 . '</h2>
</div>
<div style="text-align:left;">
<p style="color:#474747; font-size:16px; line-height:1.5em;">Your e-mail is on it’s way straight to the inbox of our qualified specialist. They review every e-mail personally, and will respond to you as quickly as they can.</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">In the meantime, please feel free to check us out on social media, or meet with <a href="https://6ixdevelopers.com/about-us">the team</a> who will be taking care of your project like a baby.</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">We look forward to the opportunity of working with you!</p>
<p>&nbsp;</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">Sincerely,</p>
<p style="color:#474747; font-size:16px; line-height:1.5em;">The 6ix Developers Team</p>
<p>&nbsp;</p>
<span style="color:#474747; font-size:16px; line-height:1.5em;">Follow us: &nbsp;&nbsp;<a href="https://web.facebook.com/6ixDevelopers/"><img style="position:relative; top:14px;" src="https://6ixdevelopers.com/media/icons/facebook.png" width="40px"></a> &nbsp;&nbsp;<a href="https://www.instagram.com/6ixdevelopers/"><img style="position:relative; top:14px;" src="https://6ixdevelopers.com/media/icons/instagram-sketched.png" width="40px"></a></span>
</div>
</div>
<div style="border-top:1px solid #cecece; padding:30px; 20px; text-align:center; color:black; background-color:#ededed">
<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/privacy-policy">Privacy Policy</a>&nbsp;  | &nbsp;<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/terms-and-conditions">Terms & Conditions</a>&nbsp; | &nbsp;<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/sitemap">Sitemap</a>
</div>
</div>';
        $headers4 = "MIME-Version: 1.0" . "\r\n";
        $headers4.= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers4.= "From: Help@6ixdevelopers.com";
        mail($emailTo4, $subject4, $content4, $headers4);
        $emailTo5 = "faheem-afridi@live.com, musab@6ixdevelopers.com, leads@6ixdevelopers.odoo.com";
        $subject5 = "New Google Ads Credit Request From " . $_POST["audit-username"] . " 6ixdevelopers - PPC-google-ads-management-toronto";
        $content5 = '<p>You got a new Google ads credit request from 6ixdevelopers PPC Google ads management agency toronto page on ' . $date . '.</p>
<span style="font-weight:bold;">USER INFORMATION</span>
<table bgcolor="white" style="border-collapse:collapse; width:100%; border: 1px solid grey; color:black; margin-top:10px">
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Name</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-username"] . '</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Email</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-email"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Phone</td>
<td style="border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-phone"] . '</td>
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Current Website</td>
<td style="border-collapse:collapse; border: 1px solid greyk; width:25%;">' . $_POST["audit-website"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Company</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-company-name"] . '</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Inquiry Type</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-inquiry-type"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">About Business/Industry</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["aboutbusiness"] . '</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Description of Services/Products</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-services"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Google Ads Goals</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-goals"] . '</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Your top online competitors</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-comp"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Unique selling proposition</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-selling"] . '</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Current number of leads</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-current-leads"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Desired number of leads</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-desired-leads"] . '</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Monthly Ad spend</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">' . $_POST["audit-monthly-ads"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Submission Date/Time</td>
<td style="border-collapse:collapse; border: 1px solid grey; width:25%;">' . $date . '</td>
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Google Ads Account ID</td>
<td style="border-collapse:collapse; border: 1px solid greyk; width:25%;">' . $_POST["audit-account"] . '</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Lead Source</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'. $lead_source .'</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">UTM Source (if any):</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'. $utm_source .'</td>
            </tr>
</table>

<p><br>
</p>
<p></p><br>';
        $headers5 = "MIME-Version: 1.0" . "\r\n";
        $headers5.= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers5.= "From: help@6ixdevelopers.com";
        if (mail($emailTo5, $subject5, $content5, $headers5)) {
            session_start();
            $_SESSION['emailType'] = "ppc";
            header('location:thank-you-google-ads-management-toronto.php');
        } else {
            $error2 = '<p>Due to problem in server we could not send your message please try again later. 6ixdevelopers team&reg.</p>';
        }
    }
}

?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="initial-scale=1, width=device-width" name=viewport><title>Google Adwords PPC Agency Toronto | 6ix Developers</title><meta itemprop="name" content="6ix Developers"><meta itemprop="image" content="https://6ixdevelopers.com/media/logo/new-logo-white.png"><meta name="keywords" content="Toronto Digital Marketing Agency, Google Adwords Management Agency Toronto, Google PPC Management Agency Toronto, Keywords Research, Website Speed Optimization for Google Ads"><meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/><link rel="canonical" href="https://6ixdevelopers.com/ppc-google-ads-management-toronto" /><meta property="og:locale" content="en_US" /><meta property="og:type" content="article" /><meta property="og:title" content="Google Adwords PPC Agency Toronto" /><meta property="og:url" content="https://6ixdevelopers.com/ppc-google-ads-management-toronto" /><meta property="og:site_name" content="Google Adwords PPC Agency Toronto" /><meta property="og:image" content="https://6ixdevelopers.com/media/logo/new-logo-white.png" /><meta property="og:image:secure_url" content="https://6ixdevelopers.com/media/logo/new-logo-white.png" /><meta property="og:image:width" content="1920" /><meta property="og:image:height" content="504" /><meta name="twitter:card" content="summary_large_image" /><meta name="twitter:title" content="Google Adwords PPC Agency Toronto" /><meta name="twitter:image" content="https://6ixdevelopers.com/media/logo/new-logo-white.png" /><link rel="apple-touch-icon" sizes="57x57" href="media/favicons/57.png"><link rel="apple-touch-icon" sizes="60x60" href="media/favicons/60.png"><link rel="apple-touch-icon" sizes="72x72" href="media/favicons/72.png"><link rel="apple-touch-icon" sizes="76x76" href="media/favicons/76.png"><link rel="apple-touch-icon" sizes="114x114" href="media/favicons/114.png"><link rel="apple-touch-icon" sizes="120x120" href="media/favicons/120.png"><link rel="apple-touch-icon" sizes="144x144" href="media/favicons/144.png"><link rel="apple-touch-icon" sizes="152x152" href="media/favicons/152.png"><link rel="apple-touch-icon" sizes="180x180" href="/media/favicons/180.png"><link rel="icon" type="image/png" sizes="192x192" href="media/favicons/192.png"><link rel="icon" type="image/png" sizes="32x32" href="media/favicons/32.png"><link rel="icon" type="image/png" sizes="96x96" href="media/favicons/96.png"><link rel="icon" type="image/png" sizes="16x16" href="media/favicons/16.png"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="media/favicons/144.png"><meta name="theme-color" content="#ffffff"><link rel="shortcut icon" href="media/favicons/192.png" type="image/x-icon">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KKWVB4N');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKWVB4N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
    <style>
            
            .campaign-audit-section{
                padding:70px 70px;
                text-align:center;
                background-color:#F7F7F7;
            }
        
        cas-heading h2{
            font-size: 48px !important;
            text-align:center;
        }
            
            .cas-row-1{
                overflow: visible;
                margin-top:60px;
            }
        
        .cas-row-2{
                overflow: visible;
                margin-top:120px;
            }
            
            .casr1-background{
                width:52%;
                float:left;
                margin-right:2%;
                text-align:left;
                
            }
            
            .casr1-text{
                width:44%;
                float:left;
                margin-left:2%;
                text-align:left;
                overflow: visible;
            }
            
            .casr1-text h2{
                font-size: 46px;
                font-weight:700;
                line-height:1.2em;
                margin-bottom:20px;
            }
            
            .casr1-text p {
                font-size:18px; 
                line-height:1.6em;
            }
            
            .casr1-text .casr1-cta{
                color:#FF6699;
                text-transform: uppercase;
                font-weight:bold;
                font-size:16px;
                margin-top:20px;
                margin-bottom:30px;
            }
        
        .casr2-background{
                width:52%;
                float:left;
                margin-left:2%;
                text-align:left;
                
            }
            
            .casr2-text{
                width:44%;
                float:left;
                margin-right:2%;
                text-align:left;
                overflow: visible;
            }
            
            .casr2-text h2{
                font-size: 46px;
                font-weight:700;
                line-height:1.2em;
                margin-bottom:20px;
            }
            
            .casr2-text p {
                font-size:18px; 
                line-height:1.6em;
            }
            
            .casr2-text .casr2-cta{
                color:#FF6699;
                text-transform: uppercase;
                font-weight:bold;
                font-size:16px;
                margin-top:20px;
                margin-bottom:30px;
            }
        
        
        .campaign-audit-section-2{
            padding:70px 70px;
            text-align:center;
            background-color: #5bb6ef;
            overflow: visible;
        }
        
        cas2-heading h2{
            font-size: 28px !important;
            text-align:center;
            color:white !important;
        }
        
        .cas2-container{
            overflow: visible;
        }
        
        .cas2-sections{
            overflow: visible;
            width:50%;
            float: left;
        }
        
        .cas2-left-section{
            padding-right:30px;
        }
        
        .cas2-right-section{
            padding-left:30px;
        }
        
        .cas2-row{
            overflow: visible;
            margin-top:60px;
        }
        
        .cas2r-left{
            width:30%;
            float:left;
        }
        
        .cas2r-left img{
            width:80px;
        }
        
        .cas2r-right{
            width:70%;
            float:right;
            text-align: left;
        }
        
        .cas2r-right h4{
            font-size:25px;
            font-weight: 800;
            color:white;
        }
        
        .cas2r-right p{
            font-size:20px;
            line-height: 1.8em;
            color:white;
        }
        
        .cas2-cta-section{
            color:white !important;
            text-transform: uppercase;
            font-weight:bold;
            font-size:22px;
            margin-top:70px;
            margin-bottom:30px;
        }
    
        
        @media(max-width:980px){
            
            .campaign-audit-section{
                padding:70px 40px;
            }
            
             .casr1-text h2{
                font-size: 32px;
                margin-top:20px;
            }
            
            .casr1-background{
                width:100%;
                float:none;
                margin-right:0%;
            }
            
            .casr1-text{
                width:100%;
                float:none;
                margin-left:0%;
            }
            
            .casr2-text h2{
                font-size: 32px;
                margin-top:20px;
            }
            
            .casr2-background{
                width:100%;
                float:none;
                margin-left:0%;
            }
            
            .casr2-text{
                width:100%;
                float:none;
                margin-right:0%;
            }
            
            
            
            
        .campaign-audit-section-2{
            padding:70px 40px;
        }

        .cas2-sections{
            overflow: visible;
            width:100% !important;
            float: none !important;
        }
        
        .cas2-left-section{
            padding-right:0px !important;
        }
        
        .cas2-right-section{
            padding-left:0px !important;
        }
        
        .cas2-row{
            overflow: visible;
            margin-top:60px;
        }
        
        .cas2r-left{
            width:30%;
            float:left;
        }
        .cas2r-left img{
            width:60px;
        }
        
        .cas2r-right{
            width:70%;
            float:right;
            text-align: left;
        }
        
        .cas2r-right h4{
            font-size:22px;
        }
        
        .cas2r-right p{
            font-size:16px ;

        }
            
        }
        
        
        
        .case-study-section{
            padding: 70px 0px;
            visibility:visible;
            text-align:center;
            background-image: url("media/bg-images/new-dot.png");
            background-size: 400px;
            background-position: bottom right;
            background-blend-mode: overlay;
            background-color:white !important;
            background-repeat: no-repeat;
        }
        
        .case-study-section h2{
            font-size:48px;
        }
        
        .case-study-section h5{
            font-size:22px;
            margin-top:15px;
            color:#262626;
            
        }
        
        .css-container{
            overflow: hidden;
            margin-top:50px;
            
        }
        
        .css-left-section{flex:45%;}
        .css-right-section{flex:55%; height:320px !important;}
        
        .css-section{
            float:left;
            padding:0px 50px 0px 0px;
            border-radius: 6px;
            text-align:left;
        }
        
        .css-section h3{
            font-size:22px;
            font-weight:800 !important;
        }
        
        .css-section h5{
            font-size:15px;
            color:#0d4a7c;
            margin-top:0px !important;
            margin-bottom:10px;
        }
        
        .css-section p{
            font-size:18px;
            color:#333333;
            font-weight:700;
            letter-spacing: 0px;
            line-height:0.5em;
            margin-bottom:20px;
        }
        
        .css-number{
            font-size:36px;
            font-weight: 900 !important;
            color:#FF6598;
            letter-spacing: -1px;
            
        }
        
        .css-right-section-1{
            background-image: url("/media/case-study/Criminal-Law-Firm.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment:inherit;
            background-size: cover;
            
        }
        .css-right-section-2{
            background-image: url("/media/case-study/Family-Law-Firm.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment:inherit;
            background-size: cover;
            
        }
        .css-right-section-3{
            background-image: url("/media/case-study/Employment-Law-Firm.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment:inherit;
            background-size: cover;
            
        }
        .css-right-section-4{
            background-image: url("/media/case-study/Mortgage-Agency.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment:inherit;
            background-size: cover;
            
        }
        .css-right-section-5{
            background-image: url("/media/case-study/Custom-Apparel-Printing.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment:inherit;
            background-size: cover;
            
        }
        .css-right-section-6{
            background-image: url("/media/case-study/Auto-Mechanic.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment:inherit;
            background-size: cover;
            
        }
        .css-right-section-7{
            background-image: url("/media/case-study/Restaurant.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment:inherit;
            background-size: cover;
            
        }
        
        button:focus, button:active {
            outline: none;
	   }


        #slider {
            position: relative;
            max-width: 100%;
            height: auto;
            min-height:340px;
            margin: 0 auto;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            transition: transform .5s ease-in-out;
            padding:0px 120px;
        }

        .current-slide {
            transform: translateX(0);
            z-index: 2;
        }
        .previous-slide {
            transform: translateX(-100%);
            z-index: 1;
        }
        .next-slide {
            transform: translateX(100%);
            z-index: 1;
        }
        .active {
            z-index: 2;
        }
        
        .active .dot{
            background-color:grey;
        }

            /*
        .current-slide:after {
            content: "";
            display: block;
            position: absolute;
            width: 0;
            height: 2px;
            left: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, .15);
            z-index: 4;
            animation-name: fillUp;
            animation-duration: 8s;
            animation-timing-function: linear;
        }
        @keyframes fillUp {
            to {width: 100%}
        }
     */
        .slider-controls {
            position: absolute;
            width: 2.5rem;
            height: 2.5rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            z-index: 3;
            font-size:50px !important;
            color: #0d4a7c;
        }
        #next_slide_btn {
            right: 15px !important;
            border-radius: .5rem 0 0 .5rem;
        }
        #previous_slide_btn {
            left:15px !important;
            border-radius: 0 .5rem .5rem 0;
        }


        #slider {
            border-radius: .25rem;
        }
        .slide {
            display: flex;
        }

        .slide{
            background-color: white;
        }
        
        #dots-con{
            text-align:center;
            margin-top:30px
        }
        .dot{
            display:inline-block;
            background-color:white;
            padding:3px 3px;
            margin:10px 3px;
            border:2px solid grey;
            border-radius:50%;
        }
        
        
        
        .slider-form-section{
            width:65vw;
            padding:20px 50px 40px;
            box-shadow: 0px 0px 10px -3px rgba(0,0,0,0.3);
            margin:30px auto 0px;
            border:1px solid rgba rgba(0,0,0,0.3);
            overflow:auto;
            border-radius:5px;
        }
        
        .section-slide-form, .section-slide-form-2, .section-slide-form-3 {
            display: none;
        }
        
        .section-slide-form.active, .section-slide-form-2.active2, .section-slide-form-3.active3{
            display: block;
        }
        
        .invisible {
            display: none;
        }
        
        ul.form-slide-nav, ul.form-slide-nav-2, ul.form-slide-nav-3 {
        list-style: none;
        margin:0 auto;
        padding: 0;
        display: flex;
        align-items: center;
        }
        
        ul.form-slide-nav li, ul.form-slide-nav-2 li, ul.form-slide-nav-3 li {
        background-color: #efefef;
        padding: 10px 20px;
        margin-left: 6px;
        border-radius: 6px;
        cursor: pointer;
        color:#FF6598;
        }
        
        ul.form-slide-nav li.active,  ul.form-slide-nav-2 li.active,  ul.form-slide-nav-3 li.active{
        background-color:#FF6598 !important;
        color:white !important;
        }
        
        .next,
        .previous, .next-2,
        .previous-2, .next-3,
        .previous-3 {
        text-align:center;
        padding:15px 2px;
        border-radius: 6px;
        background-color:#FF6598;
        color: white;
        border:0;
        outline: none;
        cursor: pointer;
        width: 100px;
        }
        .next, .next-2, .next-3 {
            float:right;
        }
        .previous, .previous-2, .previous-3{
            float:left;
        }
        
        .next.disable,
        .previous.disable, .next-2.disable,
        .previous-2.disable, .next-3.disable,
        .previous-3.disable{
          cursor: none;
          opacity: .5;
        }
        
        .account-id{
            display:none;
        }
        
        

        @media(max-width:980px){
            .case-study-section{
                visibility:visible;
                padding:70px 0px 50px;
                background-image: none;
            }
            
            .css-left-section{flex:50%;}
            .css-right-section{flex:50%;}
            
            .case-study-section h2{
                font-size:34px;
            }
            
            .css-container{
                overflow: hidden;
                margin-top:40px;
            }
            
            .css-left-section-1{
                padding:0px;
            }

            .css-section h3{
                font-size:26px;
            }

            .css-section p{
                font-size:18px;
            }

            .css-number{
                font-size:32px;
            }

            .css-right-section-1, .css-right-section-2, .css-right-section-3, .css-right-section-4, .css-right-section-5, .css-right-section-6, .css-right-section-7{
                padding:150px 0px;
            }
            
            #slider {
            height: 400px;
            }
            
            .tt-btn::after {
                content: "\A\A"; 
                white-space: pre;
            }
            
            .tt-button{
                display: inline-block;
                white-space: nowrap;
                font-size:13px;
            }
        }
        
        
        @media(max-width:620px){
            
            .slider-form-section{
              width:100%;
               padding:20px 20px 40px;
             }
        
             .next,
             .previous {
               width: 80px;
             }
            
            .case-study-section{
                padding:70px 0px 0px 0px;
            }
            
            #slider {
                height:650px !important;
            }
            
            .slide {
                display: block !important;
                padding:0px 50px;
            }
            
            .css-section{
                width:100% !important;
                float:none !important;
            }
            
            .css-section h3{
                font-size:22px;
            }

            .css-number{
                font-size:28px;
            }
            
            .slider-controls{
                font-size:30px !important;
            }
            #next_slide_btn {
            right: 0px !important;
        }
        #previous_slide_btn {
            left:0px !important;
        }
            
        }
                
        
            
        </style>
</head>
<body>

    <header id="main-header"><div class="nav-logo"> <a href="https://6ixdevelopers.com/"><img id="logo" src="media/logo/new-logo.png" width="125px"></a>  <img style="position:relative; top:-4px; left:10px" id="ca-logo" src="media/canadian.png" width="40px"></div><div class="nav-li"> <a class="cta" href="contact-us"><i style="color:white; font-size:18px; position:relative; top:2px;" class="fa fa-envelope"></i> &nbsp;Contact us</a> <a href="tel:18888087265"><i style="font-size:12px" class="fas fa-phone-alt"></i> 1 888-808-7265</a> <a href="about-us">About Us</a><div class="dropdown"> <a class="dropbtn" href="#">Services <i class="fa fa-caret-down"></i></a><div class="dropdown-content"> <a href="website-design-agency-toronto">Website Design</a><br> <a href="ppc-google-ads-management-toronto">Google Ads/PPC</a><br> <a href="social-media-marketing-agency-toronto">Social Media</a><br> <a href="seo-agency-toronto">SEO Services</a><br></div></div> <a href="https://6ixdevelopers.com/">Home</a></div> <nav class="topnav"> <a href="tel:18888087265"><i style="color:#ff6699; font-size: 23px; position:relative; top:-2px;" class="fas fa-phone-alt"></i></a> &nbsp; &nbsp; &nbsp; <a href="#" onclick="openNav()"> <svg width="30" height="26" id="icoOpen"> <path d="M0,5 30,5" stroke="white" stroke-width="4"/> <path d="M0,14 30,14" stroke="white" stroke-width="4"/> <path d="M0,23 30,23" stroke="white" stroke-width="4"/> </svg> </a> </nav><div class="clear"></div> </header><div id="sideNavigation" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <a style="margin-top:20px" href="https://6ixdevelopers.com/">Home</a> <a href="#">Services &nbsp;<i class="fa fa-caret-down"></i></a> <a style="padding-left:50px"href="website-design-agency-toronto">Website Design</a> <a style="padding-left:50px" href="ppc-google-ads-management-toronto">Google Ads/PPC</a> <a style="padding-left:50px" href="social-media-marketing-agency-toronto">Social Media</a> <a style="padding-left:50px" href="seo-agency-toronto">SEO Services</a> <a href="about-us">About Us</a> <a href="contact-us">Contact Us</a> <a class="cta" href="tel:18888087265"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;1 888-808-7265</a></div><div class="clear"></div><div class="header-section">
        
        <div class="header-image"><h1>Google Ads PPC Management Toronto</h1>
        
        <h3>We Count Leads, Not Clicks</h3>
        
       <p>Elevate your marketing through industry-leading:<br> <span class="typing-effect" typing-speed="70" typing-delay="1000" words="PPC Management,Search Engine Marketing,Paid Social Media Advertising,Website Page Speed Optimization,Email Marketing"></span></p><br> 
        
        <a class="btn btn-header tt-button" href="#pricing">Pricing</a>  &nbsp;<span class="tt-btn"></span> <a class="btn btn-header tt-button" href="#get-quote">Start Advertising Today</a>
        
        </div></div>
    

    <div class="body-section-7"><div class="bs7-first-row"><h2>Google Ads PPC Management Toronto</h2><div class="divider"></div><p style="margin-top:15px;">Unlock the power of Google Adwords with our expert management services tailored specifically for your industry. With a proven track record of maximizing ROI for over 2000 businesses across Canada and the USA, our dedicated team of Google Ads Certified experts oversees more than $5 Million in monthly Google Ads spending.</p><br>
<p>Our extensive experience spans various industries, equipping us with the insights and strategies to elevate your online presence effectively. As one of the fastest-growing Google Ads marketing agencies in Canada, headquartered in the vibrant city of Toronto, 6ix Developers is your trusted partner for driving unparalleled success in the competitive digital landscape.</p><br>
<p>Gain the competitive edge you deserve – partner with us for unparalleled Google Adwords/PPC management in Toronto!</p></div></div>
    
    <div class="case-study-section">
        
        <h2>Client Success</h2>
        <h5>We are Diverse & Experienced</h5>
        <p>&nbsp;</p>
        
        <div class="css-container">
    
            <section id="slider">

                <div class="slide ss-slide1">
                <div class="css-left-section-1 css-section css-left-section">

                        <h3>Criminal Law Firm</h3>
                        <h5>2024, Q3 - Q4</h5>
                        <span class="css-number">16.50%</span><p>Conversion Rate</p>
                        <span class="css-number">6.80%</span><p>Click Through Rate</p>
                        <span class="css-number">$125.70</span><p>Cost Per Lead</p>

                    </div>
                    <div class="css-right-section-1 css-section css-right-section"></div>
                </div>
                <div class="slide ss-slide2">
                <div class="css-left-section-1 css-section css-left-section">

                        <h3>Family Law Firm</h3>
                        <h5>2024, Q3 - Q4</h5>
                        <span class="css-number">19.10%</span><p>Conversion Rate</p>
                        <span class="css-number">7.40%</span><p>Click Through Rate</p>
                        <span class="css-number">$104.84</span><p>Cost Per Lead</p>

                    </div>
                    <div class="css-right-section-2 css-section css-right-section"></div>
                </div>
                <div class="slide ss-slide3">
                <div class="css-left-section-1 css-section css-left-section">

                        <h3>Employment Law Firm</h3>
                        <h5>2024, Q3 - Q4</h5>
                        <span class="css-number">22.10%</span><p>Conversion Rate</p>
                        <span class="css-number">6.30%</span><p>Click Through Rate</p>
                        <span class="css-number">$61.21</span><p>Cost Per Lead</p>

                    </div>
                    <div class="css-right-section-3 css-section css-right-section"></div>
                </div>
                
                <div class="slide ss-slide4">
                <div class="css-left-section-1 css-section css-left-section">

                        <h3>Mortgage Agency</h3>
                        <h5>2024, Q3 - Q4</h5>
                        <span class="css-number">18.80%</span><p>Conversion Rate</p>
                        <span class="css-number">24.10%</span><p>Click Through Rate</p>
                        <span class="css-number">$19.64</span><p>Cost Per Lead</p>

                    </div>
                    <div class="css-right-section-4 css-section css-right-section"></div>
                </div>
                
                <div class="slide ss-slide5">
                <div class="css-left-section-1 css-section css-left-section">

                        <h3>Custom Apparel Printing Company</h3>
                        <h5>2024, Q3 - Q4</h5>
                        <span class="css-number">8.70%</span><p>Conversion Rate</p>
                        <span class="css-number">8.30%</span><p>Click Through Rate</p>
                        <span class="css-number">$35.76</span><p>Cost Per Lead</p>

                    </div>
                    <div class="css-right-section-5 css-section css-right-section"></div>
                </div>
                
                <div class="slide ss-slide6">
                <div class="css-left-section-1 css-section css-left-section">

                        <h3>Auto Mechanic Shop</h3>
                        <h5>2024, Q3 - Q4</h5>
                        <span class="css-number">16.20%</span><p>Conversion Rate</p>
                        <span class="css-number">10.30%</span><p>Click Through Rate</p>
                        <span class="css-number">$25.84</span><p>Cost Per Lead</p>

                    </div>
                    <div class="css-right-section-6 css-section css-right-section"></div>
                </div>
                
                <div class="slide ss-slide7">
                <div class="css-left-section-1 css-section css-left-section">

                        <h3>Restaurant</h3>
                        <h5>2024, Q3 - Q4</h5>
                        <span class="css-number">9.04%</span><p>Conversion Rate</p>
                        <span class="css-number">22.04%</span><p>Click Through Rate</p>
                        <span class="css-number">$9.95</span><p>Cost Per Lead</p>

                    </div>
                    <div class="css-right-section-7 css-section css-right-section"></div>
                </div>

                <button class="slider-controls fas fa-angle-right" id="next_slide_btn"></button>
                <button class="slider-controls fas fa-angle-left" id="previous_slide_btn"></button>
                
            </section>
                <span class="dot" id="dot-1"></span><span class="dot" id="dot-2"></span><span class="dot" id="dot-3"></span><span class="dot" id="dot-4"></span><span class="dot" id="dot-5"></span><span class="dot" id="dot-6"></span><span class="dot" id="dot-7"></span>
            </div>
        </div>
        </div>
        
        
    
        
    <div class="campaign-audit-section">
    
        <div class="cas-heading"><h2>Free Google Ads Account Audit</h2></div>
        <div class="divider"></div>
        
        <div class="cas-row-1">
        
            <div class="casr1-background">
            
                <img src="media/campaign-1.png" width="100%">
                
            </div>
            <div class="casr1-text">
            
                <h2>Stop Guessing,<br>
                    Understand Your Campaigns Better.</h2>
                
                <p>Ensure the success of your PPC/Google Ads campaigns with a comprehensive audit tailored to your business. Periodic audits are crucial for optimizing performance, identifying areas for improvement, and maximizing your ROI. At 6ix Developers, we specialize in empowering businesses like yours to understand and optimize their campaigns for optimal results.</p>
                
                <p>Our Google Ads Certified specialists are ready to conduct a thorough audit of your account. By pinpointing areas of underperformance, we'll help you unlock hidden potential, generate more leads within your existing budget, and save money on your Google Ads.</p>
                
                <p class="casr1-cta">Don't leave the success of your campaigns to chance – schedule your free Google Ads account audit today by booking a discovery call with one of our experts. Click below to get started and take control of your campaigns now!</p>
                
                <a href="#get-audit" class="cst-btn btn">Get My Free Audit</a>
                
                
            </div>
            
            <div class="clear"></div>
            
        </div>
        
        <div class="clear"></div>
        
        <div class="cas-row-2">
            
            <div class="casr2-text">
            
                <h2>Maximize Your Google Ads Performance with an Account Audit!</h2>
                
                <p>Whether you're content with your current Google Ads performance or seeking ways to elevate it further, our discreet account audit offers invaluable insights into various performance metrics. From Law Firms to Med Spa Clinics, Construction companies to Restaurants, our Google Ads account audit is tailored to businesses across diverse industries, providing a comprehensive analysis of their campaigns' effectiveness.</p>
                
                <p>Discover hidden opportunities and uncover potential areas for improvement with our expert audit. Our Google Ads Certified specialists will meticulously evaluate your account, offering actionable recommendations to optimize performance and drive better results.</p>
                
                <p class="casr2-cta">Don't settle for mediocre campaign performance – schedule your free Google Ads account audit today by booking a discovery call with one of our specialists. Click below to get started and unlock the full potential of your Google Ads campaigns!</p>
                
                <a href="#get-audit" class="cst-btn btn">Get My Free Audit</a>
                
                
            </div>
        
            <div class="casr2-background">
            
                <img src="media/campaign-2.png" width="100%">
                
            </div>
            
            <div class="clear"></div>
            
        </div>
        
        
    </div>
    
        <div id="get-audit" class="body-section-5" style="padding: 70px">
        
        <h2>Google Ads Free Audit Request</h2>
        
        <div class="slider-form-section">
        <div style="display:none">
        <ul class="form-slide-nav-3">
        <li class="active" data-cont="r1-2">Personal</li>
        <li data-cont="r2-2">Business</li>
        <li data-cont="r3-2">Security</li>
        <li data-cont="r4-2">Security</li>
        <li data-cont="r5-2">Security</li>
        <li data-cont="r6-2">Security</li>
        <li data-cont="r7-2">Security</li>
        <li data-cont="r8-2">Security</li>
        </ul>
        </div>
        
        <form method="post" id="audit-form" class="qm-form">
            <div class="error-message em2"><?php echo $error2; ?></div>
            
            <section id="r1-2" class="section-slide-form-3 form-section-one active3">
                <div class="inside-error-message-3 error-message"></div>
            <div class="name-feild">
                <label>Are you requesting an account audit for your business or someone else? <span style="color:red">*</span></label>
                <select id="audit-inquiry-type" name="audit-inquiry-type" >
                    <option selected value="business">My Business</option>
                    <option value="client">My Client</option>
                </select>
            </div>
            <div class="email-field">
                <label>Tell us about your Business/Industry  <span style="color:red">*</span></label>
                <input type="text" class="email" id="aboutbusiness" name="aboutbusiness">
            </div>
            </section>
            <section id="r2-2" class="section-slide-form-3 form-section-two">
                <div class="inside-error-message-3 error-message"></div>
            <div class="name-feild">
                <label>Business name <span style="color:red">*</span></label>
                <input type="text" class="name" id="audit-company-name" name="audit-company-name">
            </div>
            <div class="email-field">
                <label>Provide website URL <span style="color:red">*</span></label>
                <input type="text" class="email" id="audit-website" name="audit-website">
            </div>
            </section>
            <section id="r3-2" class="section-slide-form-3 form-section-three">
                <div class="inside-error-message-3 error-message"></div>
            <div class="name-feild"> 
            <label>Your goal  <span style="color:red">*</span></label>
                <input type="text" class="name" id="audit-goals" name="audit-goals" placeholder="Google Ads Goals e.g, generate leads, online sales etc.">
            </div>
            <div class="email-field"> 
            <label>Description of services/products</label>
                <input type="text" class="name" id="audit-services" name="audit-services">
            </div>
            </section>
            
            <section id="r4-2" class="section-slide-form-3 form-section-four">
                <div class="inside-error-message-3 error-message"></div>
            <div class="name-feild">
                <label>Your top online competitors</label>
                <input type="text" id="audit-comp" name="audit-comp">
            </div>
            <div class="email-field">
                <label>Unique selling proposition</label>
                <input type="text" id="audit-selling" name="audit-selling">
            </div>
            </section>
            <section id="r5-2" class="section-slide-form-3 form-section-five">
                <div class="inside-error-message-3 error-message"></div>
            <div class="name-feild">
                <label>Current number of leads</label>
                <input type="number" id="audit-current-leads" name="audit-current-leads">
            </div>
            <div class="email-field">
                <label>Desired number of leads</label>
                <input type="number" id="audit-desired-leads" name="audit-desired-leads">
            </div>
            </section>
            <section id="r6-2" class="section-slide-form-3 form-section-six">
                <div class="inside-error-message-3 error-message"></div>
            <div class="name-feild"> 
            <label>Monthly Ad spend  <span style="color:red">*</span></label>
                <input type="number" class="name" id="audit-monthly-ads" name="audit-monthly-ads">
            </div>
            <div class="email-field"> 
            <label>Google Ads account ID</label>
                <input type="text" class="name" id="audit-account" name="audit-account" placeholder="We will not send access request without your permission">
            </div>
            </section>
            
            
            <section id="r7-2" class="section-slide-form-3 form-section-seven">
                <div class="inside-error-message-3 error-message"></div>
            <div class="name-feild">
                <label>Full name  <span style="color:red">*</span></label>
                <input type="text" class="name" id="audit-username" name="audit-username" placeholder="Name"> 
            </div>
            <div class="email-field">
                <label>Email address  <span style="color:red">*</span></label>
                <input type="email" class="email" id="audit-email" name="audit-email" placeholder="Email">
            </div>
            </section>
            <section id="r8-2" class="section-slide-form-3 form-section-eight">
                <div class="inside-error-message-3 error-message"></div>
            <div class="name-feild">
                <label>Phone number</label>
                <input type="tel" class="email" id="audit-phone" name="audit-phone" placeholder="Phone">
            </div>
    
            <div class="text-feild">
                <div style="float:left;"><img style="border-radius:4px" src="media/cal-pics/<?php echo $calculate_pic ?>" width="140px">&nbsp; <span style="font-size:32px; position:relative; top:-20px">=</span> &nbsp;</div><div style="float:left; width:60px; margin-bottom:12px">
                <input type="text" id="calVal2" name="calVal2" style="text-align:center; font-size:22px; padding:5px">
                </div>
            </div>
            <div class="clear"></div> 
            <input name="phpCalVal2" id="phpCalVal2" type="hidden" value="<?php echo $calculate_pic; ?>">
            <input style="border:none; padding-top: 16px;padding-bottom:16px; padding-left: 36px; padding-right:36px;" class="cst-btn submit-btn btn" type="submit" id="submit-audit" name="submit-audit" value="SEND MESSAGE">
        </form>
        </section>
        <div class="clear" style="margin-bottom:40px;"></div>
        
        <button class="previous-3 disable" id="previous">PREVIOUS</button>
<button class="next-3" id="next">NEXT</button>
        </div>
    </div>
        
        <div class="clear"></div>
        
    <div class="campaign-audit-section-2">
    
        <div class="cas2-heading"><h2>What's included in our comprehensive Google Ads Account Audit</h2></div>
        <div class="divider"></div>
        
        <div class="cas2-container">
        
        <div class="cas2-left-section cas2-sections">
        
            <div class="cas2-row cas2r-1">
            
                <div class="cas2r-left">
                
                    <img src="/media/campaign-icons/trash.png">
                    
                </div>
                
                <div class="cas2r-right">
                
                    <h4>The Wasted Spend: Unlocking Your Google Ads Efficiency</h4>
                    <p>In our Google Ads audit, we delve into the crucial realm of negative keywords – a pivotal factor in minimizing AdWords costs. Failure to implement negative keywords could result in squandering thousands of dollars each month on irrelevant keywords that yield no leads.</p><br>
                    <p>Our audit meticulously reviews your negative keyword usage, identifying areas where potential savings lie dormant. By optimizing your negative keyword strategy, we empower you to cut unnecessary spending and redirect your budget towards high-converting keywords that drive tangible results.</p><br>
                    <p>Don't let wasted spend drain your advertising budget – schedule your Google Ads audit today and reclaim control over your campaign efficiency.</p>
                    
                </div>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="cas2-row cas2r-1">
            
                <div class="cas2r-left">
                
                    <img src="/media/campaign-icons/tap.png">
                    
                </div>
                
                <div class="cas2r-right">
                
                    <h4>Unlock Your Ad Relevance with CTR Analysis</h4>
                    <p>CTR (Click-Through Rate) serves as a vital gauge of your ad targeting effectiveness. During our Google Ads audit, our specialists meticulously assess your campaigns, placing a strong emphasis on CTR analysis. This crucial metric offers insight into the relevance and uniqueness of your ad copy.</p><br>
                    <p>A low CTR could signify lost opportunities and potential ground conceded to competitors. By scrutinizing your CTR, we uncover areas for improvement and refine your ad strategy to ensure maximum impact and engagement.</p><br>
                    <p>Don't let a low CTR hinder your campaign success – schedule your Google Ads audit today and propel your ads to new heights of relevance and effectiveness.</p>
                    
                </div>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="cas2-row cas2r-1">
            
                <div class="cas2r-left">
                
                    <img src="/media/campaign-icons/search-engine.png">
                    
                </div>
                
                <div class="cas2r-right">
                
                    <h4>Unlocking Profitability: Harness the Power of Long-Tail Keywords</h4>
                    <p>Long-tail keywords, the cornerstone of a lucrative PPC campaign, are often overlooked but hold immense potential. Failure to incorporate these highly targeted phrases means missed opportunities to capture relevant leads at a lower cost.</p><br>
                    <p>In our assessment of your PPC strategy, we prioritize the integration of long-tail keywords. These specialized terms offer a direct path to highly qualified prospects, maximizing your ROI and minimizing wasted ad spend.</p><br>
                    <p>Don't overlook the power of long-tail keywords – schedule a consultation today and seize the opportunities waiting at your fingertips.</p>
                    
                </div>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="cas2-row cas2r-1">
            
                <div class="cas2r-left">
                
                    <img src="/media/campaign-icons/target.png">
                    
                </div>
                
                <div class="cas2r-right">
                
                    <h4>Our Certified Google Ads Specialist Ensures Adherence to Best Practices</h4>
                    <p>Our dedicated Google Ads specialist ensures that your campaigns adhere to the proven best practices followed by certified Google Ads experts. By implementing these industry-standard techniques, we guarantee optimal performance and maximize the effectiveness of your advertising investment.</p><br>
                    <p>Trust in our expertise to elevate your campaigns to new heights of success. Schedule a consultation today and unlock the full potential of your Google Ads strategy.</p>
                    
                </div>
                
            </div>
            
            <div class="clear"></div>
            
        </div>
        
        <div class="cas2-right-section cas2-sections">
        
            <div class="cas2-row cas2r-1">
            
                <div class="cas2r-left">
                
                    <img src="/media/campaign-icons/new-winner.png">
                    
                </div>
                
                <div class="cas2r-right">
                
                    <h4>Elevate Your ROI with Quality Score Optimization</h4>
                    <p>During our Google Ads audit, our specialist meticulously reviews your campaign's Quality Scores. These scores play a pivotal role in determining your ROI, as they directly impact your ad rankings and cost per click.</p><br>
                    <p>By focusing on achieving high Quality Scores, we not only improve your ad rankings but also lower your cost per click, resulting in more relevant leads at a lower cost. Trust in our expertise to optimize your Quality Scores and maximize the efficiency of your advertising budget.</p><br>
                    <p>Don't settle for mediocre performance – schedule a consultation today and unlock the potential for greater ROI with Quality Score optimization.</p>
                    
                </div>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="cas2-row cas2r-1">
            
                <div class="cas2r-left">
                
                    <img src="/media/campaign-icons/customer-service.png">
                    
                </div>
                
                <div class="cas2r-right">
                
                    <h4>Unlock Success with Dedicated Account Management</h4>
                    <p>Our PPC specialist meticulously assesses the time your Google Ads Account manager spends in your account. Through our analysis, we've uncovered a significant correlation between active account management and overall success rates.</p><br>
                    <p>Clients who receive more dedicated attention tend to achieve higher levels of success. By prioritizing regular monitoring, optimization, and strategic adjustments, we ensure your campaigns are consistently optimized for maximum effectiveness and ROI.</p><br>
                    <p>Don't underestimate the power of dedicated account management – schedule a consultation today and experience the difference it can make in your campaign's success.</p>
                    
                </div>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="cas2-row cas2r-1">
            
                <div class="cas2r-left">
                
                    <img src="/media/campaign-icons/filter.png">
                    
                </div>
                
                <div class="cas2r-right">
                
                    <h4>Enhance Your Google Ads Performance with Text Ad Analysis</h4>
                    <p>Our Google Ads campaign audit includes a thorough review of your text ad usage, a crucial element for achieving strong performance metrics such as impressions, clicks, CTR (Click-Through Rate), ad relevance, and ranking.</p><br>
                    <p>By meticulously analyzing your text ads, we identify areas for improvement and optimization. Our goal is to ensure that your ads are not only highly relevant to your target audience but also effectively drive engagement and conversions.</p><br>
                    <p>Don't let subpar text ad performance hinder your campaign success – schedule a consultation today and unlock the full potential of your Google Ads campaigns.</p>
                    
                </div>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="cas2-row cas2r-1">
            
                <div class="cas2r-left">
                
                    <img src="/media/campaign-icons/optimization.png">
                    
                </div>
                
                <div class="cas2r-right">
                
                    <h4>Elevate Your Business Front with Optimized Landing Pages</h4>
                    <p>Landing pages serve as the forefront of your business, dictating the success of your campaigns. Even with stellar Google Ads performance, a subpar landing page can hinder overall results. Our Google Ads Account audit prioritizes ensuring your landing pages are on par with competitors, optimizing them for maximum effectiveness.</p><br>
                    <p>By conducting a thorough assessment, we identify opportunities to enhance your landing pages' performance. From design and functionality to content and user experience, we ensure your landing pages align with industry standards and surpass competitor benchmarks.</p><br>
                    <p>Don't let underperforming landing pages hold back your success – schedule a consultation today and elevate your business front to new heights.</p>
                    
                </div>
                
            </div>
            
            <div class="clear"></div>
            
        </div>
            
            <div class="clear"></div>
            
        </div>
        
        <div class="cas2-cta-section">
        
            Curious about where you stand against competitors in the Google Ads arena? Our free Google Ads audit is here to provide answers. Discover how your account measures up, pinpoint areas for improvement, and receive actionable recommendations to optimize your Google Ads performance.<br>
<br>Ready to take your Google Ads account to the next level? Click below to get started and unlock the insights you need to thrive in the competitive digital landscape.
            
        </div>
        
       <a href="#get-audit" class="cst-btn btn">Get My Free Audit</a>
        
    </div>
        
        <div class="clear"></div>
        
    <div class="bs7-rows bs7-row-1"><div class="row-columns row-column-1 bs7-row-1-img"></div><div class="row-columns row-column-2"><a  href="#get-quote"><h2>Maximize Your ROI with Strategic Google Ads Management</h2></a><p>
        <p>Running a search marketing campaign on Google, regardless of your business size, can quickly become costly without a solid strategy in place. Google Ads' broad targeting capabilities often lead to overspending on irrelevant keywords, resulting in wasted budget and minimal leads.</p>
        <p>At 6ix Developers, we specialize in crafting tailored strategies based on your business type, goals, competition, and other critical factors. Our meticulous approach ensures that every dollar spent on Google Ads is strategically allocated to keywords that drive tangible leads and maximum ROI.</p>
        <p>Trust us to transform your Google Ads investment into a powerful revenue generator. Partner with 6ix Developers for comprehensive strategy and planning that delivers results.</p>
        
</div></div><div class="bs7-rows bs7-row-2"><div class="row-columns row-column-1 bs7-row-2-img mob-row"></div><div class="row-columns row-column-2"><a  href="#get-quote"><h2>Stay Ahead of Evolving Search Trends with Our Google Ads Certified Team</h2></a><p>In today's dynamic digital landscape, the way people search for services is constantly evolving. That's why our Google Ads certified team of specialists is dedicated to keeping your advertising strategy finely tuned to capture maximum leads.</p>
    <p>With our expertise, you'll pay only for the keywords directly relevant to your business, ensuring every click counts towards driving high-quality leads. We understand that every click comes with a cost, which is why we focus on optimizing your keywords for maximum conversion rates.</p>
    <p>Stay ahead of the curve and maximize your advertising investment with our dedicated team. Partner with us to ensure your business thrives in the ever-changing world of online search.</p>

</div><div class="row-columns row-column-1 bs7-row-2-img desk-row"></div></div><div class="bs7-rows bs7-row-3"><div class="row-columns row-column-1 bs7-row-3-img"></div><div class="row-columns row-column-2"><a  href="#get-quote"><h2>Unlock Precision Targeting with GEO Marketing Strategy</h2></a><p>At 6ix Developers, we prioritize precision in targeting by implementing a GEO marketing strategy for your Google Adword campaigns. By focusing on specific geographic locations, we ensure that your ads are shown only to users within your target audience, maximizing relevance and driving desired actions on your website.</p>
    <p>With GEO optimization, you can rest assured that your Google ads are reaching the right people in the right place at the right time. Trust us to help your business thrive by ensuring every ad impression counts.</p>
    <p>Experience the power of targeted advertising with our GEO marketing strategy. Partner with us to elevate your Google Adword campaigns and drive meaningful results for your business.</p>

</div></div><div class="bs7-rows bs7-row-4"><div class="row-columns row-column-1 bs7-row-4-img mob-row"></div><div class="row-columns row-column-2"><a  href="#get-quote"><h2>Don't Underestimate the Impact of Website Speed on Your Ad Performance</h2></a><p>The speed of your website's landing page is often underestimated, yet it plays a crucial role in determining your cost per click on Google Ads. A slow-loading page can result in higher costs per click compared to your competitors, even if they rank below you.</p>
    <p>At 6ix Developers, our in-house developers recognize the importance of website speed optimization. We specialize in optimizing landing pages used for Google Ads to load quickly and minimize bounce rates. By ensuring a seamless user experience, we help maximize your ad performance and ROI.</p>
    <p>Don't let website speed hinder your ad success. Trust our expertise to optimize your landing pages and stay ahead of the competition in the fast-paced world of online advertising.</p>

</div><div class="row-columns row-column-1 bs7-row-4-img desk-row"></div></div></div><div class="body-section-2"><div class="bs2-section"><h2>Get the Results That Matter to You</h2><div class="blurb-content"> <a href="#get-quote"><div class="blurb blurb-1"><div class="blurb-image"><img src="media/icons/website-visit.jpg"></div><div class="blurb-text"><h3>Get Website Visits</h3><p>Grow online sales, booking forms, leads, or newsletter signups with Google Ads that direct people to your website.</p></div></div></a><div class="clear-mb2"></div><a href="#get-quote"><div class="blurb blurb-2"><div class="blurb-image"><img src="media/icons/more-call.jpg"></div><div class="blurb-text"><h3>Get More Phone Calls</h3><p>Increase calls that actually convert using Google Ads call button feature that allows clients to click your phone number.</p></div></div></a><div class="clear-mbb"></div> <a href="#get-quote"><div class="blurb blurb-3"><div class="blurb-image"><img src="media/icons/store-visit.jpg"></div><div class="blurb-text"><h3>Increase Store Visits</h3><p>Get more customers at your store with Google Ads. Show up on Google Maps when customers need you.</p></div></div></a></div></div><a class="btn" href="#get-quote">Start Advertising</a></div><div class="body-section-3"><h2>How It Works</h2><div class="bs3-section"><div class="bs2-row-1 bs2-row"><h4>What Do We Need From You?</h4><div class="divider"></div><p>To begin creating your Google Ads campaign, we’ll need a few things from you first.</p><h5 style="margin-top:20px;">Manager Access</h5><p>We will access your Google Ads account through Manager Level Access. We do not need your account login information and you are in full control of your account.</p><h5 style="margin-top:15px;">Monthly Budget</h5><p>Agreed upon monthly budget. Your Google Ads specialist will conduct industry competitors research to determine the optimal monthly budget for your business.</p><h5 style="margin-top:15px;">Website URL</h5><p>We will need your website URL to setup conversion tracking. </p></div><div class="bs2-row-2 bs2-row"><h4>On-boarding Process</h4><div class="divider"></div><p style="margin-top:15px;">1. Our Google Ads specialists will conduct comprehensive business research to determine the level of competition, to develop an effective strategy.</p><p style="margin-top:15px;">2. Compile a list of lead generating keywords based on the monthly budget and send it to you for your review and approval.</p><p style="margin-top:15px;">3. We will build an effective campaign structure with supporting ad groups and send it to you for approval.</p><p style="margin-top:15px;">4. We will then develop creative ad copy e.g. headlines and descriptions and send it to you for approval.</p><p style="margin-top:15px;">5. We will set up conversions tracking using Google Tag Manager, Click Fraud Protection Integration and Custom Reporting Dashboard</p></div><div class="clear"></div></div><div class="body-section-8"><div class="bs8-first-section bs-8-section"><div class="bs8-row bs8-first-row"><div class="bs-8-image"><img src="media/icons/No-Contract-ppc-management-agency.png"></div><div class="bs-8-text"><h4>No Contract</h4><p>Month to month payment</p></div></div><div class="bs8-row bs8-first-row"><div class="bs-8-image"><img src="media/icons/Low-one-time-setup-fee-ppc-management-agency.png"></div><div class="bs-8-text"><h4>Low One Time Setup Fee</h4><p>We give you $500 to start Google Ads with us. <a href="#check-eligibility">Check your eligibility</a></p></div></div></div><div class="bs8-second-section bs-8-section"><div class="bs8-row bs8-second-row"><div class="bs-8-image"><img src="media/icons/Flat-rate-monthly-fee-google-ppc-agency-toronto.png"></div><div class="bs-8-text"><h4>Flat Rate Monthly Fee</h4><p>You pay less and get more returns</p></div></div><div class="bs8-row bs8-second-row"><div class="bs-8-image"><img src="media/icons/Transparent-google-adwords-agency-toronto.png"></div><div class="bs-8-text"><h4>Transparent</h4><p>You pay Google directly with your own preferred payment method</p></div></div></div></div></div>

<div class="body-section-1" id="pricing">
    <div class="boxes"><h2>Grow Your Business With Google Ads</h2>
    <p style="margin-top:15px;">No matter the size of your business, a strong PPC platform is essential to attract customers to your website.</p>
    <p>A Google Ads platform is perfect for any business that wants to increase sales, increase traffic to their website, or simply grow their presence online.</p>
    <div class="bs1-section"><div class="box-cal">
        <div class="calculator">
            <h4>Find out your monthly management cost</h4>
            <form method="get" id="calculate-management" name="calculate-management"> 
            <input type="text" class="cal-field" id="cal-field" name="cal-field" placeholder="Enter your monthly Google Ads budget">
            
            <div class="form-button"> 
            <input style="border:none; padding-top: 16px;padding-bottom:16px; padding-left: 36px; padding-right:36px; margin-bottom:12px;" type="submit" id="cal-value" class="btn btn-form" value="Calculate Now"><br>
            <a class="btn btn-header" href="/contact-us">Talk to PPC Expert</a>
            
            </div>
            <p style="margin-top:15px;" class="cal-result"></p>
            </form>
            </div>
    
    <div class="box-cal-txt">
    <h4>One Time Low Setup Fee:</h4>
    <p>$1500</p><p>&nbsp;</p>
    <h4>Our Low Management Fee:</h4>
    <p>$499 per month or 15% of ad spend, whichever is greater.</p>
    </div></div><div class="box-content"><div class="box box-1"><div class="box-heading bh2"><h3>What's Included</h3></div><div class="box-txt"><div class="bt-section"><div class="box-row-firsthalf">Platforms</div><div class="box-row-secondthalf">Google Ads</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Keyword Research</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Competitor Research</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Review Calls</div><div class="box-row-secondthalf">Monthly</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Account Access</div><div class="box-row-secondthalf">Manager</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Reporting Dashboard</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Google Analytics</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Goal Setting</div><div class="box-row-secondthalf">Yes</div></div><div class="bt-section"><div class="box-row-firsthalf">Click Fraud Protection</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Call & Conversion Tracking</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Remarketing & Display Ads</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div></div></div></div></div></div></div>
    
   <div style="padding-top: 10px;" id="get-quote" class="body-section-5">
    <h2>Google Ads Consultation</h2>
    
    <div class="slider-form-section">
        <div style="display:none">
        <ul class="form-slide-nav-2">
        <li class="active" data-cont="r1-1">Personal</li>
        <li data-cont="r2-1">Business</li>
        <li data-cont="r3-1">Security</li>
        <li data-cont="r4-1">Security</li>
        </ul>
        </div>
    <form method="post" id="quote-form" class="qm-form">
        <div class="error-message em"><?php echo $error; ?></div>
        
        <section id="r1-1" class="section-slide-form-2 form-section-one active2">
            
            <div class="inside-error-message error-message"></div>
            <div class="email-field">
            <label>Inquiry type <span style="color:red">*</span></label>
            <select id="inquiry-type" name="inquiry-type">
                <option selected value="more-calls">Want more leads</option>
                <option value="more-visits">Want more store visits</option>
                <option value="ecommerce">Want more e-commerce sales</option>
                <option value="campaign-audit">Campaign audit</option>
            </select>
        </div>
            
        <div class="name-feild"><label>Provide website URL <span style="color:red">*</span></label><input type="text" class="email" id="website" name="website" placeholder="Current Website" /></div>
            
        </section>
        
        <section id="r2-1" class="section-slide-form-2 form-section-two">
            <div class="inside-error-message error-message"></div>
        <div class="email-field">
            <label>Business name <span style="color:red">*</span></label>
            <input type="text" class="email" id="company" name="company"/></div>
            
        <div class="name-feild">
            <label>Full name <span style="color:red">*</span></label>
            <input type="text" class="name" id="username" name="username"/></div>
            
        </section>
        
        <section id="r3-1" class="section-slide-form-2 form-section-three">
            
            <div class="inside-error-message error-message"></div>
            
        
        <div class="email-field"><label>Email Address <span style="color:red">*</span></label><input type="email" class="email" id="email" name="email"/></div>
        
        <div class="name-feild"><label>Phone number</label><input type="tel" class="email" id="phone" name="phone"/></div>
            
        </section>
        
        <section id="r4-1" class="section-slide-form-2 form-section-four">
            
            <div class="inside-error-message error-message"></div>
        <div class="text-feild">
            <label>Additional Information</label>
            <textarea class="text" rows="9" id="textarea" name="textarea" placeholder="Message"></textarea></div>
        <div class="clear"></div>
        <div class="text-feild">
            <div style="float: left;"><img style="border-radius: 4px;" src="media/cal-pics/<?php echo $calculate_pic ?>" width="140px" />&nbsp; <span style="font-size: 32px; position: relative; top: -20px;">=</span> &nbsp;</div>
            <div style="float: left; width: 60px; margin-bottom: 12px;"><input type="text" id="calVal" name="calVal" style="text-align: center; font-size: 22px; padding: 5px;" /></div>
        </div>
        <div class="clear"></div>
        <input name="phpCalVal" id="phpCalVal" type="hidden" value="<?php echo $calculate_pic; ?>" /><input style="border:none; padding-top: 16px;padding-bottom:16px; padding-left: 36px; padding-right:36px;" class="cst-btn submit-btn btn" type="submit" id="submit-quote" name="submit-quote" value="SEND MESSAGE" /></form>
        </section>
        
        <div class="clear" style="margin-bottom:40px;"></div>
        
        <button class="previous-2 disable" id="previous">PREVIOUS</button>
<button class="next-2" id="next">NEXT</button>
</div>
</div>

    
    <div class="body-section-4"><h2>FAQ</h2><div class="accordion-left bs4-accordion"><div class="ts ts-1 text-hide"><div class="show-btn show-btn-1"><h3>Why is Google Ads right for my business?</h3> <i class="fas fa-plus-circle"></i></div><p>In this digital era, establishing a great online advertising platform is almost essential for the success of any business. One of the most common ways to do this is through Pay-per-Click advertising, of which Google Ads is the leader in. PPC advertising strongly positions your company to show in front of the right audience, in the right place, at the right time. It is the perfect tool whether you want to increase sales, increase traffic to your website, or simply establish your presence online.</p><br><p>We are also experienced in designing landing pages that run cohesively with Google Ads. Our landing pages are highly focused, mobile friendly, load quickly, contain strong call-to-actions, and strategically use content from your website. Having a functional and attractive landing page with good content can increase your ranking with Google, meaning your ads will show closer to the top of potential clients’ Google searches. <a href="contact-us.php">Click here to get your free website consultation.</a></p></div><div class="ts ts-2 text-hide"><div class="show-btn show-btn-2"><h3>What are other ways to promote my business?</h3> <i class="fas fa-plus-circle"></i></div><p>We offer free website audits and consultations. Having a professionally designed and optimized website, that is fast and easy-to-use, is extremely important to get your website high in Google Search results, and drive organic traffic to your website. <a href="contact-us.php">Click here to get your free audit and/or consultation.</a></p><br><p>We also offer search engine optimization and social media management services. While having an optimized website is important to drive organic traffic to your website, social media allows your business to build an extensive online presence, and trust with your customers.</p></div><div class="ts ts-3 text-hide"><div class="show-btn show-btn-3"><h3>How does Google Ads work?</h3> <i class="fas fa-plus-circle"></i></div><p>1. You set your budget<br> 2. Google holds an “auction”, considering everything from your budget to how relevant your website is.<br> 3. The “winner’s” ad is shown at the top of the search results page</p></div><div class="ts ts-4 text-hide"><div class="show-btn show-btn-4"><h3>What is a landing page?</h3> <i class="fas fa-plus-circle"></i></div><p>The landing page could be any existing page on your website. It could also be completely separate from your main website. it is the page that customers land on when they click on the link in your ad.</p></div><div class="ts ts-5 text-hide"><div class="show-btn show-btn-5"><h3>Why do I want my ad at the top of a search results page?</h3> <i class="fas fa-plus-circle"></i></div><p>Potential customers do not tend to scroll past the first page on a Google search, so an ad that does not show on this page is not going to benefit your business. As customers tend to click on the first result that resonates with them, the higher your ad shows, the more people are going to see it, which gives you a higher chance at making conversions.</p></div><div class="ts ts-6 text-hide"><div class="show-btn show-btn-6"><h3>How do you use Google Ads effectively?</h3> <i class="fas fa-plus-circle"></i></div><p>By researching keywords and competitors for your industry, we create Google Ads that have a high chance of conversion once someone clicks on them. By targeting specific groups of people, we direct more highly-qualified leads to your website.</p></div><div class="ts ts-7 text-hide"><div class="show-btn show-btn-7"><h3>Do I need a landing page or website for my campaign?</h3> <i class="fas fa-plus-circle"></i></div><p>No, but it is recommended. Not having a relevant landing page or website can severely impact the outcome of your Google Ads campaign.</p><br><p>A landing page designed specifically for your campaign provides potential customers a more consistent experience. A relevant landing page will also contain relevant content, which can improve your ad’s overall Quality Score. The Quality Score helps to determine your ad ranking, which severely affects where your ad shows up on the page of any qualified search.</p></div><div class="ts ts-8 text-hide"><div class="show-btn show-btn-8"><h3>Why do I need a Google Ads specialist to manage my campaign?</h3> <i class="fas fa-plus-circle"></i></div><p>An effective Google Ads campaign is an ongoing process – not a one time thing. This means you need someone who is able to monitor your progress, and conduct regular research on your competitors and keywords. With this, they are able to update your ads to help keep you ahead of your competition.</p><br><p>Google Ads Specialists have already taken training on the Google Ads platform, and are certified to provide Google Ads services.</p></div></div></div>

        
        <div id="check-eligibility" class="body-section-5"><h2>Check Your Eligibility To Get $500 In Google Ads Credit</h2>
        
        
        
        
        <div class="slider-form-section">
        <div style="display:none">
        <ul class="form-slide-nav">
        <li class="active" data-cont="r1">Personal</li>
        <li data-cont="r2">Business</li>
        <li data-cont="r3">Security</li>
        </ul>
        </div>
        
        <div class="success-message"><?php echo $successMessage; ?></div><form method="post" id="eligibility-form" class="qm-form"><div class="error-message em1"><?php echo $error1; ?></div>
        
        <section id="r1" class="section-slide-form form-section-one active">
            
            <div class="inside-error-message-2 error-message"></div>
            
        <div class="email-field">
            <label>Business name <span style="color:red">*</span></label>
            <input type="text" class="name" id="company1" name="company1" required>
            </div>
        <div class="email-field"> 
        <label>Do you already have a Google Ads account? <span style="color:red">*</span></label>
        <select id="account-type" name="account-type"><option selected value="no">No</option><option value="yes">Yes</option></select>
        </div>
        <div class="email-field account-id">
           
            </div>
        
        <div class="clear"></div>
        
        </section>
        
        <section id="r2" class="section-slide-form form-section-two">
            
            <div class="inside-error-message-2 error-message"></div>
        
        <div class="name-feild"> 
        <label>Provide website URL<span style="color:red">*</span></label>
        <input type="text" class="email" id="website1" name="website1" required>
        </div>
        <div class="email-field">
            <label>Email address <span style="color:red">*</span></label>
            <input type="email" class="name" id="email1" name="email1" required>
            </div>
        
        
        <div class="clear"></div>
        
        </section>
        
        <section id="r3" class="section-slide-form form-section-three">
            
            <div class="inside-error-message=2 error-message"></div>
        
        <div class="name-feild">
            <label>Full name <span style="color:red">*</span></label>
            <input type="text" class="name" id="username1" name="username1" placeholder="Name" required>
            </div>
        <div class="name-feild">
            <label>Phone number</label>
            <input type="tel" class="name" id="phone1" name="phone1" placeholder="Phone" >
            </div>
            
            <div class="text-feild"><div style="float:left;"><img style="border-radius:4px" src="media/cal-pics/<?php echo $calculate_pic ?>" width="140px">&nbsp; <span style="font-size:32px; position:relative; top:-20px">=</span> &nbsp;</div><div style="float:left; width:60px; margin-bottom:12px"><input type="text" id="calVal1" name="calVal1" style="text-align:center; font-size:22px; padding:5px"></div></div><div class="clear"></div> <input name="phpCalVal1" id="phpCalVal1" type="hidden" value="<?php echo $calculate_pic; ?>">
        <input style="border:none; padding-top: 16px;padding-bottom:16px; padding-left: 36px; padding-right:36px;" class="cst-btn submit-btn btn" type="submit" id="submit" name="submit" value="SEND MESSAGE"></form>
        
        </section>
        
        <div class="clear" style="margin-bottom:40px;"></div>
        
        <button class="previous disable" id="previous">PREVIOUS</button>
<button class="next" id="next">NEXT</button>
        
        </div>
        
        </div> 
        
        <a href="#check-eligibility"><div class="google-credit"><h5>$500</h5><p>GOOGLE ADS<br>CREDIT</p></div></a> <div class="call-to-action"><div class="call-to-action-txt"><h2>Ready to find out what sets 6ix Developers apart?</h2></div><div class="call-to-action-btn"> <a href="contact-us" class="btn-simple cta-btn">Get free consultation now</a></div></div><div class="clear"></div> <footer><div class="footer-section ft-section-mobile"> <a style="overflow:auto" href="https://6ixdevelopers.com/"> <img src="media/logo/new-logo-white.png" width="50%"> </a><div class="vertical-line"><div class="v-line"></div></div><p style="font-size:17px; font-weight:bold; letter-spacing:1.5px; margin-top:30px; color:white">CONTACT US</p><div class="contact-section"><p style="padding-bottom:10px"><i style="color:white;" class="fas fa-map-marked-alt"></i> &nbsp;<a href="https://g.page/6ixdevelopers?share" target="_blank">1550 South Gateway Road, Mississauga</a><br> <span style="line-height:1.4em"><i style="position:relative; top:2px; color:white" class="far fa-envelope"></i> &nbsp; <a href="mailto:help@6ixdevelopers.com">help@6ixdevelopers.com</a></span><br> </span><br> <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:18888087265">Toll free: 1 888-808-7265</a></span><br>
            <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:4163063443">Toronto: (416) 306-3443</a></span></p></div></div><div class="footer-section ft-section-1"> <a href="https://6ixdevelopers.com/">Home</a><br> <a href="website-design-agency-toronto">Website Design</a><br> <a href="ppc-google-ads-management-toronto">Google Ads</a><br> <a href="social-media-marketing-agency-toronto">SEO Services</a><br> <a href="digital-marketing-agency-toronto">Digital Marketing</a><br><a href="ppc-agency-toronto">PPC Agency Toronto</a><br> <a href="about-us">About Us</a><br> <a href="contact-us">Contact Us</a><br></div><div class="footer-section ft-section-2"> <a style="overflow:auto" href="https://6ixdevelopers.com/"> <img src="media/logo/new-logo-white.png" width="60%"> </a><div class="vertical-line"><div class="v-line"></div></div><p style="font-size:17px; font-weight:bold; letter-spacing:1.5px; margin-top:25px; margin-bottom:5px; color:white">CONTACT US</p><div class="contact-section"><p><i style="color:white;" class="fas fa-map-marked-alt"></i> &nbsp;<a target="_blank" href="https://g.page/6ixdevelopers?share">1550 South Gateway Rd. <br>Mississauga, Ontario, Canada</a><br> <span style="line-height:1.4em"><i style="position:relative; top:2px; color:white" class="far fa-envelope"></i> &nbsp; <a href="mailto:help@6ixdevelopers.com">help@6ixdevelopers.com</a></span><br><span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:18888087265">Toll free: 1 888-808-7265</a></span><br>
            <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:4163063443">Toronto: (416) 306-3443</a></span></p></div></div><div class="footer-section ft-section-3"> <a target="_blank" href="https://web.facebook.com/6ixDevelopers/"><i class="fab fa-facebook-square"></i></a> &nbsp; <a target="_blank" href="https://www.instagram.com/6ixdevelopers/"><i class="fab fa-instagram"></i></a> &nbsp; <a href="mailto:help@6ixdevelopers.com"><i class="far fa-envelope"></i></a><br><!-- <a href="https://www.google.com/partners/agency?id=8013163615" target="_blank"><img style="width:80%; text-align:center; margin-top:15px;" src="media/icons/google-partner.jpg" alt="Google Premier Partner"></a> --> </footer><div class="footer-bottom"><img style=";position:relative; top:-4px; left:10px" id="ca-logo" src="media/canadian.png" width="40px"><div class="fb-section-1">Est. 2012 <span class="fb-logo">6ixDevelopers</span><i style="font-size:10px; position:relative; top:-4px; color:#ccffff;" class="fas fa-registered"></i>. All Rights Reserved.</div><div class="fb-section-2"><a href="privacy-policy">Privacy Policy</a>&nbsp; | &nbsp;<a href="terms-and-conditions">Terms & Conditions</a>&nbsp; | &nbsp;<a href="terms-of-service-for-6ix-developers">Terms of Service</a>&nbsp; | &nbsp;<a href="google-policy.php">Google Policy</a>&nbsp; | &nbsp;<a href="sitemap">Sitemap</a></div></div>
        
        
    <link type="text/css" rel="stylesheet" href="scripts/ppc-management-styles.css?v=2"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Muli:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet"><script type="text/javascript" src="scripts/ppc-management-functions.js?v=2.97"></script>
    
    
    <script type="text/javascript">
    
     //form-sldier auudit form javascript
        
        let currentSection3 = 0;
        let sections3 = document.querySelectorAll(".section-slide-form-3");
        let sectionButtons3 = document.querySelectorAll(".form-slide-nav-3 > li");
        let nextButton3 = document.querySelector(".next-3");
        let previousButton3 = document.querySelector(".previous-3");
        for (let i = 0; i < sectionButtons3.length; i++) {
            sectionButtons3[i].addEventListener("click", function() {
                sections3[currentSection3].classList.remove("active3");
                sectionButtons3[currentSection3].classList.remove("active3");
                sections3[currentSection3 = i].classList.add("active3");
                sectionButtons3[currentSection3].classList.add("active3");
                if (i === 0) {
                    if (previousButton3.className.split(" ").indexOf("disable") < 0) {
                        previousButton3.classList.add("disable");
                    }
                } else {
                    if (previousButton3.className.split(" ").indexOf("disable") >= 0) {
                        previousButton3.classList.remove("disable");
                    }
                }
                if (i === sectionButtons3.length - 1) {
                    if (nextButton3.className.split(" ").indexOf("disable") < 0) {
                        nextButton3.classList.add("disable");
                    }
                } else {
                    if (nextButton3.className.split(" ").indexOf("disable") >= 0) {
                            nextButton3.classList.remove("disable");
                    }
                }
            });
        }
        
        nextButton3.addEventListener("click", function() {
            if (currentSection3 < sectionButtons3.length - 1) {
                if(($(".active3 .email").val() == "") || ($(".active3 .name").val() == "")){
                    $(".inside-error-message-3").html("There is a mandatory field!")
                    } else{
                        $(".inside-error-message-3").html("")
                        sectionButtons3[currentSection3 + 1].click();
                    }
            }
        });
        
        previousButton3.addEventListener("click", function() {
            if (currentSection3 > 0) {
                sectionButtons3[currentSection3 - 1].click();
            }
        });
    
    
     //form-sldier consultation form javascript
        
        let currentSection1 = 0;
        let sections1 = document.querySelectorAll(".section-slide-form-2");
        let sectionButtons1 = document.querySelectorAll(".form-slide-nav-2 > li");
        let nextButton1 = document.querySelector(".next-2");
        let previousButton1 = document.querySelector(".previous-2");
        for (let i = 0; i < sectionButtons1.length; i++) {
            sectionButtons1[i].addEventListener("click", function() {
                sections1[currentSection1].classList.remove("active2");
                sectionButtons1[currentSection1].classList.remove("active2");
                sections1[currentSection1 = i].classList.add("active2");
                sectionButtons1[currentSection1].classList.add("active2");
                if (i === 0) {
                    if (previousButton1.className.split(" ").indexOf("disable") < 0) {
                        previousButton1.classList.add("disable");
                    }
                } else {
                    if (previousButton1.className.split(" ").indexOf("disable") >= 0) {
                        previousButton1.classList.remove("disable");
                    }
                }
                if (i === sectionButtons1.length - 1) {
                    if (nextButton1.className.split(" ").indexOf("disable") < 0) {
                        nextButton1.classList.add("disable");
                    }
                } else {
                    if (nextButton1.className.split(" ").indexOf("disable") >= 0) {
                            nextButton1.classList.remove("disable");
                    }
                }
            });
        }
        
        nextButton1.addEventListener("click", function() {
            if (currentSection1 < sectionButtons1.length - 1) {
                if(($(".active2 .email").val() == "") || ($(".active2 .name").val() == "")){
                    $(".inside-error-message").html("There is a mandatory field!")
                    } else{
                        $(".inside-error-message").html("")
                        sectionButtons1[currentSection1 + 1].click();
                    }
            }
        });
        
        previousButton1.addEventListener("click", function() {
            if (currentSection1 > 0) {
                sectionButtons1[currentSection1 - 1].click();
            }
        });
        
        
        
        $(document).ready(function() {
            
            $("#account-type").change(function() {
                if($("#account-type").val() == "yes"){
                    $(".account-id").css("display", "block");
                    $(".account-id").html(' <label>Account ID <span style="color:red">*</span></label><input type="text" class="email" id="accountid" name="accountid" required>')
                } else{
                    $(".account-id").css("display", "none");
                    $(".account-id").html(' ');
                }
             })

        });
        
        
        
        //form-sldier eligibility form javascript
        
        let currentSection2 = 0;
        let sections2 = document.querySelectorAll(".section-slide-form");
        let sectionButtons2 = document.querySelectorAll(".form-slide-nav > li");
        let nextButton2 = document.querySelector(".next");
        let previousButton2 = document.querySelector(".previous");
        for (let i = 0; i < sectionButtons2.length; i++) {
            sectionButtons2[i].addEventListener("click", function() {
                sections2[currentSection2].classList.remove("active");
                sectionButtons2[currentSection2].classList.remove("active");
                sections2[currentSection2 = i].classList.add("active");
                sectionButtons2[currentSection2].classList.add("active");
                if (i === 0) {
                    if (previousButton2.className.split(" ").indexOf("disable") < 0) {
                        previousButton2.classList.add("disable");
                    }
                } else {
                    if (previousButton2.className.split(" ").indexOf("disable") >= 0) {
                        previousButton2.classList.remove("disable");
                    }
                }
                if (i === sectionButtons2.length - 1) {
                    if (nextButton2.className.split(" ").indexOf("disable") < 0) {
                        nextButton2.classList.add("disable");
                    }
                } else {
                    if (nextButton2.className.split(" ").indexOf("disable") >= 0) {
                            nextButton2.classList.remove("disable");
                    }
                }
            });
        }
        
        nextButton2.addEventListener("click", function() {
            if (currentSection2 < sectionButtons2.length - 1) {
                if(($(".active .email").val() == "") || ($(".active .name").val() == "")){
                    $(".inside-error-message-2").html("There is a mandatory field!");
                    } else{
                        $(".inside-error-message-2").html("");
                        sectionButtons2[currentSection2 + 1].click();
                    }
            }
        });
        
        previousButton2.addEventListener("click", function() {
            if (currentSection2 > 0) {
                sectionButtons2[currentSection2 - 1].click();
            }
        });
        
        
        
        //slider javascript
        
        const SLIDES = Array.from(document.querySelectorAll(".slide"));
        const NEXT_BUTTON = document.querySelector("#next_slide_btn");
        const PREVIOUS_BUTTON = document.querySelector("#previous_slide_btn");
        const LOOP_DELAY = 6000;
        const ANIMATION_DURATION = 500;

        let currentSlide = slideIntoView(0, SLIDES, 1);
        let loopSlider = setInterval(() => currentSlide = slideIntoView(currentSlide, SLIDES, 1), LOOP_DELAY);

        console.log("asd");

        NEXT_BUTTON.addEventListener("click", throttle(() => {
            clearInterval(loopSlider);
            currentSlide = slideIntoView(currentSlide, SLIDES, 1);
            loopSlider = setInterval(() => currentSlide = slideIntoView(currentSlide, SLIDES, 1), LOOP_DELAY);
        }, ANIMATION_DURATION));

        PREVIOUS_BUTTON.addEventListener("click", throttle(() => {
            clearInterval(loopSlider);
            currentSlide = slideIntoView(currentSlide, SLIDES, -1);
            loopSlider = setInterval(() => currentSlide = slideIntoView(currentSlide, SLIDES, 1), LOOP_DELAY);
        }, ANIMATION_DURATION));

        // This should handle animation pause on tab change
        window.addEventListener("blur", () => {
            clearInterval(loopSlider); 
        });
        window.addEventListener("transitionstart", () => {
            clearInterval(loopSlider);
            loopSlider = setInterval(() => currentSlide = slideIntoView(currentSlide, SLIDES, 1), LOOP_DELAY);
            if(currentSlide === 0){
                $(".dot").css("background-color", "white");
                $("#dot-1").css("background-color", "grey");
            } else if (currentSlide === 1){
                $(".dot").css("background-color", "white");
                $("#dot-2").css("background-color", "grey");
            } else if (currentSlide === 2){
                $(".dot").css("background-color", "white");
                $("#dot-3").css("background-color", "grey");
            }else if (currentSlide === 3){
                $(".dot").css("background-color", "white");
                $("#dot-4").css("background-color", "grey");
            }else if (currentSlide === 4){
                $(".dot").css("background-color", "white");
                $("#dot-5").css("background-color", "grey");
            }else if (currentSlide === 5){
                $(".dot").css("background-color", "white");
                $("#dot-6").css("background-color", "grey");
            }else if (currentSlide === 6){
                $(".dot").css("background-color", "white");
                $("#dot-7").css("background-color", "grey");
            }
        });

        function slideIntoView(index, slides, direction) {
            const slidesCount = slides.length;
            const slidesClass = slides[0].classList[0];

            resetClasses(slides, slidesClass);

            let currentSlide = checkIfFirstLast(index, slidesCount, direction);
            let previousSlide = checkIfFirstLast(currentSlide, slidesCount, -1);
            let nextSlide = checkIfFirstLast(currentSlide, slidesCount, 1);

            slides[currentSlide].classList.add("current-slide");
            slides[previousSlide].classList.add("previous-slide");
            slides[nextSlide].classList.add("next-slide");

            if (direction === 1) {
                slides[previousSlide].classList.add("active");
            }
            else {
                slides[nextSlide].classList.add("active");
            }
            return currentSlide;
            
            
        }
        function checkIfFirstLast(index, listCount, direction) {
            if (index === listCount - 1 && direction === 1) return 0;
            else if (index === 0 && direction === -1 ) return listCount - 1;
            else return index + direction;
        }
        function resetClasses(elements, className) {
            elements.forEach(element => element.className = className);
        }

        // The throttle function
        // Many thanks to Jonathan Sampson
        // https://jsfiddle.net/jonathansampson/m7G64/
        function throttle (callback, limit) {
            var wait = false;
            return () => {
                if (!wait) {
                    callback.call();
                    wait = true;
                    setTimeout(() => wait = false, limit);
                }
            }
        }
        
        // Typing effects
        
        var typer = document.querySelector("span.typing-effect"),
            wordsToType = typer.getAttribute("words").split(','),
            typingSpeed = parseInt(typer.getAttribute('typing-speed')) || 70,
            typingDelay = parseInt(typer.getAttribute('typing-delay')) || 700;
        
        var currentWordIndex = 0,
            currentCharacterIndex = 0;
        
        function type() {
        var wordToType = wordsToType[currentWordIndex % wordsToType.length];

        if (currentCharacterIndex < wordToType.length) {
            typer.innerHTML = wordToType.substr(0, currentCharacterIndex + 1);
            currentCharacterIndex++;
            setTimeout(type, typingSpeed);
        } else {
            setTimeout(erase, typingDelay);
        }
    }

    function erase() {
        var wordToType = wordsToType[currentWordIndex % wordsToType.length];

        if (currentCharacterIndex > 0) {
            typer.innerHTML = wordToType.substr(0, currentCharacterIndex - 1);
            currentCharacterIndex--;
            setTimeout(erase, typingSpeed);
        } else {
            currentWordIndex++;
            setTimeout(type, typingDelay);
        }
    }
        
        window.onload = function () {
            type();
        };

    
    </script>
    
    
    
    </body></html>