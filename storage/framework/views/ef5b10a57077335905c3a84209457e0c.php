
<?php $__env->startSection('content'); ?>
<!-- Online Application Section -->
<div class="container mt-5">
      <h2 class="section-heading">ONLINE APPLICATION FOR ACADEMIC YEAR
        2024–2025</h2>
     

      <div class="row justify-content-center mt-4">
        <div class="col-12 col-md-auto">
          <a href="#board-container" class="btn btn-light mx-2">Admission
            Process</a>
        </div>
        <div class="col-12 col-md-auto">
          <a href="#documents" class="btn btn-light mx-2">Document List</a>
        </div>
        <div class="col-12 col-md-auto">
          <a href="#enquiry-form" class="btn btn-light mx-2">Enquiry Form</a>
        </div>
      </div>
    </div>

    <!-- Our Admission Process Section -->
    <div class="admission-process-section mt-5">
      <h3 style="color: #ffffff;">Our Admission Process</h3>
      <div class="process-wrapper">
        <a href="<?php echo e(route('/onlineprocesspage')); ?>" class="process-btn">Online Process
          &#x25BC;</a>
        <a href="<?php echo e(route('/visitingschoolpage')); ?>" class="process-btn ms-3">Visiting The
          School
          &#x25BC;</a>
      </div>
    </div>

    <div id="board-container" class="board-container">
      <!-- Book Image -->
      <img src="<?php echo e(('public/assets/images/book.png')); ?>" alt="Book" class="book">

      <!-- Bag Image -->
      <img src="<?php echo e(('public/assets/images/bag.png')); ?>" alt="Bag" class="bag">

      <!-- Pencil Image -->
      <img src="<?php echo e(('public/assets/images/pencil.png')); ?>" alt="Pencil" class="pencil">

      <!-- Board Section -->
      <div class="board-wrapper">
        <div class="board-text">
          <h2>Things To Remember</h2>
          <p>
            Admissions are on a first-come first-served basis and seats are
            limited.
            Admissions will only be confirmed once the necessary documents and
            the
            first term fees payment is made. Fees once paid will be strictly
            non-refundable.
          </p>
        </div>
      </div>

      <!-- Orange Bar Below the Board -->
      <div class="orange-bar"></div>
    </div>

    <section id="documents" class="document-list py-5">
      <div class="container text-center">
        <h2 class="mb-5 text-center" style="color: #0A64AA;">LIST DOCUMENTS</h2>
        <div class="row justify-content-center document-list">
          <!-- 9 Document Cards -->
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-wrapper">
              <div class="card-top">
                <div class="circle-number">1</div>
              </div>
              <div class="card-bottom">
                <span>Student Birth Certificate</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-wrapper">
              <div class="card-top">
                <div class="circle-number">2</div>
              </div>
              <div class="card-bottom">
                <span>Student’s Aadhaar Card</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-wrapper">
              <div class="card-top">
                <div class="circle-number">3</div>
              </div>
              <div class="card-bottom">
                <span>School Leaving Certificate</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-wrapper">
              <div class="card-top">
                <div class="circle-number">4</div>
              </div>
              <div class="card-bottom">
                <span>UDISE Number</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-wrapper">
              <div class="card-top">
                <div class="circle-number">5</div>
              </div>
              <div class="card-bottom">
                <span>Student Birth Certificate</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-wrapper">
              <div class="card-top">
                <div class="circle-number">6</div>
              </div>
              <div class="card-bottom">
                <span>Student's Previous/Current Class Report Card</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-wrapper">
              <div class="card-top">
                <div class="circle-number">7</div>
              </div>
              <div class="card-bottom">
                <span>Address Proof</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-wrapper">
              <div class="card-top">
                <div class="circle-number">8</div>
              </div>
              <div class="card-bottom">
                <span>Aadhaar Card of Any One Parent/Guardian</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-wrapper">
              <div class="card-top">
                <div class="circle-number">9</div>
              </div>
              <div class="card-bottom">
                <span>PAN Card of Any One Parent/Guardian</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="enquiry-form" class="enquiry-form-section py-5">
      <div class="container">
        <h2 class="text-center mb-5" style="color: #0A64AA;">ENQUIRY FORM</h2>
        <p class="text-center mb-4" style="color: #000">
          Complete The Form For More Information, And Our Team Will Contact You
          Soon.
        </p>
        <div class="enquiry-form-container mx-auto">
          <div class="form-heading text-white text-center py-2">
            Enquiry Form
          </div>
          <form class="row g-3 p-4">
            <div class="col-md-6">
              <input type="text" class="form-control enquiry " placeholder="Select State"
                required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control enquiry" placeholder="Select City"
                required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control enquiry"
                placeholder="Select School" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control enquiry"
                placeholder="Student First Name" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control enquiry"
                placeholder="Student Last Name" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control enquiry" placeholder="Standard"
                required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control enquiry" placeholder="Stream"
                required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control enquiry" placeholder="Email"
                required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control enquiry" placeholder="Mob.No"
                required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control enquiry"
                placeholder="Enter Captcha*" required>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('Front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NIT_School\resources\views/Front/pages/home/admission.blade.php ENDPATH**/ ?>