<?php if(isset($_GET['PassID'])&& !empty($_GET['PassID'])){
	$PassID = base64_decode($_GET['PassID']);
	$servername = "localhost";
	$username = "gurj17_root";
	$password = "History@1857";
	$dbname = "gurj17_database";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "Select * from `user` where id=$PassID";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		$temp = "ID  : GM2022-".$row['id'];
	  }
	  	//header('content-type: image/jpeg');
		//$font="http://localhost/Gurjar-Mahotsav-main/CALIBRIB.TTF";
		function isLocalhost($whitelist = ['127.0.0.1', '::1']) {
			return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
		}
		if (isLocalhost())
			$font = "CALIBRIB.TTF";	
		else
			$font = "/home2/dhuntonq/example.com/Gurjar-Mahotsav-main\\CALIBRIB.TTF";


		//header('Content-Type: image/png');

		$image = imagecreatefromjpeg("entrypass.jpg");
		$color = imagecolorallocate($image, 255,255,255);
		$gate="GATE  : 4A";
		$gate_row="ROW  : 02";
		$file="FreePass.jpg"; 

		imagettftext($image,30,0,1020,200,$color,$font,$gate);
		imagettftext($image,30,0,1020,250,$color,$font,$gate_row);
		imagettftext($image,20,0,1015,350,$color,$font,$temp);

		// This will tell the browser to download it
		//header('Content-Disposition: attachment; filename='.$file); 
		//imagejpeg($image,);
		 $newFileName = 'Pass'.$_GET['PassID'].'.jpg';
		 imagejpeg($image,'pass/'.$newFileName);//save image

          //$Newimage =  imagejpeg($image);
		  imagedestroy($image);
		  //echo $Newimage;
		//exit;
	} else {
	  //echo "0 results";
	}
 mysqli_close($conn);}

//  $folder = 'pass';
//  $files = glob($folder. '/*');

//  foreach( $files as $file)
//  {
//   if(is_file($file)){
//     unlink($file);
//   }
//  }

 ?>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16" />
    <title>Thankyou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- CSS Files
    ================================================== -->
    <link
      href="css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
      id="bootstrap"
    />
    <link
      href="css/bootstrap-grid.min.css"
      rel="stylesheet"
      type="text/css"
      id="bootstrap-grid"
    />
    <link
      href="css/bootstrap-reboot.min.css"
      rel="stylesheet"
      type="text/css"
      id="bootstrap-reboot"
    />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/rev-settings.css" rel="stylesheet" type="text/css" />
    <link href="css/color.css" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <link
      rel="stylesheet"
      href="css/colors/magenta.css"
      type="text/css"
      id="colors"
    />

    <!-- custom font -->
    <link rel="stylesheet" href="css/font-style.css" type="text/css" />
  </head>

  <body id="homepage">
    <div id="wrapper">
      <!-- header begin -->
      <header class="transparent">
        <div class="info">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="column">
                  Working Hours Monday - Friday
                  <span class="id-color"><strong>08:00-16:00</strong></span>
                </div>
                <div class="column">
                  Toll Free
                  <span class="id-color"><strong>1800.899.900</strong></span>
                </div>
                <!-- social icons -->
                <div class="column social">
                  <a href="https://www.facebook.com/gurjarmahotsav"
                    ><i class="fa fa-facebook fa-lg"></i
                  ></a>
                  <a href="https://twitter.com/Gurjarmahotsav"
                    ><i class="fa fa-twitter fa-lg"></i
                  ></a>
                  <a href="https://www.instagram.com/gurjarmahotsava/?igshid=YmMyMTA2M2Y%3D"
                    ><i class="fa fa-instagram fa-lg"></i
                  ></a>
                </div>
                <!-- social icons close -->
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!-- logo begin -->
              <div id="logo">
                <a href="index.html">
                  <img
                    class="logo"
                    src="images/logo1.png"
                    height="80px"
                    width="80px"
                    alt=""
                  />
                </a>
              </div>

              <!-- logo close

              <!- small button begin -->
              <span id="menu-btn"></span>
              <!-- small button close -->

              <div class="header-extra">
                <div class="v-center"></div>
              </div>

              <!-- mainmenu begin -->
              <ul id="mainmenu" class="ms-2">
                <li>
                  <a href="index.html">Home<span></span></a>
                </li>
                <li>
                  <a href="about.html">About<span></span></a>
                </li>

                <li>
                  <a href="donate.html">Donate<span></span></a>
                </li>               
                <li>
                  <a href="gallary.html">Gallery<span></span></a>
                </li>
                <li>
                  <a href="comingsoon.html">History<span></span></a>
                </li>
                <li>
                  <a href="exhibitor.html">Exhibitor<span></span></a>
                </li>
                <li>
                  <a href="contact.html">Contact Us<span></span></a>
                </li>
              </ul>

              <!-- mainmenu close -->
            </div>
          </div>
        </div>
      </header>
      <!-- header close -->


        <!-- section begin -->
        <section id="section-features">
                    
          <!-- section begin -->
        <section id="section-ticket" class="jarallax text-light">
          <div class="wm wm-border dark wow fadeInDown">Thankyou</div>
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                <h1>Thankyou! We will get back to <br/>You as Soon as possible!</h1>
                <div class="spacer-single"></div>
              
          </div>
          <?php 
		  if(isset($_GET['PassID'])&& !empty($_GET['PassID'])){
			echo '<a id="forceDownload" href="pass/'.$newFileName.'" download target="_blank"><img style="width: 100%;" src="pass/'.$newFileName.'"  /></a>';
			echo '<a href="pass/'.$newFileName.'" download  target="_blank" style="font-size:26px;text-align:center;margin-top:50px"><u>Downlaod</u></a>';
		  }	
		  ?>
		  
        </section>
        </section>

        
        


        <!-- footer begin -->
        <footer class="style-2">
          <div class="container">
            <div class="row align-items-middle">
              <div class="img-containger" ">
                <img src="images/Final Logo Circle.png" />
              </div>

              <div class="img-footer">
                <div class="h6 padding10 pt12 pb0" style="text-align: center">
                  <a href="mailto:info@gurjarmahotsav.com"
                    ><i class="i_h3 fa fa-envelope-o id-color"></i
                    ><u>info@gurjarmahotsav.com</u></a
                  >
                </div>
              </div>

              <div class="img-footer">
                <div class="h6 padding10 pt0 pb0">
                  <a href="https://goo.gl/maps/kqPMWVBBmoF36zbcA"
                    ><i class="i_h3 fa fa-map-marker id-color"></i
                    ><u>Surajkund Mela Ground,Faridabad</u></a
                  >
                </div>
              </div>

              <div class="img-footer">
                <div class="h6 padding10 pt0 pb0">
                  <a href="tel:+91 9811990031"
                    ><i class="i_h3 fa fa-phone id-color"></i
                    ><u>+91 9811990031</u></a
                  >
                </div>
              </div>
              
              <div class="img-footer">
                <div class="h6 padding10 pt0 pb0">
                  <div class="social-icons">
                    <a href="https://www.facebook.com/gurjarmahotsav"
                      ><i class="fa fa-facebook fa-lg"></i
                    ></a>
                    <a href="https://twitter.com/Gurjarmahotsav"
                      ><i class="fa fa-twitter fa-lg"></i
                    ></a>
                    <a href="https://www.instagram.com/gurjarmahotsava/?igshid=YmMyMTA2M2Y%3D"
                      ><i class="fa fa-instagram fa-lg"></i
                    ></a>
                    <a href="https://youtube.com/channel/UCrTD3BR6mkhA757dtsnMUPg"
                      ><i class="fa fa-youtube-play fa-lg"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="img-footer">
                <div class="h6 padding10 pt0 pb0">
                  <div class="copyright-text">
                Copyright &copy; 2022 - All Rights Reserved by <span class="id-color"> Gurjar Art & Culture Trust</span>
              </div>
                </div>
              </div>

             

              

              <div class="text-right">
                
              </div>
            </div>
          </div>

          <a href="#" id="back-to-top" class="custom-1"></a>
        </footer>
        <!-- footer close -->
      </div>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/countdown-custom.js"></script>
	<script>
		$( document ).ready(function() {
			$('#forceDownload').trigger('click');
		})
	</script>
  </body>
</html>
