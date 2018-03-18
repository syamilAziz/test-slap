<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app_lumen.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    

   <link href="{{ asset('storage/slide/Petronas-icon.ico') }}" rel="icon">

   <style type="text/css">
    .carousel{
        background: #2f4357;
        margin-top: 20px;
    }
    .carousel .item{
        min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
    }
    .carousel .item img{
        margin: 0 auto; /* Align slide image horizontally center */
    }
    .bs-example{
        margin: 0px;
    }
    .center {
    margin: auto;
    width: 60%;
    }
    </style>

  
   

</head>
<body>

        <style>
                body {
                    background-color: #0DB6A4;
                }
            </style>
            
        <div id="app">
            @include('inc.navbar')
            <div class="container">
                    
                    @yield('content')
                    @include('layouts.slide')
                    

                   
            </div>
        </div>

           

        <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}"></script>
  
   <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
   <script>
       CKEDITOR.replace( 'article-ckeditor' );
   </script>

   
 

</body>
</html>