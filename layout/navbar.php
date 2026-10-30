<!-- NAVBAR -->
        <header class="navbar">
            <div class="search-bar">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
            <div class="user-profile">
                <button class="icon-btn"><i class="fa-regular fa-bell"></i></button>
                
                <!-- BAGIAN USER INFO YANG SUDAH DIPERBAIKI -->
                <div class="user-info" id="userProfileBtn">
                    <img src="https://ui-avatars.com/api/?name=Delicious+Burger&background=4F46E5&color=fff" alt="User">
                    <span>Delicious Burger <i class="fa-solid fa-chevron-down" style="font-size: 10px; margin-left: 5px;"></i></span>
                    
                    <!-- Dropdown Menu -->
                    <div class="dropdown-menu" id="userDropdown">
                        <a href="#" class="dropdown-item">
                            <i class="fa-regular fa-user"></i> My Profile
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="fa-solid fa-gear"></i> Account Settings
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="fa-regular fa-bell"></i> Notifications
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item logout">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                        </a>
                    </div>
                </div>
                <!-- END USER INFO -->

            </div>
        </header>