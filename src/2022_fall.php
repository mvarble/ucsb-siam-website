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
    "Developed by P.L Lions in a series of papers, the Concentration Compactness Principle characterizes the convergence behavior of measures in L1. It has many important applications in problems arising in Calculus of Variations and Differential Equations. In this talk we will go over the main ideas of the principle." ); ?>        
    
    <?php speaker_data("October&nbsp;17th",
    "Joel Pion",
    "Math",
    "Quantum Unconstrained Binary Optimization",
    "In this talk I will talk about problems we can solve on a quantum annealing device. We will treat the quantum annealer itself as a black box and will only consider the problem it solves, that of Quadratic Unconstrained Binary Optimization (QUBO). The main focus of the talk will be about how to take other problems we care about (mostly graph algorithm type problems) and convert them to QUBOs. The algorithm we will spend the most time on will be the Chinese Postman Problem (which is similar to the Traveling Salesman Problem)." ); ?>
		
    <?php speaker_data("October&nbsp;24th",
    "Rafael Lainez Reyes",
    "Math",
    "Numerics and the Hartree-Fock Equations",
    "In this talk we will go over some of the numerical complications that arise when trying to obtain approximations to the Hartree-Fock equations. While this set of equations will be the focus of the talk, some of the ideas have extensions to other nonlinear problems." ); ?>

    <?php speaker_data("October&nbsp;31th",
    "Micah Pedrick",
    "Math",
    "Dissintigration of Measures",
    "" ); ?>

    <?php speaker_data("November&nbsp;7th",
    "Christian Hong",
    "Math",
    "The Gagliardo-Nirenberg Inequality",
    "The Gagliardo-Nirenberg Inequality is a generalization of the usual Sobolev inequality. In this talk, we will focus on applications of the Gagliardo-Nirenberg Inequality to some nonlinear PDEs. In particular, we will discuss a regularity result for the Inviscid Burger's Equation and the Nonlinear Schrodinger Equation." ); ?>

    <?php speaker_data("November&nbsp;14th",
    "Zach Wagner",
    "Math",
    "Relativistic Quantum Mechanics Through Applications of Dirac Theory",
    "The Dirac Operator describes the motion of a relativistic particle. Its properties lead to interesting mathematical problems in relativistic quantum mechanics. In particular, one is led to study energy functionals analogous to the Hartree-Fock energy functional. We will discuss one such relativistic energy functional and methods which have been used to describe its critical points and derive their non-relativistic limit. We will then discuss extensions of these results to electrons in a self-generated magnetic field." ); ?>
		
    <?php no_seminar("November&nbsp;21st"); ?>
    
    <?php speaker_data("November&nbsp;28th",
    "Jimmie Adriazola",
    "Math",
    "Applications of the Riemann-Hilbert Problems",
    "Riemann-Hilbert problems arise frequently in many different areas of applied analysis. During this talk, I will give a standard formulation of the Riemann-Hilbert problem and connect the framework with problems involving computation of special functions, the theory of orthogonal polynomials, and the inverse scattering transform for integrable equations." ); ?>
    
    <?php no_seminar("December&nbsp;5th"); ?>
    
    <?php #no_seminar("May&nbsp;28th"); ?>

    <?php  #organize("June&nbsp;4th"); ?>

				
	</table>

</div>

	
<?php write_footer(); ?>
