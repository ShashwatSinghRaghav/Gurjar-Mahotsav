<?php
$redirect = 0;
if(isset($_POST['submit'])){
    $redirect = 1;

    $con = mysqli_connect('localhost', 'gurj17_root', 'History@1857','gurj17_database');
	// get the post records
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
  $city = $_POST['city'];

	//echo 'hi';die;

	// database insert SQL code

	$sql = "INSERT INTO `donation` (`name`,`email`, `phone`, `city`) VALUES ('$name','$email', '$phone', '$city')";

	// insert in database
	$rs = mysqli_query($con, $sql);

	$idselect = "SELECT id from `donation` WHERE `name` = '$name' and `email` = '$email' and `phone` = '$phone'and `city` = '$city'";

	$result = mysqli_query($con, $idselect);

	$temp = 0;

	while ($row = $result->fetch_assoc()) {
		 $temp = $row['id'];
	}

	if($redirect == 1){
		header("Location: certificatedownload.php?PassID=".base64_encode($temp));
	}
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16" />
    <title>Download Certificate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/Flickity.css" media="screen">

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
        <section id="section-register" style="background-size: cover;">
                <div class="wm wm-border dark wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; background-size: cover;">THANKYOU</div>
				<div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
						<div class="col-md-6 offset-md-3 text-center wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; background-size: cover;">
                            <h1>Thank You For Your Donation</h1>
                            <h3 style = "padding-top: 10px;">To Download Your Certificate, Kindly Complete The Form</h3>
                            <div class="separator" style="background-size: cover;"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single" style="background-size: cover;"></div>
                        </div>

                        <div class="col-md-8 offset-md-2 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; background-size: cover;">
                            <form name="contact_form" id="contact_form"  method="POST" action="downloadcertificate.php">
                                <div class="row">
                                    <div class="">

                                        <div style="background-size: cover;">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Full Name">
                                        </div>

                                        <div style="background-size: cover;">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                        </div>


                                        <div style="background-size: cover;">
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                        </div>
                                        
                                        <div style="background-size: cover;">
                                            <input type="text" name="city" id="city" class="form-control" placeholder="Your City">
                                        </div>
                                    </div>


                                    <div class="col-md-12 text-center" style="background-size: cover;">
                                      <input type="submit" name="submit" class="btn btn-line" value="Download Certificate">

                                    </div>
									 <span class="output_message"></span>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>

        </section>



        <!-- footer begin -->
        <footer class="style-2">
          <div class="container">
            <div class="row align-items-middle">
              <div class="img-containger" >
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

<style>
.has-error{
	margin-bottom:20px;
}
.has-error .form-control{
	margin-bottom:0px !Important;
}
.has-error .error{
    padding: 0px;
    display: none;
    color: #d9534f;
    border: 0px !important;
    font-size: 12px;

}
</style>
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/countdown-custom.js"></script>
	<script>
	/**	$(document).ready(function() {
			$('#contact_form').on('submit',function(){

				// Add text 'loading...' right after clicking on the submit button.
				$('.output_message').text('Loading...');

				var form = $(this);
				$.ajax({
					url: form.attr('action'),
					method: form.attr('method'),
					data: form.serialize(),
					success: function(data){
						 //Convert the Byte Data to BLOB object.
                    var blob = new Blob([data], { type: "application/octetstream" });

                    //Check the Browser type and download the File.
                    var isIE = false || !!document.documentMode;
                    if (isIE) {
                        window.navigator.msSaveBlob(blob, fileName);
                    } else {
                        var url = window.URL || window.webkitURL;
                        link = url.createObjectURL(blob);
                        var a = $("<a />");
                        a.attr("download", fileName);
                        a.attr("href", link);
                        $("body").append(a);
                        a[0].click();
                        $("body").remove(a);
                    }
					}
				});

				// Prevents default submission of the form after clicking on the submit button.
				return false;
			});
		});***/
	</script>
  </body>
</html>
