<!doctype html>
<html lang="en" class="brown-theme">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Maxartkiller">

    <title>فروشگاه</title>

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="/vendor/materializeicon/material-icons.css">

    <!-- Roboto fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link href="/vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Chosen multiselect CSS -->
    <link href="/vendor/chosen_v1.8.7/chosen.min.css" rel="stylesheet">

    <!-- nouislider CSS -->
    <link href="/vendor/nouislider/nouislider.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
<div class="row no-gutters vh-100 loader-screen">
    <div class="col align-self-center text-white text-center">
        <img src="/img/logo.png" alt="لوگو">
        <h1><span class="font-weight-light">برو</span> مبلمان</h1>
        <div class="laoderhorizontal"><div></div><div></div><div></div><div></div></div>
    </div>
</div>
<div class="sidebar">
    <div class="text-center">
        <div class="figure-menu shadow">
            <figure><img src="/img/user1.png" alt=""></figure>
        </div>
        <h5 class="mb-1 ">{{$user->name}}</h5>
        <p class="text-mute small">ایران , تهران</p>
    </div>
    <br>
    <div class="row mx-0">
        <div class="col">
            <div class="card mb-3 border-0 shadow-sm bg-template-light">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="text-secondary small mb-0">موجودی </p>
                            <h6 class="text-dark my-0">2585000 تومان</h6>
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
                <a href="notification.html" class="list-group-item list-group-item-action"> اعلانات <span class="badge badge-dark text-white"> 2 </span> </a>
                <a href="all-products.html" class="list-group-item list-group-item-action">همه محصولات</a>
                <a href="my-order.html" class="list-group-item list-group-item-action">سفارشات </a>
                <a href="/profile/{{$user->id}}" class="list-group-item list-group-item-action"> پروفایل </a>
                <a href="controls.html" class="list-group-item list-group-item-action">صفحات کنترل <span class="badge badge-light ml-2">بررسی</span></a>
                <a href="setting.html" class="list-group-item list-group-item-action"> تنظیمات </a>
                <a href="login.html" class="list-group-item list-group-item-action mt-4">خروج از سیستم</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="header">
        <div class="row no-gutters">
            <div class="col-auto">
                <button class="btn  btn-link text-dark menu-btn"><img src="/img/menu.png" alt=""><span class="new-notification"></span></button>
            </div>
            <div class="col text-center"><img src="/img/logo-header.png" alt="" class="header-logo"></div>
            <div class="col-auto">
                <a href="{{route('show' , ['id'=>$user->id])}}" class="btn  btn-link text-dark"><i class="material-icons">account_circle</i></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="subtitle h6">
            <div class="d-inline-block">
                سبد خرید من<br>
                <p class="small text-mute">3 مورد</p>
            </div>
        </div>




        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">add</th>
                <th scope="col">delete</th>
            </tr>
            </thead>
            @php($total = 0)
            <tbody>

            @foreach($carts as $index => $cart)
                <tr>

                    <th>
                        {{$index+1}}
                    </th>
                    <td>{{$cart->diet->name}}</td>
                    <td>{{$cart->diet->price}}</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>

              <input type="hidden" name="total" value="{{$total += $cart->qty * $cart->diet->price}}">
{{--                <p>{{$total += $cart->diet->price}}</p>--}}
            @endforeach

            </tbody>
        </table>


        <div class="col">
                        <div class="form-group mb-0 float-label active">
                            <input type="text" class="form-control" required="" value="ADU00548DOU">
                            <label class="form-control-label">کد تخفیف را اعمال کنید</label>
                        </div>
                    </div>
                    <div class="col-auto align-self-center">
                        <button class="btn btn-default button-rounded-36 shadow"><i class="material-icons">arrow_back</i></button>
                    </div>
                </div>
            </div>
            <div class="card-body border-top-dashed">
                <div class="row justify-content-md-center ">
{{--                    <div class="col-4">--}}
{{--                        <p class="text-secondary mb-1 small">مبلغ کل</p>--}}
{{--                        <h5 class="mb-0">360000 تومان</h5>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-auto text-center">--}}
{{--                        <p class="text-secondary mb-1 small">جمع کل</p>--}}
{{--                        <h5 class="mb-0"> {{$total}} </h5>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 text-right">--}}
{{--                        <p class="text-secondary mb-1 small">تخفیف</p>--}}
{{--                        <h5 class="mb-0"> 100000 تومان</h5>--}}
{{--                    </div>--}}
                </div>

            </div>
        </div>
        <div class="card mb-4 border-0 shadow-sm border-top-dashed">
            <div class="card-body text-center">
                <p class="text-secondary my-1">مبلغ قابل پرداخت</p>
                <h3 class="mb-0">{{$total}}</h3>
                <br>
                <a href="checkout.html" class="btn btn-lg btn-success text-white btn-block btn-rounded shadow"><span></span><span>پرداخت </span><i class="material-icons">arrow_back</i></a>
            </div>
        </div>



    </div>
{{--    <div class="footer">--}}
{{--        <div class="no-gutters">--}}
{{--            <div class="col-auto mx-auto">--}}
{{--                <div class="row no-gutters justify-content-center">--}}
{{--                    <div class="col-auto">--}}
{{--                        <a href="profile.html" class="btn btn-link-default">--}}
{{--                            <i class="material-icons">account_circle</i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-auto">--}}
{{--                        <a href="favorite-products.html" class="btn btn-link-default">--}}
{{--                            <i class="material-icons">favorite</i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-auto">--}}
{{--                        <a href="cart.html" class="btn btn-default shadow centerbutton">--}}
{{--                            <i class="material-icons">local_mall</i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-auto">--}}
{{--                        <a href="statistics.html" class="btn btn-link-default">--}}
{{--                            <i class="material-icons">insert_chart_outline </i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-auto">--}}
{{--                        <a href="index.html" class="btn btn-link-default active">--}}
{{--                            <i class="material-icons">store_mall_directory</i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- jquery, popper and bootstrap js -->
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/jquery.cookie.js"></script>

<!-- swiper js -->
<script src="/vendor/swiper/js/swiper.min.js"></script>

<!-- nouislider js -->
<script src="/vendor/nouislider/nouislider.min.js"></script>

<!-- chosen multiselect js -->
<script src="/vendor/chosen_v1.8.7/chosen.jquery.min.js"></script>

<!-- template custom js -->
<script src="/js/main.js"></script>

<!-- page level script -->
<script>
    $(window).on('load', function() {

    });

</script>
</body>
</html>
