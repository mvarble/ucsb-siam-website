<?php
	function write_header($title="") {
	
		$html  = "<!DOCTYPE \"html PUBLIC\">";
		$html .= "<html>";
		$html .= "<head>";
		$html .= "<title>SIAM {$title}</title>";
		$html .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-15\" />";
		$html .= "<link rel=\"icon\" type=\"image/x-icon\" href=\"images/siam_ucsb.ico\" />";
		$html .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheets/primary.css\">";
		$html .= "</head>";
		$html .= "<body>";
		$html .= "<div id=\"conteneur\">";
		$html .= "<div id=\"header\">";
		$html .= "<img src=\"images/siam_logo.jpg\" width=\"30%\">";
		$html .= "<br>University of California, Santa Barbara</div>";
		$html .= "<div id=\"haut\"><ul class=\"menuhaut\">";
		$html .= "<li><a href=\"index.php\">HOME</a></li>";
		
		// In the line below, change the link to whatever the current quarter link is
		$html .= "<li><a href=\"2019_spring.php\">THIS QUARTER</a></li>";

		$html .= "<li><a href=\"events.php\">PAST EVENTS</a></li>";
		$html .= "<li><a href=\"contact.php\">CONTACT US</a></li>";
		$html .= "<li><a href=\"http://www.siam.org\">SIAM HOMEPAGE</a></li>";
		$html .= "</ul></div>";

		echo $html;
	}

	function speaker_data($date="", $speaker="", $department="", $title="", $abstract="") {
		$html = "<tr><td><p><b>{$date}</b></p></td><td>";
		$html .= "<p><b>Speaker: {$speaker} ({$department})</b></p>";
		$html .= "<p><b>Title: {$title}</b></p>";
		$html .= "<p>{$abstract}</p></td></tr>";

		echo $html;
	}

	function speaker_tbd($date="") {
		$html = "<tr><td><p><b>{$date}</b></p></td>";
		$html .= "<td><p><b>Speaker: TBD</b></p></td></tr>";

		echo $html;
	}

	function organize($date="") {
		$html = "<tr><td><p><b>{$date}</b></p></td>";
		$html .= "<td><p><b>Organizational Meeting</b></p></td></tr>";

		echo $html;
	}

	function no_seminar($date="") {
		$html = "<tr><td><p><b>{$date}</b></p></td>";
		$html .= "<td><p><b>No Seminar</b></p></td></tr>";

		echo $html;
	}

	function write_footer() {

		$html  = "</div>";
		$html .= "</body></html>";

		echo $html;		
	}
?>