@extends('Front.layout.master')
@section('content')


<!-- About School of Scholars Section -->
<section class="about-school py-5">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Left Image Section -->
                    <div class="col-lg-4 col-md-12">
                        <img src="{{ ('public/assets/images/scholar.png')}}"
                            alt="Intellectual Growth" class="img-fluid scholar-img">
                    </div>

                    <!-- Right Text Section -->
                    <div class="col-lg-8 col-md-12">
                        <h3 class="section-title">About School of Scholars</h3>
                        <p class="section-description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                        </p>
                        <a href="{{ route('/aboutpage') }}" class="btn-readmore">Read More &rarr;</a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Vision and Mission Section for Desktop -->
        <div class="vision-container container-fluid d-none d-lg-block">
            <div class="vision-banner position-relative">
                <img src="{{('public/assets/images/vision.png')}}" alt="Vision Banner"
                    class="img-fluid banner-image">
                <div class="vision-content-overlay text-white">
                    <h3>Explore The Future</h3>
                    <h3>Our Vision</h3>
                    <p>
                        Fostering a culture of excellence, innovation, and compassion where every student thrives academically, socially, and emotionally" "Creating a safe and inclusive learning environment that celebrates diversity, nurtures creativity, and promotes critical thinking and dedicated to promote quality education through advanced teaching and learning process."
                    </p>
                </div>
            </div>
        </div>

        <div class="mission-container container-fluid d-none d-lg-block">
            <div class="mission-banner position-relative">
                <img src="{{('public/assets/images/mission.png')}}" alt="Mission Banner"
                    class="img-fluid banner-image">
                <div class="mission-content-overlay text-white">
                    <h3>Our Mission</h3>
                    <p>
                        Fostering a culture of excellence, innovation, and compassion where every student thrives academically, socially, and emotionally" "Creating a safe and inclusive learning environment that celebrates diversity, nurtures creativity, and promotes critical thinking and dedicated to promote quality education through advanced teaching and learning process."
                    </p>
                </div>
            </div>
        </div>

        <!-- Vision and Mission Section for Mobile (Grid Version) -->
        <section class="vision-section d-lg-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="vision-content">
                        <h3>Explore The Future <br>Our Vision</h3>
                        <p>
                            Fostering a culture of excellence, innovation, and
                            compassion where every student thrives academically,
                            socially, and emotionally. Creating a safe and
                            inclusive learning environment that celebrates
                            diversity, nurtures creativity, and promotes
                            critical thinking and dedicated to promoting quality
                            education through advanced teaching and learning
                            processes.
                        </p>
                    </div>
                    <div class="vision-images">
                        <div class="circle-image">
                            <img src="{{ ('public/assets/images/kids-studying.png')}}"
                                alt="Child Studying"
                                class="img-fluid circle-img1">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mission-section d-lg-none py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="mission-images">
                            <div class="circle-image large-circle">
                                <img src="{{('public/assets/images/mission2.png')}}"
                                    alt="Child Learning"
                                    class="img-fluid circle-img2">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="mission-content">
                            <h3>Our Mission</h3>
                            <p>
                                Fostering a culture of excellence, innovation,
                                and compassion where every student thrives
                                academically, socially, and emotionally.
                                Creating a safe and inclusive learning
                                environment that celebrates diversity, nurtures
                                creativity, and promotes critical thinking,
                                dedicated to promoting quality education through
                                advanced teaching and learning processes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Admission Banner Section -->
         <section id="admission-banner" class="my-5">
            <div class="admission-banner">
                <div class="admission-container d-flex flex-row">
                    <!-- Banner Image -->
                    <div class="admission-image col-6">
                        <img src="{{('public/assets/images/admission-banner.png')}}"
                            alt="Chalks and Duster" class="img-fluid">
                    </div>
    
                    <!-- Blackboard Section -->
                    <div
                        class="blackboard-container col-6 d-flex flex-row justify-content-around align-items-center">
                        <div class="blackboard col-4">
                            <div class="icon-text">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Admission Process</span>
                            </div>
                        </div>
                        <div class="blackboard col-4">
                            <div class="icon-text">
                                <i class="bi bi-file-earmark-text-fill"></i>
                                <span>Fee Structure</span>
                            </div>
                        </div>
                        <div class="blackboard col-4">
                            <div class="icon-text">
                                <i class="bi bi-music-note-beamed"></i>
                                <span>ExtraCurriculum Activity</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
         </section>
        

        <!-- latest-news section -->

        <section id="latest-news" class="my-5">
            <div class="container">
                <h2 class="text-center mb-5">LATEST NEWS</h2>

                <div class="row mb-5">
                    <div class="col-md-6">
                        <img src="{{('public/assets/images/latestnews1.png')}}"
                            alt="Sports Competition" class="img-fluid">
                    </div>
                    <div
                        class="col-md-6 d-flex flex-column justify-content-center">
                        <h3>Sports Competition</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. Lorem
                            Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. </p>
                        <a href="{{ route('/latestnewspage') }}" class="btn btn-custom">Read More &rarr;</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 order-md-2">
                        <img src="{{('public/assets/images/latestnews2.png')}}"
                            alt="Drawing Competition" class="img-fluid">
                    </div>
                    <div
                        class="col-md-6 order-md-1 d-flex flex-column justify-content-center">
                        <h3>Drawing Competition</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. Lorem
                            Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. </p>
                        <a href="{{ route('/latestnewspage') }}" class="btn btn-custom">Read More &rarr;</a>
                    </div>
                </div>
            </div>
        </section>

@endsection