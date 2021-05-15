<br/><br/><br/><br/>
<section id="main-site">
    <div class="container py-5">
       
            
			
                    <?php
                     
                      include("./db_connect.php");
                      echo "<b>Personal Info  </b>";
					  echo "<hr>";echo "<br>";
					  $userprofile=$_SESSION['login_first_name'];
                      $query="SELECT * FROM  user_info";
                      $data =mysqli_query($conn,$query);
                      $result=mysqli_fetch_assoc($data);
					  
                      
                      echo "<b>First Name:    </b>".$result['first_name'];echo "<br>";
                      echo "<b>Last Name:     </b>".$result['last_name']; echo "<br>";
                      echo "<b>Email:         </b>".$result['email'];     echo "<br>";
                      echo "<b>Phone:         </b>".$result['mobile'];    echo "<br>";
                      echo "<b>Address:       </b>".$result['address'];   echo "<br>";
                    ?>
            
       
    </div>
</section>

