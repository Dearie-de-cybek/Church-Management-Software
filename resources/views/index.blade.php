<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Worship Arcade</title>
        <link rel="stylesheet" href="{{asset('assets/css/styless.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/queries.css')}}">
        <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
        <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
        <script defer src="{{asset('assets/main.js')}}"></script>
    </head>
    <body>
        <header class="header">
          <a href="#">
            <img class="logo" alt="Worship arcade logo" src="{{asset('assets/images/logo.svg')}}" />
          </a>

          <nav class="main-nav">
            <ul class="main-nav-list">
              <li><a class="main-nav-link" href="#who">Who we are</a></li>
              <li><a class="main-nav-link" href="#about">About us</a></li>
              <li>
                <a class="main-nav-link" href="#app">Our App</a>
              </li>
              <li><a class="main-nav-link" href="#cta">Locate us</a></li>
              <li><a class="main-nav-link nav-cta" href="https://wa.link/iz6ls5">Contact</a></li>
            </ul>
          </nav>

          <button class="btn-mobile-nav">
            <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
            <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
          </button>
        </header>

        <main>
          <section class="section-hero">
            <div class="hero">
              <div class="hero-text-box">
                <h1 class="heading-primary">
                  Welcome to Worship Arcade Community.
                </h1>
                <p class="hero-description">
                  Where we believe in sharing the love of God with everyone we meet,
                 Whether you're a long-time member of our congregation or a first-time visitor, we are honored to have you here with us.
                </p>
                <a href="#cta" class="btn btn--full margin-right-sm"
                  >Worship with us</a
                >

              </div>
              <div class="hero-img-box">
                <picture>
                  <img
                    src="{{asset('assets/images/couple.png')}}"
                    class="hero-img"
                    alt="Photo of Pastor and his wife"
                  />
                </picture>
              </div>
            </div>
          </section>

          <section class="section-how" id="who">
            <div class="container">
              <h2 class="heading-secondary app-head">
                Get to Know Us.
              </h2>
            </div>
            <div class="container grid grid--2-cols grid--center-v">
              <!-- STEP 01 -->
              <div class="step-text-box">
                <p class="step-number app-head">Worship</p>
                <p class="step-description app-head">
                We want to create a community where everyone is welcome, and where we can grow in our faith together. We strive to create a warm and welcoming environment where you can feel at home, and where you can explore what it means to follow Jesus Christ.
                </p>
              </div>

              <div class="">

                <iframe width="100%" height="315" src="https://www.youtube.com/embed/c8lXpPtCnQI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" ></iframe>
              </div>

              <div class="step-img-box">
                <img src="{{asset('assets/images/papa.png')}}" class="step-img" alt="iPhone app meal approving plan screen"/>
              </div>

              <div class="step-text-box">
                <p class="step-number"> Benediction</p>
                <p class="step-description app-head1">
                  This is my day, This is my week, This is my moment, This is my time, where i failed yesterday, i will triumph this time, where i was defeated before, i cancel the defeat, every lack in my life is terminated, every negative condition is healed, every arrows from the enemy's camp, it's multiplied and returned to them, my star is shining, it cannot be deemed, i access and manifest the wisom of God in all i do, i am fruitful in all arears of life, i will fulfill my days and purpose here on earth, This is my year of "Higher Ground(2023 year proclamation)" and my month of total Recovery(Monthly proclamation) in Jesus name. Amen 🙏🏽
                </p>
              </div>
            </div>


        </section>


      <!-- *************Gallery Section ************* -->
      <section class="section-testimonials" id="about">
        <div class="testimonials-container">
          <span class="subheading">Church Activities</span>
          <h2 class="heading-secondary">You are welcome to experience a wonderful time with God.</h2>

          <div class="testimonials">
            <figure class="testimonial">
              <img
                class="testimonial-img"
                alt="Photo of Pastor"
                src="{{asset('assets/images/peter.jpg')}}"
              />
              <blockquote class="testimonial-text">
                 Worship Arcade [The Community Church] Asaba held its inaugural service on the 12th day of October, 2014 due to the mandate given by God to Rev. Peter Kola Mayah whom he sent from Lagos to Asaba to pioneer a unique vision for the land of Delta to the world with the clear vision of <strong><u>VISION:</u>Raising Market-place Christains for all round societal relevance (Matt. 5:14,16).</strong> <strong><u>MISSION:</u> Positive, Practical, Systematic, Bible-based transformation in Character, Career, Relationship & Family (2Peter 1:3).</strong> The church kicked off from a shop at a plaza at 32 Summit road, with about 20 members. Today, to the glory of God, the church is structured into different unit and departments with membership in some hundreds; running two services in a well equipped hall at Inter-Bau Roundabout; AND STILL GROWING!!!
              </blockquote>
              <p class="testimonial-name">&mdash; Rev Peter Myah</p>
            </figure>


          </div>
        </div>

        <div class="gallery">
          <figure class="gallery-item">
            <img
              src="{{asset('assets/images/gallery/wor1.jpg')}}"
              alt="Photo of the church activities"
            />
            <!-- <figcaption>Caption</figcaption> -->
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor2.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor3.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor4.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor5.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor7.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor8.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor9.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor10.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor11.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor12.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
          <figure class="gallery-item">
            <img
            src="{{asset('assets/images/gallery/wor13.jpg')}}"
              alt="Photo of the church activities"
            />
          </figure>
        </div>
      </section>
      <!-- ************Gallery Section End************ -->


      <!-- ******************Our App ****************** -->
      <!-- <section class="section-pricing" id="pricing"0></section> -->
      <section class="section-pricing" id="app">
        <div class="container">
          <span class="subheading app-head">Our App</span>
          <h2 class="heading-secondary app-head">
            Releasing our Financial Tithing App
          </h2>
        </div>

        <div class="container grid grid--2-cols margin-bottom-md">
          <div class="pricing-plan pricing-plan--starter">
            <img src="{{asset('assets/images/app2.png')}}" alt="Photo of the Church App" width="50%" class="app"/>
          </div>

          <div class="pricing-plan pricing-plan--complete">
            <img src="{{asset('assets/images/app3.png')}}" alt="Photo of the Church App" width="50%" class="app"/>
          </div>
        </div>

        <div class="container grid">
          <aside class="plan-details">
            You can download for IOS and Android. For IOS <a href="">download</a>.
            For Android <a href="">download</a>
          </aside>
        </div>

        <div class="container grid grid--4-cols main-feat">
          <div class="feature">
            <ion-icon class="feature-icon" name="card-outline"></ion-icon>
            <p class="feature-title">Easily Pay Tithe!</p>
            <p class="feature-text">
              With our app, paying your tithe has never been easier. Simply enter the amount and securely submit your payment using your preferred payment method.
            </p>
          </div>
          <div class="feature">
            <ion-icon class="feature-icon" name="calendar-outline"></ion-icon>
            <p class="feature-title">Events & News</p>
            <p class="feature-text">
              Stay up to date with the latest news and events in your church community. Our app provides real-time updates on upcoming events, news, and important announcements.
            </p>
          </div>
          <div class="feature">
            <ion-icon class="feature-icon" name="receipt-outline"></ion-icon>
            <p class="feature-title">Payment History</p>
            <p class="feature-text">
              Keep track of your tithe payments with our convenient payment history feature. View your payment history anytime, anywhere, and never miss a payment again.
            </p>
          </div>
          <div class="feature">
            <ion-icon class="feature-icon" name="menu-outline"></ion-icon>
            <p class="feature-title">Easy Access</p>
            <p class="feature-text">
              Our app provides easy access to all the features you need to manage your tithe payments and stay connected with your church community. Whether you're at home or on the go, our app is always just a tap away.





            </p>
          </div>
        </div>
      </section>
      <!-- ******************Our App End ************** -->


      <!-- Changing CTA -->
          <section class="section-cta" id="cta">
            <div class="cont">
              <div class="map">
                <iframe width="100%" class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.365561423703!2d6.700278074230262!3d6.215427526668245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1043f32a0a7199a3%3A0x1126cbbdf2d2e31d!2sWorship%20Arcade!5e0!3m2!1sen!2sng!4v1680131690250!5m2!1sen!2sng" width="1500" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>

            </div>
          </section>

      </main>


        <footer class="footer">
          <div class="grid grid--footer">
            <div class="logo-col">
              <a href="#" class="footer-logo">
                <img class="logo" alt="Worshiparcade logo" src="{{asset('assets/images/logo.svg')}}" />
              </a>

              <ul class="social-links">
                <li>
                  <a class="footer-link" href="#"
                    ><ion-icon class="social-icon" name="logo-instagram"></ion-icon
                  ></a>
                </li>
                <li>
                  <a class="footer-link" href="#"
                    ><ion-icon class="social-icon" name="logo-facebook"></ion-icon
                  ></a>
                </li>
                <li>
                  <a class="footer-link" href="#"
                    ><ion-icon class="social-icon" name="logo-twitter"></ion-icon
                  ></a>
                </li>
              </ul>

              <p class="copyright">
                Copyright &copy; <span class="year">2023</span> by Worship Arcade, Inc.
                All rights reserved.
              </p>
            </div>

            <div class="address-col">
              <p class="footer-heading"><strong>Contact us</strong></p>
              <address class="contacts">
                <p class="address">
                  Worship Arcade, FirstBank, by Interbau Roundabout, Isieke 320242, Asaba, Delta
                </p>
                <p>
                  <a class="footer-link" href="tel:2348146046680">+234-814-604-6680</a
                  ><br />
                  
                  
                </p>
              </address>
            </div>

            <nav class="nav-col">
              <p class="footer-heading"><strong>Account</strong></p>
              <ul class="footer-nav">
                <li><a class="footer-link" href="#">Create account</a></li>
                <li><a class="footer-link" href="#">Sign in</a></li>
                <li><a class="footer-link" href="#">iOS app</a></li>
                <li><a class="footer-link" href="#">Android app</a></li>
              </ul>
            </nav>

            <nav class="nav-col">
              <p class="footer-heading"><strong>Church</strong></p>
              <ul class="footer-nav">
                <li><a class="footer-link" href="#">Partner with us</a></li>
                <li><a class="footer-link" href="#">Community</a></li>
              </ul>
            </nav>


          </div>
        </footer>
    </body>
</html>
