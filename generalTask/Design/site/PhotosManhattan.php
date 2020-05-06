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
    }
    @media all and (max-width: 500px) {
      .links { 
        justify-content: space-around; 
      }
      .links a{ 
        flex-grow:1; 
      }
      .areas {
      	justify-content: space-around;
      }
      .areas a{ 
        flex-grow:1; 
      }
    }  
  	@media all and (max-width: 1270px) {
  	.areas {
  			position: inherit;
			height: 200px;
			overflow: auto;
			margin-top: 90px;
			box-sizing:border-box; /* чтобы внутренний отступ не влиял когда там будет текст... */
			font-family:"Wearetrippin Display";
			font-size: 38px; 
			text-align:center; 
			background:black; /* для красоты */
		}
	.areas a {	
	    color: #79b3dc; /* Цвет обычной ссылки */ 
	    text-decoration: none; /* Убираем подчеркивание у ссылок */
	    letter-spacing: 3px;
    }	

  .holstText p {
    line-height: 45px;
    color: #c7c4c4 ;
    background: black;
    text-align: center;
    font-family:"Wearetrippin Display";
    font-size: 50px;
  }
  .holstText a {
     color: #79b3dc; 
  }
  .holst {

    background: black;
  }
  
	.video {
		position: inherit;
		background-color: black;
		width: 100%;
		float: right;

	}

    } 

    @media all and (min-width: 1270px) {
  	.areas {
  		overflow: auto;
  		background: black;
  		margin-top: 90px;
        width: 14%;
  		height: 1540px;
  		float: left;
  		left: 121px;
  		font-family:"Wearetrippin Display";
		font-size: 38px;
  	}
  	.areas a {	
	   	letter-spacing: 0.5px;	
	   	line-height: 90px;
	    color: #79b3dc; /* Цвет обычной ссылки */ 
	    text-decoration: none; /* Убираем подчеркивание у ссылок */
	    text-decoration: underline; /* Убираем подчеркивание у ссылок */
	    letter-spacing: 3px;
    	}
     .holst {
   		margin-top: 90px;
  		width: 85.0%;
  		float: right;
  		height: 1460px;
  		background-color: black;
  	}
    .holst {
      height: 1540px;
    }

  	.holst p {
		line-height: 45px;
		color: #c7c4c4;
		text-align: center;
		font-family:"Wearetrippin Display";
		font-size: 50px;
	}
	.rightPhotos {
		background: black;
		position: inherit;
  		margin-top: 1.75%;
  		margin-right: 0.65%;
  		width: 48%;
  		height: 1436px;
  		margin-left: 2px;
  		float: right;
	}
	.holst .leftPhotos {	
		margin-left: 0.5%;		
	}
	.holstText {
		background: black;
		position: inherit;
		color: #c7c4c4; 
		width: 50%;
		height: 1455px;
		float: left;
		margin-left: 0.5%;
	}
	.holstText a {
		 color: #79b3dc;
	}

	.video {
		position: inherit;
		background-color: black;
		width: 85%;
		float: right;

	}
    }  
  /* меньше 500px */
  @media all and (max-width: 500px) {
  .links { 
  	flex-direction: column;
   }
  }

  .container {
  	display: flex;
  }
   .main {
   		flex-direction: row;
   		flex-wrap: wrap;
   }
   .main img,video {
   		width: 100%;
   }
   .main section, aside {
   	flex:1 1 calc(33.33% - 30px);
   	box-sizing:border-box;
   	min-width:170px;   	
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

    .video {
    position: inherit;
    width: 100%;
    float: left;
    border-top: 12px solid white;
    background: black;
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
    			<section class="leftPhotos">
    				<section class="holstText">
    					 <p> The heart of New York. Legend has it that, discovered by Europeans in 1524, the island, called Manhattan in the future, was bought from the Indians for only $24. <br></b><br> <a href="https://www.google.com/maps/place/%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%A8%D0%90/@40.7590403,-74.0392706,12z/data=!3m1!4b1!4m5!3m4!1s0x89c2588f046ee661:0xa0b3281fcecc08c!8m2!3d40.7830603!4d-73.9712488?hl=ru>Long Island">Location</a></p>
    					 <img src="/Laba6/generalTask/Design/images/Town/Manhattan/2.jpg" alt="Error">
    				</section>
    			</section>
    			<section class="rightPhotos">
					<img src="/Laba6/generalTask/Design/images/Town/Manhattan/1.jpg" alt="Error">
					<img src="/Laba6/generalTask/Design/images/Town/Manhattan/5.jpg" alt="Error">
    				<img src="/Laba6/generalTask/Design/images/Town/Manhattan/3.jpg" alt="Error">
    				<img src="/Laba6/generalTask/Design/images/Town/Manhattan/6.jpg" alt="Error">
    				<img src="/Laba6/generalTask/Design/images/Town/Manhattan/4.jpg" alt="Error">
				</section>
    		</section class="districts">
    		<section class="video">
    			<video src="../Design/Video/NYC.mp4" alt="Error" controls="controls" poster="../NYC.png"> </video>
    		</section>
		<footer>
			<section class="footer">
				<p>© 2020 Unfunny Memes Corporation</p>
			</section>
		</footer>
        </div>
</body>
</html>
