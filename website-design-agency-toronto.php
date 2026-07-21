<?php 

include("includes/lead-cap.php");


$lead_source = $_SESSION['lead_source'] ?? 'Unknown';

$utm_source = $_SESSION['utm_source'] ?? 'Unknown';

$dir="media/cal-pics/";$scan_pictures=scandir($dir);unset($scan_pictures[0]);unset($scan_pictures[1]);$random_pic=array_rand($scan_pictures,1);$calculate_pic=$scan_pictures[$random_pic];date_default_timezone_set('America/Toronto');$date=date('m/d/Y h:i:s a',time());if(isset($_POST['submit'])){$error="";$successMessage="";$phpPicVal=$_POST['phpCalVal'];$calValue='';if($phpPicVal=="threeplusthree.png"){$calValue='6';}else if($phpPicVal=="fourplusthree.png"){$calValue='7';}else if($phpPicVal=="fiveplustwo.png"){$calValue='7';}else if($phpPicVal=="twoplusone.png"){$calValue='3';}else if($phpPicVal=="eightplusfour.png"){$calValue='12';}else if($phpPicVal=="twoplusnine.png"){$calValue='11';}else if($phpPicVal=="sevenplusone.png"){$calValue='8';}if(!$_POST['username']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you full name!<br>';}if (!preg_match('/^[\p{L} ]+$/u', $_POST['username'])){$error .= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Name must contain letters and spaces only!<br>';}if(!$_POST['phone']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you phone number!<br>';}if(!$_POST['package']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please select website package!<br>';}if(!$_POST['email']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you email address!<br>';}if($_POST['email']&&filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)===false){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; The email address is invalid.<br>';}if(!$_POST['calVal']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please complete the calculation!<br>';}else if($_POST['calVal']!=$calValue){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Calculated value is wrong!<br>';}if($error!=""){$error='<h4 style="font-weight:16px; font-weight:bold">There were error(s) in your form:</h4>'.$error; ?><script>window.location.hash="#get-quote"</script><?php }else{$userName=ucwords($_POST["username"]);$emailTo1=$_POST['email'];$subject1="Thank You - From 6ix Developers";$content1='<div style="width:100%; 
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
background-color:white;
border-left:1px solid #cecece;
border-right:1px solid #cecece;">
<div style="text-align:center; margin-bottom:50px">
<img src="https://6ixdevelopers.com/media/icons/done.png" width="70px">
<h2 style="color:#031523; font-size:30px; font-weight">Thank You '.$userName.'</h2>
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
<div style="border:1px solid #cecece; padding:30px; 20px; text-align:center; color:black; background-color:#ededed">
<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/privacy-policy">Privacy Policy</a>&nbsp;  | &nbsp;<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/terms-and-conditions">Terms & Conditions</a>&nbsp; | &nbsp;<a style="color:black; text-decoration:none; font-size:14px;" href="https://6ixdevelopers.com/sitemap">Sitemap</a>
</div>
</div>';$headers1="MIME-Version: 1.0"."\r\n";$headers1.="Content-type:text/html;charset=UTF-8"."\r\n";$headers1.="From: Help@6ixdevelopers.com";mail($emailTo1,$subject1,$content1,$headers1);$emailTo="faheem-afridi@live.com, musab@6ixdevelopers.com, leads@6ixdevelopers.odoo.com";$subject="New Website Design Quote Request From ".$_POST["username"]." 6ixdevelopers - Website-design-agency-toronto";$content='<p>You got a new request for quote from 6ixdevelopers website design page on '.$date.'!</p>
<span style="font-weight:bold;">USER INFORMATION</span>
<table bgcolor="white" style="border-collapse:collapse; width:100%; border: 1px solid grey; color:black; margin-top:10px">
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Name</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'.$_POST["username"].'</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Email</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'.$_POST["email"].'</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Phone</td>
<td style="border-collapse:collapse; border: 1px solid grey; width:25%;">'.$_POST["phone"].'</td>
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Current Website</td>
<td style="border-collapse:collapse; border: 1px solid greyk; width:25%;">'.$_POST["website"].'</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Website Type</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'.$_POST["package"].'</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Message</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'.$_POST["textarea"].'</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Lead Source</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'. $lead_source .'</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">UTM Source (if any):</td>
            <td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'. $utm_source .'</td>
            </tr>
</table>
<p>'.$_POST["claim-google-ads"].'</p>
<p><br>
</p>
<p></p><br>';$headers="MIME-Version: 1.0"."\r\n";$headers.="Content-type:text/html;charset=UTF-8"."\r\n";$headers.="From: help@6ixdevelopers.com";if(mail($emailTo,$subject,$content,$headers)){session_start();$_SESSION['emailType']="website-design";
    // Prepare data to send to Zapier
$zapierData = [
    'name'    => $_POST['username'],
    'email'   => $_POST['email'],
    'phone'   => $_POST['phone'],
    'website' => $_POST['website'],
    'package' => $_POST['package'],
    'message' => $_POST['textarea'],
    'lead_source' => $lead_source,
    'utm_source'  => $utm_source
];

// Send data to Zapier
$zapierWebhookUrl = 'https://hooks.zapier.com/hooks/catch/22670091/2p497wp/';
$ch = curl_init($zapierWebhookUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($zapierData));
$response = curl_exec($ch);
curl_close($ch);
header('location:thank-you-6ixdesign-toronto.php');}else{$error='<p>Due to problem in server we could not send your message please try again later. 6ixdevelopers team&reg.</p>';}}} ?>
<!DOCTYPE html>

<html>
    
    <head>
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://6ixdevelopers.com/website-design-agency-toronto#webpage",
      "url": "https://6ixdevelopers.com/website-design-agency-toronto",
      "name": "Website Design Agency Toronto | 6ix Developers LTD.",
      "description": "Award Winning #1 Ranked Website Design Agency Toronto. Helping Businesses Rank #1 in Toronto with our Lead Focus Website Designs in Toronto. Get quality leads and scale your business with confidence.",
      "isPartOf": {
        "@id": "https://6ixdevelopers.com/#website"
      },
      "inLanguage": "en-US"
    },

    {
      "@type": "Organization",
      "@id": "https://6ixdevelopers.com/#organization",
      "name": "6ix Developers LTD. | SEO Agency Toronto & Google Ads",
      "url": "https://6ixdevelopers.com/",
      "logo": "https://6ixdevelopers.com/media/logo/new-logo-white.png",
      "telephone": "+1-416-306-3443",
      "email": "Help@6ixDevelopers.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1550 S Gateway Rd",
        "addressLocality": "Mississauga",
        "addressRegion": "ON",
        "postalCode": "L4W 5G6",
        "addressCountry": "CA"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "45"
      },
      "sameAs": [
        "https://www.google.com/maps/place/6ix+Developers/",
        "https://www.instagram.com/6ixdevelopers/",
        "https://web.facebook.com/6ixDevelopers/"
      ]
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://6ixdevelopers.com/website-design-agency-toronto#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://6ixdevelopers.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Website Design Agency Toronto",
          "item": "https://6ixdevelopers.com/website-design-agency-toronto"
        }
      ]
    },

    {
      "@type": "WebSite",
      "@id": "https://6ixdevelopers.com/#website",
      "url": "https://6ixdevelopers.com/",
      "name": "6ix Developers LTD. | SEO Agency Toronto & Google Ads",
      "publisher": {
        "@id": "https://6ixdevelopers.com/#organization"
      }
    }
  ]
}
</script>


        
        <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="initial-scale=1, width=device-width" name=viewport><title>Website Design Agency Toronto | 6ix Developers LTD.</title><meta name="description" content="Award Winning #1 Ranked Website Design Agency Toronto. Helping Businesses Rank #1 in Toronto with our Lead Focus Website Designs in Toronto. Get quality leads and scale your business with confidence."/><meta itemprop="name" content="6ix Developers"><meta itemprop="description" content="Award Winning #1 Ranked Website Design Agency Toronto. Helping Businesses Rank #1 in Toronto with our Lead Focus Website Designs in Toronto. Get quality leads and scale your business with confidence."><meta itemprop="image" content="https://6ixdevelopers.com/media/logo/new-logo-white.png"><meta name="keywords" content="Toronto Digital Marketing Agency, Toronto Website Design Agency, Toronto Website Design Packages, Website Designs Optimized for Lead Generation, Flexible Website Designs, Web Designs with Fast Google PageSpeed, SEO Friendly Website Designs, Conversion Tracking on your Website"><meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/><link rel="canonical" href="https://6ixdevelopers.com/website-design-agency-toronto" /><meta property="og:locale" content="en_US" /><meta property="og:type" content="article" /><meta property="og:title" content="Website Design Agency Toronto | 6ix Developers LTD." /><meta property="og:description" content="Award Winning #1 Ranked Website Design Agency Toronto. Helping Businesses Rank #1 in Toronto with our Lead Focus Website Designs in Toronto. Get quality leads and scale your business with confidence."/><meta property="og:url" content="https://6ixdevelopers.com/website-design-agency-toronto" /><meta property="og:site_name" content="Website Design Agency Toronto | 6ix Developers LTD." /><meta property="og:image" content="https://6ixdevelopers.com/media/logo/new-logo-white.png" /><meta property="og:image:secure_url" content="https://6ixdevelopers.com/media/logo/new-logo-white.png" /><meta property="og:image:width" content="1920" /><meta property="og:image:height" content="504" /><meta name="twitter:card" content="summary_large_image" /><meta name="twitter:description" content="Award Winning #1 Ranked Website Design Agency Toronto. Helping Businesses Rank #1 in Toronto with our Lead Focus Website Designs in Toronto. Get quality leads and scale your business with confidence./><meta name="twitter:title" content="Website Design Agency Toronto | 6ix Developers LTD." /><meta name="twitter:image" content="https://6ixdevelopers.com/media/logo/new-logo-white.png" /><link rel="apple-touch-icon" sizes="57x57" href="media/favicons/57.png"><link rel="apple-touch-icon" sizes="60x60" href="media/favicons/60.png"><link rel="apple-touch-icon" sizes="72x72" href="media/favicons/72.png"><link rel="apple-touch-icon" sizes="76x76" href="media/favicons/76.png"><link rel="apple-touch-icon" sizes="114x114" href="media/favicons/114.png"><link rel="apple-touch-icon" sizes="120x120" href="media/favicons/120.png"><link rel="apple-touch-icon" sizes="144x144" href="media/favicons/144.png"><link rel="apple-touch-icon" sizes="152x152" href="media/favicons/152.png"><link rel="apple-touch-icon" sizes="180x180" href="/media/favicons/180.png"><link rel="icon" type="image/png" sizes="192x192" href="media/favicons/192.png"><link rel="icon" type="image/png" sizes="32x32" href="media/favicons/32.png"><link rel="icon" type="image/png" sizes="96x96" href="media/favicons/96.png"><link rel="icon" type="image/png" sizes="16x16" href="media/favicons/16.png"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="media/favicons/144.png"><meta name="theme-color" content="#ffffff"><link rel="shortcut icon" href="media/favicons/192.png" type="image/x-icon">

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
</head>
<body>
    <header id="main-header"><div class="nav-logo"> <a href="https://6ixdevelopers.com/"><img id="logo" src="media/logo/new-logo.png" width="125px"></a>  <img style="position:relative; top:-4px; left:10px" id="ca-logo" src="media/canadian.png" width="40px"></div><div class="nav-li"> <a class="cta" href="contact-us"><i style="color:white; font-size:18px; position:relative; top:2px;" class="fa fa-envelope"></i> &nbsp;Contact us</a> <a href="tel:18888087265"><i style="font-size:12px" class="fas fa-phone-alt"></i> 1 888-808-7265</a> <a href="about-us">About Us</a><div class="dropdown"> <a class="dropbtn" href="#">Services <i class="fa fa-caret-down"></i></a><div class="dropdown-content"> <a href="website-design-agency-toronto">Website Design</a><br> <a href="ppc-google-ads-management-toronto">Google Ads/PPC</a><br> <a href="social-media-marketing-agency-toronto">Social Media</a><br> <a href="seo-agency-toronto">SEO Services</a><br></div></div> <a href="https://6ixdevelopers.com/">Home</a></div> <nav class="topnav"> <a href="tel:18888087265"><i style="color:#ff6699; font-size: 23px; position:relative; top:-2px;" class="fas fa-phone-alt"></i></a> &nbsp; &nbsp; &nbsp; <a href="#" onclick="openNav()"> <svg width="30" height="26" id="icoOpen"> <path d="M0,5 30,5" stroke="white" stroke-width="4"/> <path d="M0,14 30,14" stroke="white" stroke-width="4"/> <path d="M0,23 30,23" stroke="white" stroke-width="4"/> </svg> </a> </nav><div class="clear"></div> </header><div id="sideNavigation" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <a style="margin-top:20px" href="https://6ixdevelopers.com/">Home</a> <a href="#">Services &nbsp;<i class="fa fa-caret-down"></i></a> <a style="padding-left:50px"href="website-design-agency-toronto">Website Design</a> <a style="padding-left:50px" href="ppc-google-ads-management-toronto">Google Ads/PPC</a> <a style="padding-left:50px" href="social-media-marketing-agency-toronto">Social Media</a> <a style="padding-left:50px" href="seo-agency-toronto">SEO Services</a> <a href="about-us">About Us</a> <a href="contact-us">Contact Us</a> <a class="cta" href="tel:18888087265"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;1 888-808-7265</a></div><div class="clear"></div><div class="header-section"><div class="header-image"><h3>Make Your Dream Website a Reality</h3><p>Get your FREE online marketing consultation</p><br> <a class="btn btn-header" href="#get-quote">Get your free consultation</a></div></div><div class="body-section-6"><h1>Toronto Website Design Agency</h1><div class="divider"></div><p style="margin-top:30px">Having a website for your business is necessary now. Having a website is just the beginning; ensuring proper website layout and design encourages customers to stay and take desired actions, such as submitting forms, calling your business, or making online purchases.</p><p>&nbsp;</p><p>Get the website that pays for itself. With 6ix Developers, you receive website designs tailored to your industry and competitors, aimed at securing the top position in Google search results. Choosing 6ix Developers for your website design means having a 24/7 online salesperson working for you. Our website designs are carefully analyzed and tested before deployment. This ensures we measure and improve returns on your investment, as well as increase user engagement and conversion rates on your website.</p></div><div class="body-section-1"><div class="boxes"><h2 style="line-height:2em">Website Packages</h2><p>No matter the size of your business, a website is essential to make an impact with customers. To ensure your website is successful and easy to find, it needs to be fast, easy-to-use, and visually appealing on all devices. Any website that doesn't meet these criteria will not be effective anymore.</p><div class="box-content"><div class="box box-1"><div class="box-heading bh1"><h3>Starter</h3><p>1 to 5 Pages</p></div><div class="box-txt"><div class="bt-section"><div class="box-row-firsthalf">Site Analytics</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Mobile Friendly</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Stock Images</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Blog Integration</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">SEO Consulting</div><div class="box-row-secondthalf">1 Hour</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Design Revisions</div><div class="box-row-secondthalf">2</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Additional Work</div><div class="box-row-secondthalf">$110 per Hour</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Ecommerce Features</div><div class="box-row-secondthalf">No</div></div><div class="clear"></div></div><div class="box-button"><a href="#get-quote" class="btn box-btn starter">Request Quote</a></div></div><div class="clear-mb2"></div><div class="box box-2"><div class="box-heading bh2"><h3>Standard</h3><p>6 to 12 Pages</p></div><div class="box-txt"><div class="bt-section"><div class="box-row-firsthalf">Site Analytics</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Mobile Friendly</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Stock Images</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Blog Integration</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">SEO Consulting</div><div class="box-row-secondthalf">1 Hour</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Design Revisions</div><div class="box-row-secondthalf">2</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Additional Work</div><div class="box-row-secondthalf">$110 per Hour</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Ecommerce Features</div><div class="box-row-secondthalf">No</div></div><div class="clear"></div></div><div class="box-button"><a href="#get-quote" class="btn box-btn standard">Request Quote</a></div></div><div class="clear-tab"></div><div class="box box-3"><div class="box-heading bh3"><h3>Advanced / E-Commerce</h3><p>13+ Pages</p></div><div class="box-txt"><div class="bt-section"><div class="box-row-firsthalf">Site Analytics</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Mobile Friendly</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Stock Images</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Blog Integration</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">SEO Consulting</div><div class="box-row-secondthalf">1 Hour</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Design Revisions</div><div class="box-row-secondthalf">2</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Additional Work</div><div class="box-row-secondthalf">$110 per Hour</div></div><div class="clear"></div><div class="bt-section"><div class="box-row-firsthalf">Ecommerce Features</div><div class="box-row-secondthalf">Yes</div></div><div class="clear"></div></div><div class="box-button"><a href="#get-quote" class="btn box-btn advanced">Request Quote</a></div></div></div><div class="clear"></div><div class="ts ts-1 text-hide"><div class="show-btn show-btn-1"><h3>What website is right for me?</h3> <i class="fas fa-plus-circle"></i></div><h4>Starter</h4><p>Great for companies offering minimal services, if you are just starting your company, or if you are just beginning to establish your presence online.</p><br><h4>Standard</h4><p>Great for companies that offer multiple services or locations, if your company is already well-established, or if you want to rebrand your online presence.</p><br><h4>Advanced/Ecommerce</h4><p>Perfect for large companies, or if you already have a lot of existing content on your website. Also great for e-commerce companies selling products online.</p></div><div class="ts ts-2 text-hide"><div class="show-btn show-btn-2"><h3>What if I want to promote my website?</h3> <i class="fas fa-plus-circle"></i></div><p>We also specialise in Google Ads campaigns. Click here to request a quote.</p></div><div class="ts ts-3 text-hide"><div class="show-btn show-btn-3"><h3>What happens after my website is done?</h3> <i class="fas fa-plus-circle"></i></div><p>We also offer website management packages. Though not mandatory, website management is incredibly important when you own a website to have the backup you need In case of security breaches, malware, viruses, or even just the website crashing.</p></div></div></div><div class="body-section-7"><div class="bs7-rows bs7-row-1"><div class="row-columns row-column-1 bs7-row-1-img"></div><div class="row-columns row-column-2"><h2>Website Designs Optimized for Lead Generation</h2><p>In today's business landscape, making a significant impact is essential for success, regardless of your business's size.</p><p>Website designs that are slow to load, poorly designed, or difficult to navigate simply won't work anymore. Additionally, if they are not mobile responsive, they will not be effective. These website designs are extremely difficult to rank on the first page of Google, even with extraordinary SEO efforts.</p><p>Website designs that are optimized for lead generation and lead capturing are essential to run a successful and modern business. Let our team at 6ix Developers design a website optimized for lead generation. We'll tailor it to your industry, considering how your potential clients interact with websites. Our goal is to make your website the final destination for their search.</p></div></div><div class="bs7-rows bs7-row-2"><div class="row-columns row-column-1 bs7-row-2-img mob-row"></div><div class="row-columns row-column-2"><h2>Flexible Website Designs</h2><p>Our website designs are fully customizable to ensure your vision is realized without limitations. We bring your dream website design to life. All website designs are developed under the supervision of our marketing team. This ensures the highest level of returns and longer user interaction.</p></div><div class="row-columns row-column-1 bs7-row-2-img desk-row"></div></div><div class="bs7-rows bs7-row-3"><div class="row-columns row-column-1 bs7-row-3-img"></div><div class="row-columns row-column-2"><h2>Beautiful across all Devices</h2><p>We exclusively offer responsive website designs. Our website design team adheres to industry standards to ensure the best user experience across all devices, including mobile phones, tablets, computers, and projectors.</p></div></div><div class="bs7-rows bs7-row-4"><div class="row-columns row-column-1 bs7-row-4-img mob-row"></div><div class="row-columns row-column-2"><h2>Web Designs with Fast Google PageSpeed</h2><p>Over half of all visitors will leave your website if it fails to load within 3 seconds. Do you know how long your website takes to load? Check its speed here. Check <a href="https://developers.google.com/speed/pagespeed/insights/" target="_blank">website design speed</a> here. If your website's bounce rate is over 40% and it takes over 5 seconds to load, don't hesitate to call us. Every second counts. Every single second, people are bouncing off of your website because it's taking too long to load. Website designs at 6ix Developers are optimized for the fastest Google PageSpeed. Since May 4th, 2020, the top 3 factors for ranking #1 on Google are related to your website's PageSpeed. Don’t waste time & contact us now. Each day you're losing 100s of potential clients who can take your business to the next level.</p></div><div class="row-columns row-column-1 bs7-row-4-img desk-row"></div></div><div class="bs7-rows bs7-row-5"><div class="row-columns row-column-1 bs7-row-5-img"></div><div class="row-columns row-column-2"><h2>SEO Friendly Website Designs (Search Engine Optimization)</h2><p>Our website designs ensure customers find your website once launched. All of our website design packages include expert SEO consultation. We ensure your website is launched with the best SEO practices. This includes incorporating high-quality, industry-related keywords in titles, descriptions, meta tags, URLs, etc., to quickly rank your website on the 1st page of Google.</p></div></div><div class="bs7-rows bs7-row-6"><div class="row-columns row-column-1 bs7-row-6-img mob-row"></div><div class="row-columns row-column-2"><h2>Easy to Manage Website Designs</h2><p>Website designs done by 6ix Developers are made to ensure you can make small changes on your website after its launch. Our website editor lets you drag and drop items around the page where you want. Adding new content and images couldn't be easier.</p></div><div class="row-columns row-column-1 bs7-row-6-img desk-row"></div></div><div class="bs7-rows bs7-row-7"><div class="row-columns row-column-1 bs7-row-7-img"></div><div class="row-columns row-column-2"><h2>Conversion Tracking on your Website</h2><!-- <a href="https://www.google.com/partners/agency?id=8013163615" target="_blank"><img style="margin-left:0px;" class="hb-image-2" src="media/icons/google-partner.jpg" alt="Google Premier Partner"></a> --> <p>To find out how your potential customers are interacting with your website, all website designs from 6ix Developers come with Google Analytics integration. We set up custom goals and conversion tracking on your website for you to learn and improve your website for the best user experience, ensuring constant and gradual growth and improvement in your business.</p></div></div></div><div class="body-section-2"><h2>How It Works</h2><div class="bs2-section"><div class="bs2-row-1 bs2-row"><h4>What Do We Need From You?</h4><div class="divider"></div><p>To begin creating your beautiful website, we’ll need a few things from you first.</p><h5 style="margin-top:20px;">Content</h5><p>We will need you to provide all of your content as soon as possible. This ensures an efficient launch of your website. If you do not have content, our premium content creator will create content for your website.</p><h5 style="margin-top:15px;">Logos</h5><p>Please provide your logo as a high-quality graphic in either an .svg, .jpg, or .png format. These will be uploaded to our Google Drive.</p><h5 style="margin-top:15px;">Images</h5><p>High quality images are extremely important to make a good impression with your website. We recommend photos between 100kB and 600kB – this ensures high-quality without sacrificing speed too much. These should be uploaded to a Google Drive if possible. If you do not have images available, do not worry, we will use custom stock images for your website.</p><h5 style="margin-top:15px;">Sitemap</h5><p>The pages you would like to include on your site.</p><h5 style="margin-top:15px;">Contact Forms</h5><p>All the information you need to collect should you have a contact form, and the email to receive the form.</p><h5 style="margin-top:15px;">Logins</h5><p>If you have an existing domain and hosting, we’ll need your login information to start.</p></div><div class="bs2-row-2 bs2-row"><h4>How Does The Web Design Process Work?</h4><div class="divider"></div><p style="margin-top:15px;">1. We develop an initial document that outlines the website and the content in it. We will also work with you to come up with a design you like.</p><p style="margin-top:15px;">2. Once the content and design of the website is approved, we send this to the developer to begin building your website.</p><p style="margin-top:15px;">3. Once the website is completed, we can go back in and make revisions.</p><p style="margin-top:15px;">4. After all the changes are made, we will migrate the website to your domain and hosting.</p><p style="margin-top:15px;">5. We offer optional monthly management and maintenance services for your website. This helps with website crashes, malware or virus attacks, hackers, etc. as well as regular updates.</p></div></div></div>
    
    <div class="body-section-3"><h2 style="padding:0px 20px;">Real Clients With Real Results</h2>
    
    <div class="portfolio-images pi-1">
        
    <div class="img mg-41"></div><div class="mobile-clear"></div>
    
    <div class="img mg-42"></div><div class="mobile-clear"></div><div class="clear-mb2"></div>
    
    <div class="img mg-43"></div><div class="mobile-clear"></div><div class="clear-mbb"></div>
    
    <div class="img mg-44"></div><div class="mobile-clear"></div><div class="clear-mb2"></div>
    
    <div class="img mg-45"></div><div class="mobile-clear"></div><div class="clear-dsk"></div>
    
    <div class="img mg-46"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="clear-mbb"></div>
    
    <div class="img mg-47"></div><div class="mobile-clear"></div>
    
    <div class="img mg-48"></div><div class="mobile-clear"></div><div class="clear-mb2"></div>
    
    <div class="img mg-49"></div><div class="mobile-clear"></div><div class="clear-mbb"></div>
    
    <div class="img mg-50"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="clear-dsk"></div>
        
    <div class="img mg-1"></div><div class="mobile-clear"></div>
    
    <div class="img mg-2"></div><div class="mobile-clear"></div><div class="clear-mb2"></div>
    
    <div class="img mg-3"></div><div class="mobile-clear"></div><div class="clear-mbb"></div>
    
    <div class="img mg-4"></div><div class="mobile-clear"></div><div class="clear-mb2"></div>
    
    <div class="img mg-5"></div><div class="mobile-clear"></div><div class="clear-dsk"></div>
    
    <div class="img mg-6"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="clear-mbb"></div>
    
    <div class="img mg-7"></div><div class="mobile-clear"></div>
    
    <div class="img mg-8"></div><div class="mobile-clear"></div><div class="clear-mb2"></div>
    
    <div class="img mg-9"></div><div class="mobile-clear"></div><div class="clear-mbb"></div>
    
    <div class="img mg-10"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="clear-dsk"></div>
    
    <div class="img mg-11"></div><div class="mobile-clear"></div><div class="img mg-12"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="clear-mbb"></div><div class="img mg-13"></div><div class="mobile-clear"></div><div class="img mg-14"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="img mg-15"></div><div class="mobile-clear"></div><div class="clear-mbb"></div><div class="clear-dsk"></div><div class="img mg-16"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="img mg-17"></div><div class="mobile-clear"></div><div class="img mg-18"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="clear-mbb"></div><div class="img mg-19"></div><div class="mobile-clear"></div><div class="img mg-20"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="clear-dsk"></div><div class="img mg-21"></div><div class="mobile-clear"></div><div class="clear-mbb"></div><div class="img mg-22"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="img mg-23"></div><div class="mobile-clear"></div><div class="img mg-24"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="clear-mbb"></div><div class="img mg-25"></div><div class="mobile-clear"></div><div class="clear-dsk"></div><div class="img mg-26"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="img mg-27"></div><div class="mobile-clear"></div><div class="clear-mbb"></div><div class="img mg-28"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="img mg-29"></div><div class="mobile-clear"></div><div class="img mg-30"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="clear-mbb"></div><div class="clear-dsk"></div><div class="img mg-31"></div><div class="mobile-clear"></div><div class="img mg-32"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="img mg-33"></div><div class="mobile-clear"></div><div class="clear-mbb"></div><div class="img mg-34"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="img mg-35"></div><div class="mobile-clear"></div><div class="clear-dsk"></div><div class="img mg-36"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="clear-mbb"></div><div class="img mg-37"></div><div class="mobile-clear"></div><div class="img mg-38"></div><div class="mobile-clear"></div><div class="clear-mb2"></div><div class="img mg-39"></div><div class="mobile-clear"></div><div class="clear-mbb"></div><div class="img mg-40"></div><div class="clear"></div></div></div>
    
    
    <div class="body-section-4"><h2>FAQ</h2><div class="accordion-left bs4-accordion"><div class="ts ts-4 text-hide"><div class="show-btn show-btn-4"><h3>Where does my content come from?</h3> <i class="fas fa-plus-circle"></i></div><p>You! We include the content you send us, or that already exists on your website. We are more than happy to help you write your content as well at our rate of 0.15 per word</p></div><div class="ts ts-5 text-hide"><div class="show-btn show-btn-5"><h3>What is the turnaround time?</h3> <i class="fas fa-plus-circle"></i></div><p>Given you provide us all the necessary information up front, we can have your website up in a matter of weeks.</p></div><div class="ts ts-6 text-hide"><div class="show-btn show-btn-6"><h3>Is there a contract?</h3> <i class="fas fa-plus-circle"></i></div><p>No. We do not require any of our clients to sign a contract. Our monthly plans operate on a month-to-month basis.</p></div><div class="ts ts-7 text-hide"><div class="show-btn show-btn-7"><h3>Can SEO be done to your sites?</h3> <i class="fas fa-plus-circle"></i></div><p>Yes! All of our sites come with the SEO functionality built-in.</p></div><div class="ts ts-8 text-hide"><div class="show-btn show-btn-8"><h3>What is not included?</h3> <i class="fas fa-plus-circle"></i></div><p>Content creation, graphic design, logo design, and other services such as SEO and Google Ads will run at additional costs. Please contact us for more information or to get an estimate.</p></div><div class="ts ts-9 text-hide"><div class="show-btn show-btn-9"><h3>If I have a large site, can I still get a small package?</h3> <i class="fas fa-plus-circle"></i></div><p>Yes but, we do not recommend this. Doing so may limit the functionality of the website, and can impact the amount of content we can use.</p></div></div><div class="accordion-right bs4-accordion"><div class="ts ts-10 text-hide"><div class="show-btn show-btn-10"><h3>How many pages do I get?</h3> <i class="fas fa-plus-circle"></i></div><p>Please refer to the website packages located under Step 1 of our consultation form.</p></div><div class="ts ts-11 text-hide"><div class="show-btn show-btn-11"><h3>Can I use the domain I already have?</h3> <i class="fas fa-plus-circle"></i></div><p>Yes! And we encourage it! We will need your login information. We also recommend purchasing a hosting plan (our favourite is GoDaddy).</p></div><div class="ts ts-12 text-hide"><div class="show-btn show-btn-12"><h3>Are there any monthly maintenance plans?</h3> <i class="fas fa-plus-circle"></i></div><p>It is important for the security of your website to have someone regularly back it up, and provide assistance incase of malware or virus attacks, hackers, website crashes, etc. It also allows your website to be updated professionally every month if need be.Therefore, we do offer a range of monthly plans. <a href="contact-us.php">Please contact us for more information.</a></p></div><div class="ts ts-13 text-hide"><div class="show-btn show-btn-13"><h3>Do I own the website?</h3> <i class="fas fa-plus-circle"></i></div><p>Yes! We do not operate under contracts, so you will 100% own your website once it is up and running.</p></div><div class="ts ts-14 text-hide"><div class="show-btn show-btn-14"><h3>What do you need from me to get started?</h3> <i class="fas fa-plus-circle"></i></div><p>We will need your existing content, or link to your website if we are copying your content. We will also need you to provide us with your logo and images – we recommend images be between 100kB and 600kB. Finally, we will need to know your website outline, contact form information, and your domain/hosting login.</p></div><div class="ts ts-15 text-hide"><div class="show-btn show-btn-15"><h3>How do I promote my new website?</h3> <i class="fas fa-plus-circle"></i></div><p>We specialise in Google Ads campaigns for all types of businesses. <a href="ppc-google-ads-management-toronto.php">Click here to get a quote.</a></p></div></div></div><div id="get-quote" class="body-section-5"><h2>Get Quote Now</h2>
    <form method="post" id="contact-form">
    <div class="error-message"><?php echo $error; ?></div>
    <div class="name-feild"><input type="text" class="name" id="username" name="username" placeholder="Name" /></div>
    <div class="email-field"><input type="email" class="email" id="email" name="email" placeholder="Email" /></div>
    <div class="clear"></div>
    <div class="name-feild"><input type="tel" class="name" id="phone" name="phone" placeholder="Phone" /></div>
    <div class="email-field"><input type="text" class="email" id="website" name="website" placeholder="Current Website" /></div>
    <div class="clear"></div>
    <div style="margin-top: 15px;" class="text-field">
        <select id="package" name="package">
            <option disabled selected>Website Type</option>
            <option value="Starter">Starter (1 to 5 Pages)</option>
            <option value="Standard">Standard (6 to 12 Pages)</option>
            <option value="Advanced">Advanced / E-Commerce (13+ Pages)</option>
        </select>
        </div>
    <div class="text-feild"><textarea class="text" rows="9" id="textarea" name="textarea" placeholder="Message"></textarea></div>
    <div class="clear"></div>
    <div class="text-feild" style="margin-top:20px; margin-bottom:10px;">
        <div class="checkbox-field" style="float:left; text-align:left; width:20px;"><input class="claim-checkbox" style="width:20px !important;  text-align:left;  width:20px; height:20px" type="checkbox" id="claim-google-ads" name="claim-google-ads" value="Free Google Ads Setup: Checked"></div><div class="checkbox-label" style="float:left; text-align:left; width:90%; position:relative; top:-3px;"><label class="claim-checkbox-label" style="font-size:18px" for="claim-google-ads">&nbsp; Claim Free Google Ads Setup Valued $1500</label></div>
        </div>
    <div class="clear"></div>
    <div class="text-feild">
        <div style="float: left;"><img style="border-radius: 4px;" src="media/cal-pics/<?php echo $calculate_pic ?>" width="140px" />&nbsp; <span style="font-size: 32px; position: relative; top: -20px;">=</span> &nbsp;</div>
        <div style="float: left; width: 60px; margin-bottom: 12px;"><input type="text" id="calVal" name="calVal" style="text-align: center; font-size: 22px; padding: 5px;" /></div>
    </div>
    <div class="clear"></div>
    <input name="phpCalVal" id="phpCalVal" type="hidden" value="<?php echo $calculate_pic; ?>" /><input style="border: none;" class="cst-btn submit-btn btn" type="submit" id="submit" name="submit" value="SEND MESSAGE" />
</form>
    </div><div class="call-to-action"><div class="call-to-action-txt"><h2>Ready to find out what sets 6ix Developers apart?</h2></div><div class="call-to-action-btn"> <a href="contact-us" class="btn-simple cta-btn">Get free consultation now</a></div></div><div class="clear"></div> <footer><div class="footer-section ft-section-mobile"> <a style="overflow:auto" href="https://6ixdevelopers.com/"> <img src="media/logo/new-logo-white.png" width="50%"> </a><div class="vertical-line"><div class="v-line"></div></div><p style="font-size:17px; font-weight:bold; letter-spacing:1.5px; margin-top:30px; color:white">CONTACT US</p><div class="contact-section"><p style="padding-bottom:10px"><i style="color:white;" class="fas fa-map-marked-alt"></i> &nbsp;<a href="https://g.page/6ixdevelopers?share" target="_blank">1550 South Gateway Road, Mississauga</a><br> <span style="line-height:1.4em"><i style="position:relative; top:2px; color:white" class="far fa-envelope"></i> &nbsp; <a href="mailto:help@6ixdevelopers.com">help@6ixdevelopers.com</a></span><br> <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:18888087265">Toll free: 1 888-808-7265</a></span><br>
            <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:4163063443">Toronto: (416) 306-3443</a></span></p></div></div><div class="footer-section ft-section-1"> <a href="https://6ixdevelopers.com/">Home</a><br> <a href="website-design-agency-toronto">Website Design</a><br> <a href="ppc-google-ads-management-toronto">Google Ads</a><br> <a href="social-media-marketing-agency-toronto">SEO Services</a><br> <a href="digital-marketing-agency-toronto">Digital Marketing</a><br><a href="ppc-agency-toronto">PPC Agency Toronto</a><br> <a href="about-us">About Us</a><br> <a href="contact-us">Contact Us</a><br></div><div class="footer-section ft-section-2"> <a style="overflow:auto" href="https://6ixdevelopers.com/"> <img src="media/logo/new-logo-white.png" width="60%"> </a><div class="vertical-line"><div class="v-line"></div></div><p style="font-size:17px; font-weight:bold; letter-spacing:1.5px; margin-top:25px; margin-bottom:5px; color:white">CONTACT US</p><div class="contact-section"><p><i style="color:white;" class="fas fa-map-marked-alt"></i> &nbsp;<a target="_blank" href="https://g.page/6ixdevelopers?share">1550 South Gateway Rd. <br>Mississauga, Ontario, Canada</a><br> <span style="line-height:1.4em"><i style="position:relative; top:2px; color:white" class="far fa-envelope"></i> &nbsp; <a href="mailto:help@6ixdevelopers.com">help@6ixdevelopers.com</a></span><br> <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:18888087265">Toll free: 1 888-808-7265</a></span><br>
            <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:4163063443">Toronto: (416) 306-3443</a></span></p></div></div><div class="footer-section ft-section-3"> <a target="_blank" href="https://web.facebook.com/6ixDevelopers/"><i class="fab fa-facebook-square"></i></a> &nbsp; <a target="_blank" href="https://www.instagram.com/6ixdevelopers/"><i class="fab fa-instagram"></i></a> &nbsp; <a href="mailto:help@6ixdevelopers.com"><i class="far fa-envelope"></i></a><br><!-- <a href="https://www.google.com/partners/agency?id=8013163615" target="_blank"><img style="width:80%; text-align:center; margin-top:15px;" src="media/icons/google-partner.jpg" alt="Google Premier Partner"></a>--> </div></footer><div class="footer-bottom"><img style=";position:relative; top:-4px; left:10px" id="ca-logo" src="media/canadian.png" width="40px"><div class="fb-section-1">Est. 2012 <span class="fb-logo">6ixDevelopers</span><i style="font-size:10px; position:relative; top:-4px; color:#ccffff;" class="fas fa-registered"></i>. All Rights Reserved.</div><div class="fb-section-2"><a href="privacy-policy">Privacy Policy</a>&nbsp; | &nbsp;<a href="terms-and-conditions">Terms & Conditions</a>&nbsp; | &nbsp;<a href="terms-of-service-for-6ix-developers">Terms of Service</a>&nbsp; | &nbsp;<a href="google-policy.php">Google Policy</a>&nbsp; | &nbsp;<a href="sitemap">Sitemap</a></div></div>
    

<div class="google-ads-popup active">

    <div class="gap-container">
    
        <i class="fas fa-times-circle"></i>
        <h4>Receive FREE Google Ads Setup Valued $1500, with Website Design Service</h4>
        
        <p>&nbsp;</p>
        
        <a href="https://6ixdevelopers.com/website-design-agency-toronto#get-quote" class="cst-btn btn claim-btn">Claim Now</a>
        
    </div>
    
</div>
    
<style>
    
    .google-ads-popup{
        width:100%;
        padding:30px 30px;
        background-color:white;
        position: fixed;
        bottom:0px;
        box-shadow: 1px 0px 17px -10px rgba(0,0,0,0.75);
        -webkit-box-shadow: 1px 0px 17px -10px rgba(0,0,0,0.75);
        -moz-box-shadow: 1px 0px 17px -10px rgba(0,0,0,0.75);
        border-radius: 4px;
        text-align:center;
    }
    
    .gap-container{
        position:relative;
    }
    
    .fa-times-circle{
        position:absolute;
        right:-20px;
        top:-10px;
        font-size:30px !important;
        line-height: 0;
        color:#FE6598;
        cursor: pointer;
    }
    
    .claim-btn{
        padding:13px 25px !important;
        font-size:13px !important;
    }
    
</style>
    
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Muli:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="scripts/website-design-styles.css?v=1.3"><script type="text/javascript" src="scripts/website-design-functions.js?v=1.2"></script>
    </body></html>