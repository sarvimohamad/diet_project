@extends('layouts.authentication')
@section('content')
    <h2 class="text-white"><span class="font-weight-light">ثبت نام</span></h2>
    <form class="form-signin shadow" method="post" action="{{route('api.register')}}">
        @csrf
        <div class="form-group float-label active">
            <input type="text" name="name" class="form-control" required placeholder="نام و نام خانوادگی">
            <label class="form-control-label">نام و نام خانوادگی</label>
        </div>

        <div class="form-group float-label">
            <input type="text" name="mobile" class="form-control" required placeholder="شماره همراه">
            <label class="form-control-label">شماره همراه</label>
        </div>

        <div class="form-group my-4 text-left">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="1" id="accept" name="accept">
                <label class="custom-control-label" for="accept">من <a href="/#">شرایط و ضوابط</a>  را می پذیرم</label>
            </div>
        </div>

        <div class="row">
            <div class="col-auto">
                <button class="btn btn-lg btn-default btn-rounded shadow"><span>ثبت نام </span><i class="material-icons">arrow_back</i></button>
            </div>
        </div>
    </form>
    <p class="text-center text-white">
        قبلاً حساب دارید؟ اینجا <br>
        <a href="/login">وارد</a> شوید
    </p>
@endsection
