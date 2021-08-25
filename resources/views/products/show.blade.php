@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td>NOMBRE</td>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <td>DESCRIPCIÓN</td>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <td>FECHA DE VENCIMIENTO</td>
                        <td>{{  $product->due_date }}</td>
                    </tr>
                    </thead>
                </table>
                <a href="{{ route('products.index') }}" class="btn btn-info btn-sm">Volver al inicio</a>
                <a href="" class="btn btn-warning btn-sm">Editar producto</a>
            </div>
        </div>
    </div>

@endsection
