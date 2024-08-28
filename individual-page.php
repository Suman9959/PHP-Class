<?php
$name = "Suman Bhandari";
$email = "bhandaris6@nku.edu";
$phoneNum = 8597864228;
$jobTitle = "Software Engineer / Developer";
$github = "https://github.com/Suman9959";
$linkedin = "https://www.linkedin.com/in/suman9959/";
$summary = "I am a Computer Science student with a strong background in database programming, object-oriented programming, and a solid understanding of data structures and algorithms. I am actively seeking software engineering internships. I am eager to tackle complex challenges and contribute to impactful projects in the software engineering industry. Passionate about coding, I look forward to new challanges. 
Fun facts: I love playing and watching soccer , I hiked to about 15,000 ft (4550m) altitude during summer break in Nepal.";
$education = [
	"university" => "Northern Kentucky University",
	"major" => "Computer Science"
];
$awards = array("awardsName " => "President's Honors List ", "description" => "Spring 2023");

	?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Your name's Resume</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Your name's resume">
	<meta name="author" content="Your name">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>
	<article class="resume-wrapper text-center position-relative">
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<header class="resume-header pt-4 pt-md-0">
				<div class="row">
					<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<img class="picture" src="assets/images/profile.jpeg" alt="">
					</div><!--//col-->
					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
								<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
									<?= $name ?>
								</h1>
								<div class="title mb-3"><?= $jobTitle ?></div>
								<ul class="list-unstyled">
									<li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2"
												data-fa-transform="grow-3"></i><?= $email ?></a></li>
									<li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2"
												data-fa-transform="grow-6"></i><?= $phoneNum ?></a></li>
								</ul>
							</div><!--//primary-info-->
							<div class="secondary-info col-auto mt-2">
								<ul class="resume-social list-unstyled">
									<li class="mb-3"><a class="text-link" href="#"><span
												class="fa-container text-center me-2"><i
													class="fab fa-linkedin-in fa-fw"></i></span><?= $linkedin ?></a></li>
									<li class="mb-3"><a class="text-link" href="#"><span
												class="fa-container text-center me-2"><i
													class="fab fa-github-alt fa-fw"></i></span><?= $github ?></a></li>

									<!-- <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span>yourwebsite.com</a></li> -->
									<!-- Do not have personal website yet -->
								</ul>
							</div><!--//secondary-info-->
						</div><!--//row-->

					</div><!--//col-->
				</div><!--//row-->
			</header>
			<div class="resume-body p-5">
				<section class="resume-section summary-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
					<div class="resume-section-content">
						<p class="mb-0"><?= $summary ?></p>
					</div>
				</section><!--//summary-section-->
				<div class="row">
					<div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience
							</h2>
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<article class="resume-timeline-item position-relative pb-5">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1">Lead Developer
												</h3>
												<div class="resume-company-name ms-auto">Startup Hub</div>
											</div><!--//row-->
											<div class="resume-position-time">2023 - Present</div>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing
												elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
												penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
												quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec
												pede justo, fringilla vel.</p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:
											</h4>
											<p>Praesentium voluptatum deleniti atque corrupti quos dolores et quas
												molestias excepturi sint occaecati cupiditate non provident.</p>
											<ul>
												<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
												<li>At vero eos et accusamus et iusto odio dignissimos.</li>
												<li>Blanditiis praesentium voluptatum deleniti atque corrupti.</li>
												<li>Maecenas tempus tellus eget.</li>
											</ul>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies
												used:</h4>
											<ul class="list-inline">
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Angular</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Python</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">jQuery</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Webpack</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">HTML/SASS</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">PostgresSQL</span></li>
											</ul>
										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->

									<article class="resume-timeline-item position-relative pb-5">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1">Senior Software
													Developer</h3>
												<div class="resume-company-name ms-auto">Google</div>
											</div><!--//row-->
											<div class="resume-position-time">2019 - 2023</div>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing
												elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
												penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
												quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec
												pede justo, fringilla vel.</p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements
											</h4>
											<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
												ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
												quis, sem.</p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies
												used:</h4>
											<ul class="list-inline">
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">React</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Redux</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Django</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Webpack</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">HTML/SASS</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">MySQL</span></li>
											</ul>
										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->

									<article class="resume-timeline-item position-relative pb-5">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1">Co-Founder &
													Lead Developer</h3>
												<div class="resume-company-name ms-auto">To-do Lists</div>
											</div><!--//row-->
											<div class="resume-position-time">2015 - 2019</div>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing
												elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
												penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
												quam felis, ultricies nec.</p>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
												ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
												dis parturient montes.</p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies
												used:</h4>
											<ul class="list-inline">
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Django</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">JavaScript</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Node.js</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Require.js</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">HTML/SASS</span></li>
											</ul>
										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->

									<article class="resume-timeline-item position-relative">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1">Web Developer
													<small class="text-muted">(Intern)</small></h3>
												<div class="resume-company-name ms-auto">Amazon</div>
											</div><!--//row-->
											<div class="resume-position-time">2014 - 2015</div>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											<p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing
												elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
												penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
												quam felis, ultricies nec. Fusce vulputate eleifend sapien. Vestibulum
												purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam
												accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla.
												Vestibulum.</p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies
												used:</h4>
											<ul class="list-inline">
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">Ruby on Rails</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">jQuery</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">HTML/LESS</span></li>
												<li class="list-inline-item"><span
														class="badge bg-secondary badge-pill">MongoDB</span></li>
											</ul>
										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->


								</div><!--//resume-timeline-->






							</div>
						</section><!--//projects-section-->
					</div>
					<div class="col-lg-3">
						<section class="resume-section skills-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp;
								Tools</h2>
							<div class="resume-section-content">
								<div class="resume-skill-item">
									<ul class="list-unstyled mb-4">
										<li class="mb-2">
											<div class="resume-skill-name">Angular</div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: 98%" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>
										<li class="mb-2">
											<div class="resume-skill-name">React</div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: 94%" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>
										<li class="mb-2">
											<div class="resume-skill-name">JavaScript</div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: 96%" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>

										<li class="mb-2">
											<div class="resume-skill-name">Node.js</div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: 92%" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>
										<li class="mb-2">
											<div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: 96%" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>
									</ul>
								</div><!--//resume-skill-item-->
								<div class="resume-skill-item">
									<h4 class="resume-skills-cat font-weight-bold">Others</h4>
									<ul class="list-inline">
										<li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
										<li class="list-inline-item"><span class="badge badge-light">Code Review</span>
										</li>
										<li class="list-inline-item"><span class="badge badge-light">Git</span></li>
										<li class="list-inline-item"><span class="badge badge-light">Unit Testing</span>
										</li>
										<li class="list-inline-item"><span class="badge badge-light">Wireframing</span>
										</li>
										<li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
										<li class="list-inline-item"><span class="badge badge-light">Balsamiq</span>
										</li>
										<li class="list-inline-item"><span class="badge badge-light">WordPress</span>
										</li>
										<li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
									</ul>
								</div><!--//resume-skill-item-->
							</div><!--resume-section-content-->
						</section><!--//skills-section-->
						<section class="resume-section education-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<li class="mb-2">
										<div class="resume-degree font-weight-bold"><?= $education['major'] ?></div>
										<div class="resume-degree-org"><?= $education['university'] ?></div>
										<div class="resume-degree-time">2021 - present</div>
									</li>
									<!-- <li>
										<div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
										<div class="resume-degree-org">Imperial College London</div>
										<div class="resume-degree-time">2010 - 2013</div>
									</li> -->
								</ul>
							</div>
						</section><!--//education-section-->
						<section class="resume-section reference-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-awards-list">
									<li class="mb-2 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute"
											data-fa-transform="shrink-2"></i>
										<div class="resume-award-name"><?= $awards['awardsName'] ?></div>
										<div class="resume-award-desc"><?= $awards['description'] ?></div>
									</li>
								</ul>
							</div>
						</section><!--//interests-section-->
						<section class="resume-section language-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-lang-list">
									<li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span>
										<small class="text-muted font-weight-normal">(Native)</small></li>
									<li class="mb-2 align-middle"><span
											class="resume-lang-name font-weight-bold">French</span> <small
											class="text-muted font-weight-normal">(Professional)</small></li>
									<li><span class="resume-lang-name font-weight-bold">Spanish</span> <small
											class="text-muted font-weight-normal">(Professional)</small></li>
								</ul>
							</div>
						</section><!--//language-section-->
						<section class="resume-section interests-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<li class="mb-1">Climbing</li>
									<li class="mb-1">Snowboarding</li>
									<li class="mb-1">Cooking</li>
								</ul>
							</div>
						</section><!--//interests-section-->

					</div>
				</div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/profile.jpeg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
			</div><!--//resume-body-->


		</div>
	</article>


	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your
			name</small>
	</footer>



</body>

</html>