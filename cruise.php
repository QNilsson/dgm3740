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
    <title>CABOT CRUISES: Cruises<?php echo $title; ?></title>

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

     <?php 
     $title="Cruise"; 
     include '_top.php';
     ?> 
    <main>
        <h1>Cruises</h1>
        <div class="cruise-container">
             <img src="/images/cruisecruise1.jpg" class="cruisephoto" alt="A cruise to the Bahamas">
            <div>
                <h2>Cruise the Bahamas</h2>
                <p>Aruba, Jamaica, Ooh I wanna take ya. Bermuda, Bahama, come on pretty mama.
                    Calm beaches and relaxing ambiance make The Bahamas a classic cruising favorite. This is where most
                    cruise lines have their private islands, and water sports --
                    such as snorkeling, sailing and Jet Skiing -- are also popular shore excursions. </p>
                    <button>Read More</button>
            </div>
        </div>
        <div class="cruise-container">
                <img src="/images/cruisecruise2.jpg" class="cruisephoto" alt="A cruise to Europe">
   
            <div>
                <h2>A European Adventure</h2>
                <p>AIt's no coincidence that many of the best European cruises call in the most 
                    beautiful ports in the world. Eat your way through the cobbled streets of Italy, 
                    contrast the timeless beauty of Greece's ruins with the modern chic that's come to 
                    define its islands or hike through forlorn caverns and up lush waterfalls in captivating Croatia. </p>
                    <button>Read More</button>
            </div>
        </div>
        <div class="cruise-container">
            <img src="/images/cruisecruise3.jpg" class="cruisephoto"alt="A cruise to Alaska">
           
                <div>
                    <h2>See Beautiful Alaska</h2>
                    <p>If you’re looking for a cruise vacation that’s a little bit out of the way 
                        and a little bit out of the ordinary, make an Alaska cruise your first choice.
                         If your first thought is “Alaska… cool!” you’re on the right track — even in 
                         the mild summer season, you should still pack your sweater. Grab it and get up 
                         here because Alaska is a natural wonder through and through, and the coastal panhandle region Cabot Cruise Line sails to is perhaps the most stunning. </p>
                        <button>Read More</button>
                </div>
        </div>
        <div class="cruise-container">
            <img src="/images/cruisecruise4.jpg" class="cruisephoto"alt="A cruise to the Mexico">
            
            <div>
                <h2>Bienvenido Mexico!</h2>
                <p>ASo close, yet so deliciously far. Mexico might be right down there, but it exists
                     in another world entirely. Experience a whole enchilada’s worth of rich culture 
                     and fun on a cruise to Mexico. Each port — including favorites Cozumel, Cabo San 
                     Lucas and Puerto Vallarta — contributes its own distinct local flavor to the mix.
                      Whether your Mexico cruise style is west-coast Riviera with its Pacific charm, 
                      east-coast Caribbean and its island mojo… or perhaps Baja and its out-of-this-world 
                      coastal scenery, you’ll find Mexico central to a great vacation. </p>
                    <button>Read More</button>
            </div>
        </div>



    </main>

    <?php include '_bot.php'; ?> 

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