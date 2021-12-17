<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/font-awesome.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/stylehome.css" />
    <link rel="icon" href="<?= base_url(); ?>/assets/img/logo1.png">
</head>

<body>
    <main>
        <header id="header">
            <div class="overlay overlay-lg">
                <img src="<?= base_url(); ?>/assets/img/shapes/square.png" class="shape square" alt="" />
                <img src="<?= base_url(); ?>/assets/img/shapes/circle.png" class="shape circle" alt="" />
                <img src="<?= base_url(); ?>/assets/img/shapes/half-circle.png" class="shape half-circle1" alt="" />
                <img src="<?= base_url(); ?>/assets/img/shapes/half-circle.png" class="shape half-circle2" alt="" />
                <img src="<?= base_url(); ?>/assets/img/shapes/x.png" class="shape xshape" alt="" />
                <img src="<?= base_url(); ?>/assets/img/shapes/wave.png" class="shape wave wave1" alt="" />
                <img src="<?= base_url(); ?>/assets/img/shapes/wave.png" class="shape wave wave2" alt="" />
                <img src="<?= base_url(); ?>/assets/img/shapes/triangle.png" class="shape triangle" alt="" />
                <img src="<?= base_url(); ?>/assets/img/shapes/points1.png" class="points points1" alt="" />
            </div>

            <nav>
                <div class="container-custom">
                    <div class="logo">
                        <img src="<?= base_url(); ?>/assets/img/logo1.png" alt="" />
                    </div>

                    <div class="links">
                        <ul>
                            <li>
                                <a href="#header">Home</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                            <li>
                                <a href="edit-profile.php" class="active">Profile</a>
                            </li>
                            <li>
                                <a href="login/logout" class="">Logout</a>
                            </li>
                        </ul>
                    </div>

                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </nav>

            <div class="header-content">
                <div class="container-custom grid-2">
                    <div class="column-1">
                        <h1 class="header-title">aaaa</h1>
                        <p class="text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, molestias quas. Repellat officia nulla, itaque modi vel harum repudiandae, provident culpa saepe ad ex aut quia esse. Totam, voluptas doloribus?
                        </p>
                        <a href="#" class="btn-custom">Download CV</a>
                    </div>

                    <div class="column-2 image">
                        <img src="<?= base_url(); ?>/assets/img/shapes/points2.png" class="points points2" alt="" />
                        <img src="abcd.png" class="img-element z-index" alt="" style="border-radius: 5rem 10rem;max-width:450px;" />
                    </div>
                </div>
            </div>
        </header>



        <section class="about section" id="about">
            <div class="container-custom">
                <div class="section-header">
                    <h3 class="title" data-title="Who Am I">About me</h3>
                </div>

                <div class="section-body grid-2">
                    <div class="column-1 image">
                        <img src="<?= base_url(); ?>/assets/img/shapes/points4.png" class="points" alt="" />
                        <img src="<?= base_url(); ?>/assets/img/default-profile_pict.png" class="z-index" alt="" style="border-radius: 5rem 10rem;max-width:450px;" />
                    </div>
                    <div class="column-2">
                        <h3 class="title-sm">Hello, I'm User</h3>
                        <p class="text">
                            First User
                        </p>
                        <div class="skills">
                            <div class="skill html">
                                <h3 class="skill-title">HTML</h3>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="90%"></div>
                                </div>
                            </div>
                            <div class="skill css">
                                <h3 class="skill-title">CSS</h3>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="70%"></div>
                                </div>
                            </div>
                            <div class="skill js">
                                <h3 class="skill-title">JavaScript</h3>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="80%"></div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn-custom">Read more</a>
                    </div>


                </div>
            </div>
        </section>

        <section class="records">
            <div class="overlay overlay-sm">
                <img src="<?= base_url(); ?>/assets/img/shapes/square.png" alt="" class="shape square1" />
                <img src="<?= base_url(); ?>/assets/img/shapes/square.png" alt="" class="shape square2" />
                <img src="<?= base_url(); ?>/assets/img/shapes/circle.png" alt="" class="shape circle" />
                <img src="<?= base_url(); ?>/assets/img/shapes/half-circle.png" alt="" class="shape half-circle" />
                <img src="<?= base_url(); ?>/assets/img/shapes/wave.png" alt="" class="shape wave wave1" />
                <img src="<?= base_url(); ?>/assets/img/shapes/wave.png" alt="" class="shape wave wave2" />
                <img src="<?= base_url(); ?>/assets/img/shapes/x.png" alt="" class="shape xshape" />
                <img src="<?= base_url(); ?>/assets/img/shapes/triangle.png" alt="" class="shape triangle" />
            </div>

            <div class="container-custom">
                <div class="wrap">
                    <div class="record-circle">
                        <h2 class="number" data-num="235">0</h2>
                        <h4 class="sub-title">Projects</h4>
                    </div>
                </div>

                <div class="wrap">
                    <div class="record-circle active">
                        <h2 class="number" data-num="174">0</h2>
                        <h4 class="sub-title">Happy Clients</h4>
                    </div>
                </div>

                <div class="wrap">
                    <div class="record-circle">
                        <h2 class="number" data-num="892">0</h2>
                        <h4 class="sub-title">Work Hour</h4>
                    </div>
                </div>

                <div class="wrap">
                    <div class="record-circle">
                        <h2 class="number" data-num="368">0</h2>
                        <h4 class="sub-title">Awards</h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="container-custom">
                <div class="contact-box">
                    <div class="contact-info">
                        <h3 class="title">Get in touch</h3>
                        <p class="text">
                            aboutme
                        </p>
                        <div class="information-wrap">
                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <p class="info-text">alamat, tempat </p>
                            </div>

                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <p class="info-text">bagus@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form">
                        <h3 class="title">Contact me</h3>
                        <div class="row">
                            <input type="text" class="contact-input" placeholder="First Name" />
                            <input type="text" class="contact-input" placeholder="Last Name" />
                        </div>

                        <div class="row">
                            <input type="text" class="contact-input" placeholder="Phone" />
                            <input type="email" class="contact-input" placeholder="Email" />
                        </div>

                        <div class="row">
                            <textarea name="message" class="contact-input textarea" placeholder="Message"></textarea>
                        </div>
                        <a href="#" class="btn-custom">Send</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer-custom">
        <div class="container-custom">
            <div class="grid-4">
                <div class="grid-4-col footer-about">
                    <h3 class="title-sm">About</h3>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                        officiis quo officia quia?
                    </p>
                </div>

                <div class="grid-4-col footer-links">
                    <h3 class="title-sm">Links</h3>
                    <ul>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li>
                            <a href="#portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#testimonials">Testimonials</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="grid-4-col footer-links">
                    <h3 class="title-sm">Services</h3>
                    <ul>
                        <li>
                            <a href="#">Web Design</a>
                        </li>
                        <li>
                            <a href="#">Web Dev</a>
                        </li>
                        <li>
                            <a href="#">App Design</a>
                        </li>
                        <li>
                            <a href="#">Marketing</a>
                        </li>
                        <li>
                            <a href="#">UI Design</a>
                        </li>
                    </ul>
                </div>

                <div class="grid-4-col footer-newstletter">
                    <h3 class="title-sm">Subscribe</h3>
                    <p class="text">
                        Lorem ipsum dolor, sit amet ipsum dolor sit amet.
                    </p>
                    <div class="footer-input-wrap">
                        <input type="email" class="footer-input" placeholder="Email" />
                        <a href="#" class="input-arrow">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bottom-footer">
                <div class="copyright">
                    <p class="text">
                        Copyright&copy;2020 All rights reserved | Made by
                        <span>Team 27</span>
                    </p>
                </div>

                <div class="followme-wrap">
                    <div class="followme">
                        <h3>Follow me</h3>
                        <span class="footer-line"></span>
                        <div class="social-media">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <div class="back-btn-wrap">
                        <a href="#" class="back-btn">
                            <i class="fas fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/apphome.js"></script>
</body>

</html>