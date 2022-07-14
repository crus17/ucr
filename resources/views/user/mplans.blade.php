<?php
	if (Auth::user()->dashboard_style == "light") {
		$bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";

}
?> 
@extends('layouts.app')
    @section('content')
        @include('user.topmenu')
        @include('user.sidebar')
		<div class="main-panel bg-{{$bg}}">
			<div class="content bg-{{$bg}}">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-{{$text}}">Available packages</h1>
					</div>
					@if(Session::has('message'))
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-info alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<i class="fa fa-info-circle"></i> {{ Session::get('message') }}
							</div>
						</div>
					</div>
					@endif
		
					@if(count($errors) > 0)
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger alert-dismissable" role="alert" >
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								@foreach ($errors->all() as $error)
								<i class="fa fa-warning"></i> {{ $error }}
								@endforeach
							</div>
						</div>
					</div>
					@endif
					<div class="row mb-5">
						@foreach($plans as $plan)
						<div class="col-lg-4 p-4 card bg-{{$bg}} shadow-lg">
							<div class="pricing-table purple border bg-{{$bg}} shadow-lg">
								<!-- Table Head -->
								<div class="pricing-label d-inline">Fixed Price</div>
								<h2 class="text-{{$text}}">{{$plan->name}}</h2>
								<!-- Price -->
								<div class="price-tag">
									<span class="symbol text-{{$text}}">{{$settings->currency}}</span>
									<span class="amount text-{{$text}}">{{$plan->price}}</span>
								</div>
								<!-- Features -->
								<div class="pricing-features">
									<div class="feature text-{{$text}}">Minimum Possible Deposit:<span class="text-{{$text}}">{{$settings->currency}}{{$plan->min_price}}</span></div>
									<div class="feature text-{{$text}}">Maximum Possible Deposit:<span  class="text-{{$text}}">{{$settings->currency}}{{$plan->max_price}}</span></div>
									<div class="feature text-{{$text}}">Minimum Return:<span class="text-{{$text}}">{{$settings->currency}}{{$plan->minr}}</span></div>
									<div class="feature text-{{$text}}">Maximum Return:<span class="text-{{$text}}">{{$settings->currency}}{{$plan->maxr}}</span></div>
									<div class="feature text-{{$text}}">Gift Bonus:<span class="text-{{$text}}">{{$settings->currency}}{{$plan->gift}}</span></div>
									<!--<div class="feature text-{{$text}}">Duration:<span class="text-{{$text}}">{{$plan->expiration}}</span></div>-->
								</div> <br>
								<!-- Button -->
								<div class="">
									<form style="padding:3px;" role="form" method="post" action="{{action('Controller@joinplan')}}">
										<h5 class="text-{{$text}}">Amount to invest: ({{$settings->currency}}{{$plan->price}} default)</h5>
										<input type="number" min="{{$plan->min_price}}" max="{{$plan->max_price}}" name="iamount" placeholder="{{$settings->currency.$plan->price}}" class="form-control text-{{$text}} bg-{{$bg}}"> <br>
										<input type="hidden" name="duration" value="{{$plan->expiration}}">
										<input type="hidden" name="id" value="{{ $plan->id }}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="submit" class="btn btn-block pricing-action btn-primary nav-pills" value="Join plan" style=" border-radius: 40px;">
									</form>
								</div>
								
							</div>
							<!-- Deposit for a plan Modal -->
							<div id="depositModal{{$plan->id}}" class="modal fade" role="dialog">
								<div class="modal-dialog">
							<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header bg-dark">
										<h4 class="modal-title" style="text-align:center;">Make a deposit of <strong>{{$settings->currency}}{{$plan->price}} to join this plan</strong></h4>
											<button type="button" class="close text-white" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body bg-dark">
											<form style="padding:3px;" role="form" method="post" action="{{action('SomeController@deposit')}}">
												<input style="padding:5px;" class="form-control" value="{{$plan->price}}" type="text" name="amount" required><br/>
												
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<input type="hidden" name="pay_type" value="plandeposit">
												<input type="hidden" name="plan_id" value="{{$plan->id}}">
												<input type="submit" class="btn btn-default" value="Continue">
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- /deposit for a plan Modal -->
						</div>
						@endforeach
					</div>
				</div>	
			</div>
				
		@include('user.modals')
    @endsection