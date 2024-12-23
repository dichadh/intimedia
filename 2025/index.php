<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Font Awesome Core Styles -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">
    
    <!-- Sharp Duotone Styles -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-light.css">
    
    <!-- Sharp Styles -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-light.css">
    
    <!-- Duotone Styles -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-light.css">
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


  </head>
  
  
  
  <body class="light-mode">
    
    <!--This is for custom CSS-->
    <style>
        .blurred {
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
        }
        #main-menu {
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 0; /* Jarak dari atas */
            z-index: 1000; /* Tetap di atas elemen lain */
        }
        
        .fixed-menu {
          position: fixed;
          top: 0;
          width: 100%;
          z-index: 1000;
        }


        .fs-body{
            font-size:12px;
        }
        .fs-news-title{
            font-size:16px;
        }
        .fs-heading{
            font-size:35px;
        }
        
        body.light-mode {
            background-color: #fff; /* Bootstrap light background */
            color: #212529; /* Bootstrap text color */
        }
        
        /* Dark Mode */
        body.dark-mode {
            background-color: #212529; /* Bootstrap dark background */
            color: #f8f9fa; /* Bootstrap light text */
        }
        
        /* Reading Mode */
        body.reading-mode {
            background-color: #f7f1e2; /* Warm reading mode background */
            color: #4a4a4a; /* Softer text for reading */
        }
        
        /* Styling for modal in dark mode */
        body.dark-mode .modal-content {
            background-color: #343a40; /* Dark modal background */
            color: #f8f9fa; /* Light text for contrast */
        }
        
        body.dark-mode .list-group-item {
            background-color: #343a40; /* Dark list item background */
            border-color: #495057; /* Slightly lighter border */
            color: #f8f9fa; /* Light text */
        }
        
        body.dark-mode .btn-close {
            filter: invert(1); /* Invert close button icon for visibility */
        }
        .searchModal:hover{
            cursor:text;
        }
        ul.suggest-ul-block{
         list-style: none;
         padding: 0;
        }
        ul.suggest-ul-block li{
          border-bottom:1px dotted rgba(0, 0, 0, 0.3);
          padding:5px 5px;
        }
        .zoom-artic {
            overflow: hidden;
            position: relative;
        }
        
        .zoomartic img {
            transition: all 0.4s ease-in-out 0s; /* Animasi transisi zoom */
        }
        
        .zoom-artic:hover img {
            transition: all 0.4s ease-in-out 0s; /* Animasi transisi zoom */
            transform: scale(1.2); /* Faktor zoom saat cursor mengarah ke gambar */
        }
        .bg-opacity-5{
            --bs-bg-opacity: 0.05;
        }
        /* Default Light Mode Styling */
        .searchForm {
            background-color: var(--bs-light); /* Warna latar terang */
            color: var(--bs-dark);            /* Warna teks gelap */
            border: 1px solid var(--bs-gray-300); /* Warna border */
            transition: all 0.3s ease;        /* Animasi transisi */
        }
        
        /* Hover Effect */
        .searchForm:hover {
            background-color: var(--bs-gray-200);
        }
        
        /* Dark Mode Styling */
        body.dark-mode .searchForm {
            background-color: var(--bs-dark); /* Warna latar gelap */
            color: var(--bs-light);           /* Warna teks terang */
            border: 1px solid var(--bs-gray-700); /* Warna border */
        }
        
        body.dark-mode .searchForm:hover {
            background-color: var(--bs-gray-800);
        }
        /* Reading Mode Styles */
        body.reading-mode .bg-secondary {
            background-color: #f5deb3; /* Contoh warna untuk reading mode */
            color: #333; /* Warna teks */
        }
        
        body.reading-mode .searchForm {
            background-color: #f5deb3; /* Warna latar belakang search bar */
            color: #333; /* Warna teks */
            border: 1px solid #ccc; /* Warna border */
        }
        
        body.reading-mode #main-menu {
            background-color: #f5deb3; /* Warna latar menu */
            color: #333; /* Warna teks menu */
        }
        /* Reading Mode: Transparent Nav Styles */
        body.reading-mode .bg-secondary {
            background-color: rgba(108, 117, 125, 0.75) !important; /* abu-abu semi transparan */
        }
        
        body.reading-mode .text-white {
            color: #fff !important;
        }
        
        /* Default (Light Mode) Mega Menu Styles */
        .main-ads{
            width:100%;
            max-width:1140px;
            height:150px;
            background:red;
        }
        :root {
          /* Light mode */
          --bs-primary: #21409a; /* Primary color */
          --bs-primary-rgb: 33, 64, 154; /* RGB untuk transparansi */
          --bs-primary-text: #ffffff; /* Warna teks di atas elemen berwarna primary */
          --bs-primary-hover: #0f276d; /* Hover color */
          --bs-primary-bg: #e8f0fe; /* Background dengan warna primary */
          --bs-nav-link-color: #21409a; /* Warna nav link */
          --bs-nav-link-hover-color: #0f276d; /* Warna nav link saat hover */
        
          --bs-megaMenu-bg : #fff;
          --bs-megaMenu-text : #272727;
          --bs-megaMenu-link : #1c45bf;
          --bs-megaMenu-hover : #0d2466 !important;
        }
        
        [class="dark-mode"] {
          /* Dark mode */
          --bs-primary: #21409a;
          --bs-primary-rgb: 33, 64, 154;
          --bs-primary-text: #ffffff;
          --bs-primary-hover: #5d6c97;
          --bs-primary-bg: #102a4c;
          --bs-nav-link-color: #818cab;
          --bs-nav-link-hover-color: #5d6c97;
          
          --bs-megaMenu-bg : #37404b;
          --bs-megaMenu-text : #b1b0b0;
          
          --bs-megaMenu-link : #7082b7;
          --bs-megaMenu-hover : #c5b58b;
            
        }
        
        [class="reading-mode"] {
          /* Reading mode */
          --bs-primary: #143a71;
          --bs-primary-rgb: 20, 58, 113;
          --bs-primary-text: #ffffff;
          --bs-primary-hover: #215aad;
          --bs-primary-bg: #f0f8ff;
          --bs-nav-link-color: #143a71;
          --bs-nav-link-hover-color: #215aad;
          
          --bs-megaMenu-bg : #5b6971;
          --bs-megaMenu-text : #ecf0f1;
          
          --bs-megaMenu-link :#fff0c9;
          --bs-megaMenu-hover : #5f667d !important;
        }
        .text-justify{
            text-align:justify;
        }
        /* Base styles using CSS variables set in :root for Light, Dark, and Reading Modes */
        #megaMenuFull {
            background-color: var(--bs-megaMenu-bg);  /* Use background from mode */
            color: var(--bs-megaMenu-text); /* Text color based on the current mode */
        }
        .nav-link{
            color: var(--bs-primary-text) !important; /* Active text color */
        }
        
        /* Custom dropdown-item styles */
        #megaMenuFull .dropdown-item {
            color: var(--bs-megaMenu-text) !important; /* Base text color for dropdown items */
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        /* Dropdown item hover effects */
        #megaMenuFull .dropdown-item:hover {
            background-color: var(--bs-primary-hover); /* Hover color based on the mode */
            color: var(--bs-primary-text) !important; /* Text color on hover should remain readable */
        }
        
        /* Active dropdown item styles */
        #megaMenuFull .dropdown-item.active {
            background-color: var(--bs-primary); /* Active background from mode */
            color: var(--bs-primary-text) !important; /* Active text color */
        }
        
        /* Nav link styles within megaMenuFull */
        #megaMenuFull .nav-link {
            color: var(--bs-megaMenu-link ) !important; /* Color for nav-link text */
            text-decoration: none;
            transition: color 0.3s ease;
        }
        #megaMenuFull .nav-link:hover {
            color: var(--bs-megaMenu-hover) !important; /* Hover color for nav-link */
        }
        .custom-indicators button {
          width: 15px;
          height: 20px;
          margin: 0 10px;
          background-color: var(--bs-nav-link-color) !important;
          border: none;
          transition: background-color 0.3s ease, transform 0.3s ease;
        }
        
        .custom-indicators{
            margin:0;
            position:relative;
            justify-content:left !important;
        }
        
        .custom-indicators button.active {
          background-color: #007bff;
          transform: scale(1.5);
          margin:0 13px;
        }
        
        .custom-indicators button:hover {
          background-color: var(--bs-nav-link-hover-color);
          cursor: pointer;
        }
        /* Default: Fixed left for large screens */
        .share-buttons {
          position: fixed;
          top: 50%;
          left: 20px;
          transform: translateY(-50%);
          z-index: 1000;
          display: flex;
          flex-direction: column;
          gap: 10px;
        }
        
        .share-buttons .btn {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 50px;
          height: 50px;
          border-radius: 50%;
          background-color: #f0f0f0;
          color: #333;
          text-decoration: none;
          font-size: 20px;
          transition: background-color 0.3s ease, transform 0.2s ease;
        }
        
        .share-buttons .btn:hover {
          background-color: #007bff;
          color: #fff;
          transform: scale(1.1);
        }
        
        /* Color for specific buttons */
        .btn-whatsapp { color: #25D366; }
        .btn-facebook { color: #3b5998; }
        .btn-twitter { color: #1da1f2; }
        .btn-linkedin { color: #0077b5; }
        .btn-telegram { color: #0088cc; }
        .btn-copy { color: #555; }
        
        /* Responsive styles: Stack horizontally at the bottom on small screens */
        @media (max-width: 768px) {
          .share-buttons {
            position: fixed;
            bottom: 0;
            left: 0;
            top: unset;
            flex-direction: row;
            justify-content:center;
            width:100%;
          }
        
          .share-buttons .btn {
            width: 40px;
            height: 40px;
            font-size: 16px;
          }
        }
        
        .mr1, .mr2 {
          position: relative;
          box-sizing: border-box;
          margin: 0px auto 20px;
          text-align: center;
          pointer-events: none;
          transform: none;
          display: flex; /* Aktifkan flexbox */
          flex-direction: column; /* Arahkan elemen vertikal */
          justify-content: space-between; /* Buat elemen tidak bertumpuk */
          width: 310px;
          clear: both;
          background-color: var(--latar-belakang);
          height: calc(50vh - 24px); /* Setengah tinggi layar dikurangi margin */
        }
        
        .mr1-scrollpage-container, .mr2-scrollpage-container {
          display: flex; /* Tampilkan elemen dalam satu baris */
          flex-flow: row nowrap; /* Jangan biarkan elemen melanggar batas */
          justify-content: center;
          align-items: center;
          position: relative;
        }
        
        .mr1-scrollpage-top, .mr2-scrollpage-top {
          position: sticky;
          contain: none;
          top: 48px;
          will-change: transform;
          box-sizing: border-box;
          display: flex;
          flex-flow: row nowrap;
          align-items: center;
          justify-content: center;
        }
        
        .ad-banner {
          display: block;
          width: 100%; /* Isi penuh lebar kontainer */
          height: 100%; /* Sesuaikan dengan tinggi */
        }
        
        .ad-banner img {
          max-width: 100%;
          max-height: 100%;
          object-fit: contain; /* Buat proporsional */
        }
        .carousel-control-next, .carousel-control-prev{
            width:5%;
        }
        .user-card {
          background-color: #3B5998; /* Warna biru latar belakang */
          border-radius: 8px;
          text-align: center;
          color: white;
          padding: 20px;
          width: 100%; /* Sesuaikan agar responsif */
        }
    
        .user-card img {
          width: 100px;
          height: 100px;
          border-radius: 50%;
          background-color: #D9D9D9; /* Placeholder warna abu-abu */
        }
    
        .user-card h5 {
          margin-top: 15px;
          font-weight: bold;
        }
    
        .user-card p {
          margin-top: 5px;
          font-size: 0.9rem;
        }

    </style>
    <?php
        include "core/inti/header.php";
    
    ?>
    <?php
        if($_GET['page'] !== 'about'){
    ?>
    <!-- Ads Main -->
        <div class="col-12 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 position-relative p-0">
                        <!-- Gambar -->
                        <img src="https://placehold.co/1140x125" class="w-100" alt="Main Ads">
                        
                        <!-- Label "Ad" -->
                        <p class="mb-2 font-weight-bold" style="position: absolute; top: 0; left: 0; margin:5px 8px 0;">
                            <small class="px-1 py-0 rounded btn btn-outline-secondary fs-body">Ad</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php
            
        }
    ?>
    <?php
        $page = $_GET['page'];
        $action = $_GET['action'];
    
        if($page == "" || $page == "home"){
          include "core/page/home.php";
        }else if($action == ""){
          include "core/page/$page.php";
        } else {
          include "core/page/$page-$action.php";
        }
        
        include "core/inti/footer.php";
    
    ?>
    
    <script>
        document.addEventListener('click', function (e) {
            const dropdown = document.querySelector('.dropdown-menu');
            
            // Jika klik terjadi di dalam dropdown, hentikan propagasi
            if (dropdown.contains(e.target)) {
                e.stopPropagation();
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>window.gtranslateSettings = {"default_language":"en","languages":["en","id","fr","es","zh-CN"],"wrapper_selector":".gtranslate_wrapper"}</script>
    <script src="https://intimedia.id/assets/js/Translate.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const mainMenu = document.getElementById("main-menu");
        const logoFav = document.getElementById("logo-fav");
        const originalOffset = mainMenu.offsetTop;
    
        window.addEventListener("scroll", function () {
          if (window.scrollY >= originalOffset) {
            mainMenu.classList.add("position-fixed");
            logoFav.classList.add("d-block");
            logoFav.classList.remove("d-none"); // Pastikan logo ditampilkan
            mainMenu.classList.remove("mt-4");
          } else {
            mainMenu.classList.add("mt-4");
            logoFav.classList.add("d-none"); // Sembunyikan logo
            logoFav.classList.remove("d-block");
            mainMenu.classList.remove("position-fixed");
          }
        });
      });
    </script>



  </body>
</html>