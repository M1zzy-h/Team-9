<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- !bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <!-- !Glide.js Css CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css" />
  <link rel="stylesheet" href="home/css/main.css" />
  <title>E-Commerce | Home</title>
</head>

<body>
  <!-- ! header start -->
  @include('home.header')


  <div class="modal-search">
    <div class="modal-wrapper">
      <h3 class="modal-title">Search for products</h3>
      <p class="modal-text">
        Start typing to see products you are looking for.
      </p>
      <div class="search">
        <input type="text" placeholder="Search a product" />
        <button><i class="bi bi-search"></i></button>
      </div>
      </form>
      <div class="search-result">
        <div class="search-heading">
          <h3>RESULT FROM PRODUCT</h3>
        </div>
        <div class="results">

        </div>
      </div>
      <i class="bi bi-x-circle" id="close-modal-search"></i>
    </div>
  </div>




  <section class="campaign-single">
    <div class="container">
      <div class="campaign-wrapper">
        <h2>Category</h2>
        <strong>Rock</strong>
        <span></span>
        <a href="/shop" class="btn btn-lg">
          Back to main page
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>



 
  <section id="product1" class="section-p1">


    <div class="pro-container">

    
            <div class="pro">
                <a href="\product2">
                    <img src="home/img/features/rumours.jpg" alt="">
                </a>
                <div class="des">
                    <a href= "\product2">
                        <span>Fleetwood Mac</span>
                    </a>
                    <h5>Rumours</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£56</h4>
                    <a href="#"><i class="fal fa-shopping cart"></i></a>
                </div>
            </div>
    
    
    
    
    
     
    
          
    
            <div class="pro">
                <a href="\product7">
                    <img src="home/img/features/EverybodyIs.jpg" alt="">
                </a>
                <div class="des">
                    <a href="\product7">
                        <span>The Cranberries</span>
                    </a>
                    <h5>Everybody else is doing it, so why can't we</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£60</h4>
                    <a href="#"><i class="fal fa-shopping cart"></i></a>
                </div>
            </div>
    
    
            
            <div class="pro">
                <a href="\product9">
                <img src="home/img/features/newRadicals.jpg" alt="">
                <div class="des">
                    <span>New Radicals</span>
                </a>
                    <h5>Maybe You've Been Brainwashed Too</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£70</h4>
                    <a href="#"><i class="fal fa-shopping cart"></i></a>
                </div>
            </div>
    
    
            <div class="pro">
                <a href="\product10">
                    <img src="home/img/features/romance.jpg" alt="">
                <div class="des">
                    <span>Fontaines D.C.</span>
                </a>
                    <h5>Romance</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£35</h4>
                    <a href="#"><i class="fal fa-shopping cart"></i></a>
                </div>
            </div>
    
    
    

    
            <div class="pro">
                <a href="\product21">
                <img src="home/img/features/wiped.jpg" alt="">
                <div class="des">
                    <span>The Neighbourhood</span>
                </a>
                    <h5>Wiped Out!</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£20</h4>
                    <a href="#"><i class="fal fa-shopping cart"></i></a>
                </div>
            </div>
        </div>
</section>






 <!-- ! footer start -->
 @include('home.footer')
<!-- ! footer end -->



  <script src="home/js/main.js" type="module"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script src="home/js/glide.js" type="module"></script>
</body>

</html>