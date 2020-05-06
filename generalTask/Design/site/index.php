<?php
session_start();
if ($_SESSION['user']|| ($_COOKIE['user'])) include('./../../generalTask/generalTask.php');
else header("Location: ./../../additionalTask/index.php");

?>
<!DOCTYPE HTML>
<html lan=en>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <title>New York City</title>
     <style>

         @font-face{
             font-family: "Wearetrippin Display";
             src: url("/Laba6/generalTask/Design/images/Font/Wearetrippin Display.ttf");
         }

         @media all and (max-width: 500px) {
             .links {
                 justify-content: space-around;
             }
             .links a{
                 flex-grow:1;
             }
         }

         @media all and (max-width: 500px) {
             .links {
                 flex-direction: column;
             }
             .main figcaption {
                 font-size: 30%;
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

         .main {
             margin-top: 10%;
             float: left;
             width: 100%;
             flex-shrink: 1;
             flex-grow: 1;
             padding-top: 33px;
             color: #000000;
         }

         .main figure {
             display: contents;
             width: 100%;
             float: left; /* Блоки выстраиваются по горизонтали */
         }
         .main figure img {
             width: 100%;
         }
         .main figcaption {
             text-align: center;
             margin-top: -1%;
             font-size: 70px;
             font-family: "CapsBold";
         }

         .video video {
             width:100% ;
         }


         .footer {
             position: relative;
             width: 100%;
             height: 90px;
             margin: 0 auto;

             left: 0;
             background-color: black;
             color : #c7c4c4;
         }
         .footer p {
             line-height: 45px;
             color: #c7c4c4;
             text-align: center;
             font-size: 20px;
             font-family: "CapsBold";
         }
     </style>
 </head>
 <body>
 	<section class="container">
 		<header class="head">
 			<nav class="links">
  			<a href="https://www.google.com/maps/@40.7100571,-74.0087989,3a,75y,77.69h,104.75t/data=!3m8!1e1!3m6!1sAF1QipNy7dsbld4ttJCQ0cCvFSY3j5-xQTb-E2rrlFCK!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipNy7dsbld4ttJCQ0cCvFSY3j5-xQTb-E2rrlFCK%3Dw203-h100-k-no-pi-3.3762057-ya67.87782-ro-0-fo100!7i8000!8i4000">Map</a>
	  		<a href="PhotosManhattan.php">Districts </a>
                <form action="./../show.php" method="post"> <input type="submit" value="showCookie" name="show"> </form>
                <form action="./../../additionalTask/exit.php" method="post"> <input type="submit" value="exitFromAccount" name="exit"> </form>
			</nav>
    </header>
    <section class="main">
    		<section>
    			<figure>
					   <img src="/Laba6/generalTask/Design/images/background/New_York_art.jpg" alt = "Error"  >
					   <figcaption>NEW YORK CITY</figcaption>
			   	</figure>	
		    </section>
			<section class="video">
				<video src="/generalTask/Design/Video/Welcome%20to%20New%20York.mp4" alt="Error" autoplay="autoplay" controls="controls" class = "videoPlayer" poster="../fon.png" ></video>
			</section>
		</section>
		<footer class="footer">
      <section>
				<p>© 2020 Unfunny Memes Corporation</p>
			</section>
		</footer>
  </section>
 </body>







