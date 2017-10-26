
@extends('layout.principal')

@section('content')   

	<!-- **** LOGO CLOUDS DESIGN ***** -->
	<div class="ed-container abcenter">
		<div class="ed-item">
			<img src="{{ asset('imagen/clon.png') }}" alt="" class="img-logo animated infinite pulse">
		</div>
	</div>

    <!-- **** Color que Cambia a la imagen ***** -->    
	<input type="radio" name="color" id="morado"/>
	<input type="radio" name="color" id="azulcyan"/>
	<input type="radio" name="color" id="verde"/>
	<input type="radio" name="color" id="azul"/>
	<input type="radio" name="color" id="fresa"/>
	<input type="radio" name="color" id="cafe"/>
	<input type="radio" name="color" id="gris"/> 
	
	<!-- **** LIMAGENES DE ROPA MUEJR Y HOMBRE Y TECNOLOGIA ***** --> 	
    <div class="ed-container abcenter" style="margin-bottom: 3em;">
        <div class="ed-item m-1-3">
           	<div class="cuadro">
           		<img src="{{ asset('imagen/hombre2.jpg') }}" alt="" class="img_principal_categoria"><br>
				<a href="{{ route('crear_ruta_hombre') }}" class="titulo_categoria boton-color1" style="text-decoration:none;">Ropa Hombre</a>
           	</div>					
        </div>
        <div class="ed-item m-1-3">
	        <div class="cuadro">
	           <img src="{{ asset('imagen/mujer.jpg') }}" alt="" class="img_principal_categoria"><br>
				<a href="{{ route('crear_ruta_mujer') }}" class="titulo_categoria boton-color1" style="text-decoration:none;">Ropa Mujer</a>
	        </div>
        </div>
        <div class="ed-item m-1-3">
	        <div class="cuadro">
	           <img src="{{ asset('imagen/multimedia.png') }}" alt="" class="img_principal_categoria"><br>
				<a href="{{ route('crear_ruta_tecnologia') }}" class="titulo_categoria boton-color1" style="text-decoration:none;">Tecnologia</a>
	        </div>
        </div>
    </div>        
       

@endsection

