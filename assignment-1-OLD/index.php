<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="UTF-8" />

    <!--Page Title-->
    <title>Company landing page</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no"
    />

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" title="Favicon" />

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css" />

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" />

    <!--Google Webfonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800"
      rel="stylesheet"
      type="text/css"
    />
  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <!--End of Preloader-->

    <div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
      <div
        class="top-border wow fadeInDown animated"
        style="visibility: visible; animation-name: fadeInDown"
      ></div>
      <div
        class="right-border wow fadeInRight animated"
        style="visibility: visible; animation-name: fadeInRight"
      ></div>
      <div
        class="bottom-border wow fadeInUp animated"
        style="visibility: visible; animation-name: fadeInUp"
      ></div>
      <div
        class="left-border wow fadeInLeft animated"
        style="visibility: visible; animation-name: fadeInLeft"
      ></div>
    </div>

    <div id="wrapper">
      <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
          <div class="row clearfix">
            <div class="col-1">
              <!--Logo-->
              <div id="logo">
                <!--Logo that is shown on the banner-->
                <img
                  src="images/logo.png"
                  id="banner-logo"
                  alt="Landing Page"
                />
                <!--End of Banner Logo-->

                <!--The Logo that is shown on the sticky Navigation Bar-->
                <img
                  src="images/logo-2.png"
                  id="navigation-logo"
                  alt="Landing Page"
                />
                <!--End of Navigation Logo-->
              </div>
              <!--End of Logo-->

              <!--Main Navigation-->
              <nav id="nav-main">
                <ul>
                  <li>
                    <a href="#banner">Home</a>
                  </li>
                  <li>
                    <a href="#about">About</a>
                  </li>
                  <li>
                    <a href="#news">News</a>
                  </li>
                  <li>
                    <a href="#services">Services</a>
                  </li>
                  <li>
                    <a href="#contacts">Contacts</a>
                  </li>
                </ul>
              </nav>
              <!--End of Main Navigation-->

              <div id="nav-trigger"><span></span></div>
              <nav id="nav-mobile"></nav>
            </div>
          </div>
        </div>
        <!--End of Header-->

        <!--Banner Content-->
        <div id="banner-content" class="row clearfix">
          <div class="col-38">
            <div class="section-heading">
              <h1>A place where coders meet</h1>
              <h2>
                Namari is the place where the coders come together to share
                their idea and build a MVP in exchange for the 0.02% stake in
                their company
              </h2>
            </div>

            <!--Call to Action-->
            <a href="#" class="button">Start Building</a>
            <!--End Call to Action-->
          </div>
        </div>
        <!--End of Row-->
      </header>

      <!--Main Content Area-->
      <main id="content">
        <!--Introduction-->
        <section id="about" class="introduction scrollto">
          <div class="row clearfix">
            <div class="col-3">
              <div class="section-heading">
                <h3>OUR SERVICES</h3>
                <h2 class="section-title">
                  How We Help You To Build your product
                </h2>
                <p class="section-subtitle">
                  we have a hub of developers who are near your area and who
                  will help you build your product so that you have a MVP in
                  your hand
                </p>
              </div>
            </div>

            <div class="col-2-3">
              <!--Icon Block-->
              <div
                class="col-2 icon-block icon-top wow fadeInUp"
                data-wow-delay="0.1s"
              >
                <!--Icon-->
                <div class="icon">
                  <i class="fa fa-html5 fa-2x"></i>
                </div>
                <!--Icon Block Description-->
                <div class="icon-block-description">
                  <h4>Mobile Apps</h4>
                  <p>
                    A fast mobile application with less than 20MB size on
                    average
                  </p>
                </div>
              </div>
              <!--End of Icon Block-->

              <!--Icon Block-->
              <div
                class="col-2 icon-block icon-top wow fadeInUp"
                data-wow-delay="0.3s"
              >
                <!--Icon-->
                <div class="icon">
                  <i class="fa fa-bolt fa-2x"></i>
                </div>
                <!--Icon Block Description-->
                <div class="icon-block-description">
                  <h4>Lightning fast</h4>
                  <p>Your MVP will be build within one week</p>
                </div>
              </div>
              <!--End of Icon Block-->
            </div>
          </div>
        </section>
        <!--End of Introduction-->

        <!--Gallery-->
        <aside
          id="gallery"
          class="row text-center scrollto clearfix"
          data-featherlight-gallery
          data-featherlight-filter="a"
        >
          <a
            href="images/gallery-images/gallery-image-1.jpg"
            data-featherlight="image"
            class="col-3 wow fadeIn"
            data-wow-delay="0.1s"
            ><img
              src="images/gallery-images/gallery-image-1.jpg"
              alt="Landing Page"
          /></a>
          <a
            href="images/gallery-images/gallery-image-2.jpg"
            data-featherlight="image"
            class="col-3 wow fadeIn"
            data-wow-delay="0.3s"
            ><img
              src="images/gallery-images/gallery-image-2.jpg"
              alt="Landing Page"
          /></a>
          <a
            href="images/gallery-images/gallery-image-3.jpg"
            data-featherlight="image"
            class="col-3 wow fadeIn"
            data-wow-delay="0.5s"
            ><img
              src="images/gallery-images/gallery-image-3.jpg"
              alt="Landing Page"
          /></a>
          <a
            href="images/gallery-images/gallery-image-4.jpg"
            data-featherlight="image"
            class="col-3 wow fadeIn"
            data-wow-delay="1.1s"
            ><img
              src="images/gallery-images/gallery-image-4.jpg"
              alt="Landing Page"
          /></a>
          <a
            href="images/gallery-images/gallery-image-5.jpg"
            data-featherlight="image"
            class="col-3 wow fadeIn"
            data-wow-delay="0.9s"
            ><img
              src="images/gallery-images/gallery-image-5.jpg"
              alt="Landing Page"
          /></a>
          <a
            href="images/gallery-images/gallery-image-6.jpg"
            data-featherlight="image"
            class="col-3 wow fadeIn"
            data-wow-delay="0.7s"
            ><img
              src="images/gallery-images/gallery-image-6.jpg"
              alt="Landing Page"
          /></a>
        </aside>
        <!--End of Gallery-->

        <!--Content Section-->
        <div id="services" class="scrollto clearfix">
          <div class="row no-padding-bottom clearfix">
            <!--Content Left Side-->
            <div class="col-3">
              <!--User Testimonial-->
              <blockquote class="testimonial text-right bigtest">
                <q
                  >"When I approached Namarias with my idea, I was skeptical
                  about the one-week promise. But not only did they deliver a
                  stunning MVP within the timeframe, they exceeded all my
                  expectations in terms of quality and functionality."</q
                >
                <footer>— Jordan A., Founder of EcoTech Innovations</footer>
              </blockquote>
              <!-- End of Testimonial-->
            </div>
            <!--End Content Left Side-->

            <!--Content of the Right Side-->
            <div class="col-3">
              <div class="section-heading">
                <h3>BELIEVING</h3>
                <h2 class="section-title">Focusing On What Matters Most</h2>
                <p class="section-subtitle">
                  In today's fast-paced digital world, time is of the essence.
                  Whether you're a startup eager to test a new idea or a
                  business looking to expand digitally, waiting months for an
                  MVP or app can be costly. That's where we come in.
                </p>
              </div>
              <p>
                🚀 One Week, One MVP/App: Our seasoned team of developers and
                designers are committed to turning your idea into a functional
                MVP or app in just one week.
              </p>
              <p>
                🔍 Rapid Prototyping: We believe in the power of iteration. Our
                agile approach ensures that you get a prototype fast, allowing
                you to test, learn, and pivot as needed.
              </p>
              <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
            </div>
            <!--End Content Right Side-->

            <div class="col-3">
              <img src="images/dancer.jpg" alt="Dancer" />
            </div>
          </div>
        </div>
        <!--End of Content Section-->
        <aside id="news" class="scrollto text-center" data-enllax-ratio=".2">
          <div class="row clearfix">
            <div class="section-heading">
              <h3>NEWS</h3>
              <h2 class="section-title">Top news about our company</h2>
            </div>

            <!--User Testimonial-->
            <blockquote class="col-3 testimonial classic">
              <q
                >The startup ecosystem is buzzing with the latest trend: rapid
                MVP development. More and more companies are turning to one-week
                MVP solutions to test their ideas in the market. Experts believe
                that this approach not only saves time and resources but also
                allows startups to pivot quickly based on real-world feedback.
                With companies like [Your Company Name] leading the charge, the
                future of MVP development looks promising.
              </q>
              <footer>- The startup blogs</footer>
            </blockquote>
            <!-- End of Testimonial-->

            <!--User Testimonial-->
            <blockquote class="col-3 testimonial classic">
              <q
                >Gone are the days of spending months, if not years, developing
                a product only to find limited market interest. The MVP model,
                especially the one-week MVP approach, is changing the game. By
                focusing on core features and getting products into users' hands
                faster, businesses can adapt, iterate, and succeed at an
                unprecedented rate. With industry leaders like [Your Company
                Name] offering rapid MVP solutions, startups have never been
                better positioned to thrive.</q
              >
              <footer>-- Tech Crush</footer>
            </blockquote>
            <!-- End of Testimonial-->

            <!--User Testimonial-->
            <blockquote class="col-3 testimonial classic">
              <q
                >The startup ecosystem is buzzing with the latest trend: rapid
                MVP development. More and more companies are turning to one-week
                MVP solutions to test their ideas in the market. Experts believe
                that this approach not only saves time and resources but also
                allows startups to pivot quickly based on real-world feedback.
                With companies like [Your Company Name] leading the charge, the
                future of MVP development looks promising.</q
              >
              <footer>-- Buzzing startups</footer>
            </blockquote>
            <!-- End of Testimonial-->
          </div>
        </aside>

        <!--contact-->
        <aside id="contact" class="scrollto text-center" data-enllax-ratio=".2">
          <div class="row clearfix">
            <div class="section-heading">
              <h3>FEEDBACK</h3>
              <h2 class="section-title">What our customers are saying</h2>
            </div>

            <!--User Testimonial-->
            <blockquote class="col-3 testimonial classic">
              <img src="images/user-images/user-1.jpg" alt="User" />
              <q
                >Speed, quality, and a team that truly listens. [Your Company
                Name] delivered an MVP that was spot-on. They're the real
                deal</q
              >
              <footer>Sophia M., CEO of HealthFirst Solutions</footer>
            </blockquote>
            <!-- End of Testimonial-->

            <!--User Testimonial-->
            <blockquote class="col-3 testimonial classic">
              <img src="images/user-images/img-2.jpeg" alt="User" />
              <q
                >Launching a product has never been this smooth. [Your Company
                Name]'s one-week promise seemed too good to be true, but they
                proved me wrong. Exceptional work!</q
              >
              <footer>Aiden R., Product Manager at TravelSphere</footer>
            </blockquote>
            <!-- End of Testimonial-->

            <!--User Testimonial-->
            <blockquote class="col-3 testimonial classic">
              <img src="images/user-images/user-3.jpg" alt="User" />
              <q
                >I was blown away by the efficiency. In just one week, they
                transformed my rough idea into a sleek app. A game-changer for
                startups like mine!</q
              >
              <footer>Liam T., Co-founder of UrbanEats</footer>
            </blockquote>
            <!-- End of Testimonial-->
          </div>
        </aside>
        <div id="contacts" class="scrollto clearfix">
        <div class="row clearfix">
          <div class="section-heading">
            <h3>Contact</h3>
            <h2 class="section-title">
              You can contact below people for our services
            </h2>
          </div>
            <?php
              // Specify the path to your contacts file
              $contactsFile = 'files/contacts.txt';

              // Initialize an empty array to store contact information
              $contacts = [];

              // Check if the file exists
                if (file_exists($contactsFile)) {
                    // Read the file and split it into an array of lines
                    $lines = file($contactsFile, FILE_IGNORE_NEW_LINES);

                    // Process each line and store contact information in an array
                    foreach ($lines as $line) {
                        // Split each line into fields using the comma and space delimiter
                        $fields = explode(', ', $line);

                        // Store contact information in an associative array
                        $contacts[] = [
                            'Name' => $fields[0],
                            'Email' => $fields[1],
                            'Phone' => $fields[2],
                        ];
                      }
                } else {
                    echo 'Contacts file not found.';
                }
              ?>

              <?php foreach ($contacts as $contact) { ?>
                <blockquote class="col-3 testimonial classic">
                  <img src="images/user-images/img-5.jpeg" alt="User" />
                  <footer>
                    <?php echo $contact['Name']; ?> : <?php echo $contact['Email']; ?>
                  </footer>
                </blockquote>
              <?php } ?>
        </div>
              </div>
        <!--End of Testimonials-->
      </main>
      <!--End Main Content Area-->

      <!--End of Footer-->
    </div>

    <!-- Include JavaScript resources -->
    <script src="js/jquery.1.8.3.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/featherlight.min.js"></script>
    <script src="js/featherlight.gallery.min.js"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.stickyNavbar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/images-loaded.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/site.js"></script>
  </body>
</html>
