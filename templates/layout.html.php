<!doctype html>
<html>
	<head>
		<meta name="author" content="Md.Dilshadul Islam(19mddil/19mddilshad)">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="HTML, CSS, JavaScript,Responsive Web Desing,Django,Python,Applied Python Data Science,Version Control,Git,Github,Projects,19mddil,19mddilshad,Md.Dilshadul Islam,Certificates">
		<meta name="description" content="This is my personal webpage where I save my projects advertisement for clients and my aquired djano &amp; php web framework,responsive web design,version control,devops,algorithm,agile_development,software poduct management knowledge and experience blogs.">
		<title> <?=$title?> </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<script src="https://kit.fontawesome.com/2c012d6c99.js" crossorigin="anonymous"></script>
	</head>
	<body style="font-family: monospace;background-color: #f5f5f5;color:black;font-size: 1.2em;">
		<header>
			<h1 style="background-image: url('images/background.png');color:black;font-size: 270%;padding:3%;">MD's Programmering World.<sub style="font-size:.4em;color:red">(Beta version;final realease dued to october 5th)</sub></h1>
		</header>
		<main class="container">
			<div class = "row">
				<section class = "col-md-11 one" style="background-color: white;color:black;padding: 3%">
					<?= $output ?>
					<hr style="color:red;"><hr style="color:red;border: 2px solid green">
					<p style="margin-left: 45%"><a href="#preface"><i class="fas fa-chevron-up fa-5x"></i></a></p>
				</section>
				<aside class = "col-md-1 two" style="position:sticky; position: -webkit-sticky; top: 0;">
					<h1 style="font-size: 2em;padding: .5%;">Diaries</h1>
					<!-- Bug -->
					<hr>
					<nav style=" letter-spacing: .15em;">
						<a href="index.php" style=" text-decoration: underline;">Home</a><br><br>
						<a href="project.php" style=" text-decoration: underline;">My Projects</a><br><br>
						<a href="django.php"style=" text-decoration: underline;">Django</a><br><br>
						<a href="version_control.php" style=" text-decoration: underline;">Version Control</a><br><br>
						<a href="agile_development.php" style=" text-decoration: underline;">Agile Development</a><br><br>
						<a href="software_product_management.php" style=" text-decoration: underline;">Software Product Management</a><br><br>
						<a href="applied_data_science.php" style=" text-decoration: underline;">Applied Data Science</a><br><br>
						<a href="installation_and_configuration.php" style=" text-decoration: underline;" >Installation and Configuration</a><br><br>
						<a href="responsive_web_design.php" style=" text-decoration: underline;">Resposive Web Design</a><br><br>
					</nav>
				</aside>
			</div>
		</main>
		<footer style=" background-image: url('images/background.png');color:black;padding: 3%; ">
			<section >
			<h3>Contact Me:</h3>
				<a href="https://github.com/19mddil">
					<img src="https://github.githubassets.com/favicons/favicon.png" width="25px" height="25px" 
					title="Github"/>
				</a>&nbsp;&nbsp;
				<a href="https://stackoverflow.com/users/10853066/mohammed-dilshad">
					<img src="https://cdn.sstatic.net/Sites/stackoverflow/Img/favicon.ico?v=ec617d715196" width="25px" height="25px" title="Stackoverflow"/>
				</a>&nbsp;&nbsp;
				<a href="https://www.facebook.com/19womanizer">
					<img src="https://static.xx.fbcdn.net/rsrc.php/yo/r/iRmz9lCMBD2.ico" width="25px" height="25px" title="Facebook"/></a>&nbsp;&nbsp;
				<a href="https://www.linkedin.com/in/md-dilshadul-01b721199/">
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
			<h2 style="text-align: center;">এমডির প্রোগ্রামিং জগৎ</h2>
			<h4 style="text-align: center;"><?php echo date('d-m-y') ?>(UTC)</h4>
		</footer>
	</body>
</html>