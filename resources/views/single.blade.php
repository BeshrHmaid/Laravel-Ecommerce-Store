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
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="82">
      <header id="home">
        <nav id="#navbar" class="navbar dark dark navbar-expand-lg position-fixed top-0 w-100 py-2">
          <div class="container">
            <a class="navbar-brand" href="index.html"><img src="img/logo-blog.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">home</a>
                <a class="nav-link" href="/about">about</a>
                <a class="nav-link" href="/contact">contact</a>
                <a class="nav-link" href="/blog">Blog</a>
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
            <div class="single-post col-md-8">
              <h2 class="underscore">Lorem, ipsum dolor sit amet consectetur elit. Reprehenderit, nostrum.</h2>
              <div class="post-meta">
                <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
              </div>
              <img src="{{ asset('storage/img/' .'castle-1998435_1920.jpg')}}" alt="">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est corrupti obcaecati harum iusto aliquid fugiat fuga, dolore libero, sapiente a cum dicta alias neque! Libero laboriosam voluptatem illum distinctio, aperiam odio? Doloribus corrupti iusto, vel molestias nihil eligendi itaque rem non quisquam dolor vitae quaerat quis quod nesciunt optio ab voluptatibus tempore dolorem deleniti! Natus explicabo placeat soluta beatae maiores ullam eligendi, architecto rerum magnam rem? Quidem, doloremque vitae incidunt praesentium iusto molestias corporis eius fugit doloribus blanditiis provident ipsam! Beatae tempore molestias nobis natus sequi nostrum! Corporis, natus veritatis, consequuntur deleniti sapiente beatae quam perspiciatis repellat nemo cum qui, odio aspernatur! Culpa minima doloribus exercitationem ipsa aut perspiciatis eveniet, fugit natus expedita similique distinctio inventore ut facere aliquid molestias optio saepe numquam assumenda animi consequatur sequi? Eveniet nesciunt iusto praesentium eum ea in aspernatur aliquam!</p>
              <figure class="quote text-end">
                <blockquote class="blockquote">
                  <p>A well-known quote, contained in a blockquote element.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
              </figure>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo delectus nulla optio dolor repellat, at voluptate placeat, eos reprehenderit necessitatibus minus sunt eius officia eum dolorum voluptates totam maiores ex quo alias dicta molestias quis reiciendis fuga. Repellat vel quibusdam beatae, molestiae, recusandae et vitae pariatur molestias totam repellendus iusto?</p>
              <h4>Lorem ipsum, dolor sit amet consectetur adipisicing.</h4>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat ipsa vitae reiciendis eius asperiores totam doloremque, labore perspiciatis exercitationem maxime temporibus fugiat porro adipisci maiores a sint, dolores tenetur itaque suscipit. Voluptates voluptatum debitis maiores eum reprehenderit architecto commodi provident, dignissimos earum quisquam ea dolore iste perspiciatis odit natus nisi?</p>
              <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit:</h5>
              <ul class="list-in-text">
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing. </li>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, ratione.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet consectetur.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
              </ul>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolores sapiente quaerat at voluptas. Natus at porro quasi ab, ratione rerum dolores vero dolore consectetur autem sed earum qui aliquid!</p>
              <div class="share">
                <a class="main-button" href=""><i class="fab fa-facebook-f"></i> FACEBOOK</a>
                <a class="main-button" href=""> <i class="fab fa-google-plus-g"></i> GOOGLE+</a>
                <a class="main-button" href=""><i class="fab fa-twitter"></i> TWITTER</a>
                <a class="main-button" href=""><i class="fab fa-linkedin-in"></i> LINKEDIN</a>
                <a class="main-button" href=""><i class="fab fa-pinterest-p"></i> PINTEREST</a>
              </div>
              <div class="navigation">
                <a class="prew"><i class="fas fa-chevron-left"></i> PREVIOUS</a>
                <a class="next">NEXT <i class="fas fa-chevron-right"></i></a>
              </div>
              <div class="line"></div>
              <form id="commentForm">
                <!-- Message input -->
                <div class="mb-3">
                  <label class="form-label" for="comment">Leave a Comment</label>
                  <textarea class="form-control" id="comment" type="text" placeholder="" style="height: 10rem;" data-sb-validations="required"></textarea>
                  <div class="invalid-feedback" data-sb-feedback="message:required">Comment is required.</div>
                </div>
                <!-- Name input -->
                <div class="mb-3">
                  <input class="form-control" id="name" type="text" placeholder="Name *" data-sb-validations="required" />
                  <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>
                <!-- Email address input -->
                <div class="mb-3">
                  <input class="form-control" id="emailAddress" type="email*" placeholder="Email Address *" data-sb-validations="required, email" />
                  <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                  <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                </div>
                <!-- Form submissions success message -->
                <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center mb-3">Form submission successful!</div>
                </div>
                <!-- Form submissions error message -->
                <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Form submit button -->
                <div class="d-grid">
                  <button class="main-button" id="submitButton" type="submit">Post Comment</button>
                </div>
              </form>
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
                  <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                  </div>
                  <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                </div>
                <div class="post-item">
                  <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                  </div>
                  <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                </div>
                <div class="post-item">
                  <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                  </div>
                  <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                </div>
                <a class="main-button">View all posts</a>
                <div class="popular pt-5">
                  <h4 class="mb-3">READ MOST POPULAR ARTICLES</h4>
                  <div class="card bg-dark text-white">
                    <img src="img/architecture-1857175_1920.jpg" class="card-img" alt="...">
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
                    <img src="img/castle-1998435_1920.jpg" class="card-img" alt="...">
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
                    <img src="img/staircase-274614_1920.jpg" class="card-img" alt="...">
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
      <footer class="text-center text-uppercase py-5">
        <div class="footer-icons ">
          <a href=""><img src="img/facebook-footer.svg" alt=""></a>
          <a href=""><img src="img/instagramm-footer.svg" alt=""></a>
          <a href=""><img src="img/pinterest-footer.svg" alt=""></a>
        </div>
        <div class="copyright pt-4 text-muted text-center">
          <p>&copy; 2022 YOUR-DOMAIN | Created by <a href="https://firmbee.com/solutions/free-invoicing-app-billing-software/" title="Firmbee - Free Invoicing App" target="_blank">Firmbee.com</a> </p>
          <!--
          This template is licenced under Attribution 3.0 (CC BY 3.0 PL),
          You are free to: Share and Adapt. You must give appropriate credit, you may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
          --> 
      </div>
      </footer>
      <div class="fb2022-copy">Fbee 2022 copyright</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      <script src="js/script.js"></script>
</body>
</html>
