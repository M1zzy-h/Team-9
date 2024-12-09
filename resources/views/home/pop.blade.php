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
        <strong>Pop</strong>
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
        <a href= "\product3">
            <img src="home/img/features/bornTdie.jpg" alt="">
        </a>
        <div class="des">
            <a href= "product3">
                <span>Lana Del Rey</span>
            </a>
            <h5>Born To Die</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>£25</h4>
            <a href="#"><i class="fal fa-shopping cart"></i></a>
        </div>
    </div>


    <div class="pro">
        <a href="\product6">
            <img src="home/img/features/1989.jpg" alt="">
        </a>
        <div class="des">
            <a href="product6">
                <span>Taylor Swift</span>
            </a>
            <h5>1989</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>£19</h4>
            <a href="#"><i class="fal fa-shopping cart"></i></a>
        </div>
    </div>



    <div class="pro">
        <a href="\product8">
            <img src="home/img/features/StickSeason.jpg" alt="">
        
        <div class="des">
            <span>Noah Kahan</span>
        </a>
            <h5>Stick Season</h5>
        
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
        <a href="\product17">
        <img src="home/img/features/devine.jpg" alt="">
        <div class="des">
            <span>Mac Miller</span>
        </a>
            <h5>The Devine Femanine</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>£55</h4>
            <a href="#"><i class="fal fa-shopping cart"></i></a>
        </div>
    </div>



    <div class="pro">
        <a href="\product19">
        <img src="home/img/features/gemini.jpg" alt="">
        <div class="des">
            <span>Steve Lacy</span>
        </a>
            <h5>Gemini Rights</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>£30</h4>
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