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
    <title>CABOT CRUISES: <?php echo $title; ?></title>

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
    $title="Booking";
    include '_top.php'; 
    ?> 

<main class="clearfix">
    <h1>Book a Cruise</h1>
<form>
    <label for="fname">Full Name</label><br>
    <input type="text" id="fname" name="fname" required><br>
    <label for="address">Address Line</label><br>
    <input type="text" id="address" name="address"><br>
    <label for="city">City</label><br>
    <input type="text" id="city" name="city"><br>
    <label for="state">State</label><br>
    <select id="state" name="state" placeholder="Please select..."><br>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
    </select><br>
    <label for="zip" >Zipcode</label><br>
    <input type="number" id="zip" name="zip"><br>
    <label for="phone">Phone Number</label><br>
    <input type="number" id="phone" name="phone"><br>
    <label for="email">Email Address</label><br>
    <input type="text" id="email" name="email" required><br>
    <label for="cruise">Cruise</label><br>
    <select name="cruise" id="cruise" placeholder="Please select...">
    <option value="EU">Europe</option>
    <option value="AK">Alaska</option>
    <option value="BH">Bahamas</option>
    <option value="MX">Mexico</option>
</select><br>

    <input type="submit" value="Book my Cruise">
</form>

</main>
     <?php include '_bot.php'; ?> 

     <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "TravelAgency",
            "name": "Cabot Cruises",
            "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.",
            "openingHours": "Mo-Fr 09:00-16:00",
            "telephone": "5555555555",
            "faxNumber": "+1385559876",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "123 Main St",
                "addressLocality": "Orlando",
                "addressRegion": "FL"
            },
            "image": "http://fullpath.com/logo1x.png",
            "priceRange": "$500 to $4000"
        }
        }
    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/toggleMenu.js"></script>
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