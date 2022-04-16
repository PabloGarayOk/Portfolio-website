<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet"/>
	<script src="https://kit.fontawesome.com/cc821e5d4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css" />
	<link rel="stylesheet" type="text/css" href="css/home.css" />
	<link rel="stylesheet" type="text/css" href="css/about.css" />
	<link rel="stylesheet" type="text/css" href="css/skills.css" />
	<link rel="stylesheet" type="text/css" href="css/portfolio.css" />
	<link rel="stylesheet" type="text/css" href="css/contact.css" />
	<link rel="stylesheet" type="text/css" href="css/footer.css" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<script defer src="js/app.js"></script>
	<title>John Doe</title>
</head>
<body>
	<header class="topheader">
		<nav class="topnav">
			<a href="#" class="brand">
				<h2><span>J</span>D</h2>
			</a>
			<button class="open-menu" aria-label="Abrir menú">
				<img src="img/hamburger-icon.svg" alt="open menu" />
			</button>
			<ul class="menu">
				<button class="close-menu" aria-label="Cerrar menú">
					<img src="img/close-icon.svg" alt="close menu" />
				</button>
	        	<li><a class="active" href="#home">Home</a></li>
				<li><a href="#aboutme">About me</a></li>
	        	<li><a href="#skills">Skills</a></li>
	        	<li><a href="#portfolio">Portfolio</a></li>
	        	<li><a href="#contact">Contact</a></li>
	        </ul>
		</nav>
	</header>
	<div class="main">
		<div class="horizontal-padding vertical-padding">
			<section class="home" id="home">
				<div class="home-img">
					<img src="./img/picture.png" alt="Nikola Tesla picture">
				</div>
				<div class="home-info">
					<h1>Hi<span>!</span><br>I'm <span>John </span>Doe</h1>
					<h4 class="home-subtitle">Web Developer</h4>
					<button class="home-download-resume">
						<a target="_blank" href="./pdf/john-doe-resume.pdf">Download Resume</a>
					</button>					
				</div>
			</section><!--end section home-->
		</div><!--end horizontal/vertical padding-->
		<section class="about" id="aboutme">
			<div class="horizontal-padding vertical-padding">
				<div class="about-title">
					<h2 class="uppercase">About me</h2>
					<div class="about-divider"></div>
				</div>
				<div class="about-content">
					<div class="about-content-info">
						<h3>Who I am?</h3>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, consequuntur exercitationem dignissimos, excepturi sequi minima earum, repellendus enim fuga ipsa ipsum! Enim voluptates voluptatibus corporis blanditiis mollitia fugiat autem incidunt.
						</p>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus totam consequatur assumenda alias architecto consectetur laudantium ad! Blanditiis nisi ducimus officia.
						</p>						
					</div>				
					<div class="about-content-details">
						<h3>My Hobbies</h3>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus totam consequatur assumenda alias architecto consectetur laudantium ad!.
						</p>
					</div>
				</div>
			</div><!--end horizontal/vertical padding-->
		</section><!--end section about me-->
		<div class="horizontal-padding vertical-padding">
			<section class="skills" id="skills">
				<div class="skills-content-title">
					<h2 class="uppercase">Skills & Tools</h2>
					<div class="skills-divider"></div>
				</div>
				<ul class="skills-list">
					<li>Linux</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>Java</li>
					<li>Go</li>
					<li>C#</li>
					<li>React</li>
					<li>SQL</li>
					<li>MySQL</li>
					<li>PHP</li>
					<li>Laravel</li>
					<li>Git</li>
					<li>GitHub</li>
					<li>Figma</li>
					<li>Illustrator</li>
					<li>Photoshop</li>
				</ul>
			</section><!--end section skills-->
		</div><!--end horizontal/vertical padding-->
		<section class="portfolio" id="portfolio">
			<div class="horizontal-padding vertical-padding">
				<div class="portfolio-content-title">
					<h2 class="uppercase">Portfolio</h2>
					<div class="portfolio-divider"></div>
				</div>
				<div class="center-950">
				<div class="porfolio-container-cards">
					<div class="portfolio-card">
						<a href="https://www.your-project-web-site.com" target="_blank">
							<div class="portfolio-card-img">
								<img src="img/portfolio-projects.png" alt="">
							</div>
						</a>
						<h4 class="portfolio-card-title">Project One</h4>
						<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="https://www.your-project-web-site.com" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 1-->
					<div class="portfolio-card">
						<a href="https://www.your-project-web-site.com" target="_blank">
							<div class="portfolio-card-img">
								<img src="img/portfolio-projects.png" alt="">
							</div>
						</a>
						<h4 class="portfolio-card-title">Project Two</h4>
						<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="https://www.your-project-web-site.com" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 2-->
					<div class="portfolio-card">
						<a href="https://www.your-project-web-site.com" target="_blank">
							<div class="portfolio-card-img">
								<img src="img/portfolio-projects.png" alt="">
							</div>
						</a>
						<h4 class="portfolio-card-title">Project Three</h4>
						<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="https://www.your-project-web-site.com" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 3-->
					<div class="portfolio-card">
						<a href="https://www.your-project-web-site.com" target="_blank">
							<div class="portfolio-card-img ">
								<img src="img/portfolio-projects.png" alt="">
							</div>
						</a>
						<h4 class="portfolio-card-title">Project Four</h4>
						<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="https://www.your-project-web-site.com" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 4-->
					<div class="portfolio-card">
						<a href="https://www.your-project-web-site.com" target="_blank">
							<div class="portfolio-card-img">
								<img src="img/portfolio-projects.png" alt="">
							</div>
						</a>
						<h4 class="portfolio-card-title">Project Five</h4>
						<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="https://www.your-project-web-site.com" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 5-->
					<div class="portfolio-card">
						<a href="https://www.your-project-web-site.com" target="_blank">
							<div class="portfolio-card-img">
								<img src="img/portfolio-projects.png" alt="">
							</div>
						</a>
						<h4 class="portfolio-card-title">Project Six</h4>
						<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
						<div class="portfolio-card-links">							
							<a href="https://github.com" target="_blank">
								<i class="fa-brands fa-github"></i>
							</a>
							<a href="https://www.your-project-web-site.com" target="_blank">
								<i class="fa fa-globe-americas"></i>
							</a>
						</div>
					</div><!--end portfolio card 6-->
				</div><!--end porfolio-container-cards-->
			</div>
			</div><!--end horizontal/vertical padding-->
		</section><!--end section portfolio-->
		<section class="contact" id="contact">
			<div class="horizontal-padding vertical-padding">
				<div class="contact-content-title">
					<h2 class="uppercase">Contact</h2>
					<div class="contact-divider"></div>
				</div>
				<form name="contact_form" id="contact_form" action="php/contact-form.php" method="post" onsubmit="return validar();">
					<div class="contact-group">
						<?php
                            include("php/feedback.php");
                        ?>
						<div class="contact-row">
							<input type="text" name="name" id="name" placeholder="" value="<?= $_GET['name'] ? $_GET['name'] : "" ?>" required="">
							<span class="contact-line"></span>
							<label>Name</label>
						</div>
						<div class="contact-row">
							<input type="email" name="email" id="email" placeholder="" value="<?= $_GET['email'] ? $_GET['email'] : "" ?>" required="">
							<span class="contact-line"></span>
							<label>E-mail</label>             
						</div>
						<div class="contact-row">    
							<textarea name="message" id="message" rows="3" placeholder="" required=""><?= $_GET['message'] ? $_GET['message'] : "" ?></textarea>
							<span class="contact-line"></span>
							<label class="contact-message">Message</label>
						</div>
						<button class="contact-btn-send" type="submit" name="submit-form" onclick="validar();">
							<span>Send Message</span>
						</button>
					</div>
				</form>
				<div class="contact-links">							
					<a href="mailto:john@johndoe.com"> <!-- Replace with your email!!! -->
						<i class="fa-solid fa-envelope"></i>
					</a>
					<a target="_blank" href="https://twitter.com">
						<i class="fa-brands fa-twitter"></i>
					</a>
					<a target="_blank" href="https://github.com">
						<i class="fa-brands fa-github"></i>
					</a>
					<a target="_blank" href="https://www.linkedin.com">
						<i class="fa-brands fa-linkedin-in"></i>
					</a>
				</div>
			</div><!--end horizontal/vertical padding-->
		</section><!--end section contact-->
	</div><!--end main-->
	<footer class="footer">
		<div class="footer-credits">
			<p class="footer-malvinas">40<img src="./img/islas-malvinas.png" alt="islas malvinas con bandera argentina"> Years.</p>
			<p class="footer-autor"><i>Power by: <span class="footer-name">John Doe</span> · Your City, Your Country.</i></p>
		</div>
	</footer>
</body>
</html>