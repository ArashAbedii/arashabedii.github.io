<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arash Abedi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-FW588G2LK1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-FW588G2LK1');
        </script>
        
        <!--WELLCOME-->
        <section id="welcome">
            <div class="container-fluid padding-0 position-relative">
                <div id="carouselWelcome" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://ddlouadd.sirv.com/Images/slide2-min.jpg" class="d-block slide-welcome-image img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://ddlouadd.sirv.com/Images/slide1-min.jpg" class="d-block slide-welcome-image img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://ddlouadd.sirv.com/Images/slide3-min.jpg" class="d-block slide-welcome-image img-fluid" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselWelcome" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselWelcome" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!--NAVBAR -->
        <section>
            <div class="my-nav">
                <nav class="navbar navbar-expand-lg navbar-light my-navbar-color my-sticky">
                    <div class="container py-2">
                        <button class="navbar-toggler my-navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars my-navbar-toggler-icon"></i></span>
                        </button>

                        <div class="menu"><p>Menu</p></div>

                        <div class="collapse navbar-collapse my-navbar-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 my-navbar-ul-items-center">
                                <li class="nav-item">
                                    <a class="my-nav-link" aria-current="page" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="my-nav-link" href="#about">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="my-nav-link" href="#skill">SKILLS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="my-nav-link" href="#portfolio">PORTFOLIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="my-nav-link" href="#contact">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </nav>
            </div>
        </section>

        <!--MY PICTURE AND RESUME FILE -->
        <section id="about">
            <div class="container-fluid my-card-profile-background">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 my-card-profile-background">
                        <div class="card">
                            <img class="card-img-top image-circle rounded-circle" src="https://i.ibb.co/WVYKvhZ/me.jpg" alt="Card image cap">
                            <div class="card-body my-card-profile">
                                <p class="card-text">Arash Abedi</p>
                                <p class="card-text">Software Engineer</p>
                            </div>
                            <a href="files/ArashAbedi-BackEnd.pdf" download class="my-card-btn-link">DOWNLOAD RESUME</a>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </section>

        <!--ABOUT ME -->
        <section >
            <div class="container-fluid about-me">
                <h1>ABOUT ME</h1>
                <div class="row">
                    
                    <div class="col-md-9 my-0 mx-auto pt-5">
                        <p>My name is Arash Abedi. I'm from iran and I'm 23 years old.</p>
                        <p>I'm studying computer engineering at AZAD UNIVERSITY in Qaemshahr (2018-present).</p>
                        <p>I started programming since 2017.I worked on many different projects. My main skill is back-end but I can work on front-end too.</p>
                        <p>I love programming and learning new things.</p>
                    </div>
                    
                </div>
                
            </div>
        </section>

        <!--SKILL-->
        <section id="skill">
            <div class="container-fluid my-skill-container">
                <div class="container">
                <div class="row">
                    <h1 class="fw-bold fs-3 my-4">TECHNICAL SKILLS</h1>
                    <div class="col-md-4 col-sm-12 py-4">
                        <div class="row">
                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>PHP</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="5" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>MYSQL</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="4" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>SQLITE3</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="4" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>
   
                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>LARAVEL</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="3" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>TELEGRAM BOT</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="5" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>REST API</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="4" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>BOOTSTRAP</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="4" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>HTML</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="3" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>CSS</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="3" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>JAVASCRIPT</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="2" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>PYTHON</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="3" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>C++</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="3" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>jQuery</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="3" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-12 col-8 my-skill-star-row">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <span>GIT & GITHUB</span>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div id="dataReadonlyReview" data-rating-stars="5" data-rating-readonly="true" data-rating-value="4" data-rating-input="#dataReadonlyInput" rating="true" style="color: rgb(252, 215, 3);">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>  
                            </div>


                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="about-me-text">
                            <p>I have good expertise on back-end</p>
                            <p>For every project I try work with best methods and programing languages.my main programming language on back-end is PHP and I created many web applications by PHP and MYSQL. but sometimes I use PYTHON for special works</p>
                            <p>I have good expertise on database design too. I worked on different databases like: MYSQL, SQLITE3, REDIS</p>
                            <p>To work on front end, I usually use bootstrap. So I have good Experience in bootstrap too</p>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </section>

        <!--PORTFOLIO-->
        <section id="portfolio">
            <div class="container my-portfolio-container">
                <div class="row text-center px-1">
                    <h1 class="fs-2 fw-bold">PORTFOLIO</h1>
                    <div class="col-md-4 col-sm-12 col-12">
                        <img class="myImg" id="myImg" src="https://ddlouadd.sirv.com/Images/spotify-clone.jpg" alt="Spotify Clone" style="width:100%;max-width:300px">
                        <p>Stream Music Website (Spotify Clone)</p>
                    </div>

                    <div class="col-md-4 col-sm-12 col-12">
                        <img class="myImg" id="myImg" src="https://ddlouadd.sirv.com/Images/photo_2021-04-01_13-29-26.jpg" alt="CMS" style="width:100%;max-width:300px">
                        <p>Content Management System (CMS)</p>
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-12">
                        <img class="myImg" src="https://ddlouadd.sirv.com/Images/jpmusic.jpg" alt="Music Stream Telegram Bot" style="width:100%;max-width:300px">
                        <p>Music Stream Telegram Bot<br><a href="https://t.me/jpmusicbot?start"><small>open bot</small></a></p>
                        
                    </div>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div>
                </div>
            </div>
        </section>

        <!--FOOTER-->
        <footer id="contact">
            <div class="container-fluid">
                <div class="my-contact">
                    <h1><a href="mailto: arashabedi998@gmail.com">SEND ME MESSAGE</a></h1>
                    <p class="my-copyright">&copy; 2021 arashabedi.com. All Rights Reserved.</p>
                    <div class="my-contact-icons-row">
                        <ul>
                            <li><a href="https://github.com/arashabedii" target="_blank"><i class="fab fa-github-square github"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/arashabedi98" target="_blank"><i class="fab fa-linkedin linkedin"></i></a></li>
                            <li><a href="https://instagram.com/arash_abedi98" target="_blank"><i class="fab fa-instagram instagram"></i></a></li>
                            <li><a href="mailto: devabedi78@gmail.com"><i class="fas fa-envelope email"></i></a></li>
                        </ul>
                        
                        
                    </div>
                    
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/rating.js"></script>
        <script src="js/app.js"></script>
        
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            //var img = document.getElementById("myImg")
            //console.log(img);
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            $('.myImg').on('click',function(){
                modal.style.display = "block";
                modal.style.zIndex="100";
                modalImg.src = this.src;
                modalImg.style.zIndex="150";
                captionText.innerHTML = this.alt;
            } );

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = "none";
            }

        </script>
    </body>
</html>