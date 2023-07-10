@extends("user.layout.master")
@section('content')
    <div class="container-lg">

        <!-- main title -->
        <div class="">
            <div class=" row d-flex">
                <a href="./detal.html" class="col-lg-6">
                    <div class="overflow-hidden  rounded-4">
                        <img class="w-100" src="{{ asset('storage/'.$lastNew->image) }}" alt="">
                    </div>

                </a>

                <div class="col-lg-6 ">
                    <div class=" h-100 d-flex flex-column justify-content-between">
                        <div class="fs-2 font-weight-bold text-muted ">
                            {{ $lastNew->title }}
                            <div class="mt-3 fs-5">
                                {{$lastNew->description}}
                            </div>
                        </div>
                        <div class=""><span class="text-danger">{{ $lastNew->category_name }}</span> - {{ $lastNew->created_at->format('D/F/Y') }}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- last news start -->
    <section class=" mt-4 p-2" id="lastNews">
        <div class="d-flex justify-content-between p-1">
            <h3 class="text-muted">Latest news</h3>
        </div>

        <div class="" id="">

            <div class="row ">

                @foreach ($latestNews as $latestNew)
                <div class="col-12 col-md-6 col-lg-4 mb-3 p-0 pe-md-1 pe-lg-0 p-3">
                    <div class="card p-0 rounded-4 h-100">
                        <div class="position-relative " style="height:189px;">
                            <img src="{{ asset('storage/'.$latestNew->image) }}" class="card-img-top rounded-top-4 w-100 h-100 object-fit-cover" alt="...">
                            <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-top-4"></div>
                            <div class="position-absolute top-0 bg-dark opacity-50 text-white px-3 end-0 py-1 rounded-top-4 rounded-start-0">
                                <i class="fa-sharp fa-solid fa-eye"></i> {{ $latestNew->view_count }}
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-muted">{{ $latestNew->title }}</h5>
                                    <small class="opacity-75">
                                        {{ $latestNew->created_at->format('D/F/Y') }}
                                    </small>
                                </div>
                                <p class="text-muted">
                                    {{ $latestNew->description }}
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="text-danger fw-bolder"><a href="#" class="text-decoration-none text-danger">Sport</a></div>
                                <div class="">
                                    <a href="#" class="text-decoration-none text-danger"><i class="fa-solid fa-heart text-danger fs-5 m-2"></i></a>
                                    <a href="#" class="text-decoration-none text-danger"><i class="fa-regular fa-message text-danger fs-5 m-2 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
        <!-- last news end -->


        <!-- trend news -->
        <section class=" mt-4 p-2 " id="trendNews">
            <h3 class="text-muted mb-3">Trend News</h3>

            <div class="row">
                <div class="col-lg-7 p-0 col-md-12 pe-2">
                    <div class="card bg-dark text-white rounded-4 overflow-hidden" style="height:350px;background-position: center;background-size: cover;width: 100%;">
                        <div class="overlay w-100 h-100 object-fit-cover bg-dark position-absolute opacity-50 imgContainer"></div>
                        <img src="https://assets-eu-01.kc-usercontent.com/1293c890-579f-01b7-8480-902cca7de55e/06389b47-0468-4f3c-8bf3-28f9ee07e076/2022.WarnerBros-BlackAdam-WebHP.png" class=" w-100 h-100 " alt="...">
                        <div class="position-absolute bottom-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between text-white">
                                    <h5 class="">Black Adam</h5>
                                    <small class="">3/17/2023</small>
                                </div>

                                <p>
                                    AC Milan and Warner Bros. Discovery join forces in an exclusive collaboration that will see the two iconic brands as protagonists in a series of special projects ahead of the release of the film Black Adam, in cinemas from Thursday 20 October.

                                    To celebrate the exciting new DC superhero,
                                </p>

                                <div class="d-flex justify-content-between">
                                    <div class="text-danger fw-bolder">Movie</div>
                                    <div class="">
                                        <i class="fa-solid fa-heart text-danger fs-5 m-2"></i>
                                        <i class="fa-regular fa-message text-danger fs-5 m-2 "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 p-0 col-md-12 mt-3 mt-lg-0 ps-2">
                    <div class="card bg-dark text-white rounded-4 overflow-hidden" style="height:350px;background-position: center;background-size: cover;width: 100%;">
                        <div class="overlay w-100 h-100 object-fit-cover bg-dark position-absolute opacity-50"></div>
                        <div class="imgContainer">
                            <img src="https://identity-mag.com/wp-content/uploads/2020/09/mulan-2020-681x383.png" class=" h-100 " alt="...">
                        </div>
                        <div class="position-absolute bottom-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="">Mulan</h5>
                                    <small class="">3/17/2023</small>
                                </div>

                                <p>
                                    Much like its predecessor, the 2020 Mulan starts in a China that will soon be threatened by a war from invaders. We don’t know that at the beginning, though.

                                    When the movie starts, we’re introduced to Mulan (young: Crystal Rao, older: Liu Yifei)
                                </p>

                                <div class="d-flex justify-content-between">
                                    <div class="text-danger fw-bolder">Movie</div>
                                    <div class="">
                                        <i class="fa-solid fa-heart text-danger fs-5 m-2"></i>
                                        <i class="fa-regular fa-message text-danger fs-5 m-2 "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 p-0 col-md-12 mt-3 mt-lg-3 pe-2">
                    <div class="card bg-dark text-white rounded-4 overflow-hidden" style="height:350px;background-position: center;background-size: cover;width: 100%;">
                        <div class="overlay w-100 h-100 object-fit-cover bg-dark position-absolute opacity-50"></div>
                        <div class="imgContainer">
                            <img src="https://www.syracuse.com/resizer/GNmUxLtWJe_Xa5XShSJK69B2YZ0=/1280x0/smart/cloudfront-us-east-1.images.arcpublishing.com/advancelocal/UBMBZJRM6JFIBI7H6GI3GJKTRU.jpg" class=" w-100 h-100 " alt="...">

                        </div>
                        <div class="position-absolute bottom-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="">Died in 2022</h5>
                                    <small class="">3/17/2023</small>
                                </div>

                                <p>
                                    James Caan, William Hurt, Angela Lansbury, Ray Liotta, and Sidney Poitier; music stars Coolio, Taylor Hawkins, Jerry Lee Lewis, Fleetwood Mac’s Christine McVie, Migos rapper Takeoff and Faithless singer Maxi Jazz;
                                </p>

                                <div class="d-flex justify-content-between">
                                    <div class="text-danger fw-bolder">Celebrity</div>
                                    <div class="">
                                        <i class="fa-solid fa-heart text-danger fs-5 m-2"></i>
                                        <i class="fa-regular fa-message text-danger fs-5 m-2 "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 p-0 col-md-12 mb-3 mt-3 mt-lg-3 ps-2">
                    <div class="card bg-dark text-white rounded-4 overflow-hidden" style="height:350px;background-position: center;background-size: cover;width: 100%;">
                        <div class="overlay w-100 h-100 object-fit-cover bg-dark position-absolute opacity-50"></div>
                        <img src="https://cdn.onefc.com/wp-content/uploads/2022/12/AungLaNSang-FanRong-ONEonPrimeVideo6-1200X800.jpg" class=" w-100 h-100 " alt="...">
                        <div class="position-absolute bottom-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between text-white">
                                    <h5 class="">Aung La N Sang</h5>
                                    <small class="">3/17/2023</small>
                                </div>

                                <p>
                                    A win for “The Burmese Python” would get him on track for the trilogy bout he so desperately wants with reigning ONE Middleweight World Champion Reinier de Ridder, who captured the Myanmar sports icon’s middleweight and light heavyweight belts.
                                </p>

                                <div class="d-flex justify-content-between">
                                    <div class="text-danger fw-bolder">MMA</div>
                                    <div class="">
                                        <i class="fa-solid fa-heart text-danger fs-5 m-2"></i>
                                        <i class="fa-regular fa-message text-danger fs-5 m-2 "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


        </section>


        <!-- popular news start -->
    <section class=" mt-4 p-2" id="lastNews">
        <div class="d-flex justify-content-between p-1">
            <h3 class="text-muted">Popular news</h3>
            <div class="text-danger " style="cursor: pointer;">See all<i class="ms-1 fa-solid fa-arrow-right-long"></i></div>
        </div>

        <div class="" id="">
            <div class="row gap-lg-4">
                <div class="col-12 col-md-6 col-lg mb-3 p-0 pe-md-1 pe-lg-0">
                    <div class="card p-0 rounded-4 h-100">
                        <div class="position-relative" style="height:189px;">
                            <img src="https://media.gq.com/photos/5d28ae8d3691470008b21798/16:9/w_2560%2Cc_limit/What's-the-Point-of-Ed-Sheeran-G-2019-071219.jpg" class="card-img-top rounded-top-4 w-100 h-100 object-fit-cover" alt="...">

                            <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-top-4"></div>
                            <div class="position-absolute top-0 bg-dark opacity-50 text-white px-3 end-0 py-1 rounded-top-4 rounded-start-0">
                                <i class="fa-sharp fa-solid fa-eye"></i> 20k
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-muted">Singer</h5>
                                    <small class="opacity-50">3/17/2023</small>
                                </div>
                                <p class="text-muted">
                                    In December, after performing with Beyoncé at the 2018 Global Citizens Festival in South Africa, Ed Sheeran found himself in the middle of a small controversy. There are a million ways to disrespect America’s honorary queen, and Sheeran, by being himself, arrived at one.
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="text-danger fw-bolder"><a href="#" class="text-decoration-none text-danger">Singer</a></div>
                                <div class="">
                                    <a href="#" class="text-decoration-none text-danger"><i class="fa-solid fa-heart text-danger fs-5 m-2"></i></a>
                                    <a href="#" class="text-decoration-none text-danger"><i class="fa-regular fa-message text-danger fs-5 m-2 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg mb-3 p-0 ps-md-1 ps-lg-0">
                    <div class="card p-0 rounded-4 h-100">
                        <div class="position-relative" style="height:189px;">

                            <img src="https://b-cdn.springnest.com/media/img/td/chinlone1ecaabf.jpg?crop=1157,642,6,0&width=620" class="card-img-top rounded-top-4 w-100 h-100 object-fit-cover" alt="...">

                            <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-top-4"></div>
                            <div class="position-absolute top-0 bg-dark opacity-50 text-white px-3 end-0 py-1 rounded-top-4 rounded-start-0">
                                <i class="fa-sharp fa-solid fa-eye"></i> 20k
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-muted">Chin Lone</h5>
                                    <small class="opacity-50">3/17/2023</small>
                                </div>
                                <p class="text-muted">
                                    Have you ever wondered how an ancient, non-competitive sport actually happens? Well, in Myanmar, a traditional sport that is more on sole teamwork rather than competition actually exists – that is what Chinlone is.
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="text-danger fw-bolder"><a href="#" class="text-decoration-none text-danger">Sport</a></div>
                                <div class="">
                                    <a href="#" class="text-decoration-none text-danger"><i class="fa-solid fa-heart text-danger fs-5 m-2"></i></a>
                                    <a href="#" class="text-decoration-none text-danger"><i class="fa-regular fa-message text-danger fs-5 m-2 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg mb-3 p-0">
                    <div class="card p-0 rounded-4 h-100 ">
                        <div class="position-relative" style="height:189px;">
                            <img src="https://dablew.pk/file/2021/12/Buy-Uniq-Hybrid-iPhone-13-Magsafe-Compatible-LifePro-Xtreme-Phone-Case-Vapour-Smoke-in-Pakistan-at-Dab-Lew-Tech-3-800x800.jpg" class="card-img-top rounded-top-4 w-100 h-100 object-fit-cover" alt="...">

                            <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-top-4"></div>
                            <div class="position-absolute top-0 bg-dark opacity-50 text-white px-3 end-0 py-1 rounded-top-4 rounded-start-0">
                                <i class="fa-sharp fa-solid fa-eye"></i> 20k
                            </div>
                        </div>

                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-muted">BI Phone 14 promax</h5>
                                    <small class="opacity-50">3/17/2023</small>
                                </div>
                                <p class="text-muted">
                                    Slim case that takes minimalist protection one step further. Its raised bezel come with AirLite™ corners that rise above the screen surface for added protection
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="text-danger fw-bolder"><a href="#" class="text-decoration-none text-danger">Phone</a></div>
                                <div class="">
                                    <a href="#" class="text-decoration-none text-danger"><i class="fa-solid fa-heart text-danger fs-5 m-2"></i></a>
                                    <a href="#" class="text-decoration-none text-danger"><i class="fa-regular fa-message text-danger fs-5 m-2 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- last news end -->

    </div>

@endsection
