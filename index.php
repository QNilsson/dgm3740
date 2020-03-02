<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Fill Me In" />
  <meta name="author" content="Quinn Nilsson" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />


  <script src="https://kit.fontawesome.com/5baca2d7f5.js"></script>
  <!-- This start file was build by Paul Cheney  -->
  <title>CABOT CRUISES: Home<?php echo $title; ?></title>

  <!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- STYLE SHEETS -->
  <link href="css/styles.css" rel="stylesheet" />
  <link href="slick/slick.css" rel="stylesheet" />
  <link href="slick/slick-theme.css" rel="stylesheet" />
  <link href="css/fontawesome-all.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
</head>

<body id="top">
<?php $title="Cabot Cruises | Home"; 
     include '_top.php'
     ?> 
 
      <!-- HEADER HERE -->

     

      <!-- CONTENT HERE -->
      <main class="clearfix">
      <div id="container">
    <div id="content-wrap">
        <div class="mySlider">
          <picture>
            <source srcset="images/cruise1.jpeg" media="(min-width: 680px)"/>
            <img srcset="images/cruise1sm.jpg" alt="1st slider photo" />

          </picture>

          <picture>
            <source srcset="images/cruise1.jpg" media="(min-width: 680px)"/>
            <img srcset="images/cruise2sm.jpg" alt="2nd slider photo" />

          </picture>
          <picture>
            <source srcset="images/cruise3.jpg" media="(min-width: 680px)"/>
            <img srcset="images/cruise3sm.jpg" alt="3rd slider photo" />

          </picture>
          <picture>
            <source srcset="images/cruise4.jpg" media="(min-width: 680px)" />
            <img srcset="images/cruise4sm.jpg" alt="4th slider photo" />

          </picture>
          <picture>
            <source srcset="images/cruise5.png" media="(min-width:680px)" />
            <img srcset="images/cruise5sm.png" alt="1st slider photo" />

          </picture>
        </div>
        <!--end slider class-->
      
          <h1>Recent Blog Articles</h1>
       
        <div class="card-grid">

          <div class="card">
            <figure class=" card card1">
              <a href="">
                <img src="images/excursion.jpg" alt="Snorkel with exotic fish">
                <p>adventure</p>
                
              </a>
              <figcaption>FEB 29, 2019</figcaption>
            </figure>
          </div>
          <!--end card-->

          <div class="card">
            <figure class="card card2">
              <a href="">
                <img src="images/food.jpg" alt="Gourmet food">
                <p>cruise cuisine</p>
                
              </a>
              <figcaption>MAR 17, 2019</figcaption>
            </figure>
          </div>
          <!--end card-->

          <div class="card">
            <figure class="card card3">
              <a href="">
                <img src="images/fun.jpg" alt="Fun Onboard">
                <p>fun onboard</p>
                
              </a>
              <figcaption>JUN 4, 2019</figcaption>
            </figure>
          </div>
          <!--end card-->
          <div class="card">
            <figure class="card card4">
              <a href="">
                <img src="images/talent.jpg" alt="Nightime shows">
                <p>night life</p>
                
              </a>
              <figcaption>AUG 2, 2019</figcaption>
            </figure>
          </div>
          <!--end card-->
        </div>
        <!--end card grid-->
        </div>
</div>
      </main>


    <?php include '_bot.php'; ?>
    <!--end content wrap-->
   
  <script  type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "TravelAgency",
      "name": "Cabot Cruises",
      "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.",
      "openingHours": "Mo-Fr 09:00-16:00",
      "telephone": "5555555555",
      "faxNumber":"+1385559876",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Main St",
        "addressLocality": "Orlando",
        "addressRegion": "FL"
      },
      "image": "http://fullpath.com/logo1x.png",
      "priceRange":"$500 to $4000"
    }
}
  </script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="js/toggleMenu.js"></script>
  <script src="js/activate.js"></script>
  <script>
    $(document).ready(function () {
      $(".mySlider").slick({
        autoplay: true,
        dots: true,
        arrows: false,
        cssEase: "ease-out",
        speed: 1000,
        fade: false,
        autoplaySpeed: 5000
      });
    });
  </script>
  
</body>

</html>