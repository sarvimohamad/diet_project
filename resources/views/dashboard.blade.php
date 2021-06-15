{{--@foreach($user as $row)--}}
{{--    <div>{{$row->name}}</div>--}}
{{--@endforeach--}}
{{--{{$user->name }}--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body class="antialiased">


    <!doctype html>
    <html lang="en" class="pink-theme">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Maxartkiller">

        <title>فروشگاه</title>

        <!-- Material design icons CSS -->
        <link rel="stylesheet" href="vendor/materializeicon/material-icons.css">

        <!-- Roboto fonts CSS -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Swiper CSS -->
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
    </head>


    <body>
    <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
            <img src="img/logo.png" alt="لوگو">
            <h1><span class="font-weight-light">برو</span> میوه</h1>
            <div class="laoderhorizontal">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="text-center">
            <div class="figure-menu shadow">
                <figure><img src="img/user1.png" alt=""></figure>
            </div>
            <h5 class="mb-1 "></h5>
            <p class="text-mute small">سیدنی، استرالیا</p>
        </div>
        <br>
        <div class="row mx-0">
            <div class="col">
                <div class="card mb-3 border-0 shadow-sm bg-template-light">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="text-secondary small mb-0">موجودی </p>
                                <h6 class="text-dark my-0">2585.00 تومان</h6>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-default button-rounded-36 shadow"><i class="material-icons">add</i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="subtitle text-uppercase"><span>منو</span></h5>
                <div class="list-group main-menu">
                    <a href="index.html" class="list-group-item list-group-item-action active">فروشگاه</a>
                    <a href="notification.html" class="list-group-item list-group-item-action">اعلان <span class="badge badge-dark text-white">2</span></a>
                    <a href="all-products.html" class="list-group-item list-group-item-action">همه محصولات</a>
                    <a href="my-order.html" class="list-group-item list-group-item-action">سفارشات</a>
                    <a href="{{route('show' , ['id'=>$user->id])}}" class="list-group-item list-group-item-action">پروفایل</a>
                    <a href="controls.html" class="list-group-item list-group-item-action">صفحه کنترل <span class="badge badge-light ml-2">کنترل</span></a>
                    <a href="setting.html" class="list-group-item list-group-item-action">تنظیمات</a>
                    <a href="/logout" class="list-group-item list-group-item-action mt-4">خروج</a>

                </div>
            </div>
        </div>

    </div>
    <div class="wrapper">
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <button class="btn  btn-link text-dark menu-btn"><img src="img/menu.png" alt=""><span class="new-notification"></span></button>
                </div>
                <div class="col text-center"><img src="img/logo-header.png" alt="" class="header-logo"></div>
                <div class="col-auto">
                    <a href="profile.html" class="btn  btn-link text-dark"><i class="material-icons">account_circle</i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <input type="text" class="form-control form-control-lg search my-3" placeholder="جستجو کردن">

            <h6 class="subtitle">دسته بندی ها</h6>
            <div class="row">
                <!-- Swiper -->
                <div class="swiper-container small-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/orange.png" alt="" class="small-slide-right">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">مرکبات </a>
                                            <p class="text-secondary small">پرتقال </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/banana-small.png" alt="" class="small-slide-right">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">گرمسیری </a>
                                            <p class="text-secondary small">موز ، انبه</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/grapes.png" alt="" class="small-slide-right">
                                        <div class="col-9">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">انواع توت ها</a>
                                            <p class="text-secondary small">توت فرنگی</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/orange.png" alt="" class="small-slide-right">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">مرکبات </a>
                                            <p class="text-secondary small"></p>پرتقال </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/banana-small.png" alt="" class="small-slide-right">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">گرمسیری </a>
                                            <p class="text-secondary small">موز ، انبه</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/grapes.png" alt="" class="small-slide-right">
                                        <div class="col-9">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">انواع توت ها</a>
                                            <p class="text-secondary small">توت فرنگی </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/orange.png" alt="" class="small-slide-right">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">مرکبات </a>
                                            <p class="text-secondary small">پرتقال </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/banana-small.png" alt="" class="small-slide-right">
                                        <div class="col-8">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">گرمسیری </a>
                                            <p class="text-secondary small">موز ، انبه</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <img src="img/grapes.png" alt="" class="small-slide-right">
                                        <div class="col-9">
                                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                            <a href="all-products.html" class="text-dark mb-1 mt-2 h6 d-block">انواع توت ها</a>
                                            <p class="text-secondary small">توت فرنگی ، تمشک ، بلوبری</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h6 class="subtitle">محصولات <a href="all-products.html" class="float-right small">مشاهده همه</a></h6>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">%10 تخفیف</div>
                            <figure class="product-image"><img src="img/apple.png" alt="" class=""></figure>
                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">سیب قرمز </a>
                            <p class="text-secondary small mb-2">از سیملا وارد شده است</p>
                            <h5 class="text-success font-weight-normal mb-0">120 تومان</h5>
                            <p class="text-secondary small text-mute mb-0">1.0 کیلوگرم</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">%10 تخفیف</div>
                            <figure class="product-image"><img src="img/grapes2.png" alt="" class=""></figure>
                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">انگور سبز</a>
                            <p class="text-secondary small mb-2">خنک تازه</p>
                            <h5 class="text-success font-weight-normal mb-0">150 تومان</h5>
                            <p class="text-secondary small text-mute mb-0">1.0 کیلوگرم</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-primary float-right mt-1">%10 تخفیف</div>
                            <figure class="product-image"><img src="img/orange-2.png" alt="" class=""></figure>
                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">نارنجی</a>
                            <p class="text-secondary small mb-2">شیرین و آبدار</p>
                            <h5 class="text-success font-weight-normal mb-0">120 تومان</h5>
                            <p class="text-secondary small text-mute mb-0">1.0 کیلوگرم</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-info float-right mt-1">%40 تخفیف</div>
                            <figure class="product-image"><img src="img/orange-small.png" alt="" class=""></figure>
                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">لیمو</a>
                            <p class="text-secondary small mb-2">بیشترین تقاضا</p>
                            <h5 class="text-success font-weight-normal mb-0">120 تومان</h5>
                            <p class="text-secondary small text-mute mb-0">1.0 کیلوگرم</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">%10 تخفیف</div>
                            <figure class="product-image"><img src="img/apple.png" alt="" class=""></figure>
                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">سیب قرمز </a>
                            <p class="text-secondary small mb-2">از سیملا وارد شده است</p>
                            <h5 class="text-success font-weight-normal mb-0">120 تومان</h5>
                            <p class="text-secondary small text-mute mb-0">1.0 کیلوگرم</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                            <div class="badge badge-success float-right mt-1">%10 تخفیف</div>
                            <figure class="product-image"><img src="img/grapes2.png" alt="" class=""></figure>
                            <a href="product-details.html" class="text-dark mb-1 mt-2 h6 d-block">انگور سبز</a>
                            <p class="text-secondary small mb-2">خنک تازه</p>
                            <h5 class="text-success font-weight-normal mb-0">150 تومان</h5>
                            <p class="text-secondary small text-mute mb-0">1.0 کیلوگرم</p>
                            <button class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-warning text-white my-3">
            <div class="row">
                <div class="container">
                    <div class="row  py-4 ">
                        <div class="col">
                            <h1 class="text-uppercase mb-3">٪20 تخفیف فروش فصل</h1>
                            <p class="mb-3">از کد <br><span class="text-dark">Coupan DFR0020 استفاده کنید</span></p>
                        </div>
                        <div class="col-5 col-md-3 col-lg-2 col-xl-2">
                            <img src="img/banana.png" alt="" class="mw-100 mt-3">
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <p>تمام موزهای تازه را با قیمت بسیار پایین تهیه کنید</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h6 class="subtitle">شما به دنبال:</h6>
            <div class="row">
                <div class="col">
                    <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">تازه</button>
                    <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">100 تومان - 299 تومان</button>
                    <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">600+</button>
                    <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">300 تومان - 599 تومان</button>
                    <button class="btn btn-lg btn-light btn-rounded shadow-xs my-1 mr-2">تحویل امروز</button>
                </div>
            </div>
            <h6 class="subtitle">به روزرسانی ها</h6>
            <div class="row">
                <!-- Swiper -->
                <div class="swiper-container news-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0 bg-dark text-white">
                                <figure class="background">
                                    <img src="img/fresh-orange-juice.jpg" alt="">
                                </figure>
                                <div class="card-body">
                                    <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_back</i></a>
                                    <h5 class="small">آبمیوه چند منظوره به شما امکان رشد سریعتر را می دهد</h5>
                                    <p class="text-mute small">توسط آناند منگل</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0 bg-dark text-white">
                                <figure class="background">
                                    <img src="img/orange-juice.jpg" alt="">
                                </figure>
                                <div class="card-body">
                                    <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_back</i></a>
                                    <h5 class="small">آبمیوه چند منظوره به شما امکان رشد سریعتر را می دهد</h5>
                                    <p class="text-mute small">توسط آناند منگل</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0 bg-dark text-white">
                                <figure class="background">
                                    <img src="img/fresh-orange-juice.jpg" alt="">
                                </figure>
                                <div class="card-body">
                                    <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_back</i></a>
                                    <h5 class="small">آبمیوه چند منظوره به شما امکان رشد سریعتر را می دهد</h5>
                                    <p class="text-mute small">توسط آناند منگل</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0 bg-dark text-white">
                                <figure class="background">
                                    <img src="img/orange-juice.jpg" alt="">
                                </figure>
                                <div class="card-body">
                                    <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_back</i></a>
                                    <h5 class="small">آبمیوه چند منظوره به شما امکان رشد سریعتر را می دهد</h5>
                                    <p class="text-mute small">توسط آناند منگل</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0 bg-dark text-white">
                                <figure class="background">
                                    <img src="img/fresh-orange-juice.jpg" alt="">
                                </figure>
                                <div class="card-body">
                                    <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_back</i></a>
                                    <h5 class="small">آبمیوه چند منظوره به شما امکان رشد سریعتر را می دهد</h5>
                                    <p class="text-mute small">توسط آناند منگل</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow-sm border-0 bg-dark text-white">
                                <figure class="background">
                                    <img src="img/orange-juice.jpg" alt="">
                                </figure>
                                <div class="card-body">
                                    <a href="#" class="btn btn-default button-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_back</i></a>
                                    <h5 class="small">آبمیوه چند منظوره به شما امکان رشد سریعتر را می دهد</h5>
                                    <p class="text-mute small">توسط آناند منگل</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col text-center">
                    <h5 class="subtitle mb-1">هیجان انگیزترین ویژگی</h5>
                    <p class="text-secondary">نگاهی به خدمات ما بیندازید</p>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <i class="material-icons mb-4 md-36 text-template">card_giftcard</i>
                            <h2>2546</h2>
                            <p class="text-secondary text-mute">هدیه بده</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <i class="material-icons mb-4 md-36 text-template">subscriptions</i>
                            <h2>635</h2>
                            <p class="text-secondary text-mute">صورتحساب ماهانه</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <i class="material-icons mb-4 md-36 text-template">local_florist</i>
                            <h2>1542</h2>
                            <p class="text-secondary text-mute">محیط زیست</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <i class="material-icons mb-4 md-36 text-template"> location_city</i>
                            <h2>154</h2>
                            <p class="text-secondary text-mute">چهار دفتر</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="profile.html" class="btn btn-link-default">
                                <i class="material-icons">account_circle</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="favorite-products.html" class="btn btn-link-default">
                                <i class="material-icons">favorite</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="cart.html" class="btn btn-default shadow centerbutton">
                                <i class="material-icons">local_mall</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="statistics.html" class="btn btn-link-default">
                                <i class="material-icons">insert_chart_outline </i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="index.html" class="btn btn-link-default active">
                                <i class="material-icons">store_mall_directory</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- notification -->
    <div class="notification bg-white shadow border-primary">
        <div class="row">
            <div class="col-auto align-self-center pr-0">
                <i class="material-icons text-primary md-36">fullscreen</i>
            </div>
            <div class="col">
                <h6>در تلفن مشاهده می کنید؟</h6>
                <p class="mb-0 text-secondary">برای ورود به حالت تمام صفحه برای هر صفحه ، دو ضربه سریع بزنید.</p>
            </div>
            <div class="col-auto align-self-center pl-0">
                <button class="btn btn-link closenotification"><i class="material-icons text-secondary text-mute md-18 ">close</i></button>
            </div>
        </div>
    </div>
    <!-- notification ends -->


    <!-- jquery, popper and bootstrap js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <!-- swiper js -->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- template custom js -->
    <script src="js/main.js"></script>

    <!-- page level script -->
    <script>
        $(window).on('load', function() {
            /* swiper slider carousel */
            var swiper = new Swiper('.small-slide', {
                slidesPerView: 'auto',
                spaceBetween: 0,
            });

            var swiper = new Swiper('.news-slide', {
                slidesPerView: 5,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination',
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    }
                }
            });

            /* notification view and hide */
            setTimeout(function() {
                $('.notification').addClass('active');
                setTimeout(function() {
                    $('.notification').removeClass('active');
                }, 3500);
            }, 500);
            $('.closenotification').on('click', function() {
                $(this).closest('.notification').removeClass('active')
            });
        });

    </script>

    </body>


    </html>



    </body>
</html>
