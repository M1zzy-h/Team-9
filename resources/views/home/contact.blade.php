<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- !bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="home/css/main.css" />
    <title>E-Commerce | Contact</title>
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

 

    <!-- ! contact start -->
    <sectione class="contact">
        <div class="contact-top">
        </div>
        <div class="contact-bottom">
            <div class="container">
                <div class="contact-texts">
                    <h2>Get In Touch</h2>
                    <p>If you have a query about your order or any of our products for that matter, don't hesitate to 
                        reach out and we'll get back to you ASAP.
                        Customer service is very important to us so whatever your problem may be we'll
                        do our absolute best to help.
                    </p>
                </div>
                <div class="contact-elements">
                    <form class="contact-form">
                        <div>
                            <label for="">Your Name
                                <span>*</span>
                            </label>
                            <input type="text" required>
                        </div>
                        <div>
                            <label for="">Your Email Address
                                <span>*</span>
                            </label>
                            <input type="email" required>
                        </div>
                        <div>
                            <label for="">Subject
                                <span>*</span>
                            </label>
                            <input type="text" required>
                        </div>
                        <div>
                            <label for="">Your Message
                                <span>*</span>
                            </label>
                            <textarea required></textarea>
                        </div>
                        <button class="btn btn-sm form-button   ">Send Message</button>
                    </form>
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <strong>Emerald Vinyl</strong>
                            <p class="contact-streets">263 Random Road In Birmingham</p>
                            <div class="contact-informations">
                                <a href="tel:+123456789">0121XXXXX</a>
                                <a href="mailto:abc@gmail.com">support@reallygreatvinylwebsite.com</a>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <strong>Opening Hours</strong>
                            <p class="contact-date">Monday - Friday : 9am - 5pm</p>
                            <p>Weekend Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </sectione>
    <!-- ! contact end -->

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
    <!-- scripts end -->
</body>

</html>