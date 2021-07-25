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
<div class="wrapper">
    <div class="header">
        <div class="row no-gutters">
            <div class="col-auto">
                <a href="all-products.html" class="btn  btn-link text-dark"><i class="material-icons">navigate_next</i></a>
            </div>
            <div class="col text-center"><img src="/img/logo-header.png" alt="" class="header-logo"></div>
            <div class="col-auto">
                <a href="profile.html" class="btn  btn-link text-dark"><i class="material-icons">account_circle</i></a>
            </div>
        </div>
    </div>
    <div class="container">

        <!-- Swiper -->
        <div class="swiper-container product-details">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{\Illuminate\Support\Facades\Storage::url($diet->image)}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{\Illuminate\Support\Facades\Storage::url($diet->image)}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/img/sofa2.png" alt="">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>


        <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-rounded ml-2" data-toggle="modal" data-target="#share"><i class="material-icons mb-18 mr-2">subscriptions</i> اشتراک</a>
        <div class="badge badge-success float-right mt-1">10 درصد تخفیف</div>

        <p class="text-secondary my-3 small">
            <i class="material-icons text-warning md-18 vm">star </i>
            <i class="material-icons text-warning md-18 vm">star </i>
            <i class="material-icons text-warning md-18 vm">star </i>
            <i class="material-icons text-secondary md-18 vm">star </i>
            <i class="material-icons text-secondary md-18 vm">star </i>
            <span class="text-dark vm ml-2">امتیاز 4.2 </span> <span class="vm">بر اساس 245 بررسی</span>
        </p>

        <a href="#" class="text-dark mb-1 mt-2 h6 d-block">{{$diet->name}}</a>
        <p class="text-secondary small mb-2">از سیملا وارد شده است</p>

        <p class="text-secondary">{{$diet->desc}}</p>
        <div class="row mb-4">
            <div class="col">
                <h3 class="text-success font-weight-normal mb-0">{{$diet->price}}</h3>
                <p class="text-secondary text-mute mb-0">1.0 کیلوگرم</p>
            </div>
            <div class="col-auto align-self-center">
                <button class="btn btn-lg btn-default shadow btn-rounded"> <i class="material-icons md-18">shopping_cart</i> خرید </button>
            </div>
        </div>

        <h6 class="subtitle">بودجه محصول</h6>
        <div class="row bg-white py-3">
            <div class="col-6 mb-3">
                <p>
                    <i class="material-icons text-warning md-18 vm">star </i>
                    <i class="material-icons text-warning md-18 vm">star </i>
                    <i class="material-icons text-warning md-18 vm">star </i>
                    <i class="material-icons text-secondary md-18 vm">star </i>
                    <i class="material-icons text-secondary md-18 vm">star</i>
                </p>
            </div>
            <div class="col-6 mb-3 text-right">
                <p class="text-muted small">2 ساعت پیش</p>
            </div>
            <div class="col-auto align-self-start">
                <figure class="avatar avatar-50">
                    <img src="/img/user1.png" alt="">
                </figure>
            </div>
            <div class="col">
                <h6>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</h6>
                <p class="text-secondary small">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
            </div>
        </div>

        <h6 class="subtitle">افزودن نظر</h6>
        <p class="text-center">
            <i class="material-icons h3 text-warning vm">star </i>
            <i class="material-icons h3 text-warning vm">star </i>
            <i class="material-icons h3 text-warning vm">star </i>
            <i class="material-icons h3 text-secondary vm">star </i>
            <i class="material-icons h3 text-secondary vm">star</i>
        </p>

        <div class="form-group float-label active">
            <input type="text" class="form-control" required="" value="نام کاربر">
            <label class="form-control-label">نام</label>
        </div>
        <div class="form-group float-label active">
            <input type="email" class="form-control" required="" value="gofruites@gmail.co">
            <label class="form-control-label">آدرس ایمیل</label>
        </div>
        <div class="form-group float-label">
            <textarea class="form-control" required=""></textarea>
            <label class="form-control-label">نظر خود را تایپ کنید ...</label>
        </div>
        <a href="#" class="btn btn-lg btn-default btn-rounded shadow"><span>ارسال نظر </span><i class="material-icons">arrow_back</i></a>

        <br>
        <br>

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

<!-- Modal -->
<div class="modal fade" id="share" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-end" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <h6 class="subtitle mt-0">به subscriptions گذاشتن با</h6>
                <div class="row">
                    <div class="col-12">
                        <figure class="avatar avatar-50 border-0 mx-1">
                            <img src="/img/facebook.png" alt="">
                        </figure>
                        <figure class="avatar avatar-50 border-0 mx-1">
                            <img src="/img/whatsapp.png" alt="">
                        </figure>
                        <figure class="avatar avatar-50 border-0 mx-1">
                            <img src="/img/linkdedin.png" alt="">
                        </figure>
                        <figure class="avatar avatar-50 border-0 mx-1">
                            <img src="/img/twitter.png" alt="">
                        </figure>
                    </div>
                </div>

                <p class="subtitle text-secondary">اخیر متصل</p>
                <div class="row">
                    <div class="col-12">
                        <figure class="avatar avatar-50">
                            <img src="/img/user1.png" alt="">
                        </figure>
                        <figure class="avatar avatar-50">
                            <img src="/img/user2.png" alt="">
                        </figure>
                        <figure class="avatar avatar-50">
                            <img src="/img/user3.png" alt="">
                        </figure>
                        <figure class="avatar avatar-50">
                            <img src="/img/user4.png" alt="">
                        </figure>
                        <figure class="avatar avatar-50">
                            <img src="/img/user2.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        var swiper = new Swiper('.product-details ', {
            slidesPerView: 1,
            spaceBetween: 0,
            pagination: {
                el: '.swiper-pagination'
            }
        });


    });

</script>

</body>

</html>
