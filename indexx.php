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
                <a href="#" class="nav-link">Register Now</a>
            </div>
        </div>
        </div>
    
     </nav>
     <!-- navbar ends here -->
    <main class="p-5 bg-light mb-4 rounded-3">
        <h1 style="padding: 20px;">Welcome, Nanjiniah Trevor</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae est eius incidunt recusandae? Quo vel, eveniet eos nulla quibusdam officiis nemo dolorum cum. Porro, quae.
        </p>
        <button class="btn btn-primary">Learn more</button>
        
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h1>Header 1</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugit aperiam, dicta nemo deserunt distinctio iure culpa voluptatum harum maxime neque vero aliquam. Magni sapiente omnis fuga enim! Accusamus, molestias?
                </p>
                <button class="btn btn-primary">View Details</button>
            </div>
            <div class="col-lg-4 col-md-6">
                <h1>Header 2</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugit aperiam, dicta nemo deserunt distinctio iure culpa voluptatum harum maxime neque vero aliquam. Magni sapiente omnis fuga enim! Accusamus, molestias?
                </p>
                <button class="btn btn-primary">View Details</button>
            </div>
            <div class="col-lg-4 col-md-6">
                <h1>Header 3</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugit aperiam, dicta nemo deserunt distinctio iure culpa voluptatum harum maxime neque vero aliquam. Magni sapiente omnis fuga enim! Accusamus, molestias?
                </p>
                <button class="btn btn-primary">View Details</button>
            </div>
        </div>

        <!-- Contact Us starts here -->
        <div class="row pt-5">
            <h1>Contact Us</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, quae magnam officia voluptatum cumque consequuntur molestias quibusdam in eum. Minima accusamus aperiam animi laudantium repudiandae nobis dignissimos architecto nesciunt aut.
            </p>

            <form action="aboutus.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6 col-md-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter Your First Name">
    
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter Your Last Name">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="Enter Your Phone Number">
    
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea  cols="30" rows="5" class="form-control" name="message" ></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- Contact Us ends here -->

        <hr>
        <footer>
            &copy; Zalego Academy 2022
        </footer>
    </div>


 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>
