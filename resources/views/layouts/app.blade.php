<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'E-COMMERCE TIENDA' }}</title>

    <link rel="stylesheet" href={{ url('css/app.css') }}>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script language="javascript">
        var i = 0;

        function contador()
        {
            i = i + 1;
            var btn = document.getElementById("boton");
            var cantHelp= document.getElementById("Help")
            var content = document.createTextNode("El numero de veces accedido al chatbot son : " +i);
            cantHelp.appendChild(document.createElement("br"));
            cantHelp.appendChild(content) ;
            console.log(i);
        }
    </script>
</head>

<body>

<div id="app">

    @include('partials.navbar')

    <main class="py-4">

        @yield('content')

    </main>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
 document.addEventListener('keydown', (event) => {
  if (event.ctrlKey) {
     if (event.keyCode == 65 || event.keyCode == 97) {
        //alert('Puedes usar nuestro chatbot si tienes alguna duda sobre la compra y productos :)');
        window.location.assign("https://api.whatsapp.com/send?phone=5930984581915&text=Hola");
     }
  }
}, false);
</script>
<script>
    var loadTime ;
   window.onload = function () {
    loadTime= window.performance.timing.domContentLoadedEventEnd-window.performance.timing.navigationStart;
    var cantHelp= document.getElementById("Time")
    var content = document.createTextNode("Tiempo de paso de la pagina es de : " +loadTime+ " ms ");
    cantHelp.appendChild(document.createElement("br"));
    cantHelp.appendChild(content) ;
    console.log('Page load time is '+ loadTime + " ms ");
    }

</script>
</body>

</html>
