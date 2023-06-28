

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title> Tour & Travel agency </title>

        <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


        <!----Font awesome cdn link---->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!---Custom Css file link--->

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <!-- Header  section starts-->
    <header>   

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>T</span>ravel</a>

        <nav class="navbar">
            <a href="index1.php">Home</a>
            <a href="Book.php">Book</a>
            <a href="packages.php">Packages</a>
            <a href="services.php">Services</a>
            <a href="gallery.php">Gallery</a>
            <a href="enquiry.php">Enquiry</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"><a href="logout.php"></a></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here.....">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

        
        
    </div>
    </header>     
    <!-- Header section ends-->


    
    
    <!-- login from container -->
    <div class="login-form-container">

        <i class='fas fa-times-circle' id="form-close"></i>    
        
        <form action="">
            
            <h3>Login</h3>
            <input type="email" class="box" placeholder="enter your email">
            <input type="password" class="box" placeholder="enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            
            <p>don't have and account?<a href="register.php">register now</a></p>
        </form>
    </div>

    <!-- Home Section Start-->
        <section class="home" id="home">

            <div class="content">
                <h3>adventure is worthwhile</h3>
                <p>discover new places with us,adventure awits</p>
                <a href="#" class="btn">discover more</a>
            </div>

            <div class="controls">
                <span class="vid-btn active" data-src="images/naturec.mp4"></span>
                <span class="vid-btn" data-src="images/naturea.mp4"></span>
                <span class="vid-btn" data-src="images/natureb.mp4"></span>
                <span class="vid-btn" data-src="images/nature.mp4"></span>
                <span class="vid-btn" data-src="images/natured.mp4"></span>
            </div>

            <div class="video-container">
                <video src="images/nature.mp4" id="video-slider" loop autoplay muted></video>
            </div>
        </section> 
    <!-- Home Section End-->

    
    <!-- Packages section starts-->
    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>                
        </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/img.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> mumbai</h3>
                    <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. 
                        A financial center, it's India's largest city.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">Rs-900 <span>Rs-1200</span></div>
                        <a href="Book.php" class="btn">book now </a>
                </div>
            </div>

            <div class="box">
                <img src="images/manali.webp" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> manali</h3>
                    <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. 
                        A financial center, it's India's largest city.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">Rs-900 <span>Rs-1200</span></div>
                        <a href="Book.php" class="btn">book now </a>
                </div>
            </div>

            <div class="box">
                <img src="images/agra.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Agra</h3>
                    <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. 
                        A financial center, it's India's largest city.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">Rs-900 <span>Rs-1200</span></div>
                        <a href="Book.php" class="btn">book now </a>
                </div>
            </div>

            <div class="box">
                <img src="images/kolkata.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> kolkata</h3>
                    <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. 
                        A financial center, it's India's largest city.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">Rs-900 <span>Rs-1200</span></div>
                        <a href="Book.php" class="btn">book now </a>
                </div>
            </div>

            <div class="box">
                <img src="images/goa.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> goa</h3>
                    <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. 
                        A financial center, it's India's largest city.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">Rs-900 <span>Rs-1200</span></div>
                        <a href="Book.php" class="btn">book now </a>
                </div>
            </div>

            <div class="box">
                <img src="images/ooty.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> ooty</h3>
                    <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. 
                        A financial center, it's India's largest city.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">Rs-900 <span>Rs-1200</span></div>
                        <a href="Book.php" class="btn">book now </a>
                </div>
            </div>

            <div class="box">
                <img src="images/img.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> mumbai</h3>
                    <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. 
                        A financial center, it's India's largest city.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">Rs-900 <span>Rs-1200</span></div>
                        <a href="Book.php" class="btn">book now </a>
                </div>
            </div>

            <div class="box">
                <img src="images/manali.webp" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> manali</h3>
                    <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. 
                        A financial center, it's India's largest city.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">Rs-900 <span>Rs-1200</span></div>
                        <a href="Book.php" class="btn">book now </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Packages section ends-->

    <!--Services section starts-->
        <section class="services" id="services">
            <h1 class="heading">
                <span>s</span>
                <span>e</span>
                <span>r</span>
                <span>v</span>
                <span>i</span>
                <span>c</span>
                <span>e</span>
                <span>s</span>                
            </h1>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-hotel"></i>
                    <h3>Affordable hotels</h3>
                    <p>A hotel is a commercial establishment that provides 
                    lodging, meals, and other services to guests, travelers, and tourists. </p>
                </div>

                <div class="box">
                    <i class="fas fa-utensils"></i>
                    <h3>food and drinks</h3>
                    <p>A hotel is a commercial establishment that provides 
                    lodging, meals, and other services to guests, travelers, and tourists. </p>
                </div>

                <div class="box">
                    <i class="fas fa-bullhorn"></i>
                    <h3>safety guide</h3>
                    <p>A hotel is a commercial establishment that provides 
                    lodging, meals, and other services to guests, travelers, and tourists. </p>
                </div>

                <div class="box">
                    <i class="fas fa-globe-asia"></i>
                    <h3>around the world</h3>
                    <p>A hotel is a commercial establishment that provides 
                    lodging, meals, and other services to guests, travelers, and tourists. </p>
                </div>

                <div class="box">  
                    <i class="fas fa-plane"></i>
                    <h3>fatest travel</h3>
                    <p>A hotel is a commercial establishment that provides 
                    lodging, meals, and other services to guests, travelers, and tourists. </p>
                </div>

                <div class="box">
                    <i class="fas fa-hiking"></i>
                    <h3>adventures</h3>
                    <p>A hotel is a commercial establishment that provides 
                    lodging, meals, and other services to guests, travelers, and tourists. </p>
                </div>
            </div>
        </section>

    <!--Services section ends-->
    <!--gallery section starts-->
    <section class="gallery" id="gallery">
        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>                         
        </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/gallery1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery2.webp" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery3.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/gallery5.webp" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/gallery6.webp" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/gallery8.webp" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/gallery9.webp" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/gallery7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/gallery8.webp" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/gallery9.webp" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Geology lovers and avid Instagrammers alike will be drawn to the 
                        otherworldly hues of the "Rainbow Mountains."</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
        </div>
    </section>
    <!--gallery section ends-->    
    <!--reviews section starts-->
    <section class="review" id="review">
        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>                                    
        </h1>
        <div class="swiper-container review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box"><img src="images/profile.jpg" alt="">
                        <h3>Suresh jadhav</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/profile1.jpg" alt="">
                        <h3>geeta choudhari</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/profile2.jpg" alt="">
                        <h3>divya patil</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/profile3.jpg" alt="">
                        <h3>jitu sharma</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/profile4.jpg" alt="">
                        <h3>hritik patel</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/profile5.jpg" alt="">
                        <h3>jiya shetty</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--reviews section ends-->
    <!--Contact section starts-->
    <section class="contact" id="contact">
        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span> 
            <span>t</span>                                    
        </h1>
        <div class="row">
            <div class="image">
                <img src="images/imgt.jpg" alt="">
            </div>
            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>

                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>
        </div>
    </section>
    <!--Contact section starts-->

    <!--brand section-->
    <section class="brand-container">
        <div class=" swiper-container brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/little.png" alt=""></div>
                <div class="swiper-slide"><img src="images/amazon.png" alt=""></div>
                <div class="swiper-slide"><img src="images/clogo.png" alt=""></div>
                <div class="swiper-slide"><img src="images/freedom.png" alt=""></div>
                <div class="swiper-slide"><img src="images/freed.png" alt=""></div>
                <div class="swiper-slide"><img src="images/samsang.png" alt=""></div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--footer section-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>about us</h3>
                <p>Our excellent rapport of over two decades with the  Hotels, Car Rentals, Visa Providers has given us the confidence to do the best in times of crisis or emergencies and won us the trust of our clients. 
                    Passionate, Innovative, Integrity, Commitment and Teamwork are the core values of Focus Tours & Travels Pvt. Ltd.
                    DYNAMIC
                    PROFESSIONAL
                    .</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">India</a>
                <a href="#">USA</a>
                <a href="#">japan</a>
                <a href="#">france</a>
                <a href="#">sigapore</a>                
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">book</a>
                <a href="#">packages</a>
                <a href="#">services</a> 
                <a href="#">gallery</a>     
                <a href="#">review</a> 
                <a href="#">contact</a>            
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkdin</a>                             
            </div>
        </div>
        
    </section>

        <!---Custom file js link--->
        <script src="js/script.js"></script>
            
    </body>
</html>
