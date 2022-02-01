<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance Application Form</title>
    <link rel="stylesheet" href="css/blog.css" >
     <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>  
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
      </script>
  </head>
<body>

     <!-- nav_menu_start -->
      <!-- <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <img src="../logo/eduprov_in_logo.png" class="logo_size" alt="Eduprov_in_logo" />
          <ul class="links">
          <li><a href="https://www.eduprov.in/">HOME</a></li>
          <li><a href="https://www.eduprov.in/about.html">ABOUT</a></li>
          <li>
            <a href="#" class="desktop-link">UG Program</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">UG Program</label>
            <ul>
              <li><a href="https://www.eduprov.in/blogs/bachelor-of-commerce.html">B.COM</a></li>
              <li><a href="https://www.eduprov.in/blogs/bachelor-of-business-administration.html">BBA</a></li>
              <li><a href="https://www.eduprov.in/blogs/bachelor-of-arts.html">B.A</a></li>
              <li><a href="https://www.eduprov.in/blogs/bachelor-computer-application.html">BCA</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">PG Program</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">PG Program</label>
            <ul>
              <li><a href="https://www.eduprov.in/blogs/master-of-computer-application.html">MCA</a></li>
              <li><a href="https://www.eduprov.in/blogs/master-of-commerce.html">M.COM</a></li>
              <li><a href="https://www.eduprov.in/blogs/master-of-arts.html">M.A</a></li>
              <!-- <li>
                <a href="#" class="desktop-link">More Items</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">More Items</label>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
    <!-- nav_menu_end -->

     <!-- database script start -->
       <?php include('config/database.php');

      if(!empty($_POST["send"])) {
        $name                 = $_POST["name"];
        $email                = $_POST["email"];
        $mobileno             = $_POST["mobileno"];
        $dob                 = $_POST["dob"];
        $gender               = $_POST["gender"];
        $fathername           = $_POST["fathername"];
        $mothername           = $_POST["mothername"];
        $examname             = $_POST["examname"];
        $universityname       = $_POST["universityname"];
        $schoolname           = $_POST["schoolname"];
        $yearofpassing        = $_POST["yearofpassing"];
        $percentage           = $_POST["percentage"];
        $address              = $_POST["address"];


        
            // Store student data in database
            $sql = $connection->query("INSERT INTO distance_data(name, email, mobileno, dob, gender, fathername, mothername, examname, universityname, yearofpassing, percentage, address, sent_date)
            VALUES (
              '{$name}', 
              '{$email}', 
              '{$mobileno}', 
              '{$dob}', 
              '{$gender}', 
              '{$fathername}', 
              '{$mothername}', 
              '{$examname}',
              '{$universityname}',
              '{$schoolname}',
              '{$yearofpassing}',
              '{$percentage}',
              '{$address}',
              
                now()
                )");

            if(!$sql) {
              die("MySQL query failed.");
            } else {
              $response = array(
                "status" => "alert-success",
                "message" => "Application Form Submitted Successfully !."
              );              
            }
     
      }  
    ?>

     <!-- database script end -->
     <!-- Msg script start -->
    <?php if(!empty($response)) {?>
      <div class="alert text-center <?php echo $response['status']; ?>" role="alert">
        <?php echo $response['message']; ?>
      </div>
    <?php }?>
    <!-- Msg script end -->

     

     <!-- form start -->
      <form action="" name="contactForm" method="post" enctype="multipart/form-data">
       <div class="container content-container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="fs-3">Application Form</h1>
                 <hr style="color: #F1C21B;" />
            </div>
             <div class="row">
                <div class="col-md-4">
                  <label>Full Name</label>
                  <input type="text" name="name" id="name" class="form-control" />
                </div>
                 <div class="col-md-4">
                  <label>Email</label>
                  <input type="email" name="email" id="email" class="form-control" />
                </div>
                 <div class="col-md-4">
                  <label>Mobile No</label>
                  <input type="text" name="mobileno" id="mobileno" class="form-control" />
                </div>
             </div>
                <div class="row mt-4">
                <div class="col-md-4">
                  <label>DOB</label>
                  <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob" id="dob"  class="form-control" />
                </div>
                 <div class="col-md-4">
                  <label>Gender</label>
                  <input type="text" name="gender" id="gender" class="form-control" />
                </div>
                 <div class="col-md-4">
                  <label>Father Name</label>
                  <input type="text" name="fathername" id="fathername" class="form-control" />
                </div>
             </div>
               <div class="row mt-4">
                <div class="col-md-4">
                  <label>Mother Name</label>
                  <input type="text" name="mothername" id="mothername"  class="form-control" />
                </div>
                 <div class="col-md-4">
                  <label>Name of Exam</label>
                  <input type="email" name="examname" id="examname"  class="form-control" />
                </div>
                 <div class="col-md-4">
                  <label>Name of University</label>
                  <input type="text" name="universityname" id="universityname" class="form-control" />
                </div>
             </div>
                <div class="row mt-4">
                <div class="col-md-4">
                  <label>Name of School</label>
                  <input type="text" name="schoolname" id="schoolname" class="form-control" />
                </div>
                 <div class="col-md-4">
                  <label>Year of Passing</label>
                  <input type="email" name="yearofpassing" id="yearofpassing" class="form-control" />
                </div>
                 <div class="col-md-4">
                  <label>Percentage</label>
                  <input type="text" name="percentage" id="percentage" class="form-control" />
                </div>
             </div>
              <div class="row mt-4">
                <div class="col-md-12">
                  <label>Address</label>
                  <textarea name="address" id="address" class="form-control" rows="4"></textarea>
                </div>
             </div>
             <div class="row mt-4">
                 <div class="col-md-4">
                   <input type="submit" name="send" value="Send Message" class="btn btn-primary btn-rounded">
                 </div>
             </div>
        </div>
    </div>
      </form>
    <!-- form end  -->

    <!-- JavaScript -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>


      <script>
    $(function() {
      $("form[name='contactForm']").validate({
        // validation rules
        rules: {
          name               :"required",
           email              :"required",
           mobileno           :"required",
           dob                :"required",
           gender             :"required",
           fathername         :"required",
           mothername         :"required",
           examname           :"required",
           universityname     :"required",
           schoolname         :"required",
           yearofpassing      :"required",
           percentage         :"required",
           address            :"required",
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },          
          mobileno: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
          },          
          dob: {
            required: true
          },          
          gender: {
            required: true
          },
          fathername:{
            required: true, 
          },
          mothername:{
            required: true,
          },
          examname:{
            required:true,
          },
          universityname:{
            required:true,
          },
          schoolname:{
            required:true,
          },
          yearofpassing:{
            required:true,
          },
          percentage:{
            required:true,
          },
          address:{
            required: true,
          }
          
        },
        // validation error messages
        messages: {
          name: "Please provide a valid name.",
          email: {
            required: "Please enter your email",
            minlength: "Please enter a valid email address"
          },
          mobileno: {
            required: "Please provide a mobile no",
            minlength: "Phone number must be min 10 characters long",
            maxlength: "Phone number must not be more than 10 characters long"
          },
          fathername: {
            required: "Please enter your father's name "
          },
          mothername: {
            required: "Please enter your mother's name "
          },
          examname:{
            required:"Please enter exam name"
          },
          universityname:{
            required:"Please enter university name"
          },
          schoolname:{
            required:"Please enter school name"
          },
          yearofpassing:{
            required:"Please enter year of passing details"
          },
          percentage:{
            required:"Please enter your percentage"
          },
          address: {
            required: "Please enter your address ",
          },
          dob: "Please choose your dob"
        },
      

        submitHandler: function(form) {
          form.submit();
        }
      });
    });    
  </script>

    <footer class="container-fluid bg-grey py-5 mt-5">
    <div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <img src="banner/eduprov_white.png" class="w-50 logo-footer" >
                  <h6  class="text-white">Head Office</h6>
                  <p  class="text-white"  style="font-size: 14px;">No 20 3rd Floor Lady Curzon Rd Santha Complex, Lady Curzon Rd, Infantry Rd, Bengaluru Karnataka 560001</p>
                  <p  class="text-white"  style="font-size: 14px;"><a href="tel:+91 80 25591146">+91 80 25591146</a></p>
                  <p  class="text-white"  style="font-size: 14px;">admin@eduprov.com</p>
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6  class="text-white">Branch Office</h6>
               <p  class="text-white"  style="font-size: 14px;">N.E Blaine Minnesota USA 55434</p>
               <p  class="text-white"  style="font-size: 14px;">Old Whittlesey Road Suite Columbus Georgia 31904, USA</p>
               <p  class="text-white"  style="font-size: 14px;">4939 Kevin Walker Dr, Montclair, Virginia 22025, USA</p>
               <p  class="text-white"  style="font-size: 14px;"><a href="tel:(+1) 651 967 7789">(+1) 651 967 7789</a></p>
               <a href="https://eduprov.com/contact-form.php" class="btn-footer" > Contact Us</a>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 px-4">
               <h6  class="text-white">Quick Links</h6>
               <div class="row ">
                  <div class="col-md-6">
                     <ul>
                        <li><a href="https://eduprov.com/sitemap.html"  class="text-white"  style="font-size: 14px;">Sitemap</a> </li>
                        <li><a href="https://eduprov.com/contact-form.php"  class="text-white"  style="font-size: 14px;"> Contact</a> </li>
                     </ul>
                  </div>
                  <div class="col-md-6 px-4"></div>
               </div>
            </div>
            <div class="col-md-6 ">
               <h6  class="text-white"> Newsletter</h6>
               <div class="social">
                  <a href="https://www.facebook.com/eduprovinstitute/"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                  <a href="https://www.instagram.com/eduprov_education/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                  <a href="https://twitter.com/eduprov"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a href="https://www.tumblr.com/blog/view/eduprov"><i class="fab fa-tumblr-square" aria-hidden="true"></i></a>
               </div>
               <form class="form-footer my-3">
                  <!-- <input type="text"  placeholder="search here...." name="search">
                  <input type="button" value="Go" > -->
               </form>
                <p class="fw-bold text-white"  style="font-size: 14px;">Eduprov Educational Institute 2022 © Copyright : thephotogenicbug</p>
            </div>
         </div>
      </div>
   </div>
</div>
  </footer>
    
</body>
</html>