<?php include_once('scripts/functions.php'); ?>
<?php write_header("Spring 2018 Seminar"); ?>

<div id="cell">

	<h1>Spring 2018 - Seminar in Applied Mathematics</h1>
				
	<p>The UCSB student chapter of the Society for Industrial and Applied Mathematicians (SIAM) will host a weekly, interdisciplinary seminar to provide a forum for graduate students to discuss their research in an informal setting. 
This is a great outlet to polish your presentation skills in front of a general (technical) audience. 
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
	<td><h2>Spring 2018 Schedule</h2></td>
	</tr>

    <?php speaker_data("April&nbsp;2nd",
                    "James Tener",
                    "Mathematics",
                    "Approximation numbers of restriction operators on Hilbert spaces of holomorphic functions",
                    "The Hardy space of a complex domain with smooth boundary consists of holomorphic functions with L^2 boundary values. Given an inclusion of domains, there is a corresponding restriction operator which is (not obviously) bounded. If the boundaries of the domains do not touch, these operators are compact, and the singular values decay geometrically. In this talk I will discuss the case when the boundaries do touch, and present recent joint work with Mihai Putinar on the subject of estimating the \"singular values\" in this case. I will also try to discuss the motivation for these estimates arising out of the study of conformal field theory." ); ?>

    <?php speaker_data("April&nbsp;9th",
                    "Gustavo Ponce",
                    "Mathematics",
                    "Unique continuation for dispersive equations and uncertainty principles for the Fourier transform",
                    "We shall discuss aspects of unique continuations problems specially those related to dispersive evolution equations. We will see how in the case of the Schrodinger equation they are intrinsically related to uncertainty principles for the Fourier transform." ); ?>

    <?php speaker_data("April&nbsp;16th",
                    "Matthew Varble",
                    "Mathematics",
                    "An Introduction to Wavelets and Multiscale Analysis",
                    "Wavelet transforms are robust tools that have proven to be extremely successful in data compression, as they locally extract features at many scales. In this talk, I will discuss the domains for which wavelet analysis is quite useful, connect discrete and stationary wavelet transforms to a very intuitive analysis of a specific dataset, and show how the most famous formal construction of wavelets has led to abstractions that allow for quick constructions of wavelet transforms (without even defining the specific wavelet!). All this will serve to demonstrate how elegant the discrete wavelet transform is, in its robustness to generalization, computational feasibility, and capability in analyzing data." ); ?>

    <?php no_seminar("April&nbsp;23th"); ?>

    <?php speaker_data("April&nbsp;30th",
                    "Lan Liu",
                    "Mathematics",
                    "Harmonic Extensions and its Application in Semi-Supervised Learning",
                    "In this talk, we consider interpolation on a point could in high dimensional space, which is a harmonic extension problem, and is widely used in semi-supervised learning.
                    There are 3 different ways to formulate and solve the harmonic extension problem, the Graph Laplacian Method(GLM), the point integral method(PIM), and the weighted nonlocal laplacian(WELL), we will apply these three methods on two semi-supervised learning task: image recovery and MNIST digit recognition problem. The performance of them will be compared. This is a project Yao Xuan and I did in Math 260ss, instructed by Professor Ceniceros." ); ?>

    <?php speaker_data("May&nbsp;7th",
                    "Xander Song",
                    "CCS",
                    "Spectral Clustering: Learning with the Graph Laplacian",
                    "The purpose of this talk is to provide an introduction to the theory and application of a form of unsupervised learning known as spectral clustering. This technique assumes that a given data set X belongs to some low-dimensional manifold embedded in a high-dimensional space, and requires only a metric on X in order to produce a partition into some desired number of classes of “similar” data points. We shall first introduce the so-called “graph Laplacian” and its variants, which form the foundation of spectral clustering, and shall provide an overview of their most important combinatorial and spectral
                    properties. We shall also explain the notion of a “Laplacian embedding” of our data set into a low-
                    dimensional Euclidean space. After presenting an original application to scene detection in first-person
                    video, we shall conclude the talk with a brief discussion of how these ideas have been extended to the
                    context of supervised learning via the MBO (Merriman-Bence-Osher) algorithm." ); ?>

    <?php no_seminar("May&nbsp;28th"); ?>

    <?php no_seminar("May&nbsp;28th"); ?>

    <?php no_seminar("May&nbsp;28th"); ?>

     <?php  organize("June&nbsp;4th"); ?>

				
	</table>

    <?php # organize("January&nbsp;17th"); ?>

</div>

	
<?php write_footer(); ?>
