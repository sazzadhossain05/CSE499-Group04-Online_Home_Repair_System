<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include('header.php');
    include('admin/db_connect.php');

	$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
	foreach ($query as $key => $value) {
		if(!is_numeric($key))
			$_SESSION['setting_'.$key] = $value;
	}
    ?>
	
   <head>
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Handy Fix</title>
    <link rel="stylesheet" href="./css1/style.css">
	<script src="js1/app.js"></script>
	
	<script>
function validateForm() {
  var x = document.forms["myForm"]["email"].value;
  if (x == "" || x == null) {
    alert("Email must be filled out");
    return false;
  }
}
</script>
   </head>
   
    <style>
    	header.masthead {
		  background: url(assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    </style>
    <body id="page-top">
        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./"><?php echo $_SESSION['setting_name'] ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=plumbing">Plumbing Service</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=electrical">Electrical Service</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=cart_list"><span> <span class="badge badge-danger item_count">0</span> <i class="fa fa-shopping-cart"></i>  </span>Cart</a></li>
                         
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
                        <?php if(isset($_SESSION['login_user_id'])): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admin/ajax.php?action=logout2"><?php echo "Welcome ". $_SESSION['login_first_name'].' '.$_SESSION['login_last_name'] ?> <i class="fa fa-power-off"></i></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=myprofile" >Profile</a></li>
					  <?php else: ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="javascript:void(0)" id="login_now">Login</a></li>
                      <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
       
        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>
       

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-righ t"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  
  <!----------------------------------------------------------->
  
     <br/><br/>
     <section class="subscribe">
           <div class="container flex items-center">
                <div>
                     <img src="./images/handyman.jpg" alt="">
                 </div>
                 <div>
                     <h1>Subscribe to your newsletter</h1>
                      <p>Subscribe for new news on Plumbing and Electrical service.</p>
					  
					   <form method="POST"action="subscribe.php" onsubmit="return validateForm()"name="myForm">
                          <div class="input-wrap">
						    
                             <input type="email" name="email" placeholder="handyfix@gmail.com" value="">
                             <button type="submit" name="submit">Subscribe</button>
							
                          </div>
						</form>
                  </div>
           </div>
     </section>
               
     <section class="contact-us flex">
        <div class="contact-info-wrapper">
            <h1 class="section-heading">Contact us</h1>
             <div class="contact-info">
                <div>
                    <div>
                        <img src="./icons/phone-2.svg" alt="">
                           <div>
                              <span>Call US:</span>
                                  <span>02154344552</span>
                            </div>
                    </div>
                     <div>
                         <img src="./icons/bag-2.svg" alt="">
                            <div>
                              <span>E-mail ::</span>
                              <span>handyfix@gmail.com</span>
                            </div>
                     </div>
                     <div>
                        <img src="./icons/clock-2.svg" alt="">
                        <div>
                           <span>Working Hours:</span>
                           <span>Sat - Thurs (8.00am - 12.00am)</span>
                        </div>
                      </div>
                 </div>
              </div>
         </div>
		 <div class="contact-info-wrapper">
            
              <iframe src="https://www.google.com/maps/d/u/2/embed?mid=19-ukqTeiHIjXEDZWRjuzuvcRv0Z3JRVo"  width="95%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            
		 </div>
      </section>
              
		 
			  
			  
      <footer>
          <div class="container">
             <div class="box">
                <h3>Handy Fix Office </h3>
                <p>Business Office: Badda Hossain Market, Dhaka - 1212, Bangladesh</p>
                <p>Call US: 1234567</p>
                <p>Email: handyfix@gmail.com</p>
                <p>Sat - Thurs(8.00am - 11.00pm)</p>
                            
            </div>
            <div class="box">
               <h3>Company</h3>
                  <ul>
                     
                     
                     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
                     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=career">Career</a></li>
                     
                     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=community_guideline">Community Guideline</a></li>
                     <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=terms-conditions">Terms and Conditions</a></li>   
					  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=privacy-policy">Privacy Policy</a></li>  
					 
                   </ul>
             </div>
                        <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                                <ul>
                                    <li>
                                        <a href="https://facebook.com">
                                            <img src="./icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com">
                                            <img src="./icons/twitter.svg" alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://youtube.com">
                                            <img src="./icons/icons8-youtube.svg" alt="">
                                            <span>Youtube</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com">
                                            <img src="./icons/instagram.svg" alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
									<li>
                                        <a href="https://www.improvenet.com/a/plumbing">
                                            <img src="./icons/icons8-blogloving.svg" alt="">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box">
                            <h3>Discover</h3>
                            <ul>
							 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=how-it-works">How It Works</a></li> 
                              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=earnmoney">Earn Money</a></li>    
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=faq">Frequently Asked Questions</a></li>   
								 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=serviceprovider">Become A Service Provider</a></li>   
                                <li>
                                 <a href="http://localhost/spring%202020%20-cse%20499%20-practice/HandyFix/Employee_Management_System/index.html">Login As Serviceman or Manager</a>
                                </li>
                                 <li>
                                    <a href="http://localhost/spring%202020%20-cse%20499%20-practice/HandyFix/admin/login.php"> Login As Product Manager</a>
                                </li>

                            </ul>
                        </div>
                        </div>
                       
                    
                </footer>
                <footer class="copyright">
                    <div>
                        Copyright © 2021. All rights reserved.</a>
                    </div>
                </footer>
        
       
 

  
  
  
  
       <!-- <footer class="bg-light py-5">
            <div class="container">
			
			<div class="small text-center text-muted">Copyright © 2020 - HandyFix</div>
			</div>
        </footer>-->
        
       <?php include('footer.php') ?>
    </body>

    <?php $conn->close() ?>

</html>
