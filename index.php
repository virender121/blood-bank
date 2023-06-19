<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxxx" crossorigin="anonymous">

    <!-- <link rel="stylsheet" hrf='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css'/> -->
</head>
<body>

<header class="header">
<div class="mobile-navbar-btn">
        <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
        <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
      </div>
      <img
        src="./images/blood_logo_white.png"
        alt=" logo"
        class="logo"
       
      />

      <nav class="navbar">
        <ul class="navbar-list">
          <li><a class="navbar-link" href="index.php">Home</a></li>
          <li><a class="navbar-link" href="finddonor.php">Find A Donor</a></li>
          <li><a class="navbar-link" href="#">Be A Donor</a></li>
          <li><a class="navbar-link" href="#">About Us</a></li>
          <li><a class="navbar-link" href="#">Contact Us</a></li>
          <li><a class="navbar-link" href="#">My Profile</a></li>
          <li class=" btn-nav text-center">
            <a
              class="navbar-link"
              href="login.php"
             
              >Log In</a
            >
          </li>
        </ul>
      </nav>

     
    </header>

<div class="container">
  <div class="row">
    <div class="col-12 col-md-12 my-5 mt-5">
      <div class="card mt-4 mx-auto">
        <div class="card-body ">
          <div class="row">
            <div class="col-12">
              <h6>Find A Donor</h6>
              <div class="input-group">
  <input class="form-control mb-2 border-0" placeholder="Enter City Name">
  <div class="input-group-append">
    <span class="input-group-text" style="position: absolute; right: 0; width:30px; height:30px;">
    <i class="fa fa-map-marker-alt" style="color: #363636;"></i>
    
  </span>
  </div>
</div>


<select class="form-control mb-2 border-0">
  <option value="">Select Blood Group</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
</select>

              <button class="btn-search" >Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

     <!-- donor-list -->
  
     <?php
  $donors = [
    [
      'name' => 'Rajat Kumar',
      'location' => 'Charoda - 9900902302',
    ],
    [
      'name' => 'Rajat Kumar',
      'location' => 'Charoda - 9900902302',
    ],
    [
      'name' => 'Rajat Kumar',
      'location' => 'Charoda - 9900902302',
    ],
    [
      'name' => 'Rajat Kumar',
      'location' => 'Charoda - 9900902302',
    ],
    [
      'name' => 'Rajat Kumar',
      'location' => 'Charoda - 9900902302',
    ],
    [
      'name' => 'Rajat Kumar',
      'location' => 'Charoda - 9900902302',
    ],
    [
      'name' => 'Rajat Kumar',
      'location' => 'Charoda - 9900902302',
    ],
    [
      'name' => 'Rajat Kumar',
      'location' => 'Charoda - 9900902302',
    ],
    [
      'name' => 'Rajat Kumar',
      'location' => 'Charoda - 9900902302',
    ],
    [
      'name' => 'Rajat Kumar',
      'location' => 'Charoda - 9900902302',
    ],
  ];
?>

<div class="container mt-5">
  <h1>Recent Donors</h1>
  <div id="donorList" class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
    <?php
    foreach ($donors as $donor) {
    ?>
     <div class="col g-4">
  <div class="donor-card p-1 m-1">
    <div class="col-md-4 ">
      <div class="card-red">
        <h1 class="text-white text-bold text-center">A+</h1>
      </div>
    </div>
    <div class="col-md-8 mt-3 mt-md-3   d-flex flex-column mx-auto">
      <div class="donor-name text-bold"><?php echo $donor['name']; ?></div>
      <div class="donor-phone"><?php echo $donor['location']; ?></div>
    </div>
  </div>
</div>

    <?php
    }
    ?>
  </div>
</div>








<script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script src="index.js"></script>
<!--bootstrap js CDN-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
<!--jquery CDN link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!--owl js link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>
