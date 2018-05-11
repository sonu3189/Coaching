
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	  <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body >
   <div class="container-Fluid">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
         <div class="navbar-header" style="background-color: lightgreen; margin-top: 15px; height: 70px;">
               <a class="navbar-brand" href="#">
                <img src="images/omg.jpg" alt="" width="100px" height="50px">
            </a>
           <a class="navbar-brand" href="#" style="font-size: 35px; color: red; margin-top: 15px; "><font>OM GYAN KENDRA</font></a>
           <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#mystyle">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
          </div>
          <div  class="collapse navbar-collapse" id="mystyle">
                 <ul class="nav navbar-nav navbar-right" >
                                  <li "><a href="" data-toggle="modal" ><marquee onmouseover="stop()" onmouseout="start()"> <h3 style="font-size: 25px; color:white;">New Batches Are Going to Start Soon, Contact @ +91 966 700 3170</h3></marquee> </a></li>
                      </ul><br>

          <ul class="nav navbar-nav navbar-right">
        <li class="active" style="font-size: 25px; margin-top: 10px;"><a href="index.php"><font>Home</font></a></li>
        <li><a href="#about_us" style="font-size: 25px; margin: 10px;"><font>About Us</font></a></li>
        <li><a href="#courses" style="font-size: 25px; margin: 10px;"><font>Our Courses</font></a></li>
          <li><a href="#faculty" style="font-size: 25px; margin: 10px;"><font>Our Faculties</font></a></li>
        <li><a href="#photos" style="font-size: 25px; margin: 10px;"><font>Photos</font></a></li>
          <li><a href="#" style="font-size: 25px; margin: 10px;"><font>Results</font></a></li>
        <li><a href="#contact_us" style="font-size: 25px; margin: 10px;"><font>Contact us</font></a></li>
      <!-- <li><a href="#" style="font-size: 20px;margin: 10px;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#" style="font-size: 20px; margin: 10px;s"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
    </a><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin: 10px;">Login</button>
      </a><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" style="margin: 10px;">Sign Up</button></ul>
          
              </div>

</div>
</nav>

<?php
include('mainupper.html');
?>

  <div id="about_us" style="width: 100%; height: 80px; background-color: red;">
    <h1 style="font-size: 40px; font-family: cursive; color: white; text-align: center;padding-top: 15px;">ABOUT  US</h1>
  </div>
  <div class="banner-bottom-agileits" id="about" style="background-color: #29F3D6;">
      
      <div class="col-md-5 w3l_banner_bottom_right">
      
      
      <img src="images/about1.jpg" alt=" " class="img-responsive"  width="" height="300px">

      </div>
      <div class="col-md-7 w3l_banner_bottom_left"><font face="Times New Roman" > 
        <center><h1 style="padding: 20px; padding-top: 40px; font-size: 30px;" ><font color ="#071BF5"><b>Welcome to OM GYAN  Coaching</b></font></h1></center>
        <p style="font-size: 24px;">The organization <b>"OM GYAN KENDRA Coaching"</b> is a well established study hub in Gangapur city, founded by Mr. <b>Hemendra Agrawal</b> in 2015. <br><br>

It's well known coaching institute across the state, where most experienced teachers of India, providing training for various government Jobs specially for <b>Railway, Bank</b> & other similar competitive exams like RBSC & CBSC BOARD,SSC, RPSC, UPSC, Police/Defence Jobs.  <br><br>

Our Experienced Teachers team operated by Director Mr. HEMENDRA SIR who is highly dedicated to improving quality of education and offering unmatched excellent education that can create success for our each student.
 <br><br>
          <font color ="#071BF5"><b>So, why are you waiting for? Join us today..! Just call at +91 9982777518</b></font></p>
      </font></div>
      <div class="clearfix"></div>
  </div>


<div id="photos" style="width: 100%; height: 80px; background-color: red;">
    <h1 style="font-size: 40px; font-family: cursive; color: white; text-align: center;padding-top: 15px;">PHOTO GALLERY</h1>
  <?php
include('demo.html');
?>
</div>



<div class="container">
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: lightblue;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Login</h4></center>
        </div>
      <div class="modal-body">
          <form action="" method="post">
                     <div class="form-group">
                      <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                      </div>
                      <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </form>
        </div>
        <div class="modal-footer" style="background-color: red;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<div class="container">
   <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: lightblue;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Login</h4></center>
        </div>
      <div class="modal-body">
          <form action="">

                     <div class="form-group">
                        <label for="name">Username:</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Enter Your Username" name="username">
                      </div>
                      <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Enter Your Name" name="name">
                      </div>
                     <div class="form-group">
                      <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="dob">Date Of Birth:</label>
                        <input type="date" class="form-control" id="pwd" placeholder="Enter Date of Birth" name="dob">
                      </div>


                      <div class="form-group">
                        <!-- <label for="gender" name="gender">Gender:</label>
                        <input type="checkbox" class="form-control" id="pwd" > Male
                         <input type="checkbox" class="form-control" id="pwd" > Female
 -->
                      <div class="checkbox" name="gender">
                        <label><input type="checkbox" name="remember"> Male</label>
                        <label><input type="checkbox" name="remember">Female</label>
                      </div>
                      </div>
                       
                      <div class="form-group">
                        <label for="mob">Mobile No:</label>
                        <input type="text" class="form-control" id="pwd" placeholder="Enter Mobile No." name="mob">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                      </div>
                       <div class="form-group">
                        <label for="pwd">Conform Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd1">
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                      </div>
                      <center><button type="submit" class="btn btn-primary">Submit</button></center>
              </form>
        </div>
        <div class="modal-footer" style="background-color: red;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>





  <section class=" text-center" id="portfolio">
      <div id="courses" style="width: 100%; height: 80px; background-color: red;">
    <h1 style="font-size: 40px; font-family: cursive; color: white; text-align: center;padding-top: 15px;">OUR COURSES</h1>
       </div>
          <div class="container-fluid" style="background-color:#F0EA24;">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 style="font-size: 40px; color: white; margin-top: 20px;">Our Coaching  System (FOR MATHEMATICS)</h1> 
                <h2 style="color: black;">GET TRAINED BY OUR EXPERIENCED TEACHERS</h2>
                <hr>
              </div>
            </div>
      <br><br>
      <div class="row">
            <div>
          
           <li  class="col-sm-3 col-md-3 col-xs-12"> 
              <div>
               <a href="courses/products/institute_prg.html">
                  <img src="images/10.png" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>
              <h3 style="color: white;">class--10</h3>
              
               
            </li>

            <li  class="col-sm-3 col-md-3 col-xs-12 "> 
              <div>

                   <a href="courses/products/institute_prg.html">
                <img src="images/12.png" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>

             <h3 style="color: white;">class--12</h3>
              
               
            </li>

            <li  class="col-sm-3 col-md-3 col-xs-12 "> 
              <div>

                   <a href="courses/products/institute_prg.html">
                <img src="images/bsc.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>

             <h3 style="color: white;">BSC(1 & 2 & 3 )</h3>
              
               
            </li>
                <li  class="col-sm-3 col-md-3 col-xs-12 "> 
              <div>

                   <a href="courses/products/institute_prg.html">
                <img src="images/bsc.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>

             <h3 style="color: white;">BSC(1 & 2 & 3 )</h3>
              
               
            </li>
        
        </div>
       
    </div>
<br><br><br><br>
    <div class="row">
            <div>
          
           <li  class="col-sm-3 col-md-3 col-xs-12"> 
              <div>
               <a href="courses/products/institute_prg.html">
                  <img src="images/10.png" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>
              <h3 style="color: white;">class--10</h3>
              
               
            </li>

            <li  class="col-sm-3 col-md-3 col-xs-12 "> 
              <div>

                   <a href="courses/products/institute_prg.html">
                <img src="images/12.png" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>

             <h3 style="color: white;">class--12</h3>
              
               
            </li>

            <li  class="col-sm-3 col-md-3 col-xs-12 "> 
              <div>

                   <a href="courses/products/institute_prg.html">
                <img src="images/bsc.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>

             <h3 style="color: white;">BSC(1 & 2 & 3 )</h3>
              
               
            </li>
                <li  class="col-sm-3 col-md-3 col-xs-12 "> 
              <div>

                   <a href="courses/products/institute_prg.html">
                <img src="images/bsc.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>

             <h3 style="color: white;">BSC(1 & 2 & 3 )</h3>
              
               
            </li>
        
        </div>
       
    </div>


          </div>
  </section>



 <section class=" text-center" id="portfolio">
      <div id="faculty" style="width: 100%; height: 80px; background-color: red;">
    <h1 style="font-size: 40px; font-family: cursive; color: white; text-align: center;padding-top: 15px;">OUR FACULTY</h1>
       </div>
          <div class="container-fluid" style="background-color:white;">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1 style="font-size: 40px; color: black; margin-top: 20px;">Our Coaching  System (FOR MATHEMATICS)</h1> 
                <h2 style="color: black;">MEET OUR EXPERIENCED FACULTIES</h2>
                <hr>
              </div>
            </div>
      <br><br>
      <div class="row">
            <div>
          
           <li  class="col-sm-3 col-md-3 col-xs-12"> 
             
              <div>
               <a href="courses/products/institute_prg.html">
                  <img src="images/f1.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>
              <div>
                <h1 style="background: black; color: white; ">Mr. Hemendra Agrawal</h1>
                <h2 style="background: lightblue; color: red;">MATHEMATICS</h2>
              </div>
              
               
            </li>


             <li  class="col-sm-3 col-md-3 col-xs-12"> 
             
              <div>
               <a href="courses/products/institute_prg.html">
                  <img src="images/f1.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>
              <div>
                <h1 style="background: black; color: white; ">Mr. Hemendra Agrawal</h1>
                <h2 style="background: lightblue; color: red;">MATHEMATICS</h2>
              </div>
              
               
           <li  class="col-sm-3 col-md-3 col-xs-12"> 
             
              <div>
               <a href="courses/products/institute_prg.html">
                  <img src="images/f1.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>
              <div>
                <h1 style="background: black; color: white; ">Mr. Hemendra Agrawal</h1>
                <h2 style="background: lightblue; color: red;">MATHEMATICS</h2>
              </div>
              
               
           <li  class="col-sm-3 col-md-3 col-xs-12"> 
             
              <div>
               <a href="courses/products/institute_prg.html">
                  <img src="images/f1.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>
              <div>
                <h1 style="background: black; color: white; ">Mr. Hemendra Agrawal</h1>
                <h2 style="background: lightblue; color: red;">MATHEMATICS</h2>
              </div>
              
               
            </li>
            <br><br><br>
        </div>
       
    </div>



          </div>
  </section>



 <section>
  <div id="contact_us" style="width: 100%; height: 80px; background-color: red;">
    <h1 style="font-size: 40px; font-family: cursive; color: white; text-align: center;padding-top: 15px;">CONTACT  US</h1>
  </div>
<div class="container-fluid" style="background-color: #2542ED">
 
      <div class="row">
          <li  class="col-sm-4 col-md-4 col-xs-12 "> 
               
               <h3 style="text-align: center; color: white; margin-top: -20px;">
                <br><br>
                  Address:<br><br>
                 Shivpuri Block-B,<br>
                 Saloda Road,<br>
                 Street Of Amergadiya Bhawan<br> 
                 GANGAPUR CITY(SawaiMadhopur)<br>
                   RAJASTHAN
                 <br><br><br>
                 Contact:<br><br>
                 Mrs. Hemendra Agrawal<br>
                  +91-9824141215<br>
                  +91-1551441416<br><br>

                  Email-omgyankendra@gmail.com
               </h3>
            </li>

             <li  class="col-sm-8 col-md-8 col-xs-12"> 
              <div>

               <p>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123514.76806185853!2d76.72221847332968!3d26.469409676486027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3971f4217f047bd1%3A0x173a8639714583c1!2sSaloda+Industrial+Area%2C+Gangapur+City%2C+Rajasthan+322201!5e0!3m2!1sen!2sin!4v1523120109261"  class="img-responsive" style="width: 900px; height: 500px;" frameborder="0" style="border:0" allowfullscreen></iframe>
               </p>
                  
              </div>
               </li>
             </div>
      

   
          </div>
    

  

</section>
<section class=" text-center" id="portfolio">
  
          <div class="container-fluid" style='background-color:black;'>
                 
  <div class="container">
    <img src="images/omgbelow.jpg" class="img-responsive">
  </div>
      <div class="row">
        <br><br><br>
          <div class="container-fluid">
          
           <li  class="col-sm-4 col-md-4 col-xs-12"> 
              <div>
               <a href="index.php">
          
                <img src="images/omg.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236"> 
               </a> 
              </div>
            </li>

            <li  class="col-sm-4 col-md-4 col-xs-12 "> 
              <div>
                <h2 style="color: red;"> OUR ADDRESS</h2><br>
                   <h3 style="color: white;  margin: 20px;">OM GYAN KENDRA,GGC</h3> <br>
                   <h3 style="color: white;  margin: 20px;">+91-9982777518</h3> <br>
                   <h3 style="color: white; margin: 20px;">Omgyankendra@gmail.com</h3> <br>
              </div>
          </li>

            <li  class="col-sm-4 col-md-4 col-xs-12 "> 
              <div>
              
             <h2 style="color: red;"> FOLLOW US</h2><br>

             <a href=""><img src="images/fb.jpg"  class="img-rounded" alt="Cinque Terre" width="80" height="70"></a> <br><br>
              <a href=""><img src="images/tb.png"  class="img-rounded" alt="Cinque Terre" width="80" height="70"></a><br><br>
              <a href=""><img src="images/gb.png"  class="img-rounded" alt="Cinque Terre" width="80" height="70"></a>     
              </div>
               
            </li>
            
        
        </div>
       
            </div>


            <div class="container">
              <div class="row">
                  <h2 style="background: grey; color: white;">© 2018 OM GYAN KENDRA Coaching. All Rights Reserved</h2>
                  <br><br>
              </div>
            </div>
          </div>
  </section>



</div>

<!-- 
<script type="text/javascript">
  
var ck_name = /^[A-Za-z0-9 ]{3,20}$/;
var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
var ck_username = /^[A-Za-z0-9_]{1,20}$/;
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
var ck_phone=/^[0-9]{0,10}$/;
var ck_date=/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;

function validate(form){

var username = form.username.value;
var name = form.name.value;
var email = form.email.value;
var dob=form.dob.value;
var mob=form.mob.value;
var password = form.pwd.value;
var password1 = form.pwd1.value;
var gender = form.gender.value;
var errors = [];
 
 if (!ck_name.test(name)) {
  errors[errors.length] = "You valid Name .";
 }
 if (!ck_email.test(email)) {
  errors[errors.length] = "You must enter a valid email address.";
 }
 if (!ck_username.test(username)) {
  errors[errors.length] = "You valid UserName no special char .";
 }
 if (!ck_password.test(password)) {
  errors[errors.length] = "You must enter a valid Password ";
 }
 if (gender==0) {
  errors[errors.length] = "Select Gender";
 }
 if (errors.length > 0) {

  reportErrors(errors);
  return false;
 }
  return true;
}
function reportErrors(errors){
 var msg = "Please Enter Valide Data...\n";
 for (var i = 0; i<errors.length; i++) {
 var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
}
 alert(msg);
}
</script>
</script> -->
   </body>
</html>
