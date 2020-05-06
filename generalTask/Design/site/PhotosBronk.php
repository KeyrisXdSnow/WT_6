<?php
session_start();
if ($_SESSION['user']|| ($_COOKIE['user'])) include('./../../generalTask/generalTask.php');
else header("Location: ./../../additionalTask/index.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <title>New York City</title>
  <style type="text/css">
  	@font-face{
  		font-family: "Wearetrippin Display";
  		src: url("/Laba6/generalTask/Design/images/Font/Wearetrippin Display.ttf");
  	}

    }
    @media all and (max-width: 500px) {
      .links { 
        justify-content: space-around; 
    }
      .links a { 
        flex-grow:1; 
      }
      .footer {
        flex-grow:1;
      }
    }
  /* меньше 500px */
  @media all and (max-width: 500px) {
  .links { 
  	flex-direction: column;
   }
  }

  @media all and (max-width: 1270px) {

  	.areas {	
  			position: inherit;
  			width: 100%;
			height: 200px;
			overflow: auto;
			margin-top: 90px;
			box-sizing:border-box; /* чтобы внутренний отступ не влиял когда там будет текст... */
            font-family: "Wearetrippin Display", serif;
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
  }

  @media all and (min-width: 1270px) {
  	.areas {
  		overflow: auto;
  		background: white;
  		border-right: 6px inset black;
        height: 3000px;
  		float: left;
  		left: 121px;
        font-family: "Wearetrippin Display", serif;
		font-size: 38px;
  	}

      .areas {
          margin-top: 90px;
      }

      .areas a {
          line-height: 90px;
	    color: #b52b2b; /* Цвет обычной ссылки */
          /* Убираем подчеркивание у ссылок */
	    text-decoration: underline; /* Убираем подчеркивание у ссылок */
	    letter-spacing: 3px;
    	}

    .holst {
   		margin-top: 40px;
  		width: 84%;
  		height: 2330px;
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
	.leftPhotos {

		position: inherit;
  		margin-top: 1.75%;
  		margin-right: 0.65%;
  		width: 48.5%;
  		height: 938px;
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
        font-family: "Wearetrippin Display", serif;
	 font-size: 50px;
	 color: #c7c4c4; 
   }

   .links a {
    text-decoration:none; 
    text-align:center;
    color: #c7c4c4;
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
        font-family: "Wearetrippin Display", serif;
		font-size: 50px;
	}
  .holst img {
    width: 99%;
  }
  .leftPhotos img { 
    width : 100%;
   }
  .rightPhotos img {
    width : 100%;
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
	.footer {
  		position: relative;
        left: 0; bottom: 0;
	    width: 100%;
	    height: 90px;
	   	top: 5px;
	   	margin: 0 auto;
	   	overflow: hidden;
	   	background-color: black; 
	   	color : #c7c4c4;
    }
	.footer p {
		line-height: 45px;
		color: #c7c4c4;
		text-align: center;
		font-size: 20px;
        font-family: "CapsBold", serif;
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
              <img src="/Laba6/generalTask/Design\images\Town\Bronk\Subway.jpg" alt="Error">
    					 <p> The Bronx ranks third in US population density after Manhattan and Brooklyn, and is divided into three districts. The most prestigious is the East Bronx, built up by decent high-rise buildings in which quite wealthy people live. The North Bronx is more like a suburb of a big city. The West Bronx is greener, saturated with large parks and hills. The poorest part can be called the South Bronx, where many low-income emigrants live: to this day there are real slums, and night walks are quite risky. <br></b><br> <a href="https://www.google.com/maps/place/%D0%91%D1%80%D0%BE%D0%BD%D0%BA%D1%81,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%A8%D0%90/@40.8528558,-73.9064485,12.5z/data=!4m5!3m4!1s0x89c28b553a697cb1:0x556e43a78ff15c77!8m2!3d40.8447819!4d-73.8648268">Location</a></p>
    					 
    				</div>
    			</section class="photos">
    				<section class="rightPhotos">
    					<img src="/Laba6/generalTask/Design/images/Town/Bronk/6.jpg" alt="Error" >
    					<img src="/Laba6/generalTask/Design/images/Town/Bronk/3.jpg" alt="Error" >
    					<img src="/Laba6/generalTask/Design/images/Town/Bronk/7.png" alt="Error" >
    					<p> Bronks homeland of Al Pacino and Calvin Klein </p>	
					</section>
					<section class="leftPhotos">
    					<img src="/Laba6/generalTask/Design/images/Town/Bronk/5.jpg" alt="Error" >
    					<img src="/Laba6/generalTask/Design/images/Town/Bronk/4.jpg" alt="Error" >
						<img src="/Laba6/generalTask/Design/images/Town/Bronk/2.jpg" alt="Error" ">
					</section>
				</section>		
    		</section>
		<footer>
			<section class="footer">
				<p>© 2020 Unfunny Memes Corporation</p>
			</section>
		</footer>
</body>
</html>
