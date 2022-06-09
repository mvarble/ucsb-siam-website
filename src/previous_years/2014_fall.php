<?php include_once('scripts/functions.php'); ?>
<?php write_header("Fall 2014 Seminar"); ?>

			<div id = "cell">

				<h1>Fall 2014 - Seminar on Top Algorithms in Computational Science</h1>

				<p>The UCSB student chapter of the Society for Industrial and Applied Mathematicians (SIAM) will host a seminar during Fall quarter centered around the most important algorithms in computational science. The list of algorithms is loosely based on an <a href="http://www.siam.org/news/news.php?id=637">article from the editors of SIAM News</a>. Each week a graduate student will deliver a 50 minute talk detailing the history, theory and application of one of these famous algorithms. Attendees will find the seminar useful to broaden their knowledge of computational techniques while learning about research occurring at UCSB.</p>
				<br>
				<p>All are welcome to attend and light refreshments will be served! <a href="2014-Fall/2014_fall_flyer.pdf">Here is a flyer for advertising purposes.</a></p>
				<br>
				<p><font color="red">Due to overwhelming attendance, we have changed rooms!</font></p>
				<br>
				<p><b>When</b>: Wednesdays from 3:30-4:30pm</p>
				<p><b>Where</b>: Elings Hall Rooms 1601 and 1605</p>
				<br>
				<p><i>During the week of Thanksgiving, the seminar will be held on <font color="red">Monday, 24th November</font> from 3:30-4:30 pm.</i></p>

			<table id="hor-minimalist-b">
				<tr>
				<td><h2>Date</h2></td>
				<td><h2>Fall 2014 Schedule</h2></td>
				</tr>
	
				<tr>
				<td><p><b>October&nbsp;8th South&nbsp;Hall&nbsp;4607</b></p></td>
				<td>
					<p><b>Speaker: Jon Lo Kim Lin (Mathematics)</b></p>
					<p><b>Title: Fast Multipole Method</b></p>
					<p>The fast multipole method (FMM) achieves fast solutions of many problems in numerical simulation; especially, the so-called N-body problems, in which a potential function composed of a sum of pairwise interaction terms from N points is evaluated at an equally large number of locations. FMM has been called one of the ten most significant numerical algorithms discovered in the 20th century, and won its inventors, Vladimir Rokhlin and Leslie Greengard, the Steele prize. The algorithm allows the product of particular dense matrices with a vector to be evaluated in O(N log N) operations, when direct multiplication requires O(N^2) operations. We will discuss the basic ideas behind the method.</p>
				</td>
				</tr>

				<tr>
				<td><p><b>October&nbsp;15th Elings 1601</b></p></td>
				<td>
					<p><b>Speaker: Derek L. Smith (Mathematics)</b></p>
					<p><b>Title: <a href="./2014-Fall/smith_fft.pdf">The Fast Fourier Transform</a></b></p>
					<p>Fourier analysis provides tools to analyze signals by decomposing them into component frequencies. While investigating problems in orbital dynamics in the early 19th century, Gauss discovered an efficient algorithm for computing the discrete Fourier transform of a periodic function. Though the field of Fourier analysis advanced greatly in the ensuing two centuries, this particular algorithm was not rediscovered until 1965 by Cooley and Tukey. It is now ubiquitous in data and signal processing. This talk will develop Gauss' key insight and exhibit its use in compressing sound files using the MP3 format. The Fourier transform is a very general tool which appears in many fields of pure and applied mathematics. We conclude with a brief list of these topics.</p>
				</td>
				</tr>

				<tr>
				<td><p><b>October&nbsp;22nd Elings 1601</b></p></td>
				<td>
					<p><b>Speaker: Shunyao Li (Electrical and Computer Engineering)</b></p>
					<p><b>Title: <a href="./2014-Fall/li_quicksort.pdf">Quicksort</a></b></p>
					<p>Putting N things in numerical or alphabetical order is mind-numbingly mundane. The intellectual challenge lies in devising ways of doing so quickly. Hoare's algorithm uses the age-old recursive strategy of divide and conquer to solve the problem: Pick one element as a "pivot," separate the rest into piles of "big" and "small" elements (as compared with the pivot), and then repeat this procedure on each pile. Although it's possible to get stuck doing all N(N-1)/2 comparisons (especially if you use as your pivot the first item on a list that's already sorted!), Quicksort runs on average with O(N log N) efficiency. Its elegant simplicity has made quicksort the poster child of computational complexity.</p>
				</td>
				</tr>

				<tr>
				<td><p><b>October&nbsp;29th Elings 1601</b></p></td>
				<td>
					<p><b>Speaker: Harris Enniss (Mathematics)</b></p>
					<p><b>Title: <a href="./2014-Fall/enniss_krylov.pdf">Krylov Subspace Methods</a></b></p>
					<p>Frequently in applications one encounters the problem of solving large sparse linear systems of equations <i>Ax = b</i>. For such systems, projection onto Krylov subspaces, spanned by the images of powers of <i>A</i>, can efficiently produce approximate solutions. From this basic idea comes a diverse family of Krylov subspace methods, which adopt different techniques to construct orthogonal bases, to project onto the Krylov subspaces, to restart or truncate computation when the subspace dimension grows too large, and to avoid breakdowns. Well known Krylov subspace methods, including Conjugate Gradient, GMRES, and BiCGSTAB, will be discussed.</p>
				</td>
				</tr>

				<tr>
				<td><p><b>November&nbsp;5th Elings 1605</b></p></td>
				<td>
					<p><b>Speaker: Vineeth Kashyap (Computer Science)</b></p>
					<p><b>Title: <a href="./2014-Fall/kashyap_optimizing.pdf">Optimizing Compilers</a></b></p>
					<p>Compilers translate high-level programming languages into machine architecture specific code. Compilers have been  instrumental in improving programmer productivity---instead of writing machine specific code, programmers can write code closer to the abstractions of their application. One of the key reasons for the success of compilers was its ability to create highly optimized code: in most cases, better than handwritten machine code.</p>
					<p>Various aspects of compilers borrow heavily from multiple areas of mathematics: formal languages and automata, graph theory, and lattice theory, amongst others. In this seminar, I will briefly introduce compilers, give a bit of relevant history, and for the most part, talk about some of the interesting aspects of an optimizing compiler.</p>
				</td>
				</tr>

				

				<tr>
				<td><p><b>November&nbsp;12th Elings 1605</b></p></td>
				<td>
					<p><b>Speaker: Michael Dougherty (Mathematics)</b></p>
					<p><b>Title: <a href="./2014-Fall/dougherty_pkc.pdf">Public Key Encryption</a></b></p>
					<p>Ever since the development of writing, we have conspired to conceal it. For a few millennia, all ciphers operated on the same premise: create a code which could be turned into a message with knowledge of a secret key. But in the 1970s with network-based communication looming, problems quickly arose: how can you safely share a secret key with someone over a computer network? The solutions are ingenious and rely on asymmetry in certain mathematical operations. We'll discuss the history of cryptography, the emergence of these "public-key" cryptosystems, and their technical strengths and weaknesses.</p>
				</td>
				</tr>

				<tr>
				<td><p><b>November&nbsp;19th Elings 1601</b></p></td>
				<td>
					<p><b>Speaker: Nancy Eisenmenger (Materials)</b></p>
					<p><b>Title: Energy transfer strategies for overcoming limitations in dye sensitized solar cells: A kinetic Monte-Carlo simulation approach</b></p>
					<p>Monte Carlo algorithms are widely used in simulations of physical systems that are difficult to model with exact analytical approaches. I will describe how we applied kinetic Monte Carlo simulations to study energy relay dyes for dye sensitized solar cells. Dye sensitized solar cells take advantage of the high absorption coefficients of organic chromophores and use nanostructured morphologies to achieve relatively high efficiencies using abundant materials. Although the technology shows promise, it is subject to limitations due to intrinsic properties and device architecture. For example dye sensitized solar cells are limited by the spectral absorption of a single dye and the surface area to which it can be applied. I will introduce how this type of solar cell works and then I will discuss strategies guided by the simulations for using energy transfer to address these limitations.</p>
				</td>
				</tr>

				<tr>
				<td><p><b><font color="red">Monday November&nbsp;24th</font> Elings 1601</b></p></td>
				<td>
					<p><b>Speaker: Justin Pearson (Electrical and Computer Engineering)</b></p>
					<p><b>Title: <a href="./2014-Fall/pearson_kalman.pdf">The Kalman Filter: An unreasonably good state estimator</a></b></p>
					<p><b>Movies: <a href="./2014-Fall/pearson_lre.mp4">Linear recursive estimator</a> and <a href="./2014-Fall/pearson_building.mp4">Kalman filter</a></b></p>
					<p>The Kalman Filter stirred up excitement in the aerospace industry in the 60's as an intuitive, optimal, and easily-implementable state estimator. It allowed control engineers to employ celebrated state-feedback controllers even when the system's state was not directly measurable, in a plug-and-play sort of way. This excitement spread to other industries, who discovered that the filter works unreasonably well even when violating the assumptions underlying the design of the filter, like having a non-Gaussian noise distribution. Several extensions of the KF apply the same basic concepts to nonlinear systems (the extended / unscented Kalman Filter) and statistically-simulated systems (the particle filter). In this talk, I will explain the basics of control theory and linear systems, describe the Kalman Filter, and show some cool examples.</p>
				</td>
				</tr>

				<tr>
				<td><p><b>December&nbsp;3rd Elings 1601</b></p></td>
				<td>
					<p><b>Speaker: Veronika Strnadova (Computer Science)</b></p>
					<p><b>Title: <a href="./2014-Fall/strnadova_clustering.pdf">Spectral Clustering</a></b></p>
					<p>Spectral clustering is an important tool in graph analysis in which we seek to find groups of clustered vertices in a graph. The heuristic algorithm finds groups of highly connected vertices in a graph by computing the eigenvectors of the graph Laplacian, a positive semi-definite matrix with many interesting properties related to the connectedness of the graph. The algorithm has been successfully applied in a wide range of application domains in the past few decades, and recently, new techniques have been introduced to extend spectral clustering to the "Big Data" setting. I will cover the basic theory behind the spectral clustering algorithm, show some interesting applications of this algorithm, and say a few words about recent extensions to spectral clustering.</p>
				</td>
				</tr>

				<tr>
				<td><p><b>December&nbsp;10th Elings 1601</b></p></td>
				<td>
					<p><b>Speaker: Colleen Delaney (Mathematics)</b></p>
					<p><b>Title: Shor's Prime Factorization Algorithm</b></p>
					<p>The secure transmission of data on today's computers often relies on RSA encryption, a cryptographic algorithm that depends on the difficulty of factoring large integers. In 1994, Peter Shor published an algorithm for a quantum computer that could factor integers in polynomial time, exponentially faster than the best known classical algorithm performing the same task. Twenty years after his discovery, the largest number factored on a quantum computer using this algorithm is just 21, which reflects that quantum computers are not yet large enough for Shor's algorithm to pose an immediate threat to RSA encryption. While the efficient factorization of integers may have limited commercial applications, Shor's famous algorithm has helped drive both theoretical and experimental research in the gate model of quantum computation. This talk will be an introduction to the basic ideas in quantum mechanics and number theory needed to understand Shor's algorithm.</p>
				</td>
				</tr>
</table>

			</div>

<?php write_footer(); ?>
