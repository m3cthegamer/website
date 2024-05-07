<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Anasayfa | BCE</title>
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Latest compiled and minified CSS -->
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/js/bootstrap.min.js">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
<!--Header  -->
<div class="banner_outer">
    <header class="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="./index.php"><figure class="mb-0 banner-logo"><img src="./assets/images/logo.png" alt="" class="img-fluid"></figure></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Anasayfa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.html">Hakkımızda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./service.html">Hizmetler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./projects.html">Projeler</a>
                        </li>
                        
                        <li class="nav-space nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> Ekstra </a>
                            <div class="dropdown-menu drop-down-content">
                                <ul class="list-unstyled drop-down-pages">
                                    <li class="nav-item">
                                        <a class="dropdown-item nav-link" href="./team.html">Takımımız</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item nav-link" href="./faq.html">S.S.S</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-space nav-item">

                        <?php 
                        if (!isset($_COOKIE ['user'])) {
                                    echo '<a class="nav-link" id="loginButton" type="button" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#loginModal">Oturum Aç</a>';
                                }
                                ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lets_talk" href="./contact.html">Bize Ulaşın<i class="circle fa-regular fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <figure class="banner-sideshape mb-0">
        <img src="./assets/images/banner-sideshape.png" alt="" class="img-fluid">
    </figure>
<!-- Banner -->
<section class="banner-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="banner_content">
                    <h1 class="text-white">Yapay Zeka ile Nesne Takibi alanında büyümeye devam ediyor.</h1>
                    <p class="text-white">Bu alan, nesnelerin tanınması, izlenmesi ve anlaşılması konularında önemli adımlar atarak birçok sektörde verimliliği artırıyor ve yeni olanaklar sunuyor.
                    </p>
                    <div class="banner-button">
                        <a class="button1 lets_talk text-decoration-none" href="./about.html">Daha Fazla<i class="circle fa-regular fa-angle-right"></i></a>
                        <a class="lets_talk text-decoration-none" href="./contact.html">Bize Ulaşın<i class="circle fa-regular fa-angle-right"></i></a>   
                    </div> 
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="banner_wrapper" data-aos="fade-right">
                    <figure class="mb-0 banner-image">
                        <img src="./assets/images/banner-image.png" alt="" class="">
                    </figure> 
                </div>
            </div>
        </div>
    </div>
    <figure class="banner-sideshape2 mb-0">
        <img src="./assets/images/banner-sideshape2.png" alt="" class="img-fluid">
    </figure>   
</section>
</div>
<!-- About us -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_wrapper">
                    <figure class="mb-0 about-image1">
                        <img src="./assets/images/about-image1.png" alt="" class="img-fluid">
                    </figure> 
                    <figure class="mb-0 about-image2">
                        <img src="./assets/images/about-image2.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_content" data-aos="fade-right">
                    <h5>Örnek</h5>
                    <h2>Nesne Takibi ile yapılan çalışmalarımız</h2>
                    <p class="text-size-18">Nesne takibi teknolojisinin oyun endüstrisindeki kullanımı giderek artıyor ve oyun deneyimini daha etkileyici hale getiriyor</p>
                    <div class="about-lowercontent">
                        <div class="image">
                            <figure class="mb-0 icon">
                            <img src="./assets/images/about-customer.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="content">
                            <h4>100% Müşteri Memnuniyeti</h4>
                            <p class="text-size-18">Her zaman müşterilerimizin memnuniyetini en üst seviyede tutmayı hedefliyoruz.</p>
                        </div>
                        <div class="image">
                            <figure class="mb-0 icon">
                                <img src="./assets/images/about-quality.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="content">
                            <h4>1 Aya varan Kalite Güvencesi</h4>
                            <p class="text-size-18 text">Ürünlerimizde 1 aya varan kalite güvencesini müşterilerimize sunuyoruz.</p>
                        </div>
                    </div>
                    <a class="read_more text-decoration-none" href="./about.html">Daha Fazla<i class="circle fa-regular fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services -->
<section class="service-section position-relative">
    <div class="container">
        <figure class="service-image mb-0">
            <img src="./assets/images/service-image.png" class="img-fluid" alt="">
        </figure>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="service_content" data-aos="fade-right">
                    <h5>Sunduğumuz Hizmetler</h5>
                    <h2>BCE Olarak Odak Noktamız Uygulama, Kalite ve Hizmette Mükemmeliyeti Sağlamaktır.</h2>
                    <p class="text-size-18"></p>
                    <a class="read_more text-decoration-none" href="./service.html">Daha Fazla<i class="circle fa-regular fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="service_contentbox">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="service-box box-mb">
                                <figure class="service-reboticon">
                                    <img src="./assets/images/service-reboticon.png" alt="" class="img-fluid">
                                </figure> 
                                <h4>Nesne Takibi</h4>
                                <p class="text-size-16 mb-2">Yapay zeka destekli nesne takibi teknolojisi, çevresel algılamayı geliştirerek birçok alanda verimliliği artırıyor...</p>
                                <a class="read_more text-decoration-none" href="./service.html">Daha Fazla</a>
                            </div>   
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="box-top">
                                <div class="service-box box-mb">
                                    <figure class="service-learningicon">
                                        <img src="./assets/images/service-learningicon.png" alt="" class="img-fluid">
                                    </figure>
                                    <h4>Machine learning</h4>
                                    <p class="text-size-16 mb-2">Butem vel eum iure reprehea rui in ea volutae velit...</p>
                                    <a class="read_more text-decoration-none" href="./service.html">Daha Fazla</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="service-box">
                                <figure class="service-scienceicon">
                                    <img src="./assets/images/service-scienceicon.png" alt="" class="img-fluid">
                                </figure>
                                <h4>Animasyonlu & Öğretici Videolar</h4>
                                <p class="text-size-16 mb-2">Animasyonlu ve öğretici videolarımız müşterilere bilgiyi daha etkili bir şekilde verir...</p>
                                <a class="read_more text-decoration-none" href="./service.html">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="box-top">
                                <div class="service-box">
                                    <figure class="service-analysicon">
                                        <img src="./assets/images/service-analysicon.png" alt="" class="img-fluid">
                                    </figure>
                                    <h4>Predictive Analysis</h4>
                                    <p class="text-size-16 mb-2">Rutem vel eum iure reprehea rui in ea volutae velit...</p>
                                    <a class="read_more text-decoration-none" href="./service.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Choose -->
<section class="choose-section">
    <div class="container">
    <figure class="choose-sideshape mb-0">
        <img src="./assets/images/choose-sideshape.png" alt="" class="img-fluid">
    </figure>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2">
                <div class="choose_wrapper">
                    <figure class="mb-0 choose-image">
                        <img src="./assets/images/choose-image.png" alt="" class="">
                    </figure> 
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                <div class="choose_content" data-aos="fade-right">
                    <h5>Why Choose Us</h5>
                    <h2 class="text-white">Get Closer Look How Business Develop in AI Data Analysis</h2>
                    <p class="text-white text-size-18">Consectetur adipiscing elit sed do eiusmod tempor in 
                        labore et dolore magna aliqua ruis ipsum suspendisse ultrices gravida sit amet.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="text-white text text-size-18"><i class="circle fa-regular fa-angle-right"></i>Quis autem vel eum iure reprehenderit aui</li>
                        <li class="text-white text text-size-18"><i class="circle fa-regular fa-angle-right"></i>Suscipit laboriosam nisi rut aliuid eum iure moli</li>
                        <li class="text-white text text1 text-size-18"><i class="circle fa-regular fa-angle-right"></i>Dolor repellendus temporibus autem auibus</li>
                    </ul>
                    <a class="read_more text-decoration-none" href="./about.html">Daha Fazla<i class="circle fa-regular fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <figure class="choose-sideshape2 mb-0">
        <img src="./assets/images/choose-sideshape2.png" alt="" class="img-fluid">
    </figure>   
</section>
<!-- Case Study -->
<section class="study-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="study_content">
                    <h5>Case Study</h5>
                    <h2>Explore Our Case Studies</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="case-box overlay">
                    <figure class="image mb-0">
                        <img src="./assets/images/case-image1.png" alt="" class="img-fluid">
                    </figure>
                    <div class="content">
                        <span class="text-white">Robot Technology</span>
                        <h4 class="text-white">Officia deserunt mollitia animi nobis</h4>
                        <i class="circle fa-regular fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="case-box overlay">
                    <figure class="image mb-0">
                        <img src="./assets/images/case-image2.png" alt="" class="img-fluid">
                    </figure>
                    <div class="content">
                        <span class="text-white">User Research</span>
                        <h4 class="text-white">Eum iure reprehenderit velit esse</h4>
                        <i class="circle fa-regular fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="case-box overlay">
                    <figure class="image mb-0">
                        <img src="./assets/images/case-image3.png" alt="" class="img-fluid">
                    </figure>
                    <div class="content">
                        <span class="text-white">Machine Learning</span>
                        <h4 class="text-white">Duis aute irure dolor in reprehenderit</h4>
                        <i class="circle fa-regular fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-images" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="case-box overlay">
                        <figure class="image mb-0">
                            <img src="./assets/images/case-image4.png" alt="" class="img-fluid">
                        </figure>
                        <div class="content">
                            <span class="text-white">Data Science</span>
                            <h4 class="text-white">Numruam eius modi tema incidunt labore </h4>
                            <i class="circle fa-regular fa-angle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="case-box overlay">
                        <figure class="image mb-0">
                            <img src="./assets/images/case-image5.png" alt="" class="img-fluid">
                        </figure>
                        <div class="content text-pd">
                            <span class="text-white">Artificial Intelligence</span>
                            <h4 class="text-white">Molestiae non recusana delectuse</h4>
                            <i class="circle fa-regular fa-angle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="case-box overlay">
                        <figure class="image mb-0">
                            <img src="./assets/images/case-image6.png" alt="" class="img-fluid">
                        </figure>
                        <div class="content">
                            <span class="text-white">BI execution</span>
                            <h4 class="text-white">Exercitation ullamco laboris nisa</h4>
                            <i class="circle fa-regular fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button">
            <a class="view_all text-decoration-none" href="./about.html">Hepsini Gör<i class="circle fa-regular fa-angle-right"></i></a>
        </div>
    </div>
</section>
<!-- Testimonial -->
<section class="testimonial-section">
    <div class="container">
        <div class="row position-relative">
            <div class="col-12">
                <div class="heading">
                    <h5>Testimonials</h5>
                    <h2>Hear it From Our Clients</h2>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial_content">
                                <div class="content-box">
                                    <p class="h4">“Quisquam est, qui dolorem ipsum quia dolor sit amet conse aetur, adipisci velit, sed ruia non numquam eius modi temor
                                        incidunt ut labore et dolore magnam alieuam zuaerat voluta tem nostrum exercitationem”</p>
                                    <figure class="testimonial-image mb-0">
                                        <img src="./assets/images/testimonial-image.png" alt="" class="img-fluid">
                                    </figure>
                                    <span class="text-size-18">Peter Johns</span>
                                    <span class="text-size-16 mb-0">Head of informatics at EBI</span>
                                    <div class="box">
                                        <figure class="testimonial-comas mb-0">
                                            <img src="./assets/images/testimonial-comas.png" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial_content">
                                <div class="content-box">
                                    <p>“Quisquam est, qui dolorem ipsum quia dolor sit amet conse aetur, adipisci velit, sed ruia non numquam eius modi temor
                                        incidunt ut labore et dolore magnam alieuam zuaerat voluta tem nostrum exercitationem”</p>
                                    <figure class="testimonial-image mb-0">
                                        <img src="./assets/images/testimonial-image.png" alt="" class="img-fluid">
                                    </figure>
                                    <span class="text-size-18">Peter Johns</span>
                                    <span class="text-size-16 mb-0">Head of informatics at EBI</span>
                                    <div class="box">
                                        <figure class="testimonial-comas">
                                            <img src="./assets/images/testimonial-comas.png" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-outer">
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="fa-solid fa-angle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="fa-solid fa-angle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <figure class="mb-0 testimonial-sideimage">
            <img src="./assets/images/testimonial-sideimage.png" alt="" class="img-fluid">
        </figure>
    </div>
    <!-- Partner -->
    <div class="partner-section"> 
        <div class="container">
            <div class="partner" data-aos="fade-up">
                <ul class="mb-0 list-unstyled">
                    <li>
                        <figure class="mb-0 partner1 img1">
                            <img class="img-fluid" src="./assets/images/partner1.png" alt="">
                        </figure>
                    </li>
                    <li>
                        <figure class="mb-0 partner1 partner2 img2">
                            <img class="img-fluid" src="./assets/images/partner2.png" alt="">
                        </figure>
                    </li>
                    <li class="img-mb">
                        <figure class="mb-0 partner1 partner3 img3">
                            <img class="img-fluid" src="./assets/images/partner3.png" alt="">
                        </figure>
                    </li>
                    <li>
                        <figure class="mb-0 partner1 partner4 img4">
                            <img class="img-fluid" src="./assets/images/partner4.png" alt="">
                        </figure>
                    </li>
                    <li>
                        <figure class="mb-0 partner1 partner5 img5">
                            <img class="img-fluid" src="./assets/images/partner5.png" alt="">
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--FAQ / Need section-->
<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="faq_content" data-aos="fade-right">
                    <h5>S.S.S</h5>
                    <h2>Sıkça Sorulan Sorular</h2>
                    <div class="faq">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordian-section-inner position-relative">
                                    <div class="accordian-inner">
                                        <div id="accordion1">
                                            <div class="accordion-card">
                                                <div class="card-header" id="headingOne">
                                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        <h4>Hizmetinizin fiyatlandırma modeli nedir? </h4>
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                                    <div class="card-body">
                                                        <p class="text-size-18 text-left mb-0">Müşterilerimizin ihtiyaçlarına ve kullanım süresine bağlı olarak değişen esnek fiyatlandırma seçenekleri sunuyoruz. Hizmetimizin maliyeti, kullanıcıların tercih ettiği özelliklere, takip edilecek nesne sayısına ve hizmet süresine göre belirlenir.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-card">
                                                <div class="card-header" id="headingTwo">
                                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <h4>Hizmetinizde sunduğunuz teknik <br> destek nedir?</h4>
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                                    <div class="card-body">
                                                        <p class="text-size-18 text-left mb-0">Müşterilerimize kesintisiz bir deneyim sunmak için 7/24 teknik destek hizmeti sağlıyoruz. Uzman teknik ekip üyelerimiz, herhangi bir sorunuz veya yardıma ihtiyacınız olduğunda size yardımcı olmak için hazır. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-card">
                                                <div class="card-header" id="headingThree">
                                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <h4>Hizmetinizin gizlilik politikası nedir?</h4>
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                                    <div class="card-body">
                                                        <p class="text-size-18 text-left mb-0">Müşteri gizliliği ve veri güvenliği bizim için önceliklidir. Gizlilik politikamız, müşteri verilerinin nasıl işlendiği, saklandığı ve korunduğu hakkında detaylı bilgi sunar. Bu politikayı inceleyerek veri güvenliği hakkında daha fazla bilgi edinebilirsiniz.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-card">
                                                <div class="card-header" id="headingFour">
                                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        <h4>Ödeme yöntemleriniz nedir?</h4>
                                                    </a>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                                    <div class="card-body">
                                                        <p class="text-size-18 text-left mb-0">Ödeme kolaylığı sağlamak adına çeşitli ödeme yöntemlerini kabul ediyoruz. Kredi kartları, banka kartları ve elektronik ödeme sistemleri gibi yaygın olarak kullanılan yöntemlerin yanı sıra, banka havalesi gibi alternatif ödeme seçenekleri de mevcuttur.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-card faq-mb">
                                                <div class="card-header" id="headingFive">
                                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        <h4>Hizmetiniz, hangi platformlarla uyumlu ve entegre edilebilir?</h4>
                                                    </a>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                                    <div class="card-body">
                                                        <p class="text-size-18 text-left mb-0">Sistemimiz, farklı işletim sistemleri ve platformlarla uyumlu olacak şekilde tasarlanmıştır. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="need-section">
                    <div class="need_content"> 
                        <h3>Bize Ulaşın</h3>
                        <p class="text-size-16">Tek Tıkla Bizimle İletişime Geçin</p>
                        <form id="contactpage" method="POST" action="./contact-form.php">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-0">    
                                    <input type="text" class="form_style" placeholder="Ad:" name="name"> 
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                    <input type="email" class="form_style" placeholder="Email:" name="emailid">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                    <input type="tel" class="form_style" placeholder="Telefon Numarası:" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class=" form-group mb-0">    
                                    <textarea class="form_style" placeholder="Mesaj" rows="3" name="msg"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="manage-button text-center">
                                <button type="submit" class="submit_now text-decoration-none">Gönder<i class="circle fa-regular fa-angle-right"></i></button>
                            </div>
                        </form>
                        <figure class="faq-image mb-0">
                            <img src="./assets/images/faq-image.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Footer -->
<section class="footer-section">
    <div class="container">
        <figure class="footer-sideshape mb-0">
            <img src="./assets/images/footer-sideshape.png" alt="" class="img-fluid">
        </figure>
        <div class="middle-portion">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                    <a href="./index.php">
                        <figure class="footer-logo">
                            <img src="./assets/images/logo.png" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <p class="text-size-16 footer-text text-white"></p>
                    <ul class="list-unstyled mb-0 social-icons">
                        <li class="circle"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="circle"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="circle"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 col-12 d-md-block d-none">
                    <div class="links">
                        <h4 class="heading text-white">Sayfalar</h4>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa-solid fa-angle-right"></i><a href="./index.php" class=" text-size-16 text text-decoration-none">Anasayfa</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./about.html" class=" text-size-16 text text-decoration-none">Hakkımızda</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./service.html" class=" text-size-16 text text-decoration-none">Hizmetler</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./projects.html" class=" text-size-16 text text-decoration-none">Projeler</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./contact.html" class=" text-size-16 text text-decoration-none">Bize Ulaşın</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-12 col-12 d-lg-block d-none">
                    <div class="links list-pd">
                        <h4 class="heading text-white">Hizmetlerimiz</h4>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa-solid fa-angle-right"></i><a href="./service.html" class=" text-size-16 text text-decoration-none">Nesne Takibi</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./team.html" class=" text-size-16 text text-decoration-none">Takımımız</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./faq.html" class=" text-size-16 text text-decoration-none">S.S.S</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-sm-block">
                    <div class="icon">
                        <h4 class="heading text-white">Bize Ulaşın</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="text">
                                <i class="fa fa-phone fa-icon footer-location"></i>
                                <a href="tel:+4733378901" class="mb-0 text text-decoration-none text-size-16">+90 5464537257</a></li>
                            <li class="text">
                                <i class="fa fa-envelope fa-icon footer-location"></i>
                                <a href="mailto:info@repay.com" class="mb-0 text text-decoration-none text-size-16">cem19@gmail.com</a></li>
                            <li class="text">
                                <i class="fa-solid fa-location-dot footer-location footer-location3"></i>
                                <p class="text-size-16">Konak 3590, İzmir,Türkiye</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="fixed-form-container">
            <div class="image">
                <figure class="footer-image mb-0">
                    <img src="./assets/images/footer-image.png" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="body">
                <form id="contactpage1" method="POST" action="./contact-form.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name:" name="name"> 
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email:" name="emailid">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone:" name="phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form_style" placeholder="Message" rows="3" name="msg"></textarea>
                    </div>
                    <button type="submit" class="submit_now text-decoration-none">Submit Now</button>
                </form>
            </div>
        </div> -->
</section>

</div>
</div>
</div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="ion-ios-close"></span>
        </button>
    </div>
    <div class="modal-body p-4 p-md-5">
        <div class="icon d-flex align-items-center justify-content-center">
            <span class="ion-ios-person"></span>
        </div>
        <h3 class="text-center mb-4">Giriş Yap</h3>
        <form action="login.php" method="post" class="login-form"> <!-- action ve method belirlendi -->
            <div class="form-group">
                <input type="text" class="form-control rounded-left" placeholder="Kullanıcı Adı" name="username"> <!-- name belirlendi -->
            </div>
            <div class="form-group d-flex">
                <input type="password" class="form-control rounded-left" placeholder="Şifre" name="password"> <!-- name belirlendi -->
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Giriş Yap</button>
            </div>
            <div class="form-group d-md-flex">
                <div class="form-check w-50">
                    <label class="custom-control fill-checkbox">
                        <input type="checkbox" class="fill-control-input">
                        <span class="fill-control-indicator"></span>
                        <span class="fill-control-description">Beni Hatırla</span>
                    </label>
                </div>
                <div class="w-50 text-md-right">
                    <a href="#">Şifremi Unuttum</a>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer justify-content-center">
        <p>Hesabınız yok mu? <a href="#registermodal" data-toggle="modal" data-dismiss="modal">Hesap Oluştur</a></p>
    </div>
</div>
</div>
</div>

<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Kapat">
            <span aria-hidden="true" class="ion-ios-close"></span>
        </button>
    </div>
    <div class="modal-body p-4 p-md-5">
        <div class="icon d-flex align-items-center justify-content-center">
            <span class="ion-ios-person-add"></span>
        </div>
        <h3 class="text-center mb-4">Kayıt Ol</h3>
        <form action="connect.php" method="post" class="kayit-form">
            <div class="form-group">
                <input type="text" class="form-control rounded-left" placeholder="Kullanıcı Adı" name="username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control rounded-left" placeholder="E-posta" name="email">
            </div>
            <div class="form-group d-flex">
                <input type="password" class="form-control rounded-left" placeholder="Şifre" name="password">
            </div>
            <div class="form-group d-flex">
                <input type="password" class="form-control rounded-left" placeholder="Şifreyi Onayla" name="passwordconfirm">
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Kayıt Ol</button>
            </div>
        </form>
    </div>
    <div class="modal-footer justify-content-center">
        <p>Zaten üye misiniz? <a href="#girisModal" data-toggle="modal" data-dismiss="modal">Giriş Yapın</a></p>
    </div>
    </div>
    </div>
    </div>



<!-- Latest compiled JavaScript -->
<script src="assets/js/jquery-3.6.0.min.js"> </script>
<script src="assets/js/bootstrap.min.js"> </script>
<script src="assets/js/video_link.js"></script>
<script src="./assets/js/video.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/animation_links.js"></script>
<script src="assets/js/animation.js"></script>
</body>
</html>