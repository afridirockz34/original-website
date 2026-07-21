<!DOCTYPE html>
<html>
    <head>
        
        <title>About Us | 6ix Developers | Toronto Digital Marketing Agency</title>
    
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
                background-color:#f7f7f7;
                padding:70px 120px;
                visibility: hidden;
                text-align: center;
            }
            
            .divider{
                width:10%;
                margin:10px auto 20px;
                height:3px;
                background-color:#ff6699;
            }
            
            
            /* Body section 2 CSS start */
            
            .body-section-2{
                visibility: hidden;
                padding-top:70px;
                text-align:center;
            }
            
            .bs2-text{
                padding:0px 30px 0px
            }
            
            .smm-2 {
                color:white;
                padding:0px;
                text-align: center;
                
            }


            .sb-row-1{

                padding:70px 110px 190px;
                text-align: center;

            }

            .sb-row-1 h1{

                font-size:48px;
                line-height:1.5em;
                font-weight:bold;
            }

            h4{
                line-height: 1.5em;
            }

            .sb-row-1 h5{

                font-size:24px;
                line-height: 1.5em;
                font-weight:bold;
                margin-bottom:20px;

            }

            .sb-row-1 p{

                font-size:20px;
                line-height:1.5em;
                margin-bottom:50px;

            }
            
            .sb-row {

                text-align:center;
                overflow:auto;

            }

            .sb-row h2{

                font-size:36px;
                font-weight:bold;
                line-height:1.5em;
                text-transform: uppercase;
                color:black;

            }

            .sb-row1 h3{

                font-size:35px;
                font-weight:bold;
                line-height:1.5em;
                text-transform: uppercase;
                color:white;

            }

            .sb-row p {

                font-size:18px;
                line-height:1.6em;
                color:#6b7277;
            }

            .sb-row1 p {

                font-size:18px;
                line-height:1.6em;
                color:white;
            }
            
            .team-member {

                width:25%;
                min-height:300px;
                margin:0 auto;
                float:left;
                display: visible;
                overflow: auto;
                display: table;
                cursor:pointer;

            }
            
            .team-three-row{
                width:100ch;
                margin:0 auto;
            }
            .team-two-row{
                width:70ch;
                margin:0 auto;
            }
            .team-one-row{
                width:35ch;
                margin:0 auto;
            }
            
            .team-three{
                width:33.33% !important;
            }
            
            .team-two{
                width:50% !important;
            }
            
            .team-one{
                width:100% !important;
            }

            .member-text{

                display: table-cell;
                vertical-align: middle;
                transition-property:all .3s ease-in-out 0s;
                -moz-transition:all .3s ease-in-out 0s;
                -webkit-transition:all .3s ease-in-out 0s;
                -o-transition:all .3s ease-in-out 0s;

            }

            .member-text h5{

                color:white;
                font-size:24px
            }

            .member-text p{

                color:white;
                text-transform: uppercase;
                font-size:16px;

            }

            .member1{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/MUSAB-A.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }

            .member2{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/FAHEEM-A.jpg");
                background-size: contain;
                background-repeat: no-repeat;
                background-blend-mode: overlay;
                background-position: bottom center;
            }

            .member3{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/ROBYN-W.jpg");
                background-size: contain;
                background-repeat: no-repeat;
                background-blend-mode: overlay;
                background-position: bottom center;
            }

            .member4{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/OSAMA-E.jpg");
                background-size: contain;
                background-repeat: no-repeat;
                background-blend-mode: overlay;
                background-position: bottom center;
            }

            .member5{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/AYESHA-G.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }

            .member6{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/CHAD-B.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }

            .member7{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/JESSICA-G.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }

            .member8{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/ROBIN-D.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            
            .member9{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/DAVID-G.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }

            .member10{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/KARIM-M.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }

            .member11{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/ALEX-K.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }

            .member12{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/AUREL-L.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member13{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/BRITTENY-G.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member14{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/SUNDAS-A.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member15{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/TATIANA-Z.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member16{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/TANIA-R.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member17{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/KAREN-G.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member18{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/JESSICA-G.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member19{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/MIKE-S.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member20{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/HAYA-M.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member21{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/MARC-H.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member22{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/MARK-R.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member23{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/KASHIF-K.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member24{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/MISTY-J.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member25{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/KARTHIK-C.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member26{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/JOSEPH-Z.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member27{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/NICK-F.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .member28{
                border:3px solid #F7F7F7;
                background-image: url("media/team/team-bitmojis/GARY-G.jpg");
                background-size:contain;
                background-blend-mode: overlay;
                background-repeat: no-repeat;
                background-position: bottom center;
            }

            .mt-1, .mt-2, .mt-3, .mt-4, .mt-5, .mt-6, .mt-7, .mt-8, .mt-9, .mt-10, .mt-11, .mt-12, .mt-13, .mt-14, .mt-15, .mt-16, .mt-17, .mt-18, .mt-19, .mt-20, .mt-21, .mt-22, .mt-23, .mt-24, .mt-25, .mt-26, .mt-27, .mt-28{

                display:none;
                transition-property:all .3s ease-in-out 0s;
                -moz-transition:all .3s ease-in-out 0s;
                -webkit-transition:all .3s ease-in-out 0s;
                -o-transition:all .3s ease-in-out 0s;

            }

            .member1:hover > .mt-1, .member2:hover > .mt-2, .member3:hover > .mt-3, .member4:hover > .mt-4, .member5:hover > .mt-5, .member6:hover > .mt-6, .member7:hover > .mt-7, .member8:hover > .mt-8, .member9:hover > .mt-9, .member10:hover > .mt-10, .member11:hover > .mt-11, .member12:hover > .mt-12, .member13:hover > .mt-13, .member14:hover > .mt-14, .member15:hover > .mt-15, .member16:hover > .mt-16, .member17:hover > .mt-17, .member18:hover > .mt-18, .member19:hover > .mt-19, .member20:hover > .mt-20, .member21:hover > .mt-21, .member22:hover > .mt-22, .member23:hover > .mt-23, .member24:hover > .mt-24, .member25:hover > .mt-25, .member26:hover > .mt-26, .member27:hover > .mt-27, .member28:hover > .mt-28{

                transition-property:all .3s ease-in-out 0s;
                -moz-transition:all .3s ease-in-out 0s;
                -webkit-transition:all .3s ease-in-out 0s;
                -o-transition:all .3s ease-in-out 0s;
                display: table-cell;

            }

            .member1:hover, .member2:hover, .member3:hover, .member4:hover, .member5:hover, .member6:hover, .member7:hover, .member8:hover, .member9:hover, .member10:hover, .member11:hover, .member12:hover, .member13:hover, .member14:hover, .member15:hover, .member16:hover, .member17:hover, .member18:hover, .member19:hover, .member20:hover, .member21:hover, .member22:hover, .member23:hover, .member24:hover, .member25:hover, .member26:hover, .member27:hover, .member28:hover{

                background-color:rgba(0,0,0,0.8);
                transition-property:all .3s ease-in-out 0s;
                -moz-transition:all .3s ease-in-out 0s;
                -webkit-transition:all .3s ease-in-out 0s;
                -o-transition:all .3s ease-in-out 0s;
                

            }

            .mb{

                padding:70px 100px;
                background-color:#131924;

            }

            .mb-text {

                float:left;
                width:70%;
                padding-right:60px;
                text-align:left;
                display:block;
                overflow: auto;
            }

            .mb-text h6{

                font-size:13px;
                color:#C1D5DA;
                letter-spacing: 1px;

            }

            .mb-text h3{

                font-size:28px;
                color:white;
                font-weight:bold;
                line-height:1.8em;
                letter-spacing: 1px;

            }

            .mb-text p{

                font-size:17px;
                line-height:1.5em;
                color:#f7f7f7;
                font-weight:300;

            }
            
            .profile-heading{
                font-size:32px;
                font-weight:bold;
                margin:60px 0px 10px; 
            }


            
            @media (max-width:980px){
                
                .team-three-row{
                    width:100%;
                }
                .team-two-row{
                    width:100%;
                }
                .team-one-row{
                    width:100%;
                }
                
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
                
                /* Body section 2 CSS start */
             
                .body-section-2{
                    visibility: visible;
                }
                
                .mb-quote {
                    float:none;
                    width:100%;
                    padding-left:0px;
                    margin-top:30px;
                }

                .mb-text {
                    float:none;
                    width:100%;
                    padding-right:0px;
                }

                .mt-1, .mt-2, .mt-3, .mt-4, .mt-5, .mt-6, .mt-7, .mt-8, .mt-9, .mt-10, .mt-11, .mt-12, .mt-13, .mt-14, .mt-15, .mt-16, .mt-17, .mt-18, .mt-19, .mt-20, .mt-21, .mt-22, .mt-23, .mt-24, .mt-25, .mt-26, .mt-27, .mt-28{
                    display:table-cell;
                }

                .member1, .member2, .member3, .member4, .member5, .member6, .member7, .member8, .member9, .member10, .member11, .member12, .member13, .member14, .member15, .member16, .member17, .member18, .member19, .member20, .member21, .member22, .member23, .member24, .member25, .member26, .member27, .member28{
                    background-color:rgba(0,0,0,0.4);
                }

                .clear-1{
                    clear:both;
                }

                .team-member {
                    width:50%;
                }
                .team-three{
                    width:50% !important;
                }
            
            
                
            }
            
            @media (max-width:780px) {
                
                .team-three{
                    width:100% !important;
                }

                .team-two{
                    width:100% !important;
                }

            
            
                .member1, .member2, .member3, .member4, .member5, .member6, .member7, .member8, .member9, .member10, .member11, .member12, .member13, .member14, .member15, .member16, .member17, .member18, .member19, .member20, .member21, .member22, .member23, .member24, .member25, .member26, .member27, .member28{

                    background-color:rgba(0,0,0,0.4);
                }

                .mb-mobile-bio{

                    display:block;
                }

                .mb-desktop-bio{

                    display:none;
                }

                .mb{

                    padding:70px 20px;
                }


                .sb-row h2 {

                    font-size:28px;

                }

                .sb-row1 h3 {

                    font-size:28px;

                }

                .smm-1{

                   padding:50px 20px 10px;
                }



                .sb-row-1{

                    padding:60px 20px ;
                }

                .sb-row-1 h1{

                    font-size:36px;
                }

                .sb-row-1 h5{

                    font-size:22px;
                }

                .sb-row-1 p{

                    font-size:16px;

                }

                .team-member{
                    width:100%;
                }

                .mobile-clear{
                    clear:both;
                }

                .mb-mobile-bio{

                    display:block;
                }

                .mb-desktop-bio{

                    display:none;
                }

            }
                   
            @media(max-width:620px){

                .clear-mb2{
                    clear:both;
                    display: block;
                }
                
                .team-three{
                    width:100% !important;
                }

                .team-two{
                    width:100% !important;
                }

                
                
                /* Body section 1 CSS start */
                
                .body-section-1{
                    padding:70px 30px;
                }
                
                
                /* Body section 2 CSS start */
                
                .clear-2{

                    clear:both;
                }

                .mobile-clear{
                    clear:both;
                }

                .mb-mobile-bio{

                    display:block;

                }

                .mb-desktop-bio{

                    display:none;

                }

                .team-member{
                    width:100%;
                }

                .member1, .member2, .member3, .member4, .member5, .member6, .member7, .member8, .member9, .member10, .member11, .member12, .member13, .member14, .member15, .member16, .member17, .member18, .member19, .member20, .member21, .member22, .member23, .member24, .member25, .member26, .member27, .member28{

                    background-color:rgba(0,0,0,0.6);

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
        
                <h1>About Us</h1>
                
            </div>
        
        </div>
        
        
        <div class="body-section-1">
     
            <h2>Our Story</h2>
            <div class="divider"></div>
            <p>Since being founded in Mississauga, Ontario in 2012, we have strived to take all the services a company would need while developing an online platform, and provide them all in one place.</p>

            <p style="margin-top:15px">Our goal is to be able to help as many businesses as possible. We always strive to go above and beyond for our clients.</p>

            <p style="margin-top:15px">In order to achieve this, our company lives by two rules:</p>

            <p style="margin-top:10px">1. We strive to fully understand our client's business and industry before we begin a project. This is critical to build an online presence that meets our clients vision, and is relevant to their goals.</p>

            <p style="margin-top:10px">2. We are transparent, and involve our clients through the whole process. We continuously seek feedback to ensure we are on the right track.</p>

            <p style="margin-top:15px">In summary, the secret to our success is simple: We listen to our clients. All of this is thanks to our wonderful team</p>

            
        </div>
        
        <div class="body-section-2">
        
            <div class="bs2-text">
                <h2>Meet The Humans Behind Your Success</h2>
                <div class="divider"></div>
                <p style="margin-bottom:20px;">We Think Big. We Work Hard. We Get Results.</p>
            </div>
            
            <div class="profile-heading">Founders</div>

            <div class="smm-2">
                
                <div class="sb-row-3 sb-row team-two-row">
                    
                    <div class="member1 team-member team-two">

                        <div class="member-text mt-1">
                            <h5>Musab A.</h5>
                            <p>FOUNDER & CEO</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>

                    <div class="member2 team-member team-two">

                        <div class="member-text mt-2">
                            <h5>Faheem A.</h5>
                            <p>CO-FOUNDER, CTO & LEAD DEVELOPER</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>
                    
                </div>

            </div>
            
            <div class="clear"></div>
            
            <div class="profile-heading">Sales Leaders</div>

            <div class="smm-2">
                
                <div class="sb-row-3 sb-row team-two-row">
                    
                    <div class="member9 team-member team-two">

                        <div class="member-text mt-9">
                            <h5>David G.</h5>
                            <p>SALES LEADER</p>
                        </div>

                    </div>
                    
                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>
                    
                    <div class="member10 team-member team-two">

                        <div class="member-text mt-10">
                            <h5>Karim M.</h5>
                            <p>SALES LEADER</p>
                        </div>

                    </div>

                </div>

            </div>
            
            <div class="clear"></div>
            
            <div class="profile-heading">Client Support Specialists</div>

            <div class="smm-2">
                
                <div class="sb-row-3 sb-row team-three-row">
                    
                    <div class="member19 team-member team-three">

                        <div class="member-text mt-19">
                            <h5>Mike S.</h5>
                            <p>CLIENT SUPPORT</p>
                        </div>

                    </div>
                    
                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>
                    
                    <div class="member21 team-member team-three">

                        <div class="member-text mt-21">
                            <h5>Marc H.</h5>
                            <p>CLIENT SUPPORT</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                    <div class="clear-1"></div>

                    <div class="member27 team-member team-three">

                        <div class="member-text mt-27">
                            <h5>Nick F.</h5>
                            <p>CLIENT SUPPORT</p>
                        </div>

                    </div>

                </div>

            </div>
            
            <div class="clear"></div>
            
            <div class="profile-heading">Social Media Managers</div>

            <div class="smm-2">
                
                <div class="sb-row-3 sb-row">
                    
                   <div class="member6 team-member">

                        <div class="member-text mt-6">
                            <h5>Chad B.</h5>
                            <p>SOCIAL MEDIA CORDINATOR</p>
                        </div>

                    </div>

                    
                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>
                    
                    <div class="member17 team-member">

                        <div class="member-text mt-17">
                            <h5>Karen G.</h5>
                            <p>SOCIAL MEDIA CORDINATOR</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                    <div class="clear-1"></div>

                    <div class="member20 team-member">

                        <div class="member-text mt-20">
                            <h5>Haya M.</h5>
                            <p>SOCIAL MEDIA CORDINATOR</p>
                        </div>

                    </div>
                    

                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>

                    <div class="member3 team-member">

                        <div class="member-text mt-3">
                            <h5>Robyn W.</h5>
                            <p>SOCIAL MEDIA CORDINATOR</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                </div>

               <div class="clear"></div>

                <div class="sb-row-3 sb-row">
                    
                    <div class="member24 team-member">

                        <div class="member-text mt-24">
                            <h5>Misty J.</h5>
                            <p>SOCIAL MEDIA CORDINATOR</p>
                        </div>

                    </div>
                    
                    <div class="mobile-clear"></div>

                    <div class="clear-1"></div>

                </div>

            </div>
            
            <div class="clear"></div>
            
            <div class="profile-heading">Google Ads Experts</div>

            <div class="smm-2">
                
                <div class="sb-row-3 sb-row">
                    
                   <div class="member4 team-member">

                        <div class="member-text mt-4">
                            <h5>Ossama E.</h5>
                            <p>GOOGLE ADWORDS CERTIFIED SPECIALIST</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>
                    
                    <div class="member13 team-member">

                        <div class="member-text mt-13">
                            <h5>Brittney G.</h5>
                            <p>GOOGLE ADS EXPERT</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                    <div class="clear-1"></div>

                    <div class="member14 team-member">

                        <div class="member-text mt-14">
                            <h5>Sundas A.</h5>
                            <p>GOOGLE ADS EXPERT</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>

                    <div class="member15 team-member">

                        <div class="member-text mt-15">
                            <h5>Tatiana Z.</h5>
                            <p>GOOGLE ADS EXPERT</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                </div>

               <div class="clear"></div>

                <div class="sb-row-3 sb-row">
                    
                    <div class="member16 team-member">

                        <div class="member-text mt-16">
                            <h5>Tania R.</h5>
                            <p>GOOGLE ADS EXPERT</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>
                    
                    <div class="member12 team-member">

                        <div class="member-text mt-12">
                            <h5>Aurel L.</h5>
                            <p>GOOGLE ADS EXPERT</p>
                        </div>

                    </div>
                    
                    <div class="mobile-clear"></div>

                    <div class="clear-1"></div>
                    
                    <div class="member22 team-member">

                        <div class="member-text mt-22">
                            <h5>Mark R.</h5>
                            <p>GOOGLE ADS EXPERT</p>
                        </div>

                    </div>
                
                    <div class="mobile-clear"></div>
                    
                    <div class="member28 team-member">

                        <div class="member-text mt-28">
                            <h5>Gary G.</h5>
                            <p>GOOGLE ADS EXPERT</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                </div>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="profile-heading">Web Developers</div>

            <div class="smm-2">
                
                <div class="sb-row-3 sb-row">
                    
                   <div class="member8 team-member">

                        <div class="member-text mt-8">
                            <h5>Robin D.</h5>
                            <p>WEB DEVELOPER</p>
                        </div>

                    </div>

                    
                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>
                    
                    <div class="member23 team-member">

                        <div class="member-text mt-23">
                            <h5>Kashif K.</h5>
                            <p>WEB DEVELOPER</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>

                    <div class="member25 team-member">

                        <div class="member-text mt-25">
                            <h5>Karthik C.</h5>
                            <p>WEB DEVELOPER</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>

                    <div class="member26 team-member">

                        <div class="member-text mt-26">
                            <h5>Joseph Z.</h5>
                            <p>WEB DEVELOPER</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                </div>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="profile-heading">SEO Experts</div>

            <div class="smm-2">
                
                <div class="sb-row-3 sb-row team-one-row">
                    
                   <div class="member11 team-member team-one">

                        <div class="member-text mt-11">
                            <h5>Alex K.</h5>
                            <p>SEO EXPERT</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                </div>

            </div>
            
            <div class="clear"></div>
            
            <div class="profile-heading">Content Creators</div>

            <div class="smm-2">
                
                <div class="sb-row-3 sb-row team-two-row">
                    
                   <div class="member7 team-member team-two">

                        <div class="member-text mt-7">
                            <h5>Jessica G.</h5>
                            <p>CONTENT CREATOR</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>

                    <div class="clear-2"></div>
                    
                    <div class="member5 team-member team-two">

                        <div class="member-text mt-5">
                            <h5>Ayesha G.</h5>
                            <p>CONTENT CREATOR</p>
                        </div>

                    </div>

                    <div class="mobile-clear"></div>
                    
            </div>
        
        </div>
            
        </div>
        
        
        
        <?php include("includes/cta.php") ?>
        <?php include("includes/footer.php") ?>
        
        <script type="text/javascript">

        
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