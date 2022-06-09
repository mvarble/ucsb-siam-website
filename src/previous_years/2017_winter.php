<?php include_once('scripts/functions.php'); ?>
<?php write_header("Winter 2017 Seminar"); ?>

<div id="cell">

	<h1>Winter 2017 - Seminar on Machine Learning</h1>
				
	<p>
The UCSB student chapter of the Society for Industrial and Applied Mathematicians (SIAM) will host a seminar during Winter quarter cented around <b>machine learning</b>.

Attendees will find the seminar useful to broaden their knowledge of machine learning techniques while learning about research occuring at UCSB in this area.
	</p>
  	<p>
Please <a href="mailto:siam@math.ucsb.edu?Subject=Winter Seminar" target="_top">send an email</a> if you'd like to speak.
	</p>
	<br>
	<p>All are welcome to attend, cookies and coffee provided.</p>
	<br>
	<p><b>When</b>: Wednesdays from 3:30-4:30pm</p>
	<p><b>Where</b>: <strike>South Hall Room 4607b</strike><br />
		<font color="red">Due to a surge in popularity, talks will now be in the <b>Engineering Science Building (ESB) room 1001 or 2001</b>.
				<br />See below for more details.</p>

	<table id="hor-minimalist-b">
	<tr>
	<td><h2>Date</h2></td>
	<td><h2>Winter 2017 Schedule</h2></td>
	</tr>

	<?php speaker_data("January&nbsp;11th South&nbsp;Hall&nbsp;4607b",
				"Arya Pourzanjani",
				"Computer Science",
				"Some Things You Won't Learn in Your Machine Learning Class",
				"Over the last few years, the field of machine learning has made tremendous strides in using big data to fit models. At the same time, tantamount issues previously addressed in the “small data” regime, such as independence, sampling, and uncertainty have mostly been forgotten in the big data flurry.  I will briefly talk about the cultural differences between machine learning and classical statistics, and illustrate, using examples from medicine, why we must consider important concepts previously addressed by the field of statistics, when working with big data. Specifically, I’ll explain how researchers and practitioners have been using “big data” to fit “small models”, and illustrate why it is important to use “big models”, especially with “big data”. I will then illustrate with examples, why in the big model regime, fitting models via optimization fails, and how these failures have manifested in current machine learning and specifically neural network research. I'll explain how and why sampling is a more robust alternative to optimization, and present the Metropolis-Hastings algorithm,and its newer, even more efficient cousin, the Hamiltonian Monte Carlo (HMC) algorithm. I will illustrate how HMC allows us to elegantly fit our models in a simpler and more automatic fashion than optimization."); ?>

	<?php speaker_data("January&nbsp;18th South&nbsp;Hall&nbsp;4607b",
				"Dr. Paul Atzberger",
				"Mathematics",
				"An Introduction to Machine Learning: Foundations and Applications",
				"In this talk we will survey recent approaches in machine learning, their mathematical foundations, and practical computational methods. Recent advances in measurement and scientific simulation are resulting in a plethora of data. This presents a number of challenges both for the design of high-throughput experiments/simulations and for the interpretation of the resulting large sets of data. Advances in combining approaches, such as Bayesian statistics, with large-scale scientific computation are resulted in new methodologies and algorithms for inferring information from such data.  We will give a survey of this area and practical methods drawing on results from stochastic analysis.  We will also discuss a few example applications."); ?>

	<?php speaker_data("January&nbsp;25th ESB&nbsp;1001",
				"Dr. Hector Ceniceros",
				"Mathematics",
				"Mathematics in Data Science?",
				"Mathematics in Data Science? What is Data Science? Is it a fashion or a lasting, emerging field?  How can I, as a mathematician, work in “Data Science”?  Can I use Machine Learning to learn Machine Learning? Deep Learning? How should we train a new cadre of mathematicians to respond to the needs posed by Big Data-Computation?

</p><p>I will give my very personal (and very likely naive) answers to these questions from a non-expert point of view. I hope this talk would be more an open discussion than a formal lecture."); ?>

	<?php speaker_data("February&nbsp;1st ESB&nbsp;1001",
				"Christian Bueno",
				"Mathematics",
				"Topological Data Analysis",
				"Our brains our exceptionally capable of analyzing two and three dimensional data by inspecting its 'shape' but human brains generally have difficulty when the dimension gets any higher than three. Topological Data Analysis (TDA) provides rich tools with which we can probe the shape of high-dimensional data, and provides new ways of representing that information. In this talk we will find out what mathematicians mean when they say \"topology\", what TDA is, and what applications these techniques have found."); ?>	

	<?php organize("February&nbsp;8th South&nbsp;Hall&nbsp;4607b"); ?>	

	<?php speaker_data("February&nbsp;15th ESB&nbsp;1001",
				"Jedrzej Kozeraski",
				"Electrical and Computer Engineering",
				"SVM Transfer Learning for Object Recognition",
				"Learning object representation given many positive samples for training is nowadays a fairly known task. Achieving same goal given only few examples is a much harder problem, but we know that human brain tends to adapt very well information from one domain to another and transfer the knowledge it already possesses to learn more efficiently in the future.
Same principle is a motor for current “Learning to learn” methods for transferring knowledge from already known object categories to facilitate learning the representation of completely novel and previously unseen objects.
I will describe methods involving pure SVM approaches and deep learning model transfer networks where prior knowledge can be used to boost recognition of novel object instances."); ?>

	<?php no_seminar("February&nbsp;22nd"); ?>

	<?php no_seminar("March&nbsp;1st"); ?>

	<?php speaker_data("March&nbsp;8th South&nbsp;Hall&nbsp;4607b",
				"Kyle Mylonakis",
				"Mathematics",
				"Gibbsian Measures for Hard-Core Potentials",
				"In equilibrium thermodynamics, one typically wants to put a probability measure on phase space. When there are only finitely many particles, phase space is a finite dimensional, and so this amounts to putting a probability measure on Euclidean space which is absolutely continuous with respect to Lebesgue. However all arguments in thermodynamics require a notion of a thermodynamic limit, where the number of particles goes to infinity making the dimension of the phase space infinite dimensional. Since there is no analog of the Lebesgue measure in infinite dimensions one must turn to a limiting procedure. 

<br /><br />In this talk I will sketch a proof of the existence of such a measure for infinitely many particles. This work follows on Dobrushin's 1968 and 1969 papers on Gibbsian measure and random fields. 

<br /><br />No knowledge of physics will be assumed, but I will assume people are comfortable with basic definitions in measure theory. "); ?>

	<?php speaker_data("March&nbsp;15th South&nbsp;Hall&nbsp;4607b",
				"Kyle Mylonakis",
				"Mathematics",
				"One Dimensional Classical Phonon Flow between Thermal Baths",
				"In thermodynamics, temperature is a property of systems in equilibrium. If there are two baths at different temperatures are connected by a wire, the system is not in equilibrium, so it does not make sense formally to talk about temperature of the system.  How then can we discuss how heat flows down the wire? Moreover, how can we eliminate the infinite degrees of freedom present in the two baths to produce a closed system of finitely many equations for the dynamics?
<br /><br />
In this talk I will discuss how to write down equations of motion modeling this exact situation, and provide some insights into solving this problem. This is ongoing research with Carlos, and based on work by Xiantao Li."); ?>

	</table>

</div>

	
<?php write_footer(); ?>
