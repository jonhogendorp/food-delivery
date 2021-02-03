@extends('layout')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-8">
        <h1>Welcome to <span>Restaurantly</span></h1>
        <h2>Delivering great food for more than 18 years!</h2>

        <div class="btns">
          <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
          <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
        </div>
      </div>
      <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
        <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
      </div>

    </div>
  </div>
</section><!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="/img/about.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Why Us</h2>
        <p>Why Choose Our Restaurant</p>
      </div>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <span>01</span>
            <h4>Lorem Ipsum</h4>
            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="200">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Menu</h2>
        <p>Check Our Tasty Menu</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-starters">Starters</li>
            <li data-filter=".filter-salads">Salads</li>
            <li data-filter=".filter-specialty">Specialty</li>
          </ul>
        </div>
      </div>

      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6 menu-item filter-starters">
          <img src="/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Lobster Bisque</a><span>$5.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="/img/menu/bread-barrel.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Bread Barrel</a><span>$6.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="/img/menu/cake.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Crab Cake</a><span>$7.95</span>
          </div>
          <div class="menu-ingredients">
            A delicate crab cake served on a toasted roll with lettuce and tartar sauce
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="/img/menu/caesar.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Caesar Selections</a><span>$8.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Tuscan Grilled</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
            Grilled chicken with provolone, artichoke hearts, and roasted red pesto
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="/img/menu/mozzarella.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Mozzarella Stick</a><span>$4.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="/img/menu/greek-salad.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Greek Salad</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach, crisp romaine, tomatoes, and Greek olives
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="/img/menu/spinach-salad.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Spinach Salad</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="/img/menu/lobster-roll.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Lobster Roll</a><span>$12.95</span>
          </div>
          <div class="menu-ingredients">
            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Menu Section -->
@endsection
