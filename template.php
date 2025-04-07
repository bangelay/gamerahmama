<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= $title; ?> - <?= $web['title']; ?></title>

        <meta name="description" content="<?= strip_tags($web['description']); ?>">
        <meta name="keywords" content="<?= strip_tags($web['keywords']); ?>">

        <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/<?= $web['logo']; ?>">
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/simplebar/css/simplebar.css">
       


        <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <link href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

       <style>
        /* Global Reset & Theme */
body {
  font-family: 'Poppins', sans-serif;
  background-color: #121212;
  color: #ffffff;
  margin: 0;
  padding: 0;
}

a {
  text-decoration: none;
  transition: all 0.3s ease;
}

a:hover {
  opacity: 0.8;
}

/* Navbar */
.custom-navbar {
  background-color: #1f1f1f;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  padding: 10px 15px;
}

.custom-toggler {
  color: #ffffff;
  font-size: 1.2rem;
}

.navbar-brand img {
  height: 40px;
}

.nav-link {
  transition: all 0.3s ease;
}

.nav-link:hover {
  background-color: #333333;
  border-radius: 6px;
  padding-left: 10px;
}

/* Offcanvas Menu */
.custom-offcanvas {
  background-color: #1a1a1a;
  width: 260px;
}

.custom-close-btn {
  color: white;
  filter: invert(1);
}

.custom-font {
  font-size: 16px;
}

/* Social Icons */
.social-icons a {
  margin-right: 15px;
  font-size: 20px;
  transition: transform 0.2s;
}

.social-icons a:hover {
  transform: scale(1.2);
  color: #FFD700;
}

/* Footer */
.bg-footer {
  background-color: #0e0e0e;
  color: #ccc;
}

.bg-footer h5 {
  color: #fff;
}

.menu-list li {
  list-style: none;
  margin-bottom: 10px;
}

.menu-list li a {
  color: #ccc;
  font-size: 15px;
}

.menu-list li a:hover {
  color: #fff;
}

/* Floating Button */
.fab-container {
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 999;
}

.fab {
  width: 55px;
  height: 55px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 6px 10px rgba(0,0,0,0.3);
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.fab-options {
  list-style-type: none;
  margin: 0;
  padding: 0;
  position: absolute;
  bottom: 70px;
  right: 0;
  display: none;
}

.fab:hover + .fab-options,
.fab-options:hover {
  display: block;
}

.fab-icon-holder {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Region & App */
.nav-item span {
  font-weight: bold;
  margin-bottom: 5px;
  display: block;
}

/* Responsive */
@media (max-width: 768px) {
  .navbar-brand img {
    height: 30px;
  }
  .fab-container {
    bottom: 20px;
    right: 20px;
  }
}

       </style>

        <?php $this->renderSection('css'); ?>
    </head>
    <body>
        <div id="wrapper">
        <nav class="navbar fixed-top custom-navbar">
        <div class="container-fluid d-flex align-items-center">
          <div class="d-flex align-items-center">
            <button class="navbar-toggler p-0 border-0 custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand ms-2 text-white" href="#"><img src="img/logo.webp" alt=""></a>
          </div>
          <div class="offcanvas offcanvas-start custom-offcanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              
              <button type="button" class="btn-close custom-close-btn " data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item mt-3">
                        <span class="nav-link text-white custom-font">Selamat Datang</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white d-flex align-items-center custom-font" aria-current="page" href="#">
                          <i class="fa-solid fa-gamepad me-2"></i> Cari Game
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active text-white d-flex align-items-center custom-font" aria-current="page" href="#">
                          <i class="fa-solid fa-newspaper me-2"></i> Berita & Promo
                        </a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link active text-white d-flex align-items-center custom-font" aria-current="page" href="#">
                          <i class="fa-solid fa-circle-info me-2"></i> Syarat & Ketentuan
                        </a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link active text-white d-flex align-items-center custom-font" aria-current="page" href="#">
                          <i class="fa-solid fa-receipt me-2"></i> Riwayat Order
                        </a>
                    </li>
                
                    <!-- Help & Support -->
                    <li class="nav-item mt-3">
                        <span class="nav-link text-white custom-font">Help & Support</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center custom-font" href="mailto:cs@tokogame.com">
                          <i class="fa-solid fa-envelope me-2"></i> cs@tokogame.com
                        </a>
                    </li>
                
                    <!-- Partnerships -->
                    <li class="nav-item mt-3">
                        <span class="nav-link text-white custom-font">Partnerships</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center custom-font" href="mailto:partnerships@tokogame.com">
                          <i class="fa-solid fa-handshake me-2"></i> partnerships@tokogame.com
                        </a>
                    </li>
                
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <!-- Social Media -->
                        <li class="nav-item mt-3">
                            <span class="nav-link text-white custom-font">Social Media</span>
                        </li>
                        <li class="nav-item">
                            <div class="social-icons">
                                <a href="#" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="text-white"><i class="fa-brands fa-tiktok"></i></a>
                                <a href="#" class="text-white"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" class="text-white"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </li>
                    </ul>
                     
                    <!-- Download App -->
                    <li class="nav-item mt-3">
                        <span class="nav-link text-white custom-font">Download Android App</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center custom-font" href="#">
                          <i class="fa-brands fa-google-play me-2"></i> Google Play Store
                        </a>
                    </li>
                
                    <!-- Region -->
                    <li class="nav-item mt-3">
                        <span class="nav-link text-white custom-font">Region</span>
                    </li>
                </ul>
                
                
            </div>
          </div>
        </div>
      </nav>




</script>

            <?php $this->renderSection('content'); ?>

            <footer id="aboutus" class="bg-footer">
                <img src="<?= base_url(); ?>/assets/images/waves.png" alt="" width="100%" hidden>
                <div style="background: var(--warna_2);margin-top: -4px;">
                    <div class="pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <img src="<?= base_url(); ?>/assets/images/<?= $web['logo']; ?>" style="height:55px" alt="logo icon" class="mb-3">
                                    <h5 class="mb-2"><?= $web['name']; ?></h5>
                                    <?= $web['description']; ?>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <h5 class="pb-2">Halaman</h5>
                                    <ul class="menu-list">
                                        <li><a href="<?= base_url(); ?>/">Halaman Utama</a></li>
                                        <li><a href="<?= base_url(); ?>/payment">Cek Pesanan</a></li>
                                        <li><a href="<?= base_url(); ?>/price">Daftar Harga</a></li>
                                        <li><a href="<?= base_url(); ?>/syarat-ketentuan">Syarat & Ketentuan</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <h5 class="pb-2">Sosial Media Kami</h5>
                                    <a href="<?= $sm['wa']; ?>" style="font-size: 35px;">
                                        <i class="fa fa-whatsapp pr-4"></i>
                                    </a>
                                    <a href="<?= $sm['ig']; ?>" style="font-size: 35px;">
                                        <i class="fa fa-instagram pr-4"></i>
                                    </a>
                                    <a href="<?= $sm['yt']; ?>" style="font-size: 35px;" hidden>
                                        <i class="fa fa-youtube pr-4"></i>
                                    </a>
                                    <a href="<?= $sm['fb']; ?>" style="font-size: 35px;" hidden>
                                        <i class="fa fa-facebook pr-4"></i>
                                    </a>
                                    <a href="<?= $sm['tw']; ?>" style="font-size: 35px;">
                                         <img src="https://lsgtopup.com/assets/images/tik-tok.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="fab-container">
                    <div class="fab fab-icon-holder" style="background-color:#FFF; padding:5px">
                      <img src="https://aoshimarket.com/assets/img/logos/callcenter.png" class="img-fluid2" alt="">
                    </div>
                    
                    <ul class="fab-options">
                      <li>
                        <a href="<?= $sm['ig']; ?>" class="text-decoration-none" target="_blank">
                        <div class="fab-icon-holder" style="background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);">
                        <i class="fa fa-instagram"></i>
                        </div>
                      </a>
                      </li>
                      <li>
                        <a href="<?= $sm['wa']; ?>" class="text-decoration-none" target="_blank">
                        <div class="fab-icon-holder" style="background-color: #25D366;">
                        <i class="fa fa-whatsapp"></i>
                        </div>
                        </a>
                      </li>
                    </ul>
                 </div>
                 
                <div class="bg-theme1 text-center pb-4"> Copyright © 2022 <?= $web['name']; ?>. All Rights Reserved </div>
            </footer>
        </div>

        <a href="javaScript:void();" class="back-to-top">
            <i class="fa fa-angle-double-up"></i>
        </a>

        <!--End wrapper-->
        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- simplebar js -->
        <script src="<?= base_url(); ?>/assets/plugins/simplebar/js/simplebar.js"></script>
        <!-- Custom scripts -->
        <script src="<?= base_url(); ?>/assets/js/app-script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@activix/double-scroll@1.0.2/jquery.doubleScroll.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
        <!--Select Plugins Js-->
        <script src="<?= base_url(); ?>/assets/plugins/select2/js/select2.min.js"></script>
        <!--Data Tables js-->
        <script src="<?= base_url(); ?>/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
       <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
       <script src="https://tokovalorant.com/assets/js/promobox.js"></script>
       <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
        <script src="https://tokovalorant.com/assets/js/promobox.js"></script>


        <script>
            // $(document).ready(function() {
            //     $('#default-datatable').DataTable();
            // });

            function openNav() {
                document.getElementById("mySidenav").style.width = "300px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
        <script>
            <?php if ($admin !== false): ?>
            function hapus(link) {
                Swal.fire({
                    title: 'Anda yakin?',
                    text: "Data akan dihapus permanen",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Tetap hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                    }
                });
            }
            <?php endif; ?>

        </script>
        
        <script>
    function goBack() {
        window.history.back();
    }
</script>
        <?php $this->renderSection('js'); ?>
    </body>
</html>