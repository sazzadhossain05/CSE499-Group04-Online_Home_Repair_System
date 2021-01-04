<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Handy Fix</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css/style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
</head>

<body>
    <div class="main-wrapper">
        <div class="nav-background">
            <div class="mobile-logo">
                <img src="./icons/logo.png" alt="">
            </div>
            <div class="mobile-nav">
                <div class="cart">
                    <div class="flex items-center">
                        <img src="./icons/cart-dark.svg" alt="">
                        <a href="#">0 Items - ($0.00)</a>
                    </div>
                </div>
                <div class="nav-top">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="plumbing.php">Plumbing Services</a>
                        </li>
						<li>
                            <a href="electrical.php">Electrical Services</a>
                        </li>
                        <li>
                            <a href="#">About US</a>
                        </li>
                        <li>
                            <a href="#">Order</a>
                        </li>
                        <li>
                            <a href="#">Contact US</a>
                        </li>
                       
                        <li>
                            <a href="#">Become Service Provider</a>
                        </li>
                        <li>
                            <a href="register/login.php">Log in</a>
                        </li>
                        <li>
                            <a href="register/register.php">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="contact flex items-center">
                    <img src="./icons/phone.svg" alt="">
                    <div>
                        <h5>Call us: 2345678</h5>
                        <h6>E-mail : handyfix@gmail.com</h6>
                    </div>
                </div>
                <div class="time flex items-center">
                    <img src="./icons/clock.svg" alt="">
                    <div>
                        <h5>Working Hours:</h5>
                        <h6>Sat - Fri (8.00am - 12.00am)</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content-wrapper">
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bar-chart">
                    <line x1="12" y1="20" x2="12" y2="10" />
                    <line x1="18" y1="20" x2="18" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="16" /></svg>
            </div>
            <div class="site-content">
                <header class="topbar">
                    <div class="container flex justify-between items-center">
                        <div class="icons">
                            <a href="#"><img src="./icons/facebook.svg" alt=""></a>
                            <a href="#"><img src="./icons/twitter.svg" alt=""></a>
                            <a href="#"><img src="./icons/google.svg" alt=""></a>
                            <a href="#"><img src="./icons/instagram.svg" alt=""></a>
                            <a href="#"><img src="./icons/search.svg" alt=""></a>
                        </div>
                        <div class="auth flex items-center">
                            <div>
                                <img src="./icons/user-icon.svg" alt="">
                                <a href="register/login.php">Log in</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <img src="./icons/edit.svg" alt="">
                                <a href="register/register.php">Register Now</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <img src="./icons/cart.svg" alt="">
                                <a href="#">0 Items - ($0.00)</a>
                            </div>
                        </div>
                    </div>
                </header>

                <nav>
                    <div class="top">
                        <div class="container flex justify-between">
                            <div class="contact flex items-center">
                                <img src="./icons/phone.svg" alt="">
                                <div>
                                    <h5>Call US: 2345678</h5>
                                    <h6>E-mail : handyfix@gmail.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                                <img src="./icons/logo.png" alt="">
                            </div>
                            <div class="time flex items-center">
                                <img src="./icons/clock.svg" alt="">
                                <div>
                                    <h5>Working Hours:</h5>
                                    <h6>Sat - Fri (8.00am - 12.00am)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            
							<a href="index.php" class="active">Home</a>
							<a href="plumbing.php">Plumbing Services</a>
							<a href="electrical.php">Electrical Services</a>
                            <a href="#">About US</a>
                            <a href="#">Order</a>
                            <a href="#">Contact US</a>
                            <a href="#">Become Service Provider</a>
                        </div>
                    </div>
                </nav>

               
				
				 <section class="our-services">
                    <div class="container">
                        <h1 class="section-heading">Plumbing Services</h1>
                        <div class="card-wrapper flex">
                            <div class="service-card magic-shadow-sm">
                             <h2> Plumbing Check Up</h2><hr><br>
							 
                             <input type="button" class="btn primary" value="Check up ">
                            </div>
                            
                            <div class="service-card magic-shadow-sm">
							<h2> Single Phase water Pump</h2><hr><br>
                               <input type="button" class="btn primary" value="Capacitor change"><br/><br/>
                               <input type="button" class="btn primary" value="Bearing change"><br/><br/>
                               <input type="button" class="btn primary" value="Coil repair (Up to 3 HP)"><br/><br/>
                               <input type="button" class="btn primary" value="Installation">
                              
                            </div>
							<div class="service-card magic-shadow-sm">
                              <h2>Three Phase water Pump</h2><hr><br>
                              <input type="button" class="btn primary" value="Capacitor change"><br/><br/>
                              <input type="button" class="btn primary" value="Bearing change"><br/><br/>
                              <input type="button" class="btn primary" value="coil repair"><br/><br/>
                              <input type="button" class="btn primary" value="Installation">
                            </div>
							<div class="service-card magic-shadow-sm">
							   <h2>Water tap</h2><hr><br>
                               <input type="button" class="btn primary" value="Installation/Replace">
                            </div>
							
							<div class="service-card magic-shadow-sm">
                               <h2>Push shower/ Hand shower</h2><hr><br>
                                <input type="button" class="btn primary" value="Servicing">
                            </div>
                            
                            
							
						</div>
						
						<div class="card-wrapper flex">
						    <div class="service-card magic-shadow-sm">
							     <h2>Commode flash </h2><hr><br>
                                 <input type="button" class="btn primary" value="Installation"><br/><br/>
                                  <input type="button" class="btn primary" value="Servicing">
                            </div>
                            <div class="service-card magic-shadow-sm">
                                <h2>Kitchen Sink Servicing</h2><hr><br>
                                 <input type="button" class="btn primary" value="Installation (Under Top)"><br/><br/>
                                <input type="button" class="btn primary" value="Installation (Over Top))"><br/><br/>
                                 <input type="button" class="btn primary" value="Repair"><br/><br/>
                                  <input type="button" class="btn primary" value="Blockage">
                            </div>
                            
                            <div class="service-card magic-shadow-sm">
							    <h2>Low Commode</h2><hr><br>
                                <input type="button" class="btn primary" value="Install/ Replace">
                            </div>
							 <div class="service-card magic-shadow-sm">
                                <h2>High Commode</h2><hr><br>
                                <input type="button" class="btn primary" value="Servicing/ Plumbing">
                            </div>
                            
                            <div class="service-card magic-shadow-sm">
							   <h2>Water Meter</h2><hr><br>
                               <input type="button" class="btn primary" value="Installation"><br/><br/>
                               <input type="button" class="btn primary" value="Servicing">
                            </div>
							
						</div>
							<div class="card-wrapper flex">
                           
							<div class="service-card magic-shadow-sm">
							    <h2>Gas stove</h2><hr><br>
                              <input type="button" class="btn primary" value="Installation"><br/><br/>
                              <input type="button" class="btn primary" value="Replace">
                            </div>
							<div class="service-card magic-shadow-sm">
                             <h2>Wash basin Service</h2><hr><br>
                            <input type="button" class="btn primary" value="Installation (Under Top)"><br/><br/>
                            <input type="button" class="btn primary" value="Installation (Over Top))"><br/><br/>
                            <input type="button" class="btn primary" value="Repair"><br/><br/>
                            <input type="button" class="btn primary" value="Blockage">
                            </div>
							<div class="service-card magic-shadow-sm">
                             <h2>Electric Geyser</h2><hr><br>
                             <input type="button" class="btn primary" value="Installation (only water line work)"><br/><br/>
                             <input type="button" class="btn primary" value="Water Geyser Complete Install"><br/><br/>
                              <input type="button" class="btn primary" value="Servicing">
                            </div>
							<div class="service-card magic-shadow-sm">
                               <h2>BathTub Servicing</h2><hr><br>
                               <input type="button" class="btn primary" value="Installation/ Replacement"><br/><br/>
                               <input type="button" class="btn primary" value="Repair">
                            </div>
							
					</div>
						
						
						<div class="card-wrapper flex">
                            <div class="service-card magic-shadow-sm">
                              <h2>Washing machine</h2><hr><br>
                                <input type="button" class="btn primary" value="Installation"><br/><br/>
                                <input type="button" class="btn primary" value="Groove Point cutting"><br/><br/>
                                <input type="button" class="btn primary" value="Angel stop cock Installation"><br/><br/>
                                <input type="button" class="btn primary" value="Power socket installation / replace"><br/><br/>
                               <input type="button" class="btn primary" value="Electrical channel fixing">
                            </div>
							<div class="service-card magic-shadow-sm">
                               <h2>Pipe Fitting Servicing</h2><hr><br>
                               <input type="button" class="btn primary" value="Excluding grove cutting and civil work"><br/><br/>
                                <input type="button" class="btn primary" value="Including grove cutting and civil work"><br/><br/>
                            </div>
							<div class="service-card magic-shadow-sm">
                                <h2>Water filter</h2><hr><br>
                                <input type="button" class="btn primary" value="Water filter installation (No water line connection)">
                            </div>
                        </div>
                    </div>
                </section>
				
				
				
				
				
				
				
			


                

           

                <footer>
                    <div class="container">
					 <div class="box">
                            <h3>Handy Fix Office </h3>
                            <p>Head Office: 3rd floor, UCEP Cheyne Tower, 25 Segun Bagicha Road, Dhaka 1000</p>
                            <p>Business Office: Badda Hossain Market, Dhaka, Bangladesh</p>
                            <p>Call US: 02154344552</p>
                            <p>Email: handyfix@gmail.com</p>
                            <p>Sat - Thurs(8.00am - 12.00am)</p>
                            <button class="btn btn-secondary">Read More</button>
                        </div>
                        <div class="box">
                            <h3>Company</h3>
                            <ul>
                                
								<li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Career</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                
                                <li>
                                    <a href="#">Community Guideline</a>
                                </li>
								<li>
                                    <a href="#">Terms and Conditions</a>
                                </li>
								<li>
                                    <a href="#">Privacy Policy</a>
                                </li>


                                <li>
                                    <a href="#">Contact us</a>
                                </li>

                            </ul>
                        </div>
                        <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/twitter.svg" alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/google.svg" alt="">
                                            <span>Google +</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/instagram.svg" alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box">
                            <h3>Discover</h3>
                            <ul>
                                <li>
                                    <a href="#">How It Works</a>
                                </li>
                                <li>
                                    <a href="#">Earn Money</a>
                                </li>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Become Service Provider</a>
                                </li>
                                

                            </ul>
                        </div>
                        </div>
                       
                    
                </footer>
                <footer class="copyright">
                    <div>
                        Copyright © 2020 .All rights reserved.</a>.
                    </div>
                </footer>
            </div>
        </div>
    </div>





    
</body>

</html>