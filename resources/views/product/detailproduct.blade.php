@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	@foreach ($product as $p)
			<div class="col-md-3">
				
			</div>
			<div class="col-md-9">
				<section class="col-md-4">
					<img src="{{url($p->picture_product)}}">
				</section>	
				<section class="col-md-8">
					<h2>{{$p->product_name}}</h2>
					<h3>Rp {{number_format($p->price)}}</h3>
				</section>
				<form method="POST" action="{{url('/addcart')}}">
				{{ csrf_field() }}
				<input type="hidden" name="product" value="{{$p->id}}">
				<input type="hidden" name="price" value="{{$p->price}}">
				<input type="number" name="quantity">
				<button type="submit"><a href=""><i class="fa fa-plus"></i> Add Cart</a></button>
				</form>
			</div>
	@endforeach
		</div>
	</div>
@endsection

