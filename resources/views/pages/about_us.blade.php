@extends('layouts.master')

<body>

    <!-- ======= Header ======= -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2>ABOUT OUR ORGANIZATION</h2>
                        <h4>Najdah Organization for Relieve and Development</h4>
                        <a href="{{route('home',['locale'=>app()->getLocale() == 'en'? 'en':'ar'])}}"
                            class="logo me-auto "><img src="{{ asset('assets/img/test7.jpg') }}" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <p>

                            Northern Kenya has faced the brunt of multifaceted and multi-layer human and natural
                            challenges such as perennial clan conflict, historical marginalization, perennial biting
                            droughts, and a harsh and truly challenging environment. These challenges and a lack of
                            inadequate basic services have led the region to fall behind other parts of the country. In
                            response to these challenges, Najda Organization for Relieve and Development (NORD) was
                            established in 2013 by like-minded professionals from the region endeavoring to intervene in
                            the contracted human suffering through the establishment of community-based transformative
                            relief and development interventions that unravel socio-political and economic upgrading in
                            the region. NORD is an independent, non-profit, non-political, non-governmental organization
                            registered with the government of Kenya under NGO board registration Number: --------Since
                            its establishment, NORD has undertaken a wide spectrum of projects ranging from purely
                            humanitarian and life-saving interventions to developmental projects. NORD has an impeccable
                            success track record and focuses comparatively on the following areas: Education, Orphans,
                            water and sanitation, agriculture, and livelihood. NORD has its own policies and procedures
                            in effect, such as institutional by-laws, personnel policies, financial management and
                            sector-based comprehensive operating manuals, and whistleblower policy.



                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Strategic Values</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Our Vision <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    A world with Integrity at the Heart of Service To humanity.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Our Mission
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    NORD being non-political, non-governmental and non-profit organization is committed
                                    to
                                    serve humanity, especially vulnerable and orphans without any kind of discrimination
                                    to con-
                                    tribute in their well-being of health, education, financial sustainability,
                                    livelihood, shelter,
                                    availability of clean water, mosques, education centers, savage of disaster and
                                    other aspects
                                    of life. NORD is committed to work with the community in promoting socio-economic
                                    devel-
                                    opments by strengthening their livelinoods, education, and health to attain
                                    sustainable and
                                    self-reliance development.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Our Core Values
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    NORD is envisioned as an organization characterized by its commitment to the
                                    following
                                    core values and principles
                                <ol>
                                    <li>Accountability to our stakeholders through their ownership of and involve-
                                        S ment in the work of the organization</li>
                                    <li>Promoting transparency, openness, freedom of expression, social responsi-
                                        bility</li>
                                    <li>Professionalism that adds value to the challenges and redefining human
                                        security and peace building in Somalia by building a knowledge base of
                                        lessons that can be shared across human divides</li>
                                    <li>Humility in the course of our work and respect for diversity of views through
                                        the promotion of universal ideal within culturally sensitive contexts</li>
                                    <li>Equality for all: God made all people equal; our organization is committed to
                                        a development process that promotes equality.</li>
                                    <li>Rights and dignity for all: NORD believes in and strives to uphold the rights
                                        and dignity of all people especially in the rural communities.</li>
                                    <li>Stewardship: NORD believes in God to protect the dignity of everybody to
                                        BS exploit the Earthy goods in accordance with God's Law and individual order.
                                    </li>
                                    <li>Institutional partnership in development: NORD welcome and respects ongoing
                                        International initiatives and national policies to take care and give sup-
                                        port to vulnerable people fight over their predicaments. Our activities will be
                                        unison and collaboration with other stakeholders.</li>

                                </ol>
                                </p>

                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Organizational structure ======= -->
        <section id="header" class="header " style="background-color: 7D0552;">


            <div class="container-fluid text-center text-white ">
                <div class="d-flex justify-content-center align-items-center">
                    <h3><b> The Organizational Structure</b></h3>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->
        <div class="container">
            <div class="card">

                <img class="card-img-top" src="{{ asset('assets/img/org.png') }}" alt="Card image">
                <div class="card-body">
                    <p class="card-text">
                        NORD has a Board of Directors (BOD) consisting of members,
                        The BOD
                        appoints
                        a board chairperson. He/she is responsible for the proper formulation and execu-
                        tion of set policies, decisions, and directives of the BOD. The BOD is the
                        highest
                        gov-
                        erning body of the organization and their responsibilities include overall
                        policy
                        and
                        direction setting, financial integrity and legal obligations of the institution.
                        The
                        BOD
                        is also responsible for strategic planning and manage resulting activities,
                        oversees
                        the proper implementation thereof and responsible for providing policy level
                        guid-
                        ance. At general membership council (assembly) decisions are taken on 2/
                        3-majori-
                        ty votes, and at board level we apply on consensus base.
                    </p>
                </div>
            </div>
        </div>
        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Where We Work</h2>
                    <p>NORD started its operation in Nakuru. Currently, it has spread its activities across the coun-
                        try. NORD headquarters office is located in Nakuru The organization currently have liaison
                        held officers and offices in the following counties; - Nakuru county, Mandera county,
                        Marsabit county , Isiolo county, Kisumu county, Tana River county, Wajir county</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{asset('assets/img/team/mdr.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Mandera County</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{asset('assets/img/team/marsa.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Marsabit County</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{asset('assets/img/team/nakuru.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Nakuru County</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{asset('assets/img/team/wajir.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Wajir County</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{asset('assets/img/team/isiolo.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Isiolo County</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{asset('assets/img/team/tana.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Tana River County</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{asset('assets/img/team/kisumu.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Kisumu County</h4>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Our Team Section -->

        <!-- ======= Our Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Success Story</strong></h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum
                        quidem.
                        Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit
                        alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">Student supposed with Education and Meal programs <i
                                    class="val">5000+</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Families Supported Under Emergency Aid <i class="val">4500+</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Places of Worships Constructed and Completed <i
                                    class="val">30</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <span class="skill">Provission of Clean Water <i class="val">20</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Agriculture <i class="val">10000+</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>



                    </div>

                </div>

            </div>
        </section><!-- End Our Skills Section -->



    </main><!-- End #main -->
</body>