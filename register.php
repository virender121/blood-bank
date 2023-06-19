<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxxx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <header>
    <a href="index.php" class="logo">
  <span class="material-symbols-outlined">arrow_back_ios_new</span>
</a>

    </header>
    <main class="mt-5">
        <div class="container ">
            <div class='row'>
                <div class="col-12">
                    <h2>Create An account</h2>
                 
                    <form id="login-form">
                    <div class="form-group input-material">
                    <input type="text" class="form-control-login" id="phone-field" required>
                    <label for="phone-field">PhoneNumber</label>
                    </div>
                    <div class="form-group input-material">
                    <input type="text" class="form-control-login" id="password-field" required>
                    <label for="password-field">Password</label>
                    </div>
                    <div class="form-group input-material">
                    <input type="text" class="form-control-login" id="confirmpassword-field" required>
                    <label for="confirmpassword-field">Confirm Password</label>
                    </div>
                    <div class="text-center mt-5">
                    <button type="submit" class="btn-login">Sign Up</button>
                </div>
                <div class="text-center mt-5">
                  <p>By clicking sign up your account will be created</p>
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