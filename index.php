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
	<title>Pablo Garay</title>
</head>
<body>
	<header class="topheader">
		<nav class="topnav">
			<a href="#" class="brand">
				<h2><span>P</span>G</h2>
			</a>
			<div class="menu-mobile-language">
				<div class="menu-mobile-language-box <?= $_GET['side'] ? "back" : "" ?>">
					<div id="flagC" class="menu-mobile-language-box-side menu-mobile-language-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
						<img src="img/flag-arg.png" alt="Español"/>
					</div>
					<div id="flagD" class="menu-mobile-language-box-side menu-mobile-language-box-side-back">
						<img src="img/flag-ing.png" alt="Ingles"/>
					</div>
				</div>
			</div>

			<button class="open-menu" aria-label="Abrir menú">
				<!--<i class="fa-solid fa-bars"></i>-->
				<img src="img/hamburger-icon.svg" alt="abrir menú" />
			</button>
			<ul class="menu">
				<button class="close-menu" aria-label="Cerrar menú">
					<!--<i class="fa-solid fa-xmark"></i>-->
					<img src="img/close-icon.svg" alt="cerrar menú" />
				</button>
				
				<div class="menu-home-box <?= $_GET['side'] ? "back menu-home-box-size" : "" ?>">
					<div class="menu-box-side menu-box-side-front">
						<li><a class="active" href="#home">Home</a></li>
					</div>
					<div class="menu-box-side menu-box-side-back">
						<li><a href="#home">Inicio</a></li>
					</div>
				</div>
				<div class="menu-about-box <?= $_GET['side'] ? "back menu-about-box-size" : "" ?>">
					<div class="menu-box-side menu-box-side-front">
						<li><a href="#aboutme">About&nbsp;me</a></li>
					</div>
					<div class="menu-box-side menu-box-side-back">
						<li><a href="#aboutme">Sobre&nbsp;m&iacute;</a></li>
					</div>
				</div>
				<div class="menu-skills-box <?= $_GET['side'] ? "back menu-skills-box-size" : "" ?>">
					<div class="menu-box-side menu-box-side-front">
	        			<li><a href="#skills">Skills</a></li>
					</div>
					<div class="menu-box-side menu-box-side-back menu-habilidades">
	        			<li><a href="#skills">Habilidades</a></li>
					</div>
				</div>
				<div class="menu-portfolio-box <?= $_GET['side'] ? "back menu-portfolio-box-size" : "" ?>">
					<div class="menu-box-side menu-box-side-front">
	        			<li><a href="#portfolio">Portfolio</a></li>
					</div>
					<div class="menu-box-side menu-box-side-back">
	        			<li><a href="#portfolio">Portafolio</a></li>
					</div>
				</div>
				<div class="menu-contact-box <?= $_GET['side'] ? "back menu-contact-box-size" : "" ?>">
					<div class="menu-box-side menu-box-side-front">
	        			<li><a href="#contact">Contact</a></li>
					</div>
					<div class="menu-box-side menu-box-side-back">
	        			<li><a href="#contact">Contacto</a></li>
					</div>
				</div>
				<div class="menu-language">
					<div class="menu-language-box <?= $_GET['side'] ? "back" : "" ?>">
						<div id="flagA" class="menu-language-box-side menu-language-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
							<img src="img/flag-arg.png" alt="Español"/>
						</div>
						<div id="flagB" class="menu-language-box-side menu-language-box-side-back">
							<img src="img/flag-ing.png" alt="Ingles"/>
						</div>
					</div>
				</div>
	        </ul>			
		</nav>
	</header>
	<div class="main">
		<div class="horizontal-padding vertical-padding">
			<section class="home" id="home">
				<div class="home-img">
					<div class="home-img-box <?= $_GET['side'] ? "back" : "" ?>">
						<div class="home-img-box-side home-img-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
							<img src="./img/picture.png" alt="pablo garay picture">
						</div>
						<div class="home-img-box-side home-img-box-side-back">
							<img src="./img/picture.png" alt="pablo garay picture">
						</div>	
					</div>
				</div>
				<div class="home-info">
					<div class="home-info-greeting">
						<div class="home-info-greeting-box <?= $_GET['side'] ? "back" : "" ?>">
							<div class="home-info-greeting-box-side home-info-greeting-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
								<h1>Hi<span>!</span><br></h1>
							</div>
							<div class="home-info-greeting-box-side home-info-greeting-box-side-back"> 
								<h1><span>¡</span>Hola<span>!</span><br></h1>
							</div>
						</div>	
					</div>
					<div class="home-info-name">
						<div class="home-info-name-box <?= $_GET['side'] ? "back" : "" ?>">
							<div class="home-info-name-box-side home-info-name-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
								<h1>I'm <span>Pablo </span>Garay</h1>
							</div>
							<div class="home-info-name-box-side home-info-name-box-side-back"> 
								<h1>Soy <span>Pablo </span>Garay</h1>
							</div>
						</div>
					</div>
					<div class="home-info-subtitle">
						<div class="home-info-subtitle-box <?= $_GET['side'] ? "back" : "" ?>">
							<div class="home-info-subtitle-box-side home-info-subtitle-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
								<h4>Web Developer</h4>
							</div>
							<div class="home-info-subtitle-box-side home-info-subtitle-box-side-back">
								<h4>Desarrollador Web</h4>
							</div>
						</div>
					</div>
					<div class="home-info-download">
						<div class="home-info-download-box <?= $_GET['side'] ? "back" : "" ?>">
							<div class="home-info-download-box-side home-info-download-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
								<a target="_blank" href="./pdf/pablo-garay-resume.pdf">Download Resume</a>
							</div>
							<div class="home-info-download-box-side home-info-download-box-side-back">
								<a target="_blank" href="./pdf/cv-pablo-garay.pdf">Descargar CV</a>
							</div>
						</div>
					</div>					
				</div>
			</section><!--end section home-->
		</div><!--end horizontal/vertical padding-->
		<section class="about" id="aboutme">
			<div class="horizontal-padding vertical-padding">
				<div class="about-title">
					<div class="about-title-box <?= $_GET['side'] ? "back" : "" ?>">
						<div class="about-title-box-side about-title-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
							<h2 class="uppercase">About me</h2>
							<div class="about-divider"></div>
						</div>
						<div class="about-title-box-side about-title-box-side-back">
							<h2 class="uppercase">Sobre mi</h2>
							<div class="about-divider"></div>
						</div>
					</div>
				</div>
				<div class="about-content">
					<div class="about-content-info">
						<div class="about-content-info-who-box <?= $_GET['side'] ? "back" : "" ?>">
							<div class="about-content-info-who-box-side about-content-info-who-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
								<h3>Who&nbsp;I&nbsp;am?</h3>
							</div>
							<div class="about-content-info-who-box-side about-content-info-who-box-side-back">
								<h3>¿Qui&eacute;n soy?</h3>
							</div>
						</div>
						<div class="about-content-info-who-text-box <?= $_GET['side'] ? "back-about-who-text" : "" ?>">
							<div class="about-content-info-who-text-box-side about-content-info-who-text-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
								<p>I am a proactive person, I can quickly adapt to changes. I like what I do and I really want to learn, that's why I continue training myself day by day in a self-taught way to grow as a professional.</p>
								<p>I have communication and empathy skills to work in a team. Now I am looking for the opportunity to join a technology company, although at the moment I work autonomously.</p>
							</div>
							<div class="about-content-info-who-text-box-side about-content-info-who-text-box-side-back">
								<p>Soy una persona proactiva, me adapto rapidamente a los cambios. Me gusta lo que hago y me gusta aprender, por eso que estoy continuamente capacitandome d&iacute;a a d&iacute;a de manera autodidacta para crecer como profesional.</p>
								<p>Tengo habilidades de comunicaci&oacute;n y empat&iacute;a para trabajar en equipo. Ahora estoy buscando la oportunidad de ingresar a una empresa de tecnolog&iacute;a, aunque por el momento trabajo de mandera aut&oacute;noma.</p>
							</div>
						</div>	
					</div>				
					<div class="about-content-details">
						<div class="about-content-details-hobbies-box <?= $_GET['side'] ? "back" : "" ?>">
							<div class="about-content-details-hobbies-box-side about-content-details-hobbies-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
								<h3>My Hobbies</h3>
							</div>
							<div class="about-content-details-hobbies-box-side about-content-details-hobbies-box-side-back">
								<h3>Mis Pasatiempos</h3>
							</div>
						</div>
						<div class="about-content-details-hobbies-text-box <?= $_GET['side'] ? "back-about-hobbies-text" : "" ?>">
							<div class="about-content-details-hobbies-text-box-side about-content-details-hobbies-text-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
								<p>I like outdoor sports, especially soccer, although the important thing is to spend time with family and friends. Photography, meeting new places and people.</p>
							</div>
							<div class="about-content-details-hobbies-text-box-side about-content-details-hobbies-text-box-side-back">
								<p>Me gustan los deportes al aire libre, en especial el f&uacute;tbol, aunque lo importante es pasar el tiempo con la familia y amigos. La fotograf&iacute;a, conocer personas y lugares nuevos.</p>
							</div>
						</div>	
					</div>
				</div>
			</div><!--end horizontal/vertical padding-->
		</section><!--end section about me-->
		<section class="skills" id="skills">
			<div class="horizontal-padding vertical-padding">
				<div class="skills-content-title">
					<div class="skills-content-title-box <?= $_GET['side'] ? "back-skills" : "" ?>">
						<div class="skills-content-title-box-side skills-content-title-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
							<h2 class="uppercase">Skills & Tools</h2>
							<div class="skills-divider"></div>
						</div>
						<div class="skills-content-title-box-side skills-content-title-box-side-back">
							<h2 class="uppercase">Habilidades y Herramientas</h2>
							<div class="skills-divider"></div>
						</div>	
					</div>
				</div>
				<ul class="skills-list">
					<li>Linux</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>SQL</li>
					<li>MySQL</li>
					<li>PHP</li>
					<li>Laravel</li>
					<li>Git</li>
					<li>GitHub</li>
					<li>Corel</li>
					<li>Illustrator</li>
					<li>Photoshop</li>
				</ul>
			</div><!--end horizontal/vertical padding-->
		</section><!--end section skills-->
		<section class="portfolio" id="portfolio">
			<div class="horizontal-padding vertical-padding">
				<div class="portfolio-content-title">
					<div class="portfolio-content-title-box <?= $_GET['side'] ? "back" : "" ?>">
						<div class="portfolio-content-title-box-side portfolio-content-title-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
							<h2 class="uppercase">Portfolio</h2>
							<div class="portfolio-divider"></div>
						</div>
						<div class="portfolio-content-title-box-side portfolio-content-title-box-side-back">
							<h2 class="uppercase">Portafolio</h2>
							<div class="portfolio-divider"></div>
						</div>
					</div>
				</div>
				<div class="center-950">
					<div class="portfolio-container-cards">
						
						<div class="portfolio-container-cards-box1 <?= $_GET['side'] ? "back" : "" ?>">
							<div class="portfolio-container-cards-box-side1 portfolio-container-cards-box-side-front1 <?= $_GET['side'] ? "front" : "" ?>">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img">
											<img src="img/portfolio-proyects.png" alt="crud mvc">
										</div>
									</a>
									<h4 class="portfolio-card-title">BLOG</h4>
									<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card 1 front-->
							</div>
							<div class="portfolio-container-cards-box-side1 portfolio-container-cards-box-side-back1">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img">
											<img src="img/portfolio-proyects.png" alt="crud mvc">
										</div>
									</a>
									<h4 class="portfolio-card-title">BLOG Back</h4>
									<p>Descripcion de tu proyecto. Tecnologias y herramientas usadas para el desarrollo. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card 1 back-->
							</div>
						</div><!--end portfolio container cards box card 1-->

						<div class="portfolio-container-cards-box2 <?= $_GET['side'] ? "back" : "" ?>">
							<div class="portfolio-container-cards-box-side2 portfolio-container-cards-box-side-front2 <?= $_GET['side'] ? "front" : "" ?>">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img">
											<img src="img/portfolio-proyects.png" alt="crud mvc">
										</div>
									</a>
									<h4 class="portfolio-card-title">CRUD MVC</h4>
									<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card 2 front-->
							</div>
							<div class="portfolio-container-cards-box-side2 portfolio-container-cards-box-side-back2">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img">
											<img src="img/portfolio-proyects.png" alt="crud mvc">
										</div>
									</a>
									<h4 class="portfolio-card-title">CRUD MVC Back</h4>
									<p>Descripcion de tu proyecto. Tecnologias y herramientas usadas para el desarrollo. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card 2 back-->
							</div>
						</div><!--end portfolio container cards box card 2-->

						<div class="portfolio-container-cards-box3 <?= $_GET['side'] ? "back" : "" ?>">
							<div class="portfolio-container-cards-box-side3 portfolio-container-cards-box-side-front3 <?= $_GET['side'] ? "front" : "" ?>">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img">
											<img src="img/portfolio-proyects.png" alt="web site wordpress">
										</div>
									</a>
									<h4 class="portfolio-card-title">E-commerce WordPress</h4>
									<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card 3 front-->
							</div>
							<div class="portfolio-container-cards-box-side3 portfolio-container-cards-box-side-back3">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img">
											<img src="img/portfolio-proyects.png" alt="web site wordpress">
										</div>
									</a>
									<h4 class="portfolio-card-title">E-commerce WP Back</h4>
									<p>Descripcion de tu proyecto. Tecnologias y herramientas usadas para el desarrollo. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card 3 back-->
							</div>
						</div><!--end portfolio container cards box card 3-->

						<div class="portfolio-container-cards-box4 <?= $_GET['side'] ? "back" : "" ?>">
							<div class="portfolio-container-cards-box-side4 portfolio-container-cards-box-side-front4 <?= $_GET['side'] ? "front" : "" ?>">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img ">
											<img src="img/portfolio-proyects.png" alt="contact form">
										</div>
									</a>
									<h4 class="portfolio-card-title">Contact Form</h4>
									<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card 4 front-->
							</div>
							<div class="portfolio-container-cards-box-side4 portfolio-container-cards-box-side-back4">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img ">
											<img src="img/portfolio-proyects.png" alt="contact form">
										</div>
									</a>
									<h4 class="portfolio-card-title">Formulario Contacto Back</h4>
									<p>Descripcion de tu proyecto. Tecnologias y herramientas usadas para el desarrollo. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card 4 back-->
							</div>
						</div><!--end portfolio container cards box card 4-->

						<div class="portfolio-container-cards-box5 <?= $_GET['side'] ? "back" : "" ?>">
							<div class="portfolio-container-cards-box-side5 portfolio-container-cards-box-side-front5 <?= $_GET['side'] ? "front" : "" ?>">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img">
											<img src="img/portfolio-proyects.png" alt="web site">
										</div>
									</a>
									<h4 class="portfolio-card-title">Web Site Portfolio</h4>
									<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card 5 front-->
							</div>
							<div class="portfolio-container-cards-box-side5 portfolio-container-cards-box-side-back5">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img">
											<img src="img/portfolio-proyects.png" alt="web site">
										</div>
									</a>
									<h4 class="portfolio-card-title">Portafolio Sitio Web Back</h4>
									<p>Descripcion de tu proyecto. Tecnologias y herramientas usadas para el desarrollo. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card 5 back-->
							</div>
						</div><!--end portfolio container cards box card 5-->

						<div class="portfolio-container-cards-box6 <?= $_GET['side'] ? "back" : "" ?>">
							<div class="portfolio-container-cards-box-side6 portfolio-container-cards-box-side-front6 <?= $_GET['side'] ? "front" : "" ?>">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img">
											<img src="img/portfolio-proyects.png" alt="contact form">
										</div>
									</a>
									<h4 class="portfolio-card-title">API REST</h4>
									<p>Description of your project. technologies and tools used for development. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card front6-->
							</div>
							<div class="portfolio-container-cards-box-side6 portfolio-container-cards-box-side-back6">
								<div class="portfolio-card">
									<a href="https://www.your-project-web-site.com" target="_blank">
										<div class="portfolio-card-img">
											<img src="img/portfolio-proyects.png" alt="contact form">
										</div>
									</a>
									<h4 class="portfolio-card-title">API REST Back</h4>
									<p>Descripcion de tu proyecto. Tecnologias y herramientas usadas para el desarrollo. <br>Lorem ipsum dolor sit amet consectetur adipiscing elit quis, ullamcorper metus.</p>
									<div class="portfolio-card-links">							
										<a href="https://github.com" target="_blank">
											<i class="fa-brands fa-github"></i>
										</a>
										<a href="https://www.your-project-web-site.com" target="_blank">
											<i class="fa fa-globe-americas"></i>
										</a>
									</div>
								</div><!--end portfolio card back6-->
							</div>
						</div><!--end portfolio container cards box card 6-->

					</div><!--end porfolio-container-cards-->
				</div><!--end center-950-->
			</div><!--end horizontal/vertical padding-->
		</section><!--end section portfolio-->
		<section class="contact" id="contact">
			<div class="horizontal-padding vertical-padding">
				<div class="contact-content-title">
					<div class="contact-content-title-box <?= $_GET['side'] ? "back" : "" ?>">
						<div class="contact-content-title-box-side contact-content-title-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
							<h2 class="uppercase">Contact</h2>
							<div class="contact-divider"></div>
						</div>
						<div class="contact-content-title-box-side contact-content-title-box-side-back">
							<h2 class="uppercase">Contacto</h2>
							<div class="contact-divider"></div>
						</div>
					</div>
				</div>
				
				<div class="contact-content-form-box <?= $_GET['side'] ? "back" : "" ?>">
					<div class="contact-content-form-box-side">
						<form name="contact_form" id="contact_form" action="php/contact-form.php" method="post" autocomplete="off" onsubmit="return validar();">					
							<div class="contact-group-front <?= $_GET['side'] ? "front" : "" ?>">
								<?php
									include("php/feedback.php");
								?>
								<div class="contact-row">
									<input type="text" name="name" id="name" placeholder="" value="<?= $_GET['name'] ? $_GET['name'] : "" ?>" required>
									<span class="contact-line"></span>
									<label>Name</label>
								</div>
								<div class="contact-row">
									<input type="email" name="email" id="email" placeholder="" value="<?= $_GET['email'] ? $_GET['email'] : "" ?>" required>
									<span class="contact-line"></span>
									<label>E-mail</label>             
								</div>
								<div class="contact-row">    
									<textarea name="message" id="message" rows="3" max-rows="3" placeholder="" required><?= $_GET['message'] ? $_GET['message'] : "" ?></textarea>
									<span class="contact-line"></span>
									<label class="contact-message">Message</label>
								</div>
								<button class="contact-btn-send" type="submit" name="submit-form" onclick="validar();">
									<span>Send Message</span>
								</button>
							</div>
						</form>							
					</div>
					<div class="contact-content-form-box-side contact-content-form-box-side-back">
						<form name="contact_form_back" id="contact_form_back" action="php/formulario-de-contacto.php" method="post" autocomplete="off" onsubmit="return validarBack();">
							<div class="contact-group-back">
								<?php
									include("php/respuestas.php");
								?>
								<div class="contact-row">
									<input type="text" name="nombre" id="nombre" placeholder="" value="<?= $_GET['nombre'] ? $_GET['nombre'] : "" ?>" required>
									<span class="contact-line"></span>
									<label>Nombre</label>
								</div>
								<div class="contact-row">
									<input type="email" name="correo" id="correo" placeholder="" value="<?= $_GET['correo'] ? $_GET['correo'] : "" ?>" required>
									<span class="contact-line"></span>
									<label>Correo electr&oacute;nico</label>             
								</div>
								<div class="contact-row">    
									<textarea name="mensaje" id="mensaje" rows="3" placeholder="" required><?= $_GET['mensaje'] ? $_GET['mensaje'] : "" ?></textarea>
									<span class="contact-line"></span>
									<label class="contact-message">Mensaje</label>
								</div>
								<button class="contact-btn-send" type="submit" name="submit-form" onclick="validarBack();">
									<span>Enviar Mensaje</span>
								</button>
							</div>
						</form>
					</div>	
				</div>				
				<div id="space" class="<?= $_GET['space'] ? $_GET['space'] : "space" ?> <?= $_GET['side'] ? "display" : "" ?>"></div>
				<div id="space-back" class="<?= $_GET['space-back'] ? $_GET['space-back'] : "space-back" ?> <?= $_GET['side'] ? "" : "display" ?>"></div>
				<div class="contact-content-links-box <?= $_GET['side'] ? "back" : "" ?>">
					<div class="contact-content-links-box-side contact-content-links-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
						
						<div class="contact-links">							
							<a href="mailto:hello@pablogaray.com.ar">
								<i class="fa-solid fa-envelope"></i>
							</a>
							<a target="_blank" href="https://twitter.com/_pablogaray">
								<i class="fa-brands fa-twitter"></i>
							</a>
							<a target="_blank" href="https://github.com/PabloGarayOk">
								<i class="fa-brands fa-github"></i>
							</a>
							<a target="_blank" href="https://www.linkedin.com/in/pablo-garay-ok">
								<i class="fa-brands fa-linkedin-in"></i>
							</a>
						</div>
					</div>
					<div class="contact-content-links-box-side contact-content-links-box-side-back">
						
						<div class="contact-links">							
							<a href="mailto:hola@pablogaray.com.ar">
								<i class="fa-solid fa-envelope"></i>
							</a>
							<a target="_blank" href="https://twitter.com/_pablogaray">
								<i class="fa-brands fa-twitter"></i>
							</a>
							<a target="_blank" href="https://github.com/PabloGarayOk">
								<i class="fa-brands fa-github"></i>
							</a>
							<a target="_blank" href="https://www.linkedin.com/in/pablo-garay-ok">
								<i class="fa-brands fa-linkedin-in"></i>
							</a>
						</div>
					</div>
				</div>

			</div><!--end horizontal/vertical padding-->
		</section><!--end section contact-->
	</div><!--end main-->

	<footer class="footer">		
		<div class="footer-credits">
			<div class="footer-credits-box <?= $_GET['side'] ? "back" : "" ?>">
				<?php include_once "./php/malvinas.php";?>
				<div class="footer-credits-box-side footer-credits-box-side-front <?= $_GET['side'] ? "front" : "" ?>">
					<p class="footer-malvinas"><?= $conmemoracion; ?><img src="./img/islas-malvinas.png" alt="islas malvinas"> Years.</p>
					<p class="footer-autor"><i>&copy; 2021 - <?php echo date("Y");?> · Powered by: <span class="footer-name">Pablo Garay</span> · C&oacute;rdoba, Argentina.</i></p>
				</div>
				<div class="footer-credits-box-side footer-credits-box-side-back">
					<p class="footer-malvinas"><?= $conmemoracion; ?><img src="./img/islas-malvinas.png" alt="islas malvinas"> A&ntildeos.</p>
					<p class="footer-autor"><i>&copy; 2021 - <?php echo date("Y");?> · Desarrollado por: <span class="footer-name">Pablo Garay</span> · C&oacute;rdoba, Argentina.</i></p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>