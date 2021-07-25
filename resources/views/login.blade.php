@extends('layouts.authentication')
@section('content')
<h2 class="text-white "><span class="font-weight-light">ورود به حساب کاربری</span></h2>
<form class="form-signin shadow" method="post" action="{{route('api.login')}}">
    @csrf
    <div class="form-group float-label">
        <input type="number" name="mobile" id="inputPassword" class="form-control" required="">
        <label for="inputPassword" class="form-control-label">شماره همراه</label>
    </div>


    <div class="row">
        <div class="col-auto">
            <button class="btn btn-lg btn-default btn-rounded shadow"><span>ورود به سیستم </span><i class="material-icons">arrow_back</i></button>
        </div>
    </div>
</form>
<p class="text-center text-white">
    هنوز حساب ندارید؟ اینجا <br>
    <a href="/register">ثبت نام</a> کنید
</p>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
