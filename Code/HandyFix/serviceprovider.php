<br/><br/><br/><br/>
<head>
   

    <!-- Title Page-->
    <title>HandiFix|Become A Service Provider</title>

    <!-- Icons font CSS-->
    <link href="Employee_Management_System/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="Employee_Management_System/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="Employee_Management_System/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="Employee_Management_System/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="Employee_Management_System/css/main.css" rel="stylesheet" media="all">
</head>


   
    
<body>



    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Service Provider Registration Information Form. Please Fill It Up.</h2>
					<br>
                    <form action="serviceproviderquery.php" method="POST" enctype="multipart/form-data">


                        

                        <div class="row row-space">
                            <div class="">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder="First Name" name="firstName" required="required">
                                </div>
                            </div>
                            <div class="">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lastName" required="required">
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email" required="required">
                        </div>
                        <p>Birthday</p>
                        <div class="row row-space">
                            <div>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="birthday" required="required">
                                   
                                </div>
                            </div>
                            <div class="">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" name="contact" required="required" >
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="NID" name="nid" required="required">
                        </div>

                        
                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Speciality" name="dept" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Education" name="degree" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Salary You Want" name="salary">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>







                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
							
                        </div>
						
                    </form>
					<br/>
						 <p>If Already a service provider than <a href="http://localhost/spring%202020%20-cse%20499%20-practice/HandyFix/Employee_Management_System/index.html">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="Employee_Management_System/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="Employee_Management_System/vendor/select2/select2.min.js"></script>
    <script src="Employee_Management_System/vendor/datepicker/moment.min.js"></script>
    <script src="Employee_Management_System/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="Employee_Management_System/js/global.js"></script>
</body>