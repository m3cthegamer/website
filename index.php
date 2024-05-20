
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Anasayfa | BCE</title>
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
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
<div class="banner_outer">
    <header class="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="./index.php"><figure class="mb-0 banner-logo"><img src="./assets/images/haslogo.png" alt="" class="img-fluid"></figure></a>
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
                            <a class="nav-link" href="./projects.php">Projeler</a>
                        </li>
        
                        <li class="nav-space nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> Ekstra </a>
                            <div class="dropdown-menu drop-down-content">
                            <ul class="list-unstyled drop-down-pages">
                                <li class="nav-item">
                                <a class="dropdown-item nav-link" href="./market.php">Market</a>
                                </li>
                                <li  class="nav-item">
                                    <a class="dropdown-item nav-link" href="./faq.html">S.S.S</a>
                         </li>
                            </ul>
                        </div>
                            </li>
                        <li class="nav-space nav-item dropdown">
    <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false"><img src="assets/images/profile-picture.png"  style="max-width: 30px; max-height: 30px;">
  </a>
    <div class="dropdown-menu drop-down-content">
        <ul class="list-unstyled drop-down-pages">
        <?php if (!isset($_COOKIE['user'])): ?>
    <li class="nav-item">
        <a class="dropdown-item nav-link" id="loginButton" type="button" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#loginModal">Oturum Aç</a>
    </li>
<?php else: ?>
    <li class="nav-item">
    <a class="dropdown-item nav-link" id="logoutButton" type="button" class="btn btn-primary py-3 px-4" href="javascript:void(0);" onclick="logout()">Çıkış</a>
    </li>
<?php endif; ?>

        </ul>
    </div>
</li>
                                
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lets_talk" href="./contact.php">Bize Ulaşın<i class="circle fa-regular fa-angle-right"></i></a>
                    </li>
                    </ul>
                    
                </div>
            </nav>
        </div>
    </header>
    <figure class="banner-sideshape mb-0">
        <img src="./assets/images/banner-sideshape.png" alt="" class="img-fluid">
    </figure>

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
                    <a class="lets_talk text-decoration-none" href="./contact.php">Bize Ulaşın<i class="circle fa-regular fa-angle-right"></i></a>   
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
<section class="about-section">
    <div class="container">
    <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="about_wrapper">
                <figure class="mb-0 about-image1">
                    <img src="./assets/images/aboutimage1.png" alt="" class="img-fluid">
                </figure> 
                    <figure class="mb-0 about-image2">
                        <img src="./assets/images/aboutperson.png" alt="" class="img-fluid">
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
                                    <h4>Makine Öğrenimi</h4>
                                    <p class="text-size-16 mb-2">Makine öğrenimi yöntemleriyle nesnelerin...</p>
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
                                <a class="read_more text-decoration-none" href="./service.html">Daha Fazla</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="box-top">
                                <div class="service-box">
                                    <figure class="service-analysicon">
                                        <img src="./assets/images/service-analysicon.png" alt="" class="img-fluid">
                                    </figure>
                                    <h4>Tahmin Analizi</h4>
                                    <p class="text-size-16 mb-2">Yapay zeka ile nesne takibinde,tahminsel analizler...</p>
                                    <a class="read_more text-decoration-none" href="./service.html">Daha Fazla</a>
                                </div>
                            </div>
                           </div>
                       </div>
                    </div>
                     </div>
                     </div>
                   </div>
</section>
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
                    <h5>Neden Bizi Tercih Etmelisiniz?</h5>
                    <h2 class="text-white">Ekibimizle güvenilir yapay zeka ile nesne takibi çözümleri sunuyoruz.</h2>
                    <p class="text-white text-size-18">Yapay zeka ile nesne takibi konusunda alanında gelişmekte olan programcılardan oluşan bir ekiple çalışıyoruz</p>
                    <ul class="list-unstyled mb-0">
                        <li class="text-white text text-size-18"><i class="circle fa-regular fa-angle-right"></i>Teknolojide Uzmanlık ve Özelleştirilmiş Çözümler</li>
                        <li class="text-white text text-size-18"><i class="circle fa-regular fa-angle-right"></i>Kalite ve Güvenilirlik</li>
                        <li class="text-white text text1 text-size-18"><i class="circle fa-regular fa-angle-right"></i>Sürekli Destek ve İletişim</li>
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



<section class="testimonial-section">
    <div class="container">
        <div class="row position-relative">
            <div class="col-12">
                <div class="heading">
                    <h5>Referanslar</h5>
                    <h2>Müşteri Yorumları</h2>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial_content">
                                <div class="content-box">
                                    <p class="h4">“Im very lucky to have a met you guys. HERSEY ICIN TESEKKURLER!!!!”</p>
                                    <figure class="testimonial-image mb-0">
                                        <img src="./assets/images/client-avatar.png" alt="" class="img-fluid">
                                    </figure>
                                    <span class="text-size-18">John Bale</span>
                                    <span class="text-size-16 mb-0">Yabancı</span>
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
                                    <p>“Harika bir deneyim oldu benim için,her şey için teşekürler.
                                        ”</p>
                                    <figure class="testimonial-image mb-0">
                                        <img src="./assets/images/client-avatar.png" alt="" class="img-fluid">
                                    </figure>
                                    <span class="text-size-18">Beril Duman</span>
                                    <span class="text-size-16 mb-0">Bilgi Verilmedi</span>
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
                            <span class="sr-only">Sonraki</span>
                        </a>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="fa-solid fa-angle-left"></i>
                            <span class="sr-only">Önceki</span>
                        </a>
                    </div>
                </div>
                </div>
        </div>
        <figure class="mb-0 testimonial-sideimage">
            <img src="./assets/images/testimonial-sideimage.png" alt="" class="img-fluid">
        </figure>
    </div>
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
                    </div>
                </div>
               </div>
               </div>
</section>
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
                            <img src="./assets/images/haslogo.png" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <p class="text-size-16 footer-text text-white"></p>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 col-12 d-md-block d-none">
                    <div class="links">
                        <h4 class="heading text-white">Sayfalar</h4>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa-solid fa-angle-right"></i><a href="./index.php" class=" text-size-16 text text-decoration-none">Anasayfa</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./about.html" class=" text-size-16 text text-decoration-none">Hakkımızda</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./service.html" class=" text-size-16 text text-decoration-none">Hizmetler</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./projects.php" class=" text-size-16 text text-decoration-none">Projeler</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./contact.php" class=" text-size-16 text text-decoration-none">Bize Ulaşın</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-12 col-12 d-lg-block d-none">
                    <div class="links list-pd">
                        <h4 class="heading text-white">Hizmetlerimiz</h4>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa-solid fa-angle-right"></i><a href="./service.html" class=" text-size-16 text text-decoration-none">Nesne Takibi</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./faq.html" class=" text-size-16 text text-decoration-none">Referanslar</a></li>
                            <li><i class="fa-solid fa-angle-right"></i><a href="./market.php" class=" text-size-16 text text-decoration-none">Market</a></li>
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
        <form action="login.php" method="post" class="login-form"> 
            <div class="form-group">
                <input type="text" class="form-control rounded-left" placeholder="Kullanıcı Adı" name="username"> 
            </div>
            <div class="form-group d-flex">
                <input type="password" class="form-control rounded-left" placeholder="Şifre" name="password"> 
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Giriş Yap</button>
            </div>
            <div class="form-group d-md-flex">
                <div class="form-check w-50">
                    <label class="custom-control fill-checkbox">
                    </label>
                </div>
                <div class="w-50 text-md-right">
                <a href="#forgotPasswordModal" data-toggle="modal" data-dismiss="modal">Şifremi Unuttum   </a>
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
        <p>Zaten üye misiniz? <a href="#loginModal" data-toggle="modal" data-dismiss="modal">Giriş Yapın</a></p>
    </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="forgotPasswordModalLabel">Şifremi Unuttum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="forgotpassword.php" method="post">
                    <div class="form-group">
                        <label for="forgotEmail">E-posta Adresiniz:</label>
                        <input type="email" class="form-control" id="forgotEmail" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Şifre Sıfırlama Bağlantısı Gönder</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="resetPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resetPasswordModalLabel">Şifre Sıfırlama</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" id="resetEmail" name="email" value="">
                    <input type="hidden" id="resetToken" name="token" value="">
                    <div class="form-group">
                        <label for="newPassword">Yeni Şifre:</label>
                        <input type="password" class="form-control" id="newPassword" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Yeni Şifre (Tekrar):</label>
                        <input type="password" class="form-control" id="confirmPassword" name="passwordconfirm" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Şifreyi Değiştir</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noAccountFound" tabindex="-1" role="dialog" aria-labelledby="noAccountFoundLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="noAccountFoundLabel">Kayıtlı kullanıcı bulunamadı.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>E-Posta veya Şifrenizi Tekrar Deneyin.</p>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="loginSuccess" tabindex="-1" role="dialog" aria-labelledby="loginSuccessLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginSuccessLabel">Hoş Geldiniz!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php if (isset($_COOKIE['user'])): ?>
        <p>Hoş geldiniz, <?php echo htmlspecialchars($_COOKIE['user']); ?>!</p>
    <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="notVerified" tabindex="-1" role="dialog" aria-labelledby="notVerifiedLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notVerifiedLabel">Hesap Onayı Gerekli</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Hesabınız henüz onaylanmamış. Lütfen hesabınızı onaylamak için e-postanıza gönderilen bağlantıya tıklayın.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Verified" tabindex="-1" role="dialog" aria-labelledby="VerifiedLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="VerifiedLabel">Hesap Onayı Başarılı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Hesabınız başarıyla onaylandı. Artık tüm özelliklerden yararlanabilirsiniz.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerSuccess" tabindex="-1" role="dialog" aria-labelledby="registersuccessLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registersuccessLabel">Kayıt Başarılı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Yeni kayıt başarıyla oluşturuldu. Lütfen e-postanızı kontrol edin ve üyeliğinizi aktive edin.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginForPurchase" tabindex="-1" role="dialog" aria-labelledby="loginForPurchaseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginForPurchaseModalLabel">Dikkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Satın alım yapmak için giriş yapın.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Giriş Yap</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="existingUser" tabindex="-1" role="dialog" aria-labelledby="existingUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="existingUserModalLabel">Hata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bu e-posta adresiyle zaten kayıtlı bir kullanıcı bulunmaktadır.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="existingUsername" tabindex="-1" role="dialog" aria-labelledby="existingUsernameModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="existingUsernameModalLabel">Hata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bu kullanıcı adı zaten kullanılıyor.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Hata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Beklenmedik Bir Hata Oluştu.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="passwordResetSent" tabindex="-1" role="dialog" aria-labelledby="passwordResetSentLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordResetSentLabel">Başarılı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Şifre sıfırlama bağlantısı e-posta adresinize gönderildi. Lütfen e-postanızı kontrol edin.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="userNotFound" tabindex="-1" role="dialog" aria-labelledby="userNotFoundLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userNotFoundLabel">Hata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bu e-posta adresi ile kayıtlı bir kullanıcı bulunamadı.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="passwordUpdated" tabindex="-1" role="dialog" aria-labelledby="passwordUpdatedLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordUpdatedLabel">Başarılı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Şifre başarıyla güncellendi.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="passwordUpdateError" tabindex="-1" role="dialog" aria-labelledby="passwordUpdateErrorLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordUpdateErrorLabel">Hata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Şifre güncellenirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="successPurchase" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">İşlem Başarılı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bilgiler e-postanıza gönderildi.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>



    <script>
function logout() {
    window.location.href = "logout.php";
}
</script>




<script src="assets/js/jquery-3.6.0.min.js"> </script>
<script src="assets/js/bootstrap.min.js"> </script>
<script src="assets/js/video_link.js"></script>
<script src="./assets/js/video.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/animation_links.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/test.js"></script>


<?php
function showModal($modal_id) {
    echo "<script>$(document).ready(function() {
        $('#$modal_id').modal('show'); 
    });</script>";
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'noAccountFound') {
    showModal('noAccountFound');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'loginSuccess') {
    showModal('loginSuccess');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'notVerified') {
    showModal('notVerified');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'Verified') {
    showModal('Verified');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'registerSuccess') {
    showModal('registerSuccess');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'loginForPurchase') {
    showModal('loginForPurchase');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'existingUser') {
    showModal('existingUser');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'existingUsername') {
    showModal('existingUsername');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'error') {
    showModal('error');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'passwordResetSent') {
    showModal('passwordResetSent');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'userNotFound') {
    showModal('userNotFound');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'passwordUpdateError') {
    showModal('passwordUpdateError');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'passwordUpdated') {
    showModal('passwordUpdated');
}
if (isset($_GET['modal_id']) && $_GET['modal_id'] == 'successPurchase') {
    showModal('successPurchase');
}
?>

</body>
</html>