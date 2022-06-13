@extends('layouts.setting')

@section('title')
    Settings
@endsection

@section('content')
    <!-- Image-Avatar -->
    <section class="card-profile" data-aos="zoom-in">
        <div class="empty-3-1">
          <div class="content-4-1 d-flex flex-column align-items-center h-100 flex-lg-row"
            style="background-color: #EFE5E4; border-radius: 20px; border: 10px solid rgba(255, 255, 255, 0.25);">
            <div class="position-relative d-none d-lg-block h-100 width-left">
              <img class="position-absolute img-fluid centered img-avatar" src="images/img_avatar.png" alt="" />
                <a href="https://readyplayer.me/avatar" class="btn btn-filll position-absolute btn-avatar">Ganti avatar</a>

            </div>

            <div class="d-flex mx-auto align-items-center justify-content-center width-right"
              style="border-radius:0px 20px 20px 0px">
              <div class="right mx-lg-0">
                <div class="align-items-center justify-content-center d-lg-none d-flex">
                  <img class="img-fluid" src="images/img_avatar.png" alt="" />
                  <a href="https://readyplayer.me/avatar" class="btn btn-filll position-absolute btn-avatar-mobile">Ganti avatar</a>
                </div>
                <p class="title-text">
                  <img src="images/icon-user.png" alt="" style="width: 50px;
                      height: 50px;
                      float:left;
                      border-radius: 50%;
                      margin-right: 25px">
                  Username
                </p>

                <h4 class="caption-text">
                    {{ Auth::user()->name }}
                </h4>
                <hr style="border: 4px solid #EFE5E4">
                <form style="margin-top: 1.5rem" action="" method="post">

                  <div style="margin-bottom: 1.75rem">
                    <label for="" class="d-block input-label mb-2">Username</label>
                    <div class="d-flex w-100 border-bottom">
                      <input class="input-field border-0" type="Text" name="" id="" placeholder="Username"
                             value="{{old('name') ?: Auth::user()->name}}"
                             autocomplete="on" required />
                    </div>
                  </div>
                  <div style="margin-bottom: 1.75rem">
                    <label for="" class="d-block input-label mb-2">Email Address</label>
                    <div class="d-flex w-100 border-bottom">
                      <input class="input-field border-0" type="email" name="" id="" placeholder="Your Email Address"
                             value="{{old('email') ?: Auth::user()->email}}"
                             autocomplete="on" required />
                    </div>
                  </div>

                  <div style="margin-bottom: 1.75rem">
                    <label for="" class="d-block input-label mb-2">Password</label>
                    <div class="d-flex w-100 border-bottom">
                      <input class="input-field border-0" type="password" name="" id="password-content-4-1"
                        placeholder="Your Password" minlength="6" required />
                    </div>
                    <small>kosongkan jika tidak ingin di ganti</small>
                  </div>

                  <div style="margin-top: 1rem">
                    <label for="" class="d-block input-label mb-2">Foto</label>
                    <div class="d-flex w-100 border-bottom">
                      <input class="input-field border-0" type="file" name="" id="password-content-4-1"
                        placeholder="Your Password" minlength="6" required />
                    </div>
                  </div>
                  <button class="btn btn-filll d-block w-100" type="submit">
                    Edit
                  </button>
                </form>
              </div>
            </div>
          </div>


        </div>
      </section>



  </section>

@endsection
