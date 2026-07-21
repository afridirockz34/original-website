<?php 

include("includes/lead-cap.php");


$lead_source = $_SESSION['lead_source'] ?? 'Unknown';

$utm_source = $_SESSION['utm_source'] ?? 'Unknown';

$dir="media/cal-pics/";$scan_pictures=scandir($dir);unset($scan_pictures[0]);unset($scan_pictures[1]);$random_pic=array_rand($scan_pictures,1);$calculate_pic=$scan_pictures[$random_pic];date_default_timezone_set('America/Toronto');$date=date('m/d/Y h:i:s a',time());if(isset($_POST['submit'])){$error="";$successMessage="";$phpPicVal=$_POST['phpCalVal'];$calValue='';if($phpPicVal=="threeplusthree.png"){$calValue='6';}else if($phpPicVal=="fourplusthree.png"){$calValue='7';}else if($phpPicVal=="fiveplustwo.png"){$calValue='7';}else if($phpPicVal=="twoplusone.png"){$calValue='3';}else if($phpPicVal=="eightplusfour.png"){$calValue='12';}else if($phpPicVal=="twoplusnine.png"){$calValue='11';}else if($phpPicVal=="sevenplusone.png"){$calValue='8';}if(!$_POST['username']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you full name!<br>';}if (!preg_match('/^[\p{L} ]+$/u', $_POST['username'])){$error .= '&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Name must contain letters and spaces only!<br>';}if(!$_POST['email']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you email address!<br>';}if($_POST['email']&&filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)===false){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; The email address is invalid.<br>';}if(!$_POST['phone']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter you phone number!<br>';}if(!$_POST['company']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter your company name!<br>';}if(!$_POST['website']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter your website url!<br>';}if(!$_POST['keywords']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please enter keywords!<br>';}if(!$_POST['calVal']){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Please complete the calculation!<br>';}else if($_POST['calVal']!=$calValue){$error.='&nbsp; <i style="font-size:8px; position:relative; top:-2px;" class="fas fa-circle"></i>&nbsp; Calculated value is wrong!<br>';}if($error!=""){$error='<h4 style="font-weight:16px; font-weight:bold">There were error(s) in your form:</h4>'.$error; ?><script>window.location.hash="#get-quote"</script><?php }else{$userName=ucwords($_POST["username"]);$emailTo1=$_POST['email'];$subject1="Thank You - From 6ix Developers";$content1='<div style="width:100%; 
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
</div>';$headers1="MIME-Version: 1.0"."\r\n";$headers1.="Content-type:text/html;charset=UTF-8"."\r\n";$headers1.="From: Help@6ixdevelopers.com";mail($emailTo1,$subject1,$content1,$headers1);$emailTo="faheem-afridi@live.com, musab@6ixdevelopers.com, leads@6ixdevelopers.odoo.com";$subject="New SEO Quote Request From ".$_POST["username"]." 6ixdevelopers - Seo-agency-toronto";$content='<p>You got a new request for quote from 6ixdevelopers SEO agency toronto page on '.$date.'!</p>
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
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Company</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'.$_POST["company"].'</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Social Media Inquiry</td>
<td style="background-color:#F2F3F4; border-collapse:collapse; border: 1px solid grey; width:25%;">'.$_POST["keywords"].'</td>
</tr>
<tr style="border-collapse:collapse; text-align:left;">
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Date/Time</td>
<td style="border-collapse:collapse; border: 1px solid grey; width:25%;">'.$date.'</td>
<td style="border-collapse:collapse; border: 1px solid grey; font-weight:bold; width:25%;">Message</td>
<td style="border-collapse:collapse; border: 1px solid greyk; width:25%;">'.$_POST["textarea"].'</td>
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
<p></p><br>';$headers="MIME-Version: 1.0"."\r\n";$headers.="Content-type:text/html;charset=UTF-8"."\r\n";$headers.="From: help@6ixdevelopers.com";if(mail($emailTo,$subject,$content,$headers)){session_start();$_SESSION['emailType']="seo";header('location:thank-you-seo-agency-toronto.php');}else{$error='<p>Due to problem in server we could not send your message please try again later. 6ixdevelopers team&reg.</p>';}}} ?>
<!DOCTYPE html>

<html>
    
    <head>
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://6ixdevelopers.com/seo-agency-toronto#webpage",
      "url": "https://6ixdevelopers.com/seo-agency-toronto",
      "name": "SEO Agency Toronto | 6ix Developers LTD.",
      "description": "#1 Ranked SEO Agency Toronto. Helping Businesses Rank #1 in Toronto with Website SEO, AI SEO & GMB SEO. Get quality leads and scale your business with confidence.",
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
      "@id": "https://6ixdevelopers.com/seo-agency-toronto#breadcrumb",
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
          "name": "SEO Agency Toronto",
          "item": "https://6ixdevelopers.com/seo-agency-toronto"
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


        
        <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="initial-scale=1, width=device-width" name=viewport><title>SEO Agency Toronto | 6ix Developers LTD.</title><meta name="description" content="#1 Ranked SEO Agency Toronto. Helping Businesses Rank #1 in Toronto with Website SEO, AI SEO & GMB SEO. Get quality leads and scale your business with confidence."/><meta itemprop="name" content="6ix Developers"><meta itemprop="description" content="#1 Ranked SEO Agency Toronto. Helping Businesses Rank #1 in Toronto with Website SEO, AI SEO & GMB SEO. Get quality leads and scale your business with confidence."><meta itemprop="image" content="https://6ixdevelopers.com/media/logo/new-logo-white.png"><meta name="keywords" content="Toronto Digital Marketing Agency, Toronto SEO Agency, Increase Organic Ranking, On-Page SEO, Off-Page SEO"><meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/><link rel="canonical" href="https://6ixdevelopers.com/seo-agency-toronto" /><meta property="og:locale" content="en_US" /><meta property="og:type" content="article" /><meta property="og:title" content="SEO Agency Toronto" /><meta property="og:description" content="#1 Ranked SEO Agency Toronto. Helping Businesses Rank #1 in Toronto with Website SEO, AI SEO & GMB SEO. Get quality leads and scale your business with confidence." /><meta property="og:url" content="https://6ixdevelopers.com/seo-agency-toronto" /><meta property="og:site_name" content="SEO Agency Toronto | 6ix Developers LTD." /><meta property="og:image" content="https://6ixdevelopers.com/media/logo/new-logo-white.png" /><meta property="og:image:secure_url" content="https://6ixdevelopers.com/media/logo/new-logo-white.png" /><meta property="og:image:width" content="1920" /><meta property="og:image:height" content="504" /><meta name="twitter:card" content="summary_large_image" /><meta name="twitter:description" content="#1 Ranked SEO Agency Toronto. Helping Businesses Rank #1 in Toronto with Website SEO, AI SEO & GMB SEO. Get quality leads and scale your business with confidence." /><meta name="twitter:title" content="SEO Agency Toronto | 6ix Developers LTD." /><meta name="twitter:image" content="https://6ixdevelopers.com/media/logo/new-logo-white.png" /><link rel="apple-touch-icon" sizes="57x57" href="media/favicons/57.png"><link rel="apple-touch-icon" sizes="60x60" href="media/favicons/60.png"><link rel="apple-touch-icon" sizes="72x72" href="media/favicons/72.png"><link rel="apple-touch-icon" sizes="76x76" href="media/favicons/76.png"><link rel="apple-touch-icon" sizes="114x114" href="media/favicons/114.png"><link rel="apple-touch-icon" sizes="120x120" href="media/favicons/120.png"><link rel="apple-touch-icon" sizes="144x144" href="media/favicons/144.png"><link rel="apple-touch-icon" sizes="152x152" href="media/favicons/152.png"><link rel="apple-touch-icon" sizes="180x180" href="/media/favicons/180.png"><link rel="icon" type="image/png" sizes="192x192" href="media/favicons/192.png"><link rel="icon" type="image/png" sizes="32x32" href="media/favicons/32.png"><link rel="icon" type="image/png" sizes="96x96" href="media/favicons/96.png"><link rel="icon" type="image/png" sizes="16x16" href="media/favicons/16.png"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="media/favicons/144.png"><meta name="theme-color" content="#ffffff"><link rel="shortcut icon" href="media/favicons/192.png" type="image/x-icon">

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

    <header id="main-header"><div class="nav-logo"> <a href="https://6ixdevelopers.com/"><img id="logo" src="media/logo/new-logo.png" width="125px"></a>  <img style="position:relative; top:-4px; left:10px" id="ca-logo" src="media/canadian.png" width="40px"></div><div class="nav-li"> <a class="cta" href="contact-us"><i style="color:white; font-size:18px; position:relative; top:2px;" class="fa fa-envelope"></i> &nbsp;Contact us</a> <a href="tel:18888087265"><i style="font-size:12px" class="fas fa-phone-alt"></i> 888-808-7265</a> <a href="about-us">About Us</a><div class="dropdown"> <a class="dropbtn" href="#">Services <i class="fa fa-caret-down"></i></a><div class="dropdown-content"> <a href="website-design-agency-toronto">Website Design</a><br> <a href="ppc-google-ads-management-toronto">Google Ads/PPC</a><br> <a href="social-media-marketing-agency-toronto">Social Media</a><br> <a href="seo-agency-toronto">SEO Services</a><br></div></div> <a href="https://6ixdevelopers.com/">Home</a></div> <nav class="topnav"> <a href="tel:18888087265"><i style="color:#ff6699; font-size: 23px; position:relative; top:-2px;" class="fas fa-phone-alt"></i></a> &nbsp; &nbsp; &nbsp; <a href="#" onclick="openNav()"> <svg width="30" height="26" id="icoOpen"> <path d="M0,5 30,5" stroke="white" stroke-width="4"/> <path d="M0,14 30,14" stroke="white" stroke-width="4"/> <path d="M0,23 30,23" stroke="white" stroke-width="4"/> </svg> </a> </nav><div class="clear"></div> </header><div id="sideNavigation" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <a style="margin-top:20px" href="https://6ixdevelopers.com/">Home</a> <a href="#">Services &nbsp;<i class="fa fa-caret-down"></i></a> <a style="padding-left:50px"href="website-design-agency-toronto">Website Design</a> <a style="padding-left:50px" href="ppc-google-ads-management-toronto">Google Ads/PPC</a> <a style="padding-left:50px" href="social-media-marketing-agency-toronto">Social Media</a> <a style="padding-left:50px" href="seo-agency-toronto">SEO Services</a> <a href="about-us">About Us</a> <a href="contact-us">Contact Us</a> <a class="cta" href="tel:18888087265"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;888-808-7265</a></div><div class="clear"></div><div class="header-section"><div class="header-image"><h1>Toronto SEO Agency That You Can Trust</h1><h3>Hire Us & Start Seeing Results in 30 Days!</h3><br> <a class="btn btn-header" href="#get-quote">Schedule A Call</a></div></div><div class="body-section-7"><div class="bs7-first-row"><h2>Increase Your Organic Ranking With Our Search Engine Optimization Services</h2><div class="divider"></div><p style="margin-top:15px;">SEO (Search Engine Optimization) places your website under the organic results section of search engines like Google, Bing or Yahoo. Being found organically by ranking on the first page of Google is one of the best ways to grow your business consistently. Leads coming from organically ranked websites are always more likely to convert and they do not cost anything. Our Certified team of SEO experts are here to provide affordable SEO packages to small and large businesses. Whether you need local small business SEO or large enterprise SEO services, our team of SEO experts apply proven strategies and best practices across all businesses. Though there are many SEO companies in Toronto and the GTA offering SEO services, you can certainly trust us and let us help you rank on the 1st page of Google because we have done it all.</p></div><div class="bs7-rows bs7-row-1"><div class="row-columns row-column-1 bs7-row-1-img"></div><div class="row-columns row-column-2"><h2>Website SEO Analysis</h2><p>Before starting the actual SEO of your business website, we need to understand your client base, industry requirement and your business goal. SEO team at 6ix Developers specializes in gathering all the industry benchmarks for your business. Our SEO team develops a comprehensive SEO strategy based on your initial website analysis and predicts the performance and the timeline. Our analytical audit covers all major and minor SEO aspects of our client’s website.</p></div></div><div class="bs7-rows bs7-row-2"><div class="row-columns row-column-1 bs7-row-2-img mob-row"></div><div class="row-columns row-column-2"><h2>On-Page SEO</h2><p>The SEO team at 6ix Developers run a comprehensive diagnosis on your website to fix all internal errors before starting anything. Errors including slow website Google PageSpeed, since May the 4th, 2020, Website Google PageSpeed is one of the top 3 factors in determining the ranking of a website. Our SEO specialized team creates a technical document which later is handed over to the development team for the implementation.</p></div><div class="row-columns row-column-1 bs7-row-2-img desk-row"></div></div><div class="bs7-rows bs7-row-3"><div class="row-columns row-column-1 bs7-row-3-img"></div><div class="row-columns row-column-2"><h2>Off-Page SEO Link Building</h2><p>Our premium SEO writer works to include you in the news cycle. Our news desk identifies high quality news publishers in your industry and creates news stories that include your business's research on facts in the story.</p></div></div></div><div class="body-section-8"><div class="bs8-container"><h2>Why SEO with 6ix Developers</h2><div class="divider"></div><p style="margin-top:15px;">Our success is in your success. Our SEO packages are completed following aggressive website optimization stretegies and in collaboration with the search engines like Google, Bing and Yahoo. Our promise to excellent local SEO management sets a high standard for our small and large business SEO services. Customer satisfaction is our utmost priority and aligning goals so 6ix Developers and our clients can succeed together.</p><div class="bs8-first-section bs-8-section"><div class="bs8-row bs8-first-row"><div class="bs-8-image"><img src="media/icons/prominent-position.png"></div><div class="bs-8-text"><h4>Prominent Position</h4><p>Rank for keywords that actually convert.</p></div></div><div class="bs8-row bs8-first-row"><div class="bs-8-image"><img src="media/icons/detailed-SEO-website-tracking.png"></div><div class="bs-8-text"><h4>Detailed SEO Website Tracking/Reporting</h4><p>We set up tracking codes on your website to track user actions on the website. We take all that information and use it for better user experience and overall improved SEO ranking. Customized reports are shared on bi-weekly basis to illustrate visible improvement.</p></div></div><div class="bs8-row bs8-first-row"><div class="bs-8-image"><img src="media/icons/no-annual-contracts.png"></div><div class="bs-8-text"><h4>No Annual Contracts</h4><p>Our success is in your success. Be comfortable with our no long terms contract SEO plans.</p></div></div></div><div class="bs8-second-section bs-8-section"><div class="bs8-row bs8-second-row"><div class="bs-8-image"><img src="media/icons/dedicated-management-team.png"></div><div class="bs-8-text"><h4>Dedicated Management Team</h4><p>You get your dedicated SEO manager who shares with you your monthly calendar consists of all the actionable SEO work. Your SEO manager also goes over the progress with you every 2 weeks.</p></div></div><div class="bs8-row bs8-second-row"><div class="bs-8-image"><img src="media/icons/multiple-options.png"></div><div class="bs-8-text"><h4>Multiple Options</h4><p>Our dedicated team of SEO specialists will make sure to put a plan together that fits your needs.</p></div></div><div class="bs8-row bs8-second-row lst-row"><div class="bs-8-image"><img src="media/icons/SEO-dashboard.png"></div><div class="bs-8-text"><h4>SEO Dashboard</h4><p>You get access to our online reporting dashboard which you can use anytime, anywhere to access your daily real time traffic reports.</p></div></div></div></div></div><div id="get-quote" class="body-section-5"><h2>Schedule SEO Call Today</h2><form method="post" id="contact-form"><div class="error-message"><?php echo $error; ?></div><div class="name-feild"><input type="text" class="name" id="username" name="username" placeholder="Name"></div><div class="email-field"><input type="email" class="email" id="email" name="email" placeholder="Email"></div><div class="clear"></div><div class="name-feild"><input type="tel" class="name" id="phone" name="phone" placeholder="Phone"></div><div class="email-field"><input type="text" class="email" id="company" name="company" placeholder="Company"></div><div class="clear"></div><div class="name-feild"> <input type="text" class="email" id="website" name="website" placeholder="Current Website"></div><div class="email-field"> <input type="text" class="email" id="keywords" name="keywords" placeholder="Enter keywords separated by comma"></div><div class="clear"></div><div class="text-feild"><textarea class="text" rows="9" id="textarea" name="textarea" placeholder="Message"></textarea></div><div class="clear"></div><div class="text-feild"><div style="float:left;"><img style="border-radius:4px" src="media/cal-pics/<?php echo $calculate_pic ?>" width="140px">&nbsp; <span style="font-size:32px; position:relative; top:-20px">=</span> &nbsp;</div><div style="float:left; width:60px; margin-bottom:12px"><input type="text" id="calVal" name="calVal" style="text-align:center; font-size:22px; padding:5px"></div></div><div class="clear"></div> <input name="phpCalVal" id="phpCalVal" type="hidden" value="<?php echo $calculate_pic; ?>"><input style="border:none" class="cst-btn submit-btn btn" type="submit" id="submit" name="submit" value="SEND MESSAGE"></form></div><div class="call-to-action"><div class="call-to-action-txt"><h2>Ready to find out what sets 6ix Developers apart?</h2></div><div class="call-to-action-btn"> <a href="contact-us" class="btn-simple cta-btn">Get free consultation now</a></div></div><div class="clear"></div> <footer><div class="footer-section ft-section-mobile"> <a style="overflow:auto" href="https://6ixdevelopers.com/"> <img src="media/logo/new-logo-white.png" width="50%"> </a><div class="vertical-line"><div class="v-line"></div></div><p style="font-size:17px; font-weight:bold; letter-spacing:1.5px; margin-top:30px; color:white">CONTACT US</p><div class="contact-section"><p style="padding-bottom:10px"><i style="color:white;" class="fas fa-map-marked-alt"></i> &nbsp;<a href="https://g.page/6ixdevelopers?share" target="_blank">1550 South Gateway Road, Mississauga</a><br> <span style="line-height:1.4em"><i style="position:relative; top:2px; color:white" class="far fa-envelope"></i> &nbsp; <a href="mailto:help@6ixdevelopers.com">help@6ixdevelopers.com</a></span><br> <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:18888087265">Toll free: 888-808-7265</a></span><br>
            <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:4163063443">Toronto: (416) 306-3443</a></span></p></div></div><div class="footer-section ft-section-1"> <a href="https://6ixdevelopers.com/">Home</a><br> <a href="website-design-agency-toronto">Website Design</a><br> <a href="ppc-google-ads-management-toronto">Google Ads</a><br> <a href="social-media-marketing-agency-toronto">SEO Services</a><br> <a href="digital-marketing-agency-toronto">Digital Marketing</a><br><a href="ppc-agency-toronto">PPC Agency Toronto</a><br> <a href="about-us">About Us</a><br> <a href="contact-us">Contact Us</a><br></div><div class="footer-section ft-section-2"> <a style="overflow:auto" href="https://6ixdevelopers.com/"> <img src="media/logo/new-logo-white.png" width="60%"> </a><div class="vertical-line"><div class="v-line"></div></div><p style="font-size:17px; font-weight:bold; letter-spacing:1.5px; margin-top:25px; margin-bottom:5px; color:white">CONTACT US</p><div class="contact-section"><p><i style="color:white;" class="fas fa-map-marked-alt"></i> &nbsp;<a target="_blank" href="https://g.page/6ixdevelopers?share">1550 South Gateway Rd. <br>Mississauga, Ontario, Canada</a><br> <span style="line-height:1.4em"><i style="position:relative; top:2px; color:white" class="far fa-envelope"></i> &nbsp; <a href="mailto:help@6ixdevelopers.com">help@6ixdevelopers.com</a></span><br> <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:18888087265">Toll free: 888-808-7265</a></span><br>
            <span style="line-height:1.6em"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;<a href="tel:4163063443">Toronto: (416) 306-3443</a></span></p></div></div><div class="footer-section ft-section-3"> <a target="_blank" href="https://web.facebook.com/6ixDevelopers/"><i class="fab fa-facebook-square"></i></a> &nbsp; <a target="_blank" href="https://www.instagram.com/6ixdevelopers/"><i class="fab fa-instagram"></i></a> &nbsp; <a href="mailto:help@6ixdevelopers.com"><i class="far fa-envelope"></i></a><br><!-- <a href="https://www.google.com/partners/agency?id=8013163615" target="_blank"><img style="width:80%; text-align:center; margin-top:15px;" src="media/icons/google-partner.jpg" alt="Google Premier Partner"></a> --> </div></footer><div class="footer-bottom"><img style=";position:relative; top:-4px; left:10px" id="ca-logo" src="media/canadian.png" width="40px"><div class="fb-section-1">Est. 2012 <span class="fb-logo">6ixDevelopers</span><i style="font-size:10px; position:relative; top:-4px; color:#ccffff;" class="fas fa-registered"></i>. All Rights Reserved.</div><div class="fb-section-2"><a href="privacy-policy">Privacy Policy</a>&nbsp; | &nbsp;<a href="terms-and-conditions">Terms & Conditions</a>&nbsp; | &nbsp;<a href="terms-of-service-for-6ix-developers">Terms of Service</a>&nbsp; | &nbsp;<a href="google-policy.php">Google Policy</a>&nbsp; | &nbsp;<a href="sitemap">Sitemap</a></div></div>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Muli:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="scripts/seo-styles.css?v=1.1"><script type="text/javascript" src="scripts/seo-functions.js?v=1.1"></script></body></html>