<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" type="text/css">

</head>

<body>


        <div class="modal" id="thanku">
            <div class="modal-box">
                <h1>Thank you</h1>
                <h4>Your information is submitted.</h4>

                <button class="close">
                    OK
                </button>
            </div>
        </div>

        <header id="header">
            <div class="menu" id="menu">
                <ul class="menu-list">
                    <a href="#home" class="active">
                        <li>Home</li>
                    </a>
                    <a href="#about">
                        <li>About me</li>
                    </a>
                    <a href="#what">
                        <li>What I Do</li>
                    </a>
                    <a href="#resume">
                        <li>Resume</li>
                    </a>
                    <a href="#pfolio">
                        <li>Portfolio</li>
                    </a>
                    <a href="#faq">
                        <li>Faq</li>
                    </a>
                    <a href="#contact">
                        <li>Contact Me</li>
                    </a>
                </ul>
                <ul>
                    <a href="">
                        <li><ion-icon name="logo-twitter"></ion-icon></li>
                    </a>
                    <a href="">
                        <li><ion-icon name="logo-facebook"></ion-icon></li>
                    </a>
                    <a href="">
                        <li><ion-icon name="logo-instagram"></ion-icon></li>
                    </a>
                    <a href="">
                        <li><ion-icon name="logo-github"></ion-icon></li>
                    </a>
                    <a href="">
                        <li><ion-icon name="logo-dribbble"></ion-icon></li>
                    </a>
                </ul>
            </div>
            <div class="imgBx">
                <img src="images/logo.png" alt="">
            </div>
            <div class="side">
                <!-- <button class="btn btn-dark"><a href="login-pannel/login.php" class="text-info">Login</a></button> -->
                <a href="#"><ion-icon name="call-outline"></ion-icon></a>
                <a href="tel:+91 8601972856">+91 8601972856</a>
                <div class="menuToggle"></div>
            </div>
        </header>
        <section class="home" id="home">
            <div class="content" data-aos="fade-in">
                <h1>HI, I'M A FREELANCER</h1>
                <h2><span class="auto-type"></span></h2>
                <h3>based in Lucknow, India</h3>
                <br>
                <div class="btn"><a href="https://api.whatsapp.com/send?phone=+918601972856&text=Hi%20Digicrowd%20Solution" target="_blank"><button>Contact Me</button></a>
                </div>
            </div>
            <div class="imgBx" data-aos="fade-up"><img src="images/IMG-5025.jpg" class="men"></div>
        </section>
        <section class="about" id="home">
            <div class="about-heading">
                <span class="ab-h3">About Me</span>
                <h1 class="ab-h1">Know Me More</h1>
            </div>
            <div class="about-main" data-aos="fade-right">
                <div class="left" data-aos="fade-left">
                    <h2>Hi, I'm <span>Uzair Khan</span></h2>
                    <p>I'm a designer & developer with a passion for web design. I enjoy developing simple, clean and slick
                        websites that provide real value to the end user. Thousands of clients have procured exceptional
                        results while working with me. Delivering work within time and budget which meets client’s
                        requirements is our moto.</p>
                </div>
                <div class="right">
                    <div class="circle">
                        <span class="animate__animated animate__heartBeat">2</span>
                    </div>
                    <h2 class="animate__animated animate__rubberBand animate__delay-1s">Years of Experience</h2>
                </div>
            </div>

            <div class="container p-4">
                <div class="col-lg-12 pt-4 pt-lg-0 p-content" data-aos="fade-left">
                    <h3>Full Stack Web Developer.</h3>
                    <p class="fst-italic">
                        It's my great pleasure to introduce myself as a Web Developer who is obsessed with the Information Technology & Computer Science.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="p-icon">
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>21 Oct 2004</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+860 197 2856</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Lucknow, India</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="p-icon">
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>18</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>uzairkhan7521@example.com</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        Frontend & Backend Developer: - I can design anything you want with our creativity backed by our skills in frontend technologies (HTML, HTML5, CSS, Bootstrap, Java script, etc) and Backend Technologies(Python, PHP, MySql)
                    </p>
                </div>
            </div>
        </section>

        <section class="skills">
            <h1>My Skills</h1>
            <div class="skill-main" data-aos="fade-up" data-aos-delay="100">
                <div class="skill-box">
                    <h3>HTML<span>100%</span></h3>
                    <div class="progress-1">
                        <div class="progress-info"></div>
                    </div>
                </div>
                <div class="skill-box">
                    <h3>Bootstrap<span>70%</span></h3>
                    <div class="progress-2">
                        <div class="progress-info"></div>
                    </div>
                </div>
                <div class="skill-box">
                    <h3>CSS<span>95%</span></h3>
                    <div class="progress-3">
                        <div class="progress-info"></div>
                    </div>
                </div>
                <div class="skill-box">
                    <h3>php<span>60%</span></h3>
                    <div class="progress-4">
                        <div class="progress-info"></div>
                    </div>
                </div>
                <div class="skill-box">
                    <h3>Javascript<span>80%</span></h3>
                    <div class="progress-5">
                        <div class="progress-info"></div>
                    </div>
                </div>
                <div class="skill-box">
                    <h3>MySql<span>99%</span></h3>
                    <div class="progress-6">
                        <div class="progress-info"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="download-btn"><button>Download CV</button></div> -->

        </section>

        <section class="what-to-do" id="what">
            <div class="wtd-heading">
                <span>What I Do?</span>
                <h1>How I can help your next project</h1>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="container-box card p-4 border-0">
                    <a href="#"><ion-icon id="icon" name="code-slash"></ion-icon></a>
                    <h3>Web Development</h3>
                    <p>Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network).</p>
                </div>
                <div class="container-box card p-4 border-0">
                    <a href="#"><ion-icon id="icon" name="brush"></ion-icon></a>
                    <h2>Brand Identify</h2>
                    <p> Your brand identity is what makes you instantly recognizable to your customers. Learn how to craft the perfect brand identity design for your business.</p>
                </div>
                <div class="container-box card p-4 border-0">
                    <a href="#"><ion-icon id="icon" name="create"></ion-icon></a>
                    <h2>Digital Marketing</h2>
                    <p>Digital marketing is a means of advertising and selling products through the internet, mobile devices, social media, search engines, display advertising, and other channels.</p>
                </div>
            </div>
        </section>

        <!-- start portfolio section -->
        <section class="portfolio" id="pfolio">
            <div class="pfolio-heading">
                <span>Portfolio</span>
                <h1>Some of my most recent projects</h1>
            </div>
            <div class="ul-box filter-buttons" id="filter-button"  data-aos="fade-up">
                <ul class="portfolio-ul" id="filter-btns">
                    <li data-target="all" class="active">All</li>
                    <li data-target="app">Apps</li>
                    <li data-target="card">Card</li>
                    <li data-target="web">Web</li>
                </ul>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 portfolio-item" data-id="web">
                    <div class="portfolio-wrap">
                        <img src="images/eCommerce.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item" data-id="app">
                    <div class="portfolio-wrap">
                        <img src="images/weath-app.png" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item" data-id="card">
                    <div class="portfolio-wrap">
                        <img src="images/card.png" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item" data-id="web">
                    <div class="portfolio-wrap">
                        <img src="images/iphone.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item" data-id="app">
                    <div class="portfolio-wrap">
                        <img src="images/login-form.png" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item" data-id="card">
                    <div class="portfolio-wrap">
                        <img src="images/taj mahal.png" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

            <!-- <div class="img-container portfolio-container" data-aos="fade-up" data-aos-delay="100">
            <div class="card imgbox portfolio-item filter-web">
                <img src="images/login-form.png">
            </div>
            <div class="card imgbox portfolio-item filter-card">
                <img src="images/taj mahal.png">
            </div>
            <div class="imgbox portfolio-item filter-web">
                <img src="images/iphone.png">
            </div>
            <div class="imgbox portfolio-item filter-app">
                <img src="original-7e69ddaedfb2d9d8b3198e6940dadbcb.png">
            </div>
            <div class="imgbox portfolio-item filter-app">
                <img src="original-817b1149caa8068119e795d791241614.jpg">
            </div>
            <div class="imgbox portfolio-item filter-card">
                <img src="original-833977bdfdd1bb8654946e06b270555b.png">
            </div>
        </div> -->
        </section>
        <!-- end portfolio section -->

        <!-- start testimonial -->

        <section id="testimonials" class="testimonials section-bg">
            <div class="container-fluid mt-4">

                <div class="resume-heading m-4">
                    <span>Testimonial</span>
                    <h1>My Happy Clients</h1>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="images/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="images/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="images/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="images/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="images/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>

        <!-- end testimonial -->

        <!-- start hero section -->
        <section class="hero">
            <div class="img-mask"></div>
            <h4>Interested in working with me?</h4>
            <a href="https://api.whatsapp.com/send?phone=+918601972856&text=Hi, this is Uzair Khan" target="_blank"><button>Hire Me !</button></a>
        </section>
        <!-- end hero section -->

        <!-- start questioniare section -->
        <section class="questioniare" id="faq">
            <div class="faq"  data-aos="fade-up" data-aos-delay="100">
                <div class="question-heading">
                    <span>FAQ</span>
                    <h1>Have any questions ?</h1>
                </div>
                <div class="faq-box">
                    <div class="questions-container">
                        <div class="question">
                            <button>
                                <span class="icon d-arrow"><ion-icon name="chevron-down-outline"></ion-icon></span>
                                <span>What is Web Devopment ?</span>

                            </button>
                            <p>Web development refers to the creating, building, and maintaining of websites. It includes
                                aspects such as web design, web publishing, web programming, and database management.</p>
                        </div>
                        <div class="question">
                            <button>
                                <span class="icon d-arrow"><ion-icon name="chevron-down-outline"></ion-icon></span>
                                <span>What is HTML ?</span>

                            </button>
                            <p>HTML stands for HyperText Markup Language and is the standard markup language for creating
                                web pages.HTML defines the meaning and structure of web content and tells a web browser how
                                to display text, images, and other forms of multimedia on a webpage</p>
                        </div>
                        <div class="question">
                            <button>
                                <span class="icon d-arrow"><ion-icon name="chevron-down-outline"></ion-icon></span>
                                <span>What is JavaScript ?</span>

                            </button>
                            <p>JavaScript is a client side scripting language used by your browser. It is not related to
                                Java in any way. It is used to make dynamic web pages, form validation, games and even a
                                Linux emulator!</p>
                        </div>
                        <div class="question">
                            <button>
                                <span class="icon d-arrow"><ion-icon name="chevron-down-outline"></ion-icon></span>
                                <span>What about Frontend Developer ?</span>

                            </button>
                            <p>A front-end developer is a software developer who specializes in creating and designing the
                                user interface (UI) and user experience (UX) of websites and web applications using web
                                languages such as HTML, CSS, and JavaScript. Their primary responsibility is to ensure that
                                the visual and interactive aspects of a website or application are user-friendly,
                                aesthetically pleasing, and functionally efficient.</p>
                        </div>
                        <div class="question">
                            <button>
                                <span class="icon d-arrow"><ion-icon name="chevron-down-outline"></ion-icon></span>
                                <span>What is Digital Marketing ?</span>

                            </button>
                            <p>Digital marketing, also known as online marketing, is a marketing strategy that uses the
                                internet and online-based digital technologies to promote products and services to potential
                                customers.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="img-box"  data-aos="fade-up" data-aos-delay="100">

                <img src="images/faq.png" alt="">

            </div>
        </section>
        <!-- end questionare section -->

        <section class="contact" id="contact">
            <div class="container2" data-aos="fade-up">
                <div class="get-in-touch">
                    <h1 class="head1">Lets Get in touch</h1>
                    <br>
                    <p>I enjoy discussing new projects and design challenges. Please share as much info, as possible so we
                        can get the most out of our first catch-up.</p>
                    <br>
                    <h1>Living In:</h1>
                    <h2>Hussainganj, Lucknow, India </h2>
                    <br>
                    <h1>Call:</h1>
                    <h2>(+91) 8601972856</h2>
                    <br><br>
                    <ul class="card-s">
                        <span>Social</span>
                        <a href="https://twitter.com/Uzair62316360">
                            <li class="text-primary social-link"><ion-icon name="logo-twitter"></ion-icon></li>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100026408718169&mibextid=LQQJ4d">
                            <li class="text-primary social-link"><ion-icon name="logo-facebook"></ion-icon></li>
                        </a>
                        <a href="https://www.instagram.com/____khan.sahab____/">
                            <li class="text-danger social-link"><ion-icon name="logo-instagram"></ion-icon></li>
                        </a>
                        <a href="https://github.com/uzair1308web-developer">
                            <li class="text-dark social-link"><ion-icon name="logo-github"></ion-icon></li>
                        </a>
                    </ul>


                </div>

                <div class="formBox" data-aos="fade-up">
                    <form class="form" id="contact-form" action="mail.php" method="POST">
                        <h1 class="head1">Estimate your Project?</h1>
                        <label for="name">What is Your Name:</label>
                        <br>
                        <input type="text" id="name" name="name" required>
                        <br>
                        <br>
                        <label for="name">Your Email Address:</label>
                        <br>
                        <input type="text" id="email" name="email" required>
                        <br>
                        <br>
                        <label for="name">How can I help You?:</label>
                        <input type="hidden" name="_captcha" value="false">
                        <br>
                        <textarea name="message" id="message" cols="60" rows="5"></textarea>
                        <input type="hidden" name="_template" value="table">
                        <input type="hidden" name="_next" value="http://127.0.0.1:5501/">
                        <br>
                        <input type="submit" name="submit" class="btn" id="btn" value="send"></ion-icon></input>
                    </form>
                </div>
            </div>
        </section>


        <footer>
            <h1>Copyright © 2023 <span>Uzair</span>. All Rights Reserved.</h1>
            <h1>Designed by <span>Uzair</span></h1>
        </footer>


    
    <script src="jquery-3.7.0.min.js"></script>
    <script src="jquery.scrollUp.min.js"> </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <!-- <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;">Scroll</a> -->
    <script>
        $(function() {
            $.scrollUp({
                scrollName: 'scrollUp', // Element ID
                scrollDistance: 300, // Distance from top/bottom before showing element (px)
                scrollFrom: 'top', // 'top' or 'bottom'
                scrollSpeed: 300, // Speed back to top (ms)
                easingType: 'linear', // Scroll to top easing (see http://easings.net/)
                animation: 'fade', // Fade, slide, none
                animationSpeed: 200, // Animation speed (ms)
                scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
                scrollTarget: false, // Set a custom target element for scrolling to. Can be element or number
                scrollText: '<?php echo '<h2><ion-icon name="arrow-up-circle-outline"></ion-icon></h2>' ?>', // Text for element, can contain HTML
                scrollTitle: false, // Set a custom <a> title if required.
                scrollImg: false, // Set true to use image
                activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
                zIndex: 2147483647 // Z-Index for the overlay
            });
        });
        var typed = new Typed(".auto-type", {
            strings: ["DESIGNER", "DEVELOPER", "CODER"],
            typeSpeed: 150,
            backspeed: 150,
            loop: true
        })

        function openPopup() {
            // $('.btn').on("click", () => {
            //     $(".modal").show();
            // });
            // $('.close').on("click", () => {
            //     $(".modal").hide();
            // });
        }
        $('.close').on("click", () => {
            $(".modal").hide();
        });

        $(document).ready(function() {
            $("#contact-form").submit(function(event) {
                event.preventDefault()
                var formData = {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    message: $("#message").val(),
                };

                $.ajax({
                    type: "post",
                    url: "mail.php",
                    data: formData,

                    success: function(response) {
                        response = JSON.parse(response)
                        if (response['status']) {
                            $(".modal").show();
                            document.querySelector('.form').reset();
                        } else {
                            $(".modal").hide();
                        }
                    }
                });

            })
        })




        document.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 0) {
                header.classList.add('scrolled')
            } else {
                header.classList.remove('scrolled')
            }
        })

        const buttons = document.querySelectorAll("button");
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const faq = button.nextElementSibling;
                const icon = button.children[0];
                let chevron_arrow = icon.children[0].getAttribute('name');
                if (chevron_arrow == 'chevron-down-outline') {
                    icon.children[0].setAttribute('name', 'chevron-up-outline')
                } else {
                    icon.children[0].setAttribute('name', 'chevron-down-outline')
                }
                faq.classList.toggle('show');
                // icon.classList.toggle('rotate')
            })
        })
        let list = document.querySelectorAll('.menu')

        function active() {
            list.forEach((i) =>
                i.classList.add('active'));
            this.classList.remove('active');
        }
        list.forEach((i) =>
            i.addEventListener('click', active));

        let menuToggle = document.querySelector('.menuToggle');
        let header = document.querySelector('header');
        menuToggle.onclick = function() {
            header.classList.toggle('active');
        }

        let menu = document.querySelectorAll('.menu-list a')
        for (let i = 0; i < menu.length; i++) {
            menu[i].addEventListener('click', () => {

                document.getElementById('header').classList.remove('active')
            })

        }

        const filterButtons = document.querySelector("#filter-btns").children;
        const items = document.querySelector(".portfolio-container").children;

        for (let i = 0; i < filterButtons.length; i++) {
            filterButtons[i].addEventListener("click", function() {
                for (let j = 0; j < filterButtons.length; j++) {
                    filterButtons[j].classList.remove("active")
                }
                this.classList.add("active");
                const target = this.getAttribute("data-target")

                for (let k = 0; k < items.length; k++) {
                    items[k].style.display = "none";
                    if (target == items[k].getAttribute("data-id")) {
                        items[k].style.display = "flex";
                        items[k].style.width = "50%";
                    }
                    if (target == "all") {
                        items[k].style.display = "flex"
                        items[k].style.width = "33%";

                    }
                }
            })
        }


        window.addEventListener('load', () => {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            })
        });

        new Swiper('.testimonials-slider', {
            speed: 600,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },

                1200: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            }
        });

        // const scroll = new LocomotiveScroll({
        //     el: document.querySelector('body'),
        //     smooth: true
        // });
    </script>
</body>

</html>
