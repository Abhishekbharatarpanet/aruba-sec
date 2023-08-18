<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'Seo.php'; ?>
  <title><?php echo $page_title; ?></title>

  <meta name="description" content="<?php echo $meta_discription; ?>">

  <meta name="keywords" content="<?php echo $meta_keywords; ?>">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

  <header>
    <div class="head-top">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-4 col-md-6">
            <ul class="top_contact d-flex align-content-between align-items-center gap-3 my-2 pl-0">
              <li><a href><img src="assets/images/phone.svg" class="mr-1" alt>+35
                  89567240</a></li>
              <li><a href><img src="assets/images/email.svg" class="mr-2" alt>bookaruba@aruba.com</a></li>
            </ul>
          </div>
          <div class="col-1">
            <ul class="top-social d-flex align-content-center justify-content-between gap-3 my-2">
              <li><a href><img src="assets/images/insta.svg" alt></a></li>
              <li><a href><img src="assets/images/twiter.svg" alt></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary py-0 navbar-bg">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-4">
            <li class="nav-item">
              <a class="nav-link <?php echo $filename == 'index.php' ? 'active' : '';  ?>" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $filename == 'about.php' ? 'active' : '';  ?>" aria-current="page" href="about.php">About Us</a>
            </li>
            <li class="nav-item dropdown has-childs">
              <a class="nav-link dropdown-toggle <?php echo $filename == 'category.php' ? 'active' : '';  ?>" href="category.php">Aruba Tours</a>
              <img class="dropdown-img" data-show="hide" src="assets/images/drop-down-arrow.png" alt>
              <ul class="dropdown-menu hovered-child">
                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'atv-tours.php' ? 'active' : '';  ?>" href="atv-tours.php"> Aruba ATV Tours </a>
                </li>
                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'utv-tours.php' ? 'active' : '';  ?>" href="utv-tours.php">
                    Aruba UTV Tours
                  </a>
                </li>

                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'aruba-private-ac-jeep-tours.php' ? 'active' : '';  ?>" href="aruba-private-ac-jeep-tours.php">
                    Aruba Private AC Jeep Tours
                  </a>
                </li>

                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'aruba-private-open-air-safari-jeep-tours.php' ? 'active' : '';  ?>" href="aruba-private-open-air-safari-jeep-tours.php">
                    Aruba Private Open-Air Safari Jeep Tours
                  </a>
                </li>
                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'aruba-outback-safari-jeeptours.php' ? 'active' : '';  ?>" href="aruba-outback-safari-jeeptours.php">
                    Aruba Outback Safari Jeep Tours
                  </a>
                </li>

                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'aruba-catamaran-tours.php' ? 'active' : '';  ?>" href="aruba-catamaran-tours.php">
                    Aruba Catamaran Tours
                  </a>
                </li>

                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'aruba-private-catamaran-tours.php' ? 'active' : '';  ?>" href="aruba-private-catamaran-tours.php">
                    Aruba Private Catamaran Tours
                  </a>
                </li>

                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'aruba-private-boats-tours.php' ? 'active' : '';  ?>" href="aruba-private-boats-tours.php">
                    Aruba Boat Tours
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown has-childs">
              <a class="nav-link dropdown-toggle  <?php echo $filename == 'rentals.php' ? 'active' : '';  ?>" href="rentals.php">Aruba Rentals</a>
              <img class="dropdown-img" src="assets/images/drop-down-arrow.png" alt>
              <ul class="dropdown-menu hovered-child">
                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'aruba-atv-rentals-single-seater.php' ? 'active' : '';  ?>" href="aruba-atv-rentals-single-seater.php"> Aruba ATV Rentals - Single-Seater</a>
                </li>
                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'aruba-atv-rentals-double-seater.php' ? 'active' : '';  ?>" href="aruba-atv-rentals-double-seater.php">Aruba ATV Rentals - Double-Seater</a>
                </li>
                <li class="dropdown-item">
                  <a  class="<?php echo $filename == 'aruba-utv-rentals-two-seater.php' ? 'active' : '';  ?>" href="aruba-utv-rentals-two-seater.php"> Aruba UTV Rentals - Two-Seater </a>
                </li>
                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'aruba-utv-rentals-four-seater.php' ? 'active' : '';  ?>"  href="aruba-utv-rentals-four-seater.php"> Aruba UTV Rentals - Four-Seater </a>
                </li>
                <li class="dropdown-item">
                  <a class="<?php echo $filename == 'aruba-jet-ski-rentals.php' ? 'active' : '';  ?>"  href="aruba-jet-ski-rentals.php">Aruba Jet Ski Rentals</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Our Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Our Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

