<?php
	
$video = <<<video

<div class="mobile-nav-btn"></div>
	<header id="masthead" class="site-header" role="banner">
		<div class="inner">
			<h1>Vidéos</h1>
			<ul class="header-social-icons">
				<li><a href="https://www.facebook.com/teamknacc" target="blank"><span class="icon-knacc-facebook"></span></a></li>
				<li><a href="http://twitter.com/teamknacc" target="blank"><span class="icon-knacc-twitter"></span></a></li>
				<li><a href="http://pinterest.com/" target="blank"><span class="icon-knacc-pinterest"></span></a></li>
				<li><a href="http://vimeo.com/" target="blank"><span class="icon-knacc-vimeo"></span></a></li>
				<li><a href="http://instagram.com/" target="blank"><span class="icon-knacc-instagram"></span></a></li>
			</ul>	
		</div>
	</header> 

<div id="primary" class="content-area portfolio-template-index">
	<main id="main" class="site-main" role="main">						
		<div class="portfolio-wrapper">
			<ul class="portfolio-list portfolio-masonry " data-columns="4">
				<li id="post-129" class="portfolio-item portfolio-post-format is-loading"><a href="index.php?page=showVideo&id=1"><img src="images/roman-jusdado-radio-app-1.jpg" alt="Radio App"><header class="entry-header"><h1 class="title">Radio App</h1></header></a></li>
				<li id="post-155" class="portfolio-item portfolio-post-format-video is-loading"><a href="index.php?page=showVideo&id=2"><img src="images/yumyum-parallel-parking.jpg" alt="Parallel Parking"><header class="entry-header"><h1 class="title">Parallel Parking</h1></header></a></li>
				<li id="post-32" class="portfolio-item portfolio-post-format-video is-loading"><a href="index.php?page=showVideo&id=3"><img src="https://i.ytimg.com/vi/HK1vCyiH2mM/maxresdefault.jpg" alt="Video"><header class="entry-header"><h1 class="title">Biga*Ranx - DJ for the Night</h1></header></a></li>
				<li id="post-77" class="portfolio-item portfolio-post-format-audio is-loading"><a href="index.php?page=showVideo&id=4"><img src="images/roman-jusdado-cassette-1024x768.jpg" alt="Immortal Beats &#8211; Ooh Wee"><header class="entry-header"><h1 class="title">Immortal Beats &#8211; Ooh Wee</h1></header></a></li>
				<li id="post-132" class="portfolio-item portfolio-post-format is-loading"><a href="index.php?page=showVideo&id=5"><img src="images/roman-jusdado-drygoods.jpg" alt="Drygoods iOS Icon"><header class="entry-header"><h1 class="title">Drygoods iOS Icon</h1></header></a></li>
				<li id="post-131" class="portfolio-item portfolio-post-format is-loading"><a href="index.php?page=showVideo&id=6"><img src="images/roman-jusdado-vintage-radio-illo.jpg" alt="Vintage Radios"><header class="entry-header"><h1 class="title">Vintage Radios</h1></header></a></li>
				<li id="post-75" class="portfolio-item portfolio-post-format-image is-loading"><a href="images/guitar-shot.jpg" data-lightbox="guitar-shot-4.html"><img src="images/guitar-shot.jpg" alt="Guitar Illustration"><header class="entry-header"><h1 class="title">Guitar Illustration</h1></header></a></li>
			</ul>										
		</div>
	</main>

	</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<a href="http://demo.knacc.co/">Show + Tell</a> by <a href="http://knacc.co/" target="blank">Knacc.</a>
				<span class="sep"> | </span> &copy; Copyright 2015
			</div>
		</footer>
</div>
video;

templateSite($video);

?>