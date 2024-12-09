<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce | Product</title>
    <!-- !bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="home/css/main.css" />

</head>

<body>
     <!-- ! main-navigation header -->
    @include('home.header')
  <!--main-navigation header end -->

    <!-- product start -->
    <section class="single-product">
        <div class="container">
            <div class="single-product-wrapper">
               
                <div class="single-topbar">
                    <nav class="breadcrumb"></nav>
                </div>

                <div class="single-content">
                    <main class="site-main">
                        <div class="product-gallery ">
                            <div class="single-image-wrapper">
                                <img src="home\img\product images/wipedout.jpg" id="single-image" alt="">
                            </div>
                          
                        </div>
                        <div class="product-info">
                            <h2 class="product-title">Wiped Out!</h2>
                            <h3>The Neighbourhood</h3>
                            <div class="product-review">
                                <ul class="product-star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                                <span>9 reviews</span>
                            </div>
                            <div class="product-price">
                                <h1>£20</h1>
                                <div class="favContainer">
                                  <input type="checkbox" checked = "checked" id = "favorite" name = "favorite-checkbox" value="favorite-button">
                                  <label for = "favorite" class = "container">
                                    <svg xmlns = "https://www.w3.org/2000/svg" width = "24" height = "24" viewbox = "0 0 24
                                    " fill = "none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-heart">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l7.78-7.78a5.5 5.5 0 0 0 0-7.78z"></path>
                                    
                                    <div class="action">
                                      <span class="option-1">Add to Favorites</span>
                                      <span class="option-2">Added to Favorites</span>
                                    </div>
                  
                                      </svg>
                                    </label>
                                </div>
                            </div>

                            <div class="album-description"
                                   <p>Second studio album by the American rock band, originally released in 2015. The album's lead single, 'R.I.P 2 My Youth' charted at number 22 on the US Bubbling Under Hot 100 Singles. In late 2020, the song 'Daddy Issues' received renewed attention after going viral on the video-sharing social platform, TikTok.</p>
                                   </div>

                            <form action="" class="variations-form">
                                <div class="variations">
                                    
                                    
                                 <div class="cart-button">
                                        <input type="number" value="1" min="1" id="quantity">
                                        <button class="btn btn-lg btn-primary" id="add-to-cart" type="button">Add to
                                            cart</button>
                                        </div>
                                        
                                        <p class="product-description">
                                            Product Dimensions ‏ : ‎ 31.42 x 31.5 x 0.91 cm; 603.28 g<br>
                                            Manufacturer ‏ : ‎ Columbia<br>
                                            Item model number ‏ : ‎ 8887 5151901<br>
                                            Label ‏ : ‎ Columbia<br>
                                            Number of discs ‏ : ‎ 2
                                        </p>
                                </div>
                            </form>
                            </div>
                        </div>
                    </main>
                </div>
                <!-- product end -->

  <script src = "home/js/cart.js"></script>
</body>

</html>
