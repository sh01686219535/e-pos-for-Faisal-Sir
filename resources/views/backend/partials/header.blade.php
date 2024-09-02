<div id="header" class="app-header">

    <div class="desktop-toggler">
        <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed"
            data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>


    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled"
            data-toggle-target=".app">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>


    <div class="brand">
        <a href="{{route('dashboard')}}" class="brand-logo w-100">
            <iconify-icon icon="lets-icons:time-progress-duotone"
                class="fs-24px me-2 text-theme"></iconify-icon>
            <span class="brand-text fw-500 fs-14px">QUANTUM</span>
        </a>
    </div>


    <div class="menu">
        <div class="menu-item dropdown d-lg-flex d-none">
            <a href="#" class="menu-link">
                <span>$1,859,050.12</span>
            </a>
        </div>
        <div class="menu-item dropdown d-lg-flex d-none me-3">
            <div class="menu-search-inline">
                <iconify-icon icon="ph:magnifying-glass-duotone" class="menu-icon"></iconify-icon>
                <input class="form-control" placeholder="Search something..." value name="keywords" />
            </div>
        </div>
        <div class="menu-item dropdown d-lg-none d-flex">
            <a href="#" class="menu-link menu-link-icon"
                data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app">
                <iconify-icon icon="ph:magnifying-glass-duotone" class="menu-icon"></iconify-icon>
            </a>
        </div>
        <div class="menu-item dropdown">
            <a href="#" class="menu-link menu-link-icon px-lg-3" data-bs-toggle="dropdown"
                data-bs-display="static">
                <iconify-icon icon="ph:globe-duotone" class="menu-icon me-lg-2"></iconify-icon>
                <span class="d-lg-flex d-none">EN</span>
            </a>
            <div class="dropdown-menu fade dropdown-menu-end mt-1 fs-10px text-uppercase">
                <a href="#" class="dropdown-item d-flex align-items-center">English <span
                        class="ms-auto fw-semibold text-white w-20px text-center">EN</span></a>
                <a href="#" class="dropdown-item d-flex align-items-center">Spanish <span
                        class="ms-auto fw-semibold text-white w-20px text-center">ES</span></a>
                <a href="#" class="dropdown-item d-flex align-items-center">French <span
                        class="ms-auto fw-semibold text-white w-20px text-center">FR</span></a>
                <a href="#" class="dropdown-item d-flex align-items-center">German <span
                        class="ms-auto fw-semibold text-white w-20px text-center">DE</span></a>
                <a href="#" class="dropdown-item d-flex align-items-center">Italian <span
                        class="ms-auto fw-semibold text-white w-20px text-center">IT</span></a>
                <a href="#" class="dropdown-item d-flex align-items-center">Japanese <span
                        class="ms-auto fw-semibold text-white w-20px text-center">JA</span></a>
                <a href="#" class="dropdown-item d-flex align-items-center">Chinese <span
                        class="ms-auto fw-semibold text-white w-20px text-center">ZH</span></a>
                <a href="#" class="dropdown-item d-flex align-items-center">Russian <span
                        class="ms-auto fw-semibold text-white w-20px text-center">RU</span></a>
            </div>
        </div>
        <div class="menu-item dropdown dropdown-mobile-full">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static"
                class="menu-link menu-link-icon">
                <span class="iconify" data-icon="ph:calendar-dots-duotone"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0 w-300px">
                <div class="card">
                    <div class="card-header">TODAY, NOV 4</div>
                    <div class="card-body p-0 widget-reminder">
                        <div class="widget-reminder-item">
                            <div class="widget-reminder-time">09:00<br>12:00</div>
                            <div class="widget-reminder-divider bg-success"></div>
                            <div class="widget-reminder-content">
                                <div class="fw-semibold text-white">Meeting with HR</div>
                                <div> - Conference Room</div>
                            </div>
                        </div>
                        <div class="widget-reminder-item">
                            <div class="widget-reminder-time">20:00<br>23:00</div>
                            <div class="widget-reminder-divider bg-primary"></div>
                            <div class="widget-reminder-content">
                                <div class="fw-semibold text-white">Dinner with Richard</div>
                                <div> - Tom's Too Restaurant</div>
                                <div class="d-flex align-items-center mt-2">
                                    <div class="flex-fill d-flex align-items-center">
                                        <img src="{{asset('backendAsset')}}/assets/img/user/user-3.jpg" alt width="16"
                                            class="me-2"> Richard Leong
                                    </div>
                                    <a href="#" class="ms-auto">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">TOMORROW, NOV 5</div>
                    <div class="card-body p-0 widget-reminder">
                        <div class="widget-reminder-item">
                            <div class="widget-reminder-time">All day</div>
                            <div class="widget-reminder-divider bg-gray-300"></div>
                            <div class="widget-reminder-content">
                                <div class="fw-semibold text-white">Terry Birthday</div>
                            </div>
                        </div>
                        <div class="widget-reminder-item">
                            <div class="widget-reminder-time">08:00</div>
                            <div class="widget-reminder-divider bg-gray-300"></div>
                            <div class="widget-reminder-content">
                                <div class="fw-semibold text-white">Meeting</div>
                            </div>
                        </div>
                        <div class="widget-reminder-item">
                            <div class="widget-reminder-time">00:00<br>00:30</div>
                            <div class="widget-reminder-divider bg-gray-300"></div>
                            <div class="widget-reminder-content">
                                <div class="fw-semibold text-white">Server Maintenance</div>
                                <div> - Data Centre</div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="dropdown-item fs-10px text-center py-2 d-block" href="calendar.html">VIEW ALL</a>
            </div>
        </div>
        <div class="menu-item dropdown dropdown-mobile-full">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static"
                class="menu-link menu-link-icon">
                <span class="iconify" data-icon="ph:chats-duotone"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end fade p-0 w-300px">
                <div class="card">
                    <div class="card-header with-btn">
                        DISCUSSION GROUP
                    </div>
                    <div data-scrollbar="true" class="h-200px card-body fs-10px">
                        <div class="widget-chat">
                            <div class="widget-chat-item">
                                <div class="widget-chat-media"><img src="{{asset('backendAsset')}}/assets/img/user/user-2.jpg" alt>
                                </div>
                                <div class="widget-chat-content">
                                    <div class="widget-chat-name">Roberto Lambert</div>
                                    <div class="widget-chat-message last">
                                        Hey, I'm testing out group messaging.
                                    </div>
                                </div>
                            </div>
                            <div class="widget-chat-item reply">
                                <div class="widget-chat-content">
                                    <div class="widget-chat-message last">
                                        Cool
                                    </div>
                                    <div class="widget-chat-status">Read 16:26</div>
                                </div>
                            </div>
                            <div class="widget-chat-date">Today 14:21</div>
                            <div class="widget-chat-item">
                                <div class="widget-chat-media"><img src="{{asset('backendAsset')}}/assets/img/user/user-3.jpg" alt>
                                </div>
                                <div class="widget-chat-content">
                                    <div class="widget-chat-name">Rick Powell</div>
                                    <div class="widget-chat-message last">
                                        Awesome! What's new?
                                    </div>
                                </div>
                            </div>
                            <div class="widget-chat-item">
                                <div class="widget-chat-media"><img src="{{asset('backendAsset')}}/assets/img/user/user-2.jpg" alt>
                                </div>
                                <div class="widget-chat-content">
                                    <div class="widget-chat-name">Roberto Lambert</div>
                                    <div class="widget-chat-message">
                                        Not much, It's got a new look, contact pics show up in group messaging,
                                        some other small stuff.
                                    </div>
                                    <div class="widget-chat-message last">
                                        How's crusty old iOS 6 treating you?
                                    </div>
                                </div>
                            </div>
                            <div class="widget-chat-item reply">
                                <div class="widget-chat-content">
                                    <div class="widget-chat-message last">
                                        Sucks
                                    </div>
                                    <div class="widget-chat-status">Read 16:30</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="dropdown-item fs-10px text-center py-2 d-block" href="messenger.html">VIEW ALL</a>
            </div>
        </div>
        <div class="menu-item dropdown dropdown-mobile-full">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static"
                class="menu-link menu-link-icon">
                <span class="iconify" data-icon="ph:squares-four-duotone"></span>
            </a>
            <div class="dropdown-menu fade dropdown-menu-end p-0 w-300px text-center">
                <div class="row row-grid gx-0">
                    <div class="col-4">
                        <a href="email_inbox.html" class="dropdown-item text-decoration-none p-3 bg-none">
                            <div class="position-relative">
                                <i
                                    class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
                                <i class="bi bi-envelope h2 opacity-5 d-block my-1"></i>
                            </div>
                            <div class="fw-500 fs-10px text-white">INBOX</div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="pos_customer_order.html" target="_blank"
                            class="dropdown-item text-decoration-none p-3 bg-none">
                            <div><i class="bi bi-hdd-network h2 opacity-5 d-block my-1"></i></div>
                            <div class="fw-500 fs-10px text-white">POS SYSTEM</div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="calendar.html" class="dropdown-item text-decoration-none p-3 bg-none">
                            <div><i class="bi bi-calendar4 h2 opacity-5 d-block my-1"></i></div>
                            <div class="fw-500 fs-10px text-white">CALENDAR</div>
                        </a>
                    </div>
                </div>
                <div class="row row-grid gx-0">
                    <div class="col-4">
                        <a href="helper.html" class="dropdown-item text-decoration-none p-3 bg-none">
                            <div><i class="bi bi-terminal h2 opacity-5 d-block my-1"></i></div>
                            <div class="fw-500 fs-10px text-white">HELPER</div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="settings.html" class="dropdown-item text-decoration-none p-3 bg-none">
                            <div class="position-relative">
                                <i
                                    class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
                                <i class="bi bi-sliders h2 opacity-5 d-block my-1"></i>
                            </div>
                            <div class="fw-500 fs-10px text-white">SETTINGS</div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="widgets.html" class="dropdown-item text-decoration-none p-3 bg-none">
                            <div><i class="bi bi-collection-play h2 opacity-5 d-block my-1"></i></div>
                            <div class="fw-500 fs-10px text-white">WIDGETS</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item dropdown dropdown-mobile-full">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static"
                class="menu-link menu-link-icon">
                <span class="iconify" data-icon="ph:warning-duotone"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end fade w-300px p-0">
                <h6 class="dropdown-header fw-semibold py-2">NOTIFICATIONS</h6>
                <a class="dropdown-item d-flex align-items-center fs-10px" href="#">
                    <div>
                        <div
                            class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
                            <iconify-icon
                                icon="material-symbols-light:mark-email-unread-outline-sharp"></iconify-icon>
                        </div>
                    </div>
                    <div class="flex-1 ps-3 text-truncate">
                        <div class="text-white fw-semibold">New email received</div>
                        <div class="text-white text-opacity-75">You have a new email from John Doe.</div>
                        <div class="text-white text-opacity-50 small">2 minutes ago</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center fs-10px" href="#">
                    <div>
                        <div
                            class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
                            <iconify-icon
                                icon="material-symbols-light:calendar-clock-outline-sharp"></iconify-icon>
                        </div>
                    </div>
                    <div class="flex-1 ps-3 text-truncate">
                        <div class="text-white fw-semibold">Meeting reminder: Tomorrow at 9:00 AM</div>
                        <div class="text-white text-opacity-75">Don't forget your meeting with the client.
                        </div>
                        <div class="text-white text-opacity-50 small">1 hour ago</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center fs-10px" href="#">
                    <div>
                        <div
                            class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
                            <iconify-icon icon="material-symbols-light:checklist"></iconify-icon>
                        </div>
                    </div>
                    <div class="flex-1 ps-3 text-truncate">
                        <div class="text-white fw-semibold">Task completed</div>
                        <div class="text-white text-opacity-75">The task assigned to you has been completed.
                        </div>
                        <div class="text-white text-opacity-50 small">4 hours ago</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center fs-10px" href="#">
                    <div>
                        <div
                            class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
                            <iconify-icon
                                icon="material-symbols-light:mark-unread-chat-alt-outline-sharp"></iconify-icon>
                        </div>
                    </div>
                    <div class="flex-1 ps-3 text-truncate">
                        <div class="text-white fw-semibold">New comment on your post</div>
                        <div class="text-white text-opacity-75">Someone commented on your recent post.</div>
                        <div class="text-white text-opacity-50 small">10 hours ago</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center fs-10px" href="#">
                    <div>
                        <div
                            class="w-40px h-40px bg-white bg-opacity-10 text-white fs-30px d-flex align-items-center justify-content-center">
                            <iconify-icon icon="material-symbols-light:update"></iconify-icon>
                        </div>
                    </div>
                    <div class="flex-1 ps-3 text-truncate">
                        <div class="text-white fw-semibold">System update scheduled</div>
                        <div class="text-white text-opacity-75">There will be a system update tomorrow.</div>
                        <div class="text-white text-opacity-50 small">Yesterday at 6:00 PM</div>
                    </div>
                </a>
                <a class="dropdown-item fs-10px text-center py-2 d-block" href="messenger.html">VIEW ALL</a>
            </div>
        </div>
        <div class="menu-item dropdown">
            <a href="#" data-bs-toggle="dropdown" class="menu-link menu-link-icon">
                <span class="iconify" data-icon="ph:gear-duotone"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end fade">
                <h6 class="dropdown-header">Settings</h6>
                <a class="dropdown-item" href="#">General Settings</a>
                <a class="dropdown-item" href="#">System Preferences</a>
                <a class="dropdown-item" href="#">Security Settings</a>
                <a class="dropdown-item" href="#">Application Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">About</a>
                <a class="dropdown-item" href="#">Feedback</a>
            </div>
        </div>
        
        <div class="menu-item dropdown dropdown-mobile-full">
            <a href="#" data-bs-toggle="dropdown" data-bs-display="static"
                class="menu-link d-flex align-items-center">
                <div class="menu-img online me-sm-2 ms-lg-0 ms-n2">
                    <img src="{{asset('backendAsset')}}/assets/img/user/profile.jpg" alt="Profile" class />
                </div>
                <div class="menu-text d-sm-block d-none">
                    <span class="d-block"><span><span class="__cf_email__"
                                data-cfemail="693c3a2c3b2728242c292e24282025472a2624">[email&#160;protected]</span></span></span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-10px fade">
                <h6 class="dropdown-header">USER OPTIONS</h6>
                <a class="dropdown-item" href="profile.html">VIEW PROFILE</a>
                <a class="dropdown-item" href="settings.html">ACCOUNT SETTINGS</a>
                <a class="dropdown-item" href="calendar.html">CALENDER SETTINGS</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="helper.html">HELP & SUPPORT</a>
                <a class="dropdown-item">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input type="submit" value="LOG OUT" class="btn btn-secondary ">
                    </form>
                    
                </a>
            </div>
        </div>
    </div>


    <form class="menu-search-float" method="POST" name="header_search_form">
        <div class="menu-search-container">
            <div class="menu-search-icon"><i class="bi bi-search"></i></div>
            <div class="menu-search-input">
                <input type="text" class="form-control" placeholder="Search something..." />
            </div>
            <div class="menu-search-icon">
                <a href="#" data-toggle-class="app-header-menu-search-toggled"
                    data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
            </div>
        </div>
    </form>

</div>