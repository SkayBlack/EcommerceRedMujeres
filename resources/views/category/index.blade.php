@extends('layouts.app')

@section('title', 'Categorias')

@section('main')
<div>
    <a href="{{route('category.create')}}" class="btn btn-primary">nueva categoria</a>
</div>


<div class="table">
    <table class="table container my-3 text-center">
        <thead>
            <tr class="">
                <th scope="col-2">#</th>
                <th scope="col-7">Nombre</th>
                <th scope="col-3 col-sm-12">opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr class="">
                <th class="col-2">{{ $category->id }}</th>
                <td class="col-7">{{ $category->name }}</td>
                <td class="col-3 col-sm-12">
                    <div class="row ">

                        <div class="col">
                            <a title="Editar Producto" href="{{ route('category.edit', $category->id) }}"
                                class="btn btn-secondary my-1 mx-1 ">
                                <ion-icon name="pencil" title="Editar Producto"></ion-icon>
                            </a>
                        </div>
                        
                        <div class="col">
                            <a title="Detalles" href="{{ route('product.show', $category->id) }}" class="btn btn-secondary ">
                                <ion-icon name="eye" title="Detalles"></ion-icon>
                            </a>
                        </div>
                        
                        <div class="col">
                            <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button title="Borrar" type="submit" onclick="return confirm('Deseas borrar el prducto')"
                                    value="borrar" class="btn btn-danger my-1 mx-1">
                                    <ion-icon name="close"></ion-icon>
                                </button>
                            </form>
                        </div>
                    
                    </div>
                </td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection