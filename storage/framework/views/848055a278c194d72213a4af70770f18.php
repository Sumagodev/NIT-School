
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
            <h2 class="section-heading">ONLINE ADMISSION PROCESS</h2>
        </div>

        <section id="online-admission-form" class="admission-form-section py-5">
            <div class="container">
                <div class="admission-form-container mx-auto">
                    <div
                        class="admission-form-heading text-white text-center py-3">
                        Online Admission Form
                    </div>
                    <form class="row g-3 p-4">

                        <!-- Student Information Section -->
                        <h3 class="form-section-heading">Student
                            Information</h3>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Academic Year</option>
                                <option value="1">2024-2025</option>                       
                              </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected>CBSE</option>
                                <option>ICSE</option>
                                <option>State Board</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Standard</option>
                                <option>I: 1</option>
                                <option>II: 2</option>
                                <option>III: 3</option>
                                <option>IV: 4</option>
                                <option>V: 5</option>
                                <option>VI: 6</option>
                                <option>VII: 7</option>
                                <option>VIII: 8</option>
                                <option>IX: 9</option>
                                <option>X: 10</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="First Name" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Middle Name">
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Last Name" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="tel" maxlength="10" pattern="\d{10}"
                                class="form-control"
                                placeholder="Mob.No" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="email" class="form-control"
                                placeholder="Email id" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input
                                placeholder="Date Of Birth"
                                class="form-control"
                                type="text"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')"
                                id="date" />
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Religion</option>
                                <option>Hindu</option>
                                <option>Muslim</option>
                                <option>Christian</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Caste Category</option>
                                <option>General</option>
                                <option>OBC</option>
                                <option>SC/ST</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Nationality</option>
                                <option>Indian</option>
                                <option>Other</option>
                            </select>
                        </div>
                        

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>City/Village</option>
                                <option>Nashik</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Area/Taluka</option>
                                <option>Nashik</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>District</option>
                                <option>Nashik</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>State</option>
                                <option value>Select state</option>
                                <option value="MH">Maharashtra</option>
                                <option value="OT">Other</option>
                                
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Country</option>
                                <option>India</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Blood Group</option>
                                <option>O <sup>+</sup></option>
                                <option>B <sup>+</sup></option>
                                <option>AB <sup>+</sup></option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Pincode" required>
                        </div>

                        <!-- Parent's Information Section -->
                        <h3 class="form-section-heading">Parent's
                            Information</h3>

                        <!-- Father Information -->
                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Father's First Name" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Father's Middle Name">
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Father's Last Name" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input
                                placeholder="Date Of Birth"
                                class="form-control"
                                type="text"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')"
                                id="date" />
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Father's Qualification" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Father's Designation" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="tel" maxlength="10" pattern="\d{10}"
                                class="form-control"
                                placeholder="Father's Mob.No" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Village/Area</option>
                                <option>Govind Nagar</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <!-- Mother Information -->
                        <h3 class="form-section-heading">Mother Information</h3>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Mother's First Name" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Mother's Middle Name">
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Mother's Last Name" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input
                                placeholder="Date Of Birth"
                                class="form-control"
                                type="text"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')"
                                id="date" />
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Mother's Qualification" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Mother's Designation" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="tel" maxlength="10" pattern="\d{10}"
                                class="form-control"
                                placeholder="Mother's Mob.No" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Village/Area</option>
                                <option>Govind Nagar</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <!-- Past Academic Information -->
                        <h3 class="form-section-heading">Past Academic
                            Information Of Student</h3>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Previous School Name" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Location" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <input type="text" class="form-control"
                                placeholder="Class Completed" required>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 form-input">
                            <select class="form-select" required>
                                <option selected disabled>Year Completed</option>
                                <option>2023-2024</option>
                                <option>2022-2023</option>
                            </select>
                        </div>

                        <div class="col-12 text-center">
                            <button type="button"
                                class="btn btn-add-school">
                                <i class="fa-solid fa-circle-plus fa-lg"></i>
                                Add More School
                            </button>

                        </div>

                        <!-- Upload Files Section -->
                        <h3 class="form-section-heading">Upload Files</h3>
                        <p class="note">Note: Please upload necessary documents
                            or submit them later at the School Office. Document
                            size should not be more than 2MB, supported formats:
                            JPEG, JPG.</p>

                        <div class="upload-grid">
                            <!-- Aadhaar Card -->
                            <div class="upload-item-container">
                                <div class="upload-item">
                                    <label for="aadharCardUpload">Aadhaar
                                        Card</label>
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <input type="file" class="form-control-file"
                                        id="aadharCardUpload" required>
                                </div>
                            </div>

                            <!-- Birth Certificate -->
                            <div class="upload-item-container">
                                <div class="upload-item">
                                    <label for="birthCertificateUpload">Birth
                                        Certificate</label>
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <input type="file" class="form-control-file"
                                        id="birthCertificateUpload" required>
                                </div>
                            </div>

                            <!-- Previous School Report Card -->
                            <div class="upload-item-container">
                                <div class="upload-item">
                                    <label for="previousSchoolUpload">Previous
                                        School <br>Report Card</label>
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <input type="file" class="form-control-file"
                                        id="previousSchoolUpload" required>
                                </div>
                            </div>

                            <!-- Parent's Aadhaar Card (Card 4) -->
                            <div class="upload-item-container">
                                <div class="upload-item">
                                    <label for="parentAadharUpload">Parent's
                                        <br>Aadhaar Card</label>
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <input type="file" class="form-control-file"
                                        id="parentAadharUpload" required>
                                </div>
                                <!-- Small note below Parent's Aadhaar Card -->
                                <div class="small-note">(Only One Parent)</div>
                            </div>

                            <!-- Address Proof (Card 5) -->
                            <div class="upload-item-container">
                                <div class="upload-item">
                                    <label for="addressProofUpload">Address
                                        Proof</label>
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <input type="file" class="form-control-file"
                                        id="addressProofUpload" required>
                                </div>
                                <!-- Small note below Address Proof -->
                                <div class="small-note">(Ration Card,
                                    Electricity Bill, etc.)</div>
                            </div>

                            <!-- Student Passport Size Photo -->
                            <div class="upload-item-container">
                                <div class="upload-item">
                                    <label for="studentPhotoUpload">Student
                                        Passport <br>Size Photo</label>
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <input type="file" class="form-control-file"
                                        id="studentPhotoUpload" required>
                                </div>
                            </div>

                            <!-- Cast Certificate (Card 7) -->
                            <div class="upload-item-container">
                                <div class="upload-item">
                                    <label for="castCertificateUpload">Cast
                                        Certificate</label>
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <input type="file" class="form-control-file"
                                        id="castCertificateUpload">
                                </div>
                                <!-- Small note below Cast Certificate -->
                                <div class="small-note">(If Applicable)</div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit"
                                class="btn btn-submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>

        <div class="container my-5">
            <div class="alert custom-alert mx-auto">
                <strong>Note:</strong> After Submitting The
                Online Application
                Form, If There Are Seats Available In The
                Standard
                That You Have Applied In, An Email With A
                Payment Link For The
                First Term Fees Will Be Sent To You. Parents Are
                Requested To Make The Necessary Payment Online.
            </div>
        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('Front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cet_project\resources\views/Front/pages/home/onlineprocess.blade.php ENDPATH**/ ?>