<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GTN tv</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?=base_url()?>/public/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url()?>/public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>/public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url()?>/public/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                   <a href="tel:+254725737228"><i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i> </a>
                    <h3 class="mb-0"> 0725737228</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand ms-lg-5">
                      <img src="<?=base_url()?>/public/assets/img/gtn.png" height="50" width="">

                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
        <img src="<?=base_url()?>/public/assets/img/gtn1.png" height="50" width="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="<?=base_url('gtntv_news')?>" class="nav-item nav-link">News</a>
                <a href="<?=base_url('gtntv_shows')?>" class="nav-item nav-link">Tv shows</a>
                <a href="#" class="nav-item nav-link">Sports</a>
             
                <a href="<?=base_url('contact_us')?>" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
             
 <div>
  <div style="position:relative;padding-top:56.25%;">
    <iframe src="https://goliveafrica.media/live/1/GTNTV?embed=1" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay"
      style="position:absolute;top:0;left:0;width:100%;height:88%;"></iframe>
  </div>
</div>

                </div>
              
            </div>
        
         
        </div>
    </div>
    <!-- Carousel End -->


  
    <!-- Banner Start -->

 


    <!-- Facts Start -->
    

  


    <!-- Features Start -->




    

    <?= $this->include('layouts/footer') ?>
    


   


    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>/public/assets/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>/public/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url()?>/public/assets/lib/counterup/counterup.min.js"></script>
    <script src="<?=base_url()?>/public/assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>/public/assets/js/main.js"></script>
</body>

</html>