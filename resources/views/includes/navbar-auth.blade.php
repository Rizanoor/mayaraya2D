<section
      class="h-100 w-100"
      style="
        box-sizing: border-box;
        background-image: url('images/img_background.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      "
    >
      <div class="container-xxl mx-auto p-0 position-relative header-2-3">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a href="{{ route('home') }}">
            <img style="margin-right: 0.75rem; width: 85px" src="images/img_logo.png" alt="" data-aos="fade-down" />
          </a>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="modal-item modal fade"
            id="targetModal-item"
            tabindex="-1"
            role="dialog"
            aria-labelledby="targetModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog" role="document">
              <div class="modal-content border-0" style="background-color: rgb(240, 176, 170)">
                <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                  <a href="{{ route('home') }}" class="modal-title" id="targetModalLabel">
                    <img style="margin-top: 0.5rem; width: 85px" src="images/img_logo.png" alt="" />
                  </a>
                  <button type="button" class="close btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                  <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ route('home') }}" style="color: #e7e7e8">Beranda</a>
                    </li>
                  </ul>
                </div>
                <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                  <!-- <button class="btn btn-default btn-no-fill">Log In</button>
                <button class="btn btn-fill border-0 text-white">Try Now</button> -->
                </div>
              </div>
            </div>
          </div>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo" data-aos="fade-down">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}" style="color: #e7e7e8">Beranda</a>
              </li>
            </ul>
            <div class="gap-3">
              <!-- <button class="btn btn-default btn-no-fill">Log In</button>
            <button class="btn btn-fill text-white border-0">Try Now</button> -->
            </div>
          </div>
        </nav>
