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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    
    font-family: 'Montserrat', sans-serif;
}

.faq{
    padding: 50px;
}

.faq h1{
    
    text-align: center;
    font-size: 50px;
    margin-bottom: 50px;
}

.questions-container{
    max-width: 500px;
    margin: 0 auto;

}

.question button{
    width: 100%;
    background-color: #e7dcd3;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    border:none; outline: none;
    font-size: 16px;
    color: #321831;
    font-weight: 700;
    cursor: pointer;
    border-bottom: 1px solid #321831;
}

.question button i{
    transform: rotate(180deg);
    transition: all 0.3s;
   
}

.question p{
    background-color: #feb98a;
    font-size: 14px;
    max-height: 0;
    opacity: 0;
    line-height: 1.6;
    overflow: hidden;
    transition: all 0.3s;
}

.question p.show{
    max-height: 200px; 
    opacity: 1;
    padding: 20px;
}

.question button i.rotate{
    transform: none;
}



</style>
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



<section class="faq">
    <div class="container">
        <h1 class="section-heading">FAQ</h1>
    </div>

    <div class="questions-container">
        <div class="question">
            <button>
                <span>How can I book service request?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>You can book services via website www.handyfix.com or calling to customer care- 09610 222 111.</p>
        </div>
        <div class="question">
            <button>
                <span>How to place an order on the Website?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>It is very easy; just select the area, service, date, time for service and its done.</p>
        </div>
        <div class="question">
            <button>
                <span>Can I reschedule/Cancel a job booked?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>Give a call to our customer service helpline numbers- 09610 222 111. Please visit our cancellation policy to know about more.</p>
        </div>
        <div class="question">
            <button>
                <span>How will I know that Handy Fix have received my order?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>After you complete the checkout process, a confirmation with order number will appear on your screen detailing your final order. You will also receive the confirmation via sms and email from Handy Fix
            </p>
        </div>

        <div class="question">
            <button>
                <span>What are the modes of payment?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>You can select Cash on Delivery (COD) as the payment option or through B-kash, Rocket and Sure cash.</p>
        </div>


        <div class="question">
            <button>
                <span>In which Areas Handy Fix is operational?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>MHandy Fix is serving whole Dhaka City. Soon Handy Fix will be launched there services in all Divisional cities of Bangladesh.</p>
        </div>

        <div class="question">
            <button>
                <span>What are your work timings?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>Handy Fix services are available from 8 am to 8 pm. Handy Fix also provide services in any Emergency.</p>
        </div>
    </div>


</section>


<script type="text/javascript">
const buttons = document.querySelectorAll('button');


buttons.forEach( button =>{
    button.addEventListener('click',()=>{
        const para = button.nextElementSibling;
        const icon = button.children[1];

        para.classList.toggle('show');
        icon.classList.toggle('rotate');
    })
} )
</script>

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
</body>
</html>