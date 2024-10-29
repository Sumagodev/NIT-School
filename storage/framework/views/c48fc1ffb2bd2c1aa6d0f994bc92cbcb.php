
<?php $__env->startSection('content'); ?>
<div class="container-fluid p-0 my-5 faq">
            <!-- Added p-0 for zero padding -->
            <h2 class="text-center mb-5">FAQ'S</h2>

            <div class="accordion w-100" id="accordionExample">
                <!-- Added w-100 to make it full width -->
                <!-- Accordion Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Q.1. What Pattern Does Nashik School Of Excellence
                            Follow?
                        </button>
                    </h2>
                    <div id="collapseOne"
                        class="accordion-collapse collapse show"
                        aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            CBSE.
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Q.2. What Sets Nashik School Of Excellence Apart
                            From Other Schools In Nashik?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The school offers holistic development through a
                            balanced academic and extracurricular curriculum.
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Q.3. How Does The School Ensure The Safety And
                            Security Of Students During Transportation?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The school offers GPS tracking systems and
                            experienced staff for student transportation safety.
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            Q.4. What Extracurricular Activities Does The School
                            Offer To Enhance Students’ Skills And Talents?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The school offers a wide range of activities
                            including sports, arts, and technology clubs.
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('Front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cet_project\resources\views/Front/pages/home/morefaq.blade.php ENDPATH**/ ?>