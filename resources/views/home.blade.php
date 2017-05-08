@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="panel-body">
                    You are logged in!<br>
    
                        <a href="/AddCoupon"><span class="glyphicon glyphicon glyphicon-plus"></span> Add a NEW coupon</p></a>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>Enabled Coupons</b></h3>
                        </div>
                        <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                            <th></th>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        @foreach ($Coupon as $Coupon)
                        <tr>
                        <td><a href="/RemoveCoupon/{{ $Coupon->id }}"> <span class="glyphicon glyphicon glyphicon-remove"></span></a></td>
                        <td >{{ $Coupon->id }}</td>
                        <td >{{ $Coupon->Coupon_Word }}</td>
                        <td >{{ $Coupon->Coupon_Description }}</td>
                        </tr>
                        @endforeach
                         </table> 


 
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
