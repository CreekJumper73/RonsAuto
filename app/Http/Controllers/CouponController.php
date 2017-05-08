<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupons;
use Illuminate\Support\Facades\Auth;
use Session;

class CouponController extends Controller
{
    //
    public function index() {
    $Coupon = Coupons::all();
    return view('Coupons')->with('Coupon', $Coupon);
}

 public function insert(Request $request) {
 	if (Auth::check()) {
 	   $this->validate($request, [
        'Coupon_Word' => 'required',
        'Coupon_Description' => 'required',
    ]);
    $Coupon = new Coupons;
    $Coupon->Coupon_Word = request('Coupon_Word');
	$Coupon->Coupon_Description = request('Coupon_Description');
	$Coupon->toArray();
	$Coupon->Save();
	Session::flash('message', 'Coupon Saved!'); 
	return redirect('/home');
} else {

	return redirect('/');
}
}


 public function delete($id) {
    if (Auth::check()) {
           $Coupon = Coupons::find($id);
           if ($Coupon) {
            Session::flash('message', 'Coupon Removed!'); 
            $Coupon->delete();
           } else {

            Session::flash('message', 'Coupon not found!'); 
           }
           return redirect('/home');
       }
   }

}
