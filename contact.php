<?php require('toplayer.php'); ?>

<!-- CONTENT
    ================================================== -->
    <section>
      
      <!-- Content -->
      <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-between no-gutters min-vh-100">
          <div class="col-12 col-md-5 align-self-stretch">

            <!-- Image (mobile) -->
            <img src="assets/img/photos/photo-5.jpg" class="d-md-none img-cover" alt="...">

            <!-- Image -->
            <div class="d-none d-md-block vw-50 h-100 float-right bg-cover" style="background-image: url(assets/img/covers/cover-10.jpg);"></div>

          </div>
          <div class="col-12 col-md-6 py-8 py-md-11">
            
            <!-- Heading -->
            <h2 class="font-weight-bold text-center mb-2">
              Contact us for anything.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-center text-muted mb-0">
              Our goal is to be as helpful as possible. 
              <br>
              Phone: 08033090352
            </p>

            <!-- Divider -->
            <hr class="hr-sm my-6 my-md-8 border-gray-300">

            <!-- Form -->
            <form>
              <div class="form-group mb-5">
                
                <!-- Label -->
                <label for="contactName">
                  Full name
                </label>

                <!-- Input -->
                <input type="text" class="form-control" id="contactName" placeholder="Full name">

              </div>
              <div class="form-group mb-5">
                
                <!-- Label -->
                <label for="contactEmail">
                  Email
                </label>

                <!-- Input -->
                <input type="email" class="form-control" id="contactEmail" placeholder="hello@domain.com">

              </div>
              <div class="form-group mb-5 d-none">
                
                <!-- Label -->
                <label for="contactMessage">
                  What can we help you with?
                </label>

                <!-- Input -->
                <textarea class="form-control" id="contactMessage" rows="5" placeholder="Tell us what we can help you with!"></textarea>

              </div>
              <div class="form-group mb-0">
                
                <!-- Submit -->
                <a href="#!" class="btn btn-block btn-primary lift">
                  Send message
                </a>

              </div>
            </form>

          </div>
        </div> <!-- / .row -->
      </div>
    </section>
<br>
<?php require('bottomlayer.php'); ?>