<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en">
<?php $con = mysqli_connect('localhost', 'root', '', 'edc'); ?>
<!--<![endif]-->
<head>
	<!-- Basic Page Needs ================================================== -->
	<meta charset="utf-8">
	<title>EDCIITR</title>
	<meta name="description" content="Entrepreneurship Development Cell Website">
	<meta name="author" content="EDC">

	<!-- Mobile Specific Metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS ================================================== -->

	<!-- web font  -->
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<!-- Neko framework  -->
	
	<link type="text/css" rel="stylesheet" href="neko-framework/external-plugins/external-plugins.min.css">
	<link type="text/css" rel="stylesheet" href="neko-framework/css/layout/neko-framework-layout.css">
	<link type="text/css" rel="stylesheet" id="color" href="neko-framework/css/color/neko-framework-color.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/custom.css">
	<link type="text/css" rel="stylesheet" href="Main/assets/css/styles_new.css">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="images/114x119.png">
	<link rel="apple-touch-icon" href="images/114x119.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/114x119.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/114x119.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/114x119.png">


	<!-- <link rel="stylesheet" href="http://basehold.it/30"> -->

	<script src="neko-framework/external-plugins/modernizr/modernizr.custom.js"></script>

<!--Google Analytics code starts-->

</head>
<style>
    .ellip {
        display: block;
        height: 100%;
    }
    .ellip-line {
        display: inline-block;
        text-overflow: ellipsis;
        white-space: nowrap;
        word-wrap: normal;
        max-width: 100%;
    }
    .ellip,
    .ellip-line {
        position: relative;
        overflow: hidden;
    }
</style>
<body class="activate-appear-animation header-transparent header-dark nav-style-1">

	<div class="little-neko-preloader little-neko-sk-cube-grid little-neko-preloader-centered" data-logo="images/114x119.png"></div>



	<!-- global-wrapper -->
	<div id="global-wrapper">
		<!-- header -->
		<header class="menu-header navbar-fixed-top" >
			
			<div class="container">
				<nav class="navbar navbar-default" >
					<div class="navbar-header">
						<!-- hamburger button -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- / hamburger button -->

						<!-- Logo -->
						<a class="navbar-brand" href="index.html">
							<img src="images/main-logo.svg" alt="Rare case" class="main-logo"/>
							<img src="images/logo.png" alt="Rare case" class="main-logo-light" height="60" width="120" />
						</a>
						<!-- /Logo -->
					</div>
					<div class="collapse navbar-collapse">
						<!-- Main navigation -->
						<ul class="nav navbar-nav navbar-right">

							<li class="neko-mega-menu-trigger active">
								<a href="index.html">Home</a>
								
							</li>

							<li> 
								<a href="events.html">Events</a>
								
							</li>

							<li class="neko-mega-menu-trigger">
								<a href="team.html">Team</a>
								
							</li>
							<li>
								<a href="portfolio-masonry.html">Startup-Portfolio</a>
								
							</li>

							<li>
								<a href="http://blog.edciitr.com">Blog</a>
								
							</li>

							<li><a href="http://www.tedxiitroorkee.com">TEDxIITR</a></li> 

							
						</ul>
						<!-- / End main navigation -->
					</div>


				</nav>
			</div>

		</header>
		<!-- / header -->

		<main id="content">

			<!-- splash screen -->
			
			<header class="page-header top-center nk-fullscreen image-background image-13 no-padding">
				<div class="mask opacity-3">

					<div class="container v-align-center">
						<div class="row">
							<div class="col-md-12 text-light">
								<div class="nav-style-1 header-transparent-header-space"></div>
								<h1 class="x-large block text-light">Hello, we're EDC
									<span class="block pt-small">Entrepreneurship Development Cell</span>
								</h1>
								
							</div>
						</div>
					</div>
				</div>
			</header>
				
		
			<!-- / splash screen -->

			<!-- intro -->

			<div class="first-block">
    <div class="containerf">
        <div style="overflow:auto;">
            <div class="news">
            	<div class="col-md-12 heading text-center mb">
							<h2>News & Updates<span>What's going on now</span></h2>
				</div>
                <!--<a href="" target="_blank">
                    <button> <i class="fa fa-archive"></i> &nbsp;Archives</button>
                </a>-->

                <a id="prev-news" class="prev" href="index.html#"><i class="fa fa-chevron-left"></i></a>
                <div class="news_main_top">
                    <ul>

                    	<?php
    						
    						$sql = "SELECT * FROM news ORDER BY posted_on DESC";
    						$result = mysqli_query($con, $sql);
    						while($row = mysqli_fetch_assoc($result)){
    							
    					?>




       <li>
        <a href="<?php echo $row['link']; ?>">
          <span class="ico"><i class="fa fa-newspaper-o"></i>
                                </span>
                                <span class="headline" title="<?php echo $row['heading']; ?>"><?php echo $row['heading']; ?></span>
          <span class="postedTime">Posted On: <?php echo $row['posted_on']; ?> </span>
        </a>
      </li>
      	<?php } ?>

     <!--  <li>
        <a href="Main/news/2016/Leaflet&#32;gian&#32;course&#32;1.pdf">
          <span class="ico"><i class="fa fa-newspaper-o"></i>
                                </span>
                                <span class="headline" title='GIAN Course on Green Water Infrastructure I Sustainable Urban Stormwater Management'>GIAN Course on Green Water Infrastructure I Sustainable Urban Stormwater Management</span>
          <span class="postedTime">Posted On: 13 Sep, 2016 </span>
        </a>
      </li>
      <li>
        <a href="Main/news/2016/IITR_SITE.pdf">
          <span class="ico"><i class="fa fa-newspaper-o"></i>
                                </span>
                                <span class="headline" title='New Break-Through'>New Break-Through</span>
          <span class="postedTime">Posted On: 30 Aug, 2016 </span>
        </a>
      </li>
      <li>
        <a href="Main/news/2016/GIAN-II.pdf">
          <span class="ico"><i class="fa fa-newspaper-o"></i>
                                </span>
                                <span class="headline" title='“Integrated Modelling of Subsurface Flow and Solute Transport in Porous Media – Challenges and Opportunities” Training Workshop'>“Integrated Modelling of Subsurface Flow and Solute Transport in Porous Media – Challenges and Opportunities” Training Workshop</span>
          <span class="postedTime">Posted On: 13 Jul, 2016 </span>
        </a>
      </li>
      <li>
        <a href="Main/news/2016/GIAN&#32;Brochure.pdf">
          <span class="ico"><i class="fa fa-newspaper-o"></i>
                                </span>
                                <span class="headline" title='MHRD GIAN Course on -  "Interior-Architecture, Craft and Design: Focus on Inter-Disciplinarity", being organised and conducted by IIT Roorkee during October 03-12, 2016'>MHRD GIAN Course on -  "Interior-Architecture, Craft and Design: Focus on Inter-Disciplinarity", being organised and conducted by IIT Roorkee during October 03-12, 2016</span>
          <span class="postedTime">Posted On: 06 Jul, 2016 </span>
        </a>
      </li>
      <li>
        <a href="centers/ETC/pages/Projects.html">
          <span class="ico"><i class="fa fa-newspaper-o"></i>
                                </span>
                                <span class="headline" title='NPTEL Online Certification Courses for July-Nov. 2016'>NPTEL Online Certification Courses for July-Nov. 2016</span>
          <span class="postedTime">Posted On: 21 Jun, 2016 </span>
        </a>
      </li>
      <li>
        <a href="centers/QIP/pages/About_Us+About__Us.html">
          <span class="ico"><i class="fa fa-newspaper-o"></i>
                                </span>
                                <span class="headline" title='QIP Short Term Courses and C.D. Cell Activities 2016-17'>QIP Short Term Courses and C.D. Cell Activities 2016-17</span>
          <span class="postedTime">Posted On: 08 Apr, 2016 </span>
        </a>
      </li> -->
</ul>                </div>
                <a id="next-news" class="next" href="index.html#"><i class="fa fa-chevron-right"></i></a>

            </div>

        </div>
    </div>
</div>

<section class="pt-large pb-large">
				<div class="container">
					<div class="row">
						<div class="col-md-12 heading text-center mb">
							<h2>What we do<span>Think across the full value chain</span></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">

							<div class="tabs-minimal tabs-center">
								<ul id="myTabMinimal" class="nav nav-tabs" role="tablist">
									<li class="active"><a href="template-about-3.html#first-tab-2" role="tab" data-toggle="tab">Our mission</a></li>
									<li class=""><a href="template-about-3.html#second-tab-2" role="tab" data-toggle="tab">Our skills</a></li>
									<li class=""><a href="template-about-3.html#third-tab-2" role="tab" data-toggle="tab">Our services</a></li>
								</ul>
								<div id="myTabContent" class="tab-content">
									<div class="tab-pane fade active in" id="first-tab-2">
										<h3 class="lh-15 text-body-color">
											We are a team of enthusiasts dedicated towards building a strong foundation of entrepreneurial culture at IIT Roorkee. 
										</h3>
									</div>
									<div class="tab-pane fade" id="second-tab-2">
										<h3 class="lh-15 text-body-color">
											We wish to encourage students to take up entrepreneurship as a lifestyle
											and to guide them while they redefine the very meaning of success.
										</h3>
									</div>
									<div class="tab-pane fade" id="third-tab-2">
										<h3 class="lh-15 text-body-color">
											We serve our campus with our knowledge and network of various people with entrepreneurial spirit.
										</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- / text blocks centered-->


<div class="rollover effect-subtle clearfix portfolio-mosaic mosaic3">
				<div class="col-md-12 heading text-center mb">
							<h2>Gallery<span>Moments captured on camera</span></h2>
				</div>
				

				<?php
					
					$sql1 = "SELECT * FROM gallery";
					$result1 = mysqli_query($con, $sql1);
					while($row1 = mysqli_fetch_assoc($result1)){
						
				?>

				
				<!-- item -->
				<article>
					<figure>
						<img src="<?php echo $row1['image_url']; ?>" alt="Reload page" class="full-width">
						<figcaption>
							<h2><?php echo $row1['heading']; ?></h2>

						</figcaption>
					</figure>
				</article>
				<!-- / item -->
				<?php } ?>

				<!-- item -->
				<article>
					<figure>
						<img src="images/portfolio/untitled-1.png" alt="Reload page" class="full-width">
						<figcaption>
							<h2>GEC Team</h2>
							
						</figcaption>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
				<article>
					<figure>
						<img src="images/portfolio/untitled-2.png" alt="Reload page" class="full-width">
						<figcaption>
							<h2>Workshop</h2>
							
						</figcaption>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
				<article>
					<figure>
						<img src="images/portfolio/untitled-3.png" alt="Reload page" class="full-width">
						<figcaption>
							<h2>Event</h2>
							
						</figcaption>
					</figure>
				</article>
				<!-- / item -->
				
				<!-- item -->
				<article>
					<figure>
						<img src="images/portfolio/untitled-4.png" alt="Reload page" class="full-width">
						<figcaption>
							<h2>Incubate</h2>
							
						</figcaption>
					</figure>
				</article>
				<!-- / item -->	

				<!-- item -->
				<article>
					<figure>
						<img src="images/portfolio/untitled-5.png" alt="Reload page" class="full-width">
						<figcaption>
							<h2>Panel Discussion</h2>
							
						</figcaption>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
				<article>
					<figure>
						<img src="images/portfolio/untitled-6.png" alt="Reload page" class="full-width">
						<figcaption>
							<h2>Gallery</h2>
							
						</figcaption>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
				<article>
					<figure>
						<img src="images/portfolio/untitled-7.png" alt="Reload page" class="full-width">
						<figcaption>
							<h2>Ideasthesia</h2>
							
						</figcaption>
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
				<article>
					<figure>
						<img src="images/portfolio/untitled-8.png" alt="Reload page" class="full-width">
						<figcaption>
							<h2>TEDxIITR</h2>
							
						</figcaption>
					</figure>
				</article>
				<!-- / item -->	

				<!-- item -->
				<article>
					<figure>
						<img src="images/portfolio/untitled-9.png" alt="Reload page" class="full-width">
						<figcaption>
							<h2>Venture Unplugged</h2>
							
							
						</figcaption>
					</figure>
				</article>
				<!-- / item -->	
				
			</div> <!--portfolio-->

			<!--next portfolio-->
			<div class="pt rollover effect-subtle">
				<div class="col-md-12 heading text-center mb">
							<h2>Our Associates<span>which have helped us to make it big</span></h2>
				</div>
				<div class="container-fluid">
					<div class="row">
						<!-- item -->



						<?php
					
							$sql2 = "SELECT * FROM our_associates";
							$result2 = mysqli_query($con, $sql2);
							while($row2 = mysqli_fetch_assoc($result2)){
								
						?>

						
						<!-- item -->
						<div class="col-sm-6 col-md-3 mb">
									<article>
										<figure>
											<img src="<?php echo $row2['photo']; ?>" alt="Reload page" class="full-width">
											<figcaption>
												<h2 class="h3"><?php echo $row2['heading']; ?></h2>
												<div class="rollover-content">
													<p>Read more</p>
												</div>
												<a href="<?php echo $row2['link']; ?>"></a>
											</figcaption>
										</figure>
									</article>
								</div>
						<!-- / item -->

      

      					<?php } ?>


						
						<div class="col-sm-6 col-md-3 mb">
							<article>
								<figure>
									<img src="images/portfolio/arambh.png" alt="Reload page" class="full-width">
									<figcaption>
										<h2 class="h3">Arambh</h2>
										<div class="rollover-content">
											<p>Read more</p>
										</div>
										<a href="http://www.iitrhf.aarambh.ventures"></a>
									</figcaption>
								</figure>
							</article>
						</div>
						<!-- / item -->

						<!-- item -->
						<div class="col-sm-6 col-md-3 mb">
							<article>
								<figure>
									<img src="images/portfolio/iitraa.PNG" alt="Reload page" class="full-width">
									<figcaption>
										<h2 class="h3">IITRAA</h2>
										<div class="rollover-content">
											<p>Read more</p>
										</div>
										<a href="http://iitraa.in/"></a>
									</figcaption>
								</figure>
							</article>
						</div>
						<!-- / item -->

						<!-- item -->
						<div class="col-sm-6 col-md-3 mb">
							<article>
								<figure>
									<img src="images/portfolio/mypoolin.png" alt="Reload page" class="full-width">
									<figcaption>
										<h2 class="h3">My PoolIn</h2>
										<div class="rollover-content">
											<p>Read more</p>
										</div>
										<a href="https://mypoolin.com/"></a>
									</figcaption>
								</figure>
							</article>
						</div>
						<!-- / item -->

						<!-- item -->
						<div class="col-sm-6 col-md-3 mb">
							<article>
								<figure>
									<img src="images/portfolio/tides.png" alt="Reload page" class="full-width">
									<figcaption>
										<h2 class="h3">TIDES</h2>
										<div class="rollover-content">
											<p>Read more</p>
										</div>
										<a href="http://www.iitr.ac.in/campus_life/pages/Societies+EDC.html"  class="tips" title="view more" data-placement="left"></a>
									</figcaption>
								</figure>
							</article>
						</div>
						<!-- / item -->

						
						
					</div>
				</div>
			</div>
			<!-- / portfolio -->
</main>
		<!-- footer -->
		<footer id="main-footer" class="dark-color">

			<div class="container">
				<div class="row">

					<div class="col-md-3 col-sm-6">
						<div class="footer-widget clearfix">

							<h3>Latest works</h3>
							<ul class="list-unstyled works-list">
								<li>
									<a data-original-title="Our work" href="portfolio-project-image.html" class="tips" title=""><img src="images/portfolio/untitled-1.png" alt="works"></a>
								</li>
								<li>
									<a data-original-title="Our work" href="portfolio-project-video-vimeo.html" class="tips" title=""><img src="images/portfolio/untitled-5.png" alt="works"></a>
								</li>
								<li>
									<a data-original-title="Our work" href="portfolio-project-carousel.html" class="tips" title=""><img src="images/portfolio/untitled-6.png" alt="works"></a>
								</li>
								<li>
									<a data-original-title="Our work" href="portfolio-project-image.html" class="tips" title=""><img src="images/portfolio/untitled-7.png" alt="works"></a>
								</li>
								<li>
									<a data-original-title="Our work" href="portfolio-project-video-youtube.html" class="tips" title=""><img src="images/portfolio/untitled-8.png" alt="works"></a>
								</li>
								<li>
									<a data-original-title="Our work" href="portfolio-project-fullwidth-image.html" class="tips" title=""><img src="images/portfolio/untitled-9.png" alt="works"></a>
								</li>
							</ul>
						</div>

					</div>

					<div class="col-md-2  col-sm-6">
						<div class="footer-widget">
							<h3>Navigation</h3>
							<ul class="list-unstyled list-icon arrow border">
								<li class="no-pt"><a href="events.html">Events</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="portfolio.html">Startup Portfolio</a></li>
								<li><a href="team.html">Team</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3  col-sm-6">
						<div class="footer-widget">

							<h3>Keep in touch</h3>
							<ul class="social-icons main-color circle social-hover">
								<li>
									<a href="index.html#" class="rss" title="rss"><i class="fa fa-rss"></i></a>
								</li>
								<li>
									<a href="index.html#" class="facebook" title="facebook"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="index.html#" class="twitter" title="twitter"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="index.html#" class="gplus" title="gplus"><i class="fa fa-google-plus"></i></a>
								</li>
							</ul> 

							<address class="pt">
								<p>
									EDC Office, MAC 3rd floor<br>
									IIT Roorkee, Roorkee<br>
									Haridwar, UK<br>
									<a href="mailto:team@edciitr.com">team@edciitr.com</a>
								</p>
							</address>
						</div>
					</div>

					<div class="col-sm-4  col-sm-6">
						<div class="footer-widget">
							<h3>Our Newsletter</h3>
							<ul class="list-unstyled list-icon arrow border">
								<li class="no-pt">You can subscribe to our newsletter for various updates in field of entrepreneurship</li>
								<li class="menu-action"><input type="text" name="email"><input type="submit" name="submit" class="btn small primary scroll-link"></li>
								

							</ul>
						</div>
					</div>

				</div>
			</div>
		</footer>
		<!-- / footer -->

	</div>
	<!-- global wrapper -->

	<!-- End Document ================================================== -->

	 

	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="neko-framework/js/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="neko-framework/js/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>

	<!-- external framework plugins -->
	<script type="application/javascript" src="neko-framework/external-plugins/external-plugins.js"></script>
	<!-- neko framework script -->
	<script type="text/javascript" src="neko-framework/js/neko-framework.js"></script>


	<!-- neko custom script -->	
	




</body>

<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/jquery.ellipsis.min.js"></script>
<script src="assets/js/lean-slider.js"></script>
<script src="assets/js/jquery.easy-ticker.min.js"></script>
<script src="assets/js/topstoriesslider.js"></script>
<script src="Main/assets/js/script.js"></script>
<script src="Main/assets/js/jssor.js"></script>
<script src="Main/assets/js/jssor.slider.js"></script>

<script src="Main/assets/js/jquery.gridrotator.js"></script>
<!--Google Analytics code starts-->
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-8126023-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

    function tabs(selectedtab) {
        // contents
        var s_tab_content = "tab_content_" + selectedtab;
        var contents = document.getElementsByTagName("div");
        for(var x=0; x<contents.length; x++) {
            name = contents[x].getAttribute("name");
            if (name == 'tab_content') {
                if (contents[x].id == s_tab_content) {
                    contents[x].style.display = "inline-block";
                } else {
                    contents[x].style.display = "none";
                }
            }
        }
        // tabs
        var s_tab = "tab_" + selectedtab;
        var tabs = document.getElementsByTagName("a");
        for(var x=0; x<tabs.length; x++) {
            name = tabs[x].getAttribute("name");
            if (name == 'tab') {
                if (tabs[x].id == s_tab) {
                    tabs[x].className = "active";
                } else {
                    tabs[x].className = "";
                }
            }
        }
    }

    $(document).ready(function() {
        $(".news_main_top ul").carouFredSel({
            prev: "#prev-news",
            next: "#next-news",
            pagination: "#pager",
            scroll: {
              duration: 1200,
              pauseOnHover: true
            }
        });

        $('.jssora13l').width(($("#slider1_container").width() - 1000) /2);
        $('.jssora13r').width(($("#slider1_container").width() - 1000) /2);

        $( '#ri-grid' ).gridrotator( {
            rows    : 2,
            columns   : 4,
            animType  : 'fadeInOut',
            animSpeed : 500,
            interval  : 3000,
            step    : 1,
            w1024     : {
              rows  : 2,
              columns : 4
            },
            w768      : {
              rows  : 2,
              columns : 4
            },
            w480      : {
              rows  : 2,
              columns : 4
            },
            w320      : {
              rows  : 2,
              columns : 4
            },
            w240      : {
              rows  : 2,
              columns : 4
            }
        } );
    });
</script>
<!--Google Analytics code ends-->

<script>

    jQuery(document).ready(function ($) {
        $('#twitter-widget-0').load(function() {
          $(this).contents().find('.root.timeline').removeClass('customisable-border');
        });

        var options = {
            $AutoPlay: true,

            $PauseOnHover: true,                               //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false

            $ArrowKeyNavigation: true,                          //Allows arrow key to navigate or not
            $SlideWidth: 1000,                                 //[Optional] Width of every slide in pixels, the default is width of 'slides' container
            //$SlideHeight: 300,                                  //[Optional] Height of every slide in pixels, the default is width of 'slides' container
            $SlideSpacing: 0,                                   //Space between each slide in pixels
            $DisplayPieces: 2,                                  //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: ($("#slider1_container").width() - 1000) /2,                                //The offset position to park slide (this options applys only when slideshow disabled).

            $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
         function ScaleSlider() {
             var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
             if (parentWidth){
                jssor_slider1.$ScaleWidth(parentWidth);
             }
             else{
                 window.setTimeout(ScaleSlider, 30);
             }
         }
         ScaleSlider();

         $(window).bind("load", ScaleSlider);
         $(window).bind("resize", ScaleSlider);
         $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>


</html>