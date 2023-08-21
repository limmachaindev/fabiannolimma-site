<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="light">
<head>
  <title> <?= $nomeSite; ?> | <?= $pageDesc; ?> </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Sites meta Data -->
  <meta name="application-name" content="<?= $nomeSite; ?> - <?= $descSite; ?>">
  <meta name="author" content="<?= $nomeSite; ?>">
  <meta name="keywords" content="<?= $tagsSite; ?>">
  <meta name="description" content="<?= $descSite; ?>">

  <!-- OG meta data --
  <meta property="og:title"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, and Stocks Trading Business">
  <meta property="og:site_name" content=Bitrader>
  <meta property="og:url" content="index.html">
  <meta property="og:description"
    content="Welcome to Bitrader, the game-changing HTML template meticulously crafted to revolutionize your trading business. With its sleek and modern design, Bitrader provides a cutting-edge platform to showcase your expertise, attract clients, and stay ahead in the competitive trading markets.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/images/og.png">
  --->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <!-- main css for template -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!-- ===============>> light&dark switch start here <<================= -->
<div class="lightdark-switch d-none">
    <span class="dark-btn" id="btnSwitch"><img src="assets/images/icon/moon.svg" alt="light-dark-switchbtn" class="swtich-icon"></span>
</div>
<!-- ===============>> light&dark switch start here <<================= -->
<!-- ===============>> Header section start here <<================= -->
  <header class="header-section header-section">
    <div class="header-bottom">
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="./">
              <img class="dark" src="assets/images/logo/logo.png" style="height: 60px;" alt="logo">
            </a>
          </div>
          <!---- incluindo menu ---->
         <?php require_once('menu.php'); ?>
         <!---- incluindo menu ---->
          <div class="header-action">
            <div class="menu-area">
              <div class="header-btn">
                <a href="#" class="trk-btn trk-btn--border trk-btn--primary">
                  <span>Pedir orçamento</span>
                </a>
              </div>

              <!-- toggle icons -->
              <div class="header-bar d-lg-none header-bar--style1">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ===============>> Header section end here <<================= -->