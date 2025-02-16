<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Register</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('../../assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('../../assets/vendors/css/vendor.bundle.base.css')}}" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('../../assets/css/style.css')}}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-8 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3 text-center">Register</h3>
                <form action="{{ route('registeraksi') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control p_input" name="name" value="{{ old('name') }}" required />
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control p_input" name="email" value="{{ old('email') }}" required />
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input" name="password" required />
                  </div>
                  <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password:</label>
                    <input type="password" class="form-control p_input" id="password_confirmation" name="password_confirmation" required />
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary enter-btn" style="width: 150px; margin: 0 auto">Daftar</button>
                  </div>
                  <p class="sign-up text-center">Sudah punya akun?<a href="{{ route('login') }}">Login</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
