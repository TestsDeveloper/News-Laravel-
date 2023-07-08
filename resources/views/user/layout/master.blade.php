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
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

</head>
<body>
    <div class="container-lg">
        @include("user.body.navbar")

        @yield("content")

    </div>

    @include('user.body.footer')

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
                            <form  method="POST" action="{{ route('login') }}" class="me-3">
                                @csrf
                                <div class="form-group mb-3">
                                    <input ype="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="form-control" placeholder="Enter your email" id="email">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Enter your password" id="password">
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
                            <form action="" class="me-3">
                                <div class="form-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email" id="email">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="name" name="name" class="form-control" placeholder="Enter your name" id="email">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="address" name="address" class="form-control" placeholder="Enter your address" id="address">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="phone" name="phone" class="form-control" placeholder="Enter your phone" id="phone">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password" id="password">
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
</body>
</html>
