<!DOCTYPE>
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
  <!-- ! header end -->

  <!-- ! modal search start -->
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
  <!-- ! modal search end -->
  
    @include('home.category')

  <!-- ! product start -->
  

  <section id="product1" class="section-p1">
    <h2>View All Products</h2>

    <div class="pro-container">

        <div class="pro">
            <a href="\product">
                <img src="home/img/features/jBadass.jpg" alt="">
            </a>
            <div class="des">
                <a href="\product">
                    <span>Joey Bada$$</span>
                </a>
                <h5>1999</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>£32</h4>
                <a href="#"><i class="fal fa-shopping cart"></i></a>
            </div>
        </div>


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
                <a href= "\product3">
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
            <a href= "\product4">
                <img src="home/img/features/callMe.jpg" alt="">
            </a>
            <div class="des">
                <a href= "\product4">
                    <span>Tyler The Creator</span>
                </a>
                <h5>Call Me If you Get Lost</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>£76</h4>
                <a href="#"><i class="fal fa-shopping cart"></i></a>
            </div>
        </div>


        <div class="pro">
            <a href="\product5">
                <img src="home/img/features/IGOR.jpg" alt="">
            </a>
            <div class="des">
                <a href="\product5">
                    <span>Tyler The Creator</span>
                </a>
                <h5>IGOR</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>£64</h4>
                <a href="#"><i class="fal fa-shopping cart"></i></a>
            </div>
        </div>


        <div class="pro">
            <a href="\product6">
                <img src="home/img/features/1989.jpg" alt="">
            </a>
            <div class="des">
                \\<a href="\product6">
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
            <a href="\product8">
                <img src="home/img/features/StickSeason.jpg" alt="">
            
            <div class="des">
                <a href="\product8">
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
            <a href="\product9">
            <img src="home/img/features/newRadicals.jpg" alt="">
            <div class="des">
                <a href="\product9">
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
                <a href="\product10">
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
            <a href="\product11">
            <img src="home/img/features/DAMN.jpg" alt="">
            <div class="des">
                <a href="\product11">
                <span>Kendrick Lamar</span>
            </a>
                <h5>DAMN</h5>
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
            <a href="\product12">
            <img src="home/img/features/21.jpg" alt="">
            <div class="des">
                <a href="\product12">
                <span>21 Savage</span>
            </a>
                <h5>American Dream</h5>
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
            <a href="\product13">
            <img src="home/img/features/misseducation.jpg" alt="">
            <div class="des">
                <a href="\product13">
                <span>Lauryn Hill</span>
            </a>
                <h5>The Misseducation Of Lauryn Hill</h5>
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
            <a href="\product14">
            <img src="home/img/features/astro.jpg" alt="">
            <div class="des">
                <a href="\product14">
                <span>Travis Scott</span>
            </a>
                <h5>ASTROWORLD</h5>
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
            <a href="\product15">
            <img src="home/img/features/blond.jpg" alt="">
            <div class="des">
                <a href="\product15">
                <span>Frank Ocean</span>
            </a>
                <h5>Blonde</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>£200</h4>
                <a href="#"><i class="fal fa-shopping cart"></i></a>
            </div>
        </div>


        <div class="pro">
            <a href="\product16">
            <img src="home/img/features/FOOD.jpg" alt="">
            <div class="des">
                <a href="\product16">
                <span>MF DOOM</span>
            </a>
                <h5>MM.. FOOD</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>£41</h4>
                <a href="#"><i class="fal fa-shopping cart"></i></a>
            </div>
        </div>


        <div class="pro">
            <a href="\product17">
            <img src="home/img/features/devine.jpg" alt="">
            <div class="des">
                <a href="\product17">
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
            <a href="\product18">
            <img src="home/img/features/twistedFantasy.jpg" alt="">
            <div class="des">
                <a href="\product18">
                <span>Kanye West</span>
            </a>
                <h5>My Dark Twisted Fantasy</h5>
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
            <a href="\product19">
            <img src="home/img/features/gemini.jpg" alt="">
            <div class="des">
                <a href="\product19">
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
            <a href="\product20">
            <img src="home/img/features/YE.jpg" alt="">
            <div class="des">
                <a href="\product20">
                <span>Kanye West</span>
            </a>
                <h5>YE [SIGNED]</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>£299</h4>
                <a href="#"><i class="fal fa-shopping cart"></i></a>
            </div>
        </div>


        <div class="pro">
            <a href="\product21">
            <img src="home/img/features/wiped.jpg" alt="">
            <div class="des">
                <a href="\product21">
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







  <!-- ! policy start -->
  <section class="policy">
    <div class="container">
      <ul class="policy-list">
        <li class="policy-item">
          <i class="bi bi-truck"></i>
          <div class="policy-texts">
            <strong>FREE DELIVERY</strong>
            <span>From $59.89</span>
          </div>
        </li>
        <li class="policy-item">
          <i class="bi bi-headset"></i>
          <div class="policy-texts">
            <strong>SUPPORT 24/7</strong>
            <span>Online 24 hours</span>
          </div>
        </li>
        <li class="policy-item">
          <i class="bi bi-arrow-clockwise"></i>
          <div class="policy-texts">
            <strong>30 DAYS RETURN</strong>
            <span>Simply return it within 30 days</span>
          </div>
        </li>
        <li class="policy-item">
          <i class="bi bi-credit-card"></i>
          <div class="policy-texts">
            <strong>PAYMENT METHOD</strong>
            <span>Secure Payment</span>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- ! policy end -->

  <!-- ! footer start -->
  @include('home.footer')
  <!-- ! footer end -->

  <!-- scripts start -->
  <script src="home/js/main.js" type="module"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script src="home/js/glide.js" type="module"></script>
  <!-- scripts end -->
</body>

<>