<!DOCTYPE html>
<html>
    <head>
        
        <title>Terms & Conditions | 6ix Developers</title>
    
        <meta name="description" content="Terms & conditions of 6ixDevelopers Website Design and marketing company toronto.">
        
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
                padding:70px 120px;
                visibility: hidden;
                text-align: center;
            }
            
            
            .body-section-1 p{
                margin-top:10px;
            }
            
            .body-section-1 h2{
                margin-bottom:15px;
            }
            
            .body-section-1 h4{
                margin-bottom:5px;
                margin-top:25px;
                font-size:18px !important;
            }
            
            .bs-text-section{
                margin-top:30px;
                text-align: left;
            }
            
            /* Body section 2 CSS start */
            
            @media (max-width:980px){
                
                .clear-mbb{
                    clear:both;
                }
                
                /* Header section CSS start */
                
                .header-image{
                    padding:180px 30px;
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
            }
            
        </style>

    </head>
    
    <body>
    
        <?php include("includes/header-main.php");  ?>

        <div class="clear"></div>
       
        <div class="header-section">
            
            <div class="header-image">
        
                <h1>Website Terms & Conditions</h1>
                
            </div>
        
        </div>
        
        
        <div class="body-section-1">
            
            <div class="bs-text-section">
     
                <h2>Content and Revisions</h2>
                <p>While 6ix Developers and its affiliates (collectively, “LP”) uses reasonable efforts to ensure all information on this site is accurate and current, your use of this site is at your own risk.</p>

                <p>This site is not the authoritative source of information about LP.</p>

                <p>All content, including these terms and conditions, is subject to change without notice. We suggest you review these terms and conditions each time you access this Web site.</p>

            </div>
            
            
            <div class="bs-text-section">
            
                <h2>Trademarks</h2>
                <p>The trademarks, logos, service marks and other names and icons identifying products and services on this site are registered and unregistered trademarks of LP and others.</p>
                <p>For additional policies restricting the use of this website, please see our terms of service.</p>
                <p><strong>Last Updated: May 4th, 2020</strong></p>
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