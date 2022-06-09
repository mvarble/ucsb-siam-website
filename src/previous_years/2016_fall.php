<?php include_once('scripts/functions.php'); ?>
<?php write_header("Fall 2016 Seminar"); ?>

<div id="cell">

	<h1>Fall 2016 - Seminar in Applied Mathematics</h1>
				
	<p>The UCSB student chapter of the Society for Industrial and Applied Mathematicians (SIAM) will host a weekly, interdisciplinary seminar to provide a forum for graduate students to discuss their research in an informal setting. 
This is a great outlet to polish you presentation skills in front of a general (technical) audience. 
</p>
	<br>
	<p>All are welcome to attend, cookies and coffee provided.</a></p>
	<br>
	<p><b>When</b>: Wednesdays from 3:00-4:00pm</p>
	<p><b>Where</b>: South Hall Room 4607b</p>

	<table id="hor-minimalist-b">
	<tr>
	<td><h2>Date</h2></td>
	<td><h2>Fall 2016 Schedule</h2></td>
	</tr>

	<?php organize("September&nbsp;28th"); ?>

	<?php speaker_data("October&nbsp;5th", 
		"David Cattan", 
		"Mathematics", 
		"Fractal Interpolation",
		"Normal methods of interpolation involve finding differentiable curves that best match a set of data points. Fractal Interpolation is a method of finding continuous, nowhere differentiable curves (such as fractal Brownian motions) that best fit a set of data. In this talk, I will discuss the theory behind fractal interpolation, discuss how one can construct such a function (numerically), and how I have used this technique in modeling eroded surfaces."); ?>

	<?php speaker_data("October&nbsp;12th",
		"Kyle Mylonakis",
		"Mathematics",
		"Mathematical Description of Single and Multipartite Quantum Systems",
		"In this introductory talk we will introduce the necessary mathematical structure to talk about electronic spectra of quantum systems. We will begin in the spin free single particle setting and give a overview of the rich mathematical structure present in this basic case. In this setting it is possible to give a precise mathematical meaning to a bound versus scattered state of the Hydrogen atom. We will then proceed to discuss multipartite systems mathematically and describe the formalism of density matrices and second quantization, the two primary methods of understanding many body quantum systems."); ?>

	<?php speaker_data("October&nbsp;19th",
		"Chris Gorman",
		"Mathematics",
		"HSS Representation via Randomized Sampling",
		"Recent work on randomized algorithms in numerical linear algebra have allowed for novel approaches on matrix factorizations to be applied to structured matrices. The Hierarchically Semi-Separable representation is one factorization of a structured matrix that allows for multiple algebraic operations to be performed in linear time. This talk will review HSS matrices before showing how to factor a matrix with randomized sampling. Fast matrix-vector multiplication allows this compression to be computed in linear time."); ?>

	<?php speaker_data("October&nbsp;26th",
		"Christian Bueno",
		"Mathematics",
		"Algebraic Geometry, Groebner Basis and Robots",
		"Solutions to systems of polynomial equations are central to algebraic geometry, yet actually going about computing solutions and related quantities can at times be tricky. Though there is plenty of purely mathematical motivation to study such problems, it turns out that many robotic linkages can have their configuration space and inverse kinematics described in this language. To see how some of these problems are tackled, we'll look at monomial orders, the multi-polynomial multi-variate Euclidean algorithm, and Groebner bases."); ?>

	<?php speaker_data("November&nbsp;2nd",
		"Jay Roberts",
		"Mathematics",
		"Affine Solutions to Incompressible Euler Equations",
		"We derive Euler's Equations for incompressible fluids from a conservation of volume standpoint. The result is then interpreted as a geodesic flow in the space of diffeomorphisms of our reference domain through Arnold's Theorem. We then restrict the class of solutions to a finite dimensional subspace of Affine Solutions, along which  the equations reduce to a nonlinear ODE which we can show results in global solutions to the Euler Equations. Recent results in the compressible case suggest that these affine solutions in fact form a sort of stable manifold of solutions. That is, certain nonlinear perturbations of these solutions have been shown to have global solutions and remain, in the appropriate function space, near the affine solution manifold."); ?>

	<?php organize("November&nbsp;9th"); ?>

	<?php speaker_data("November&nbsp;16th",
		"John Kaminsky",
		"Mathematics",
		"Reynolds Number Dependence of the Structure Functions in Homogeneous Turbulence",
		"A major tool in the study of high Reynolds number, or turbulent, flow is the wind tunnel. The Variable Density Turbulence Tunnel at the Max Planck Institute for Dynamics and Self-Organization has produced some of the highest Taylor Reynolds number flows ever recorded. I will give an overview of my research, which examines the relationship between the experimental data from this wind tunnel with the Kolmogorov-Obukhov Theory of Turbulence, as viewed through the lens of velocity difference structure functions, and look at some potential results of this relationship. Some knowledge of probability will be beneficial."); ?>

	<?php no_seminar("November&nbsp;23rd"); ?>

	<?php speaker_data("November&nbsp;30th",
		"David Smith",
		"Chemical Engineering",
		"Multiscale Physical Modeling of Nanoparticle-Membrane Interactions",
		"The thermodynamics and kinetics of nanoparticle interactions with cellular membranes has momentous consequences for nanotechnology with biological, toxicological, and pharmacological applications. The pervasiveness of nanoparticles in therapeutics, foods and beverages, cooking products, packaging, cosmetics and sunscreens, and agriculture, amongst many other areas, coupled with the lack of fundamental understanding of the interplay of particle design effects like size, surface chemistry, shape, and softness on product performance, underscores the importance of a biophysical approach to nanoparticle-membrane interactions. Here, we use a hybrid approach consisting of classical (particle-based) molecular dynamics simulation and continuum (field-based) elastic membrane theory to characterize the behavior of homogeneous, spherical, hard nanoparticles with model lipid bilayer membranes. Using particle-based simulations, we delineate unique mechanistic modes of particle-membrane interaction in the space of nanoparticle size (0.5 to 10 nm) and chemistry (hydrophobic, hydrophilic, and interfacially active). Using continuum theory, we provide a simplified physical description and leverage simulation results for a generalized predictive model of nanoparticle-membrane interactions. In this engineering-based talk, we also place emphasis on the theoretical and numerical techniques employed in the overall approach, including numerical interpolation, differentiation, and integration, functionals, vector calculus, and Fourier Transforms. This study has interesting implications for a wide range of organic and inorganic nanoparticles, and also for biomacromolecules like membrane proteins."); ?>

	</table>

</div>

	
<?php write_footer(); ?>
