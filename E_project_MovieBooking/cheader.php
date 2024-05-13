<?php
session_start();
include 'config.php';

?>
<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>MovieBooking</title>
  <link href='css/bootstrap.min.css' rel='stylesheet'>
  <link href='css/font-awesome.min.css' rel='stylesheet'>
  <link href='css/global.css' rel='stylesheet'>
  <link href='css/index.css' rel='stylesheet'>
  <link href='css/dropdown.css' rel='stylesheet'>

  <link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon">


  <script src='js/bootstrap.bundle.min.js'></script>
  <style>


  </style>


</head>

<body>

  <section id='top'>
    <div class='container'>
      <div class='row top_1'>
        <div class='col-md-2'>
          <div class='top_1l pt-1'>
            <h3 class='mb-0'><a class='text-white' href='index.php'><i class='fa fa-video-camera col_red me-1'></i>MovieBooking</a></h3>
          </div>
        </div>
        <div class='col-md-4'>
          <div class='top_1m'>
            <div class='input-group'>
              <input type='text' class='form-control bg-black' placeholder='Search Site...'>
              <span class='input-group-btn'>
                <button class='btn btn text-white bg_red rounded-0 border-0' type='button'>
                  Search</button>
              </span>
            </div>
          </div>
        </div>
        <div class='col-md-4'>
          <div class='top_1r text-end'>
            <ul class='social-network social-circle mb-0'>
              <li><a href='#' class='icoRss' title='Rss'><i class='fa fa-instagram'></i></a></li>
              <li><a href='#' class='icoFacebook' title='Facebook'><i class='fa fa-facebook'></i></a></li>
              <li><a href='#' class='icoTwitter' title='Twitter'><i class='fa fa-twitter'></i></a></li>
              <li><a href='#' class='icoGoogle' title='Google +'><i class='fa fa-youtube'></i></a></li>
              <li><a href='#' class='icoLinkedin' title='Linkedin'><i class='fa fa-linkedin'></i></a></li>
            </ul>
          </div>
        </div>
        <?php
        if (isset($_SESSION['un'])) {
          $select = mysqli_query($con, "select * from tblsignup");
          $fetch = mysqli_fetch_assoc($select);
        ?>

          <div class='col-md-2'>
            <div class='top_1r text-end'>
              <div class='dropdown'>

                <a class='' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                  <img src=<?php echo "pics/" . $_SESSION['i']; ?> width='20px' height='20px' class='rounded-circle'>
                </a>


                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton' style="background-color: transparent; opacity:0.7">
                  <div class="card ms-4 bg-dark">


                    <div class="top-container justify-content-center align-item-center">

                      <img src="<?php echo "pics/" . $_SESSION['i']; ?>" class="img-fluid profile-image h-100 rounded-4" width="100px">


                    </div>
                    <div class="ml-3 text-warning text-center">
                      <h5 class="name ps-3 text-warning"><i class="fa fa-user" aria-hidden="true" style="padding-right: 10px;"></i><?php echo $_SESSION['un']; ?></h5>
                      <p class="mail ps-3"><i class="fa fa-envelope" aria-hidden="true" style="padding-right: 10px;"></i><?php echo $_SESSION['email'] ?></p>
                    </div>

                    <div class="middle-container d-flex justify-content-between align-items-center mt-3 p-2">
                      <div class="dollar-div px-3">

                        <div class="round-div"><i class="fa fa-dollar dollar"></i></div>

                      </div>


                      <div class="d-flex flex-column text-right mr-2">



                        <span class="current-balance">Current Balance</span>
                        <span class="amount"><span class="dollar-sign">$</span>1476</span>
                      </div>

                    </div>

                    <div class="recent-border mt-4">
                      <span class="recent-orders">Recent orders</span>
                    </div>
                    <div class="wishlist-border pt-2">
                      <span class="wishlist text-light">Wishlist</span>
                    </div>
                    <div class="fashion-studio-border pt-2">
                      <span class="fashion-studio text-light">Fashion studio</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
  </section>

  <section id='header'>
    <nav class='navbar navbar-expand-md navbar-light' id='navbar_sticky' style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
      <div class='container'>
        <a class='navbar-brand text-white fw-bold' href='index.php'><i class='fa fa-video-camera col_red me-1'></i>MovieBooking</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
          <ul class='navbar-nav mb-0'>
            <li class='nav-item'>
              <a class='nav-link active' aria-current='page' href='index.php'>Home</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='about.php'>About Us</a>
            </li>

            <li class='nav-item'>
              <a class='nav-link' href='contact.php'>contact us</a>
            </li>




            <li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                Movie
              </a>
              <ul class='dropdown-menu drop_1' aria-labelledby='navbarDropdown'>

                <?php
                $select = mysqli_query($con, 'select * from tblindustry');
                foreach ($select as $data) {
                  echo "<li><a class='dropdown-item' href='$data[IN_Name].php?A=$data[IN_Id]'>$data[IN_Name]</a></li>";
                }

                ?>

              </ul>
            </li>

            <li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                Cinema
              </a>
              <ul class='dropdown-menu drop_1' aria-labelledby='navbarDropdown'>

                <?php
                $select = mysqli_query($con, 'select * from tblcinema');
                foreach ($select as $data) {
                  echo "<li><a class='dropdown-item' href='$data[C_Name].php?C=$data[C_Id]'>$data[C_Name]</a></li>";
                }
                ?>
              </ul>
            </li>







            <li class='nav-item'>
              <a class='nav-link' href='logout.php'>Logout</a>
            </li>


          </ul>
        </div>
      </div>
    </nav>
  </section>
<?php
        } else {


          echo " 
</section>

<section id='header'>
<nav class='navbar navbar-expand-md navbar-light' id='navbar_sticky' style='font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;'>
  <div class='container'>
    <a class='navbar-brand text-white fw-bold' href='index.php'><i class='fa fa-video-camera col_red me-1'></i> Planet</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
      <ul class='navbar-nav mb-0'>
        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='index.php'>Home</a>
        </li>
		<li class='nav-item'>
          <a class='nav-link' href='about.php'>About Us</a>
        </li>
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            Blog
          </a>
          <ul class='dropdown-menu drop_1' aria-labelledby='navbarDropdown'>
            <li><a class='dropdown-item' href='blog.php'>Blog</a></li>
            <li><a class='dropdown-item border-0' href='blog_detail.php'>Blog Detail</a></li>
          </ul>
        </li>




        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            Movie
          </a>
          <ul class='dropdown-menu drop_1' aria-labelledby='navbarDropdown'>";

          $select = mysqli_query($con, 'select * from tblindustry');
          foreach ($select as $data) {
            echo "<li><a class='dropdown-item' href='$data[IN_Name].php?A=$data[IN_Id]'>$data[IN_Name]</a></li>";
          }

          echo "
           
          </ul>
        </li>
		
		
        <li class='nav-item'>
          <a class='nav-link' href='signup.php'>Sign Up/Login Up</a>
        </li>
		<li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            Pages
          </a>
          <ul class='dropdown-menu drop_1' aria-labelledby='navbarDropdown'>
            <li><a class='dropdown-item' href='about.php'>About Us</a></li>
            <li><a class='dropdown-item' href='services.php'>Services</a></li>
			<li><a class='dropdown-item' href='team.php'>Team</a></li>
            <li><a class='dropdown-item border-0' href='contact.php'>Contact</a></li>
          </ul>
        </li>
		
		
       
        
      </ul>
    </div>
  </div>
</nav>
</section>";
        }

?>