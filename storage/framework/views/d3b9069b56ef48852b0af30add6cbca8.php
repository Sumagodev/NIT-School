
<?php $__env->startSection('content'); ?>
<div class="card mb-4 parents-container" style="border: none;">
            <div class="row g-0">
                <div class="col-md-12 col-lg-4">
                    <img src="<?php echo e(('public/assets/images/more-for-parents2.png')); ?>" class="img-fluid" alt="...">
                </div>
                <div class="col-md-12 col-lg-8 rounded-end" style="background-color: #FE8E40; border: none;">
                    <div class="card-body">
                        <h2 class="text-start  card-title" style="color: white;">FOR THE PARENTS</h2>
                        <p class="card-text text-start fw-medium" style="color: white; font-size: larger;">
                            There are many variations of passages of Lorem Ipsum available,
                             but the majority have suffered alteration in some form, by injected
                              humour, or randomised words which don't look even slightly believable.
                               If you are going to use a passage of Lorem Ipsum, you need to be
                                sure there isn't anything embarrassing hidden in the middle of text.
                                 All the Lorem Ipsum generators on the Internet tend to repeat predefined 
                                 chunks as necessary, making this the first  chunks as necessary, making this 
                                 the true generator on the Internet.  chunks as necessary, making this the first true gener It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, 
                                 to generate Lorem Ipsum which generate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- Safety Section -->
    <section class="safety-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    <div class="safety-icon">
                        <img src="<?php echo e(('public/assets/images/safety-icon.png')); ?>" alt="Safety Icon">
                    </div>
                </div>
                <div class="col-md-9 safety-text-container">
                    <h3>SAFETY FIRST</h3>
                    <p>
                        Lorem ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem ipsum is simply dummy text of the printing industry. 
                        Lorem ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section class="info-section py-5">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- Left Side Image -->
            <div class="col-lg-4">
              <img src="<?php echo e(('public/assets/images/more-for-parents3.png')); ?>" alt="Books Image" class="left-image" />
            </div>
      
            <!-- Cards Section -->
            <div class="col-lg-8 d-flex justify-content-between parents-card">
              <div class="info-card text-center">
                <div class="icon-wrapper">
                  <i class="bi bi-bus-front-fill"></i>
                </div>
                <h4>Arriving At School</h4>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,                </p>
              </div>
      
              <div class="info-card text-center">
                <div class="icon-wrapper">
                  <i class="bi bi-bus-front-fill"></i>
                </div>
                <h4>Uniform</h4>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,                </p>
              </div>
      
              <div class="info-card text-center">
                <div class="icon-wrapper">
                  <i class="bi bi-calendar-x"></i>
                </div>
                <h4>Holiday & Absence</h4>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('Front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NIT_School\resources\views/Front/pages/home/moreparent.blade.php ENDPATH**/ ?>