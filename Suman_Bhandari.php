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
$interests = array('Hiking', 'Playing Soccer');
$awards = array("awardsName" => "President's Honors List ", "description" => "Spring 2023");
$languages = array(["name" => "English", "level"=>"Fluent"],
 ["name" =>"Nepali", "level" => "Professional"],
["name" =>"Hindi", "level" => "Professional"]) ;
$skillsAndTools = [ ['name'=> 'Java', 'widthLevel' => '80%'],
['name'=> 'JavaScript', 'widthLevel' => '70%'],
['name'=> 'Python', 'widthLevel' => '80%'],
['name'=> 'C', 'widthLevel' => '60%'],
['name'=> 'C++', 'widthLevel' => '80%'],
['name'=> 'Kotlin', 'widthLevel' => '70%']
];
$otherSkills = ['git','MongoDB' , 'SQL','Software Development Life Cycle' , 'Agile Methodologies'];
$workExperience = [['jobTitle'=> 'ESPN Production Crew Member', 'company'=>'NKU', 'time' => 'Novermber 2021 - Present','responsibility1' => 'Coordinate and execute broadcasts of NKU games on ESPN+, serving as cameras and graphics operator to enhance
visual presentation and ensure seamless operation during events.',
'responsibility2' => ' Manage setup and maintenance of broadcasting equipment, oversee office tasks, and collaborate with team
members to ensure the smooth execution of university events and broadcasts.'],
['jobTitle'=> 'SU Information Desk Attendant', 'company'=>'NKU', 'time' => 'December 2021 - Present','responsibility1' => 'Provide exceptional customer service by resolving issues and directing individuals to appropriate resources, ensuring a positive and efficient experience for students, staff, and visitors.','responsibility2'=>'Handle inquiries and manage requests at the information desk, demonstrating strong problem-solving skills and the ability to provide accurate information and support in a fast-paced environment.'
]];
$projects = [['name'=>'Spam Email Detector', 'description'=>'Developed a spam email detection system using machine learning algorithms and NLP techniques with a Flask-based interface.', 'image' => 'assets/images/spam_Detector.png'],
['name'=>'Safety Alert App', 'description'=>'Built a Kotlin mobile app with user registration, emergency features, location tracking via Google Maps API, and in-app communication, ensuring reliability and security through rigorous testing.', 'image' => 'assets/images/safety_Alert.jpg'],
['name'=>'Graph Analysis and Shortest Path Finder ', 'description'=> 'Created a Java program with Dijkstra’s, Floyd-Warshall’s, and BFS algorithms for shortest path analysis in weighted and unweighted graphs, featuring a command-line interface and optimized performance.', 'image' => 'assets/images/graph_Analysis.jpg']];
$name = "Suman Bhandari";
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
								<?php foreach ($workExperience as $experience) { ?>
								<div class="resume-timeline position-relative">
									<article class="resume-timeline-item position-relative pb-5">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1"><?= $experience['jobTitle'] ?>
												</h3>
												<div class="resume-company-name ms-auto"><?= $experience['company'] ?></div>
											</div><!--//row-->
											<div class="resume-position-time"><?= $experience['time'] ?></div>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											
											
											
											<ul>
												<li><?= $experience['responsibility1'] ?></li>
												<li><?=$experience['responsibility2'] ?></li>
												
											</ul>
											
														<?php } ?>
											
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
										<?php foreach ($skillsAndTools as $skill) { ?>
										<li class="mb-2">
											<div class="resume-skill-name"><?= $skill['name'] ?></div>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar"
													style="width: <?= $skill['widthLevel'] ?>" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</li>
										<?php } ?>
										
									</ul>
								</div><!--//resume-skill-item-->
								<div class="resume-skill-item">
									<h4 class="resume-skills-cat font-weight-bold">Others</h4>
									<ul class="list-inline">
									<?php foreach ($otherSkills as $others) { ?>
										<li class="list-inline-item"><span class="badge badge-light"><?= $others ?></span></li>
										
										<?php } ?>
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
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
										
								        <div class="resume-award-name"><?= $awards['awardsName'] ?></div>
								        <div class="resume-award-desc"> <?= $awards['description'] ?></div>
								    </li>
								   
								
						
								</ul>
							</div>
						</section><!--//interests-section-->
						<section class="resume-section language-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-lang-list">
									<?php foreach ($languages as $language) { ?>
									<li class="mb-2"><span class="resume-lang-name font-weight-bold"><?= $language['name']?></span>
										<small class="text-muted font-weight-normal"><?= $language['level']?></small></li>
										
									<?php } ?>
								</ul>
							</div>
						</section><!--//language-section-->
						<section class="resume-section interests-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<?php foreach ($interests as $interests) { ?>
									<li class="mb-1"><?= $interests ?></li>
									
									<?php } ?>
								</ul>
							</div>
						</section><!--//interests-section-->

					</div>
				</div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
					<?php foreach ($projects as $project ) { ?>
						<div class="col-md-4">
							
		
							<div class="card">
								<img src="<?= $project['image'] ?>" alt="<?= $project['name'] ?>" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?= $project['name'] ?></h5>
									<p class="card-text"><?= $project['description'] ?></p>
									<!-- <a href="btn btn-outline-primary" href="#">Go to link</a> -->
								</div>
							</div>
						</div>
						
				
					<?php } ?>
					</div>
				</section><!--//projects-section-->
			</div><!--//resume-body-->


		</div>
	</article>


	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?= $name ?></small>
	</footer>



</body>

</html>