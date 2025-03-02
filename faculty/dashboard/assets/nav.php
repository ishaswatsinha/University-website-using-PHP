<?php 

echo 


'

<div class="position-relative">
<!--Nav Start-->
<nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
  <div class="container-fluid navbar-inner">
    <a href="../dashboard/index.html" class="navbar-brand">
        <!--Logo start-->
        <div style=" position: absolute;" class="logo">
           <!-- content here -->
           <img  src="../assets/images/logo.png" class="img-fluid logo-img" alt="logo">
        </div>
        <div  class="logo-hover">
            <img  src="../assets/images/logo.png" class="img-fluid logo-img" alt="logo">
        </div>

        <!-- logo End -->
        
    </a>
    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
        <i class="icon">
         <svg width="20px" height="20px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
        </svg>
        </i>
    </div>
    <div class="input-group search-input">
      <span class="input-group-text" id="search-input">
        <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </span>
      <input type="search" class="form-control" placeholder="Search...">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
          <span class="navbar-toggler-bar bar1 mt-2"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto align-items-center navbar-list mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a href="#"  class="nav-link" id="notification-drop" data-bs-toggle="dropdown" >
             <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.7695 10.1453C16.039 9.29229 15.7071 8.55305 15.7071 7.29716V6.87013C15.7071 5.23354 15.3304 4.17907 14.5115 3.12459C13.2493 1.48699 11.1244 0.5 9.04423 0.5H8.95577C6.91935 0.5 4.86106 1.44167 3.577 3.0128C2.71333 4.08842 2.29293 5.18822 2.29293 6.87013V7.29716C2.29293 8.55305 1.98284 9.29229 1.23049 10.1453C0.676907 10.7738 0.5 11.5815 0.5 12.4557C0.5 13.3309 0.787226 14.1598 1.36367 14.8336C2.11602 15.6413 3.17846 16.1569 4.26375 16.2466C5.83505 16.4258 7.40634 16.4933 9.0005 16.4933C10.5937 16.4933 12.165 16.3805 13.7372 16.2466C14.8215 16.1569 15.884 15.6413 16.6363 14.8336C17.2118 14.1598 17.5 13.3309 17.5 12.4557C17.5 11.5815 17.3231 10.7738 16.7695 10.1453Z" fill="currentColor"/>
              <path opacity="0.4" d="M11.0097 17.7285C10.5098 17.6217 7.46364 17.6217 6.96372 17.7285C6.53636 17.8272 6.07422 18.0568 6.07422 18.5604C6.09907 19.0408 6.38033 19.4648 6.76992 19.7337L6.76893 19.7347C7.27282 20.1275 7.86416 20.3773 8.48334 20.4669C8.8133 20.5122 9.14923 20.5102 9.49111 20.4669C10.1093 20.3773 10.7006 20.1275 11.2045 19.7347L11.2035 19.7337C11.5931 19.4648 11.8744 19.0408 11.8992 18.5604C11.8992 18.0568 11.4371 17.8272 11.0097 17.7285Z" fill="currentColor"/>
              </svg>
              <span class="bg-danger dots"></span>
          </a>
          <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="notification-drop">
              <div class="card shadow-none m-0">
                <div class="card-header d-flex justify-content-between bg-primary mx-0 px-4">
                    <div class="header-title">
                      <h5 class="mb-0 text-white">All Notifications</h5>
                    </div>
                </div>
                <div class="card-body p-0">
                    <a href="#" class="iq-sub-card">
                      <div class="d-flex align-items-center">
                          <img class="avatar-40 rounded-pill" src="../assets/images/layouts/01.png" alt="">
                          <div class="ms-3 w-100">
                            <h6 class="mb-0 ">Shaswat sinha</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0">95 MB</p>
                                <small class="float-end font-size-12">Just Now</small>
                            </div>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="iq-sub-card">
                      <div class="d-flex align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded-pill" src="../assets/images/layouts/02.png" alt="">
                          </div>
                          <div class="ms-3 w-100">
                            <h6 class="mb-0 ">New customer is join</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0">RKU</p>
                                <small class="float-end font-size-12">5 days ago</small>
                            </div>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="iq-sub-card">
                      <div class="d-flex align-items-center">
                          <img class="avatar-40 rounded-pill" src="../assets/images/layouts/03.png" alt="">
                          <div class="ms-3 w-100">
                            <h6 class="mb-0 ">Two customer is left</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0">RKU</p>
                                <small class="float-end font-size-12">2 days ago</small>
                            </div>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="iq-sub-card">
                      <div class="d-flex align-items-center">
                          <img class="avatar-40 rounded-pill" src="../assets/images/layouts/04.png" alt="">
                          <div class="w-100 ms-3">
                            <h6 class="mb-0 ">New Mail from jenny</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0">RKU</p>
                                <small class="float-end font-size-12">3 days ago</small>
                            </div>
                          </div>
                      </div>
                    </a>
                </div>
              </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link" id="mail-drop2" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.4" d="M20 13.441C20 16.231 17.76 18.491 14.97 18.501H14.96H5.05C2.27 18.501 0 16.251 0 13.461V13.451C0 13.451 0.006 9.02498 0.014 6.79898C0.015 6.38098 0.495 6.14698 0.822 6.40698C3.198 8.29198 7.447 11.729 7.5 11.774C8.21 12.343 9.11 12.664 10.03 12.664C10.95 12.664 11.85 12.343 12.56 11.763C12.613 11.728 16.767 8.39398 19.179 6.47798C19.507 6.21698 19.989 6.45098 19.99 6.86798C20 9.07698 20 13.441 20 13.441Z" fill="currentColor"/>
            <path d="M19.4769 3.174C18.6109 1.542 16.9069 0.5 15.0309 0.5H5.05086C3.17486 0.5 1.47086 1.542 0.60486 3.174C0.41086 3.539 0.50286 3.994 0.82586 4.252L8.25086 10.191C8.77086 10.611 9.40086 10.82 10.0309 10.82C10.0349 10.82 10.0379 10.82 10.0409 10.82C10.0439 10.82 10.0479 10.82 10.0509 10.82C10.6809 10.82 11.3109 10.611 11.8309 10.191L19.2559 4.252C19.5789 3.994 19.6709 3.539 19.4769 3.174Z" fill="currentColor"/>
            </svg>
            <span class="bg-primary count-mail"></span>
          </a>
          <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="mail-drop2">
              <div class="card shadow-none m-0">
                <div class="card-header d-flex justify-content-between bg-primary mx-0 px-4">
                    <div class="header-title">
                      <h5 class="mb-0 text-white">All Message</h5>
                    </div>
                </div>
                <div class="card-body p-0 ">
                    <a href="#" class="iq-sub-card">
                      <div class="d-flex  align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded-pill" src="../assets/images/layouts/01.png" alt="">
                          </div>
                          <div class="ms-3">
                            <h6 class="mb-0 ">Bni Emma Watson</h6>
                            <small class="float-start font-size-12">13 Jun</small>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="iq-sub-card">
                      <div class="d-flex align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded-pill" src="../assets/images/layouts/02.png" alt="">
                          </div>
                          <div class="ms-3">
                            <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                            <small class="float-start font-size-12">20 Apr</small>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="iq-sub-card">
                      <div class="d-flex align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded-pill" src="../assets/images/layouts/03.png" alt="">
                          </div>
                          <div class="ms-3">
                            <h6 class="mb-0 ">Why do we use it?</h6>
                            <small class="float-start font-size-12">30 Jun</small>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="iq-sub-card">
                      <div class="d-flex align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded-pill" src="../assets/images/layouts/04.png" alt="">
                          </div>
                          <div class="ms-3">
                            <h6 class="mb-0 ">Variations Passages</h6>
                            <small class="float-start font-size-12">12 Sep</small>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="iq-sub-card">
                      <div class="d-flex align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded-pill" src="../assets/images/layouts/01.png" alt="">
                          </div>
                          <div class="ms-3">
                            <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                            <small class="float-start font-size-12">5 Dec</small>
                          </div>
                      </div>
                    </a>
                </div>
              </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../assets/images/avatars/01.png" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
            <div class="caption ms-3 d-none d-md-block ">
                <h6 class="mb-0 caption-title"> '?>  <?php echo  $_SESSION['uname'] ?> <?php echo ' </h6>
                <p class="mb-0 caption-sub-title">Web Developper</p>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/project/faculty/dashboard/extra/profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="#">Privacy Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="assets/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>         
 <!-- Nav Header Component Start -->
  <!-- Nav Header Component End -->
<!--Nav End-->
</div>


'
?>