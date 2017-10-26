<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    
    <!--titulo de la web-->
	<title>Tecnologia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Slabo+27px|Titillium+Web|Zilla+Slab" rel="stylesheet">
    <!--boostrap css-->
    <link href="{{ asset('css/boostrap/bootstrap.min.css') }}" rel="stylesheet">
    <!--Carousel-->
    <link href="{{ asset('css/owl/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl/owl.carousel.plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl/theme.css') }}" rel="stylesheet">
    <!-- ESTILO DEL FONT -->
        <link href="{{ asset('font/flaticon.css') }}" rel="stylesheet">
    <!--Estilo Personalizado incluido ED-GRID-->
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tecnologia.css') }}" rel="stylesheet">
    
 
   
       
</head>
<body>
    
    <!-- :::: Header :::: -->
    <header class="header">
        <div class="ed-container full abcenter container-group-menu">
            <!--Menu Section Uno-->
            @include('layout.tecnologia.menUno')
            <!--Menu Section Dos-->
            @include('layout.tecnologia.menDos')
            <!--Menu Section Tres-->
            @include('layout.tecnologia.menTres')
        </div>
    </header>
    <!----- End Header ----->
    <!-- :::: Gallery :::: -->
    <section class="ed-container">      
        
        <div class="ed-item ed-container m-1-3 no-padding gallery">
            <div class="ed-item">
                <img src="http://lorempixel.com/410/219/animals" alt="" class="img-thumbnail">
            </div>
            <div class="ed-item ed-container no-padding">
                <div class="ed-item m-50">
                    <img src="http://lorempixel.com/200/215/animals" alt="" class="img-thumbnail">
                </div>
                <div class="ed-item m-50">
                    <img src="http://lorempixel.com/200/215/animals" alt="" class="img-thumbnail">
                </div>
            </div>           
        </div>
        <div class="ed-item m-1-3 no-padding gallery">
            <img src="http://lorempixel.com/410/441/animals" alt="" class="img-thumbnail">
        </div>
        <div class="ed-item ed-container m-1-3 no-padding gallery">
            <div class="ed-item">
                <img src="http://lorempixel.com/410/219/animals" alt="" class="img-thumbnail">
            </div>
            <div class="ed-item">
                <img src="http://lorempixel.com/410/219/animals" alt="" class="img-thumbnail">
            </div>
        </div>
        <div class="main-section">
            <div class="ed-container full no-padding">
                <div class="ed-item no-padding">
                    <!-- -------- BANER ROTATIVO -------- -->
                    <div class="col-inner owl-carousel article-carousel" data-items="1" data-items-tablet="1" data-items-mobile-landscape="1" data-items-mobile-portrait="1" data-loop="true" data-autoplay="false" data-autoplay-timeout="1300" data-autoplay-hover-pause="true" data-autoplay-speed="9000" data-dots="false" data-nav="true" data-nav-speed="600">

                        <!-- Article-1 -->
                        <article class="article article-uno bg-image cross-end main-center" style="background-image: url(img/article/article-1.jpg);">
                            <a href="#" target="_blank" class="article-link"></a> 
                            <div class="caption">
                                <h2 class="article-title">titulo de la nticia sadas asdasdsadasd  as</h2>
                                <div class="entry-meta">
                                    <span class="published">1 day ago</span>
                                    <span class="posted-by">- By <a href="#" title="View all posts by Admin">Admin</a></span>
                                    <span class="posted-in">- in <a href="#" title="View all posts in Holiday">Holiday</a></span>
                                </div>
                            </div>
                        </article>

                        <!-- Article-2 -->
                        <article class="article article-uno bg-image cross-end main-center" style="background-image: url(img/article/article-2.jpg);">
                            <a href="#" target="_blank" class="article-link"></a> 
                            <div class="caption">
                                <h2 class="article-title">titulo de la nticia</h2>
                                <div class="entry-meta">
                                    <span class="published">3 day ago</span>
                                    <span class="posted-by">- By <a href="#" title="View all posts by Admin">Admin</a></span>
                                    <span class="posted-in">- in <a href="#" title="View all posts in Holiday">Holiday</a></span>
                                </div>
                            </div>
                        </article>

                        <!-- Article-3 -->
                        <article class="article article-uno bg-image cross-end main-center" style="background-image: url(img/article/article-3.jpg);">
                            <a href="#" target="_blank" class="article-link"></a> 
                            <div class="caption">
                                <h2 class="article-title">titulo de la nticia</h2>
                                <div class="entry-meta">
                                    <span class="published">3 day ago</span>
                                    <span class="posted-by">- By <a href="#" title="View all posts by Admin">Admin</a></span>
                                    <span class="posted-in">- in <a href="#" title="View all posts in Holiday">Holiday</a></span>
                                </div>
                            </div>
                        </article>

                        <!-- Article-4 -->
                        <article class="article article-uno bg-image cross-end main-center" style="background-image: url(img/article/article-4.jpg);">
                            <a href="#" target="_blank" class="article-link"></a> 
                            <div class="caption">
                                <h2 class="article-title">titulo de la nticia</h2>
                                <div class="entry-meta">
                                    <span class="published">3 day ago</span>
                                    <span class="posted-by">- By <a href="#" title="View all posts by Admin">Admin</a></span>
                                    <span class="posted-in">- in <a href="#" title="View all posts in Holiday">Holiday</a></span>
                                </div>
                            </div>
                        </article>

                        <!-- Article-5 -->
                        <article class="article article-uno bg-image cross-end main-center" style="background-image: url(img/article/article-5.jpg);">
                            <a href="#" target="_blank" class="article-link"></a> 
                            <div class="caption">
                                <h2 class="article-title">titulo de la nticia</h2>
                                <div class="entry-meta">
                                    <span class="published">3 day ago</span>
                                    <span class="posted-by">- By <a href="#" title="View all posts by Admin">Admin</a></span>
                                    <span class="posted-in">- in <a href="#" title="View all posts in Holiday">Holiday</a></span>
                                </div>
                            </div>
                        </article>



                    </div> <!-- /.col-inner -->
                </div> 
            </div>
        </div>
    </section>
    <!----- End Gallery ----->
   
    
   
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl/owl.carousel.plugins.js') }}"></script>
    <script src="{{ asset('js/owl/theme.js') }}"></script>
    
    <script src='http://cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.min.js'></script>
    
   
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