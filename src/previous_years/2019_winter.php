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
	<td><h2>Winter 2019 Schedule</h2></td>
	</tr>

    <?php  organize("January&nbsp;7th"); ?>

    <?php speaker_data("January&nbsp;14th",
                    "Rafael Lainez Reyes",
                    "Math",
                    "Statistical Parameter Inversion",
                    "Given two Banach Spaces X and Y, a map F from X to Y and a point y in Y, an inverse problem consists in solving the equation F(x)=y. In this talk we'll go over the Bayesian approach for inverse problems over R^n with additive noise." ); ?>

    <?php no_seminar("January&nbsp;21st"); ?>

    <?php speaker_data("January&nbsp;28th",
                    "Matthew Varble",
                    "Math",
                    "Deriving the Particle Filter",
                    "I will give a general overview of the methods people use to construct filtering equations (i.e. equations involving the law of a conditional distribution) for pairs of stochastic processes. Then, by using said methods on a simple model, we will derive integral equations for the conditional distributions. These equations induce a flow on measures, which we can sequentially approximate with Monte Carlo techniques. The resulting algorithm which gives us a flow of approximating distributions is what is referred to as a Particle Filter." ); ?>

    <?php speaker_data("February&nbsp;4th",
                    "Christian Bueno",
                    "Math",
                    "Clustering and the Mean Shift Algorithm",
                    "This talk will start off by introducing problem of grouping similar data together, an area commonly known as clustering. We'll first look at the classical k-means algorithm and describe some of the strengths and weaknesses of the technique. Then we will shift our attention to kernel density estimation and the elegant \"mean shift algorithm\" as a way around some of those obstacles. Finally we'll look at some interesting applications in computer vision and discuss some potential applications to manifold denoising.  " ); ?>
                        
    <?php speaker_data("February&nbsp;11th",
                    "Jay Roberts",
                    "Math",
                    "Deep Learning as Flows for Inverse Problems",
                    "Deep Neural Networks (DNNs) have shown remarkable success in solving long standing computer vision problems. However; the appropriate setting to analyze what they are doing or how to apply them to new inverse problems remains unclear. In this talk I will first present connections between DNNs and dynamical systems and how this can help us interpret different architectures. Then I will present a strategy for turning inverse problems in seismology into computer vision like problems where DNNs can be used. " ); ?>

    <?php no_seminar("February&nbsp;18th"); ?>

    <?php speaker_data("February&nbsp;25th",
                    "Professor Kieron Burke",
                    "UC Irvine Chemistry",
                    "Adventures with machine learning in electronic structure theory",
                    "Machine learning is transforming many aspects of human activity, including math and the physical sciences.
                    I will describe my 8 years of experience, trying to use it to improve the speed and accuracy of electronic structure calculations (density functional theory) that play a huge role in many branches of science, including materials,
                    chemistry, condensed-matter physics,  etc.  Papers are available from my website, http://dft.uci.edu." ); ?>

    <?php speaker_data("March&nbsp;4th",
                    "Chris Gorman",
                    "Math",
                    "Stopping Criteria for Low-Rank Approximations",
                    "Low-rank matrices show up in a variety of contexts and compressing them allows for faster algorithms. Deterministic algorithms' large communication cost (especially for matrices on distributed memory machines) have lead recent work to focus on randomized algorithms, where much of the work is matrix-matrix multiplication. Adaptive algorithms are necessary because in practice the numerical rank is not known. We present results for a stochastic estimate which accurately estimates the Frobenius norm of a matrix. From here we develop a relative error stopping criterion." ); ?>

    <?php speaker_data("March&nbsp;11th",
                    "Sandeep Kumar",
                    "BCAM - Math",
                    "Evolution of the Vortex Filament Equation(VFE) for some Polygonal curves",
                    "The VFE describes the self-induced motion of a vortex filament in three dimensions and some of its explicit solutions are a line, circle and, helix. In their recent work on regular planar polygons, de la Hoz and Vega proved that the dynamics of a circle is not stable. In this talk, through some numerical experiments, we will try to understand this statement and see how it holds in the case of a helix and a line as well. Also, with some algebraic results, we will see how the approximation of these curves through polygonal lines is related to the optical phenomena \"Talbot effect\"." ); ?>

    <?php #no_seminar("May&nbsp;28th"); ?>

    <?php  #organize("June&nbsp;4th"); ?>

				
	</table>

</div>

	
<?php write_footer(); ?>
