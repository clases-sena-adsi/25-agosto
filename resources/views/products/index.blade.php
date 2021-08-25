@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm mb-3 mt-3">Crear nuevo producto</a>
        <div class="table-responsive">
            <table class="table ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>FECHA VENCIMIENTO</th>
                    <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id  }}</td>
                        <td>{{ $product->name  }}</td>
                        <td>{{ $product->due_date  }}</td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('products.show',$product->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
