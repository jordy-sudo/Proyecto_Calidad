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
</div>
@endsection
