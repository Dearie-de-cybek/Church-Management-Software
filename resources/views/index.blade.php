<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Worship Arcade</title>
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsiveness.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"></link>
        <script defer type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
        <script defer nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
        <script defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script defer src="{{asset('assets/main.js')}}"></script>
    </head>
    <body>
    <header style="background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.75) 20.23%, rgba(44, 6, 29, 0.75) 100%), url('./public/assets/images/hero.png')">
    <div class="wrapper navbar">
        <a href="#" class="logo"><img src="{{ asset('assets/images/logo.svg') }}" alt="Logo"></a>
    
        <nav>
            <img src="{{ asset('assets/images/close.svg') }}" class="close-btn" alt="Close">
            <ul>
                <li><a href="#about">About us</a></li>
                <li><a href="#ourapp">Our App</a></li>
                <li><a href="#whoweare">Who we are</a></li>
                <li><a href="#locateus">Locate us</a></li>
            </ul>
        </nav>

        <div class="mobile-cart-menu">

            <a href="https://api.whatsapp.com/send?phone=2348146046680&text=Hello%20WorshipArcade!%20I%20recently%20visited%20your%20church%27s%20website%20and%20I%27m%20interested%20in%20learning%20more%20about%20your%20community%20and%20activities.%20I%20have%20a%20few%20questions%20and%20would%20love%20to%20connect%20with%20someone%20from%20the%20church." class="btn-main">
                Contact us
            </a>
            <img src="{{ asset('assets/images/menu.svg') }}" class="menu-btn" alt="Hamburger Menu">
        </div>
    </div>
    <section class="hero">
        <div class="welcome-text">
            <h1>WORSHIP ARCADE</h1> 
           <h3>(THE COMMUNITY CHURCH, ASABA)</h3>
        </div>
        <div class="hero-text">
            Where we believe in sharing the love of God with everyone we
            meet, Whether you're a long-time member of our congregation
            or a first-time visitor, you are not too small for us to know you neither
            are we too big to identify with you.
        </div>
        <div class="hero-btn">
            <a href="#locateus" class="btn-main">
                Worship with us
            </a>
        </div>
    </section>
</header>

    <main>
    <section class="debut">
        <section class="about wrapper">
            <span class="subheading" id="about">About us</span>
            <div class="heading-secondary">
                God has been so faithful to us as a Family in all these years.
            </div>
            <p class="about-text">
                Worship Arcade [The Community Church] Asaba held its inaugural service on the 12th day of October, 
                2014 due to the mandate given by God to Rev. Peter Kola Mayah whom he sent from Lagos to Asaba to 
                pioneer a unique vision for the land of Delta to the world with the clear vision of VISION:Raising 
                Market-place Christains for all round societal relevance (Matt. 5:14,16). MISSION: Positive, Practical, 
                Systematic, Bible-based transformation in Character, Career, Relationship & Family (2Peter 1:3). The 
                church kicked off from a shop at a plaza at 32 Summit road, with about 20 members. Today, to the glory 
                of God, the church is structured into different unit and departments with membership in some hundreds;
                running two services in a well equipped hall at Inter-Bau Roundabout; AND STILL GROWING!!!
            </p>
            <div class="swiper-container">
                <div class="carousel swiper-wrapper">
                    <img class="swiper-slide" src="{{ asset('assets/images/carousel.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider1.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider2.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider3.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider4.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider5.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider6.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider7.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider8.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider9.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider10.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider11.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider12.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider13.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider14.png') }}" alt="Photo of Church">
                    <img class="swiper-slide" src="{{ asset('assets/images/slider15.png') }}" alt="Photo of Church">
                </div>         
            </div>
        </section>
    </section>

    <section class="Financial">
        <div class="wrapper">

            <span class="subheading" id="ourapp">Worship arcade app</span>
            <div class="heading-secondary">
                Introducing our Financial App
            </div>
            <div class="app-section">
                <img class="app11" src="{{ asset('assets/images/app2.png') }}" alt="Photo of the church app" width="18%">
                <div class="download">
                    <div class="download-btn bounce">
                       <a href=""><img src="{{ asset('assets/images/download1.svg') }}" alt="Our App"></a>
                    </div>
                    
                    <div class="download-btn bounce">
                        <a href=""><img src="{{ asset('assets/images/download.svg') }}" alt="Our App"></a>
                    </div>
                </div>
                <img class="app22" src="{{ asset('assets/images/app3.png') }}" alt="Photo of the church app" width="18%">
            </div>
            
            
        </div>

        <div class="wrapper grid--4-cols" style="margin-top: 5%;">
            <div class="features">
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
                Easily pay your offerings, drop prophetic seeds, make donations and contribute to the church building project
                </p>
                </div>

            </div>
            <a href="#" class="book bounce"><img src="{{ asset('assets/images/books.png') }}" alt=""></a>
        </div>
    </section>

    <section class="who">
        <div class="wrapper" id="whoweare">
            <span class="subheading" id="">Who we are</span>
            <div class="heading-secondary" id="">
                We are the Testifiers family, we believe in more
                of God, less of Religion. Miracles Happen Here!
                Worship with us in any of
                our services both physical and online.
            </div>
            <div class="grid-images">
                <img src="{{ asset('assets/images/grid1.png') }}" width="100%" alt="Pastors photo">
                <img src="{{ asset('assets/images/grid.png') }}" width="100%" alt="Pastors photo">
                <img src="{{ asset('assets/images/grid2.png') }}" width="100%" alt="Pastors photo">
                <img src="{{ asset('assets/images/grid3.png') }}" width="100%" alt="Pastors photo">
            </div>
        </div>

    </section>
    
    <!-- Michael add your part that you have in your branch here -->
    <section class="benediction" style="padding-top: 0%">
        <div class="wrapper">
            <span class="subheading" id="">Our Community</span>

            <div class="grid-images">
                
                <div>
                    <span class="about-text">
                We want to create a community where everyone is welcome, grow in faith together by the power of the word of God through His servant Rev. Peter Kola Mayah. We strive to create a warm, loving and welcoming environment where you can worship God, explore what it means to follow Jesus Christ and have the feeling of being a part of big Family.
                    </span>
                </div>

                <div class="">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/c8lXpPtCnQI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" ></iframe>
                </div>

                <div>
                    <span class="subheading" id="">Benediction</span>
                    <br><br>
                    <span class="about-text">
                        This is my day, This is my week, This is my moment, This is my time, where i failed yesterday, i will triumph this time, where i was defeated before, i cancel the defeat, every lack in my life is terminated, every negative condition is healed, every arrows from the enemy's camp, it's multiplied and returned to them, my star is shining, it cannot be deemed, i access and manifest the wisdom of God in all i do, i am fruitful in all areas of life, i will fulfill my days and purpose here on earth, This is my year of "Higher Ground(2023 year proclamation)" and my month of total Recovery(Monthly proclamation) in Jesus name. Amen 
                    </span>
                </div>

                <div class="papa">
                    <img src="{{ asset('assets/images/papa.png') }}" alt="papa">
                </div>
            </div>
        </div>
    </section>
    <!-- Michael ends here -->

    <section class="locate">
        <div class="wrapper">
            <div class="con">
                <span class="subheading" id="" style="width: fit-content">Locate us</span>
                <img src="{{ asset('assets/images/marker.svg') }}" style="margin-top: -2em" alt="">
            </div>
            <div class="heading-secondary" id="diff2"> CHURCH AUDITORIUM: PAMOR CENTER, Interbua Roundabout, by First Bank Plc, Asaba, Delta State.</div>
            <div class="car-gallery">
                <img src="{{ asset('assets/images/carpark.png') }}" width="50%" alt="">          
                <img src="{{ asset('assets/images/carpark2.png') }}" width="50%" alt="">          
            </div>

            <div class="map">
                <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.365561423703!2d6.700278074230262!3d6.215427526668245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1043f32a0a7199a3%3A0x1126cbbdf2d2e31d!2sWorship%20Arcade!5e0!3m2!1sen!2sng!4v1680131690250!5m2!1sen!2sng" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="wrapper">
            
        <footer class="footer">
            <div class="grid">
                <div class="nav-col">
                    <p class="footerheading">Contact us</p>
                    <p class="footerheading">Senior Pastor</p>
                    <p>
                        <a class="footer-link" href="tel:+2348147631052" >08147631052</a><br />
                        <a class="footer-link" href="tel:+2348053715200" >08053715200</a><br />
                        <p class="footerheading">Church Line</p>
                        <a class="footer-link"  href="tel:+2348146046680">08146046680</a><br />
                    </p>
                </div>

                <div class="nav-col">
                    <p class="footerheading">Account</p>
                    <p>
                        <a class="footer-link" href="#">Create account</a><br />
                        <a class="footer-link" href="#">iOS app</a><br />
                        <a class="footer-link" href="#">Android app</a><br />
                    </p>
                </div>

                <div class="nav-col">
                    <p class="footerheading">Connect with Us</p>
                    <p class="footer-link">Follow Us on social media and on Whatsapp</p>
                    <ul class="footer-nav">
                    <li><a class="footer-link" target="_blank" href="https://web.facebook.com/worshiparcade/?_rdc=1&_rdr"><img src="{{ asset('assets/images/facebook.svg') }}" alt="facebook"></a></li>
                    <li><a class="footer-link" target="_blank" href="https://www.youtube.com/results?search_query=worship+arcade"><img src="{{ asset('assets/images/youtube.svg') }}" alt="youtube"></a></li>
                    <li><a class="footer-link" target="_blank" href="https://www.instagram.com/worshiparcade/"><img src="{{ asset('assets/images/instagram.svg') }}" alt="instagram"></a></li>
                    <li><a class="footer-link" target="_blank" href="https://api.whatsapp.com/send?phone=2348146046680&text=Hello%20WorshipArcade!%20I%20recently%20visited%20your%20church%27s%20website%20and%20I%27m%20interested%20in%20learning%20more%20about%20your%20community%20and%20activities.%20I%20have%20a%20few%20questions%20and%20would%20love%20to%20connect%20with%20someone%20from%20the%20church."><img src="{{ asset('assets/images/whatsapp.svg') }}" alt="whatsapp"></a></li>
                    </ul>
                </div>

                <div class="nav-col">
                    <p class="footerheading">Partner With Us</p>
                    
                    <p class="footerheading1">Church Building Project</p>
                    <p>
                        <p class="footer-links">Sterling Bank</p>
                        <p class="footer-links">Account Number</p>
                        <p class="footer-links">0076425542</p>
                        
                    </p>
                    <hr>
                    <p class="footerheading1">Welfare Partnership</p>
                    <p>
                        <p class="footer-links">FCMB</p>
                        <p class="footer-links">Account Number</p>
                        <p class="footer-links">0076425542</p>
                        
                    </p>
                    <hr>
                    <p class="footerheading1">Prophetic Seed</p>
                    <p>
                        <p class="footer-links">GT Bank</p>
                        <p class="footer-links">Account Number</p>
                        <p class="footer-links">0076425542</p>
                        
                    </p>
                    <hr>
                    <p class="footerheading1">Domiciliary Account</p>
                    <p>
                        <p class="footer-links">GT Bank</p>
                        <p class="footer-links">Account Number</p>
                        <p class="footer-links">0076425542</p>
                        
                    </p>
                    <hr>
                </div>
            </div>
        </footer>

        <div class="" style="text-align: center;">
         <a href="#"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo"><br></a>   
        </div>
        <p class="footerheading" style="text-align: center">Copyright © 2023 by Worship Arcade, Inc. All rights reserved.</p>
        </div>
    </section>
</main>





    <!--<script src="main.js"></script>-->
    
</body>
</html>
