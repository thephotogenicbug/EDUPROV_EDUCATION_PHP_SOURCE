<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
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
  
 <?php
      include('config/database.php');

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
            $sql = $connection->query("INSERT INTO distance_data(name, email, mobileno, dob, gender, fathername, mothername, examname, universityname, schoolname, yearofpassing, percentage, address, sent_date)
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
    <!-- Msg -->
    <?php if(!empty($response)) {?>
      <div class="alert text-center <?php echo $response['status']; ?>" role="alert">
        <?php echo $response['message']; ?>
      </div>
    <?php }?>

    <!-- Contact form -->
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


  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
  
  <script>
    $(function() {
      $("form[name='contactForm']").validate({
        // Define validation rules
        rules: {
          name:          "required",
          email:         "required",
          mobileno:      "required",
          dob:          "required",
          gender:        "required",
          fathername:    "required",
          mothername:    "required",
          address: "required",
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
          address:{
            required: true,
          }
          
        },
        // Specify validation error messages
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
          address: {
            required: "Please enter your address ",
          },
          dob: "Please choose your dob",
          gender: "Please enter your gender"

        },
      

        submitHandler: function(form) {
          form.submit();
        }
      });
    });    
  </script>
</body>
</html>