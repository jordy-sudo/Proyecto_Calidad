@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-sm-6 mt-5">
      <div class="card ml-5">
        <div class="card-body cards ">
            <form action="{{ route('checkout') }}" method="POST">
                {{csrf_field()}}
                <h6>Detalles basicos</h6>
                <hr>
                        <div class="row chechout-form">
                            <div class="col-md-6">
                                <label for="">Primer Nombre</label>
                                <input type="text" class="form-control" name="fname" placeholder="Ingresa tu primer nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Apellido</label>
                                <input type="text" class="form-control" name="lname" placeholder="Ingresa tu primer nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Ingresa tu primer nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Numero Telefono</label>
                                <input type="text" class="form-control" name="phone" placeholder="Ingresa tu primer nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Direccion 1</label>
                                <input type="text" class="form-control" name="address1" placeholder="Ingresa tu primer nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Direccion 2</label>
                                <input type="text" class="form-control" name="address2" placeholder="Ingresa tu primer nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Ciudad</label>
                                <input type="text" class="form-control" name="city" placeholder="Ingresa tu primer nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Parroquia</label>
                                <input type="text" class="form-control" name="state" placeholder="Ingresa tu primer nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Provincia</label>
                                <input type="text" class="form-control" name="country" placeholder="Ingresa tu primer nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Codigo Postal</label>
                                <input type="text" class="form-control" name="pincode" placeholder="Ingresa tu primer nombre" required>
                            </div>
                        </div>
                        <div class="row mt-2" style="margin: 0px;">
                           <input type="submit" value="Comprar" class="btn btn-sm btn-success w-25">
                        </div>
            </form>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 mt-5">
      <div class="card ml-3 ">
        <div class="card-body cards ">
        @if(count(\Cart::getContent()) > 0)

@foreach(\Cart::getContent() as $item)

    <li class="list-group-item">

        <div class="row">

            <div class="col-lg-3">

                <img src="/images/{{ $item->attributes->image }}"

                     style="width: 50px; height: 50px;"

                >

            </div>

            <div class="col-lg-6">

                <b>{{$item->name}}</b>

                <br><small>Qty: {{$item->quantity}}</small>

            </div>

            <div class="col-lg-3">

                <p>${{ \Cart::get($item->id)->getPriceSum() }}</p>

            </div>

            <hr>

        </div>

    </li>

@endforeach

<br>

<li class="list-group-item">

    <div class="row">

        <div class="col-lg-10">

            <b>Total: </b>${{ \Cart::getTotal() }}

        </div>

        <div class="col-lg-2">

            <form action="{{ route('cart.clear') }}" method="POST">

                {{ csrf_field() }}

                <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>

            </form>

        </div>

    </div>

</li>

<br>


@else

<li class="list-group-item">Tu carrito esta vacío</li>

@endif

        </div>
      </div>
    </div>
  </div>
  <p class="timertext mt-4" 
  style="font-size: 1.5rem;">
  Tiempo empleado en la compra
  <span class="secs"></span> seconds.
</p>





@endsection
