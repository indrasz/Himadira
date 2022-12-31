<!-- navbar section -->
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff">
    <div class="navbar-main container position-relative " style="font-family: 'Poppins', sans-serif">
        <nav class="navbar navbar-expand-lg navbar-light py-4 px-md-5 px-3">
            <a href="{{ url('/') }}">
                <img style="margin-right: 0.75rem" src="{{ asset('frontend/images/main-logo.png') }}" alt="main-logo"
                    width="50" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- mobile section -->
            <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                aria-labelledby="targetModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content modal-content bg-white border-0 pb-4">
                        <div class="modal-header" style="padding: 2rem; padding-bottom: 0">
                            <a class="modal-title" id="targetModalLabel">
                                <img style="margin-top: 0.5rem" src="{{ asset('frontend/images/main-logo.png') }}"
                                    alt="main-logo" width="40" />
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                            </button>
                        </div>
                        <!-- Mobile navbar -->
                        <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                            <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link  {{ request()->is('/') ? 'active' : '' }}"
                                        href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('info') ? 'active' : '' }}"
                                        href="{{ url('info') }}">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('intern') ? 'active' : '' }}"
                                        href="{{ url('intern') }}">Magang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('creation') ? 'active' : '' }}"
                                        href="{{ url('creation') }}">Himadira Karya</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->is('store') ? 'active' : '' }}"
                                        href="{{ url('store') }}">Store</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about') }}">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end section mobile -->

            <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link  {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link {{ request()->is('info') ? 'active' : '' }}"
                            href="{{ url('info') }}">Berita</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link {{ request()->is('intern') ? 'active' : '' }}"
                            href="{{ url('intern') }}">Magang</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link {{ request()->is('smart') ? 'active' : '' }}"
                            href="{{ url('smart') }}">Himadira Pintar</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link {{ request()->is('creation') ? 'active' : '' }}"
                            href="{{ url('creation') }}">Himadira Karya</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link {{ request()->is('store') ? 'active' : '' }}"
                            href="{{ url('store') }}">Store</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>
<!-- end navbar section -->
