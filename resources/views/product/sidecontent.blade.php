<div class="col-md-10 content">
	<section class="row product-list">
		@foreach ($products as $product)
		<div class="col-md-3">
			<a href="{{url('product/'.$product->slug.'/'.$product->slug_product)}}" class="thumbnail"><img src="{{url($product->picture_product)}}"></a>
			<label>{{$product->product_name}}</label>
		</div>
		@endforeach
	</section>	
</div>