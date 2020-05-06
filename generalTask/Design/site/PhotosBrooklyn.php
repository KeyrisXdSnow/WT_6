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
      .footer {
      	flex-grow: 1;
      }
    }
  /* меньше 500px */
  @media all and (max-width: 500px) {
  .links { 
  	flex-direction: column;
   }
  }
    @media all and (max-width: 1270px) {
  	.photos {
  		flex-shrink: : 1 ;
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
			background: black; /* для красоты */
			border-bottom: 6px inset black;
		}
	.areas a {	
	    color: #79b3dc;; /* Цвет обычной ссылки */ 
	    text-decoration: none; /* Убираем подчеркивание у ссылок */
	    letter-spacing: 3px;
    }

     .holst {
   		margin-top: 10px;
  		width: 100%;
  		float: right;
  		background-color: black;
  	}
  	.holst p {
		line-height: 45px;
		color: #c7c4c4;
		text-align: center;
		font-family:"Wearetrippin Display";
		font-size: 50px;
	}

	.rightPhotos {
		position: inherit;
  		margin-right: 0.5%;
  		width: 99%;
  		margin-left: 2px;
  		float: right;
	}

	.leftPhotos {
		width: 100%;
		align-content: center;
		justify-content: center;
		margin-top: 0.5%;
		margin-left: 0.5%;		
	}
  
	.leftPhotos img {
		width: 99%;
	}
	.leftPhotos p {
		width: 100%;
		text-align: center;	
	}
	.holstText {
		position: inherit;
		color: #c7c4c4; 
		width: 100%;
		height: 224px;
		margin-top: -4%;
		margin-left: 0.5%;
	}
	.holstText a {
		 color: #79b3dc;
	}
	.video {
		position: inherit;
		background-color: black;
		width: 100%;
		float: right;
	}
    }

    @media all and (min-width: 1270px) {

     .main {
     	 	flex-shrink: 12 ;
     }

  	.areas {
  		 
  		flex-shrink: all;
        width: 13%;
  		background: black;
  		margin-top: 90px;
  		float: left;
  		left: 121px;
  		font-family:"Wearetrippin Display";
		font-size: 38px;
		height: 920px;
  	}
  	.areas a {	
	   	letter-spacing: 0.5px;	
	   	line-height: 90px;
	    color: #79b3dc;; /* Цвет обычной ссылки */ 
	    text-decoration: none; /* Убираем подчеркивание у ссылок */
	    text-decoration: underline; /* Убираем подчеркивание у ссылок */
	    letter-spacing: 3px;
    	}

       .holst {

   		margin-top: 90px;
  		width: 85.5%;
  		height: 920px;
  		float: right;
  		background-color: black;
  	}
  	.holst p {
		line-height: 45px;
		color: #c7c4c4;
		text-align: center;
		font-family:"Wearetrippin Display";
		font-size: 50px;
	}	

	.rightPhotos {
		position: inherit;
  		margin-top: -63.5%;
  		margin-right: 0.5%;
  		width: 48%;
  		height: 938px;
  		margin-left: 2px;
  		float: right;
	}
	.leftPhotos {
		margin-top: 0.5%;
		margin-left: 0.5%;		
	}

   .leftPhotos img {
      width: 50.8% ;
   }

	.holstText {
		position: inherit;
		color: #c7c4c4; 
		width: 50%;
		height: 224px;
		float: left;
		margin-top: -4%;
		margin-left: 0.5%;
	}
	.holstText a {
		 color: #79b3dc;
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

   .rightPhotos img {
      width : 100%
   }


   	.video {
		position: inherit;
		float: left;
    width: 100%;
    border-top: 12px solid white;
		background: black;
	}
  .video video {
    width: 100%;
  }

	.footer {
  		position: relative;
	    width: 100%;
	    height: 90px;
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
    			<section class="leftPhotos">
    				<img src="/Laba6/generalTask/Design/images/Town/Brooklyn/Gor.jpg" alt="Error" >
    				<div class="holstText">
    					<p>Brooklyn is New York's most populated borough - 2.58 million inhabitants. Located in the western part of <a href="https://www.google.com/maps/place/%D0%9B%D0%BE%D0%BD%D0%B3-%D0%90%D0%B9%D0%BB%D0%B5%D0%BD%D0%B4/@40.8466823,-74.0701945,8z/data=!3m1!4b1!4m5!3m4!1s0x89e84454e1eea5cb:0x1df7f96186940d18!8m2!3d40.789142!4d-73.134961">Long Island</a>.</p>
    				</div>
    			</section>
    			<section class="rightPhotos">
					<img src="/Laba6/generalTask/Design/images/Town/Brooklyn/Bridge.png" alt="Error" >
    				<img src="/Laba6/generalTask/Design/images/Town/Brooklyn/SkyView.jpg" alt="Error" >
    				<img src="/Laba6/generalTask/Design/images/Town/Brooklyn/Art.jpg" alt="Error" >
				</section>
    		</section>
    		<section class="video">
    			<video src="../Design/Video/Brooklyn.mp4" alt="Error" controls="controls" poster="../NYC.png"> </video>
    		</section>
		<footer>
			<section class="footer">
				<p>© 2020 Unfunny Memes Corporation</p>
			</section>
		</footer>
</body>
</html>
