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
  <link rel="stylesheet" href="{{ asset('home/css/main.css') }}" />
  <title>E-Commerce | Jazz</title>
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
        <strong>Jazz</strong>
        <span></span>
        <a href="/shop" class="btn btn-lg">
          Back to main page
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>



  <section id="product1" class="section-p1">
    <div class="container">
      <h2 class="section-title">jazz</h2>
      <p class="section-description">Latest jazz Products</p>
      <div class="product-grid">
      @foreach($jazzProducts as $id => $product)
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


 <!-- ! footer start -->
 @include('home.footer')
<!-- ! footer end -->



  <script src="home/js/main.js" type="module"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script src="home/js/glide.js" type="module"></script>
</body>

</html>