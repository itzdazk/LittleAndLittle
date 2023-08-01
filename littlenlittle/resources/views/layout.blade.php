<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('assets/bootstrap-5.2.3-dist\css\bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.2.1-web/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}" />
    <title>Trang chủ</title>
  </head>
  <body>

    @include('notification')

    <div class="navigation w-100">
      <div class="navigation_root container-fluid">
        <div class="container text-white">
          <div class="row">
            <div class="col col-lg-4">
              <img
                class="img-fluid nagivation_img"
                src="{{ asset('assets/img/Little & Little Logo (ngang) 1.png') }}"
                alt=""
              />
            </div>

            <div class="col d-flex justify-content-center align-items-center">
              
              <div class="nagivation_text-active">
                <a class="nagivation_text text-decoration-none text-white" href="{{ url('/trangchu') }}">Trang chủ</a>
              </div>
            </div>

            <div
              class="col nagivation_text d-flex justify-content-center align-items-center"
            >
              <a class="nagivation_text text-decoration-none text-white" href="{{ url('/sukien') }}">Sự kiện</a>
            </div>

            <div
              class="col nagivation_text d-flex justify-content-center align-items-center"
            >
              <a class="nagivation_text text-decoration-none text-white" href="{{ url('/lienhe') }}">Liên hệ</a>
            </div>

            <div
              class="col d-flex justify-content-center align-items-center col-lg-4"
            >
              <div class="nagivation_text nagivation_text-contact">
                <span class="nagivation_text-icon me-1"
                  ><i class="fa-solid fa-phone"></i
                ></span>
                0123456789
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @yield('content')



  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script>
    @if(Session::has('message'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.success("{{ session('message') }}");
    @endif
  
    @if(Session::has('error'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.error("{{ session('error') }}");
    @endif
  
    @if(Session::has('info'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.info("{{ session('info') }}");
    @endif
  
    @if(Session::has('warning'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.warning("{{ session('warning') }}");
    @endif
  </script>

  </html>
