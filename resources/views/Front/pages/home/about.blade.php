@extends('Front.layout.master')
@section('content')


<!-- About Section -->
<section class="about-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="image-grid">
                            <!-- Large image on the left -->
                            <img src="{{('public/assets/images/about1.png')}}" class="large-img"
                                alt="School Image 1">
                            <!-- Two smaller images stacked on the right -->
                            <img src="{{('public/assets/images/about2.png')}}" class="small-img"
                                alt="School Image 2">
                            <img src="{{('public/assets/images/about3.png')}}"
                                class="small-img2" alt="School Image 3">
                        </div>
                    </div>
                    <div class="col-md-4 about-text">
                        <h2>ABOUT OUR SCHOOL</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. Lorem
                            Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. since the
                            1500s, when an unknown printer took a galley of type
                            and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="president">
            <h2 class="text-center mb-6">PRESIDENT DESK</h2>
            <div class="container-fluid profile-section">
                <div class="row align-items-center">
                    <!-- Left: Profile Image -->
                    <div class="col-md-5 text-center profile-image">
                        <img src="{{('public/assets/images/president.png')}}"
                            alt="Mr. Suresh A. Patil">
                        <div class="text-center mt-3">
                            <h4 class="profile-name">MR. SURESH A. PATIL</h4>
                            <p class="profile-title">B.SC (HONS),
                                L.L.B.<br>President, Nasik Institute of
                                Technology</p>
                        </div>

                    </div>

                    <!-- Right: Description Section -->
                    <div class="col-md-6">
                        <!-- Section for the description -->
                        <div class="description-section">
                            <!-- Quotation marks at the top-left -->
                            <div class="quote-mark-top">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>

                            <!-- Description Text -->
                            <div class="description-text">
                                <p>
                                    Through my last 36 years of experience in
                                    various sectors like
                                    industrial, construction, banking, social,
                                    etc., I strongly believe
                                    that there is still a long way to go to
                                    attain the increasing demand of
                                    technology-savvy minds by the industrial
                                    sector. For that, the excellence
                                    in education and training is the need of the
                                    hour. NIT – Nasik Institute
                                    of Technology is taking shape to bridge the
                                    gap between the future demand
                                    and supply of technical human resources.
                                    Over the year, it will grow into
                                    a leading educational center in Maharashtra,
                                    widely recognized for its
                                    modern state-of-the-art infrastructure,
                                    vibrant campus, and academic
                                    excellence in the field of technical
                                    education. The courses designed are
                                    amongst the best in the industry and are
                                    believed to equip students with
                                    effective knowledge, potentials, insights,
                                    and expertise so that they can
                                    make a successful and bright career. Keeping
                                    in mind the requirement of
                                    the building construction industry, we have
                                    designed a sandwich course in
                                    Civil Engineering to give in-depth knowledge
                                    of on-site working. We trust
                                    the fact that if youth is equipped with
                                    proper knowledge and skills, they
                                    can be the most powerful global asset. We
                                    are proud to say that we are
                                    creating youth anium (Intellectual Youth
                                    Power).
                                </p>
                            </div>

                            <!-- Quotation marks at the bottom-right -->
                            <div class="quote-mark-bottom">
                                <i class="fa-solid fa-quote-right"></i>
                                   
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section id="principal">
                <div class="container my-5">
                    <h2 class="text-center">PRINCIPAL DESK</h2>
                    <!-- Dear Students Section -->
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-8 position-relative">
                            <div class="p-4 rounded principal-msg">
                                <h2 class="mb-3 fw-bold text-black">Dear
                                    Students,</h2>
                                <p>
                                    I welcome you to NIT'S Late Annasaheb Patil
                                    Polytechnic, Nashik. Education taught to
                                    teach us not only how to make a living but
                                    also how to live, hence everyone in our
                                    NIT'S Campus is trying to bring to full
                                    blossoming the potential in every student.
                                    It is very important to learn to develop
                                    ourselves by imbibing certain qualities in
                                    our life. They are, a steady mind that can
                                    function without wavering in any situation,
                                    a healthy body filled with a passion for
                                    life, a flexible intellect that allows space
                                    for new thoughts and ideas and a clear aim
                                    which gives a proper direction. Always be
                                    joyful and do all your work with zeal and
                                    sincerity. If you love what you are doing,
                                    you will be successful in life. At the
                                    Nashik Institute of Technology, everyone is
                                    committed to provide good technical
                                    education along with imbibing social values.
                                    So be the part of NIT Family.
                                </p>
                                <!-- Image inside the same container -->
                                <img src="{{('public/assets/images/principal-icon.png')}}"
                                    class="img-fluid prof-img"
                                    alt="Prof Gopal A. Wadnere" />
                                <div class="text-center mt-5 prof-details">
                                    <h4
                                        class="fw-bold text-uppercase text-orange">Prof.
                                        Gopal A. Wadnere</h4>
                                    <p class="text-orange">PH.D (MECHANICAl
                                        PURSUING)<br> M.TECH., B.E., D.A.E.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="teachers">
                        <!-- Our Teachers Section -->
                        <h3 class="text-center mb-4">OUR TEACHERS</h3>
                        <div class="row text-center">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="teacher-card">
                                    <img src="{{('public/assets/images/teacher1.png')}}"
                                        class="img-fluid rounded-circle"
                                        alt="ABC Head Educator">

                                    <h6 class="mt-2 fw-bold">ABC<br> Head
                                        Educator</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="teacher-card">
                                    <img src="{{('public/assets/images/teacher2.png')}}"
                                        class="img-fluid rounded-circle"
                                        alt="ABC Teacher">
                                    <h6 class="mt-2 fw-bold">ABC<br>
                                        Teacher</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="teacher-card">
                                    <img src="{{('public/assets/images/teacher3.png')}}"
                                        class="img-fluid rounded-circle"
                                        alt="ABC Teacher">
                                    <h6 class="mt-2 fw-bold">ABC<br>Teacher</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="teacher-card">
                                    <img src="{{('public/assets/images/teacher4.png')}}"
                                        class="img-fluid rounded-circle"
                                        alt="ABC Teacher">
                                    <h6 class="mt-2 fw-bold">ABC<br>
                                        Teacher</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
@endsection