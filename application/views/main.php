<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SIGuES.org</title>

		<!-- CSS -->
		<link rel="stylesheet" href="<?=base_url()?>css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?=base_url()?>css/social-icons.css" type="text/css" media="screen" />

		<!-- THEME -->
		<link rel="stylesheet" href="<?=base_url()?>skins/paper-blue/style.css" type="text/css" media="screen" />

		<!-- JS -->
		<script type="text/javascript" src="<?=base_url()?>js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/jquery-ui-1.9.2.custom.min.js"></script>
<link type="text/css" href="<?=base_url()?>css/custom-theme/jquery-ui-1.9.2.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="<?=base_url()?>js/easing.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/quicksand.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/custom.js"></script>
                <script type="text/javascript" src="<?=base_url()?>js/jquery.validate.min.js"></script>

		<!--[if IE]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- ENDS JS -->

		<!--[if IE 6]>
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
	      		/* EXAMPLE */
	      		//DD_belatedPNG.fix('*');
	    	</script>
		<![endif]-->

		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="<?=base_url()?>css/superfish.css" />
		<link rel="stylesheet" media="screen" href="<?=base_url()?>css/superfish-left.css" />
		<script type="text/javascript" src="<?=base_url()?>js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->

		<!-- poshytip -->
		<link rel="stylesheet" href="<?=base_url()?>js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="<?=base_url()?>js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="<?=base_url()?>js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->

		<!-- Tweet -->
		<link rel="stylesheet" href="<?=base_url()?>css/jquery.tweet.css" media="all"  type="text/css"/>
		<script src="<?=base_url()?>js/tweet/jquery.tweet.js" type="text/javascript"></script>
		<!-- ENDS Tweet -->

		<!-- Fancybox -->
		<link rel="stylesheet" href="<?=base_url()?>js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?=base_url()?>js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<!-- ENDS Fancybox -->

		<!-- jflickrfeed -->
		<link href="<?=base_url()?>css/jflickrfeed.css" rel="stylesheet" type="text/css" media="screen" />
		<script src="<?=base_url()?>js/jflickrfeed/jflickrfeed.js"></script>

		<link href="<?=base_url()?>js/jflickrfeed/colorbox/colorbox.css" rel="stylesheet" type="text/css" media="screen" />
		<script src="<?=base_url()?>js/jflickrfeed/colorbox/jquery.colorbox.js"></script>
		<!-- ENDS jflickrfeed -->

		<!-- prettyPhoto -->
		<script type="text/javascript" src="<?=base_url()?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="<?=base_url()?>js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->

		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

		<!-- Nivo slider -->
		<link rel="stylesheet" href="<?=base_url()?>css/nivo-slider.css" type="text/css" media="screen" />
		<script src="<?=base_url()?>js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- ENDS Nivo slider -->

		<!-- tabs -->
		<link rel="stylesheet" href="<?=base_url()?>css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?=base_url()?>js/tabs.js"></script>
  		<!-- ENDS tabs -->

		<!--[if IE 7]>
			<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>css/ie7-hacks.css" />
		<![endif]-->
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>css/ie8-hacks.css" />
		<![endif]-->
		<!-- ENDS CSS -->

	</head>
	<body>

	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- SIDEBAR -->
                <?php
                    $this->load->view("sidebar");
                ?>
		<!-- ENDS SIDEBAR -->

		<!-- MAIN -->
		<div id="main">

			<div class="home-quotes">Unlimited skins options with its "Skin system" allows you to create new styles for your theme.</div>

			<!-- Slider -*->
			<div id="slider">
			    <a href="http://luiszuno.com"><img src="images/1.png" alt="" /></a>
			    <a href="http://luiszuno.com"><img src="images/2.png" alt="" title="This a text caption. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas." /></a>
			    <a href="http://luiszuno.com"><img src="images/3.png" alt=""/></a>
			</div>
			<!-- ENDS Slider -->

			<!-- CONTENT -->
			<div id="content">
				<!-- PAGE CONTENT -->
				<div id="page-content">

					<!-- feature blocks -->
                                        <?php
                                        $x=0;
                                        foreach($titulo as $tit) {
                                        ?>
                                        <div class="post">
						<h1><?=$titulo[$x]?></h1>
						<!-- meta -->
						<ul class="meta">
                                                    <li><?=$subtitulo[$x]?></li>
						</ul>
						<!-- ENDS meta -->
						<div class="the-excerpt">
                                                    <?=$contenido[$x]?>						</div>
<!--						<a href="single.html" class="link-button"><span>Read more</span></a> -->
					</div>
                                        <?php 
                                        
                                        $x++;
                                        } ?>
					<!-- ENDS feature blocks -->





				</div>
				<!-- ENDS PAGE-CONTENT -->

			</div>
			<!-- ENDS CONTENT -->

		</div>
		<!-- ENDS MAIN -->
	</div>
	<!-- ENDS WRAPPER -->

	<!-- FOOTER -->
	<div id="footer">
		<!-- FOOTER-WRAPPER -->
		<div id="footer-wrapper">
			<!-- footer-cols -->
			<ul id="footer-cols">
				<li class="col clear-col">
					<h6>About the theme</h6>
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
				</li>
				<li class="col">
					<h6>Categories</h6>
					<ul>
						<li><a href="#">Webdesign</a></li>
						<li><a href="#/">Wordpress</a></li>
						<li><a href="#">Photo</a></li>
						<li><a href="#">Code</a></li>
						<li><a href="#">Web design</a></li>
						<li><a href="#/">Marketplace</a></li>
						<li><a href="#">Writting</a></li>
						<li><a href="#">Drawings</a></li>
					</ul>
				</li>
				<!-- Flickr -->
				<li class="col">
					<h6>Flickr stream</h6>
					<ul id="flickr-stream" class="thumbs">
					</ul>
				</li>
			<!-- ENDS Flickr -->
			</ul>
			<!-- ENDS footer-cols -->
			<!-- footer-bottom -->
			<div id="footer-bottom">
				<div id="bottom-left">
					&copy; 2011 Ansimuz. All Rights Reserved.  <a href="http://themeforest.net/user/Ansimuz?ref=ansimuz">View portfolio</a>
				</div>
				<div id="bottom-right">To top</div>
			</div>
			<!-- ENDS footer-bottom -->
		</div>
		<!-- ENDS FOOTER-WRAPPER -->
	</div>
	<!-- ENDS FOOTER -->


	</body>
</html>