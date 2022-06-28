<?php
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "web2";

   $connect = mysqli_connect($server,$username,$password,$database);
   if( isset($_POST['SubmitButton']) )
   {
    // 1.Fetch Form Data
         $fullname = $_POST['fullname'];
         $phonenumber = $_POST['phonenumber'];
         $email   = $_POST['email'];
         $gender  = $_POST['gender'];
         $course =$_POST['course']; 
    // 2.Submit Form Data
         $insertData = mysqli_query ($connect,"INSERT INTO enrollment(fullname,phonenumber,email,gender,course)
         VALUES('$fullname','$phonenumber','$email','$gender','$course')");
         if($insertData)
         {
            echo "Data Submitted Successfully";
         }
         else{
            echo "Error Occured";
         }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
         <nav class="navbar navbar-expand-lg bg-light fixed-top shadow ">
       <div class="container-fluid">
        <a href="#" class="navbar-brand">Zalego Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menus">
            <div class="navbar-nav">
                <a href="index.php" class="nav-link active">Home</a>
                <a href="aboutus.php" class="nav-link">About Us</a>
                <a href="#" class="nav-link">Enroll Now</a>
            </div>
        </div>
       </div>
    
     </nav>
     <main class="bg-light p-5 md-4 rounded-3" style="text-align:center;">
        <h1 style="padding:30px;">JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <ul style="list-style-type:none;">
        <li>
            <span><i class="fa fa-calendar"></i></span>
            <span>20th JULY 2022</span>
        </li>
        <li>
            <span><i class="fa fa-map-marker"></i></span>
            <span>Zalego Academy <br> Devan Plaza</span>
        </li>
        </ul>
     </main>
     <div class="container-fluid" style="text-align:center;">
         <p>
            Looking for a place to kick start your career in technology?<br>Whether you're a local, new in town or just cruising through we've got <br> loads of great tips and events for you.<br>
         </p>
    </div>
    <h1 style="text-align:center;">
        Sign Up today?
    </h1>
    <form action="enroll.php" method="POST" >

        <div class="row">
            <div class="col-lg-6 mb-3">
               <label class="form-label" for="fullname">Full Name:</label>
               <input type="text" class="form-control" placeholder="Enter Your Full Name" name="fullname">
            </div>

            <div class="col-lg-6 mb-3">
               <label class="form-label" for="phonenumber">Phone Number:</label>
               <input type="tel" class="form-control" placeholder="+2547---" name="phonenumber">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-3">
               <label class="form-label" for="email">Email Address:</label>
               <input type="email" class="form-control" placeholder="Please enter your Email" name="email">
            </div>

            <div class="col-lg-6 mb-3">
               <label for="gender" class="form-label">What's your Gender?</label>
               <select name="gender" class="form-subject" placeholder="option" aria-label="Default select example">
                        <option selected>--select your gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
               </select>
            </div>
        </div>
     <div class="row">
        <div class="col-lg-6 mb-3">
         <label for="course" class="form-label">What's your preffered course</label<br>
            <select name="course" aria-label="Default select example" class="form-subject">
                <option selected>--selsect your courses--</option>
                <option value="Android App Development"> Android App Development</option>
                <option value="Web Designs & Development">Web Designs & Development</option>
                <option value="Data Analysis">Data Analysis</option>
                <option value="Cyber Security">Cyber Security</option>
            </select>
        </div>
     </div>
     <p>
        In order to complete your regestration at the bootcamp,you are required to select one course you will be undertaking. Please NOTE that this will be your learning treck during the two weeks immersion.
     </P>



     <p>
         You agree by providing all you information you understand all our data privacy and protection policy outlined in our terms & conditions and the privacy policy statements.
     </P>
     <div class="container-fluid">
        <div class="form mb-5 mt-5">
          <input type="checkbox" class="form-check-label" id="flexCheckDefault">
          <label for="flexCheckDefault at-1"class="form-check-label">Agree Terms and Conditions</label>
        </div>
     </div>
     <div class="container-fluid">
        <div class="col-lg-6 padding-bottom:5px;">
            <button type="submit" name="SubmitButton" class="btn btn-primary">Submit Application</button>
        </div>
     </div>
    <form>
    <br>
    <footer>
        &copy; Trevor Antonio 2022
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>
