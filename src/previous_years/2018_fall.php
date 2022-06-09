<?php include_once('scripts/functions.php'); ?>
<?php write_header("Fall 2018 Seminar"); ?>

<div id="cell">

	<h1>Fall 2018 - Seminar in Applied Mathematics</h1>
				
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
	<td><h2>Fall 2018 Schedule</h2></td>
	</tr>

    <?php  organize("October&nbsp;1st"); ?>

    <?php speaker_data("October&nbsp;8st",
                    "Kyle Mylonakis",
                    "Mathematics",
                    "Model Order Reduction",
                    "Solving very large systems of ODE's is usually expensive. In most cases, the dimensionality of the input space (control) and the dimensionality of the observed output of the system are much much smaller than the space in which the ODE evolves. A natural question then arises; can I replace my large complicated system with another that has approximately the same output behavior for a given input?" ); ?>

    <?php no_seminar("October&nbsp;15th"); ?>

    <?php speaker_data("October&nbsp;22nd",
                    "Jay Roberts",
                    "Mathematics",
                    "Convolutional Neural Networks and Some Inverse Problems",
                    "Recent advances in deep learning have solved many long standing problems in computer vision. In this talk I will walk through the beginnings of neural networks and some necessary vocabulary. Then I will discuss convolutional neural networks and some recent mathematical advances in their understanding. These ideas will be put together to show how you can approach inverse problems by piggy backing off of these powerful algorithms from computer vision. If time permits I will go over some examples of what neural networks \"see\". " ); ?>

    <?php speaker_data("October&nbsp;29th",
                    "Jim Hateley",
                    "Mathematics",
                    "The Frozen Gaussian Approximation",
                    "The frozen Gaussian approximation (FGA) has been proven analytically and verified numerically to be an efficient solver for high frequency wave propagation. In this talk, I give a quick history of the FGA, outline the FGA for the elastic wave equation assuming high frequency wave propagation and give a comparison to other well-known methods.  Motivation and applications in seismic tomography will be presented." ); ?>

    <?php speaker_data("November&nbsp;5th",
                    "Matt Varble",
                    "Mathematics",
                    "Stochastic Filtering",
                    "
                    In this talk, I will discuss the mathematical formulation of the stochastic filtering problem. Following this, I will show examples of the specific linear Gaussian case, commonly referred to as the Kalman Filter. I will then show how basic approximations can lead to an interesting framework in more general cases. I will not assume the audience has any background in probability theory, but I will probably say \"sigma algebra\" quite a bit. " ); ?>

    <?php no_seminar("November&nbsp;12th"); ?>

    <?php speaker_data("November&nbsp;19th",
                    "Christian Bueno",
                    "Mathematics",
                    "Kernel Methods and Unsupervised Learning",
                    "In this talk I'll introduce positive definite kernels, feature maps, Mercer's theorem and Reproducing Kernel Hilbert Spaces.  In the context of machine learning, kernels provide an efficient way of implicitly exploiting potentially infinite dimensional geometry without explicitly needing to work with infinite dimensional calculations. One application of this so-called \"kernel trick\" is to augment unsupervised learning algorithms such as PCA. In this talk I hope to elucidate some of these notions and demonstrate some uses. " ); ?>

    <?php speaker_data("November&nbsp;26th",
                    "Kyle Mylonakis",
                    "Mathematics",
                    "Fast Convolution and the Sum of Exponentials Approximation",
                    "
                    Convolutions come up frequently in differential equations. In particular if one has an integrodifferential equation with a convolution in time present standard numerical methods result in O(n^2) in the number of total time steps algorithmic complexity. It turns out that if one is willing to approximate the convolutional kernel as a sum of (possibly complex) exponential functions it is possible to perform the convolution in O(1) computations. This talk explains this fact and outlines a numerical algorithm to efficiently compute such an approximation (at least for a certain class of bandlimited or smooth functions)." ); ?>

    <?php speaker_data("December&nbsp;3rd",
                    "Chris Goreman",
                    "Mathematics",
                    "Proofs of Minimum Sobolev Norm Convergence",
                    "Minimum Sobolev norm convergence proofs for data scattered involve the careful approximation of integral kernels by diffusion polynomials. While this method of proof works well and guarantees convergence with minimal assumptions, it is technically challenging. In this talk, we take another route: when interpolating on Chebyshev nodes, one is able to explicitly compute factorizations in order to bound the difference between the MSN solution and the underlying function. Additionally, we will bound the condition number of our linear systems." ); ?>

    <?php #no_seminar("May&nbsp;28th"); ?>

    <?php  #organize("June&nbsp;4th"); ?>

				
	</table>

</div>

	
<?php write_footer(); ?>
