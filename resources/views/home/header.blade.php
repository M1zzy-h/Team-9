
  <!--header-->
  <header>


    <div class="header-row">
      <div class="container">
        <div class="header-wrapper">
          <div class="header-mobile">
            <i class="bi bi-list" id="btn-menu"></i>
          </div>
          <div class="header-left">
          <a href="#"><img src="{{ asset('home/img/logo.png') }}" class="logo" alt=""></a>
          </div>
          <div class="header-center" id="sidebar">
            <nav class="navigation">
              <ul class="menu-list">
                
                
                <li class="menu-list-item">
                  <a href="{{ route('index') }}" class="menu-link">Home
                  </a>
                </li>
                <li class="menu-list-item">
                  <a href="{{ route('shop') }}" class="menu-link">Shop
                  </a>
                </li>
                <li class="menu-list-item">
                  <a href="{{ route('contact') }}" class="menu-link">Contact</a>
                </li>
              </ul>
            </nav>
            <i class="bi-x-circle" id="close-sidebar"></i>
          </div>
          <div class="header-right">
            <div class="header-right-links">
              <button class="theme-toggle" id="theme-toggle">
                  <i class="bi bi-sun"></i>
              </button>
              <button class="search-button">
                <i class="bi bi-search"></i>
              </button>
              <div class="header-cart">
                <a href="/cart" class="header-cart-link">
                  <i class="bi bi-bag"></i>
                  <span class="header-cart-count">0</span>
                </a>
              </div>
              @if (Route::has('login'))
                            
                                @auth
                                
                                <x-app-layout>
                              </x-app-layout>
                                 

                                @else
                                
                                <a href="{{ route('login') }}" class="">
                                  login</a>
                                
                                   
                                
                                <a href="{{ route('register') }}" class="">
                                  register</a>
                                
                                @endauth
                        @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </header>

  