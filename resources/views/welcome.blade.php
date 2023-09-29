<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams"> 
    <title>Hot Salt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="82">
      <header id="home">
        <nav id="#navbar" class="navbar navbar-expand-lg position-fixed top-0 w-100 py-3">
          <div class="container">
            
            <a class="navbar-brand" href="/">HOT SALT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="/">home</a>
                <a class="nav-link" href="/about">about us</a>
                <a class="nav-link" href="/blog">products</a>
                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="nav-link">{{Auth::user()->name}}</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                    
                    
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <main>
        <section class="main-slider">
          <div class="hero-img">
            <div class="hero-bg"></div>
            <div class="container">
              <div class="hero-text">
                <div class="welcome-text"><span class ="big-text">WELCOME</span><span class="small-text">TO HOT SALT</span></div>
                <p>Your gateway to opulent living through state-of-the-art mansion automation services.</p>
            </div>
            </div>
            <a href="#about"><i class="fas fa-chevron-down"></i></a>
          </div>
        </section>
        <section id="about" class="aboutus">
            <div class="container">
              <div class="row">
                  <div class="right col-md-6">
                    <div class="text-right">
                      <p>A cutting-edge technology firm specializing in luxury mansion home automation solutions for the modern elite.</p>
                    </div>
                  </div>
                    <div class="left col-md-6">
                      <div class="text-left">
                        <h2 class="underscore">our values</h2>
                        <p class="sup-header">Your gateway to opulent living through state-of-the-art mansion automation services. </p>
                        <p class="">Setting new standards in opulent living, our company stands at the forefront of the luxury mansion home automation industry. With an unwavering commitment to combining technology and extravagance, we offer discerning homeowners a seamless fusion of comfort, convenience, and sophistication. Our bespoke solutions elevate mansions into smart, self-sustaining ecosystems, where lighting, climate, security, entertainment, and more are harmoniously orchestrated at the touch of a button or the sound of your voice. Each system is meticulously tailored to cater to your unique desires and preferences, ensuring that every moment within the walls of your mansion is an exquisite experience in modern living.</p>          
                      </div>
                      <a href="contact.html" class="main-button">Let’s work together</a>
                    </div>
                </div>
            </div>
            <div class="black-div"></div>
        </section>
        <section id="contact" class="social-media">
            <div class="container">
              <h2>WANT TO KNOW MORE ABOUT US?</h2>
                <a href=""><img src="{{ asset('storage/img/' .'facebook-footer.svg')}}" alt=""></a>
                <a href=""><img src="{{ asset('storage/img/' .'instagramm-footer.svg')}}" alt=""></a>
                <a href=""><img src="{{ asset('storage/img/' .'pinterest-footer.svg')}}" alt=""></a>
            </div>
        </section>
        <section class="new-articles">
          <div class="card-group">
            <div class="card bg-dark text-white">
              <img src="{{ asset('storage/img/' .'architecture-1857175_1920.jpg')}}" class="card-img" alt="...">
              <div class="card-img-overlay p-3">
                <div class="text-overlay">
                <p class="card-text text-uppercase">Most Popular</p>
                <h5 class="card-title text-uppercase">An architectural masterpiece merging modernity with nature's grace. </h5>
                <div class="line"></div>
                <div class="card-text autor-data d-flex pb-3">
                  <p class="post-autor text-uppercase">Posted by someone&nbsp;</p><p class="post-data text-uppercase">| 30 07 2021</p>
                </div>
                <a href="" class="card-button">Read article</a>
                </div>
              </div>
            </div>
            <div class="card bg-dark text-white">
              <img src="{{ asset('storage/img/' .'castle-1998435_1920.jpg')}}" class="card-img" alt="...">
              <div class="card-img-overlay p-3">
                <div class="text-overlay">
                  <p class="card-text text-uppercase">Most Popular</p>
                  <h5 class="card-title text-uppercase">An architectural masterpiece merging modernity with nature's grace. </h5>
                  <div class="line"></div>
                  <div class="card-text autor-data d-flex pb-3">
                    <p class="post-autor text-uppercase">Posted by someone&nbsp;</p><p class="post-data text-uppercase">| 30 07 2021</p>
                  </div>
                  <a href="" class="card-button">Read article</a>
                  </div>
              </div>
            </div>
            <div class="card bg-dark text-white">
              <img src="{{ asset('storage/img/' .'staircase-274614_1920.jpg')}}" class="card-img" alt="...">
              <div class="card-img-overlay p-3">
                <div class="text-overlay">
                  <p class="card-text text-uppercase">Most Popular</p>
                  <h5 class="card-title text-uppercase">An architectural masterpiece merging modernity with nature's grace. </h5>
                  <div class="line"></div>
                  <div class="card-text autor-data d-flex pb-3">
                    <p class="post-autor text-uppercase">Posted by someone&nbsp;</p><p class="post-data text-uppercase">| 30 07 2021</p>
                  </div>
                  <a href="" class="card-button">Read article</a>
                  </div>
              </div>
            </div>
          </div>
        </section>
        <section id="posts" class="recent-posts">
          <div class="container">
            <h2 class="underscore">RECENT POSTS</h2>
            <p class="sup-header">A breathtaking architectural marvel, seamlessly blending contemporary design with natural elements to redefine urban living. </p>
            <div class="posts-wrapper">
                <div class="post-item">
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by Besher</span><span><i class="far fa-calendar"></i> 30 07 2021</span>
                  </div>
                  <a href="single-post.html"  class="post-title">Sustainable Serenity: Eco-Friendly Urban Oasis</a>
                  <p class="post-content">This visionary architectural project redefines sustainable living in the heart of the city. With green rooftops, rainwater harvesting, and solar panels seamlessly integrated into its design, it's a harmonious blend of nature and urbanity, providing residents with a tranquil escape while reducing environmental impact.</p>
                  <div class="post-meta">
                    <span><i class="far fa-comment-alt"></i> 20 comments</span>
                  </div>
                </div>
                <div class="post-item">
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by Walid</span><span><i class="far fa-calendar"></i> 30 07 2021</span>
                  </div>
                  <a href="single-post.html"  class="post-title">Futuristic Skyline: The Tower of Tomorrow</a>
                  <p class="post-content">Behold the pinnacle of architectural innovation! This iconic skyscraper boasts a futuristic design, featuring cutting-edge materials and energy-efficient systems. It's set to become a symbol of the city's progress and a testament to the limitless possibilities of modern architecture.</p>
                  <div class="post-meta">
                    <span><i class="far fa-comment-alt"></i> 60 comments</span>
                  </div>
                </div>
                <div class="post-item">
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by Walid</span><span><i class="far fa-calendar"></i> 30 07 2021</span>
                  </div>           
                  <a href="single-post.html"  class="post-title">Historical Revival: Restoring Heritage, Building Dreams</a>
                  <p class="post-content">Witness the transformation of a historic landmark into a contemporary masterpiece. This project honors the past while embracing the future, meticulously preserving the building's heritage while infusing it with modern amenities and design elements, creating a timeless space for generations to come.</p>
                  <div class="post-meta">
                    <span><i class="far fa-comment-alt"></i> 20 comments</span>
                  </div>
                </div>
                <a href="/blog" class="main-button">View all posts</a>
            </div>          
          </div>
      </section>
        <section id="subscribe" class="subscribe">
          <div class="container">
            <h2>Subscribe & Don’t Miss Out</h2>
            <p class="">Unlock the world of awe-inspiring architecture – subscribe to our channel and embark on a journey of design and innovation today!</p>
            <form>
              <input type="email" class="email text-uppercase" id="exampleInputEmail1 aria-describedby="emailHelp" placeholder="Enter your email"><button type="submit" class="button-subscribe text-uppercase">subscribe</button>
            </form>
          </div>
      </section>
      </main>
      <footer class="text-center  text-uppercase py-5">
        <div class="footer-icons ">
            <a href="https://www.instagram.com/wdo01/"><img src="{{ asset('storage/img/' .'facebook-footer.svg')}}" alt=""></a>
          <a href="https://www.instagram.com/wdo01/"><img src="{{ asset('storage/img/' .'instagramm-footer.svg')}}" alt=""></a>
          <a href="https://www.instagram.com/wdo01/"><img src="{{ asset('storage/img/' .'pinterest-footer.svg')}}" alt=""></a>
        </div>
        <div class="copyright pt-4 text-muted text-center">
          <p>&copy; copyright 2023 | Created by <a href="https://www.instagram.com/wdo01/" title="Firmbee - Free Invoicing App" target="_blank">Walid & Besher</a> </p>
          <a class="nav-link" href="PrivacyPolicy.html">Privacy Policy</a>
          <!--
          This template is licenced under Attribution 3.0 (CC BY 3.0 PL),
          You are free to: Share and Adapt. You must give appropriate credit, you may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
          --> 
      </div>
      </footer>
      <div class="fb2022-copy"></div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
