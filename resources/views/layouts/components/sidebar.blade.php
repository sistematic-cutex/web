<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="index.html" class="logo-light">
            <img src="" alt="logo" class="logo-lg">
            <img src="" alt="small logo" class="logo-sm">
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.html" class="logo-dark">
            <img src="{{ url('images/logo-google.png')}}" alt="dark logo sdfsdfsdfdsdfsdfsdfdsfsdf" class="logo-lg">
            <img src="" alt="small logo" class="logo-sm">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Menu -->
        <ul class="menu">
            <!--Titulo descripcion -->
            <li class="menu-title">Navegación</li>
            <li class="menu-item">
                <a href="{{ route("proveedores") }}" class="menu-link">
                    <span class="menu-icon"><i class="fa-solid fa-users"></i></span>
                    <span class="menu-text"> Proveedores </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route("") }}" class="menu-link">
                    <span class="menu-icon"><i class="fa-solid fa-newspaper"></i></span>
                    <span class="menu-text"> Nombre </span>
                </a>
            </li>

           
        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>