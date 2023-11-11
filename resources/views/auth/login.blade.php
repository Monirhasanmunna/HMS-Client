<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Oct 2022 10:41:36 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="{{asset('backend/login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/login/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/login/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/login/css/iofrm-theme8.css')}}">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="#">
                <div class="logo">
                    <img class="logo-size" src="{{asset('backend/login/images/logo-light.svg')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img class="mb-5" src="{{asset('photos/qblogo2.png')}}" alt="">
                    <h3>Simple || Digital || Secure || Worldwide</h3>
                    <p>We are at Your Side to Make Your System Faster & Easier Through Modern Technology. With Security.</p>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside" style="margin-bottom:40px !important">
                            <a href="#">
                                <img style="width:170px;" src="{{asset('photos/qblogo3.png')}}" alt="">
                            </a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control mb-0" id="email" 
                                class="@error('email') is-invalid @enderror">

                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Email address</label>
                                <input type="password" name="password" class="form-control mb-0" id="password" 
                                class="@error('password') is-invalid @enderror">

                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            {{-- <input class="form-control" type="password" name="password" placeholder="Password"
                            class="@error('password') is-invalid @enderror">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('backend/login/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/login/js/popper.min.js')}}"></script>
<script src="{{asset('backend/login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/login/js/main.js')}}"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Oct 2022 10:41:47 GMT -->
</html>