<section class="h-100 w-100" style="box-sizing: border-box;
                                    background-image: url('images/img_background.png');
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                    background-attachment: fixed;
                                    background-position: center;
                                    ">
  <div class="container-xxl mx-auto p-0  position-relative header-2-1">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="{{ route('home') }}">
          <img style="margin-right: 0.75rem; width: 100px;" src="images/img_logo.png" alt="" data-aos="fade-down" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content border-0" style="background-color: rgb(240, 176, 170) ;">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a href="route('home')" class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem; width: 50px;" src="images/img_logo.png" alt="" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a href="{{ route('home') }}" class="nav-link" href="index.html">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tentang" class="nav-link" href="#">Tentang</a>
                  </li>
                  @guest
                    <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                        <a href="{{ route('login') }}" class="btn btn-default btn-no-fill">
                            Masuk
                        </a>
                        <a href="../index.html" class="btn btn-fill text-white">3D</a>
                    </div>
                  @endguest

                  @auth
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-weight: 800;">
                                Hai, {{ Auth::user()->name }} !
                                <img src="{{ Storage::url('image/' . Auth::user()->photo) }}" class="rounded-circle user-photo w-15" alt="" style="max-height: 45px; border: 5px solid rgba(255, 255, 255, 0.25);"">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item" style="color:#5C2C8F; font-weight: 800;">3D</a>
                                <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">Profil</a>
                                <a href="{{ route('logout') }}"  class="dropdown-item"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                  @endauth
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3">
                {{-- <a href="login.html" class="btn btn-default btn-no-fill">
                  Masuk
                </a>
                <a href="register.html" class="btn btn-fill text-white">Daftar</a> --}}
              </div>
            </div>
        </div>
      </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo" data-aos="fade-down">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a href="{{ route('home') }}" class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="#tentang" class="nav-link" href="#">Tentang</a>
                </li>
            </ul>

          @guest
            <div class="gap-3">
                <a href="{{ route('login') }}" class="btn btn-default btn-no-fill">
                Masuk
                </a>
                <a href="../index.html" class="btn btn-fill text-white">
                3D
                </a>
            </div>
          @endguest

            @auth
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-weight: 800;">
                            Hai, {{ Auth::user()->name }} !
                            <img src="{{ Storage::url('image/' . Auth::user()->photo) }}" class="rounded-circle user-photo w-15" alt="" style="max-height: 45px; border: 5px solid rgba(255, 255, 255, 0.25);">
                            {{-- @if (Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" class="rounded-circle user-photo w-15" alt="" style="max-height: 45px; border: 5px solid rgba(255, 255, 255, 0.25);">
                            @else
                                <img src="{{ Storage::url('image/' . Auth::user()->photo) }}" class="rounded-circle user-photo w-15" alt="" style="max-height: 45px; border: 5px solid rgba(255, 255, 255, 0.25);">
                            @endif --}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            {{-- <a href="#" class="dropdown-item" style="color:#5C2C8F; font-weight: 800;">3D</a> --}}
                            <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">Profil</a>
                            <a href="{{ route('logout') }}"  class="dropdown-item"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
            @endauth
                </ul>

        </div>
      </nav>

      <!-- Image-Landmark -->
      <section class="h-100 w-100">
        <div class="empty-3-1" data-aos="zoom-in">
          <div class="mx-auto d-flex align-items-center justify-content-center flex-column">
           <img class="main-img" src="images/img_landmark.png" alt="">
          </div>
        </div>
    </section>
  </div>
</section>
