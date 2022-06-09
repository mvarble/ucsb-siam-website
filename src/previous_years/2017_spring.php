<?php include_once('scripts/functions.php'); ?>
<?php write_header("Spring 2017 Seminar"); ?>

<div id="cell">

	<h1>Spring 2017 - Seminar in Applied Mathematics</h1>
				
	<p>The UCSB student chapter of the Society for Industrial and Applied Mathematicians (SIAM) will host a weekly, interdisciplinary seminar to provide a forum for graduate students to discuss their research in an informal setting. 
This is a great outlet to polish you presentation skills in front of a general (technical) audience. 
</p>
	<p>If you are interested in giving a talk during this seminar, please send an email to <a href="mailto:siam@math.ucsb.edu?Subject=Spring Seminar" target="_top">siam@math.ucsb.edu</a> with a potential title, abstract, and when you would like to speak.</p>
	<br>
	<p>All are welcome to attend, cookies and coffee provided.</a></p>
	<br>
	<p><b>When</b>: Mondays from 2:00-3:00pm</p>
	<p><b>Where</b>: South Hall Room 6635</p>


	<table id="hor-minimalist-b">
	<tr>
	<td><h2>Date</h2></td>
	<td><h2>Spring 2017 Schedule</h2></td>
	</tr>

	<?php organize("April&nbsp;3rd"); ?>

	<?php speaker_data("April&nbsp;10th",
				"Jay Roberts",
				"Mathematics",
				"Affine Solutions to Magneto Hydrodynamical Equations",
				"The affine solutions to Euler's Equations posses a rich structure related to the geometry of embedded matrix spaces. 
Further, it has been shown that the class of Affine Solutions to Euler's Equations are a driving force for the full non-linear problem. 
In this talk we will review these solutions and then apply the techniques to the case when the fluids interact with a magnetic field. 
No knowledge of physics is required and this talk should be accessible to undergraduates." ); ?>

	<?php speaker_data("April&nbsp;17th",
				"Kyle Mylonakis",
				"Mathematics",
				"Atomistic to Continuum Coupling",
				"A practical question that can be asked about a solid material is will a single missing atom in the lattice cause the crystal to be more prone to forming cracks? What about if I add an extra atom to the lattice. 
These are examples of defects in a crystal lattice, and they are firmly multiscale problems. 
In this talk I will outline various modern theoretical techniques and challenges in coupling together atomistic models to their continuum counterparts, following the first few chapters of the review article \"Atomistic to Continuum Coupling\" by M. Luskin and C. Ortner, which aims to provide a formalism."); ?>

	<?php speaker_data("April&nbsp;24th",
				"David Nguyen",
				"Mathematics",
				"An Introduction to Fractal Geometry",
				" I like fractals because they are cool. If you don't believe me, just google it. 
As you probably have heard, fractals are objects with fractional dimensions, whatever that means. 
Surprisingly, there is no agreed upon definition of what a fractal really is as there are several different definitions of what dimension means. 
Recently, Michel Lapidus, Machiel van Frankenhuijsen, and others, have developed a new theory called Complex Dimensions based on complex analysis. 
This talk will be a brief introduction to the fascinating world of fractal geometry and complex dimensions"); ?>

	<?php speaker_data("May&nbsp;1st",
				"Christopher Gorman",
				"Mathematics",
				"On the Proof of Minimum Sobolev Norm Interpolation",
				"The Minimum Sobolev Norm is a technique to solve interpolation problems where one takes more basis functions than interpolation requirements. 
This results in an underdetermined system, and a unique solution is chosen to minimize a derivative norm. 
To obtain convergence from a sequence of approximations, the number of basis functions must be chosen inversely proportional to the mesh norm, a measure of the distance between interpolation points. 
In this talk we will work through some of the details of the proof."); ?>

	<?php speaker_data("May&nbsp;8th",
				"David Cattan",
				"Mathematics",
				"Recursive Frogs",
				"As a mathematician, I enjoy hearing about interesting problems.
As a computer scientist, I enjoy writing programs to solve problems.
In this talk, I will describe a small problem regarding frogs jumping between lily pads and the (Python) program I wrote to solve it.
This will lead into an introductory discussion of various algorithm designs such as recursion, breadth-first, and depth-first searches.
No knowledge of programming, algorithms, or amphibians will be assumed."); ?>

	<?php speaker_data("May&nbsp;15th",
				"Kyle Mylonakis",
				"Mathematics",
				"Towards an Atomistic Theory of Heat",
				"At the macroscopic scales it intuitively makes sense to talk about the temperature at a point, but when one zooms into the 
				scale of individual atoms, the definition of local temperature breaks down. In this talk I will discuss my research in 
				collaboration of Carlos and Xiantao Li at Penn State where we attempt to define and model temperature at the atomistic level."); ?>

	<?php speaker_data("May&nbsp;22nd",
				"Christopher Gorman",
				"Mathematics",
				"On the Proof of Minimum Sobolev Norm Interpolation, Part 2",
				"The Minimum Sobolev Norm is a technique to solve interpolation problems where one takes more basis functions than interpolation requirements. 
This results in an underdetermined system, and a unique solution is chosen to minimize a derivative norm. 
We will work through some additional parts of the proof that were only stated last time. 
If time allows, I will present results showing that we obtain convergence when interpolating a function on the Chebyshev nodes using only twice the number of basis functions as interpolation points."); ?>

	<?php no_seminar("May&nbsp;29th Memorial&nbsp;Day"); ?>

	<?php speaker_data("June&nbsp;5th",
				"David Cattan",
				"Mathematics",
				"Fluvial Landscapes: The Next Generation",
				"The Smith and Bretherton model is a family of partial differential equations that model the transport-limited case of erosion. 
			With the use of appropriate numerical schemes, simulations of these equations contain large and small scale dynamics crucial to the validity of the model. 
			Even with modern processing power and parallelism, these simulations take a significantly long time to run. 
			In this talk I will discuss these necessary scaling dynamics, the numerical schemes used to simulate these equations, 
			some minor changes that were made to the numerics to accelerate computations, methods to \"artificially\" generate these eroded surfaces, 
			and how these artificial surfaces altered our understanding of the small scale dynamics."); ?>
	
	<?php speaker_data("June&nbsp;12th",
				"Jon Kaminsky",
				"Mathematics",
				"On the Stochastic Closure Theory of Homogeneous Turbulence",
				"Turbulent flow is marked by small vortices, creating a swirling flow.  There has long been a question as to the effect of the Reynolds number on the flow, a question which the Stochastic Closure Theory (SCT) answers.  
				In this talk, I will give an overview of the SCT, with emphasis on the basic assumptions of the model and the computation of the structure functions.  I will then describe the fitting of the SCT to data obtained from the Variable Density Turbulence Tunnel.  
				This also gives surprising insight into the smoothness of the flow in the wind tunnel.  Finally, I will describe the relationship the SCT has with pipe flow and the Townsend-Perry constants.."); ?>
	

	</table>

</div>

	
<?php write_footer(); ?>
