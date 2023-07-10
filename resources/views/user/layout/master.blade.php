<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<<<<<<< HEAD
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
=======
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

>>>>>>> 0ed069fa515c4b562c4d522b2b930a2c2f4862f1
</head>
<body>
    <div class="container-lg">
        @include("user.body.navbar")

        @yield("content")

    </div>
    {{-- footer --}}
    @include('user.body.footer')

    {{-- this is user login with livewire --}}


<!-- Modal -->
<div class="modal fade" id="loginSuccessModal" tabindex="-1" aria-labelledby="loginSuccessModal" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content bg-danger p-3">

        <h5 class="modal-title text-white" id="loginSuccessModal">
            Welcome back !!!
            @if(auth()->user())
            {{ Auth()->user()->name }}
            @endif
        </h5>




    </div>
  </div>
</div>

<div class="modal modal-lg fade" style="width: 100%" id="modalLogin">
    <div class="modal-dialog p-5">
      <div class="modal-content bg-light ">
          <div class="modal-body">
            <h4 class="modal-title text-center my-3 text-muted">Login Form</h4>
            <div class="p-2 rounded">
                <div class="row p-2">

                    <div class="col-6">
                        <img src="{{ asset("user/image/login image.png") }}" class=" w-100 h-100 object-fit-cover" alt="...">
                    </div>
                    <div class="col-6 p-3">

                        <form action="{{ route('login') }}" method="POST" class="me-3">
                            @csrf

                            <div class="form-group mb-3">
                                <input ype="email" name="email" :value="old('email')"  autofocus autocomplete="username" class="form-control" placeholder="Enter your email" id="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password"  autocomplete="current-password" class="form-control" placeholder="Enter your password" id="password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>

                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-outline-danger me-3">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>



      <div class="modal modal-lg fade" style="width: 100%" id="modalLRegister">
        <div class="modal-dialog p-5">
          <div class="modal-content bg-light ">
              <div class="modal-body">
                <h4 class="modal-title text-center my-3 text-muted">Register Form</h4>
                <div class="p-2 rounded">
                    <div class="row p-2">

                        <div class="col-6">
                            <img src="{{ asset("user/image/login image.png") }}" class=" w-100 h-100 object-fit-cover" alt="...">
                        </div>
                        <div class="col-6 p-3">

                            <form action="{{ route('register') }}" class="me-3" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="email" name="reemail" class="form-control" placeholder="Enter your email" id="email">
                                    @error('reemail')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="name" name="rename" class="form-control" placeholder="Enter your name" id="name">
                                    @error('rename')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="address" name="readdress" class="form-control" placeholder="Enter your address" id="address">
                                    @error('readdress')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="phone" name="rephone" class="form-control" placeholder="Enter your phone" id="phone">
                                    @error('rephone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="repassword" class="form-control" placeholder="Enter your password" id="password">
                                    @error('repassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your comfirm password" id="password">
                                    @error('repassword')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-5">
                                    <button class="btn btn-outline-danger me-3">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>


<!-- bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){


        @error('email')
            $('#modalLogin').modal('show');
        @enderror

        @error('password')
            $('#modalLogin').modal('show');
        @enderror

        @error('rename')
            $('#modalLRegister').modal('show');
        @enderror

        @error('repassword')
            $('#modalLRegister').modal('show');
        @enderror

        @error('rephone')
            $('#modalLRegister').modal('show');
        @enderror

        @error('readdress')
            $('#modalLRegister').modal('show');
        @enderror



        // so important code // this is welcome noti
    @if(auth()->user())
        if (performance.navigation.type === 1) {
        // Page has been reloaded
        $('#loginSuccessModal').modal('hide')
        } else {
        // Page is not reloaded
        $('#loginSuccessModal').modal('show')

        setTimeout(()=>{
            $('#loginSuccessModal').modal('hide')
        },2000)
        }

     @endif

    })

</script>
</body>

</html>
