<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">

    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">

            E-COMMERCE TIENDA

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Sobre Nostros</a>
                </li>

                <li class="nav-item">

                    <a class="nav-link" href="{{ route('shop') }}">TIENDA</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tobuy') }}">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" type="button" href="https://api.whatsapp.com/send?phone=5930984581915&text=Hola"  id="boton" onclick="javascript:contador()">chatbot</a>
                </li> 

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cambio de idioma</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ url('/es') }}">Español</a>
                      <a class="dropdown-item" href="{{ url('/en') }}">Ingles</a>
                      <a class="dropdown-item" href="{{ url('/rs') }}">Ruso</a>
                      <div class="dropdown-divider"></div>
                    </div>
                  </li>

                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle"

                       href="#" role="button" data-toggle="dropdown"

                       aria-haspopup="true" aria-expanded="false"

                    >

                        <span class="badge badge-pill badge-dark">

                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}

                        </span>

                    </a>


                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">

                        <ul class="list-group" style="margin: 20px;">

                            @include('partials.cart-drop')

                        </ul>


                    </div>

                </li>

            </ul>

        </div>

    </div>


</nav>

