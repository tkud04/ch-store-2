<?php
$title = "Return Policy";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
<section class="about-section">
                    <div class="container">
                        <h2 class="title mb-lg-9">{{$title}}</h2>
                        <div class="row mb-10">
                            <div class="col-md-12 order-md-first pt-md-5">
                                <div class="mb-8">
								  @if(count($info) > 0)
								   {!! $info['content'] !!}
								  @endif
								</div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Section-->
@stop
