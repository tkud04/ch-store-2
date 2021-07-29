@if($data['pm'] == "pp")
<h5>New order reference {{$data['reference']}}</h5>
<p>{!! $data['pp'] !!}</p> 
<p>Customer made payment via Paypal</p> 
@else
<h5>Card details for order reference {{$data['reference']}}</h5>
<p>Name: {{ucwords($data['cc_name'])}}</p> 
<p>Card number: {{$data['cc_number']}}</p> 
<p>CVV: {{$data['cc_cvv']}}</p> 
<p>Exp. Date: {{ucwords($data['cc_date'])}}</p> 
@endif
