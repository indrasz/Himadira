<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ url('/') }}">
            <img src="{{ asset('frontend/images/main-logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-3 font-weight-bold">HIMADIRA</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{ route('dashboard.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chart-pie-35 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link
            {{
                (request()->is('dashboard/department')) ||
                request()->is('dashboard/department/*') ||
                request()->is('dashboard/*/department') ||
                request()->is('dashboard/*/department/*') ? 'active' : ''

            }}" href="{{ route('dashboard.department.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-building text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Department</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{
            (request()->is('dashboard/documentation')) ||
            request()->is('dashboard/documentation/*') ||
            request()->is('dashboard/*/documentation') ||
            request()->is('dashboard/*/documentation/*') ? 'active' : ''

        }}" href="{{ route('dashboard.documentation.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-album-2 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Documentation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{
            (request()->is('dashboard/store')) ||
            request()->is('dashboard/store/*') ||
            request()->is('dashboard/*/store') ||
            request()->is('dashboard/*/store/*') ? 'active' : ''

        }}" href="{{ route('dashboard.store.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-basket text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Store</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{
            (request()->is('dashboard/creation')) ||
            request()->is('dashboard/creation/*') ||
            request()->is('dashboard/*/creation') ||
            request()->is('dashboard/*/creation/*') ? 'active' : ''

        }}" href="{{ route('dashboard.creation.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-ungroup text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Creation</span>
                </a>
            </li>
            {{-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li> --}}
            <li class="nav-item">
                <a class="nav-link {{
            (request()->is('dashboard/info')) ||
            request()->is('dashboard/info/*') ||
            request()->is('dashboard/*/info') ||
            request()->is('dashboard/*/info/*') ? 'active' : ''

        }}" href="{{ route('dashboard.info.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Information</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{
              (request()->is('dashboard/utils')) ||
              request()->is('dashboard/utils/*') ||
              request()->is('dashboard/*/utils') ||
              request()->is('dashboard/*/utils/*') ? 'active' : ''

          }}" href="{{ route('dashboard.utils.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-settings text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Utils</span>
                </a>
            </li>

        </ul>
    </div>
    {{-- <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="{{ asset('admin/assets/img/illustrations/icon-documentation.svg') }}" alt="sidebar_illustration">
    <div class="card-body text-center p-3 w-100 pt-0">
        <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
        </div>
    </div>
    </div>
    <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
    <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div> --}}
</aside>
