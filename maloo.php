<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Methi Aloo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicons -->
    <link href="./img/logo.png" rel="icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Aclonica|Mansalva|New+Rocker|Rock+Salt&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css?family=Rye&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/maloo.css">
  </head>

  <body onload="startTime()">
    <!--==========================
            Header
       ============================-->
    <header id="header" style="background-color: rgb(6, 12, 34);">
      <div class="container">
        <div id="logo" class="pull-left">
          <!-- logo -->
          <h1 style="font-family: 'Rock Salt', cursive;">
            <a href="./index.php">HS<span>R</span></a>
          </h1>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./indian.php">Indian</a></li>
            <li><a href="./indian.php#veg"><i class=" fa fa-arrow-right"></i> Veg</a></li>
            <li class="menu-active"><a href="#"><i class=" fa fa-arrow-right"></i> Methi Aloo</a></li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->


<!--==========================
          intro Section
    ============================-->
<section id="layout" class="wow slideInLeft">
  <div class="dname">
    <h1>Methi Aloo</h1>
    <hr class="veg">
  </div>

  <?php
  		$con = mysqli_connect('localhost','root','','userregistration');  
  		$q = "select * from stars";
  		$result = mysqli_query($con,$q);
  
      $data = mysqli_num_rows($result);
      
  	  ?>

  <div class="rate">
   <span><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></span> &nbsp; &nbsp; &nbsp; 
    <span style="font-size: 10vh;">&#8741;</span> &nbsp; &nbsp; &nbsp; 
    <span style="font-weight: 550;">  <?php echo $data; ?> Ratings </span>
  </div>

  <div class="gallery">
    <div class="accordion wow fadeInLeftBig" data-wow-delay="1s" data-wow-duration="2s">
      <ul>
        <li tabindex="1"></li>
        <li tabindex="2"></li>
        <li tabindex="3"></li>
        <li tabindex="4"></li>
      </ul>
    </div>
    <div class="info wow flipInY" data-wow-delay="1s" data-wow-duration="2s">
      <fieldset>
        <legend>&nbsp;<i class="fa fa-lightbulb-o"></i> </b> </legend>
        <label> <span><i class="fa fa-users" style="color: #4b0908;"></i> Servings: </span> 4 </label>
        <label><span><i class="fa fa-clock-o" style="color: #4b0908;"></i> Cooking time: </span> 50 min </label>
        <label><span><i class="fa fa-refresh" style="color: #4b0908;"></i> Difficulty Level: </span> Easy </label>
        <label><span><i class="fa fa-list-ul" style="color: #4b0908;"></i> Calories: </span> 243 cal </label>
      </fieldset>
    </div>
  </div>

</section>

<!-- intro -->


<!--==========================
          ingredients Section
    ============================-->
<section id="ingredients" class="wow fadeInRight" data-wow-duration="2s">
  
    <h2><i class="fa fa-check-square-o" style="color: #c00;"></i><span>Ingredients:</span></h2>
    <ul>
      <li>
        <div class="bullet big">
          <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false">
            <path
              d="M16 4c6.6 0 12 5.4 12 12s-5.4 12-12 12S4 22.6 4 16 9.4 4 16 4zm0-4C7.2 0 0 7.2 0 16s7.2 16 16 16 16-7.2 16-16S24.8 0 16 0z">
            </path>
            <circle cx="16" cy="16" r="6"></circle>
          </svg>
        </div>
        <span>250 GRAM Potatoes (washed and scrubbed clean), small </span>
      </li>
      <li>
        <div class="bullet">
          <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false">
            <circle stroke="none" cx="16" cy="16" r="10"></circle>
          </svg>
        </div>
        <span>500 Gram Fenugreek leaves, finely chopped </span>
      </li>
      <li>
        <div class="bullet">
          <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false">
            <circle stroke="none" cx="16" cy="16" r="10"></circle>
          </svg>
        </div>
        <span>1 Teaspoon Fenugreek seeds</span>
      </li>
      <li>
        <div class="bullet">
          <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false">
            <circle stroke="none" cx="16" cy="16" r="10"></circle>
          </svg>
        </div>
        <span>3-4 Whole red chillies</span>
      </li>
      <li>
        <div class="bullet">
          <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false">
            <circle stroke="none" cx="16" cy="16" r="10"></circle>
          </svg>
        </div>
        <span>1/2 Teaspoon Chilli powder</span>
      </li>
      <li>
        <div class="bullet">
          <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false">
            <circle stroke="none" cx="16" cy="16" r="10"></circle>
          </svg>
        </div>
        <span>2 Teaspoon Coriander powder</span>
      </li>
      <li>
        <div class="bullet">
          <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false">
            <circle stroke="none" cx="16" cy="16" r="10"></circle>
          </svg>
        </div>
        <span>1/2 Cup Mustard oil</span>
      </li>
      <li>
        <div class="bullet">
          <svg aria-hidden="true" viewBox="0 0 32 32" focusable="false">
            <circle stroke="none" cx="16" cy="16" r="10"></circle>
          </svg>
        </div>
        <span>Salt to taste</span>
      </li>
    </ul>
  
</section>

<!-- ingredients -->


<!--==========================
          prep Section
    ============================-->
<section id="prep" class="wow bounceInLeft" data-wow-duration="2s">
  <h2><i class="fa fa-check-square" style="color: #c00;"></i> &nbsp; <span>Preperation:</span></h2>
  <div>
    <ol>
      <li>
        <span>1.</span>
        <p class="wow slideInRight">
          Add oil to a pan, add garlic and cumin and fry till it smells good. Add washed potatoes to it and sprinkle turmeric.
        </p>
      </li>
  <hr>
  <li>
    <span>2.</span>
    <p class="wow slideInRight">
      Stir-fry for a few minutes over a medium heat, till the potatoes are half cooked. Cover and cook on a low flame until they turn soft.
    </p>
  </li>
  <hr>
  <li>
    <span>3.</span>
    <p class="wow slideInRight">
      Alternativerly you can also use pressure cooker to speed up the process. After the potatoes are cooked scoop the potatoes out of the oil and set aside.
    </p>
  </li>
  <hr>
  <li>
    <span>4.</span>
    <p class="wow slideInRight">
      Increase heat to high for a few seconds; add the fenugreek seeds and the whole red chillies.
    </p>
  </li>
  <hr>
  <li>
    <span>5.</span>
    <p class="wow slideInRight">
      Stir a few times and add the chopped fenugreek leaves, which must be cleaned in water beforehand.
    </p>
  </li>
  <hr>
  <li>
    <span>6.</span>
    <p class="wow slideInRight">
      Stir-fry till the leaves look slightly glossy, add the half cooked potatoes, salt, chilli powder and the coriander
      powder.
    </p>
  </li>
  <hr>
  <li>
    <span>7.</span>
    <p class="wow slideInRight">
      Cook uncovered till the leaves are done. Serve hot.
      <br> Enjoy!
    </p>
  </li>
    </ol>
  </div>
</section>

<!-- prep -->


<!--==========================
          able_to_make_it Section
    ============================-->
<section id="able_to_make_it" class="wow zoomInRight" data-wow-duration="2s">
  <h1 class="heading heading--stroke-shadow"><i class="fa fa-caret-right"></i> Were you able to make it?</h1>
</section>

<!-- able_to_make_it -->


<!--==========================
          star Section
    ============================-->
<section id="stars" class="wow fadeInLeft" data-wow-duration="2s">
  <h1 class="heading heading--stroke-shadow"><i class="fa fa-check"></i> If yes Please rate: </h1>
  <div class="cont">
    <div class="stars">
      <form action="stars.php" method="POST">
        <input class="star star-5" id="star-5-2" type="radio" name="star" value="1"/>
        <label class="star star-5" for="star-5-2"></label>
        <input class="star star-4" id="star-4-2" type="radio" name="star" value="2"/>
        <label class="star star-4" for="star-4-2"></label>
        <input class="star star-3" id="star-3-2" type="radio" name="star" value="3"/>
        <label class="star star-3" for="star-3-2"></label>
        <input class="star star-2" id="star-2-2" type="radio" name="star" value="4"/>
        <label class="star star-2" for="star-2-2"></label>
        <input class="star star-1" id="star-1-2" type="radio" name="star" value="5"/>
        <label class="star star-1" for="star-1-2"></label>
        <div class="rev-box">
          <textarea class="review" col="30" name="review"></textarea>
          <button type="submit" value='Submit' class="butn" name="submit">Submit</button>
        </div>
      </form>
    </div>
</section>

<!-- star -->


    <!--==========================
          Footer
      ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
    
                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="./img/logo.png" alt="HSR">
                        <p><i class="fa fa-copyright"></i> <strong>Healthy and Sumptuous Recipes</strong>
                            <hr class="style">
                            This website is solely for project purpose and includes modified code snippets from various
                            resources.The
                            recipes included in this website are directly taken from online resources.</p>
                    </div>
    
                    <div class="col-lg-6 col-md-6 wrapper">
                        <script src='https://codepen.io/juliangarnier/pen/75efae7724dbc3c055e918057fc4aca5.js'></script>
                    </div>
    
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>About Us</h4>
                        <p>
                            Students of Section I, <br>
                            PES University,<br>
                            Bangalore<br> <br>
                        </p>
    
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
    
                    </div>
    
                </div>
            </div>
        </div>
    
    <div class="time">
      <!-- <i class="fa fa-clock-o fa-2x"></i> &nbsp; &nbsp; <span id="clock"></span> -->
      <i class="fa fa-laptop fa-2x"></i> &nbsp; &nbsp;<span id="screen_time"></span> &nbsp; seconds
    </div>
    </footer>
    <!-- #footer -->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    
    <!-- Template Main Javascript File -->
    <script src="./js/main.js"></script>
    <script src="./js/food.js"></script>
  </body>
</html>
