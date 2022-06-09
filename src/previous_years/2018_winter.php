<?php include_once('scripts/functions.php'); ?>
<?php write_header("Winter 2018 Seminar"); ?>

<div id="cell">

	<h1>Winter 2018 - Seminar in Applied Mathematics</h1>
				
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
	<td><h2>Winter 2018 Schedule</h2></td>
	</tr>

	<?php organize("January&nbsp;17th"); ?>

	<?php speaker_data("January&nbsp;22nd",
				"Chris Gorman",
				"Mathematics",
				"Fast Algorithms for MSN Interpolation",
				"Fast algorithms in numerical linear algebra frequently result by taking advantage of matrix structure. Obvious examples include multiplication of the Discrete Fourier Matrix (via the Fast Fourier Transform) and factoring a tridiagonal matrix. This talk will focus on studying linear systems that arise from interpolation using the Minimum Sobolev norm (MSN). This reduces to computing the LQ factorization of a Vandermonde system. When interpolating on Chebyshev nodes, there is much structure that can be exploited, allowing for fast algorithms. We present examples in 1 and 2 dimensions interpolating function and derivative information." ); ?>
	
	<?php speaker_data("January&nbsp;29th",
				"Christian Beuno",
				"Mathematics",
				"Topological Vector Space Safari",
				"Hilbert spaces and Banach spaces are frequently encountered environments that dot the mathematical landscape, both pure and applied. Occasionally one ventures out beyond these familiar locales to  explore more exotic areas such as the weak-* topologies, Fréchet spaces, or the land of tempered distributions. Unfortunately many are lost along the way. Though the definitions are varied, all these are unified under the banner of topological vector spaces, and in fact the above creatures are all part of the same family - the locally convex spaces. On this safari we'll learn what a locally convex (or not) topological vector space is, how to spot one, and how to tame your own! It is recommended to bring your point set topology, linear algebra and bug spray. Strong analysis background would be great, but certainly not necessary for survival." ); ?>

	<?php speaker_data("February&nbsp;5th",
				"Jay Roberts",
				"Mathematics",
				"A Primer on Deep Learning",
				"Neural networks have become a staple of machine learning techniques in recent years. Deep Convolutional Networks in particular have revolutionized image recognition and processing. In this talk I will introduce the basics of neural networks and the challenges that arise in deep learning. Some results from the mathematical theory of Deep Convolutional Networks will be covered, as well recent work using ODEs to design new network architectures." ); ?>

	<?php speaker_data("February&nbsp;12th",
				"Christian Bueno",
				"Mathematics",
				"Neural Networks and the Universal Approximation Theorem",
				"Why are neural networks able to describe such a wide variety of phenomenon? The Universal Approximation Theorem (UAT) provides a partial answer by addressing what kinds of functions these networks can represent. In this talk we will carefully introduce neural networks, try and gain an intuition as to why they are so flexible, and ultimately work through Cybenko's classic proof of the UAT. " ); ?>

	<?php no_seminar("February&nbsp;19th"); ?>

	<?php speaker_data("February&nbsp;26th",
				"Cole Hawkins",
				"Math",
				"Finding Low-Rank Structure in Incomplete or Highly Corrupted Data",
				"Estimating missing entries and extracting latent variables are critical problems in various data analysis tasks, including recommender systems, video completion, and MRI reconstruction.  There are two complementary problems: extracting latent factors and inferring missing values.  When the data is two-dimensional (i.e., a matrix), this task can be formulated as matrix completion, and one usually assumes that the real data lies on a low-dimensional manifold and seeks the minimal-rank solution. We will present several strategies for latent factor estimation in the presence of incomplete or missing data, and discuss generalizations from the matrix to the tensor case." ); ?>

	<?php speaker_data("March&nbsp;5th",
				"Arturo Deza",
				"DYNS",
				"Peripheral Representations for computational models of Human and Machine Perception",
				"Are there any benefits in incorporating the foveated nature of human vision into image-based metrics of perception and computer vision systems? In this talk I hope to advance our understanding of this question through my work via psychophysical experiments (eye-tracking), computational modelling, and computer vision.

				The first part of the talk will revolve around peripheral representations applied to human perception via their use to enhance current computational models of clutter. Our foveated clutter models use a layer of foveated pooling on top of dense feature representations to simulate crowding effects and perceptual losses as a function of retinal eccentricity. In our experiments I show that peripheral representations enhance non-foveated clutter models when correlated to behavioural outputs when observers are engaged in visual search. The second part of the talk will present a new model of foveated rendering: the NeuroFovea model which produces approximations of visual metamers via feed forward foveated style-transfer networks. I will show work in progress regarding the limitations and advantages of generative foveated models, as well as the application of these models to advanced computer vision systems that extend deep learning. " ); ?>

	<?php speaker_data("March&nbsp;12th",
				"TBA",
				"TBA",
				"TBA",
				"TBA" ); ?>
				
	</table>

</div>

	
<?php write_footer(); ?>
