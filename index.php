<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="personal website">
    <meta name="author" content="Yinpeng Chen">

    <title>Yinpeng Chen Website</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Font Awesome -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <!-- Global CSS -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">   
	
    <!-- Plugins CSS -->
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.css">
      
    <!-- Skill Progress Bar -->
    <link href="css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
    
    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="google/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="google/materialize.min.js"></script>
    
    <!-- Animation -->
	<link href="css/animate.css" rel="stylesheet" />
	
    <!-- MyTemplate CSS -->
    <link href="css/style.css" rel="stylesheet">
    
  
    
    <!--page icon-->
    <link rel="icon" type="image/ico" href="img/peng.ico" />

	
</head>

<body>

	<header id="header-banner">
		<nav class="navbar navbar-default navbar-fixed-top fadeIn" role="navigation">
			<div class="container">
				
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown-box-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
						<a href="#">陈音澎</a>
					</div>
				</div>
				
				<!-- Collect the nav links and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
					
					<ul class="nav navbar-nav">
						<li><a href="#home">HOME</a></li>
						<li><a href="#aboutus">ABOUT</a></li>
						<li class="dropdown" role="presentation">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							  PROFILE <span class="caret"></span>
							</a>
							<ul class="dropdown-menu bullet fadeIn" role="menu">
							  <li><a href="#first">PROJECT</a></li>
							  <li><a href="#second">LANGUAGE</a></li>
                              <li><a href="#third">EDUCATION</a></li>
							</ul>
						</li>
                        <li><a href="#skill">SKILLS</a></li>
                      <!--   <li class="dropdown" role="presentation">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							  INTEREST <span class="caret"></span>
							</a>
						    <ul class="dropdown-menu bullet fadeIn" role="menu">
                            	<li><a href="nhl/nhldata.php">PLAY DATAS</a></li>
						<li><a href="#contactus">CONTACT</a></li> -->
					</ul>
					
				</div>
				
			</div> <!-- /.container -->
		</nav> <!-- /.nav -->
	</header>
		
        
        
        
	<!-- banner -->
    <section class="banner" id="home">
		<div class="container">
			<div class="slogan">
				<h2>I'm <br class="visible-sm visible-xs">Clark, Yinpeng Chen</h2>
				<h4>Learner, thinker and doer!</h4>
                <h4>New master graduate of Acadia University, NS, CA</h4>
			</div>
			
			<div class="btn-circle-scroll fadeIn visible-lg">
				<a href="#aboutus" class="btn-circle">
					<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
			
		</div>
    </section>
	<!-- /.banner -->



	<!-- aboutus -->
    <section class="aboutus" id="aboutus">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s"> 
						<h2>About Me</h2> 
					</div>
					<div class="col-sm-7">
						<p>
							I born in Beijing, China, I finished my Bachelor Degree in Guizhou University within Network Engineering Program. I moved to Canada since 2014 to pursue my Master Degree at Acadia University. <b>I have passed Thesis Oral Exam in Jan 2018 and have been confirmed to graduated after May, 2018.</b></p> 
                       <p>I am currently living in Wolfville, Nova Scotia where is the location of Acadia University. It a peaceful lovely town, I am really enjoy the life here, I am willing to find a job in this country. I am open to be relocated to any city within this Maple State.
						</p>
						<p>
							I love travel, watching sports game. I spent most of my spare time to read coding books and surf on some technique Website. 
						</p>
                        <p>
                        <a href="attach/Yinpeng_Chen_Resume" download target="_blank" class="waves-effect waves-light btn-large resume-btn"><i class="fa fa-download left"></i>Resume Download</a>
                        </p>
					</div>
					<div class="col-sm-5">
						<div class="img-aboutus">
							<div class="wow fadeIn" data-wow-delay="0.2s">
								<img src="img/usacadia.gif" alt="acadiapark" class="img-responsive img-rounded" />
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!-- /.aboutus -->
	
	<!-- services -->
    <section style="background-color: rgb(211,211,211);" id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s">
					<h2>My project</h2>
					</div>
				</div>				
			</div>
			
			<div class="row-padded" id="first"></div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-sm-7">
						<h3>Master Thesis: </h3>
						<h4><b>INVESTIGATING THE LOSSLESS COMPRESSION OF EEG DATA</b></h4>
						<p>
							An electroencephalograph, known as an EEG, is of great interest to the medical
							research community. The waveform of EEG data has a high level of similarity to
							that of audio signals. In this thesis, theories and principles of a very popular audio
							compression tool|the Free Lossless Audio Codec|will be discussed. FLAC applies
							the traditional audio compression structure, which is used by a variety of lossless
							audio compression techniques. Spectral analysis will be used to extract the frequency
							components from signals and these will be used to construct an alternative predictor.
							The created FFT-FLAC encoder achieved a compression ratio of 0.494 for a long-
							term EEG dataset. Another new predictor using the Wavelet Neural Network will be
							tested on EEG signals to show the potential of machine learning techniques for this
							field. Because EEGs are virtually always multi-channel data, the use of intra-channel
							redundancy to improve compression ratios is investigated.
						</p>
                        <br>
					</div>
					
					<div class="col-sm-5">
						<div class="avatar">
							<div class="wow fadeIn" data-wow-delay="0.2s">
							<img src="img/thesis-coverpage.png" alt="" class="img-responsive img-rounded" style="border:1px solid #021a40;" />
							</div>
						</div>
					</div>
				</div>				
			</div>
	</div>

	<!-- Project 2 -->
	<div class="container">


	</div>

</section>
	<!-- section 2 -->
<section class="color2">
	<div class="container" >
			<div class="row-padded" id="second" ></div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-sm-5">
						<div class="avatar">
							<div class="wow fadeIn" data-wow-delay="0.2s">
							<img src="img/language.gif" alt="language" class="img-responsive img-rounded" />
							</div>
						</div>
					</div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5" id="lang">
					<div class="wow bounceInLeft" data-wow-delay="0.1s">
					<h2>Language</h2>
					</div>
						<p>
                           <br>
						   <h3><strong>Mandarin:</strong></h3>
                           <h4>Native Speaker<br class="visible-sm visible-xs"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </h4>

						</p>
						<p>
							 <h3><strong>English:</strong></h3>
                             <h4>Fluent<br class="visible-sm visible-xs"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></i></h4>
						</p>
					</div>	
				</div>				
			</div>
		</div>
	</section>

		<!-- section 3 -->
<section style="background-color: rgb(211,211,211);">
		<div class="container">
			<div class="row-padded" id="third"></div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="col-sm-7">
						<div class="wow bounceInLeft" data-wow-delay="0.1s">
						<h2>Education</h2>
						</div>
                        <div class="content">
                            <div class="item">                      
                                <h3><i class="fa fa-graduation-cap"></i> MSc Computer Science</h3>
                                <h4>Acadia University<span class="year">(2014-2018)</span></h4>
                                <h4><b>GPA:3.0/4.0</b></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3><i class="fa fa-graduation-cap"></i> BSc Network Engineering</h3>
                                <h4>Guizhou University<span class="year">(2009-2013)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
						</p>
					</div>
					
					<div class="col-sm-5">
						<div class="avatar">
							<div class="wow fadeIn" data-wow-delay="0.2s">
							<img src="img/acadiau.gif" alt="acadiau" class="img-responsive img-rounded" />
							</div>
						</div>
					</div>
				</div>				
			</div>
		
		</div>
	</section>
	<!-- /.services -->
    
    
    <!--skills-->
    	<div class="section">
  			<div class="container" >
              <div class="row">
				  <div class="skill" id="skill">
                        <div class="wow bounceInLeft" data-wow-delay="0.1s">
						<h2><b>My skills</b></h2>
						</div>
                        <p>When I do the research on my thesis, I use Python with some of its strong library like: Numpy, Matplotlib,etc, to finish experiments. I am very proficiency with <b>Data Structure</b> and <b>Algorithm</b>. I am also keeping high passion on web construct and Database build. Therefore I have read several <b>PHP &amp; MYSQL books</b>, I bulit several Admin System for myself and my friend which can make our interaction more convenient. Recently, I am play with webpage spider(crawler) skills with PYTHON's library. Collect data from internet, store them on remote MySQL database and apply Data analyst knowledge to know something amazing facts, I am also study Machine learning Techniques and will do some prediction with the data.
                        I am very proficiency with <b>IOS development</b> and I have shipped two apps to IOS store, I am very familiar with the pulish process.
                         <!-- <a href="nhl/nhldata.php">Read more..</a> -->
                        <br>
                        <br>
                        </p>
                       

				<div class="skill-progress-bar">               
                    <span>Swift &amp; Ios development</span>
                    <div class="pro-bar-container white">
                      <div class="pro-bar bar-95 color-amethyst" data-pro-bar-percent="95" data-pro-bar-delay="100"></div>
                    </div>
                    <span>Java &amp; Android development</span>
                    <div class="pro-bar-container white">
                      <div class="pro-bar bar-60 color-amethyst" data-pro-bar-percent="60" data-pro-bar-delay="500"></div>
                  </div>
                    <span>PHP &amp; MySQL</span>
                    <div class="pro-bar-container white">
                      <div class="pro-bar bar-75 color-amethyst" data-pro-bar-percent="75" data-pro-bar-delay="200"></div>
                    </div>
                    <span>HTML5, CSS3, Java Script, BOOTSTRAP& jquery</span>
                    <div class="pro-bar-container white">
                      <div class="pro-bar bar-60 color-amethyst" data-pro-bar-percent="60" data-pro-bar-delay="300"></div>
                    </div>
                    <span>GIT,Github</span>
                    <div class="pro-bar-container white">
                      <div class="pro-bar bar-90 color-amethyst" data-pro-bar-percent="90" data-pro-bar-delay="400"></div>
                    </div>
                    <span>C++ &amp; PYTHON</span>
                    <div class="pro-bar-container white">
                      <div class="pro-bar bar-60 color-amethyst" data-pro-bar-percent="60" data-pro-bar-delay="500"></div>
                  </div>
                  <span>Machine Learning &amp; Data Science</span>
                    <div class="pro-bar-container white">
                      <div class="pro-bar bar-60 color-amethyst" data-pro-bar-percent="60" data-pro-bar-delay="500"></div>
                  </div>

                 </div>
               </div>		<!--skill-->
           </div>    <!--row-->   
          </div>    <!--container-->
         </div>
          
            
            
            
	<section class="testimonials-banner" id="testimonials"></section>
	
	
	
	<!-- contact us -->
	<section class="contactus" id="contactus">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s">
					<h2>Get in touch</h2>
					</div>
					<div class="col-sm-8">
						<form method="post" action="admsg.php" class="my-form" role="form">
						  <div class="form-group">
							<input type="text" class="form-control" name="name" id="name" placeholder="Name">
						  </div>
						  <div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email">
						  </div>
						  <div class="form-group">
							<textarea class="form-control" name="message" id="message" rows="7" cols="25" style="resize:none;" required placeholder="Message"></textarea>
						  </div>
						  
						  <button type="submit" value="submit" class="btn btn-default btn-block">SEND MESSAGE</button>
						</form>
					</div>
					
					<div class="col-sm-4">
						<div class="physical-address">
						<h4>Personal Information</h4>
				
						<address>
						  <p><strong>Contact me and I'll get back to you within 24 hours.</strong></p><br>
						<p><span class="glyphicon glyphicon-map-marker"></span> 10 Summer St, Po Box 2638, Wolfville, Ns, Canada</p>

      <p><span class="glyphicon glyphicon-phone"></span> +1 902-300-8932</p>

      <p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:cyp0911@gmail.com?Subject=Hello%20there%20From%20yinpeng%20website">cyp0911@gmail.com</a></p>	
						</address>
                        
						<address>
						  <strong>I'm also on social networks</strong><br>
							<div class="wow fadeIn" data-wow-delay="0.1s">
							<ul class="company-social">
								<li class="social-facebook"><a href="https://www.facebook.com/yinpeng.chen.7" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-google"><a href="https://github.com/cyp0911" target="_blank" title="Github"><i class="fa fa-github"></i></a></li>
							
								<li class="social-dribble"><a href="https://www.linkedin.com/in/yinpengchen/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								
                                <li class="social-twitter"><a href="http://weibo.com/2017302287/profile?rightmod=1&wvr=6&mod=personinfo&is_all=1" target="_blank" title="Weibo"><i class="fa fa-weibo"></i></a></li>
                                
                                <li class="social-google"><a href="tencent://message/?uin=122766288&Site=&Menu=yes" target="_blank" title="QQ"><i class="fa fa-qq"></i></a></li>
                                
							</ul>
							</div>
						</address>	
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!-- /.contact us -->
    <!--map start here-->
<div class="map">
	<div id="googleMap" style="height:350px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(45.087733, -64.365527);

		function initialize() {
		var mapProp = {
		center:myCenter,
		zoom:5,
		scrollwheel:true,
		draggable:true,
		mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		  
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		  
		var marker=new google.maps.Marker({
		position:myCenter,
		animation:google.maps.Animation.BOUNCE
  		});

		marker.setMap(map);

		var infowindow = new google.maps.InfoWindow({
  			content:"<b>Acadia University <br> I'm living here now!</b>"
  		});

		google.maps.event.addListener(marker, 'click', function() {
  			infowindow.open(map,marker);
  		});
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
</script>

</div>
<!--map end here-->
	
	<!-- footer -->
	<footer id="section-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow fadeIn" data-wow-delay="0.4s">
						<div class="btn-circle-scroll">
							<a href="#header-banner" class="btn-circle">
								<i class="fa fa-angle-double-up animated"></i>
							</a>
						</div>
					</div>
					<p>&copy;&nbspCopyright 2018 - Yinpeng Chen. All rights reserved.</p>
				</div>
			</div>	
		</div>
	</footer>
	<!-- /.footer -->
	
	
	<!-- Core JavaScript Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>			<!-- Reveal animation when you scroll by wow.js. It need animate.css library -->
    <!-- Skill Progress Bar -->
      <script src="js/appear.min.js" type="text/javascript"></script>
      <script src="js/pro-bars.min.js" type="text/javascript"></script>
	<!-- Custom Theme JavaScript -->
	<script src="js/custom.js"></script>
    

</body>

</html>
