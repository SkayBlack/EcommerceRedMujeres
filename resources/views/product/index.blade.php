@extends('layauts.plantilla')

@section('title','Ingresar Producto')

@section('header')
<header class="text-center ">
    <img src="{{asset('images/icons/icons/LogoMercado.png')}}" class="img img-fluid" alt="">
    <img src="{{asset('images/icons/icons/medianologopnggrande.ico')}}" class="img img-fluid" alt="">
</header>
@endsection

@section('main')
<div class="container">

    <a href="{{route('product.create') }}" class="btn btn-primary">
        <ion-icon name="add"></ion-icon> Nuevo producto
    </a>

    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show " role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>
<table class="table container my-3 text-center">
    <thead>
        <tr class="">
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Tamaño</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Imagen</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr class="">
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->description}}</td>
            <td>{{ $product->images}}</td>
            <td class="row">
                <div class="col-md-5 mx-1">
                    <a href="{{url('product/'.$product->id.'/edit')}}" class="btn btn-secondary ">
                        <ion-icon name="create"></ion-icon>
                    </a>
                </div>
                <div class="col-md-5 mx-1">
                    <form action="{{ url('product/'.$product->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('Deseas borrar el prducto')" value="borrar"
                            class="btn btn-danger">
                            <ion-icon name="close"></ion-icon>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection