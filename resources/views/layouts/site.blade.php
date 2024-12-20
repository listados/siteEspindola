<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="description" content="Espindola Imobiliária, site de divulgação de imóveis para alugar ou comprar">
      <meta name="author" content="Excellence Soft">
      <meta name="keywords" content="imóveis, fortaleza, aluguel, alugar, comprar imóvel, vender imóvel, imobiliária" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta name="adopt-website-id" content="7bb59424-366f-4fb1-87e1-ee2cd4ada15c" />
      <link rel="icon" href="{{ url('img/site/favicon.png') }}">
      <meta property="og:url" content="{{ $meta_site['url'] }}" />
      <meta property="og:title" content="{{ $meta_site['title'] }}" />
      <meta property="og:type" content="{{ $meta_site['type'] }}" />
      <meta property="og:description" content="{{ $meta_site['description'] }}" />
      <meta property="og:image" content="{{ $meta_site['image'] }}" />
      <meta property=”og:site_name” content="Espíndola imobiliária"/>
      <title>{{ $page_title or "Site" }} @yield('title')</title>
      <!-- CSS file links -->
      <link rel="stylesheet" href="{{ url('css/all.css') }}" type="text/css" media="all" >
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      {{ Html::style('assets/pnotify/dist/pnotify.css') }}
      {{ Html::style('assets/pnotify/dist/pnotify.buttons.css') }}

      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      {{ Html::style('assets/jquery-ui/jquery-ui.min.css') }}
      {{ Html::style('assets/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css') }}
      {{ Html::style('assets/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinHTML5.css') }}
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      {{ Html::style('assets/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css') }}
      <style type="text/css">
        
      </style>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <!-- Start of espindola Zendesk Widget script -->
      <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=31fa0b5e-57fe-49ec-b897-5909920d237e"> </script>
      <script>
         //GLOBALIZANDO URL
         var project_survey = '';
         domin  =  window.location.protocol + "//" + window.location.hostname;
         var domain_complet = domin + project_survey; 
         var url = window.location.origin;
         //window.onscroll = function() {scrollFunction()};


      </script>
      <!-- End of espindola Zendesk Widget script -->

      <script src="//tag.goadopt.io/injector.js?website_code=7bb59424-366f-4fb1-87e1-ee2cd4ada15c" 
      class="adopt-injector"></script>
   </head>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-PYV2STQCQD"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'G-PYV2STQCQD');
      </script>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-1XMVV042NW"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-1XMVV042NW');
      </script>
   <body>
      @section('sidebar')
      @include('layouts.header_site')
      @show
      @yield('content')
      @yield('footer')
      <div id="fb-root"></div>
      
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0&appId=1504290103179579&autoLogAppEvents=1" nonce="1PVcfdUf"></script>
 
</body>
   <script>
      document.addEventListener("DOMContentLoaded", function() {
    //conteúdo que será compartilhado: Título da página + URL
    var conteudo = encodeURIComponent(document.title + " " + window.location.href);
    //altera a URL do botão
    document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
}, false);
   </script>
   <!-- JavaScript file links -->
   {{ Html::script('js/jquery-3.1.1.min.js') }}
   {{ Html::script('assets/jquery-ui/jquery-ui.min.js') }}
   {{ Html::script('js/bootstrap.min.js') }}
   {{-- {{ Html::script('assets/jquery.serializeJSON/jquery.serializejson.min.js') }} --}}
   {{ Html::script('assets/slick-1.6.0/slick.min.js') }}
   {{ Html::script('js/isotope.min.js') }}
   {{ Html::script('js/wNumb.js') }}
   {{ Html::script('js/nouislider.min.js') }}
   {{ Html::script('js/global.js') }}
   <!-- {{ Html::script('assets/pnotify/dist/pnotify.js') }} -->
   <!-- {{ Html::script('assets/pnotify/dist/pnotify.animate.js') }} -->
   {{ Html::script('assets/ion.rangeSlider-2.2.0/js/ion-rangeSlider/moment-with-locales.js') }}
   {{ Html::script('assets/ion.rangeSlider-2.2.0/js/ion-rangeSlider/ion.rangeSlider.min.js') }}
   {{ Html::script('assets/sumoselect/jquery.sumoselect.min.js') }}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
   
   {{ Html::script('assets/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js') }}
   {{ Html::script('assets/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.pt-BR.js') }}
   {{ Html::script('js/all.js') }}
   {{ Html::script('assets/chosen-1.6.2/chosen.jquery.min.js') }}
   <script type="text/javascript">
      $('[data-toggle="tooltip"]').tooltip();
         //PEGANDO O IP DE ONDE ACESSAR
         ip = '{{ $_SERVER['REMOTE_ADDR'] }}' ;
         //ROTA POR ONDE ESTÁ PASSANDO PELO SITE
         route_loc = '{{ url()->full() }}';
         //ARRAY PARA GUARDAR AS CORRDENADAS
         coordenadas = [];
         //DATA ATUAL
         date_time = '{{ Date('Y-m-d H:i:s') }}';
         //TOKEN DE ACESSO
         token = "{{ csrf_token() }}";
   </script>
   {{ Html::script('js/location.js') }}
   <script type="text/javascript">
      $(function() {
                
      });
      $(document).ready(function () {
         getLocation();    
         $('.slide').addClass('initialized');
    $('.slider.slider-testimonials').slick({
		prevArrow: $('.slider-nav-testimonials .slider-prev'),
		nextArrow: $('.slider-nav-testimonials .slider-next'),
		adaptiveHeight: true
	});
      });
   </script>
   @stack('scripts')
   </body>
</html>