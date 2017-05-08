@extends('layouts.app')

@section('content')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a coupon</div>

                <div class="panel-body">
                @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="/AddCoupon">
{{ csrf_field() }}
  <div class="form-group">
    <label for="Coupon Title">Coupon Title</label>
    <input type="text" class="form-control" id="Coupon_Word" name="Coupon_Word" placeholder="Title for this coupon" value="{{ old('Coupon_Word') }}">
  </div>
  <div class="form-group">
    <label for="Coupon Description">Coupon Description</label>
    <textarea id="Coupon_Description" name="Coupon_Description"  placeholder="The text to appear on the coupon" class="form-control">{{ old('Coupon_Description') }}</textarea>
  </div>
  <button type="submit" class="btn btn-default">Publish Coupon</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
