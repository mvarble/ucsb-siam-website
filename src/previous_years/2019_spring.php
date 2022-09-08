<?php include_once('scripts/functions.php'); ?>
<?php write_header("Winter 2019 Seminar"); ?>

<div id="cell">

	<h1>Winter 2019 - Seminar in Applied Mathematics</h1>
				
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
	<td><h2>Spring 2019 Schedule</h2></td>
	</tr>

    <?php  organize("April&nbsp;1st"); ?>

    <?php speaker_data("April&nbsp;8th",
                    "Kyle Mylonakis",
                    "Math",
                    "Efficient Time Integration for Large or Infinite Linear SISO Systems",
                    "Large linear SISO systems are easy to write down, and come up in application throughout STEM. Unfortunately, accurate long time simulation is numerically taxing. By using Cauchy's formula we can write down exact forms of the solution operator which are numerically useful. In this talk I will outline the technique, its advantages, relationship to model order reduction, and its disadvantages. Time permitting, some simulations will be shown demonstrating the technique compared to more traditional techniques such as RK4." ); ?>

    <?php speaker_data("April&nbsp;15th",
                        "Ashwin Trisal",
                        "Math",
                        "C* Algebras and Dynamical Systems",
                        "A C*-algebra is commonly viewed as an algebra of operators on a Hilbert space. This talk traces some of the introductory fundamental concepts in the theory, such as abstract C*-algebras and the GNS constuction, and then looks at the C*-algebraic approach to dynamical systems." ); ?>
                        
    <?php speaker_data("April&nbsp;22nd",
    "",
    "",
    "",
    "" ); ?>

    <?php speaker_data("April&nbsp;29th",
    "",
    "",
    "",
    "" ); ?>

    <?php speaker_data("May&nbsp;6th",
    "",
    "",
    "",
    "" ); ?>

    <?php speaker_data("May&nbsp;13th",
    "",
    "",
    "",
    "" ); ?>

    <?php speaker_data("May&nbsp;20th",
    "",
    "",
    "",
    "" ); ?>

    <?php no_seminar("May&nbsp;27th"); ?>

    <?php speaker_data("June&nbsp;3rd",
    "",
    "",
    "",
    "" ); ?>




    <?php #no_seminar("May&nbsp;28th"); ?>

    <?php  #organize("June&nbsp;4th"); ?>

				
	</table>

</div>

	
<?php write_footer(); ?>
