@extends('layouts.app')
@section('content')
@parent
<div class="container">
    <table class="table mt-5 table-striped">
        <p class="mt-5">Pedidos no completados</p>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Codigo</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
    @foreach ( $orders as $order)
        <tbody>
          <tr>
            <th scope="row">{{ $order->id }}</th>
            <td>{{ $order->fname }}</td>
            <td>{{ $order->address1 }}</td>
            <td>{{ $order->pincode }}</td>
            <td>{{ $order->status }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
      <hr>
      <table class="table mt-5 table-striped">
        <p class="mt-5">Pedidos completados</p>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Codigo</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
    @foreach ( $sucess as $order)
        <tbody>
          <tr>
            <th scope="row">{{ $order->id }}</th>
            <td>{{ $order->fname }}</td>
            <td>{{ $order->address1 }}</td>
            <td>{{ $order->pincode }}</td>
            <td>{{ $order->status }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
      <hr>
      <div class="card">
        <div class="card-header">
          Cantidad de veces ingresadas en botones de ayuda
        </div>
        <div class="card-body">
          <p class="card-text" id="Help" value=""><br></p>
        <br/>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          Tiempo empleado cambio de pagina
        </div>
        <div class="card-body">
            <p class="card-text" id="Time" value=""><br></p>
        <br/>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          Numero de sesiones accedidas al pago
        </div>
        <div class="card-body">
            <p class="card-text" id="TotalIdent" value=""><br></p>
        <br/>
        </div>
      </div>

      
      <div class="card">
        <div class="card-header">
          Número de sesiones de diarias
        </div>
        <div class="card-body">
            <p class="card-text" id="TotalNoTran" value=""><br></p>
        <br/>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          Número de tiempo de transaccion
        </div>
        <div class="card-body">
            <p class="card-text" id="timeTra" value=""><br></p>
        <br/>
        </div>
      </div>
       <!-- Tabla de sesiones -->

       <table class="table table-dark mt-3">
        <thead>
          <tr>
            <th scope="col">sesiones totales</th>
            <th scope="col">sesiones abandonadas</th>
            <th scope="col">errores</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><label type="text" id="totalesSeesion" value=""></label><br></td></th>
            <td><label type="text" id="abandonos"></label><br></td>
            <td><label type="text" id="Error"></label><br></td></td>
          </tr>
        </tbody>
      </table>
</div>
@endsection
