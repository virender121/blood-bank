<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxxx" crossorigin="anonymous">

</head>
<body>
    <header>
    <img
        src="./images/blood_logo_black.png"
        alt=" logo"
        class="logo"
        style="width: 70px ; height: 40px;"
       
      />
    </header>
    <main class="mt-5">
        <div class="container ">
            <div class='row'>
                <div class="col-12">
                    <h2>Welcome Back!</h2>
                 
                    <form id="login-form">
                    <div class="form-group input-material">
                    <input type="text" class="form-control-login" id="email-field" required>
                    <label for="email-field">Email</label>
                    </div>
                    <div class="form-group input-material">
                    <input type="text" class="form-control-login" id="password-field" required>
                    <label for="password-field">Password</label>
                    </div>
                    <div class="text-center mt-5">
                    <button type="submit" class="btn-login">Log In</button>
                </div>
                <div class="text-center mt-5">
                  <p>Don't have an account? <span class="" ><a href='register.php'>Sign Up</a></span></p>
                </div>

                    </form>
                   
                </div>
            </div>
        </div>
    </main>
    
    <script src="index.js"></script>
<!--bootstrap js CDN-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
<!--jquery CDN link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!--owl js link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>