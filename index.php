<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="0script" content="0script">
            
        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	    <meta property="og:site_name" content="" /> <!-- website name -->
	    <meta property="og:site" content="" /> <!-- website link -->
	    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Contact App :  HOME</title>
        
        <!-- Styles -->
        <link rel="stylesheet" href="css.css" />
		<!-- boostrap cdn link -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- Favicon  : this bellong to me  register  on fontawesome and use yours -->
        <script src="https://kit.fontawesome.com/e6fe1098a1.js" crossorigin="anonymous"></script>
		
	</head>
	<body>
		<?php include 'header.php'?>
		<div id="top-div">
			<h1> Your Contact List </h1>
			<button type="button" class="btn btn-success" id="addcontactbutton" onclick="getAddContactForm();"><a href="#">Add Contact + </a></button>
		</div>

		<div class="container" id="main" >
		</div>

		<script>

			function getAddContactForm(){

				if(document.getElementById('addcontactform') == null){
					
					let xmlhttp = new XMLHttpRequest();
					
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("main").innerHTML = this.responseText;
						}
					};
				
					xmlhttp.open("GET", "add.php", true);
					xmlhttp.send();

				}else{

					let xmlhttp=new XMLHttpRequest();
					
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("main").innerHTML = this.responseText;
						}
					};

					//java script validation will be make after back end validation 
					let firstname=document.getElementById('firstname');
					let lastname=document.getElementById('lastname');
					let email=document.getElementById('inputEmail4');
					let phone=document.getElementById('phone');
					let inputAddress=document.getElementById('inputAddress');
					let inputAddress2=document.getElementById('inputAddress2');
					let inputAddress=document.getElementById('inputAddress');
					

					xmlhttp.open("POST", "add.php", true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.send(`${}`);

				}
				
			}
			
		</script>
		
		<!-- boostrap cdn link 	-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>