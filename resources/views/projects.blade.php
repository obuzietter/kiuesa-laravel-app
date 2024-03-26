<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIUESA - Projects</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="/css/projects-page.css">

    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <header>
        <nav class="float">
            <div class="logo">
                <!-- <img src="media/logo.png" alt=""> -->
                KIUESA
            </div>
            <div class="contact-info">
                <div class="mail">
                    <a href="mailto:kiuesac@gmail.com">
                        <div class="icon">
                            <img src="media/paper-plane.png" alt="">
                        </div>
                        <div class="text">
                            <div>
                                Email:
                            </div>
                            <div>
                                info@kiuesac.co.ke
                            </div>
                        </div>
                    </a>

                </div>
                <div class="call">
                    <a href="tel:+254 700 000 000">
                        <div class="icon">
                            <img src="media/call.png" alt="">
                        </div>
                        <div class="text">
                            <div>
                                Call:
                            </div>
                            <div>
                                +254 700 000 000
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </nav>
        <nav class="nav-bar">
            <input type="checkbox" id="nav-check">
            <div class="nav-btn">
                <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>

            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Projects</a>
                <a href="#">Contact</a>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>What We Do?</h1>
        </section>
        <section class="activities">
            <div class="activity">
                <div class="activity-image">
                    <img src="media/plant.png" alt="Plant Image"/>
                </div>
                <div class="activity-text">
                    <h2>Save Our Forests</h2>
                    <p>Journey into the heart of the world's forests! Learn about the vital role forests play in our ecosystem and the threats they face. Discover how we can protect, restore, and sustainably manage these majestic landscapes.</p>
                </div>
            </div>
            <div class="activity">
                <div class="activity-image">
                    <img src="media/water.png" alt="">
                </div>
                <div class="activity-text">
                    <h2>Save Our Water
                    </h2>
                    <p>Water, the essence of life! Explore the importance of water conservation and the impact of our daily choices on this precious resource. Discover ways to protect our oceans, rivers, and lakes for generations to come.</p>
                </div>
            </div>
            <div class="activity">
                <div class="activity-image">
                    <img src="media/recycle.png" alt="Recycle Bin Icon"/>
                </div>
                <div class="activity-text">
                    <h2>Recycling Is A Must
                    </h2>
                    <p>Join the movement towards a greener planet! Dive into the world of recycling and discover how small actions can make a big difference. Explore tips, tricks, and the importance of recycling for our environment.</p>
                </div>
            </div>
            <div class="activity">
                <div class="activity-image">
                    <img src="media/power.png" alt="Light Bulb Icon"/>
                </div>
                <div class="activity-text">
                    <h2>Clean Power
                    </h2>
                    <p>Discover the future of energy! Learn how clean power sources like solar, wind, and hydroelectricity are reshaping our world. Explore the benefits of renewable energy for a sustainable tomorrow.</p>
                </div>
            </div>
            <div class="activity">
                <div class="activity-image">
                    <img src="media/energy.png" alt="Energy Bar Icon"/>
                </div>
                <div class="activity-text">
                    <h2>Renewable Energy
                    </h2>
                    <p>Unlock the potential of renewable energy! From solar panels on rooftops to vast wind farms, explore the innovative solutions paving the way towards a cleaner future. Learn how you can be a part of the renewable energy revolution.</p>
                </div>
            </div>
            <div class="activity">
                <div class="activity-image">
                    <img src="media/nature.png" alt="Nature Leaf Icon"/>
                </div>
                <div class="activity-text">
                    <h2>For Good Nature
                    </h2>
                    <p>Embrace your love for nature! Dive into articles, stories, and initiatives that celebrate our planet's beauty. Discover how conservation efforts and sustainable practices are preserving the wonders of the natural world.</p>
                </div>
            </div>
        </section>
        <hr>
        <section class="registration">
            <form action="{{ url('new-member')}}" method="POST">
                @csrf
                <h2>Register With Us</h2>
                <input type="text" placeholder="First Name" name="first_name" required/>
                <input type="text" placeholder="Last Name" name="last_name" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="tel" placeholder="Phone Number" name="phone" required>
                
                <select name="occupation" id="" name="occupation">
                    <option value="select" hidden>Select Occupation</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="business">Business</option>
                    <option value="other">Other</option>
                </select>
                
                <button type="submit"> Submit </button>
            </form>
        </section>
    </main>
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Kenyatta Avenue, sw 54321, Nairobi</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="media/logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor
                                    incididuntut consec tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024, All Right Reserved <a href="#">KIUESA</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <!-- <li><a href="#">Terms</a></li> -->
                                <!-- <li><a href="#">Privacy</a></li> -->
                                <!-- <li><a href="#">Policy</a></li> -->
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>