<header id="main-header">
    
    <div class="nav-logo">
    
        <a href="https://6ixdevelopers.com/"><img id="logo" src="media/logo/new-logo.png" width="125px"></a> <img style="position:relative; top:-4px; left:10px" id="ca-logo" src="media/canadian.png" width="40px">
    
    </div>

    <div class="nav-li">
        <a class="cta" href="contact-us"><i style="color:white; font-size:18px; position:relative; top:2px;" class="fa fa-envelope"></i> &nbsp;Contact us</a>
        <a href="tel:18888087265"><i style="font-size:12px" class="fas fa-phone-alt"></i> 1 888-808-7265</a>
        <a href="about-us">About Us</a>
        <div class="dropdown">
            <a class="dropbtn" href="#">Services <i class="fa fa-caret-down"></i></a> 
            <div class="dropdown-content">
                <a href="website-design-agency-toronto">Website Design</a><br>
                <a href="ppc-google-ads-management-toronto">Google Ads/PPC</a><br>
                <a href="social-media-marketing-agency-toronto">Social Media</a><br>
                <a href="seo-agency-toronto">SEO Services</a><br>
            </div>
        </div>
        <a href="https://6ixdevelopers.com/">Home</a>
    </div>
    
   <nav class="topnav">
       <a href="tel:18888087265"><i style="color:#ff6699; font-size: 23px; position:relative; top:-2px;" class="fas fa-phone-alt"></i></a> &nbsp; &nbsp; &nbsp; 
       <a href="#" onclick="openNav()">
           <svg width="30" height="26" id="icoOpen">
               <path d="M0,5 30,5" stroke="white" stroke-width="4"/>
               <path d="M0,14 30,14" stroke="white" stroke-width="4"/>
               <path d="M0,23 30,23" stroke="white" stroke-width="4"/>
           </svg>
    </a>
    </nav>

    <div class="clear"></div>
    
</header>

<div id="sideNavigation" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a style="margin-top:20px" href="https://6ixdevelopers.com/">Home</a>
    <a href="#">Services  &nbsp;<i class="fa fa-caret-down"></i></a>
        <a  style="padding-left:50px"href="website-design-agency-toronto">Website Design</a>
        <a style="padding-left:50px" href="ppc-google-ads-management-toronto">Google Ads/PPC</a>
        <a style="padding-left:50px" href="social-media-marketing-agency-toronto">Social Media</a>
        <a style="padding-left:50px" href="seo-agency-toronto">SEO Services</a>
    <a href="about-us">About Us</a>
    <a href="contact-us">Contact Us</a>
    <a class="cta" href="tel:18888087265"><i style="color:white; font-size:12px" class="fas fa-phone-alt"></i> &nbsp;1 888-808-7265</a>
</div>

<div class="clear"></div>

<style>
    
    * {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        margin-block-start: 0em;
        margin-block-end: 0em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }
    
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }  
    
    .clear{
        clear:both;
    }
    
    h1, h2, h3, h4, h5, h6, h7{
        font-family: "Montserrat";
        line-height: 1.4em;
        font-weight: bold;
        color:#003461;
    }
    
    h1{
        font-size:32px;
    }
    
    h2{
        font-size:32px;
    }
    
    p, span, div, a {
        font-family: "Muli";
        line-height: 1.7em;
        color: #262626;
    }
    
    a {
        color: #8980BA;
        text-decoration: none;
    }
    
    a:hover {
        color: #776fa5;
        text-decoration: none;
    }
    
    .btn {
        padding:16px 36px;
        border-radius: 5px;
        font-family: "Montserrat" !important;
        text-transform: uppercase;
        font-size:14px;
        font-weight:bold;
        letter-spacing: 2px;
        color:white !important;
        background-image: -webkit-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
        background-image: -moz-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
        background-image: -ms-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
        background-image: -o-linear-gradient(to left, #66ccff 0%, #ff6699 30%);
        background-image: linear-gradient(to left, #66ccff 0%, #ff6699 30%);
        transition-property:all .3s ease-in-out 0s;
        -moz-transition:all .3s ease-in-out 0s;
        -webkit-transition:all .3s ease-in-out 0s;
        -o-transition:all .3s ease-in-out 0s;
        white-space:nowrap;
        cursor: pointer;
    }
    
    .btn-simple {
        padding:16px 36px;
        border-radius: 5px;
        font-family: "Montserrat" !important;
        text-transform: uppercase;
        font-size:14px;
        font-weight:bold;
        letter-spacing: 2px;
        color:white !important;
        background-color:#ff6699;
        white-space:nowrap;
    }
    
    .btn:hover {
        text-decoration: none;
        transition-property:all .3s ease-in-out 0s;
        -moz-transition:all .3s ease-in-out 0s;
        -webkit-transition:all .3s ease-in-out 0s;
        -o-transition:all .3s ease-in-out 0s;
    }

    header {
        width:100%;
        position:fixed;
        top:0px;
        height:auto;
        background:rgb(0, 0, 0, 0.3);
        font-family: 'Montserrat';
        z-index: 999;
    }
    
    .fa-times{
        position: absolute;
        top:10px;
        font-size:20px;
        color:white;
        right:10px;
        cursor:pointer;
    }

    .nav-logo{
        float:left;
        height:100%;
        padding-left:60px;
        margin-top:10px;
    }
    
    .dropdown {
        float: right;
    }

    .dropdown .dropbtn {
      color:white !important;
      text-decoration:none;
      font-size:14px;  
      border: none;
      outline: none;
      padding:2.1em 1em;
      margin: 0;
    letter-spacing: 1px;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      right:292px;
      top:80px;  
      padding:15px 5px;
      background-color: #031523;
      min-width: 200px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: left !important;
      color:white !important;
      text-decoration:none;
      font-size:14px;
      padding-top: 8px !important;
      padding-bottom: 8px !important;
      padding-left:36px !important;
      padding-right:36px !important;
      width:100%;
      text-decoration: none;
      display: block;
      text-align: left !important;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    header .nav-li a {
        float:right;
        text-align: center;
        color:white;
        padding:2.1em 1em;
        text-decoration:none;
        transition-property:all .2s linear 0s;
        -moz-transition:all .2s linear 0s;
        -webkit-transition:all .2s linear 0s;
        -o-transition:all .2s linear 0s;
        font-size:14px;
        font-weight:600;
        letter-spacing: 1px;
    }
    
    header .nav-li a.cta {

        background-color: #ff6699;
        
    }    
    
    header .nav-li a.cta:hover {

        background-color: #ff6699 !important;
        
    }

    header .nav-li a:hover {
        color: white;
        text-decoration: none;
        background:rgb(0, 0, 0, 0.5);
    }

    .active {
        color: #C4D559;
    }
    
    .fixed-main-header{
        background-color: #031523;
        transition-property:all .40s linear 0s;
        -moz-transition:all .40s linear 0s;
        -webkit-transition:all .40s linear 0s;
        -o-transition:all .40s linear 0s;
    }
    
    .topnav{
        display:none;
        float:right;
        padding:24px 60px 20px 0px;
    }
    
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1000;
        top: 0;
        right: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 60px;
        transition: 0.5s;
    }

    /* The navigation menu links */
    .sidenav a:not(:first-child) {
        padding: 10px 8px 10px 32px;
        text-decoration: none;
        font-size: 14px;
        color: white;
        text-transform: uppercase;
        display: block;
        transition: 0.3s;
        font-family: 'Montserrat';
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover, .offcanvas a:focus{
        color: #f1f1f1;
    }

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size:40px !important;
        text-decoration: none;
        color:white;
        padding-top:0px;
    }
    
    @media(max-width:980px){
        .topnav{
            display:block;
            padding:24px 20px 20px 0px;
        }
        .nav-li{
            display: none;
        }
        .nav-logo{
            padding-left:20px;
        }
    }
    
    @media(max-width:620px){
        .btn-header{
            padding:16px 20px !important;
            font-size:12px;
        }
        
        .fa-times{
            position: absolute;
            top:10px;
            font-size:20px;
            color:white;
            right:10px;
            cursor:pointer;
        }

        .covid-alert{
            background-color:#3076E5;
            width:100%;
            padding:15px 15px;
            text-align: center;
        }

        .cs-container{
            width:100%;
        }

        .cs-text{
            float:none;
            text-align: center;
            margin-left:0px;
        }


        .covid-alert .fa-exclamation-triangle {
            font-size:30px;
            float:none;
        }
        
    }



</style>

<script type="text/javascript">
    
    
    function openNav() {
        document.getElementById("sideNavigation").style.width = "70%";
    }
 
    function closeNav() {
        document.getElementById("sideNavigation").style.width = "0";
    }
    

    $(document).ready(function() {
        $("[href]").each(function() {
            if (this.href == window.location.href) {
                $(this).addClass("active");
            }
        });
    });
    
    
    $(document).ready(function() {
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 50) {
                $("#main-header").addClass("fixed-main-header");
                $("#logo").attr("src", "media/logo/new-logo-white.png")
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $("#main-header").removeClass("fixed-main-header");
                $("#logo").attr("src", "media/logo/new-logo.png")
            }
        });
    });
    
    $(document).ready(function() {

        $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    });


</script>