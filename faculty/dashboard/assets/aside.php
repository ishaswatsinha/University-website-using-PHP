<?php 
echo
'

<aside class="sidebar sidebar-default sidebar-hover sidebar-mini navs-pill-all ">
<div class="sidebar-header d-flex align-items-center justify-content-start">
    <a href="../dashboard/index.html" class="navbar-brand">
        <!--Logo start-->
        <div class="logo">
            <!-- content here  -->
            <img src="../assets/images/rk-logo.png"  class="img-fluid logo-img" alt="logo">
           
        </div>
        <div class="logo-hover">
            <img src="../assets/images/logo.png" class="img-fluid logo-img" alt="logo">
        </div>
        
        <!--logo End-->
        
    </a>
    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
        <i class="icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </i>
    </div>
</div>
<div class="sidebar-body pt-0 data-scrollbar">
    <div class=" navbar-collapse" id="sidebar">
        <!-- Sidebar Menu Start -->
        <ul class="navbar-nav iq-main-menu">
            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Home</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>
            <li class="nav-item sub-nav">
                <a class="nav-link active" aria-current="page" href="../dashboard/index.php">
                     <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Dashboard</span>
                </a>
            </li>
            <!-- ----------------------------------------- -->
            <li><hr class="hr-horizontal"></li>
            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Pages</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>
            <!-- ----------------------------------------- -->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false" aria-controls="sidebar-user">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path>
                            <path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Students</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar">
                    <li class="nav-item">
                        <a class="nav-link" href="../Attendance/index.php">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> L </i>
                            <span class="item-name">Attendance</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../srms/dashboard.php">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> R </i>
                            <span class="item-name">Upload Result</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dashboard/auth/confirm-mail.html">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> C </i>
                            <span class="item-name">Confirm Mail</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dashboard/auth/recoverpw.html">
                           <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> R </i>
                            <span class="item-name">Recover password</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- ---------->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false" aria-controls="sidebar-user">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>
                            <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>
                            <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>
                            <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>
                            <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>
                            <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Users</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar">
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/app/user-profile.php">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> P </i>
                            <span class="item-name">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/app/user-add.php">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> A </i>
                            <span class="item-name">Add User</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/user-list.php">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> S </i>
                            <span class="item-name">Student List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- ----------->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#utilities-error" role="button" aria-expanded="false" aria-controls="utilities-error">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M11.9912 18.6215L5.49945 21.864C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7087C4 14.4283 4.40573 14.8725 5.47299 15.37L11.9912 18.6215Z" fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z" fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Email</span>
                    <i class="right-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="utilities-error" data-bs-parent="#sidebar">
                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> E </i>
                            <span class="item-name">Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> E </i>
                            <span class="item-name">Email Details</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <i class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> M </i>
                            <span class="item-name">Compose</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- ------------>
            <li><hr class="hr-horizontal"></li>
            <!-- ----------------------------------------- -->
            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Elements</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>
            <!-- ----------------------------------------- -->

            <li class="nav-item sub-nav">
                <a class="nav-link " href="/project/faculty/dashboard/extra/profile.php">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 10.5378C8 9.43327 8.89543 8.53784 10 8.53784H11.3333C12.4379 8.53784 13.3333 9.43327 13.3333 10.5378V19.8285C13.3333 20.9331 14.2288 21.8285 15.3333 21.8285H16C16 21.8285 12.7624 23.323 10.6667 22.9361C10.1372 22.8384 9.52234 22.5913 9.01654 22.3553C8.37357 22.0553 8 21.3927 8 20.6832V10.5378Z" fill="currentColor"/>
                            <rect opacity="0.4" x="8" y="1" width="5" height="5" rx="2.5" fill="currentColor"/>
                        </svg>
                    </i>
                    <span class="item-name">Profile</span>
                    <i class="sidenav-mini-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 10.5378C8 9.43327 8.89543 8.53784 10 8.53784H11.3333C12.4379 8.53784 13.3333 9.43327 13.3333 10.5378V19.8285C13.3333 20.9331 14.2288 21.8285 15.3333 21.8285H16C16 21.8285 12.7624 23.323 10.6667 22.9361C10.1372 22.8384 9.52234 22.5913 9.01654 22.3553C8.37357 22.0553 8 21.3927 8 20.6832V10.5378Z" fill="currentColor"/>
                            <rect opacity="0.4" x="8" y="1" width="5" height="5" rx="2.5" fill="currentColor"/>
                        </svg>
                    </i>
                </a>
            </li>
            <!-- ----------------------------------------- -->
            <li class="nav-item sub-nav">
                <a class="nav-link " href="#">
                    <i class="icon">
                        <svg width="20"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="4" width="22" height="16" rx="2.5" fill="currentColor" fill-opacity="0.5"/>
                            <path d="M7 8L9.30024 10.8753C9.59242 11.2405 9.59242 11.7595 9.30024 12.1247L7 15" stroke="currentColor" stroke-linecap="round"/>
                            <path d="M11.9004 15H16.8004" stroke="currentColor" stroke-linecap="round"/>
                        </svg>
                    </i>
                    <span class="item-name">Chat</span>
                    <i class="sidenav-mini-icon">
                        <svg width="20"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="4" width="22" height="16" rx="2.5" fill="currentColor" fill-opacity="0.5"/>
                            <path d="M7 8L9.30024 10.8753C9.59242 11.2405 9.59242 11.7595 9.30024 12.1247L7 15" stroke="currentColor" stroke-linecap="round"/>
                            <path d="M11.9004 15H16.8004" stroke="currentColor" stroke-linecap="round"/>
                        </svg>
                    </i>
                </a>
            </li>
            <!-- ----------------------------------------- -->
            <li class="nav-item sub-nav mb-5">
                <a class="nav-link" href="#">
                    <i class="icon">
                        <svg width="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 7.5C3 6.11929 4.11929 5 5.5 5H10.9645C11.6275 5 12.2634 5.26339 12.7322 5.73223L14.5 7.5L16.2678 9.26777C16.7366 9.73661 17 10.3725 17 11.0355V20.5C17 21.8807 15.8807 23 14.5 23H5.5C4.11929 23 3 21.8807 3 20.5V7.5Z" fill="currentColor" fill-opacity="0.5"/>
                            <path d="M7 3.5C7 2.11929 8.11929 1 9.5 1H14.9645C15.6275 1 16.2634 1.26339 16.7322 1.73223L18.5 3.5L20.2678 5.26777C20.7366 5.73661 21 6.37249 21 7.03553V16.5C21 17.8807 19.8807 19 18.5 19H9.5C8.11929 19 7 17.8807 7 16.5V3.5Z" fill="currentColor"/>
                        </svg>
                    </i>
                    <span class="item-name">Documentation</span>
                    <i class="sidenav-mini-icon">
                        <svg width="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 7.5C3 6.11929 4.11929 5 5.5 5H10.9645C11.6275 5 12.2634 5.26339 12.7322 5.73223L14.5 7.5L16.2678 9.26777C16.7366 9.73661 17 10.3725 17 11.0355V20.5C17 21.8807 15.8807 23 14.5 23H5.5C4.11929 23 3 21.8807 3 20.5V7.5Z" fill="currentColor" fill-opacity="0.5"/>
                            <path d="M7 3.5C7 2.11929 8.11929 1 9.5 1H14.9645C15.6275 1 16.2634 1.26339 16.7322 1.73223L18.5 3.5L20.2678 5.26777C20.7366 5.73661 21 6.37249 21 7.03553V16.5C21 17.8807 19.8807 19 18.5 19H9.5C8.11929 19 7 17.8807 7 16.5V3.5Z" fill="currentColor"/>
                        </svg>
                    </i>
                </a>
            </li>
            <!-- ----------------------------------------- -->
        </ul>
        <!-- Sidebar Menu End -->        </div>
</div>


<div class="sidebar-footer"></div>
</aside> 


'

?>