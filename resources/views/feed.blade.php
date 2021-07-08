<?php
$title = "Product Feed";
$pcClass = "";
?>
@extends('blank-layout')

@section('scripts')
<script>
$(document).ready(() => {
	    let url = "product-feed?d=1";
        const req = new Request(url);
		
		//fetch request
	fetch(req)
	   .then(response => {
		   
		   if(response.status === 200){   
			   return response.blob();
		   }
		   else{
			   Swal.fire({
			 icon: 'error',
             title: "Technical error."
           });
		   }
	   })
	   .catch(error => {
		   Swal.fire({
			 icon: 'error',
             title: error
           });
	   })
	   .then(res => {
		   download(res,"product-feed.xml");
			
	   }).catch(error => {
		    Swal.fire({
			 icon: 'error',
             title: error
           });
	   });
		
        });
    </script>
@stop


@section('content')
@stop
