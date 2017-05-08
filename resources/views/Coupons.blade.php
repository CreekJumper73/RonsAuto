

<a href="javascript:window.print()"><img src="{{ asset('/images/click-here-to-print.jpg') }}" onclick="this.style.display = 'none'"></a>
@foreach ($Coupon as $Coupon)
<div style="border-style:dashed;border-width:5px;font-size:25px;padding-top:10px;padding-bottom:10px;padding-left:10px">
<table>
<tr>
<td valign="top"><img src="{{ asset('/images/bw_logo.png') }}"></td>
<td valign="top" style="font-size:25px;">{{ $Coupon->Coupon_Description }}</td>
</tr>
</table>
    <div style="float:right"> </div>
   
</div>
@endforeach
