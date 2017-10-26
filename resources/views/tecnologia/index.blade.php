<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--titulo de la web-->
	<title>Tecnologia</title>    
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Slabo+27px|Titillium+Web|Zilla+Slab" rel="stylesheet">
    <!--boostrap css-->
    <link href="{{ asset('css/boostrap/bootstrap.min.css') }}" rel="stylesheet">
    <!--Carousel OWL-->
    <link href="{{ asset('css/owl/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl/owl.carousel.plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl/theme.css') }}" rel="stylesheet">
    <!--Carousel Gallery-->
    
    <link href="{{ asset('css/jcarousel/jcarousel.responsive.css') }}" rel="stylesheet">
    <!--Estilo Personalizado incluido ED-GRID-->
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
   
</head>
<body>
    
    <!-- :::: Header :::: -->
    <header class="header">
        <div class="ed-container full abcenter container-group-menu">
            <!--Menu Section Uno-->
            @include('layout.tecnologia.menUno')
            <!--Menu Section Dos-->
            <div class="ed-item main-center no-padding" id="stike" style="z-index: 1;">            
                @include('layout.tecnologia.menDos')
                <!--Menu Web--><br>
                @include('layout.tecnologia.menTres')
                <!--Menu Movil-->
                @include('layout.tecnologia.menCuatro')           
            </div>
        </div>
    </header>
    <!----- End Header ----->
    
    <!-- :::: Gallery :::: -->
    <section>
        <div class="ed-container abcenter">
            <div class="ed-item no-padding">
                <div class="jcarousel-wrapper">
                    <div class="jcarousel">
                        <ul>
                            <li>
                                <img src="{{ asset('img/gallery/imagen1.png') }}" alt="Image 1" class="img-thumbnail">
                                <img src="{{ asset('img/gallery/imagen-2.png') }}" alt="Image 1" class="img-thumbnail">
                                <img src="{{ asset('img/gallery/imagen-3.png') }}" alt="Image 1" class="img-thumbnail">
                            </li>
                            <li>
                                <img src="{{ asset('img/gallery/imagen-4.png') }}" alt="Image 1" class="img-thumbnail">
                                <img src="{{ asset('img/gallery/imagen-5.png') }}" class="img-thumbnail">
                            </li>
                            <li>
                                <img src="{{ asset('img/gallery/imagen-6.png') }}" alt="Image 1" class="img-thumbnail">
                                <img src="{{ asset('img/gallery/imagen-7.png') }}" alt="Image 1" class="img-thumbnail">
                            </li>
                            <li>
                                <img src="{{ asset('img/gallery/imagen-8.png') }}" alt="Image 1" class="img-thumbnail">
                            </li>
                            <li><img src="{{ asset('img/gallery/imagen-8.png') }}" alt="Image 5" class="img-thumbnail"></li>
                        </ul>
                    </div>
                    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                    <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                    <p class="jcarousel-pagination"></p>
                </div>
            </div>
        </div>
    </section>
    <!----- End Gallery ----->
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates quae nam iusto dolores illum molestiae neque vero. Nihil dolore in tenetur hic, architecto, placeat, fugiat molestias voluptates accusamus quos maxime.</p> 
   
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl/owl.carousel.plugins.js') }}"></script>
    <script src="{{ asset('js/owl/theme.js') }}"></script>
    <!--Carousel Gallery-->
    <script src="{{ asset('js/jcarousel/jquery.jcarousel.min.js') }}"></script>
    <script src="{{ asset('js/jcarousel/jcarousel.responsive.js') }}"></script>
    
    <script src='http://cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.min.js'></script>
    
    <script>
        $(document).ready(function(){

//	$("#banner").css({"height": $(window).height() + "px"});

	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

        if(scroll > 30){
            $(".menu-uno").css({"display": "none"});
            $("#stike").css({"position": "fixed","top": "0px","left": "0px" });
            $(".menu-tres").css({"background": "#fff"});
            $("#nav-menu").css({"position": "fixed","top": "100px" });
			
		}else{
            $(".menu-uno").css({"display": "flex"});
            $("#stike").css({"position": "relative","margin-top": "0px" });
            $(".menu-dos").css({"background": "#fff"});
//            $("#nav-menu").css({"position": "absolute","top": "0px" });
            $("#nav-menu").css({"position": "fixed","top": "8.4em" });
        }
        
        
       
	});

});
    </script>
    
   <script>

$(document).ready(main);
 
    var contador = 1; 
    function main () {
        $('.menu_bar').click(function(){
            if (contador == 1) {
                $('nav').animate({
                    left: '0'
                });
                contador = 0;
            } else {
                contador = 1;
                $('nav').animate({
                    left: '-100%'
                });
            }
        });
        // Mostramos y ocultamos submenus
        $('.submenu').click(function(){
            $(this).children('.children').slideToggle();
            });
    }
    </script>
    
    <script>
                
        $('.bxslider').bxSlider({
            minSlides: 1,
            maxSlides: 5,
            slideWidth: 189,
            slideMargin: 0,
            ticker: true,
            speed: 50000
        });
    </script>
    
            <script>           
           var mq768 = window.matchMedia("(min-width: 768px)")
            function mediaQueries(mq768){
                if(mq768.matches){
                    /*********** Web *******************/
                    $('#main-menu').on('mouseover','li',function(){
                         var id = $(this).attr('id'); 

                        if(id==id){
                            $('.tor').removeClass('show');                
                            $('.'+id).addClass('show animated fadeIn');                    
                        }else{                
                            $('.tor').removeClass('show');
                            $('.'+id).removeClass('animated fadeIn');
                        }console.log($(this).attr('id'));

                    });
                }else{
                    /************* movil ************/
//                     $('#icon-toggle').on('click',function(){
//                        
//                        
//                        $('.main-menu').toggleClass('show');
////                         console.log($(this).attr('id'));
//                        
//
//                    });
                    
                    $('#ofertas').on('click','li',function(){
                         var id = $(this).attr('id'); 

//                        if(id==id){
//                            $('.tor').removeClass('show');                
                            $('.sub-menu-content').toggleClass('show');                    
//                        }else{                
//                            $('.tor').removeClass('show');
//                            $('.'+id).removeClass('animated fadeIn');
//                        }
                        console.log($(this).attr('id'));

                    });
                    
                }
            }
            mediaQueries(mq768);
            mq768.addListener(mediaQueries);
  
            
        </script>
</body>
</html>