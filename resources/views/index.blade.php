@include('layouts/navbar')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide mosque tivaoune -->
            {{-- <div class="video-wrapper">
                <video playsinline autoplay muted loop poster="cake.jpg">
                    <source src="my-css-video-background.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>

                <!-- This will be positioned on top of our video background -->
                <div class="header">
                    <h1>Blueberry Cheesecake</h1>
                    <button>Recipe here</button>
                </div>
            </div> --}}

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide3mosquee.jpeg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Notre Dahira <span>Almoutahabina
                                Fillahi</span></h2>
                        <p class="animate__animated animate__fadeInUp">la Dahira des Étudiants Tidianes de l'Université
                            Alioune Diop de Bambey, a été créée en 2007 sous l'initiative de Serigne Abdou Aziz Sy Al
                            Amine. Depuis sa fondation, elle incarne un lieu de rassemblement pour les étudiants avides
                            d'approfondir leurs connaissances islamiques selon la voie tidjiane.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir
                            Plus</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide1mosquee.jpeg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Notre Dahira <span>Almoutahabina
                                Fillahi</span></h2>
                        <p class="animate__animated animate__fadeInUp">la Dahira des Étudiants Tidianes de l'Université
                            Alioune Diop de Bambey, a été créée en 2007 sous l'initiative de Serigne Abdou Aziz Sy Al
                            Amine. Depuis sa fondation, elle incarne un lieu de rassemblement pour les étudiants avides
                            d'approfondir leurs connaissances islamiques selon la voie tidjiane.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir
                            Plus</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide2mosquee.jpeg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Notre Dahira <span>Almoutahabina
                                Fillahi</span></h2>
                        <p class="animate__animated animate__fadeInUp">la Dahira des Étudiants Tidianes de l'Université
                            Alioune Diop de Bambey, a été créée en 2007 sous l'initiative de Serigne Abdou Aziz Sy Al
                            Amine. Depuis sa fondation, elle incarne un lieu de rassemblement pour les étudiants avides
                            d'approfondir leurs connaissances islamiques selon la voie tidjiane.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir
                            Plus</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <p>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Magnam dolores commodi est suspect. Necessitatibus eius
                            consequatur ex aliquid fuga eum quidem. Asseyez-vous sint consectetur velit. Quisquam quos
                            quisquam cupidité. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis
                            commodi quidem hic quas.</font>
                    </font>
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member ">
                        <img src="assets/img/team/team-1.jpg" alt="">
                        <h4>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Walter White</font>
                            </font>
                        </h4>
                        <span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Directeur général</font>
                            </font>
                        </span>
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                    quaerat qui aut aut aut
                                </font>
                            </font>
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/team-2.jpg" alt="">
                        <h4>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Sarah Jhinson</font>
                            </font>
                        </h4>
                        <span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Chef de produit</font>
                            </font>
                        </span>
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Repellet fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto
                                    rerum rerum temporibus
                                </font>
                            </font>
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/team-3.jpg" alt="">
                        <h4>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">William Anderson</font>
                            </font>
                        </h4>
                        <span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Directeur technique</font>
                            </font>
                        </span>
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et
                                    laborum toro des clara
                                </font>
                            </font>
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Call To Action</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Actus</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Tout</li>
                        <li data-filter=".filter-web"> JOURNÉE D'INTÉGRATION</li>
                        <li data-filter=".filter-app">Journée Cheikh</li>
                        <li data-filter=".filter-card">Ziarra Générale</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/jc/photo_2024-03-31_15-22-20.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/jc/photo_2024-03-31_15-22-20.jpg')  }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="JC 2022"><i
                                        class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/ji/31.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/ji/31.png')}}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title=" JOURNÉE D'INTÉGRATION"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/jc/photo_2024-03-31_15-21-55.jpg')  }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/jc/photo_2024-03-31_15-21-55.jpg')  }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="JC 2022"><i
                                        class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/jc/photo_2024-03-31_15-20-21.jpg')  }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/jc/photo_2024-03-31_15-20-21.jpg')  }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="JC 2022"><i
                                        class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/zg/photo_2024-03-31_15-25-53.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/zg/photo_2024-03-31_15-25-53.jpg')}}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="ZIARRA GÉNÉRALE"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/ji/6.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/ji/6.png')}}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title=" JOURNÉE D'INTÉGRATION"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/jc/photo_2024-03-31_15-20-42.jpg')  }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/jc/photo_2024-03-31_15-20-42.jpg')  }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="JC 2022"><i
                                        class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/zg/photo_2024-03-31_15-26-04.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/zg/photo_2024-03-31_15-26-04.jpg')}}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="ZIARRA GÉNÉRALE"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/jc/photo_2024-03-31_15-20-01.jpg')  }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/jc/photo_2024-03-31_15-20-01.jpg')  }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="JC 2022"><i
                                        class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/zg/photo_2024-03-31_15-27-00.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/zg/photo_2024-03-31_15-27-00.jpg')}}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="ZIARRA GÉNÉRALE"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/ji/26.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/ji/26.png')}}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title=" JOURNÉE D'INTÉGRATION"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/jc/photo_2024-03-31_15-23-12.jpg')  }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/jc/photo_2024-03-31_15-23-12.jpg')  }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="JC 2022"><i
                                        class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/zg/photo_2024-03-31_15-26-42.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/zg/photo_2024-03-31_15-26-42.jpg')}}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="ZIARRA GÉNÉRALE"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/ji/21.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/ji/21.png')}}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title=" JOURNÉE D'INTÉGRATION"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/zg/photo_2024-03-31_15-24-59.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/zg/photo_2024-03-31_15-24-59.jpg')}}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                        class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/ji/28.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/ji/28.png')}}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title=" JOURNÉE D'INTÉGRATION"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/zg/photo_2024-03-31_15-26-19.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/zg/photo_2024-03-31_15-26-19.jpg')}}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="ZIARRA GÉNÉRALE"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/zg/photo_2024-03-31_15-24-51.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/zg/photo_2024-03-31_15-24-51.jpg')}}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="ZIARRA GÉNÉRALE"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/ji/33.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/ji/33.png')}}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title=" JOURNÉE D'INTÉGRATION"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/zg/photo_2024-03-31_15-27-16.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/zg/photo_2024-03-31_15-27-16.jpg')}}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="ZIARRA GÉNÉRALE"><i class="bx bx-plus"></i></a>
                                <i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
@include('layouts/footer')