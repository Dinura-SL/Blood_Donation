<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blood Donation Campaign - 2022/07</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
	
	<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"
/>
	
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
	
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<script type="text/javascript">  
		function validateName(){  
		var name=document.getElementById("name").value; 

			if (name==null || name=="" ){  
 				Swal.fire('Please enter your name ');
				return false; 
			}else{
				return true;
			}
			
			
			if (isNaN(name)){  
 				Swal.fire('Please use letters only ');
				return false;  
			}else{
				return true;
			}
		}
		
		function validateContactNo(){
			var contactNo=document.getElementById("contact").value;
			if(contactNo.length < 10 || (contactNo.charAt("0") != 0) || contactNo.length > 10){
				Swal.fire('Please enter valid contact number ');
				return false;
			}else{
				return true;
			}
		}
		
			function validateNIC(){
				var Nic=document.getElementById("nic").value;
				if(Nic.length<10 || Nic.length==11 ||Nic.length>12 ){
					Swal.fire('Please enter valid NIC ');
					return false;
				}else{
					return true;
				}
			}
			
		function validate()
{
            if (validateName()&& validateContactNo()&& validateNIC()  ) 
			{
                return true;
            } 
		else 
		    {
                event.preventDefault();
            }
}	
	
			
  
</script>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0" id="Home">
        <nav class="navbar navbar-expand-lg bg-transparent navbar-dark py-3 py-lg-0 px-lg-5">
            
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon text-dark"></span>
            </button>
			<a href="index.html" class="nav-item nav-link" ><img src="img/Happiness Cultivate Twitter Header (1).png" alt="Logo" width="320" height="90"></a>
			
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse text-dark">
                <div class="navbar-nav mr-auto py-0 bg-transparent">
					
                    <a href="#Home" class="nav-item nav-link active text-dark bg-danger">Home</a>
                    <a href="#About-us" class="nav-item nav-link text-dark">About Us</a>
                    <a href="#Services" class="nav-item nav-link text-dark">Activities</a>
                    <a href="#Contact" class="nav-item nav-link text-dark">Contact</a>
                </div>
                <a href="#register-reg" class="btn btn-lg btn-danger px-3 d-none d-lg-block">Register</a>
            </div>
        </nav>
    </div>
	
	
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-mdb-interval="20000">
                    <img class="w-100" src="img/POS_En.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/POSTER_Sinhala_Updated.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
							
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Booking Start -->
    <div  class="container-fluid bg-white fa-align-center">
		
        <div id="register-reg" class="container fa-align-center bg-light align-center">
            <div class="row align-items-center bg-transparent">
                <div class="col-lg-12">
                    <div  class="bg-light py-5 px-4 px-sm-6">
						<h1><center>Register here</center></h1>
                        <form class="py-3" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                               <label class="col-form-label-lg text-dark btn-block" for="firstName" >Full Name / සම්පුර්ණ නම </label><input  name="name" id="name" type="text" class="form-control border-0 p-4" placeholder="Full Name / සම්පුර්ණ නම"  />
                            </div>
                            <div class="form-group">
                               <label class="col-form-label-lg text-dark btn-block" for="firstName"  >Contact No / දුරකථන අංකය </label><input name="contact" id="contact" type="text" class="form-control border-0 p-4" placeholder="Example : 071 2345678"  />
                            </div>
							<div class="form-group">
                               <label class="col-form-label-lg text-dark btn-block" for="firstName"  >NIC Number / ජා.හැ.අංකය</label><input name="nic" id="nic" type="text" class="form-control border-0 p-4" placeholder="123456789V / 0123456789"  />
                            </div>

                            <div class="form-group">
								<label class="col-form-label-lg text-dark btn-block" for="firstName"  >Blood group / රුධිර වර්ගය</label>
                                <select name="bgroup" id="bgroup" class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Choose / තෝරන්න</option>
                                    <option value="A+">A+</option>
                                    <option value="A">A-</option>
                                    <option value="B+">B+</option>
									<option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
                                </select>
                            </div>
                            <div>
                               
								<input type="submit"  class="btn btn-danger btn-block border-0 py-3" name="submit1"  value="Register Now" id="submit1" onClick="validate()"/>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
	<?php
	
	
	$con = mysqli_connect("sql113.epizy.com", "epiz_32058128" , "4V01le7biBvk0" , "epiz_32058128_blooddon");
	if (isset($_POST['submit1']))
	{
		$name = $_POST["name"];
		$contact = $_POST["contact"];
		$nic = $_POST["nic"];
		$bGroup = $_POST["bgroup"];
		if(!$con)
		{
			die("Sorry we are facing a technical issue");
		}
		
		$sql = "INSERT INTO `doners` (`id`, `name`, `contact`, `nic`, `bGroup`) VALUES (NULL, '$name', '$contact', '$nic', '$bGroup');";
		
		$result = mysqli_query($con,$sql);
		echo '<script type="text/javascript">
    $(document).ready(function() {
        Swal.fire({
            title: "Successfully registered!",
            text: "We will get back to you soon!!",
            icon: "success",
            button: "Ok",
            timer: 5000
        });
    });
</script>';
		
		
		
	}
	mysqli_close($con);
	
	?>
    <!-- Booking Start -->


    <!-- About Start -->
    <div class="container py-5" id="About-us">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h1 class="text-dark mb-3 "><center>About Us</center></h1>
				<h2 class="text-danger"><span class="text-danger">Api Panadura</span></h2>
                <h5 class="text-muted mb-3">We are the leading social services group based in Panadura who are helping needy people in many ways and do social activities. If you also wish to join hands with us, please contact අපි පානදුර and keep in touch with our facebook page.</h5>
				
				<h2> <span class="text-secondary">Sally</span></h2>
                <h5 class="text-muted mb-3">We are a group of volunteers based in Panadura who are helping innocents neglected on roads. If you also willing to be a part of this in anyway you wish, just contact and follow SALLY on facebook. We do treatments, feeding, adopting, fostering, rehoming, vaccinating & sterilizing for stray dogs and cats.</h5>
                
               
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="img/WhatsApp Image 2022-06-28 at 10.56.38 PM (1).jpeg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/WhatsApp Image 2022-06-28 at 10.56.37 PM.jpeg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/WhatsApp Image 2022-06-28 at 11.06.00 PM.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    
    <!-- Blog Start -->
    <div class="container pt-5" id="Services">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="text-dark mb-3">Our Activities</h1>
            <h3 class="display-4 m-0"><span class="text-danger">Latest Updates</span> From Our Activities</h3>
        </div>
       <div class="row pb-5">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-mdb-interval="10000">
      <img src="img/WhatsApp Image 2022-06-28 at 7.41.19 PM.jpeg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2000">
      <img src="img/WhatsApp Image 2022-06-28 at 7.42.33 PM.jpeg" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item">
      <img src="img/WhatsApp Image 2022-06-28 at 7.42.53 PM.jpeg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
  </div>
  <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Beach Cleaning Program</h4>
                        
                        <p>Cleaned Panadura beach area on 5th of June in parallel with Environmental Day.</p>
                      
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <div id="carouselExampleInterval1" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-mdb-interval="10000">
      <img src="img/cr2.jpeg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2000">
      <img src="img/crop2.jpeg" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item">
      <img src="img/cr1.jpeg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
  </div>
  <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval1" type="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval1" type="button" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    <div class="card-body bg-light p-4">
						<h4 class="card-title text-truncate">Refresh fuel queue people</h4>
                        <p>Provided soft drinks to alleviate the fatigue of people awaiting in fuel queues.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <div id="carouselExampleInterval2" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-mdb-interval="30000">
      <img src="img/WhatsApp Image 2022-06-28 at 8.20.47 PM.jpeg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2000">
      <img src="img/WhatsApp Image 2022-06-28 at 8.20.48 PM.jpeg" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item">
      <img src="img/WhatsApp Image 2022-06-28 at 8.20.49 PM.jpeg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
  </div>
  <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval2" type="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval2" type="button" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Vaccinating stray dogs</h4>
                        <p>Vaccinated all stray dogs of Panadura beach area.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
	  <div class="container pt-5">
        
        <div class="row pb-5">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <div id="carouselExampleInterval3" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-mdb-interval="10000">
      <img src="img/WhatsApp Image 2022-06-28 at 9.02.43 PM.jpeg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2000">
      <img src="img/WhatsApp Image 2022-06-28 at 9.02.44 PM.jpeg" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item">
      <img src="img/WhatsApp Image 2022-06-28 at 9.02.45 PM.jpeg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
  </div>
  <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval3" type="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval3" type="button" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Blood Donation Campaign</h4>
                        
                        <p>Hosted a blood donation campaign at Galgoda temple on 16th January 2022.</p>
                      
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                   <div id="carouselExampleInterval4" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-mdb-interval="10000">
      <img src="img/WhatsApp Image 2022-06-28 at 7.51.31 PM.jpeg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2000">
      <img src="img/WhatsApp Image 2022-06-28 at 7.52.47 PM.jpeg" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item">
      <img src="img/WhatsApp Image 2022-06-28 at 7.52.47 PM (1).jpeg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
  </div>
  <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval4" type="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval4" type="button" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Feeding people and dogs</h4>
                        
                        <p>Provided food for abandoned people in  Panadura area during covid curfew period.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                   <div id="carouselExampleInterval5" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-mdb-interval="10000">
      <img src="img/WhatsApp Image 2022-06-28 at 9.33.36 PM (1).jpeg" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2000">
      <img src="img/WhatsApp Image 2022-06-28 at 9.33.36 PM.jpeg" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item">
      <img src="img/WhatsApp Image 2022-06-28 at 9.33.37 PM.jpeg" class="d-block w-100" alt="Exotic Fruits"/>
    </div>
  </div>
  <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval5" type="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval5" type="button" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Helping abandoned people</h4>
                        
                        <p>Cleaned, provided foods and cloths to abandoned people in Panadura.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5" id="Contact">
        <div class="row pt-5">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4 ">Contact Us&nbsp;<i class="fa fa-phone-alt mr-2"></i></h5>
                        <p>+94776576161 - Malinda</p>
                        
					</div>
                        <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4 ">Contact Us&nbsp;<i class="fa fa-phone-alt mr-2"></i></h5>
                            <p>Api Panadura<p>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.facebook.com/groups/748714298980265"><i class="fab fa-facebook-f bg-info"></i></a>
							 <p>Sally<p>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.facebook.com/SallyForHelplessOnRoad"><i class="fab fa-facebook-f bg-info"></i></a>
                        </div>
                    
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#Home"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#register-reg"><i class="fa fa-angle-right mr-2"></i>Register</a>
                            <a class="text-white mb-2" href="#About-us"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#Services"><i class="fa fa-angle-right mr-2"></i>Our Activities</a>
                            <a class="text-white" href="#Contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Blood Donation Campaign - 2022/07</a>. All Rights Reserved. Designed by
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">DD Developments</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#Home" class="btn btn-lg btn-danger back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	<style>
	/* Smartphones (portrait and landscape) ----------- */
@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {
/* Styles */
}
 
/* Smartphones (landscape) ----------- */
@media only screen 
and (min-width : 321px) {
/* Styles */
}
 
/* Smartphones (portrait) ----------- */
@media only screen 
and (max-width : 320px) {
/* Styles */
}
 
/* iPads (portrait and landscape) ----------- */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) {
/* Styles */
}
 
/* iPads (landscape) ----------- */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : landscape) {
/* Styles */
}
 
/* iPads (portrait) ----------- */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
/* Styles */
}
 
/* Desktops and laptops ----------- */
@media only screen 
and (min-width : 1224px) {
/* Styles */
}
 
/* Large screens ----------- */
@media only screen 
and (min-width : 1824px) {
/* Styles */
}
 
/* iPhone 4 ----------- */
@media
only screen and (-webkit-min-device-pixel-ratio : 1.5),
only screen and (min-device-pixel-ratio : 1.5) {
/* Styles */
}
	</style>
</body>

</html>