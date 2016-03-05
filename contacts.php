<?
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen"> 
    <title>Simple Drop Down Menu</title>
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function () {	
	
	$('#nav li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(100);

		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(100);			
		}
	);
	
});
	</script>
  
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_500.font.js" type="text/javascript"></script>
    <script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>    
    <script src="js/jcarousellite_1.0.1.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(document).ready(function() { 
			$('.carousel .jCarouselLite').jCarouselLite({ 
				btnNext: '.carousel .next',
				btnPrev: '.carousel .prev',
				speed: 600,
				easing: 'easeOutQuart',
				vertical: false,
				circular: false,
				visible: 4,
				start: 0,
				scroll: 1
			}); 
		}); 
		$(document).ready(function () {
    $('.photo_category').showFeatureText();
    $(".thumbs a").click(function () {
        var imgpath = $(this).attr("href");
        var imgalt = $(this).attr("alt");
        $("#placeholder").attr({
            src: imgpath,
            alt: imgalt
        });
        return false;
    });
});
$.fn.showFeatureText = function () {
    return this.each(function () {
        var box = $(this);
        var text = $('span', this);
        text.css({
            display: 'block',
            position: 'absolute',
            top: '0',
            left: '0'
        }).hide();
        box.hover(function () {
            text.slideDown("fast");
        }, function () {
            text.slideUp("fast");
        });
    });
}
</script>
	</script>
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head>
<body id="page5">
	<!--==============================header=================================-->
    <header>
    <div class="menu-row">
        	<div class="main">
<ul id="nav">
	<li><a href="index.html">Home</a></li>
	<li><a href="#">Tribute &amp; Live Shows</a>
		<ul>
			<li><a href="Abba-glamma.html">Abba Glamma</a></li>
            <li><a href="decades.html">Decades</a></li>
            <li><a href="Dirty-Dancing.html">Dirty Dancing</a></li>
            <li><a href="fiftyshades.html">Fifty Shades Ladies Night</a></li>
            <li><a href="GaryBarlow.html">Gary Barlow</a></li>
            <li><a href="Grease.html">Grease</a></li>
			<li><a href="KevinSimm.html">Kevin Simm</a></li>
            <li><a href="KylieMinogue.html">Kylie Minogue</a></li>
            <li><a href="NathanMoore.html">Nathan Moore</a></li>
            <li><a href="robbie.html">Robbie Williams</a></li>
            <li><a href="soul&motown.html">Soul & Motown</a></li>
            <li><a href="TotOllyMurs.html">Totally Olly Murs</a></li>
			<li><a href="totallytakethat.html">Totally Take That</a></li>
		</ul>
		<div class="clear"></div>
	</li>
	<li><a href="#">Theme Nights & DJs</a>
	<ul>
    	<li><a href="CasinoNight.html">Casino Nights</a></li>
		<li><a href="ComedyNight.html">Comedy Nights</a></li>
        <li><a href="DecadesDJ.html">Decades Themed DJ</a></li>
		<li><a href="DJs.html">DJs</a></li>
		<li><a href="Pantomimes.html">Pantomimes</a></li>
	</ul>			
		<div class="clear"></div>
	</li>
	<li><a href="#">Function Bands</a>
	<ul>
    	<li><a href="GroovyRevolution.html">Groovy Revolution</a></li>
	</ul>			
		<div class="clear"></div>
	</li>
	<li><a href="news.html">News & Events</a></li>
    <li><a href="about.html">About Us</a></li>
	<li><a href="contacts.html">Contact Us</a></li>
</ul>
<div class="clear"></div>
       	</div>
        </div>
    	<div class="row-bot">
<div class="row-bot-bg">
                <div class="main">
                    <div class="wrapper">
                        <h1><a href="index.html"></a></h1>
                        <h2>CONTACT US</h2>
                    </div>
                </div>
            </div>
        </div>
  <section id="content"><div class="ic"></div>
    <div class="ic"></div>
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
          <article class="grid_4">
            <h3>Our Contacts</h3>
            <div class="img-indent-bot">
              <figure class="img-border2">
                <iframe width="305" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=BL9+9TZ,+United+Kingdom&amp;aq=0&amp;oq=BL9+9TZ&amp;sll=37.0625,-95.677068&amp;sspn=44.47475,88.769531&amp;ie=UTF8&amp;hq=&amp;hnear=BL9+9TZ,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=53.571195,-2.293771&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=BL9+9TZ,+United+Kingdom&amp;aq=0&amp;oq=BL9+9TZ&amp;sll=37.0625,-95.677068&amp;sspn=44.47475,88.769531&amp;ie=UTF8&amp;hq=&amp;hnear=BL9+9TZ,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=53.571195,-2.293771" style="color:#0000FF;text-align:left">View Larger Map</a></small>
              </figure>
              <div class="clear"></div>
            </div>
            <dl>
              <dt class="p1">Address: Unit 2 Hampson Mill Lane Bury BL9 9TZ<br>
                <br>
                Tel No: 
              0161 767 8999</dt>
              <dd>Email</a>: <a href="mailto:enquiries@dannylowry.co.uk">enquiries@dannylowry.co.uk </a></dd>
            </dl>
          </article>
          <article class="grid_8">
		  
		  <?$Sent = $_SESSION['FormSent'];
		  if($Sent == "Y"){?>
		  <h3>Thank You...</h3>
		  <p>
		  ..For your enquiry. We will get back to you as soon as possible<br />
		  <br />
		  click <a href="contacts.php">here</a> to send another enquiry
		  </p>
		  <?
		  }else{?>
            <h3>Booking Enquiries</h3>
            <form id="contact-form" method="post" action="enquiry_handler.php" enctype="multipart/form-data">
			<input type="hidden" name="BookingForm" value="Y">
              <fieldset>
                <label><span class="text-form">Your Name:</span>
                  <input type="text" name="YourName">
                </label>
                <label><span class="text-form">Company:</span>
                  <input type="text" name="Company">
                </label>
                <label><span class="text-form">Telephone:</span>
                  <input type="text" name="TelNo">
                </label>
                <label><span class="text-form">Fax:</span>
                  <input type="text" name="FaxNo">
                </label>
                <label><span class="text-form">Mobile No.:</span>
                  <input type="text" name="MobNo">
                </label>
                <label><span class="text-form">Email:</span>
                  <input type="text" name="EmailAddress">
                </label>
                <label><span class="text-form">Website:</span>
                  <input type="text" name="Website">
                </label>
                                <label><span class="text-form">Address1:</span>
                                  <input type="text" name="Address1">
                </label>                <label><span class="text-form">Address2:</span>
                  <input type="text" name="Address2">
                </label>                <label><span class="text-form">Postcode:</span>
                  <input type="text" name="PostCode">
                </label>
                  <h3>Venue or Event:</h3></span>
                 Let us know where exactly you require the artiste(s) and also what the venue is
                </label>                
                <label><span class="text-form">Venue:</span>
                  <input type="text" name="Venue">
                </label>                <label><span class="text-form">Event:</span>
                  <input type="text" name="Event">
                </label>                <label><span class="text-form">Address 1:</span>
                  <input type="text" name="VenueAddress1">
                </label>                <label><span class="text-form">Address 2:</span>
                  <input type="text" name="VenueAddress2">
                </label>                <label><span class="text-form">Post Code:</span>
                  <input type="text" name="VenuePostCode">
                </label>
                <div class="wrapper">
                  <div class="text-form">Your Message:</div>
                  <div class="extra-wrap">
                    <textarea name="Message"></textarea>
                    <div class="clear"></div>
                    <div class="buttons"> <a class="button" onClick="document.getElementById('contact-form').reset()"><span>clear</span></a> <a class="button" onClick="document.getElementById('contact-form').submit()"><span>send</span></a> </div>
                  </div>
                </div>              </fieldset>
            </form>
			<?}?>
          </article>
        </div>


      </div>
    </div>
    <div id="spacer"></div>
<div id="Band">
    <div id="social">
      <div id="facebook"><img src="images/social.png" width="86" height="27" border="0" usemap="#Map">
        <map name="Map">
          <area shape="rect" coords="0,1,26,25" href=https://www.facebook.com/danny.ents>
          <area shape="rect" coords="30,-1,56,25" href="#">
          <area shape="rect" coords="58,-2,84,26" href="https://twitter.com/dannylowry1">
        </map>
      </div>  
      </div>
  </div>
    </section>
</html>
<?unset($_SESSION['FormSent']);?>