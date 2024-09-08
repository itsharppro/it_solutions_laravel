<div class="container-fluid bg-primary">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="{{ url('/') }}" class="navbar-brand">
                <h1 class="text-white fw-bold d-block">High<span class="text-secondary">Tech</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <!-- Home -->
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>

                    <!-- About -->
                    <a href="{{ url('/about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>

                    <!-- Services -->
                    <a href="{{ url('/services') }}" class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">Services</a>

                    <!-- Projects -->
                    <a href="{{ url('/projects') }}" class="nav-item nav-link {{ Request::is('projects') ? 'active' : '' }}">Projects</a>

                    <!-- Pages Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('blog') || Request::is('team') || Request::is('testimonials') || Request::is('404') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded">
                            <a href="{{ url('/blog') }}" class="dropdown-item {{ Request::is('blog') ? 'active' : '' }}">Our Blog</a>
                            <a href="{{ url('/team') }}" class="dropdown-item {{ Request::is('team') ? 'active' : '' }}">Our Team</a>
                            <a href="{{ url('/testimonials') }}" class="dropdown-item {{ Request::is('testimonials') ? 'active' : '' }}">Testimonial</a>
                            <a href="{{ url('/404') }}" class="dropdown-item {{ Request::is('404') ? 'active' : '' }}">404 Page</a>
                        </div>
                    </div>

                    <!-- Contact -->
                    <a href="{{ url('/contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="d-none d-xl-flex flex-shrink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="#" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt text-white fa-2x"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4 border-end">
                    <span class="text-white-50">Have any questions?</span>
                    <span class="text-secondary">Call: + 0123 456 7890</span>
                </div>
                <div class="d-flex align-items-center justify-content-center ms-4">
                    <a href="#"><i class="bi bi-search text-white fa-2x"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
