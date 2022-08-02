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
    <script language="JavaScript">
        function CambioTexto(){
        var e=document.getElementsByTagName("p");
        var x=document.getElementById("valor");
        for (var i = 0; i < e.length; i++){
        if (x.options[x.selectedIndex].text=="elige"){return false}
        e[i].style.fontSize=x.options[x.selectedIndex].text+"px";
        e[i].style.fontFamily="Arial";
        e[i].style.color="#ff0000";
        }
        }
        </script>   

        <script>
            var session = localStorage.getItem("TotalSesion");
            var err = localStorage.getItem("Error");
            function profileTest(callback) {      
            let i = 0;
            let work = setInterval(function() {         
                if(i == 3) {
                    callback();
                    clearInterval(work);        
                    return;     
                }
                console.log('Doing some work..');
                localStorage.setItem("TotalSesion",JSON.parse(session)+1)
                i = i + 1;
            }, 1000);
                
            }
            console.profile("profileTest()");
            profileTest(function(){
            console.profileEnd();
             //localStorage.setItem("Rabandon",JSON.parse(nSession)+1);
                var cantHelp= document.getElementById("totalesSeesion")
                var content = document.createTextNode(session);
                cantHelp.appendChild(content) ;

                var error= document.getElementById("Error")
                var errContent = document.createTextNode(err);
                error.appendChild(errContent) ;



            });
            //document.getElementById("totalesSeesion").innerHTML = nSession;
            
        </script>
        <script src=
        "https://code.jquery.com/jquery-3.4.1.min.js">
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
     if (event.keyCode == 81) {
        //alert('Puedes usar nuestro chatbot si tienes alguna duda sobre la compra y productos :)');
        window.location.assign("/cart");
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

<script>
     var il = localStorage.getItem("Rabandon");
   
    function contadorTotal()
    {
        console.log('este valor es el q se muestrs'+il);
        localStorage.setItem("Rabandon",JSON.parse(il)+1);
        console.log(il);
    }
    var cantHelp= document.getElementById("TotalIdent")
    var content = document.createTextNode("El numero de veces accedido a la pagina de pagos es : " +il);
    cantHelp.appendChild(document.createElement("br"));
    cantHelp.appendChild(content) ;

    var totalSessiones = localStorage.getItem('TotalSesion');
    var notransaccion = totalSessiones - il; 
    var sinTransacc = document.getElementById("TotalNoTran")
    var contentNotransacc = document.createTextNode("Número de sesiones de trabajo diarias abandonadas sin ninguna transacción completada : " +notransaccion);
    sinTransacc.appendChild(document.createElement("br"));
    sinTransacc.appendChild(contentNotransacc);
</script>
<script type="text/javascript">
    var currSeconds = 0;
      
    $(document).ready(function() {

        /* Increment the idle time
            counter every second */
        let idleInterval =
            setInterval(timerIncrement, 1000);

        /* Zero the idle timer
            on mouse movement */
        //$(this).mousemove(resetTimer);
        $(this).keypress(resetTimer);
    });

    function resetTimer() {

        /* Hide the timer text */
        document.querySelector(".timertext")
            .style.display = 'none';
          
        currSeconds = 0;
    }
    var tiempoTransacc =localStorage.getItem("Time");
    function timerIncrement() {
        currSeconds = currSeconds + 1;

        /* Set the timer text to
            the new value */
        document.querySelector(".secs")
            .textContent = currSeconds;

        /* Display the timer text */
        document.querySelector(".timertext")
            .style.display = 'block';
        
        localStorage.setItem("Time",JSON.parse(currSeconds));
    }
    var timeTra= document.getElementById("timeTra")
    var contenttime = document.createTextNode("Tiempo : " +tiempoTransacc+"  s");
    timeTra.appendChild(document.createElement("br"));
    timeTra.appendChild(contenttime) ;
</script>
</body>

</html>
