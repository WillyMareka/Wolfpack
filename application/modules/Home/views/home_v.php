<?php $assets_url = $this->config->item('assets_url'); ?>

<!-- Nav Section -->
    <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div>
                <video autoplay muted loop id="myVideo">
                <!-- <video width="320" height="240" controls> -->
                  <source src="<?= @$assets_url; ?>videos/avengers.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
            </div>
            <div class="videocontent">
                <div class="col-lg-10 align-self-end">
                  <h1 class="text-uppercase text-white font-weight-bold">Thoughts into a Reality</h1>
                  <hr class="divider my-4">
                </div>
                <div class="col-lg-8 align-self-baseline">
                  <p class="text-white-75 font-weight-light mb-5">Services the make your imaginations into a reality. You are only limited by your mind</p>
                  <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Contact Us</a>
                </div>
            </div>
            
          </div>
        </div>
    </header>
<!-- End Nav Section -->

<!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">From pre production to post production and credits, we do it all. No strings attached!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started with us!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">At Your Service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2">3D Animation</h3>
            <p class="text-muted mb-0">3D modeling, Texturing, Rigging and Animating ideas</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2">2D Animation</h3>
            <p class="text-muted mb-0">Drawing characters and environments and bringing them to life</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Motion Graphics</h3>
            <p class="text-muted mb-0">Movement of elements to add some excitement to your information</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Digital Illustrations</h3>
            <p class="text-muted mb-0">Produce beautiful elements and illstrations to stunning displays</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= @$assets_url; ?>img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="<?= @$assets_url; ?>img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= @$assets_url; ?>img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="<?= @$assets_url; ?>img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= @$assets_url; ?>img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="<?= @$assets_url; ?>img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= @$assets_url; ?>img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="<?= @$assets_url; ?>img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= @$assets_url; ?>img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="<?= @$assets_url; ?>img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= @$assets_url; ?>img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="<?= @$assets_url; ?>img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Our Clients</h2>
      <!-- <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a> -->
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+254 (740) 011-1422</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:eddy@wolfpackstudios.org">contact@wolfpackstudios.org</a>
        </div>
      </div>
    </div>
  </section>