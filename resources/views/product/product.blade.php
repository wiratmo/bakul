@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		@include('picture.slider')
		@include('product.sidebar')
		@include('product.sidecontent')
	</div>
</div>
@endsection

