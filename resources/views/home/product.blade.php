<!DOCTYPE html>
<html lang="en"  >

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce | Product</title>
    <!-- !bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('home/css/main.css') }}" />

</head>

<body>
    <!-- ! main-navigation header -->
    @include('home.header')
  <!--main-navigation header end -->

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

    <!-- product start -->
    <section class="single-product">
        <div class="container">
            <div class="single-product-wrapper">
          
                <div class="single-topbar">
                    <nav class="breadcrumb"></nav>
                </div>
               

             
                <div class="single-content">
                    <main class="site-main">
                        <div class="product-gallery">
                            <div class="single-image-wrapper">
                                <img src="{{ asset($product->image) }}" id="single-image" alt="{{ $product->title }}">
                            </div>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title">{{ $product->title }}</h2>
                            <h3>{{ $product->artist }}</h3>
                            <div class="product-review">
                                <ul class="product-star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                                <span>2 reviews</span>
                            </div>
                            <div class="product-price">
                                <h1>{{ $product->price }}</h1>


                                <div class="favContainer">
                                  <input type="checkbox" checked="checked" id="favorite" name="favorite-checkbox" value="favorite-button">
                                  <label for="favorite" class="container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
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

                            <div class="album-description">
                                   <p>{{ $product->description }}</p>
                                   </div>
                            
                            <form action="" class="variations-form">
                                <div class="variations">
                                    
                                    
                                 <div class="cart-button">
                                       
                                        <input type="number" value="1" min="1" id="quantity">
                                        <button class="btn btn-lg btn-primary" id="add-to-cart" type="button" onclick="addToCart(mi)">Add to
                                            cart</button>
                                        </div>
                                        
                                        <p class="product-description">
                                            @foreach($product->details as $label => $value)
                                                {{ $label }} ‏ : ‎ {{ $value }}<br>
                                            @endforeach
                                        </p>
                                </div>
                            </form>
                           
                            </div>
                        </div>
                    </main>
                </div>

                <!-- product ending -->
               
            </div>
        </div>
    </section>
    @include('home.footer')
  <script src="{{ asset('home/js/main.js') }}" type="module"></script>
  <script src="{{ asset('home/js/cart.js') }}" type="module"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script src="{{ asset('home/js/glide.js') }}" type="module"></script>
  
</body>

</html>
