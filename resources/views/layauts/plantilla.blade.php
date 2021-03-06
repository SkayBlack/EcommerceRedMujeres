<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--Fonts Owesome-->
  <script src="https://kit.fontawesome.com/a90a3a7cfe.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="{!!asset('css/estiloHome.css') !!}">
  <link rel="stylesheet" href="{!!asset('css/caracteristicas.css') !!}">
  <link rel="stylesheet" href="{!!asset('css/login.css')!!}">
  <link rel="stylesheet" href="{!!asset('css/perfil.css')!!}">
  <link rel="shortcut icon" href="{{asset('images/icons/icons/Logo Mercado.ico')}}" type="image/x-icon">
  <title>@yield('title')</title>
</head>

<body>
  @yield('header')

  <!-- ######################## main ####################### -->

  @yield('main')


  <footer class="row container">
    <div class="col ">
      <p style="font-size: 10px">Red Municipal de Mujeres. &copy</p>
    </div>
    <div class=" row">
      <div class="d-flex align-items-center">
        <p style="font-size: 10px;">
          con el apoyo de:
        </p>
      </div>
      <div>
        {{--

        <img src="{{asset('images/umg.png')}}" style="width: 2rem;" alt="">
        --}}
        <img src="{{asset('images/icons/Logo Municipalida.png')}}" style="width: 2rem;" alt="">
      </div>
    </div>
  </footer>
  <!-- Optional JavaScript; choose one of the two! -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>

  <!--My Scrip JS-->
  <script src="{{asset('js/uploadFile.js')}}"></script>

  @yield('scripts')

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    // ga('create', 'UA-G-7MWHRH6ZWL', 'auto');
    ga('config', 'UA-G-7MWHRH6ZWL',{'debug_mode':true});
    ga('send', 'pageview');
  </script>
  <!-- End Google Analytics -->
</body>

</html>