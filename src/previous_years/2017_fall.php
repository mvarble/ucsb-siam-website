<?php include_once('scripts/functions.php'); ?>
<?php write_header("Fall 2017 Seminar"); ?>

<div id="cell">

	<h1>Fall 2017 - Seminar in Applied Mathematics</h1>
				
	<p>The UCSB student chapter of the Society for Industrial and Applied Mathematicians (SIAM) will host a weekly, interdisciplinary seminar to provide a forum for graduate students to discuss their research in an informal setting. 
This is a great outlet to polish you presentation skills in front of a general (technical) audience. 
</p>
	<p>If you are interested in giving a talk during this seminar, please send an email to <a href="mailto:siam@math.ucsb.edu?Subject=Spring Seminar" target="_top">siam@math.ucsb.edu</a> with a potential title, abstract, and when you would like to speak.</p>
	<br>
	<p>All are welcome to attend, cookies and coffee provided.</a></p>
	<br>
	<p><b>When</b>: Mondays 2-3</p>
	<p><b>Where</b>: South Hall 6635</p>


	<table id="hor-minimalist-b">
	<tr>
	<td><h2>Date</h2></td>
	<td><h2>Fall 2017 Schedule</h2></td>
	</tr>

	<?php organize("October&nbsp;2nd"); ?>

	<?php speaker_data("October&nbsp;9th South&nbsp;Hall&nbsp;6635",
				"Jim Hateley",
				"Mathematics",
				"FGA for Seismic Imaging",
				"In recent works the frozen Gaussian approximation (FGA) has been proven analytically and verified numerically to be an efficient solver high frequency wave propagation. In this talk, I will outline the FGA for the elastic wave equation in an isotropic medium assuming high frequency wave propagation and give a comparison it to other well-known methods.  Motivation and applications in seismic imaging will be presented." ); ?>
	
	<?php speaker_data("October&nbsp;16th South&nbsp;Hall&nbsp;6635",
				"Chris Gorman",
				"Mathematics",
				"Rank-Revealing Factorizations and Randomization",
				"Matrix factorizations are at the heart of numerical linear algebra. Deterministic algorithms work well when the entire matrix can fit on one processor. Communication costs, though, slow the total runtime of these algorithms for large matrices, as memory transfer frequently rivals floating point operations in this setting. Recent work in factorization algorithms have shown that randomization can help lower the overall communication cost while maintaining accurate representations. We will discuss recent work on computing matrix factorizations using random samplings of the range." ); ?>
	
	<?php speaker_data("October&nbsp;23rd South&nbsp;Hall&nbsp;6635",
				"Kyle Mylonakis",
				"Mathematics",
				"From Newton to Lagrange and Hamilton",
				"In this introductory talk, I will detail the connections between the three most common formalisms for classical mechanics: The Newtonian, Lagrangian and Hamiltonian formulations. This talk is intended for first and second year graduate students in STEM wishing to get a quick introduction to analytical mechanics." ); ?>
	
	<?php speaker_data("October&nbsp;30th South&nbsp;Hall&nbsp;6635",
				"Ben Gross",
				"Mathematics",
				"Numerical Solution to Stokes Equations on 2-Manifolds",
				"N/A" ); ?>

	<?php speaker_data("November&nbsp;6th South&nbsp;Hall&nbsp;6635",
					"Matthew Brown",
					"Physics",
					"Introduction to Rigorous Feynman Path Integrals",
					"Matthew will give a pedagogical introduction to the rigorous theory of real-time Feynman path integrals in terms of oscillatory integrals on Hilbert spaces.  Time permitting, I will discuss the Feynman-Ito formula, an oscillatory version of the Feynman-Kac formula.  The talk will be motivated by problems in quantum mechanics, but no knowledge of quantum mechanics will be assumed." ); ?>
	
	<?php speaker_data("November&nbsp;13th South&nbsp;Hall&nbsp;6635",
					"Jay Roberts",
					"Mathematics",
					"TBA",
					"TBA" ); ?>
	
	<?php speaker_data("November&nbsp;20th South&nbsp;Hall&nbsp;6635",
					"TBA",
					"TBA",
					"TBA",
					"TBA" ); ?>

	<?php speaker_data("November&nbsp;27th South&nbsp;Hall&nbsp;6635",
						"TBA",
						"TBA",
						"TBA",
						"TBA" ); ?>

	<?php speaker_data("December&nbsp;4th",
							"TBA",
							"TBA",
							"TBA",
							"TBA" ); ?>
	</table>

</div>

	
<?php write_footer(); ?>
