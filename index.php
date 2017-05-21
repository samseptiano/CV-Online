<?php
include './connection/dbconnect.php';

	$myemail = 'samuelseptiano@outlook.com';

if(isset($_POST['sendMessage'])){
	$date = date("Y/m/d")." ".date("h:i:sa");
	$nama = strip_tags(htmlspecialchars($_POST['senderName']));
	$email = strip_tags(htmlspecialchars($_POST['senderEmail']));
	$message = strip_tags(htmlspecialchars($_POST['message']));
	$country = strip_tags(htmlspecialchars($_POST['country']));
	$state = strip_tags(htmlspecialchars($_POST['state']));
	$message1 = 'name : '.$nama."\n\n" ;
    $message1 .= 'email : '.$email."\n\n" ;
    $message1 .= 'origin : '.$state.', '.$country."\n\n" ;
	$message1 .= $message;
	$headers = 'From: <'.$email.'>' . "\r\n";
	$sql = mysql_query("insert into subscriber (name,email,country,state,message,date) values ('$nama','$email','$country','$state','$message', '$date')");
	mail($myemail, 'Get in Touch Email', $message1, $headers);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SAMUEL SEPTIANO</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- FAVICON -->
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- CSS FILES -->
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/nerveslider.css" rel="stylesheet" type="text/css">
    <link href="css/tooltipster.css" rel="stylesheet" type="text/css">
    <link href="css/scrollbar.css" rel="stylesheet" type="text/css">
    <link href="css/lightgallery.css" rel="stylesheet" type="text/css">
    <link href="css/colors.css" rel="stylesheet" type="text/css">
    <link href="css/media.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
       <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
    <!-- GOOGLE MAP -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyATkmWX15QHBTzaETQk0zdHquKo8EIodVs"></script>
    <!-- NOSCRIPT -->
    <noscript>
        <link href="css/nojs.css" rel="stylesheet" type="text/css">
    </noscript>
	<!-- Countries -->
    <script type= "text/javascript" src = "js/countries.js"></script>
    <style>
			 a.tooltips {
			  position: relative;
			  display: inline;
			}
			a.tooltips span {
			  position: absolute;
			  width:140px;
			  color: #FFFFFF;
			  background: #000000;
			  height: 48px;
			  line-height: 48px;
			  text-align: center;
			  visibility: hidden;
			  border-radius: 6px;
			}
			a.tooltips span:after {
			  content: '';
			  position: absolute;
			  top: 50%;
			  right: 100%;
			  margin-top: -8px;
			  width: 0; height: 0;
			  border-right: 8px solid #000000;
			  border-top: 8px solid transparent;
			  border-bottom: 8px solid transparent;
			}
			a:hover.tooltips span {
			  visibility: visible;
			  opacity: 0.8;
			  left: 100%;
			  top: 50%;
			  margin-top: -24px;
			  margin-left: 15px;
			  z-index: 999;
			}

			/*dropdown css*/
			.demo {
			border: 0 !important;  /*Removes border*/
			-webkit-appearance: none;  /*Removes default chrome and safari style*/
			-moz-appearance: none; /* Removes Default Firefox style*/
	        appearance:none;
			background: #fff url(images/select-arrow.png) no-repeat 90% center;
			width: 310px; /*Width of select dropdown to give space for arrow image*/
			text-indent: 0.01px; /* Removes default arrow from firefox*/
			text-overflow: "";  /*Removes default arrow from firefox*/ /*My custom style for fonts*/
			color: black;
			border-radius: 15px;
			padding: 5px;
			box-shadow: inset 0 0 5px rgba(000,000,000, 0.5);
			}
			.demo, .option3 {
				border-radius: 10px 0;
			}

			/*project button css*/
			.tombol {
			  -webkit-border-radius: 4;
			  -moz-border-radius: 4;
			  border-radius: 4px;
			  font-family: Arial;
			  color: #ffffff;
			  font-size: 20px;
			  background: #222;
			  padding: 14px 22px 14px 22px;
			  text-decoration: none;
			}

			.tombol:hover {
			  background: #00d603;
			  text-decoration: none;
			}
			@media(max-width: 433px){
				.demo{
					width: 210px;
				}

			}
    </style>
</head>

<body><script type="text/javascript">ANCHORFREE_VERSION="623161526"</script><script type='text/javascript'>(function(){if(typeof(_AF2$runned)!='undefined'&&_AF2$runned==true){return}_AF2$runned=true;_AF2$ = {'SN':'HSSHIELD00ID','IP':'107.21.140.157','CH':'HSSCNL100395','CT':'z281','HST':'','AFH':'hss291','RN':Math.floor(Math.random()*999),'TOP':(parent.location!=document.location||top.location!=document.location)?0:1,'AFVER':'6.0.4','fbw':false,'FBWCNT':0,'FBWCNTNAME':'FBWCNT_CHROME','NOFBWNAME':'NO_FBW_CHROME','B':'c','VER': 'nonus'};if(_AF2$.TOP==1){document.write("<scr"+"ipt src='http://box.anchorfree.net/insert/insert.php?sn="+_AF2$.SN+"&ch="+_AF2$.CH+"&v="+ANCHORFREE_VERSION+6+"&b="+_AF2$.B+"&ver="+_AF2$.VER+"&afver="+_AF2$.AFVER+"' type='text/javascript'></scr"+"ipt>");}})();</script>
    <!-- LOADING ANIMATION -->
    <div id="site-loading"></div>
    <!-- MAIN MENU -->
    <div id="cv-menu">
        <nav id="cv-main-menu">
            <ul>
                <!-- SIDEBAR MENU ICON -->
                <li><a href="#" class="cv-menu-button fa fa-bars">Menu</a>
                </li>
                <!-- PAGE 1 LINK -->
                <li class="links-to-floor-li cv-active" data-id="1" data-slug="home">
                <a href="#home" class="fa fa-home tooltips" title="HOME">home
                <!--<span>Home</span>-->
                </a>
                </li>
                <!-- PAGE 2 LINK -->
                <li class="links-to-floor-li" data-id="2" data-slug="about">
                <a href="#about" class="fa fa-user tooltips" title="ABOUT ME">About
                <!--<span>About</span>-->
                </a>
                </li>
                <!-- PAGE 3 LINK -->
                <li class="links-to-floor-li" data-id="3" data-slug="resume">
                <a href="#resume" class="fa fa-graduation-cap tooltips" title="RESUME">Resume
                <!--<span>Resume</span>-->
                </a>
                </li>
                <!-- PAGE 4 LINK -->
                <li class="links-to-floor-li" data-id="4" data-slug="portfolio">
                <a href="#portfolio" class="fa fa-briefcase tooltips" title="PORTFOLIO">Portfolio
                	<!--<span>Portfolio</span>-->
                </a>
                </li>
                <!-- PAGE 5 LINK -->
                <li class="links-to-floor-li" data-id="5" data-slug="contact">
                <a href="#contact" class="fa fa-send tooltips" title="CONTACT">Contact
                <!--<span>Contact</span>-->
                </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- LEFT SLIDER -->
    <div class="cv-left-slider">
        <div id="cv-left-slider">
            <!-- 1. SLIDE -->
            <div>
                <img src="images/photos/img.webp" alt="">
                <div id="home-slide-title">
                    <span>SAMUEL</span>
                </div>
            </div>
            <!-- 2. SLIDE -->
            <img src="images/photos/img3.webp" alt="">
            <!-- 3. SLIDE -->
            <img src="images/photos/img4.webp" alt="">
            <!-- 4. SLIDE -->
            <img src="images/photos/img5.webp" alt="">
            <!-- 5. SLIDE -->
            <div>
              <!-- GOOGLE MAP -->
                <div class="google-map-container">
                    <div id="google-map"></div>
                </div>  
            </div>
        </div>
    </div>
    <!-- PAGES -->
    <div id="ascensorBuilding">
        <!-- PAGE 1 -->
        <section class="floor floor-1">
            <div id="home-image">
                <div id="home-title">
                    <h1><span class="mobile-title">SAMUEL</span><span>SEPTIANO</span></h1>
                    <p>Freelancer</p><br><br>
                    <ul style="list-style-type:none">
	                    <li class="links-to-floor-li" data-id="4" data-slug="portfolio">
	                    	<button class="cv-button tombol">Recent Portfolio</button>
	                    </li>
                    </ul>
                </div>
                <!-- SOCIAL ICONS -->
                <div id="cv-home-social-bar-container">
                    <nav id="cv-home-social-bar">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/samuelseptiano" class="fa fa-facebook-f  tooltips" title="FACEBOOK">Facebook</a>
                            </li>
                            <li>
                                <a href="https://twitter.com/samseptiano/" class="fa fa-twitter tooltips" title="TWITTER">Twitter</a>
                            </li>
                            <!--<li>
                                <a href="#" class="fa fa-google-plus tooltip-social tooltips" title="GOOGLE PLUS">Google Plus</a>
                            </li>-->
                            <li>
                                <a href="http://www.linkedin.com/in/samseptiano/" class="fa fa-linkedin tooltips" title="LINKEDIN">Linkedin</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/samseptiano/" class="fa fa-instagram tooltips" title="INSTAGRAM">Instagram</a>
                            </li>
                            <li>
                                <a href="https://www.github.com/samseptiano/" class="fa fa-github tooltips" title="GITHUB">Github
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- PAGE 2 -->
        <section class="floor floor-2">
            <!-- THIS IMAGE WILL BE DISPLAYED ONLY ON MOBILE MODE ( 1024PX AND BELOW ) -->
            <div class="img-mobile-only">
                <img src="images/photos/img3-small.webp" alt="" />
            </div>
            <!-- PAGE CONTENT -->
            <div class="cv-page-content">
                <h2 class="border">ABOUT ME</h2>
                <p>These are just a little bit you can know about me...</p>
                <!-- TABLE -->
                <ul class="cv-table">
                    <li>
                        <div class="cv-table-left"><i class="cv-icon fa fa-user"></i>Date of birth</div>
                        <div class="cv-table-right">September 23rd 1996</div>
                    </li>
                    <li>
                        <div class="cv-table-left"><i class="cv-icon fa fa-mars"></i>Gender</div>
                        <div class="cv-table-right">Male</div>
                    </li>
                    <li>
                        <div class="cv-table-left"><i class="cv-icon fa fa-language"></i>Languages</div>
                        <div class="cv-table-right">English, Indonesia </div>
                    </li>
                    <li>
                        <div class="cv-table-left"><i class="cv-icon fa fa-futbol-o"></i>Hobbies</div>
                        <div class="cv-table-right">Sketching, Gymnastic, Martial Arts</div>
                    </li>
                    <li>
                        <div class="cv-table-left"><i class="cv-icon fa fa-external-link-square"></i>Website</div>
                        <div class="cv-table-right"><a href="https://www.samseptiano.wordpress.com">www.samseptiano.wordpress.com</a>
                        </div>
                    </li>
                </ul>
                <p>Want to know more detail or save my bio?? sure you can download it below.</p>
                <!--<a href="#contact" class="cv-button primary go-to-floor" data-id="5" data-slug="contact">Hire Me</a>-->
                <a href="https://drive.google.com/open?id=0BxJ1DqZZz76IUEN5T2Y5cGRKdjA" class="cv-button">Download Resume</a>
                <hr/>
                <h2 class="border">WHAT CAN I DO?</h2>
                <div class="cv-main-icon-container">
                    <!-- ICON BLOCK -->
                    <div class="cv-icon-block">
                        <div class="cv-icon-container">
                            <a href="#" class="fa fa-paint-brush">Web Design</a>
                        </div>
                        <div class="cv-icon-text">
                            <h4>Web Design</h4>
                            <p> </p>
                        </div>
                    </div>
                    <!-- ICON BLOCK -->
                    <div class="cv-icon-block">
                        <div class="cv-icon-container">
                            <a href="#" class="fa fa-paint-brush">Art Design</a>
                        </div>
                        <div class="cv-icon-text">
                            <h4>Art Design</h4>
                            <p> </p>
                        </div>
                    </div>
                    <!-- ICON BLOCK -->
                    <div class="cv-icon-block">
                        <div class="cv-icon-container">
                            <a href="#" class="fa fa-wordpress">WordPress</a>
                        </div>
                        <div class="cv-icon-text">
                            <h4>WordPress</h4>
                            <p> </p>
                        </div>
                    </div>
                    <!-- ICON BLOCK -->
                    <div class="cv-icon-block">
                        <div class="cv-icon-container">
                            <a href="#" class="fa fa-eye">SEO</a>
                        </div>
                        <div class="cv-icon-text">
                            <h4>SEO</h4>
                            <p> </p>
                        </div>
                    </div>
                    <!-- ICON BLOCK -->
                    <div class="cv-icon-block">
                        <div class="cv-icon-container">
                            <a href="#" class="fa fa-android">Mobile App.</a>
                        </div>
                        <div class="cv-icon-text">
                            <h4> Mobile Application</h4>
                            <p> </p>
                        </div>
                    </div>
                    <!-- ICON BLOCK -->
                    <div class="cv-icon-block">
                        <div class="cv-icon-container">
                            <a href="#" class="fa fa-chrome">Web App.</a>
                        </div>
                        <div class="cv-icon-text">
                            <h4>Web Application</h4>
                            <p> </p>
                        </div>
                    </div>
                </div>
                <hr/>
                
            </div>
        </section>
        <!-- PAGE 3 -->
        <section class="floor floor-3">
            <!-- THIS IMAGE WILL BE DISPLAYED ONLY ON MOBILE MODE ( 1024PX AND BELOW ) -->
            <div class="img-mobile-only">
                <img src="images/photos/img4-small.webp" alt="" />
            </div>
            <!-- PAGE CONTENT -->
            <div class="cv-page-content">
                <h2 class="border">EXPERIENCE</h2>
                <div class="cv-resume-box">
                    <div class="cv-resume-title">
                        <h5>Samsung Experience Store Promotor</h5>
                        <p>2016 (Event)</p>
                    </div>
                    <p> </p>
                </div>
                <div class="cv-resume-box">
                    <div class="cv-resume-title">
                        <h5>Programming Tutor at Campus</h5>
                        <p>2015</p>
                    </div>
                    <p> </p>
                </div>
                <div class="cv-resume-box">
                    <div class="cv-resume-title">
                        <h5>Learning Course Tutor For High School</h5>
                        <p>2014-2015</p>
                    </div>
                    <p> </p>
                </div>
                <hr/>
                <h2 class="border">EDUCATION</h2>
                <div class="cv-resume-box">
                    <div class="cv-resume-title">
                        <h5>Kwik Kian Gie School of Business</h5>
                        <p>2014-Now</p>
                    </div>
                    <p> </p>
                </div>
                <div class="cv-resume-box">
                    <div class="cv-resume-title">
                        <h5>9 State Senior High School Bekasi</h5>
                        <p>2011-2014</p>
                    </div>
                </div>
                <div class="cv-resume-box">
                    <div class="cv-resume-title">
                        <h5>16 State Junior High School Bekasi</h5>
                        <p>2008-2011</p>
                    </div>
                </div>
                <div class="cv-resume-box">
                    <div class="cv-resume-title">
                        <h5>Bojong Rawa Lumbu XII State Elementary School</h5>
                        <p>2002-2008</p>
                    </div>
                </div>
                <hr/>
                <h2 class="border">SKILLS</h2>
                <p> </p>
                <!-- SKILL BARS -->
                <div class="skills">
                    <div class="skillbar" data-percent="70%">
                        <div class="skillbar-title"><span>HTML5</span>
                        </div>
                        <div class="skillbar-bar"></div>
                        <div class="skill-bar-percent">85%</div>
                    </div>
                    <div class="skillbar" data-percent="65%">
                        <div class="skillbar-title"><span>CSS3</span>
                        </div>
                        <div class="skillbar-bar"></div>
                        <div class="skill-bar-percent">70%</div>
                    </div>
                    <div class="skillbar" data-percent="50%">
                        <div class="skillbar-title"><span>jQuery</span>
                        </div>
                        <div class="skillbar-bar"></div>
                        <div class="skill-bar-percent">45%</div>
                    </div>
                    <div class="skillbar" data-percent="76%">
                        <div class="skillbar-title"><span>PHP</span>
                        </div>
                        <div class="skillbar-bar"></div>
                        <div class="skill-bar-percent">80%</div>
                    </div>
                    <div class="skillbar" data-percent="80%">
                        <div class="skillbar-title"><span>Wordpress</span>
                        </div>
                        <div class="skillbar-bar"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div>
                    <div class="skillbar" data-percent="75%">
                        <div class="skillbar-title"><span>SEO</span>
                        </div>
                        <div class="skillbar-bar"></div>
                        <div class="skill-bar-percent">45%</div>
                    </div>
                    <div class="skillbar" data-percent="70%">
                        <div class="skillbar-title"><span>Photoshop</span>
                        </div>
                        <div class="skillbar-bar"></div>
                        <div class="skill-bar-percent">70%</div>
                    </div>
                    <div class="skillbar" data-percent="70%">
                        <div class="skillbar-title"><span>English Active/Passive</span>
                        </div>
                        <div class="skillbar-bar"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div>
                    <!-- End Skill Bars -->
                </div>
            </div>
        </section>
        <!-- PAGE 4 -->
        <section class="floor floor-4">
            <!-- THIS IMAGE WILL BE DISPLAYED ONLY ON MOBILE MODE ( 1024PX AND BELOW ) -->
            <div class="img-mobile-only">
                <img src="images/photos/img5-small.webp" alt="" />
            </div>
            <!-- PAGE CONTENT -->
            <div class="cv-page-content">
                <h2 class="border">PORTFOLIO</h2>
                <!-- PORTFOLIO FILTERS -->
                <ul id="cv-portfolio-filter" class="cvfilters">
                    <li data-filter="all" class="gridactive">All</li>
                    <li data-filter="cat1">Category 1</li>
                    <li data-filter="cat2">Category 2</li>
                </ul>
                <div class="clear"></div>
                <!-- PORTFOLIO GRID -->
                <ul id="cv-portfolio" class="cvgrid">
                <li data-filter-class='["all","cat2"]'>
                        <figure>
                            <a id="gallery3" href="#" class="openlightbox cvgrid-img">
                                <img src="images/photos/p1-thumb.jpg" alt="" />
                            </a>
                            <figcaption>
                                <div class="cvgrid-title">A Photo Gallery</div>
                            </figcaption>
                        </figure>
                    </li>
                    <li data-filter-class='["all","cat2"]'>
                        <figure>
                            <a id="gallery2" href="#" class="openlightbox cvgrid-video">
                                <img src="images/photos/p2-thumb.jpg" alt="" />
                            </a>
                            <figcaption>
                                <div class="cvgrid-title">A Video Gallery</div>
                            </figcaption>
                        </figure>
                    </li>
                    <li data-filter-class='["all","cat1"]'>
                        <figure>
                            <a href="blog.html" class="cvgrid-img" target="_blank">
                                <img src="images/photos/p3-thumb.jpg" alt="" />
                            </a>
                            <figcaption>
                                <div class="cvgrid-title">Article</div>
                            </figcaption>
                        </figure>
                    </li>
                    <li data-filter-class='["all","cat1"]'>
                        <figure>
                            <a id="gallery4" href="#" class="cvgrid-img">
                                <img src="images/photos/p4-thumb.jpg" alt="" />
                            </a>
                            <figcaption>
                                <div class="cvgrid-title">Sketch Gallery</div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </section>
        <!-- PAGE 5 -->
        <section class="floor floor-5">
            <!-- MOBILE GOOGLE MAP -->
                <div class="mobile-map-container">
                    <div id="mobile-map"></div>
                </div>
            <!-- PAGE CONTENT -->
            <div class="cv-page-content">
                <h2 class="border">CONTACT</h2>
                <p>If you interesting to to know me more or want to ask for business inquiries, you can contact me by one of these options below.</p>
                <!-- TABLE -->
                <ul class="cv-table">
                    <li>
                        <div class="cv-table-left"><i class="cv-icon fa fa-phone-square"></i>Phone</div>
                        <div class="cv-table-right"><a href="tel:+6283871979960">+62-838-719-799-60</a></div>
                    </li>
                    <li>
                        <div class="cv-table-left"><i class="cv-icon fa fa-envelope"></i>E-mail</div>
                        <div class="cv-table-right"><a href="#">samuelseptiano@outlook.com</a>
                        </div>
                    </li>
                    <li>
                        <div class="cv-table-left"><i class="cv-icon fa fa-map"></i>Location</div>
                        <div class="cv-table-right"><a href="https://www.google.co.id/maps/place/Jl.+Lumbu+Utara,+Bojong+Rawalumbu,+Rawalumbu,+Kota+Bks,+Jawa+Barat+17116/@-6.284615,106.9963203,17z/data=!3m1!4b1!4m5!3m4!1s0x2e698dfb6c0118df:0xe5ecdb33882b6d82!8m2!3d-6.2846203!4d106.998509">Bekasi, West Java, Indonesia</a></div>
                    </li>
                </ul>
                <p> </p>
                <hr/>
                <h2 class="border">GET IN TOUCH</h2><br>
                <p> </p>
                <!-- CONTACT FORM -->
                <form class="form-box" action="" method="post">
                    <label>Full name :</label>
                    <input type="text" name="senderName" id="senderName" required="required" maxlength="50" />
                    <label>Country :</label>
					<select class="demo option3 dropdown-menu" id="country" name ="country"></select>
					<br><br><br><label>State :</label>
					<select class="demo option3" name ="state" id ="state"></select>

						<script language="javascript">
						// first parameter is id of country drop-down and second parameter is id of state drop-down
						populateCountries("country", "state"); 
						populateCountries("country2");
						</script>

                    <br><br><br><label>Email address :</label>
                    <input type="email" name="senderEmail" id="senderEmail" required="required" maxlength="50" />
                    <label>Message :</label>
                    <textarea name="message" id="message" required="required"></textarea>
                    <input type="submit" id="sendMessage" name="sendMessage" class="cv-button primary" value="Send Message" />
                </form>
            </div>
        </section>
        <!-- FOOTER -->
        <footer id="footer">
            <div class="cv-credits">
                Copyright <a href="#">Egemenerd</a> - All rights reserved
            </div>
            <!-- BACK TO TOP BUTTON -->
            <div id="cv-back-to-top" class="tooltip-gototop" title="Go to top"></div>
        </footer>
    </div>
    <!-- SIDEBAR -->
    <aside id="cv-sidebar">
        <div id="cv-sidebar-inner">
            <!-- MENU WIDGET -->
            <div class="cv-sidebar-title">
                <h5>SUBMENU</h5>
            </div>
            <div class="cv-panel-widget">
                <nav class="cv-submenu">
                    <ul>
                        <li><a href="#">Projects</a>
                            <ul>
                                <li><a href="#">Blog</a>
                                </li>
                                <li><a href="#">Photo Gallery</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

<!-- FLICKR FEED
            <div class="cv-sidebar-title">
                <h5>FLICKR</h5>
            </div>
            <div class="cv-panel-widget">
                <ul id="cv-flickr-box" class="cv-flickr-box"></ul>
                <div class="clear"></div>
            </div>
-->
          
        </div>
    </aside>
    <!-- MAIN JS FILES -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-custom.min.js"></script>
    <script type="text/javascript" src="js/jquery.ascensor.min.js"></script>
    <script type="text/javascript" src="js/nerveslider.min.js"></script>
    <!-- BACKSTRETCH (HOMEPAGE RIGHT SIDE BG IMAGE) -->
    <script type="text/javascript" src="js/backstretch.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";
            jQuery('#home-image').backstretch("images/photos/img2.webp");
        });
    </script>
    <!-- PORTFOLIO -->
    <script type="text/javascript" src="js/wookmark.js"></script>
    <script type="text/javascript" src="js/portfolio-trigger.js"></script>
    <!-- TOOLTIPS -->
    <script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>
    <!-- TESTIMONIALS -->
    <script type="text/javascript" src="js/quovolver.js"></script>
    <!-- SIDEBAR SCROLLBAR -->
    <script type="text/javascript" src="js/scrollbar.js"></script>
    <!-- LIGHTGALLERY -->
    <script type="text/javascript" src="js/lightgallery.js"></script>
    <script type="text/javascript" src="js/galleries.js"></script>
    <!-- GOOGLE MAP -->
    <script type="text/javascript" src="js/googlemap.js"></script>
    <!-- CUSTOM JS -->
    <script type="text/javascript" src="js/home-custom.js"></script>
</body>
</html>