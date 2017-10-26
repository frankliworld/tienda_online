@extends('layout.principal_ropa_hombre')

@section('content')

	<h2>Hola Ropa jajaj</h2>


 

	<div class="ed-container">
		@foreach ($ropa as $value)	

			<div class="ed-item m-25">
				<img src="{{asset('imagen/ropa_hombre').'/'.$value->imagen}}" alt="" width="200px">
				<h2>{{ $value->nombre }}</h2>
				<input type="text" class="text-center hidden" name="txt_nombre" id="txt_nombre" value="{{ $value->nombre }}">
				<input type="text" class="text-center hidden" name="txt_nombre" id="txt_nombre" value="{{ $value->precio }}">
				<input type="text" class="text-center hidden" name="txt_nombre" id="txt_nombre" value="{{ $value->codigo }}"> 
				<button class="btn btn-primary" type="subit">Añadir al Carrito</button>
			</div>
				
		@endforeach
	</div>

 </form>
	<strong></strong>

@endsection   