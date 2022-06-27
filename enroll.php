<?php
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "web2";

   $conn = mysqli_connect($server,$username,$password,$database);
   if( isset($_POST['SubmitButton']) )
   {
    // 1.Fetch Form Data
         $firstname = $_POST ['firstname'];
         $lastname = $_POST ['lastname'];
         $email   = $_POST ['email'];
         $phone   = $_POST ['phonenumber'];
         $message   = $_POST ['message'];
    // 2.Submit Form Data
         $insertData = mysqli_query ($connect,"INSERT INTO contactus(firstname,lastname,email,phonenumber,message)
         VALUES('$firstname','$lastname','$email','$phone','$message')");
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
    <title>Document</title>
</head>
<body>
   <!-- navbar starts here -->
  
         <nav class="navbar navbar-expand-lg bg-light fixed-top shadow ">
       <div class="container-fluid">
        <a href="#" class="navbar-brand">Zalego Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menus">
            <div class="navbar-nav">
                <a href="index.html" class="nav-link active">Home</a>
                <a href="#" class="nav-link">About Us</a>
                <a href="#" class="nav-link">Enroll Now</a>
            </div>
        </div>
       </div>
    
     </nav>
     <main class="bg-light p-5 mb-4 rounded-3" >
        <h1 style="padding:30px;">JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <p>
            20th JULY 2022
        </p>
        <P>
            Zalego Academy,
            Devan Plaza
        </p>
     </main>
     <div class="container-fluid" style="text-align:center;">
         <p>
            Looking for a place to kick start your career in technology?<br>Whether you're a local, new in town or just cruising through we've got <br> loads of great tips and events for you.<br>
         </p>
    </div>
    <h1 style="text-align:center;">
        Sign Up today?
    </h1>
    <form>

        <div class="row">
            <div class="col-lg-6 mb-3">
               <label class="full name" class="form-label">Full Name:</label>
               <input type="text" class="form-control" placeholder="Enter Your Full Name">
            </div>

            <div class="col-lg-6 mb-3">
               <label class="phone number" class="form-label">Phone Number:</label>
               <input type="tel" class="form-control" placeholder="+2547---" >

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-3">
               <label class="email" class="form-label">Email Address:</label>
               <input type="email" class="form-control" placeholder="Please enter your Email">
            </div>

            <div class="col-lg-6 mb-3">
               <label class="email" class="form-label">Email Address:</label>
               <input type="email" class="form-control" placeholder="Please enter your Email">
            </div>
        </div>
    </form>
       
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>
