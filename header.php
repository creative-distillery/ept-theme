<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EPT
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php
   header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days) ?>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<?php wp_head(); ?>
<script src="https://use.typekit.net/ncr8rkn.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body>
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-88583268-3', 'auto');
 ga('send', 'pageview');

</script>

<div class="wrap-push lorem">
	<div class="mobile-nav visible-xs">
		<div class="row visible-xs">
			<div class="visible-xs" id="nav-icon3">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
    </div>
	<div class="mobile visible-xs">
		<ul>
			<li><a href="/ashley-w-pittman">Ashley W. Pittman</a></li>
			<li class="nav-drop"><a>Benefits of a Trust<div class="nav-dropdown">
				<ul>
			<li class="nav-hover"><a href="/patients">Patients</a></li><li class="nav-hover"><a href="/physicians">Physicians</a></li><li class="nav-hover"><a href="/cryobanks">Cryobanks</a></li>
				</ul>
			</div></a></li>
			<li><a href="/common-questions">Common Questions</a></li>
			<li><a href="/get-started/">Begin Your Trust</a></li>

		</ul>
	</div>
    <header>
	    <div class="container full-width">

        	<div class="five columns">
	        	<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/css/img/ept-logo.png"></a>
	        </div>
	        <div class="seven columns">
		        <nav class="main-nav">
			        <ul>
				    	<li><a href="/ashley-w-pittman">Ashley W. Pittman</a></li>
				    	<li>Benefits of a Trust
				    	<div class="nav-dropdown">
					    	<ul><li class="nav-hover"><a href="/patients">Patients</a></li><li class="nav-hover"><a href="/physicians">Physicians</a></li><li class="nav-hover"><a href="/cryobanks">Cryobanks</a></li></ul></div>
				    	</li>

				    	<li><a href="/common-questions">Common Questions</a></li>
				    	<li><a href="/get-started/">Begin Your Trust</a></li>
              <li><a href="/blog/">Blog</a></li>
			        </ul>
		        </nav>
	        </div>
	    </div>
    </header>
    <div class="main-wrapper">
