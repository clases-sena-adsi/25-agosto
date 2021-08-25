@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('products.store') }}" method="post">
                @csrf
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td>NOMBRE</td>
                            <td>
                                <input type="text" class="form-control" name="name" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>DESCRIPCIÓN</td>
                            <td>
                                <input type="text" class="form-control" name="description"
                                       value="">
                            </td>
                        </tr>
                        <tr>
                            <td>FECHA DE VENCIMIENTO</td>
                            <td>
                                <input type="date" class="form-control" name="due_date"
                                       value="">
                            </td>
                        </tr>
                        </thead>
                    </table>

                    <button type="submit" class="btn btn-warning btn-sm">Crear nuevo registro</button>
                    |
                    <a href="{{ route('products.index') }}" class="btn btn-info btn-sm">Volver al inicio</a>
                </div>
            </form>
        </div>
    </div>

@endsection
