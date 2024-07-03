<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html">
    <span style="color: white; font-size: 24px; font-weight: bold;">CineTrifecta</span>
</a>

        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle" src="assets/images/user.png" alt="" />
                </div>
                <div class="profile-name">
    @if (Auth::check())
        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
        <span>{{-- Tambahkan logika untuk menentukan status pengguna di sini --}}</span>
    @else
        <h5 class="mb-0 font-weight-normal">Anda belum login</h5>
    @endif
</div>

              </div>
              
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <span class="menu-icon">
            <i class="mdi mdi-key-variant" style="color: lightgreen;"></i>
        </span>
        <span class="menu-title">API KEY</span>
    </a>
</li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('introduction') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Introduction</span>
            </a>
          </li>
          

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Dokumentasi API</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('select') }}">Select </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('InsertFilm') }}">Insert Film</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('InsertRating') }}">Insert Rating</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>