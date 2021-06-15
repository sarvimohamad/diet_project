@extends('layouts.authentication')
@section('content')
    <h2 class="text-white"><span class="font-weight-light">تایید کد ارسالی</span></h2>
    <form class="form-signin shadow" method="post" action="{{route('api.verify')}}">
        @csrf
        <div class="form-group float-label">
            <input type="text" name="code" class="form-control" required placeholder="کد 5 رقمی">
            <label class="form-control-label">کد 5 رقمی</label>
        </div>
        <input type="hidden" name="hash" value="{{ Request::route('hash') }}">
        <input type="hidden" name="mobile" value="{{ Request::route('mobile') }}">
        <div class="row">
            <div class="col-auto">
                <button class="btn btn-lg btn-default btn-rounded shadow"><span>تایید </span><i class="material-icons">arrow_back</i></button>
            </div>
        </div>
    </form>

@endsection
