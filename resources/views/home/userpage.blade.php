<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- !bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="home/css/main.css" />
  <!-- !Glide.js Css CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css" />
  <title>E-Commerce | Home</title>
</head>

<body>
    
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
        <h2>New Season Sale</h2>
        <strong>40% OFF</strong>
        <span></span>
        <a href="/shop" class="btn btn-lg">
          SHOP NOW
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <section class="campaigns">
    <div class="container">
      <div class="campaigns-wrapper">
        <div class="campaign-item">
          <h3 class="campaign-title">
            Check out these <br />
            Classic Vinyl Deals<br />
            Today
          </h3>
          <p class="campaing-desc">
            Don't miss out on these incredible vinyl deals they are the best in the world!
          </p>
          <a href="/shop" class="btn btn-primary">
            View All
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
        <div class="campaign-item">
          <h3 class="campaign-title">
            Check out these <br />
            Modern Vinyl Deals<br />
            Today
          </h3>
          <p class="campaing-desc">
            Don't miss out on these incredible vinyl deals they are the best in the world!
          </p>
          <a href="/shop" class="btn btn-primary">
            View All
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
      <div class="campaigns-wrapper">
        <div class="campaign-item">
          <h3 class="campaign-title">
            Check out these <br />
            New Vinyl Deals<br />
            Today
          </h3>
          <p class="campaing-desc">
            Don't miss out on these incredible vinyl deals they are the best in the world!
          </p>
          <a href="/shop" class="btn btn-primary">
            View All
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
        <div class="campaign-item">
          <h3 class="campaign-title">
            Check out these <br />
            Expensive Vinyl Deals<br />
            Today
          </h3>
          <p class="campaing-desc">
            Don't miss out on these incredible vinyl deals they are the best in the world!
          </p>
          <a href="/shop" class="btn btn-primary">
            View All
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="policy">
    <div class="container">
      <ul class="policy-list">
        <li class="policy-item">
          <i class="bi bi-truck"></i>
          <div class="policy-texts">
            <strong>FREE DELIVERY</strong>
            <span>From £200,000</span>
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

  @include('home.footer')
  <!-- ! footer end -->

  <!-- scripts start -->
  <script src="home/js/main.js" type="module"></script>
  <script src="home/js/slider.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script src="home/js/glide.js" type="module"></script>
  <!-- scripts end -->

</body>

</html>