<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams"> 
    <title>Clear blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="82">
      <header id="home">
        <nav id="#navbar" class="navbar dark dark navbar-expand-lg position-fixed top-0 w-100 py-2">
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
                <a class="nav-link" href="/contact">contact</a>
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
        </nav>
    </header>
    <main>
        <div class="container">
        <div class="row mainmargin">
            <div class="blog col-md-8">
                <div class="all-posts">
                    @foreach ($products as $product)
                    <div class="post-item">
                        <div class="post-img"><img src="{{ asset('storage/' . $product->path)}}" class="card-img" alt="..."></div>
                        <div class="post-main-info">
                        <p class="post-title">{{$product->name}}</p>
                        <div class="post-meta">
                            <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum beatae pariatur sequi vitae quia velit? Facere maxime delectus cum voluptas unde accusantium rerum ullam rem asperiores. Alias, omnis quidem....</p>
                        <a href="/single" class="main-button">Read More</a>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            
                <nav aria-label="blog navigation">
                    <ul class="pagination">
                    <li class="page-item ">
                        <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                        </a>
                    </li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar col-md-4">
                <div class="input-group">
                    <div class="form-outline">
                    <input id="search-input" type="search" id="form1" class="form-control" placeholder="search" />
                    </div>
                    <button id="search-button" type="button" class="btn dark">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="recent-posts pt-5">
                    <h4 class="mb-3">RECENT POSTS</h4>
                    <div class="post-item">
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
                    <a class="main-button">View all posts</a>
                    <div class="popular pt-5">
                    <h4 class="mb-3">READ MOST POPULAR ARTICLES</h4>
                    <div class="card bg-dark text-white">
                        <img src="{{ asset('storage/img/' .'architecture-1857175_1920.jpg')}}" class="card-img" alt="...">
                        <div class="card-img-overlay p-3">
                        <div class="text-overlay">
                        <h5 class="card-title text-uppercase">Lorem, ipsum dolor sit amet consectetur </h5>
                        <div class="line"></div>
                        <div class="card-text article-meta">
                            <span><i class="far fa-user"></i> Posted by someone </span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 300 comments</span>
                        </div>
                        <button class="card-button">Read article</button>
                        </div>
                        </div>
                    </div>
                    <div class="card bg-dark text-white">
                    <img src="{{ asset('storage/img/' .'castle-1998435_1920.jpg')}}" class="card-img" alt="...">
                    <div class="card-img-overlay p-3">
                      <div class="text-overlay">
                      <h5 class="card-title text-uppercase">Lorem, ipsum dolor sit amet consectetur </h5>
                      <div class="line"></div>
                      <div class="card-text article-meta">
                        <span><i class="far fa-user"></i> Posted by someone </span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 300 comments</span>
                      </div>
                      <button class="card-button">Read article</button>
                      </div>
                    </div>
                  </div>
                  <div class="card bg-dark text-white">
                    <img src="{{ asset('storage/img/' .'staircase-274614_1920.jpg')}}" class="card-img" alt="...">
                    <div class="card-img-overlay p-3">
                      <div class="text-overlay">
                      <h5 class="card-title text-uppercase">Lorem, ipsum dolor sit amet consectetur </h5>
                      <div class="line"></div>
                      <div class="card-text article-meta">
                        <span><i class="far fa-user"></i> Posted by someone </span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 300 comments</span>
                      </div>
                      <button class="card-button">Read article</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </div>    
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
      <div class="fb2022-copy">Fbee 2022 copyright</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      <script src="./js/script.js"></script>
</body>
</html>
