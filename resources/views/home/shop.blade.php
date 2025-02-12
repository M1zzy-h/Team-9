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
  <title>E-Commerce | Shop</title>
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
  

  <section class="shop-section">
    <div class="container">
      <h2 class="section-title">Featured Products</h2>
      <p class="section-description">New Modern Design</p>
      
      <div class="product-grid">
        @foreach($allProducts as $id => $product)
          <div class="product-card" onclick="window.location.href='{{ url('product/' . $id) }}';">
            <div class="product-image">
              <img src="{{ asset($product['image']) }}" alt="{{ $product['title'] }}">
            </div>
            <div class="product-details">
              <h3 class="artist-name">{{ $product['artist'] }}</h3>
              <h4 class="album-title">{{ $product['title'] }}</h4>
              <div class="price">{{ $product['price'] }}</div>
            </div>
          </div>
        @endforeach
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

</html>