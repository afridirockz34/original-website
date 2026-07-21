<?php

    session_start();

    $requestType = $_SESSION['emailType'];

    if($requestType != "ppc"){
        header('location:/');
    } 

?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>6ix Developers | Toronto Digital Marketing Agency</title>
    
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
                padding:130px 60px 140px;
                text-align: center;
                 background-image: -webkit-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
                background-image: -moz-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
                background-image: -ms-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
                background-image: -o-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
                background-image: linear-gradient(to left, #66ccff 0%, #ff6699 30%);
            }
            
            .fa-thumbs-up{
                font-size:60px;
                line-height: 1em;
                color:white !important;
            }
            
            .header-image h1{
                color:white;
                font-size:35px;
                font-weight:700;
                letter-spacing: 3px;
                line-height: 1.5em;
                margin-bottom:5px;
            }
            
            .header-image p {
                color:black;
                font-size:16px;
                font-weight: 600;
            }
            
            .divider{
                width:10%;
                margin:10px auto 30px;
                height:3px;
                background-color:#ff6699;
            }
            
            /* Header section CSS end */
            
            
            /* Body section 1 CSS start */
            
            .body-section-1{
                visibility: hidden;
                width:90ch;
                margin: 0 auto;
                padding:50px 30px;
                background-color: white;
                z-index: 180;
                position: relative;
                top:-100px;
                -webkit-box-shadow: 0px 10px 28px -16px rgba(0,0,0,0.86);
                -moz-box-shadow: 0px 10px 28px -16px rgba(0,0,0,0.86);
                box-shadow: 0px 10px 28px -16px rgba(0,0,0,0.86);
                border:1px solid #f2f2f2;
                border-radius: 4px;
                text-align: center;
            }
            
            .body-section-1 h2{
                font-size:28px;
            }
            
            .bs-1-section{
                margin-top:30px;
                overflow: auto;
                
            }
            
            .bs-1-row{
                width:25%;
                float:left;
                padding:25px 40px;
                text-align: center;
            }
            
            .bs-1-row img{
                max-width:80px;
                margin-bottom:5px;
            }
            
            .bs-1-row a{
                font-size:14px;
                letter-spacing: 1px;
                color: #262626;
                text-decoration: underline !important;
                font-weight: 600;
            }
            
            .clear-desk{
                clear:both;
            }
            
            
            @media (max-width:980px){
                
                .clear-mbb{
                    clear:both;
                }
                
                .clear-desk{
                    clear:none;
                }
                
                /* Header section CSS start */
                
                .header-image{
                    padding:170px 30px 70px;
                }
                
                .header-image h1{
                    color:white;
                    font-size:42px;
                }
                
                /* body 1 section CSS start */
                
                .body-section-1{
                    visibility: visible;
                    width:100%;
                    padding:70px 30px;
                    z-index: 0;
                    position: relative;
                    top:-0px;
                    -webkit-box-shadow: none;
                    -moz-box-shadow: none;
                    box-shadow: none;
                    border:none;
                    border-radius: 0px;
                    text-align: center;
                }
                
                .bs-1-row{
                    width:33.33%;
                    padding:25px 40px;
                }
                
               
                
            }
            
            
            @media(max-width:620px){

                .clear-mb2{
                    clear:both;
                    display: block;
                }
                
                .clear-mbb{
                    clear:none;
                }
                
            .fa-thumbs-up{
                font-size:50px;
                line-height: 1em;
                color:white !important;
            }
            
            .header-image h1{
                color:white;
                font-size:25px;
                font-weight:700;
                letter-spacing: 3px;
                line-height: 1.5em;
                margin-bottom:5px;
            }
                
                
                /* Body section 1 CSS start */
                
               .bs-1-row{
                    width:50%;
                    padding:25px 10px;
                }
                
                .divider{
                    width:20%;
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
        
                <i class="fas fa-thumbs-up"></i>
                
                <h1>Message Sent</h1>
                
                <p>Your Message has been sent and we'll be in touch shortly</p>
                
            </div>
        
        </div>
        
        <div class="body-section-1">
            
            <h2>Where To Next?</h2>
            <div class="divider"></div>
        
            <div class="bs-1-section">
                
                <div class="bs-1-row">
                
                    <img src="media/icons/facebook.png"><br>
                    <a href="https://web.facebook.com/6ixDevelopers/">Facebook</a>
                    
                </div>
                <div class="bs-1-row">
                    
                    <img src="media/icons/instagram-sketched.png"><br>
                    <a href="https://www.instagram.com/6ixdevelopers/">Instagram</a>
                    
                </div>
                
                <div class="clear-mb2"></div>
                
                <div class="bs-1-row">
                
                    <img src="media/icons/teamwork.png"><br>
                    <a href="about-us">About Us</a>
                    
                </div>
                
                <div class="clear-mbb"></div>
                
                <div class="bs-1-row">
                
                    <img src="media/icons/blog.png"><br>
                    <a href="https://6ixdevelopers.com/blog">Blog</a>
                    
                </div>
                
                <div class="clear-mb2"></div>
                
                <div class="clear-desk"></div>
                
                <div class="bs-1-row">
                
                    <img src="media/icons/website-design-new.png"><br>
                    <a href="website-design-agency-toronto">Website Design</a>
                    
                </div>
                
                <div class="bs-1-row">
                    
                    <img src="media/icons/PPC-new.png"><br>
                    <a href="ppc-google-ads-management-toronto">Google Ads</a>
                    
                </div>
                
                <div class="clear-mb2"></div>
                
                <div class="clear-mbb"></div>
                
                <div class="bs-1-row">
                
                    <img src="media/icons/SEO-new.png"><br>
                    <a href="seo-agency-toronto">SEO</a>
                    
                </div>
                <div class="bs-1-row">
                
                    <img src="media/icons/sm3.png"><br>
                    <a href="social-media-marketing-agency-toronto">Social Media</a>
                    
                </div>
            
            </div>
            
        </div>
        
        
       
        <?php include("includes/cta.php") ?>
        <?php include("includes/footer.php") ?>
        
        <script type="text/javascript">

        
            $(document).ready(function(){
                
                if ($(window).width() > 980) {
                    
                    $('.body-section-1').viewportChecker({
                        classToAdd: 'animation-top-slide',
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