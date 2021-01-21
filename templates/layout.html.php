<!doctype html>
<html>
	<head>

		<meta name="author" content="Md.Dilshadul Islam(19mddil/19mddilshad)">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta 
			name="keywords" 
			content="HTML, CSS, JavaScript,Responsive Web Desing,Django,Python,Applied Python Data Science,Version Control,Git,Github,Projects,19mddil,19mddilshad,Md.Dilshadul Islam,Certificates">
		<meta 
			name="description" 
			content="This is my personal webpage where I save my projects advertisement for clients and my aquired djano &amp; php web framework,responsive web design,version control,devops,algorithm,agile_development,software poduct management knowledge and experience blogs.">
		<title> <?=$title?> </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Sacramento&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/2c012d6c99.js" crossorigin="anonymous"></script>

	</head>
	<body style="font-family: sans-serif;background-color: #f5f5f5;color:black;font-size: 16px;border-radius: 4px 4px 4px 4px;">

		<main class="container-fluid">

			<div class = "row">

				

				<section class = "col-md-10 two" style="background-color: white;color:black;padding: 0%">

					<header style="padding: 0%">
						<!-- 
						 <div class="jumbotron jumbotron-fluid">
      						<div class="container-fluid">
        						<h1 class="display-3">MD's Programmed World</h1>
        						<p class="lead">Programming blog and portfolio.</p>
      						</div>
    					</div >
    					-->
						<h1 
							style="text-align:center;
							background-image: url('images/background.png');
							color: #0c6991;
							font-family: 'Montserrat', sans-serif;padding:2%;">
							MD's Programmed World <i class="fas fa-globe-americas" style="color: #0c6991"></i>
						</h1>

					</header>
					<div style="margin-left: 10px;margin-right: 5px;">
						<?= $output ?>
					</div>
					<hr style="color:red;">
					<hr style="color:red;border: 2px solid green">
					<p style="text-align: center;"> <a href="#certificate"> <i class="fas fa-chevron-up fa-5x"></i> </a> </p>

				</section>
				<aside class = "col-md-2 one" style="padding: 0%;">

					<script type="text/javascript">
						(function() {
				  			window.onresize = displayWindowSize;
				  			window.onload = displayWindowSize;

				  			function displayWindowSize() {
					    		let myWidth = window.innerWidth;
					    		let myHeight = window.innerHeight;
					    		// your size calculation code here
								var b = document.querySelector("details");
					    		if(myWidth <=750){
									b.removeAttribute("open");
					    		}
					    		else{
					    			b.setAttribute("open", "");
					    		}

				  			};
						})();
					</script>
					<details id ="head" style="position:sticky;position: -webkit-sticky; top: 0;box-shadow: 2px 2px 7px black;background-color: black;" >

						<summary>

							<h1 style="font-weight:bold;font-family: 'Caveat', cursive; 
								font-family: 'Sacramento', cursive;
								color: #0c6991;
								text-align: left; 
								padding-left: 10px;">
								<i class="fas fa-bars"></i>
							</h1>

						</summary>
						<!-- Bug -->
						<nav style="font-weight: bold;
							text-align: left;
							padding-left: 5px;
							margin-right:3px;
							padding-right:3px;
							box-shadow: 2px 2px 7px #98fb98;
							border-radius: 4px 4px 4px 4px;" >

							<hr>
							<a href="index.php" style=" color: white; text-decoration: underline; font-size: 14px;text-shadow: 1px 1px 2px #111111;">
								<i class="far fa-compass"></i>Home
							</a>
							<hr>
							<a href="project.php" style="color: white; text-decoration: underline; font-size: 14px;text-shadow: 1px 1px 2px #111111;">
								<i class="far fa-compass"></i>My Projects
							</a>
							<hr>
							<a href="django.php" style="color: white; text-decoration: underline; font-size: 14px;text-shadow: 1px 1px 2px #111111;">
								<i class="far fa-compass"></i>Django
							</a>
							<hr>
							<a href="version_control.php" 
								style="color: white;
								text-decoration: underline;
								font-size: 14px;
								text-shadow: 1px 1px 2px #111111;">
								<i class="far fa-compass"></i>Version Control
							</a>
							<hr>
							<a href="agile_development.php" 
								style="color: white;
								text-decoration: underline;
								font-size: 14px;
								text-shadow: 1px 1px 2px #111111;">
								<i class="far fa-compass"></i>Agile Development
							</a>
							<hr>
							<a href="software_product_management.php" 
								style="color: white; 
								text-decoration: underline;
								font-size: 14px;
								text-shadow: 1px 1px 2px #111111;">
								<i class="far fa-compass"></i>Software Product Management
							</a>
							<hr>
							<a href="applied_data_science.php" 
								style="color: white;
								text-decoration: underline;
								font-size: 14px;
								text-shadow: 1px 1px 2px #111111;">
								<i class="far fa-compass"></i>Applied Data Science
							</a>
							<hr>
							<a href="installation_and_configuration.php" 
								style="color: white;
								text-decoration: underline;
								font-size: 14px;
								text-shadow: 1px 1px 2px #111111;" >
								<i class="far fa-compass"></i>Installation and Configuration</a><hr>
							<a href="responsive_web_design.php" 
								style="color: white; text-decoration: underline;
									font-size: 14px;
									text-shadow: 1px 1px 2px #111111;">
									<i class="far fa-compass"></i>Resposive Web Design
							</a>
							<br>
							<br>

						</nav>

					</details>

				</aside>
				
			</div>

		</main>
		<footer style=" background-image: url('images/background.png');color:black;padding: 3%; ">

			<section id = "Contact_Info">

				<h3>My Links:</h3>
					<a href="https://github.com/19mddil">
						<img src="https://github.githubassets.com/favicons/favicon.png" width="25px" height="25px" title="Github"/>
					</a>&nbsp;&nbsp;
					<a href="https://stackoverflow.com/users/10853066/mohammed-dilshad">
						<img src="https://cdn.sstatic.net/Sites/stackoverflow/Img/favicon.ico?v=ec617d715196" width="25px" height="25px" title="Stackoverflow"/>
					</a>&nbsp;&nbsp;
					<a href="https://www.facebook.com/19womanizer">
						<img src="https://static.xx.fbcdn.net/rsrc.php/yo/r/iRmz9lCMBD2.ico" width="25px" height="25px" title="Facebook"/>
					</a>&nbsp;&nbsp;
					<a href="https://www.linkedin.com/in/md-dilshadul-islam-01b721199/">
						<img src="https://static-exp1.licdn.com/sc/h/1bt1uwq5akv756knzdj4l6cdc" width="25px" height="25px" title="LinkedIn"/>
					</a>&nbsp;&nbsp;
					<a href="https://www.stopstalk.com/user/profile/19mddilshad">
						<img src="https://www.stopstalk.com/stopstalk/static/images/fav_assets/favicon-32x32.png?_rev=20200425190226" width="25px" height="25px" title="Stopstalk"/>
					</a>&nbsp;&nbsp;
					<a href="https://www.hackerrank.com/mddilshadul98">
						<img src="https://hrcdn.net/community-frontend/assets/favicon-ddc852f75a.png" width="25px" height="25px" title="Hackerrank"/>
					</a>
			
			</section>
			<hr>
			<p>Also You can mail me in my personal email account: <a href="mailto:mddilshadul98@19mddilshad.xyz">mddilshadul98@19mddilshad.xyz</a> </p>
			<p>Or If you prefer Gmail: <a href="mailto:mddilshadul98@gmail.com">mddilshadul98@gmail.com</a></p>
			<h2 style="text-align: center;font-family: 'Caveat', cursive;"><q>Hope and work makes a man never look down on thee inside out.</q></h2>
			<h4 style="text-align: center;"><?php echo date('d-m-y') ?>(UTC)</h4>

		</footer>
	</body>
</html>