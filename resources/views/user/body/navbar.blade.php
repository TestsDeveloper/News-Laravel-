        <!-- nav bar start -->
        <div class="m-md-5 d-flex justify-content-between ">
            <div>
                <h2 class="text-danger m-3">Bultin</h2>
            </div>

            <ul class="text-start list-inline d-md-flex text-secondary d-none ">
                <li class="p-4"><a href="index.html" class="text-decoration-none text-black">Home</a></li>
                <li class="p-4"><a href="#" class="text-decoration-none text-secondary">About</a></li>
                <li class="p-4"><a href="#" class="text-decoration-none text-secondary">Contact</a></li>
            </ul>

            <div class="m-3">
               @if(!auth()->user())
               <button class="btn btn-outline-danger me-3 px-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLogin">Sign In</button>
               <button class="btn btn-outline-danger me-3 px-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLRegister">Sign Up</button>

               @else
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    @if(auth()->user())
                     <div class="btn position-relative">
                        {{Auth::user()->name}} <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle p-2 me-5 mt-2" style="background-color: rgb(62, 251, 48)"><span class="visually-hidden">unread messages</span></span>
                    </div>


                    @endif
                    <button class="btn btn-outline-danger ms-4 me-3 px-4 shadow-sm" >Logout</button>
                </form>
               @endif

            </div>
        </div>
        <!-- nav bar end -->
