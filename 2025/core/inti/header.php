<nav>
    <div class="col-md-12 py-5 pb-3">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                <!-- Logo: Tengah di desktop, paling depan di mobile -->
                <div class="col-md-4 col-sm-12 col-12 order-md-2 mb-sm-3  mb-md-0 m-0 order-1 text-center">
                    <a href="#">
                        <img src="https://intimedia.id/assets/images/logo_inti2024_light.png" id="logoweb" alt="Logo INTIMEDIA" class="w-100">
                    </a>
                </div>
                    
                <!-- Mode & Translate: Sebelah kiri di desktop, kedua di mobile -->
                <div class="col-md-4  col-sm-6 col-6 order-md-1 order-2">
                    <div class="d-flex align-items-center justify-content-start gap-3">
                        <button class="btn text-primary-emphasis bg-primary-subtle  d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <button type="button" id="icon-mode" class="btn btn-link px-2" data-bs-toggle="modal" data-bs-target="#modeModal">
                          <i class="fa-solid fa-sun-bright fs-2"></i>
                        </button>
                        
                        <div class="gtranslate_wrapper"></div>
                    </div>
                </div>
                    
                <!-- Search: Sebelah kanan di desktop, ketiga di mobile -->
                <div class="col-md-4 col-sm-6 col-6 order-md-3 order-3">
                    <div class="d-flex justify-content-end">
                        <div class="col-md-7 col-sm-12 col-12">
                            <!-- Search Modal Trigger -->
                            <div class="input-group searchModal" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <!-- Input search + button (desktop & tablet) -->
                                
                                <div class="form-control searchForm rounded-5 d-none d-md-flex align-items-center justify-content-between">
                                    <p class="mb-0 me-3">Search</p>
                                    <button class="btn text-primary-emphasis bg-primary-subtle rounded-5 border-0" type="button">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                </div>

                                
                                <!-- Button search only (mobile) -->
                                <button class="btn text-primary-emphasis bg-primary-subtle rounded-5 border-0 d-block d-md-none" type="button">
                                    <i class="fa-solid fa-search"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
            <!--MENU DENGAN BOOTSTRAP 5.30 DIMANA tampilan mobile akan menjadi offcanvas dan collapse, dan tampilan desktop akan menjadi dropdown mega menu-->
             <!-- Bagian Menu -->
            <div class="col-md-12 bg-primary bg-opacity-10  mt-4 d-md-block d-sm-none d-none" id="main-menu">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-center py-2">
                        <!-- Button Offcanvas untuk Mobile -->
                        <!-- Menu Mega Dropdown untuk Desktop -->
                    <ul class="nav d-none d-md-flex align-items-center">
                        <li class="nav-item d-none" id="logo-fav">
                            <a class="nav-link px-0" href="#"><img src="https://inti.asia/images/logo_menu.png" class="rounded-3" width="35"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./?page=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./?page=articles">Articles</a>
                        </li>
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                Tech Market
                            </a>
                            <div class="dropdown-menu w-100 border-0 shadow" id='megaMenuFull' aria-labelledby="megaMenuFull">
                                <div class="container">
                                    <div class="row py-4 pt-0 d-flex align-items-center">
                                        <!-- Column 1 -->
                                        <div class="col-md-3">
                                            <div id="nav-tabs" class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <button class="dropdown-item py-2 active" id="v-pills-digitech-tab" data-bs-toggle="pill" data-bs-target="#v-pills-digitech" type="button" role="tab" aria-controls="v-pills-digitech" aria-selected="true">Digital Technology</button>
                                                <button class="dropdown-item py-2" id="v-pills-ai-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ai" type="button" role="tab" aria-controls="v-pills-ai" aria-selected="false">Artificial Intelligence</button>
                                                <button class="dropdown-item py-2" id="v-pills-data-security-tab" data-bs-toggle="pill" data-bs-target="#v-pills-data-security" type="button" role="tab" aria-controls="v-pills-data-security" aria-selected="false">Data Security</button>
                                                <button class="dropdown-item py-2" id="v-pills-industrial-tab" data-bs-toggle="pill" data-bs-target="#v-pills-industrial" type="button" role="tab" aria-controls="v-pills-industrial" aria-selected="false">Industrial Transformation &<br/>Sustainability</button>
                                                <button class="dropdown-item py-2" id="v-pills-health-tech-tab" data-bs-toggle="pill" data-bs-target="#v-pills-health-tech" type="button" role="tab" aria-controls="v-pills-health-tech" aria-selected="false">Health Tech</button>
                                                <button class="dropdown-item py-2" id="v-pills-entertainment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-entertainment" type="button" role="tab" aria-controls="v-pills-entertainment" aria-selected="false">Entertainment</button>
                                            </div>
                                        </div>
    
                                        <!-- Column 2 -->
                                        <div class="col-md-9">
                                            <!-- Tab Content -->
                                            <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-digitech" role="tabpanel" aria-labelledby="v-pills-digitech-tab">
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-md-9 zoom-artic">
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-md-4">
                                                                    <h1 class="h4">Lorem Ipsum Dolor Sit Amet</h1>
                                                                    <p>
                                                                        <small class="text-muted">
                                                                            10 Minutes Ago
                                                                        </small>
                                                                    </p>
                                                                    <p  style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the ...</p>
                                                                </div>
                                                                <div class="col-md-8 h-px-300 overflow-hidden d-flex justify-content-center align-items-center">
                                                                    <img src="https://placehold.co/600x300" class="h-100" alt="News Image Megamenu">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <ul class="list-group list-group-flush">
                                                                
                                                                <li class="list-group-item bg-transparent">
                                                                    <a href="#" class="btn btn-link text-decoration-none nav-link text-start p-0 text-white">
                                                                        <h1 class="fw-bold mb-0" style="font-size: 13px;">President Prabowo Subianto’s Administration Aims for 8% Economic Growth</h1>
                                                                        
                                                                        <p class="m-0">
                                                                            <small class="text-secondary">
                                                                                15 Minutes Ago
                                                                            </small>
                                                                        </p>
                                                                    </a>
                                                                </li>
                                                                
                                                                <li class="list-group-item bg-transparent">
                                                                    <a href="#" class="btn btn-link text-decoration-none nav-link text-start p-0 text-white">
                                                                        <h1 class="fw-bold mb-0" style="font-size: 13px;">President Prabowo Subianto’s Administration Aims for 8% Economic Growth</h1>
                                                                        
                                                                        <p class="m-0">
                                                                            <small class="text-secondary">
                                                                                15 Minutes Ago
                                                                            </small>
                                                                        </p>
                                                                    </a>
                                                                </li>
                                                                <li class="list-group-item bg-transparent">
                                                                    <a href="#" class="btn btn-link text-decoration-none nav-link text-start p-0 text-white">
                                                                        <h1 class="fw-bold mb-0" style="font-size: 13px;">President Prabowo Subianto’s Administration Aims for 8% Economic Growth</h1>
                                                                        
                                                                        <p class="m-0">
                                                                            <small class="text-secondary">
                                                                                15 Minutes Ago
                                                                            </small>
                                                                        </p>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
            
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-ai" role="tabpanel" aria-labelledby="v-pills-ai-tab">
                                                    <h5>Profile Content</h5>
                                                    <p>This is the content for the Profile tab.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-data-security" role="tabpanel" aria-labelledby="v-pills-data-security-tab">
                                                    <h5>Messages Content</h5>
                                                    <p>This is the content for the Messages tab.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-health-tech" role="tabpanel" aria-labelledby="v-pills-health-tech-tab">
                                                    <h5>Settings Content</h5>
                                                    <p>This is the content for the Settings tab.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-entertainment" role="tabpanel" aria-labelledby="v-pills-entertainment-tab">
                                                    <h5>Settings Content</h5>
                                                    <p>This is the content for the Settings tab.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link" href="#">Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">People</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Videos <i class="fa-solid fa-clapperboard-play"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Offcanvas Menu untuk Mobile -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group">
                <li class="list-group-item"><a href="#">Products</a></li>
                <li class="list-group-item"><a href="#">About Us</a></li>
                <li class="list-group-item"><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    
</nav>


<!--Mode Change Modal-->
<!-- Mode -->
<div class="modal fade  blurred" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="p-4">
                <div class="row">
                    <div class="col-12">
                        <div class="block-7">
                            <form action="https://media.inti.asia/search" method="GET">
                                <div class="input-group mb-3">
                                  <input type="text" class="form-control py-4" placeholder="What are you looking for?" name="q" aria-describedby="basic-addon2">
                                  <button class="input-group-text" id="basic-addon2"><i class="fa-regular fa-search px-2"></i></button>
                                </div>
                            </form>
                        </div>    
                    </div>
                    <div class="col-12 mt-3">
                        <div class="d-flex mb-4 pb-2" style="overflow-x:scroll">
                            <div class="text-nowrap border-0" style="margin-right:5px;width: auto">
                                <?php
                                // Loop dari huruf 'A' sampai 'Z'
                                foreach (range('A', 'Z') as $letter) {
                                    echo '<a class="text-decoration-none btn btn-sm btn-outline-secondary me-2 mb-2" href="#">' . $letter . '</a>';
                                }
                                ?>
                            </div>
                        </div>
                        
                        <h5 class="text-uppercase"><i class="fa-regular fa-lightbulb"></i> &nbsp; Suggestion Articles</h5>
                        <ul class="suggest-ul-block mb-0">
                          <li><i class="fa-regular fa-clock-rotate-left px-2"></i> &nbsp; Dapibus ac facilisis in</li>
                          <li><i class="fa-regular fa-clock-rotate-left px-2"></i> &nbsp; Morbi leo risus</li>
                          <li><i class="fa-regular fa-clock-rotate-left px-2"></i> &nbsp; Porta ac consectetur ac</li>
                          <li><small class="px-2 rounded" style="border: 1px solid rgba(0,0,0,0.5);">Ad</small> &nbsp; Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Mode -->
<div class="modal fade  blurred" id="modeModal" tabindex="-1" aria-labelledby="modeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title">Choose Reading Mode</h5>
      </div>
      <div class="modal-body">
        <p class="m-0">Select your preferred reading mode:</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="form-check">
                    <input class="form-check-input border-0" type="radio" name="flexRadioDefault" id="lightMode" checked >
                    <label class="form-check-label" for="lightMode">Light Mode</label>
                </div>
            </li>
            <!-- Dark Mode Option -->
            <li class="list-group-item">
                <div class="form-check">
                    <input class="form-check-input border-0" type="radio" name="flexRadioDefault" id="darkMode">
                    <label class="form-check-label" for="darkMode">Dark Mode</label>
                </div>
            </li>
            <!-- Reading Mode Option -->
            <li class="list-group-item">
                <div class="form-check">
                    <input class="form-check-input border-0" type="radio" name="flexRadioDefault" id="readingMode">
                    <label class="form-check-label" for="readingMode">Reading Mode</label>
                </div>
            </li>
            <!-- Cancel Option -->
            <li class="list-group-item">
                <div class="form-check">
                    <button type="button" class="p-0 btn btn-link text-danger text-decoration-none fw-bold"  data-bs-dismiss="modal">Cancel</button>
                </div>
            </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script>
    // Get references to the radio buttons, logo, and body
    const lightMode = document.getElementById('lightMode');
    const darkMode = document.getElementById('darkMode');
    const readingMode = document.getElementById('readingMode');
    const logoweb = document.getElementById('logoweb');
    const iconMode = document.getElementById('icon-mode').querySelector('i'); // Icon in button
    const searchBar = document.querySelector('.searchForm'); // Search bar
    const menuBar = document.getElementById('main-menu'); // Menu bar
    const body = document.body;

    // Function to reset styles for nav-links and apply active color based on the theme
    function resetNavLinks() {
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.classList.remove('text-white', 'text-primary', 'text-secondary');
        });
    }

    // Function to highlight active tab and apply text color according to mode
    function updateActiveTab() {
        // Get the active dropdown item and all dropdown items
        const activeTab = document.querySelector('.dropdown-item.active');
        const dropDownItems = document.querySelectorAll('.dropdown-item');
    
        // Reset styles for all dropdown items
        dropDownItems.forEach(item => {
            // Remove text color classes
            item.classList.remove('text-light', 'text-dark', 'text-primary', 'text-secondary', 'text-body');
            // Add default text class when it's not active
            item.classList.add('text-body');
        });
    
        // If there is an active tab, apply specific styling based on the current theme
        if (activeTab) {
            // Ensure the active class is applied
            activeTab.classList.add('active');
    
            // Apply specific color to the active tab based on the mode
            if (body.classList.contains('light-mode')) {
                activeTab.classList.add('text-white'); // Active item text color in light mode
            } else if (body.classList.contains('dark-mode')) {
                activeTab.classList.add('text-white'); // Active item text color in dark mode
            } else if (body.classList.contains('reading-mode')) {
                activeTab.classList.add('text-dark'); // Active item text color in reading mode
            }
        }
    }


    // Default state sync with body class (initial page load handling)
    document.addEventListener('DOMContentLoaded', () => {
        // Default mode based on body class
        if (body.classList.contains('dark-mode')) {
            darkMode.checked = true;
            darkMode.dispatchEvent(new Event('change'));
        } else if (body.classList.contains('reading-mode')) {
            readingMode.checked = true;
            readingMode.dispatchEvent(new Event('change'));
        } else {
            lightMode.checked = true;
            lightMode.dispatchEvent(new Event('change'));
        }

        // Update active tab style after mode set
        updateActiveTab();
    });

    // Event listeners for theme toggling (light, dark, reading modes)
    lightMode.addEventListener('change', () => {
        if (lightMode.checked) {
            body.classList.remove('dark-mode', 'reading-mode');
            body.classList.add('light-mode');
        
            // Remove all bg-opacity-* from menuBar
            menuBar.classList.remove('bg-secondary', 'bg-opacity-25', 'bg-opacity-10', 'bg-opacity-5', 'text-white', 'bg-dark');
            menuBar.classList.add('bg-primary', 'text-white');
        
            // Update active tab class
            updateActiveTab();
        
            // Update search bar styles
            searchBar.classList.add('bg-body-secondary', 'text-body');
            searchBar.classList.remove('bg-secondary', 'bg-opacity-25', 'text-white');
        
            // Update icon and logo for light mode
            iconMode.className = 'fa-solid fa-sun-bright fs-2';
            logoweb.src = 'https://intimedia.id/assets/images/logo_inti2024_light.png';
        }
    });
    
    darkMode.addEventListener('change', () => {
        if (darkMode.checked) {
            body.classList.remove('light-mode', 'reading-mode');
            body.classList.add('dark-mode');
        
            menuBar.classList.add('bg-primary', 'bg-opacity-25', 'text-white');
            menuBar.classList.remove('bg-light', 'bg-secondary', 'bg-opacity-75', 'text-body');
        
            // Update active tab class
            updateActiveTab();
        
            // Update search bar styles
            searchBar.classList.add('bg-primary', 'bg-opacity-10', 'text-white');
            searchBar.classList.remove('bg-body-secondary', 'bg-secondary', 'bg-opacity-25', 'text-body');
        
            // Update icon and logo for dark mode
            iconMode.className = 'fa-solid fa-moon-stars fs-2';
            logoweb.src = 'https://intimedia.id/assets/images/logo_inti2024_dark.png';
        }
    });
    
    readingMode.addEventListener('change', () => {
        if (readingMode.checked) {
            body.classList.remove('light-mode', 'dark-mode');
            body.classList.add('reading-mode');
        
            menuBar.classList.add('bg-secondary', 'bg-opacity-5', 'text-white');
            menuBar.classList.remove('bg-light', 'bg-dark', 'text-body');
        
            // Update active tab class
            updateActiveTab();
        
            // Update search bar styles
            searchBar.classList.add('bg-secondary', 'bg-opacity-10', 'text-white');
            searchBar.classList.remove('bg-body-secondary', 'bg-dark', 'text-body');
        
            // Update icon and logo for reading mode
            iconMode.className = 'fa-regular fa-eye fs-2';
            logoweb.src = 'https://intimedia.id/assets/images/logo_inti2024_light.png';
        }
    });
</script>
