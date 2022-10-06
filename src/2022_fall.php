<?php include_once('scripts/functions.php'); ?>
<?php write_header("Fall 2022 Seminar"); ?>

<div id="cell">

	<h1>Fall 2022 - Seminar in Applied Mathematics</h1>
				
	<p>The UCSB student chapter of the Society for Industrial and Applied Mathematicians (SIAM) will host a weekly, interdisciplinary seminar to provide a forum for graduate students to discuss their research in an informal setting. 
This is a great outlet to polish your presentation skills in front of a general (technical) audience. 
</p>
	<p>If you are interested in giving a talk during this seminar, please send an email to <a href="mailto:siam@math.ucsb.edu?Subject=Fall Seminar" target="_top">siam@math.ucsb.edu</a> with a potential title, abstract, and when you would like to speak.</p>
	<br>
	<p>All are welcome to attend, cookies and coffee provided.</a></p>
	<br>
	<p><b>When</b>: Mondays 2-3</p>
	<p><b>Where</b>: South Hall 6635</p>


	<table id="hor-minimalist-b">
	<tr>
	<td><h2>Date</h2></td>
	<td><h2>Fall 2022 Schedule</h2></td>
	</tr>

    <?php  organize("September&nbsp;26th"); ?>
    
    <?php speaker_data("October&nbsp;10th",
    "Rafael Lainez Reyes",
    "Math",
    "Concentration Compactness",
    "TDB" ); ?>        
    
    <?php speaker_data("October&nbsp;17th",
    "Dorde Nikolic",
    "Math",
    "TBD",
    "TBD" ); ?>

    <?php speaker_data("October&nbsp;24th",
    "Joel Pion",
    "Math",
    "An Introduction to Quantum Annealing",
    "TBD" ); ?>

    <?php speaker_data("October&nbsp;31th",
    "Micah Pedrick",
    "Math",
    "Dissintigration of Measures",
    "TBD" ); ?>

    <?php speaker_data("November&nbsp;7th",
    "Christian Hong",
    "Sobolev Inequality",
    "Math",
    "TBD" ); ?>

    <?php speaker_data("November&nbsp;14th",
    "Zach Wagner",
    "Math",
    "Dirac's Equation: Ground States and Nonrelativistic Limits",
    "TBD" ); ?>
		
    <?php no_seminar("November&nbsp;21st"); ?>
    
    <?php speaker_data("November&nbsp;28th",
    "Jimmie Adriazola",
    "Math",
    "Solitons",
    "TBD" ); ?>
    
    <?php speaker_data("December&nbsp;5th",
    "Charles Kulick",
    "Math",
    "Agent Based Modeling",
    "TBD" ); ?>
    
    <?php #no_seminar("May&nbsp;28th"); ?>

    <?php  #organize("June&nbsp;4th"); ?>

				
	</table>

</div>

	
<?php write_footer(); ?>
