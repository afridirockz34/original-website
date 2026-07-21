

<!DOCTYPE html>
<html>
    <head>
        
        <title>Page Not Found | 6ix Developers | Toronto Digital Marketing Agency</title>
    
        <meta name="description" content="6ix Developers is a digital marketing agency in Toronto, ON and specializes in PPC Management, SEO and Website Design.">
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="initial-scale=1, width=device-width" name=viewport>
        <?php include("includes/script-before-headend.php");  ?>
        
        <style type="text/css">
            
            .content svg {
                font: 10.5em 'Monoton';
                width: 100%;
                height: 70vh;
            }
            
            .content{
              text-align: center;
              padding-top:140px;
              overflow: auto;
            }
            
            .content h1{
              text-align: center;
              font-weight: bold;
              color: black;
              font-size:2vw;
            }
            
            .btn{
                position:relative;
                top:20px;
            }
            
            .sub-con{
                position:relative;
                top:-120px;
            }
            
            .text {
                fill: none;
                stroke-dasharray: 8% 29%;
                stroke-width: 5px;
                stroke-dashoffset: 1%;
                animation: stroke-offset 5.5s infinite linear;
            }
            
            .text:nth-child(1){
            	stroke: #1c234d;
            	animation-delay: -1;
            }
            
            .text:nth-child(2){
            	stroke: #A2C84E;
            	animation-delay: -2s;
            }
            
            .text:nth-child(3){
            	stroke: #83C5ED;
            	animation-delay: -3s;
            }
            
            .text:nth-child(4){
            	stroke: #8782BA;
            	animation-delay: -4s;
            }
            
            .text:nth-child(5){
            	stroke: #F06699;
            	animation-delay: -5s;
            }
            
            @keyframes stroke-offset{
            	100% {
                stroke-dashoffset: -35%;
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
        
    <div class="content">
        <svg viewBox="0 0 960 300">
        	<symbol id="s-text">
        		<text text-anchor="middle" x="50%" y="50%">404</text>
        	</symbol>
        
        	<g class = "g-ants">
        		<use xlink:href="#s-text" class="text"></use>
        		<use xlink:href="#s-text" class="text"></use>
        		<use xlink:href="#s-text" class="text"></use>
        		<use xlink:href="#s-text" class="text"></use>
        		<use xlink:href="#s-text" class="text"></use>
        	</g>
        </svg>
     
     <div class="sub-con">
        <h1>Page Not Found</h1>
        <a class="btn btn-box" href="https://6ixdevelopers.com/">Back to Home</a>
        </div>
    </div>
        
        
    <?php include("includes/cta.php") ?>
    <?php include("includes/footer.php") ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
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