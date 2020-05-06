<?php
session_start();
if ($_SESSION['user']|| ($_COOKIE['user'])) include('./../../generalTask/generalTask.php');
else header("Location: ./../../additionalTask/index.php");
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <title>New York City</title>
  <style type="text/css">
  	@font-face{
  		font-family: "Wearetrippin Display";
  		src: url("/Laba6/generalTask/Design/images/Font/Wearetrippin Display.ttf");
  	}
    @media all and (max-width: 500px) {
      .links { 
        justify-content: space-around; 
    }
      .links a { 
        flex-grow:1; 
      }
    }
   @media all and (max-width: 500px) {
  .links { 
  	flex-direction: column;
   }
  }

  @media all and (max-width: 1270px) {
  	.photos {
  		flex-shrink: 1 ;
  	}  	

  	.areas {	
		position: inherit;
		width: 100%;
		height: 200px;
		overflow: auto;
		margin-top: 90px;
		box-sizing:border-box; /* чтобы внутренний отступ не влиял когда там будет текст... */
		font-family:"Wearetrippin Display";
		font-size: 38px; 
		text-align:center; 
		background:white; /* для красоты */
		border-bottom: 6px inset black
		}
	.areas a {	
	    color: #b52b2b; /* Цвет обычной ссылки */ 
	    text-decoration: none; /* Убираем подчеркивание у ссылок */
	    letter-spacing: 3px;
    }

    .holstText {
    	margin-top: -5%;
    }	
    .leftPhotos {
    	flex-shrink: 12;
    	    }
    .rightPhotos img { width:100% }
    .leftPhotos img { width:100% }
  }

  @media all and (min-width: 1270px) {
  	.areas {
  		overflow: auto;
  		background: white;
  		border-right: 6px inset black;
  		margin-top: 90px;
  		height: 2460px;
  		float: left;
  		left: 121px;
        font-family: "Wearetrippin Display", serif;
		font-size: 38px;
  	}
  	.areas a {	
	   	letter-spacing: 0.5px;	
	   	line-height: 90px;
	    color: #b52b2b; /* Цвет обычной ссылки */ 
	    text-decoration: underline; /* Убираем подчеркивание у ссылок */
	    letter-spacing: 3px;
    	}

    .holst {
   		margin-top: 90px;
  		width: 84%;
  		height: 1750px;
  		float: right;
  		background-color: #ffffff;
  	}
	.rightPhotos {
		position: inherit;
  		margin-top: 1.75%;
  		margin-right: 1%;
  		width: 48.5%;
  		height: 938px;
  		margin-left: 2px;
  		float: right;
	}
	.rightPhotos p {
		text-align-last:  center ;
		margin-top: 2%;
		margin-bottom: 1%;
	}
  .rightPhotos img { width:100% }
  .leftPhotos img { width:100% }

	.leftPhotos {

		position: inherit;
  		margin-top: 1.75%;
  		margin-right: 0.65%;
  		width: 48.5%;
  		height: 938px;
  		margin-left: 2px;
  		float: left;
  		margin-left: 1%;
	}
    }

 
   .container {
      display: flex;
      flex-direction: column;
      align-content: center;
      align-items: center;
    }

   .head { 
    position: fixed;
    top: 0;
    left: 0;
   	width: 100%;
  	height: 90px;
    overflow: auto;
    background-color: #000000; 
	}

	.links {
    display: inline-flex;
    position: absolute;
    height: 100%;     
    width: 100%;
    align-content: center;
    justify-content: space-around;
    align-items: center;
    flex-shrink: 1111;
    flex-grow: 1111;
	font-family:"Wearetrippin Display";
	font-size: 50px;
	color: #c7c4c4; 
   }

   .links a {
    text-decoration:none; 
    text-align:center;
    color: #c7c4c4;  
    text-decoration: none;
   }
   .links a:hover {
    color: #c7c4c4;
    text-decoration: underline;
    letter-spacing: 4px;
   }

  	.holst p {
		line-height: 45px;
		color: black;
		text-align: center;
		font-family:"Wearetrippin Display";
		font-size: 50px;
	}

	.centerPhotos {	
		margin-left: 0.5%;		
	}

	.holstText a {
		 color: #b52b2b;
	}
	.holstText a:hover {
		text-decoration: underline;
    	letter-spacing: 4px;
	}
	.holstText img {
		margin-left: 0.5%;
		margin-right: -0.5%;
	}
	.Location {
		font-family: "Wearetrippin Display" ;
		text-align-last:  center ;
		margin-bottom: 1%;
	}
	.Location a {
	    letter-spacing: 3px;
		color:  #b52b2b;
		font-size: 50px;
	}
	.Location a:hover {
    	letter-spacing: 4px;
	}
	.footer {
  		position: relative;
	    width: 100%;
	    height: 90px;
	   	max-width: 100%;
	   	max-height: 15%;
	   	min-width: 10%;
	   	top: 5px;
	   	margin: 0 auto;
	   	overflow: hidden;
	   	background-color: black; 
	   	color : #c7c4c4;
	   	left: 0;
	}	
	.footer p {
		line-height: 45px;
		color: #c7c4c4;
		text-align: center;
		font-size: 20px;	
	}
  </style>
</head>
<body>
	<div class="container">
 		<header class="head">
            <form action="./../show.php" method="post"> <input type="submit" value="showCookie" name="show"> </form>
 			<nav class="links">
  		 <a href="https://www.google.com/maps/@40.7100571,-74.0087989,3a,75y,77.69h,104.75t/data=!3m8!1e1!3m6!1sAF1QipNy7dsbld4ttJCQ0cCvFSY3j5-xQTb-E2rrlFCK!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipNy7dsbld4ttJCQ0cCvFSY3j5-xQTb-E2rrlFCK%3Dw203-h100-k-no-pi-3.3762057-ya67.87782-ro-0-fo100!7i8000!8i4000">Map</a>
	  		<a href="index.php"> Home</a>
			</nav>
    	</header>
    	<div class="main">
    		<aside>
    			<nav class="areas">
    				<a href="PhotosManhattan.php">•‎Manhattan <br><br></a>
    				<a href="PhotosBronk.php">•‎Bronk<br><br></a>
					<a href="PhotosBrooklyn.php">•‎Brooklyn<br><br></a>
					<a href="PhotosQeens.php">•‎Queens<br><br></a>
					<a href="PhotosStateIsland.php">•‎State Island<br><br></a>
    			</nav>
    		</aside>
    		<section class="holst">
    			<section class="centerPhotos">
    				<div class="holstText">
    					 <p> New York City isn’t all bright lights and skyscrapers. We’ve also got wildlife refuges, botanical gardens, parks and miles of <br>beaches—all of which you can see on Staten Island, the City’s greenest borough. The island’s other sights include one of America’s longest-operating military forts, a living colonial village, a Chinese sculpture garden and a Yankees minor league team.    				
    				</div>
    		
    			</section>
    			<section class="rightPhotos">
    				<img src="/Laba6/generalTask/Design/images/Town/State Island/4.jpg" alt="Error" >
    				<img src="/Laba6/generalTask/Design/images/Town/State Island/5.jpg" alt="Error" >
    				<img src="/Laba6/generalTask/Design/images/Town/State Island/6.jpg" alt="Error" >
    				<img src="/Laba6/generalTask/Design/images/Town/State Island/7.jpg" alt="Error" >
    				<div class="Location"> 
    					<a href="https://www.google.com/maps/place/%D0%A1%D1%82%D0%B0%D1%82%D0%B5%D0%BD-%D0%90%D0%B9%D0%BB%D0%B5%D0%BD%D0%B4,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%A8%D0%90/@40.5645845,-74.2168581,12z/data=!3m1!4b1!4m13!1m7!3m6!1s0x89c28b553a697cb1:0x556e43a78ff15c77!2z0JHRgNC-0L3QutGBLCDQndGM0Y4t0JnQvtGA0LosINCh0KjQkA!3b1!8m2!3d40.8447819!4d-73.8648268!3m4!1s0x89c245ef79f4d4e7:0x50271f8534babc78!8m2!3d40.5795417!4d-74.1501617">Location</a></p>
    				</div>
				</section>
				<section class="leftPhotos">
    				<img src="/Laba6/generalTask/Design/images/Town/State Island/1.jpg" alt="Error" >
    				<img src="/Laba6/generalTask/Design/images/Town/State Island/2.jpg" alt="Error" >
					<img src="/Laba6/generalTask/Design/images/Town/State Island/3.jpg" alt="Error" >
    				<img src="/Laba6/generalTask/Design/images/Town/State Island/11.jpg" alt="Error">

				</section>
    		</section>
		<footer>
			<section class="footer">
				<p>© 2020 Unfunny Memes Corporation</p>
			</section>
		</footer>
</body>
</html>
