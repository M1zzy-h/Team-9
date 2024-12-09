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

 <section> 
    <div class="section-title">
        <h2>About Us</h2>
        <p>We are a group of vinyl enthuisasts who really love vinyls and you shoudl buy vinyls off us</p>
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

  <script src="js/main.js" type="module"></script>
  <script src="home/js/slider.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script src="home/js/glide.js" type="module"></script>
  
</body>

</html>