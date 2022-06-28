   <?php
   // Database Connection
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "web2";

   $connect = mysqli_connect($server,$username,$password,$database);
   if( isset($_POST['SubscribeButton']) )
    {
      $email =$_POST['email'];

      // submit data
      $insertdata =mysqli_query($connect, "INSERT INTO subscribers(email)VALUES('$email')");
      if($insertdata)
      {
          echo 'Success';
      }
      else
      {
          echo 'Error';
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
                <a href="index.php" class="nav-link active">Home</a>
                <a href="aboutus.php" class="nav-link">About Us</a>
                <a href="enroll.php" class="nav-link">Enroll Now</a>
            </div>
        </div>
       </div>
    
     </nav>
     <!-- navbar ends here -->
    <main class="bg-light p-5 mb-4 rounded-3 ">
        <h1 style="padding: 20px;">About Us</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, a rerum? Illo aspernatur reiciendis similique molestiae deserunt iusto! Odio asperiores rerum debitis, accusamus molestias libero corporis exercitationem sed. Sequi, quos.
        </p>
    </main>
    <br>
    <div class="container">
        <div class="row p-0">
            <div class="col-lg-6">
                <h1 style="padding: 50px;">Our Program</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam consequatur, aliquid, ad reiciendis aperiam nobis repellat, repellendus laudantium voluptatum veritatis debitis ipsum libero at neque.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="image/4.jpg" style="border-radius:20px">
            </div>
        </div>
        <!-- The Programs Starts Here -->
        <h1 style="padding: 0px;">The Programs</h1>
        <br>
         <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card shadow boder-radius:10px;">
                    <h1 style="padding-left:50px;">Skill Delivery</h1>
                    <p style="padding-left:50px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quasi voluptas repellendus eos, aperiam omnis. Totam sint in aspernatur quas.
                    </p>
                    <button class="btn btn-primary" style="width:150px;">View Details</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow boder-radius:10px;">
                    <h1 style="padding-left: 30px;">Upskilling Program</h1>
                    <p style="padding-left:30px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum veritatis repellendus nesciunt laudantium ad autem!
                    </p>
                    <button class="btn btn-primary" style="width: 150px;">View Details</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow boder-radius:10px;">
                    <h1 >Path finding Program</h1>
                <p style="padding-left: 30px;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quisquam architecto, aut facilis in similique mollitia a. Et, amet assumenda!
                </p>
                <button class="btn btn-primary" style="width: 150px;">View Details</button>
                </div>
            </div>
        </div>
        <!-- The Progrrams Ends Here -->
        <br>
        <br>
        <p style="font-size:40px; padding-left: 50px; font-weight: 50; align-content:center;">
            Subscribe to get information, latest news about Zalego Academy
        </p>
        <form action="aboutus.php" method="POST">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <input type="email" class="form-control" name="email" placeholder="Your Email Address" style="padding-left:150px;">
                </div>
                <br>
                <br>
                <div class="mb-3 col-lg-6">
                    <button class="btn btn-primary" name="SubscribeButton" style="width: 150px; padding-left: 50px;" type="submit">Subscribe</button>
                </div>
            </div>
        </form>
        <br>
        <br>
        <br>
        <hr>
        <footer>
            &copy; Zalego Academy 2022
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    </body>
    </html>