<nav class="sidebar">
    <div class="sidebar-header">

        <a href="#" class="sidebar-brand">
            @if (isset($icon->logo))
                <img src="{{ asset('uploads/settings/icon/' . $icon->logo) }}" alt="Villa" style="width:50px">
            @else
                Const<span>Ruction</span>
            @endif
        </a>

        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->type == 0)
                {{-- <li class="nav-item nav-category">Admin</li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">All Users</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="link-icon" data-feather="user-plus"></i>
                        <span class="link-title">All Agent List</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="link-icon" data-feather="user-minus"></i>
                        <span class="link-title">Only Client List</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="link-icon" data-feather="check-circle"></i>
                        <span class="link-title">Change Client Status</span>
                    </a>
                </li> --}}

                <li class="nav-item nav-category">Frontend Dynamic</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#home" role="button" aria-expanded="false"
                        aria-controls="home">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Home Page</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>

                    <div class="collapse" id="home">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ route('header.index') }}" class="nav-link">Header</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Main Service</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("feature.index") }}" class="nav-link">Feature Work</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('partner.index') }}" class="nav-link">Partners</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about.index') }}" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('choose.index') }}" class="nav-link">Why Choose US</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("contacts.index") }}" role="button">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Contact</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Blog Page</span>
                    </a>
                </li>

                <li class="nav-item nav-category">Settings</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("siteSetting.index") }}">
                        <i class="link-icon" data-feather="settings"></i>
                        <span class="link-title">Site Settings</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>
