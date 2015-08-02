<?php

	include("config.php");
	
	if (isset($_GET["page"])) {
		if ($_GET["page"] == "accueil") { accueil(); }
		else if ($_GET["page"] == "videos") { videos(); }
		else if ($_GET["page"] == "showVideo") { showVideo(); }
		} else { accueil(); }

	function accueil() {
		include("module/page_site_accueil.php");
	}

	function videos() {
		include("module/page_videos.php");
	}

	function showVideo() {
		include("module/page_show_video.php");
	}

?>